<?php
// src/General/SymProjectBundle/Controller/CommentController.php

namespace General\SymProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use General\SymProjectBundle\Entity\Comment;
use General\SymProjectBundle\Form\CommentType;

/**
 * Comment Controller
 */
class CommentController extends Controller
{
    public function newAction($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment = new Comment();
        $comment->setBlog($blog);
        $form = $this->createForm(new CommentType(), $comment);

        return $this->render('GeneralSymProjectBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView(),
        ));
    }

    public function createAction($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment = new Comment();
        $comment->setBlog($blog);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form = $this->createForm(new CommentType(), $comment);
        $form->submit($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($comment);

            $em->flush();

            return $this->redirect($this->generateURL('general_sym_project_show', array(
                'id'   => $comment->getBlog()->getId(),
                'slug' => $comment->getBlog()->getSlug())) .
                '#comment' . $comment->getId()
            );
        }

        return $this->render('GeneralSymProjectBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView(),
        ));
    }

    public function getBlog($blog_id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('GeneralSymProjectBundle:Blog')->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find blog post');
        }

        return $blog;
    }

}

