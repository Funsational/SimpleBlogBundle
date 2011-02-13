<?php

namespace Funsational\SimpleBlogBundle\Test;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;

class WebTestCase extends BaseWebTestCase
{
    protected $kernel;

    protected $postClass;
    
    /**
     * Prepare entity/document classes for usage in tests
     *
     * @return mixed om
     */
    public function setUp()
    {
        $om = $this->getService('simple_blog.object_manager');
        $this->postClass = $this->getService('simple_blog.repository.post')->getObjectClass();

        return $om;
    }
    
    protected function getService($name, $kernel = null)
    {
        return $this->getKernel()->getContainer()->get($name);
    }

    protected function hasService($name, $kernel = null)
    {
        return $this->getKernel()->getContainer()->has($name);
    }

    protected function getKernel()
    {
        if(!$this->kernel) {
            $this->kernel = $this->createKernel();
            $this->kernel->boot();
        }

        return $this->kernel;
    }

}
