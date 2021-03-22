<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');
require_once(dirname(__FILE__).'/weather_get_services.php');

// 常に晴れを返す、テスト用のお天気取得サービスです。
class SunnyGetService implements WeatherGetService {
  function getTomorrowWeather(): string{
    return '晴れ';
  }
}

// 常に曇りを返す、テスト用のお天気取得サービスです。
class CloudyGetService implements WeatherGetService {
  function getTomorrowWeather(): string{
    return '曇り';
  }
}

// 常に雨を返す、テスト用のお天気取得サービスです。
class RainGetService implements WeatherGetService {
  function getTomorrowWeather(): string{
    return '雨';
  }
}

// もちろん、気象庁クラスも使えます。
class MeteologycalAgency implements WeatherGetService {
  // 明日の天気を取得します。
  function getTomorrowWeather(): string{
    switch (rand(0,2)){
      case 0:
        return '晴れ';
      case 1:
        return '曇り';
      case 2:
        return '雨';
    }
  }
}
