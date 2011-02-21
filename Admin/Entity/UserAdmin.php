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

namespace Funsational\SimpleBlogBundle\Admin\Entity;

use Sonata\BaseApplicationBundle\Admin\EntityAdmin as Admin;

class UserAdmin extends Admin
{
    protected $maxPerPage = 25;
    
    protected $class = 'Funsational\SimpleBlogBundle\Entity\User';

    protected $list = array(
        'username' => array('identifier' => true),
        'email',
//        'enabled',
//        'locked',
//        'createdAt',
    );

    protected $form = array(
        'username',
        'email',
//        'enabled',
//        'plainPassword' => array('type' => 'string'),
//        'locked',
//        'expired',
//        'credentialsExpired',
//        'credentialsExpireAt',
//        'groups'
    );

    protected $formGroups = array(
        'General' => array(
            'fields' => array('username')
        ),
        'Groups' => array(
            'fields' => array('email')
        ),
//        'Management' => array(
//            'fields' => array('locked', 'expired', 'enabled', 'credentialsExpired', 'credentialsExpireAt')
//        )
    );

    protected $formOptions = array(
//        'validation_groups' => 'admin'
    );

    protected $filter = array(
//        'username',
//        'locked',
//        'email',
//        'id',
    );

    // don't know yet how to get this value
    protected $baseControllerName = 'SimpleBlogBundle:UserAdmin';
}