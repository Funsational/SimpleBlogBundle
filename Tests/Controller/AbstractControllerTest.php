<?php

namespace Funsational\SimpleBlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class AbstractControllerTest extends WebTestCase
{
    protected $kernel;
    
    protected $routes;
    
    public function setUp()
    {
        if (null === $this->kernel) {
            $kernel = $this->createKernel();
            $kernel->boot();
            $this->kernel = $kernel;
            
            $router = $this->kernel->getContainer()->get('router');
            $this->routes = $router->getRouteCollection()->all(); 
        }
    }
}
