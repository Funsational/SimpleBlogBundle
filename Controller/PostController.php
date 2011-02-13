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
use Funsational\SimpleBlogBundle\Model\Post;

/**
 * PostController
 * 
 * @author Michael Williams <michael.williams@funsational.com>
 *
 */
class PostController extends Controller
{
    public function newAction()
    {
    	$form = $this->get('simple_blog.form.post');

        return $this->render('SimpleBlogBundle:Post:new.twig.html', array(
            'form'  => $form
        ));
    }
    
    public function createAction()
    {
    	$post = $this->get('simple_blog.repository.post')->createNewPost();
        $form = $this->get('simple_blog.form.post');
        $form->bind($this->get('request'), $post);

        if(!$form->isValid()) {
        	return $this->render('SimpleBlogBundle:Post:new.twig.html', array(
                'form'  => $form
            ));
        }

        $post = $form->getData();

//        $this->get('forum.creator.post')->create($post);
//        $this->get('forum.blamer.post')->blame($post);

        $objectManager = $this->get('simple_blog.object_manager');
        $objectManager->persist($post);
        $objectManager->flush();

        $url = '/blog';
        $response = $this->redirect($url);

        return $response;
    }
}
