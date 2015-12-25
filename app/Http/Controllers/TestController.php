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



//        $method=$arr['$method'];

        //

//        $http_month=$arr['method'];



        if (1) {

            return response()->json(array(
                'status' => $arr,
                 'msg' => 'ok',

        ));

    } else {

            return Redirect::back()->withInput()->withErrors('保存失败！');

        }

    }

}
