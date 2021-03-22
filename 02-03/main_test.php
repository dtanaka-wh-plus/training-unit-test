<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');

class MainTest extends TestCase
{
  function testSunnyMessage(){
    $weather_news = new WeatherNews();
    $message = $weather_news->getTomorrowMessage();
    $this->assertEquals("明日の天気は晴れです。", $message);
  }
}
