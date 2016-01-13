<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mews\Captcha\Captcha;
use Validator;
use Session;
use Illuminate\Support\Facades\Input;
use App\Libs\Iconv;

class TestController extends Controller
{
    //

    public function index(Request $request){

        $func=__FUNCTION__;
        $author="lixiaoyu";
        $description="Http调试工具";
        $title="HTTP接口调试工具 | CoderFix.cn";

        return view('apitest',[
            'author'=>$author,
            'title'=>$title,
            'desc'=>$description,
            'func'=>$func
        ]);
    }


    /**
     * 图像转换
     * @param Request $request
     */
    public function icon(Request $request)
    {

        $title="Icon图片格式转换工具 | CoderFix.cn";
        $func=__FUNCTION__;
        $author = "lixiaoyu";
        $description = "Http调试工具";
        $icon_arr=[
            'class'=>'hidden',
            'time'=>date("Y-m-d H:i:s"),
            'filename'=>'',
            'filepath'=>'',
            'size'=>0
        ];

        $error=[
            'class'=>'hidden',
            'text'=>'',
        ];
        if ($request->method() == 'POST') {
            session_start();
            $GtSdk = new \GeetestLib();
            if ($_SESSION['gtserver'] == 1) {
                $result = $GtSdk->validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode']);
                if ($result == TRUE) {
                } else if ($result == FALSE) {
                    $error['text']="验证失败!";
                } else {
                    $error['text']="验证失败!";
                }
            } else {
                if ($GtSdk->get_answer($_POST['geetest_validate'])) {
                } else {
                    $error['text']="验证失败!";
                }
            }
            if ( $error['text'] == "" && isset($_FILES['upimage']['tmp_name']) && $_FILES['upimage']['tmp_name'] && is_uploaded_file($_FILES['upimage']['tmp_name'])) {
                if ($_FILES['upimage']['type'] > 210000) {
                    $error['text'] = "你上传的文件体积超过了限制 最大不能超过200k";
                } else {
                    $fileext = array("image/pjpeg", "image/gif", "image/x-png", "image/png", "image/jpeg", "image/jpg");
                    if (!in_array($_FILES['upimage']['type'], $fileext)) {
                        $error['text'] = "你上传的文件格式不正确 仅支持 jpg，gif，png";
                    }else {
                        if ($im = @imagecreatefrompng($_FILES['upimage']['tmp_name']) or $im = @imagecreatefromgif($_FILES['upimage']['tmp_name']) or $im = @imagecreatefromjpeg($_FILES['upimage']['tmp_name'])) {
                            $imginfo = @getimagesize($_FILES['upimage']['tmp_name']);
                            if (!is_array($imginfo)) {
                                $error['text'] = "图形格式错误！";
                            }else {
                                switch ($_POST['size']) {
                                    case 1;
                                        $resize_im = @imagecreatetruecolor(16, 16);
                                        $size = 16;
                                        break;
                                    case 2;
                                        $resize_im = @imagecreatetruecolor(32, 32);
                                        $size = 32;
                                        break;
                                    case 3;
                                        $resize_im = @imagecreatetruecolor(48, 48);
                                        $size = 48;
                                        break;
                                    case 4;
                                        $resize_im = @imagecreatetruecolor(64, 64);
                                        $size = 64;
                                        break;
                                    case 5;
                                        $resize_im = @imagecreatetruecolor(128, 128);
                                        $size = 128;
                                        break;
                                    default;
                                        $resize_im = @imagecreatetruecolor(64, 64);
                                        $size = 64;
                                        break;
                                }
                                imagecopyresampled($resize_im, $im, 0, 0, 0, 0, $size, $size, $imginfo[0], $imginfo[1]);

                                $icon = new Iconv();

                                $gd_image_array = array($resize_im);
                                $icon_data = $icon->GDtoICOstr($gd_image_array);
                                $filename = "temp/" . date("Ymdhis") . rand(1, 1000) . ".ico";
                                if (file_put_contents($filename, $icon_data)) {
//                            $output = "生成成功！请点右键->另存为 保存到本地<br><a href="/" mce_href="/""".$filename."/" target=/"_blank/">点击下载</a>";
//                                    echo $filename;
                                    //数据展示
                                    $icon_arr=[
                                        'class'=>'',
                                        'time'=>date("Y-m-d H:i:s"),
                                        'filename'=>$_FILES['upimage']['name'],
                                        'filepath'=>$filename,
                                        'size'=>$size
                                    ];
                                }
                            }
                        } else {
                                $error['text'] = "生成错误请重试";

                        }
                    }
                }
            }else{
                $error['text'] = "请选择图片!";
            }

        }

        if($error['text'] != ""){
            $error['class']="";
        }

        return view('icon', [
            'author' => $author,
            'desc' => $description,
            'icon'=>$icon_arr,
            'title'=>$title,
            'error'=>$error,
            'func'=>$func
        ]);


    }


   public  function download(Request $request,$path){

       //下载文件
       return response()->download(base64_decode($path));
   }


    /**
     * 验证码验证
     * @param Request $request
     */
    public function captcha(Request $request){
        $GtSdk = new \GeetestLib();
        session_start();
        $return = $GtSdk->register();
        if ($return) {
            $_SESSION['gtserver'] = 1;
            $result = array(
                'success' => 1,
                'gt' => CAPTCHA_ID,
                'challenge' => $GtSdk->challenge
            );
            echo json_encode($result);
        }else{
            $_SESSION['gtserver'] = 0;
            $rnd1 = md5(rand(0,100));
            $rnd2 = md5(rand(0,100));
            $challenge = $rnd1 . substr($rnd2,0,2);
            $result = array(
                'success' => 0,
                'gt' => CAPTCHA_ID,
                'challenge' => $challenge
            );
            $_SESSION['challenge'] = $result['challenge'];
            echo json_encode($result);
        }
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

        //异常处理
        $header_http=$result[1]["0"];
        if(count(explode("200",$header_http)) != 2){
            $result[0]="null";
        }
        return response()->json($result);

    }


    /**
     * 获取页面的播放次数
     */
    public function playtimes(Request $request){

        //提交
        if($request->method() == "POST"){
            $alert="目标页面发生变化,请通知管理员修改处理逻辑";
            $url="http://www.kuaishou.com/i/photo/lwx?cc=copylink&fid=26947234&et=1_a%2F1523214106412367873_h80&type=2&userId=42682605&photoId=533111883";
            //通过get方式并输出内容
            $content = $this->curl($url,"POST");

            $str= ($content[0]);


            $regex4="/.*?<span style=\"font-size:14px;color:#7c818b;vertical-align:middle;\">(.*?) people like this<\/span>.*?/";


            if(preg_match_all($regex4, $str, $matches)){

               $num=$matches[1][0];
            }else{
                $num=$alert;
            }

            echo $num;
            exit();
        }
        $func=__FUNCTION__;
        $author="lixiaoyu";
        $description="短视频传播渠道播放次数查询";
        $title="短视频传播渠道播放次数查询 | CoderFix.cn";


        return view('playtimes',[
            'author'=>$author,
            'title'=>$title,
            'desc'=>$description,
            'func'=>$func
        ]);

    }


    //ajax请求
    public function gettimes(Request $request)
    {

        $arr= $request->all();
        $method=$arr['method'];
        $url=$arr['url'];


        $alert="目标页面发生变化,请通知管理员修改处理逻辑";
        $num="";
        //根据类型进行判断
        switch ($method)
        {
            case 'gif':
                $content = $this->curl($url,"POST");

                $str= ($content[0]);


                $regex4="/.*?<span style=\"font-size:14px;color:#7c818b;vertical-align:middle;\">(.*?) people like this<\/span>.*?/";


                if(preg_match_all($regex4, $str, $matches)){

                    $num='点赞 :'.$matches[1][0];
                }else{
                    $num=$alert;
                }

                break;
            case 'meipai':
                $content = $this->curl($url,"get");

                $str= ($content[0]);


                //点赞数量
                $regex4="/.*?<span class=\"pr top-2\">(.*?)<\/span>.*?/";

                if(preg_match_all($regex4, $str, $matches)){

                    $num.= '点赞:'.$matches[1][0] ."  ";
                }else{
                    $num.='点赞:'.'0' ."  ";
                }

                //评论数量

                $regex1="/.*?<span id=\"commentCount\" class=\"pr top-3\">(.*?)<\/span>.*?/";

                if(preg_match_all($regex1, $str, $matches)){

                    $num.= '评论:'.$matches[1][0] ."  ";
                }else{
                    $num.='评论:'.'0' ."  ";
                }


                break;
            case 'miaopai':

                $content = $this->curl($url,'post');

                $str= ($content[0]);


                //点赞数量
                $regex4="/.*?<em style=\"color:\">(.*?)<\/em>.*?/";

                if(preg_match_all($regex4, $str, $matches)){

                    $num.= '点赞:'.$matches[1][0] ."  ";
                }else{
                    $num.='点赞:'.'无法获取' ."  ";
                }

                //评论数量

                $regex1="/.*?<a class=\'a\' href=\"javascript:pre_review\(\);\">(.*?)<\/a>.*?/";

                if(preg_match_all($regex1, $str, $matches)){

                    $num.= '评论:'. str_replace("评论","", $matches[1][0]) ."  ";

                    //$base=$matches[1][0];
                }else{
                    $num.='评论:'.'无法获取' ."  ";
                }

                break;


            case 'blibli':

                $content = $this->curl($url,"get");

                $str= ($content[0]);


                //点击
                $regex4="/.*?<span id=\"dianji\">(.*?)<\/span>.*?/";

                if(preg_match_all($regex4, $str, $matches)){

                    $num.= '点击:'.$matches[1][0] ."  ";
                }else{
                    $num.='点击:'.'无法获取' ."  ";
                }


                //点赞数量
                $regex4="/.*?<em style=\"color:\">(.*?)<\/em>.*?/";

                if(preg_match_all($regex4, $str, $matches)){

                    $num.= '点赞:'.$matches[1][0] ."  ";
                }else{
                    $num.='点赞:'.'无法获取' ."  ";
                }

                //评论数量

                $regex1="/.*?<a class=\'a\' href=\"javascript:pre_review\(\);\">(.*?)<\/a>.*?/";

                if(preg_match_all($regex1, $str, $matches)){

                    $num.= '评论:'. str_replace("评论","", $matches[1][0]) ."  ";

                    //$base=$matches[1][0];
                }else{
                    $num.='评论:'.'无法获取' ."  ";
                }

                break;
            default:

        }


        $result=['result'=>$str];
        return response()->json($result);

    }



    function curl($url, $method='GET',$fields = [], $headers=[],$auth = false){
        $url=trim($url);
        if($method == "GET"){
            $fields_string = http_build_query($fields);
            $url=$url."?".$fields_string;
        }

        $curl = curl_init($url);
        curl_setopt ($curl, CURLOPT_CUSTOMREQUEST, $method );
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);


        $header[0] = "Accept: text/html,application/xhtml+xml,application/xml;";
        $header[0] .= "q=0.9,image/webp,*/*;q=0.8";
        $header[] = "Cache-Control: max-age=0";
        $header[] = "Connection: keep-alive";
        $header[] = "Keep-Alive: 10";
        $header[] = "Accept-Encoding: gzip, deflate, sdch";
        $header[] = "Accept-Language: zh-CN,zh;q=0.8,en;q=0.6";
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
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true) ;
                curl_setopt($curl, CURLOPT_BINARYTRANSFER, true) ;
            }

        }

        $response = curl_exec($curl);
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header_string = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        $header_rows = explode(PHP_EOL, $header_string);

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

        curl_close($curl);
        return array($body, $headers);
    }


}
