<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //

    public function index(Request $request){

        if($_POST){
            var_dump($_POST);

        }


        $author="lixiaoyu";
        $description="Http调试工具";


        return view('index',[
            'author'=>$author,
            'desc'=>$description
        ]);
    }


    //ajax请求
    public function store(Request $request)
    {


        $arr= $request->all();
        $method=$arr['method'];
        $url=$arr['url'];

//        $url="http://www.localhost.com:8080/LaravelApi/public/v1/tasks";

        $result=$this->curl($url,$method);
//        header("Content-type: text/html; charset=utf-8");
//        var_dump($rephpult);

        return response()->json($result);

//        if (1) {
//
//            return response()->json(array(
//                'status' => $url,
//                 'msg' => 'ok',
//
//        ));
//
//    } else {
//
//            return Redirect::back()->withInput()->withErrors('保存失败！');
//
//        }

    }


    function curl($url, $method='GET',$fields = array(), $auth = false){

        $curl = curl_init($url);
        curl_setopt ( $curl, CURLOPT_CUSTOMREQUEST, $method );
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);

        if($auth){
            curl_setopt($curl, CURLOPT_USERPWD, "$auth");
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        }

        if($fields){
            $fields_string = http_build_query($fields);
//            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
        }

        $response = curl_exec($curl);
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header_string = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        $header_rows = explode(PHP_EOL, $header_string);
//        $header_rows = array_filter($header_rows, trim());

        foreach($header_rows as $key => $value){
            $header_rows[$key]=trim($header_rows[$key]);
        }
        $i=0;
        foreach((array)$header_rows as $hr){
            $colonpos = strpos($hr, ':');
            $key = $colonpos !== false ? substr($hr, 0, $colonpos) : (int)$i++;
            $headers[$key] = $colonpos !== false ? trim(substr($hr, $colonpos+1)) : $hr;
        }
        $j=0;
        foreach((array)$headers as $key => $val){
            $vals = explode(';', $val);
            if(count($vals) >= 2){
                unset($headers[$key]);
                foreach($vals as $vk => $vv){
                    $equalpos = strpos($vv, '=');
                    $vkey = $equalpos !== false ? trim(substr($vv, 0, $equalpos)) : (int)$j++;
                    $headers[$key][$vkey] = $equalpos !== false ? trim(substr($vv, $equalpos+1)) : $vv;
                }
            }
        }
        //print_rr($headers);
        curl_close($curl);
        return array($body, $headers);
    }


}
