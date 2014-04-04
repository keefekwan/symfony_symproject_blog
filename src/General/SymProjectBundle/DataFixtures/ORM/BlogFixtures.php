<?php
// src/General/SymProjectBundle/DataFixtures/ORM/BlogFixtures.php

namespace General\SymProjectBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use General\SymProjectBundle\Entity\Blog;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $blog = new Blog();
        $blog->setTitle('Ready for prime time!!!');
        $blog->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog->setImage('practice.jpg');
        $blog->setAuthor('KK');
        $blog->setTags('symfony, php, blog, help, perserverance, symproject, hard work, learning experience, good will, helpers');
        $blog->setCreated(new \DateTime());
        $blog->setUpdated($blog->getCreated());
        $em->persist($blog);

        $blog1 = new Blog();
        $blog1->setTitle('Finally with help');
        $blog1->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog1->setImage('practice.jpg');
        $blog1->setAuthor('KK');
        $blog1->setTags('symfony, php, blog, help, perserverance, symproject, hard work, learning experience, good will, helpers');
        $blog1->setCreated(new \DateTime('2014-03-31 01:01:12'));
        $blog1->setUpdated($blog1->getCreated());
        $em->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('Practice makes perfect');
        $blog2->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog2->setImage('practice.jpg');
        $blog2->setAuthor('KK');
        $blog2->setTags('symfony, php, blog, practice, perfection, perserverance, symproject, hard work');
        $blog2->setCreated(new \DateTime('2014-03-26 12:34:21'));
        $blog2->setUpdated($blog2->getCreated());
        $em->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Another blog post');
        $blog3->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog3->setImage('practice.jpg');
        $blog3->setAuthor('KK');
        $blog3->setTags('symfony, php, blog, dummy text, fantasy, features, symproject');
        $blog3->setCreated(new \DateTime('2014-02-01 02:01:01'));
        $blog3->setUpdated($blog3->getCreated());
        $em->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('Yet again, another post');
        $blog4->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog4->setImage('practice.jpg');
        $blog4->setAuthor('KK');
        $blog4->setTags('symfony, php, blog, css, web-development, html, wip, framework');
        $blog4->setCreated(new \DateTime('2014-02-28 07:17:13'));
        $blog4->setUpdated($blog4->getCreated());
        $em->persist($blog4);

        $blog5 = new Blog();
        $blog5->setTitle('Lorem Ipsum');
        $blog5->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog5->setImage('practice.jpg');
        $blog5->setAuthor('KK');
        $blog5->setTags('symfony, php, blog, css, web-development, html, wip, framework');
        $blog5->setCreated(new \DateTime('2014-01-13 03:27:12'));
        $blog5->setUpdated($blog5->getCreated());
        $em->persist($blog5);

        $blog6 = new Blog();
        $blog6->setTitle('Lorem Ipsum');
        $blog6->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog6->setImage('practice.jpg');
        $blog6->setAuthor('KK');
        $blog6->setTags('symfony, php, blog, css, web-development, html, wip, framework');
        $blog6->setCreated(new \DateTime('2013-12-21 07:07:07'));
        $blog6->setUpdated($blog6->getCreated());
        $em->persist($blog6);

        $blog7 = new Blog();
        $blog7->setTitle('No baggage, travel light');
        $blog7->setBlog('How much does your life weigh? Imagine for a second that you\'re carrying a backpack. I want you to pack it with all the stuff that you have in your life... you start with the little things. The shelves, the drawers, the knickknacks, then you start adding larger stuff. Clothes, tabletop appliances, lamps, your TV... the backpack should be getting pretty heavy now. You go bigger. Your couch, your car, your home... I want you to stuff it all into that backpack. Now I want you to fill it with people. Start with casual acquaintances, friends of friends, folks around the office... and then you move into the people you trust with your most intimate secrets. Your brothers, your sisters, your children, your parents and finally your husband, your wife, your boyfriend, your girlfriend. You get them into that backpack, feel the weight of that bag. Make no mistake your relationships are the heaviest components in your life. All those negotiations and arguments and secrets, the compromises. The slower we move the faster we die. Make no mistake, moving is living. Some animals were meant to carry each other to live symbiotically over a lifetime. Star crossed lovers, monogamous swans. We are not swans. We are sharks.');
        $blog7->setImage('practice.jpg');
        $blog7->setAuthor('KK');
        $blog7->setTags('symfony, php, blog, practice, web-development, backend, bootstrap, web, baggage, travel');
        $blog7->setCreated(new \DateTime('2013-11-04 09:22:21'));
        $blog7->setUpdated($blog7->getCreated());
        $em->persist($blog7);

        $blog8 = new Blog();
        $blog8->setTitle('Hope');
        $blog8->setBlog('We are here to make limbo tolerable, to ferry wounded souls across the river of dread until the point where hope is dimly visible. Then stop the boat, shove them in the water and make them swim.');
        $blog8->setImage('practice.jpg');
        $blog8->setAuthor('KK');
        $blog8->setTags('symfony, php, blog, practice, web-development, backend, bootstrap, web, hope');
        $blog8->setCreated(new \DateTime('2013-10-31 11:25:13'));
        $blog8->setUpdated($blog8->getCreated());
        $em->persist($blog8);

        $blog9 = new Blog();
        $blog9->setTitle('Perpetual motion');
        $blog9->setBlog('Tonight most people will be welcomed home by jumping dogs and squealing kids. Their spouses will ask about their day, and tonight they\'ll sleep. The stars will wheel forth from their daytime hiding places; and one of those lights, slightly brighter than the rest, will be my wingtip passing over.');
        $blog9->setImage('practice.jpg');
        $blog9->setAuthor('KK');
        $blog9->setTags('symfony, php, blog, practice, web-development, bootstrap, movement, flying, light');
        $blog9->setCreated(new \DateTime('2013-10-30 04:45:22'));
        $blog9->setUpdated($blog9->getCreated());
        $em->persist($blog9);

        $blog10 = new Blog();
        $blog10->setTitle('Hope');
        $blog10->setBlog('We are here to make limbo tolerable, to ferry wounded souls across the river of dread until the point where hope is dimly visible. Then stop the boat, shove them in the water and make them swim.');
        $blog10->setImage('practice.jpg');
        $blog10->setAuthor('KK');
        $blog10->setTags('symfony, php, blog, practice, web-development, backend, bootstrap, web, hope');
        $blog10->setCreated(new \DateTime('2013-09-11 11:25:13'));
        $blog10->setUpdated($blog10->getCreated());
        $em->persist($blog10);

        $blog11 = new Blog();
        $blog11->setTitle('Lorem Ipsum');
        $blog11->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog11->setImage('practice.jpg');
        $blog11->setAuthor('KK');
        $blog11->setTags('symfony, php, blog, practice, web-development, web, empire');
        $blog11->setCreated(new \DateTime('2013-08-24 01:54:25'));
        $blog11->setUpdated($blog11->getCreated());
        $em->persist($blog11);

        $blog12 = new Blog();
        $blog12->setTitle('Lorem Ipsum');
        $blog12->setBlog('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
        $blog12->setImage('practice.jpg');
        $blog12->setAuthor('KK');
        $blog12->setTags('symfony, php, blog, practice, perfect, dummy text, filler, web, rocks');
        $blog12->setCreated(new \DateTime('2013-07-16 16:14:01'));
        $blog12->setUpdated($blog12->getCreated());
        $em->persist($blog12);

        $blog13 = new Blog();
        $blog13->setTitle('Opportunity awaits');
        $blog13->setBlog('Anybody who ever built an empire, or changed the world, sat where you are now. And it\'s *because* they sat there that they were able to do it.');
        $blog13->setImage('practice.jpg');
        $blog13->setAuthor('KK');
        $blog13->setTags('symfony, php, blog, practice, web-development, web, empire');
        $blog13->setCreated(new \DateTime('2013-06-06 10:34:12'));
        $blog13->setUpdated($blog13->getCreated());
        $em->persist($blog13);

        $em->flush();

        $this->addReference('blog', $blog);
        $this->addReference('blog-1', $blog1);
        $this->addReference('blog-2', $blog2);
        $this->addReference('blog-3', $blog3);

    }

    public function getOrder()
    {
        return 1;
    }
}