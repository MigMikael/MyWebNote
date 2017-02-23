<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getCurrentWeather()
    {
        $appID = '797d6914a00ff00e16b77790168319ca';
        $url = 'http://api.openweathermap.org/data/2.5/weather?lat=13.818643&lon=100.040505&appid='.$appID;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);

        $weather_data = null;
        if($res->getStatusCode() == 200){
            $weather_data = json_decode($res->getBody(), true);
            $temp = $weather_data['main']['temp'];
            return 'current temp is ' . $temp . ' kelvin';
        }
        else{
            return 'cannot get weather data';
        }

    }
}
