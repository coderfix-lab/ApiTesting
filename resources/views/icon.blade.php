
@extends('box')
@section('content')
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>ICO图片转换工具 <small></small></h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMB -->
            {{--<ul class="page-breadcrumb breadcrumb">--}}
                {{--<li>--}}
                    {{--<a href="#">Home</a><i class="fa fa-circle"></i>--}}
                    {{--</li>--}}
                {{--<li class="active">--}}
                    {{--Dashboard--}}
                    {{--</li>--}}
                {{--</ul>--}}
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="fa fa-space-shuttle font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Icon在线图片转换</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" >
                                <div class="form-body">


                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">源图片</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" id="form_control_1" placeholder="Enter your email">
                                            <div class="form-control-focus">
                                            </div>
                                            <span class="help-block">请选择图片</span>
                                        </div>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">目标尺寸</label>
                                        <div class="col-md-10">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="c1" name="radio2" class="md-radiobtn">
                                                    <label for="c1">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        16*16 </label>
                                                </div>
                                                <div class="md-radio ">
                                                    <input type="radio" id="c2" name="radio2" class="md-radiobtn" >
                                                    <label for="c2">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        32*32</label>
                                                </div>
                                                <div class="md-radio ">
                                                    <input type="radio" id="c3" name="radio2" class="md-radiobtn">
                                                    <label for="c3">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        48*48 </label>
                                                </div>
                                                <div class="md-radio ">
                                                    <input type="radio" id="c4" name="radio2" class="md-radiobtn" checked="">
                                                    <label for="c4">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        64*64</label>
                                                </div>
                                                <div class="md-radio ">
                                                    <input type="radio" id="c5" name="radio2" class="md-radiobtn">
                                                    <label for="c5">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        128*128 </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">验证码</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" id="form_control_1" placeholder="输入验证码">
                                            <div class="form-control-focus">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            我是验证码
                                        </div>
                                    </div>

                                    <div class="form-group form-actions noborder">
                                        <button type="button" class="btn blue">在线生成favicon.ico图标</button>

                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-green-haze">
                                <i class="icon-settings font-green-haze"></i>
                                <span class="caption-subject bold uppercase"> 关于ico图标</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" class="form-horizontal">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">如何使用Favicon.ico</label>
                                        <div class="col-md-10">
                                            <div class="form-control form-control-static">
                                                1. 将成功生成的图标文件下载并改名为favico.ico，上传到网站根目录。<br/>
                                                2. 在网站首页的源文件 head 之间插入下面的代码:<br/>
                                               <textarea rows="3" cols="90" ><link rel="shortcut icon" href="/favicon.ico"/>
<link rel="bookmark" href="/favicon.ico"/></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">什么是favicon.ico</label>
                                        <div class="col-md-10">
                                            <div class="form-control form-control-static">
                                                所谓favicon，即Favorites Icon的缩写，顾名思义，便是其可以让浏览器的收藏夹中除显示相应的标题外，还以图标的方式区别不同的网站。当然，这不仅仅是Favicon的全部，根据浏览器的不同，Favicon显示也有所区别：在大多数主流浏览器如FireFox和Internet Explorer (5.5及以上版本)中，favicon不仅在收藏夹中显示，还会同时出现在地址栏上，这时用户可以拖曳favicon到桌面以建立到网站的快捷方式；除此之外，标签式浏览器甚至还有不少扩展的功能，如FireFox甚至支持动画格式的favicon等。
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
            </div>




        </div>

    </div>
    <!-- END PAGE CONTENT -->
</div>
@endsection