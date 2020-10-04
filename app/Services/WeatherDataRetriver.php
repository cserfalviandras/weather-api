<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherDataRetriver 
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = config('weather.open_weather_api_key');
    }

    public function getCurrentWeather($city) 
    {
        $url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$this->apiKey.'&units=metric';

        return $this->getData($url);
    }

    public function getDetailedForecast($lat, $lon)
    {
        $url = 'http://api.openweathermap.org/data/2.5/onecall?lat='.$lat.'&lon='.$lon.'&appid='.$this->apiKey.'&units=metric';

        return $this->getData($url);
    }

    private function getData($url) 
    {
        $response = Http::get($url);
        
        return $response->json();
    }
}
