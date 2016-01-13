
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


            <div class="alert alert-warning alert-dismissable  {{ $error['class'] }} ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <strong>出错了!</strong> {{ $error['text'] }}
            </div>


            <div class="row  {{ $icon['class'] }}">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp bold uppercase">转换结果</span>
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="remove" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                    <tr class="uppercase">
                                        <th >
                                            尺寸
                                        </th>
                                        <th>
                                            预览
                                        </th>
                                        <th>
                                            源文件名
                                        </th>
                                        <th>
                                            下载
                                        </th>
                                        <th>
                                            转换时间
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td >
                                            {{ $icon['size'] }} x  {{ $icon['size'] }}
                                        </td>
                                        <td>
                                            <img class="" src="{{ $icon['filepath'] }}">
                                        </td>
                                        <td>
                                            {{ $icon['filename'] }}
                                        </td>
                                        <td>
                                            <a href="icon/download/{{ base64_encode($icon['filepath']) }}" target="_blank" class="btn default blue">
                                                点击下载 </a>
                                        </td>
                                        <td>
                                            {{ $icon['time'] }}
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>

            </div>




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
                            <form role="form"  action="" method="post" enctype="multipart/form-data" >
                                <div class="form-body">


                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">源图片</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" id="form_control_1" name="upimage">
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
                                                    <input type="radio" id="c1" name="size" value="1" class="md-radiobtn">
                                                    <label for="c1">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        16*16 </label>
                                                </div>
                                                <div class="md-radio ">
                                                    <input type="radio" id="c2" name="size" value="2" class="md-radiobtn" >
                                                    <label for="c2">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        32*32</label>
                                                </div>
                                                <div class="md-radio ">
                                                    <input type="radio" id="c3" name="size" value="3" class="md-radiobtn">
                                                    <label for="c3">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        48*48 </label>
                                                </div>
                                                <div class="md-radio ">
                                                    <input type="radio" id="c4" name="size" value="4" class="md-radiobtn" checked="">
                                                    <label for="c4">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        64*64</label>
                                                </div>
                                                <div class="md-radio ">
                                                    <input type="radio" id="c5" name="size" value="5" class="md-radiobtn">
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
                                        <label class="col-md-2 control-label" for="form_control_1"></label>
                                        <div class="col-md-10 ">
                                            <script  src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
                                            <div class="box" id="div_geetest_lib">
                                                <div id="div_id_embed"></div>
                                                <script type="text/javascript">


                                                    var gtFailbackFrontInitial = function(result) {
                                                        var s = document.createElement('script');
                                                        s.id = 'gt_lib';
                                                        s.src = 'http://static.geetest.com/static/js/geetest.0.0.0.js';
                                                        s.charset = 'UTF-8';
                                                        s.type = 'text/javascript';
                                                        document.getElementsByTagName('head')[0].appendChild(s);
                                                        var loaded = false;
                                                        s.onload = s.onreadystatechange = function() {
                                                            if (!loaded && (!this.readyState|| this.readyState === 'loaded' || this.readyState === 'complete')) {
                                                                loadGeetest(result);
                                                                loaded = true;
                                                            }
                                                        };
                                                    }
                                                    //get  geetest server status, use the failback solution

                                                    var loadGeetest = function(config) {
                                                        console.log(config);
                                                        //1. use geetest capthca
                                                        window.gt_captcha_obj = new window.Geetest({
                                                            gt : config.gt,
                                                            challenge : config.challenge,
                                                            product : 'embed',
                                                            offline : !config.success
                                                        });
                                                        gt_captcha_obj.appendTo("#div_id_embed");
                                                    }

                                                    s = document.createElement('script');
                                                    s.src = 'http://api.geetest.com/get.php?callback=gtcallback';
                                                    $("#div_geetest_lib").append(s);

                                                    var gtcallback =( function() {
                                                        var status = 0, result, apiFail;
                                                        return function(r) {
                                                            status += 1;
                                                            if (r) {
                                                                result = r;
                                                                setTimeout(function() {
                                                                    if (!window.Geetest) {
                                                                        apiFail = true;

                                                                        gtFailbackFrontInitial(result)
                                                                    }
                                                                }, 1000)
                                                            }
                                                            else if(apiFail) {

                                                                return
                                                            }
                                                            if (status == 2) {

                                                                loadGeetest(result);

                                                            }
                                                        }
                                                    })()

                                                    $.ajax({
                                                        url : "captcha?rand="+Math.round(Math.random()*100),
                                                        type : "get",
                                                        dataType : 'JSON',
                                                        success : function(result) {
                                                             console.log(result);
                                                            gtcallback(result)
                                                        }
                                                    })
                                                </script>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group form-actions noborder">
                                        <button type="commit" class="btn blue">在线生成favicon.ico图标</button>

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
    <!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
    <script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('assets/global/plugins/jquery.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-migrate.min.js')}} " type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery.cokie.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js')}} " type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}} " type="text/javascript"></script>
    <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
    <script src="{{ asset('assets/global/plugins/morris/morris.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/morris/raphael-min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js')}} " type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/global/scripts/metronic.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/admin/layout3/scripts/layout.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/admin/layout2/scripts/quick-sidebar.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/admin/layout3/scripts/demo.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/admin/pages/scripts/index3.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/admin/pages/scripts/tasks.js')}} " type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    {{--//引入自动增加文本域高度的js--}}
    <script src="{{ asset('assets/global/scripts/textareaAutoHeight.js') }}"></script>
    {{--查询ajax弹窗用的显示--}}
    <script src="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.js')}} "></script>
    {{--把js放入文件中--}}
    <script src="{{ asset('assets/global/scripts/main.js')}} "></script>
    <script src="{{ asset('assets/global/scripts/tj.js')}} "></script>
    <!-- END JAVASCRIPTS -->
</div>
@endsection