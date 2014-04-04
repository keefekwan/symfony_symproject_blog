<?php
// src/General/SymProjectBundle/Services/Pagination.php

namespace General\SymProjectBundle\Services;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Bundle\DoctrineBundle\Registry;

class Pagination
{
    protected $request;

    public function __construct(RequestStack $requestStack, Registry $doctrine)
    {
        $this->request = $requestStack->getCurrentRequest();
        $this->doctrine = $doctrine;
    }

    public function pagination()
    {
        $page = $this->request->query->get('page');

        $count_per_page = 5;
        $total_count = $this->getTotalBlogs();
        $total_pages = ceil($total_count/$count_per_page);

        if (!is_numeric($page)) {
            $page = 1;
        } else {
            $page = floor($page);
        }

        if ($total_count <= $count_per_page) {
            $page = 1;
        }

        if (($page * $count_per_page) > $total_count) {
            $page = $total_pages;
        }

        $offset = 0;

        if ($page > 1) {
            $offset = $count_per_page * ($page - 1);
        }

        $em = $this->doctrine->getManager();

        $blogQuery = $em->createQueryBuilder()
            ->select('b')
            ->from('GeneralSymProjectBundle:Blog', 'b')
            ->addOrderBy('b.created', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($count_per_page);

        $blogFinalQuery = $blogQuery->getQuery();

        $blogPage = $blogFinalQuery->getArrayResult();

        foreach ($blogPage as $blog) {
            $blog_id = $blog['id'];
            $commentRepository = $this->doctrine
                ->getRepository('GeneralSymProjectBundle:Comment');

            $comments[] = $commentRepository->findByBlog($blog_id);
        }

//        exit(\Doctrine\Common\Util\Debug::dump($comments));

        return array(
            'blogPage'     => $blogPage,
            'total_pages'  => $total_pages,
            'current_page' => $page,
            'comments'     => $comments,
        );
    }

    public function getTotalBlogs()
    {
        $em = $this->doctrine->getManager();

        $countQuery = $em->createQueryBuilder()
            ->select('Count(b)')
            ->from('GeneralSymProjectBundle:Blog', 'b');

        $finalQuery = $countQuery->getQuery();

        $total = $finalQuery->getSingleScalarResult();

        return $total;
    }
}