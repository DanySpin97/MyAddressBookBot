<?php

require './vendor/autoload.php';

class BotTest extends PHPUnit_Framework_TestCase
{
    public $bot;

    public function testBot() {
        $this->bot = new DanySpin97\MyAddressBookBot\Bot("token");
        $this->bot->connectToRedis();
        $this->bot->connectToDatabase("pgsql", "travis_ci_test", "postgresql", "");
    }
}
