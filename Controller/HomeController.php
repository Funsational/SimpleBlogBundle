<?php

/*
 * This file is part of the Funsational, Inc Project.
 *
 * (c) Funsational, Inc <it@funsational.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */

namespace Funsational\SimpleBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Funsational\SimpleBlogBundle\Document\Post;

use Funsational\SimpleBlogBundle\Entity\User;

/**
 * HomeController
 * 
 * @author Michael Williams <michael.williams@funsational.com>
 *
 */
class HomeController extends Controller
{
    public function indexAction()
    {    	
    	$user = new User();
    	
    	$em = $this->get('doctrine.orm.entity_manager');
        $em->persist($user);
        $em->flush();
    	
        $post = new Post();
        
        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        $dm->persist($post);
        $dm->flush();
        
        
        return $this->render('SimpleBlogBundle:Default:index.twig.html');
    }
}
