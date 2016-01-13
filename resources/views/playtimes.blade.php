
@extends('box')
@section('content')
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>短视频传播渠道播放次数查询 </h1>
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
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="fa fa-space-shuttle font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> 查询播放次数</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form"  >
                                <div class="form-body">
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-group">

                                            <div class="input-group-control">
                                                <select class="form-control   " id="method">
                                                    <option value="gif">gif快手</option>
                                                    <option value="meipai">美拍</option>
                                                    <option value="miaopai">秒拍</option>

                                                </select>
                                                <label for="form_control_1">播放渠道</label>
                                            </div>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control " placeholder="http://" id="url">
                                                <label for="form_control_1">对外分享地址</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
											<button class="btn blue-madison" type="button" id="buttimes">查询</button>
											</span>
                                        </div>
                                    </div>


                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>

            </div>



            {{--返回的结果--}}
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-green-haze">
                                <i class="fa fa-paper-plane-o font-green-haze"></i>
                                <span class="caption-subject bold uppercase"> 返回播放次数结果</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" class="form-horizontal">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input has-success">
                                        <label class="col-md-2 control-label" for="form_control_1"></label>
                                        <div class="col-md-10">
                                            <textarea class="form-control return" rows="3" placeholder="" id="return_body"></textarea>
                                            <div class="form-control-focus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="button" class="btn default" id="clear_result">清空结果</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->


                </div>
            </div>

            <!-- END PAGE CONTENT INNER -->
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
    <script src="{{ asset('assets/global/scripts/playtime.js')}} "></script>
    <script src="{{ asset('assets/global/scripts/tj.js')}} "></script>
    <!-- END JAVASCRIPTS -->
</div>
@endsection