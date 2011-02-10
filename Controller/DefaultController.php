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

/**
 * DefaultController
 * 
 * @author Michael Williams <michael.williams@funsational.com>
 *
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimpleBlogBundle:Default:index.twig.html');
    }
}
