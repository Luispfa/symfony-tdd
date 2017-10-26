<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookControllerTest extends WebTestCase {

    protected $client;

    public function setUp() {
        parent::setUp();
        $this->client = static::createClient();
    }

    public function testIndexAction() {
        $crawler = $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->getStatusCode() === 200);
        $this->assertCount(2, $crawler->filter('.book'));
        $this->assertEquals('Clean Code', $crawler->filter('.title')->text());
        $this->assertEquals('Robert C. Martin', $crawler->filter('.author')->text());
        $this->assertEquals('Programming', $crawler->filter('.category')->text());
    }

    /*public function testIndex()
      {
      $client = static::createClient();

      $crawler = $client->request('GET', '/');

      $this->assertEquals(200, $client->getResponse()->getStatusCode());
      $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
      }*/ 
}
