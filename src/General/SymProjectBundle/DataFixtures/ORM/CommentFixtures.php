<?php
// src/General/SymProjectBundle/DataFixtures/ORM/CommentFixtures.php

namespace General\SymProjectBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use General\SymProjectBundle\Entity\Comment;
use General\SymProjectBundle\Entity\Blog;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $comment = new Comment();
        $comment->setUser('radman');
        $comment->setComment('To make a long story short. You can\'t go wrong by doing things over and over and over again.');
        $comment->setBlog($em->merge($this->getReference('blog')));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('johndoe');
        $comment->setComment('Practice is a virtue!');
        $comment->setBlog($em->merge($this->getReference('blog')));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('starfox');
        $comment->setComment('We\'re talking about practice. I mean listen, we\'re sitting here talking about practice, not a game, not a game, not a game, but we\'re talking about practice. Not the game that I go out there and die for and play every game like it\'s my last but we\'re talking about practice man." --Iverson would go on to say practice over 20 times in a two-minute period.');
        $comment->setBlog($em->merge($this->getReference('blog')));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('jennifer');
        $comment->setComment('I could use more practice, if only I had the time. :p');
        $comment->setBlog($em->merge($this->getReference('blog')));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Gill');
        $comment->setComment('I win! ');
        $comment->setBlog($em->merge($this->getReference('blog-1')));
        $comment->setCreated(new \DateTime("2013-07-23 06:15:20"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Bill');
        $comment->setComment('Are you challenging me? ');
        $comment->setBlog($em->merge($this->getReference('blog-1')));
        $comment->setCreated(new \DateTime("2013-07-23 06:15:20"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Don');
        $comment->setComment('Name your stakes.');
        $comment->setBlog($em->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2013-07-23 06:18:35"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('William');
        $comment->setComment('If I win, you become my slave.');
        $comment->setBlog($em->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2013-07-23 06:22:53"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Doofus');
        $comment->setComment('Your SLAVE?');
        $comment->setBlog($em->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2013-07-23 06:25:15"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kal');
        $comment->setComment('You wish! You\'ll do shitwork, scan, crack copyrights...');
        $comment->setBlog($em->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2013-07-23 06:46:08"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Don');
        $comment->setComment('And if I win?');
        $comment->setBlog($em->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2013-07-23 10:22:46"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Joseph');
        $comment->setComment('Make it my first-born!');
        $comment->setBlog($em->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2013-07-23 11:08:08"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Wade');
        $comment->setComment('Make it our first-date!');
        $comment->setBlog($em->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2013-07-24 18:56:01"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Karine');
        $comment->setComment('I don\'t DO dates. But I don\'t lose either, so you\'re on!');
        $comment->setBlog($em->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2013-07-25 22:28:42"));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Steve');
        $comment->setComment('It\'s not gonna end like this.');
        $comment->setBlog($em->merge($this->getReference('blog-3')));
        $em->persist($comment);

        $comment = new Comment();
        $comment->setUser('Gus');
        $comment->setComment('Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.');
        $comment->setBlog($em->merge($this->getReference('blog-3')));
        $em->persist($comment);

        $em->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}