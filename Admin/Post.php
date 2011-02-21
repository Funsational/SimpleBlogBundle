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

namespace Funsational\SimpleBlogBundle\Admin;

use Bundle\Sonata\BaseApplicationBundle\Admin\Admin;
use Sonata\BaseApplicationBundle\Form\FormMapper;
use Sonata\BaseApplicationBundle\Datagrid\DatagridMapper;
use Sonata\BaseApplicationBundle\Datagrid\ListMapper;

class PostAdmin extends Admin
{
    protected $class = 'Funsational\SimpleBlogBundle\Document\Post';
    protected $baseControllerName = 'SonataNewsBundle:PostAdmin';
}