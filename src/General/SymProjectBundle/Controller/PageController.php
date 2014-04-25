<?php
// src/General/SymProjectBundle/Controller/PageController.php

namespace General\SymProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        // Search function using code from Services/Search.php
        $query = $this->get('search');
        $results = $query->search();

        // Pagination code using Services/Pagination.php
        $pagination = $this->container->get("pagination");
        $pagination = $pagination->Pagination();

        return $this->render('GeneralSymProjectBundle:Default:index.html.twig', array(
            'query'           => $query,
            'results'         => $results,
            'pagination_data' => $pagination,
        ));
    }

    public function aboutAction()
    {
        return $this->render('GeneralSymProjectBundle:Default:about.html.twig');
    }

    public function sidebarAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('GeneralSymProjectBundle:Blog')
            ->getTags();

        $tagWeights = $em->getRepository('GeneralSymProjectBundle:Blog')
            ->getTagWeights($tags);

        return $this->render('GeneralSymProjectBundle:Page:sidebar.html.twig', array(
            'tags' => $tagWeights,
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

    public function searchAction()
    {
        // Search code: calling from the service Search
        $query = $this->get('search');
        $results = $query->search();

        return $this->render('GeneralSymProjectBundle:Default:search.html.twig', array(
            'query'        => $query,
            'results'      => $results['results'],
        ));
    }

    public function tagAction($tag = null)
    {
        $em = $this->getDoctrine()->getManager();

        $blogs = $em->getRepository('GeneralSymProjectBundle:Blog')
            ->getPostsByTags($tag);

        if (!$blogs) {
            throw $this->createNotFoundException('Unable to find blog posts');
        }

        return $this->render('GeneralSymProjectBundle:Page:tag.html.twig', array(
            'blogs' => $blogs,
        ));
    }

}
