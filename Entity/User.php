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

namespace Funsational\SimpleBlogBundle\Entity;

/**
 * @orm:Entity
 */
class User
{
    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:generatedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
	 * @orm:Column(type="string")
     */
    protected $username;
    
    /**
	 * @orm:Column(type="string")
     */
    protected $email;
    
    public function getId()
    {
    	return $this->id;
    }
    
 	public function getUsername()
    {
    	return $this->username;
    }
    
    public function setUsername($username)
    {
    	$this->username = $username;
    }
    
 	public function getEmail()
    {
    	return $this->email;
    }
    
    public function setEmail($email)
    {
    	$this->email = $text;
    }
}
