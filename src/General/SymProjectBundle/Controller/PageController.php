<?php
// src/General/SymProjectBundle/Controller/PageController.php

namespace General\SymProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use General\SymProjectBundle\Services\Search;

class PageController extends Controller
{
    public function indexAction()
    {
        // Search code calling from service search
        $query = $this->get('search');
        $results = $query->search();

        // Pagination code
        $pagination = $this->container->get("pagination");
        $pagination = $pagination->Pagination();

//        exit(\Doctrine\Common\Util\Debug::dump($blogPage));

        return $this->render('GeneralSymProjectBundle:Default:index.html.twig', array(
            'query'        => $query,
            'results'      => $results,
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

    public function searchAction(Request $request)
    {
        // Search code: calling from the service Search
        $query = $this->get('search');
        $results = $query->search();

        return $this->render('GeneralSymProjectBundle:Default:search.html.twig', array(
            'query'        => $query,
            'results'      => $results['results'],
        ));
    }
}