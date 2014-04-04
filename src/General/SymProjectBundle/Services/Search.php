<?php
// src/General/SymProjectBundle/Services/Search.php

namespace General\SymProjectBundle\Services;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Bundle\DoctrineBundle\Registry;

class Search
{
    protected $request;

    public function __construct(RequestStack $requestStack, Registry $doctrine)
    {
        $this->request = $requestStack->getCurrentRequest();
        $this->doctrine = $doctrine;
    }

    public function search()
    {
        $results = null;
        $query = $this->request->query->get('q');

        if (!empty($query)) {
            $em = $this->doctrine->getManager();


            $results = $em->createQueryBuilder()
                ->from('GeneralSymProjectBundle:Blog', 'b')
                ->select('b')
                ->where('b.title LIKE :search')
                ->setParameter('search', "%${query}%")
                ->getQuery()
                ->getResult();
        }
//        exit(\Doctrine\Common\Util\Debug::dump($results));
        return array(
            'query'   => $query,
            'results' => $results,
        );
    }
}