<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherDataRetriver 
{
    public function getCurrentWeather($city) 
    {
        $apiKey = config('weather.open_weather_api_key');
        $url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$apiKey.'&units=metric';

        $response = Http::get($url);
        
        return $response->json();
    }
}
