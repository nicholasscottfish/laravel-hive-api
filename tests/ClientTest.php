<?php

use FWM\Hive\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /** @test **/
    public function itShouldReturnAValidInstanceOfCodeClass()
    {
        $client = new Client();

        $this->assertInstanceOf('FWM\Hive\Api\Code', $client->api('code', 'fastwebmedia', 'token'));
    }

    /** @test * */
    public function itShouldReturnAValidInstanceOfUserClass()
    {
        $client = new Client();

        $this->assertInstanceOf('FWM\Hive\Api\User', $client->api('user', 'fastwebmedia', 'token'));
    }

    /** @test **/
    public function itShouldThrowAnErrorOnUnkownClient()
    {
        $this->setExpectedException('InvalidArgumentException');

        $client = new Client();
        $client->api('foobarbaz', 'fastwebmedia', 'token');
    }
}