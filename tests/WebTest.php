<?php
use Goutte\Client;

class WebTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->url = sprintf('http://%s:%s/', WEB_SERVER_HOST, WEB_SERVER_PORT);
    }

    public function testShowPage()
    {
        $client = new Client();
        $crawler = $client->request('GET', $this->url);
        $this->assertEquals(200, $client->getResponse()->getStatus());
    }
}
