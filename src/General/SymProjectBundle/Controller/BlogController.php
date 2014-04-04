<?php
// src/GeneralSymProjectBundle/Controller/BlogController.php

namespace General\SymProjectBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    public function showAction($id, $slug)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('GeneralSymProjectBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find blog post');
        }

        $comments = $em->getRepository('GeneralSymProjectBundle:Comment')
            ->getComments($blog->getId());

//        exit(\Doctrine\Common\Util\Debug::dump($comments));

        return $this->render('GeneralSymProjectBundle:Default:show.html.twig', array(
            'blog'         => $blog,
            'comments'     => $comments,
        ));

    }

    public function getTotalBlogs()
    {
        $em = $this->getDoctrine()->getManager();

        $countQuery = $em->createQueryBuilder()
            ->select('Count(b)')
            ->from('GeneralSymProjectBundle:Blog', 'b');

        $finalQuery = $countQuery->getQuery();

        $total = $finalQuery->getSingleScalarResult();

        return $total;
    }

    public function archiveAction($year = null, $month = null)
    {
        $em = $this->getDoctrine()->getManager();

        $blogs = $em->getRepository('GeneralSymProjectBundle:Blog')
            ->getPostsByMonth($year, $month);

        if (!$blogs) {
            throw $this->createNotFoundException('Unable to find blog posts');
        }

        return $this->render('GeneralSymProjectBundle:Default:archive.html.twig', array(
            'blogs'     => $blogs,
        ));
    }
}