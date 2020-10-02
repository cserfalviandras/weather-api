<?php

namespace App\Http\Controllers;

use App\Services\WeatherDataRetriver;

class OpenWeatherApiController extends Controller
{
    private $weatherData;

    public function __construct(WeatherDataRetriver $weatherDataRetriver)
    {
        $this->weatherData = $weatherDataRetriver;
    }

    public function getWeatherForCity($city)
    {
        $data = $this->weatherData->get($city);
        return $data;
    }
}
