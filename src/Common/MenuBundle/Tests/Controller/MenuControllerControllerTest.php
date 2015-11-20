<?php

namespace Common\MenuBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MenuControllerControllerTest extends WebTestCase
{
    public function testMenu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/menu');
    }

}
