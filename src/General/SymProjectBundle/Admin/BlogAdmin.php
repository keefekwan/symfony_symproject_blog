<?php
// src/General/SymProjectBundle/Admin/BlogAdmin.php

namespace General\SymProjectBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use General\SymProjectBundle\Entity\Blog;

class BlogAdmin extends Admin
{
    // Setup the default sort column and order
    protected $datagridvalues = array(
        '_sort_order' => 'DESC',
        '_sort_by'    => 'name',
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('author')
            ->add('blog')
            ->add('image')
            ->add('tags')
            ->add('created')
            ->add('updated')
            ->add('slug')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('author')
            ->add('blog')
            ->add('image')
            ->add('tags')
            ->add('created')
            ->add('updated')
            ->add('slug')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('author')
            ->add('blog')
            ->add('image')
            ->add('tags')
            ->add('created')
            ->add('updated')
            ->add('slug')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view'   => array(),
                    'edit'   => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    public function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title')
            ->add('author')
            ->add('blog')
            ->add('image')
            ->add('tags')
            ->add('created')
            ->add('updated')
            ->add('slug')
        ;
    }

}