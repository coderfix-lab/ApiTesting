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
        $form=$arr['form']; //处理对应的header和body

        $form_arr=explode("&",$form);

        //整理出两个数组
        $header=[]; //拼接成的是 key: value的字符串
        $bodyas=[];  //拼接成的是 array('key'=>value)的数组
        foreach($form_arr as $key => $value){
            //判断是哪个
            $sub_value=substr($value,0,10);
            if($sub_value == "header_key"){
                //拼接当前的和下一个
                $aaa_str=substr($value,11).": ".urldecode(substr($form_arr[$key + 1],13));
                $header[]=$aaa_str;
                continue;
            }
            $sub_value=substr($value,0,8);
            if($sub_value == "body_key"){
                $bodyas[substr($value,9)]= urldecode( substr($form_arr[$key + 1],10));
                continue;
            }
        }

        //数组形式的提交

        $result=$this->curl($url,$method,$bodyas,$header);
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


    function curl($url, $method='GET',$fields = [], $headers=[],$auth = false){
        if($method == "GET"){
            $fields_string = http_build_query($fields);
            $url=$url."?".$fields_string;
        }

        $curl = curl_init($url);
        curl_setopt ( $curl, CURLOPT_CUSTOMREQUEST, $method );
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);


        $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
        $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
        $header[] = "Cache-Control: max-age=0";
        $header[] = "Connection: keep-alive";
        $header[] = "Keep-Alive: 300";
        $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
        $header[] = "Accept-Language: en-us,en;q=0.5";
        $header[] = "Pragma: "; // browsers keep this blank.
        curl_setopt($curl, CURLOPT_HTTPHEADER, array_merge($header,$headers));

        if($auth){
            curl_setopt($curl, CURLOPT_USERPWD, "$auth");
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        }

        if($fields){
            //POST
            if($method == "POST"){
                $fields_string = http_build_query($fields);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
            }else{
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
                curl_setopt($curl, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
            }

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
