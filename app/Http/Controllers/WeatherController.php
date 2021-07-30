<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class WeatherController extends Controller
{
    public function sample(){
        $weather = filter_input(INPUT_GET, "data");
        echo json_encode($weather);
        return view("sample",compact("weather"));
    }
    public function request(Request $request){
        $data = $request->data;
        dd($data);
    }
    public function asample(){
        //header('Content-type: application/json; charset=utf-8'); // ヘッダ（データ形式、文字コードなど指定）
        $cityname = filter_input(INPUT_GET, 'data'); // 送ったデータを受け取る（GETで送った場合は、INPUT_GET）
        $url = config("weatherapi.weather_api_url")."weather?q=".$cityname."&APPID=".config("weatherapi.weather_api_key");
        $json_decode = json_decode(file_get_contents($url));
        
        //echo json_encode($cityname); //　echoするとデータを返せる（JSON形式に変換して返す）
        $weather = $json_decode->weather[0]->main;
        return view::make('home',compact('weather'));
    }
     
}
