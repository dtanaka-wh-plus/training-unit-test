<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');
require_once(dirname(__FILE__).'/weather_get_services.php');


class MainTest extends TestCase
{
  function testSunnyMessage(){
    $weather_news = new WeatherNews(new SunnyGetService());
    $message = $weather_news->getTomorrowMessage();
    $this->assertEquals("明日の天気は晴れです。", $message);
  }

  function testCloudyMessage(){
    $weather_news = new WeatherNews(new CloudyGetService());
    $message = $weather_news->getTomorrowMessage();
    $this->assertEquals("明日の天気は曇りです。", $message);
  }

  function testRainMessage(){
    $weather_news = new WeatherNews(new RainGetService());
    $message = $weather_news->getTomorrowMessage();
    $this->assertEquals("明日の天気は雨です。", $message);
  }
}
