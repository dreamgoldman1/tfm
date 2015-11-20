<?php

namespace Common\MiscBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FooterControllerTest extends WebTestCase
{
    public function testFooter()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/footer');
    }

}
