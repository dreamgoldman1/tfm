<?php

namespace Common\MiscBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HeaderControllerTest extends WebTestCase
{
    public function testHeader()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/header');
    }

}
