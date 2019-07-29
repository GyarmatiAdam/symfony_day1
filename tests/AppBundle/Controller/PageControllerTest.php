<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testbaseAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('This is the Home page', $crawler->filter('h1')->text());
    }

    public function testcreateAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('This is a crate page', $crawler->filter('h1')->text());
    }
}
