<?php
// お天気取得サービス
interface WeatherGetService {
  function getTomorrowWeather(): string;
}

// お天気ニュースクラス
class WeatherNews {
  private $weather_get_service;

  function __construct(WeatherGetService $weather_get_service){
    $this->weather_get_service = $weather_get_service;
  }

  // 明日の天気のニュース記事を取得します。
  function getTomorrowMessage(): string{
    // 明日の天気はお天気サービスから聞きます。
    $weather = $this->weather_get_service->getTomorrowWeather();
    // ニュース記事を組み立てて返します。
    return "明日の天気は${weather}です。";
  }
}
