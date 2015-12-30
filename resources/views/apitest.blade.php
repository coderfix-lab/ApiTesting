
@extends('box')
@section('content')
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Api调试工具 <small>设置参数直接查看对应的返回值~</small></h1>
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
                                <span class="caption-subject bold uppercase"> 在线HTTP POST/GET接口测试工具</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" >
                                <div class="form-body">
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-group">

                                            <div class="input-group-control">
                                                <select class="form-control" id="method">
                                                    <option value="GET">GET</option>
                                                    <option value="POST">POST</option>
                                                    <option value="PUT">PUT</option>
                                                    <option value="PATCH">PATCH</option>
                                                    <option value="DELETE">DELETE</option>
                                                    <option value="COPY">COPY</option>
                                                    <option value="HEAD">HEAD</option>
                                                    <option value="OPTIONS">OPTIONS</option>
                                                    <option value="LINK">LINK</option>
                                                    <option value="UNLINK">UNLINK</option>
                                                    <option value="PURGE">PURGE</option>
                                                </select>
                                                <label for="form_control_1">请求方式</label>
                                            </div>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control " placeholder="http://" id="url">
                                                <label for="form_control_1">请求地址</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
											<button class="btn blue-madison" type="button" id="com">发送请求</button>
											</span>
                                        </div>
                                    </div>

                                    {{--添加header参数--}}

                                    <div class="form-group form-md-line-input has-info" id="params_table">
                                        <div style="position:absolute;top: 0;width: 100%">
                                            <label for="form_header"  class="col-md-3">Header名称</label>
                                            <label for="form_header_value" class="col-md-6" >Header值</label>
                                        </div>


                                    </div>
                                    <div class="form-group ">

 <span class="input-group-btn btn-left" >
             <button class="btn blue-madison addHeader" type="button" id="add_url_parameter" >添加参数</button>
         </span>

                                    </div>
                                    <div class="form-group form-md-line-input has-info" id="params_body">
                                        <div style="position:absolute;top: 0;width: 100%" >
                                            <label for="form_header"  class="col-md-3">Body名称</label>
                                            <label for="form_header_value" class="col-md-6" >Body值</label>
                                        </div>


                                    </div>
                                    <div class="form-group ">

                                         <span class="input-group-btn btn-left" >
             <button class="btn blue-madison addBody" type="button" id="add_body_parameter" >添加参数</button>
         </span>
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
                                <span class="caption-subject bold uppercase"> HTTP请求返回结果</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" class="form-horizontal">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input has-success">
                                        <label class="col-md-2 control-label" for="form_control_1">HTTP Body</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control return" rows="3" placeholder="" id="return_body"></textarea>
                                            <div class="form-control-focus">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success">
                                        <label class="col-md-2 control-label" for="form_control_1">HTTP Headers</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control return" rows="3" placeholder="" id="return_header" ></textarea>
                                            <div class="form-control-focus">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="button" class="btn default" id="clear_result">清空结果</button>
                                            <button type="button" class="btn blue" id="decode_result">解析body</button>
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
</div>
@endsection