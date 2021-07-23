<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function request(Request $request){
        $data = $request->data;
        dd($data);
    }
    public function sample(){
        //header('Content-type: application/json; charset=utf-8'); // ヘッダ（データ形式、文字コードなど指定）
        $data = filter_input(INPUT_GET, 'data'); // 送ったデータを受け取る（GETで送った場合は、INPUT_GET）
        
        echo json_encode($data); //　echoするとデータを返せる（JSON形式に変換して返す）
    }
    public function asample(){
        $collections = DB::select('select id,user_name from m_user;');
        $i=response()->json(
            [
                'data' => $collections
            ],
            200,[],
            JSON_UNESCAPED_UNICODE
        );
        return view("sample");
    }
}
