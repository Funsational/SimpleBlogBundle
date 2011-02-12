<?php

namespace Funsational\SimpleBlogBundle\Tests\Model;

use Funsational\SimpleBlogBundle\Test\WebTestCase;
use DateTime;

class PostTest extends WebTestCase
{
    public function testObjectClass()
    {
        $class = $this->getService('funsational_blog.repository.post')->getClassMetadata();
        $this->assertEquals($this->postClass, $class->name);
    }
    
    public function testAttributes()
    {
    	$now = new DateTime();
    	
    	$post = new $this->postClass();
    	$this->assertNull($post->getTopic());
        $this->assertNull($post->getMessage());
        $this->assertNull($post->getNumber());
    	$this->assertEquals($now, $post->getCreatedAt(), '::getCreatedAt() returns the time the post was created. Should be current time');
        $this->assertNull($post->getUpdatedAt());
        $this->assertEmpty($post->__toString());    	
    	
        $postTopic = 'Test Topic';
        $postMessage = 'Test Message';
        $postNumber = 1;
        $postUpdatedAt = $now->modify('+3 days');
        
        $post->setTopic($postTopic);
        $post->setMessage($postMessage);
        $post->setNumber($postNumber);
        
        $this->assertEquals($postTopic, $post->getTopic());
        $this->assertEquals($postMessage, $post->getMessage());
        $this->assertEquals($postNumber, $post->getNumber());
    }
}