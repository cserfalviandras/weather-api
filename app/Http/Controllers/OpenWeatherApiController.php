<?php

namespace App\Http\Controllers;

use App\Services\WeatherDataRetriver;

class OpenWeatherApiController extends Controller
{
    private $weatherDataRetriver;

    public function __construct(WeatherDataRetriver $weatherDataRetriver)
    {
        $this->weatherDataRetriver = $weatherDataRetriver;
    }

    public function getWeatherForCity($city)
    {
        $data = $this->weatherDataRetriver->getCurrentWeather($city);
        return $data;
    }
}
