<?php

namespace Funsational\SimpleBlogBundle\Tests\Controller;

class GameControllerTest extends AbstractControllerTest
{
    public function testIndexLoads()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', $this->routes['blog_index']->getPattern());
        $this->assertTrue($client->getResponse()->isSuccessful());
    }
}
