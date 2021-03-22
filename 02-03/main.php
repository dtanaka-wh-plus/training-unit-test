<?php

// 気象庁クラス
class MeteologycalAgency {
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

// お天気ニュースクラス
class WeatherNews {
  // 明日の天気のニュース記事を取得します。
  function getTomorrowMessage(): string{
    // 明日の天気を気象庁から聞きます。
    $meteologycal_agency = new MeteologycalAgency();
    $weather = $meteologycal_agency->getTomorrowWeather();
    // ニュース記事を組み立てて返します。
    return "明日の天気は${weather}です。";
  }
}
