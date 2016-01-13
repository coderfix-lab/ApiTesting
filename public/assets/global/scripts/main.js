/**
 * Created by lixiaoyu on 15/12/28.
 */


    //自己写,添加一个对象
function addHearder(){
    //添加对应的元素
    $(".addHearder").prop("outerHTML");

}
//绑定
$('.addHeader').click(
    function(){
        addHearder()
    }
);

jQuery(document).ready(function() {
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    Demo.init(); // init demo(theme settings page)
    QuickSidebar.init(); // init quick sidebar
    Index.init(); // init index page
    Tasks.initDashboardWidget(); // init tash dashboard widget


});
$('.page-logo').addClass('LightSpeedIn  animated');


function adddle(){
    var testbox ="<div class='input-group textbox' style='margin-top: 20px'>"
        +"<div class='input-group-control col-md-3' >"
        +"<input type='text' id='header1'  name='header_key' class='form-control ' placeholder='Header参数名称'></div>"
        +" "
        +"<div class='input-group-control col-md-9'>"
        +"<input type='text' name='header_value' class='form-control ' placeholder='Header参数值'></div>"
        +"<span class='input-group-btn '>"
        +"<button type='button' class='btn btn-danger' onclick='del($(this));'>删除</button></span></div>";
    $("#params_table").append(testbox);
}
function del(obj){
    obj.parent().parent().remove();
}


$('#add_url_parameter').click(function(){
    adddle();
});


function addBody(){
    var testbox ="<div class='input-group textbox-body' style='margin-top: 20px'>"
        +"<div class='input-group-control col-md-3' >"
        +"<input type='text'  class='form-control ' name='body_key' placeholder='Body参数名称'></div>"
        +"<div class='form-control-focus'></div> "
        +"<div class='input-group-control col-md-9'>"
        +"<input type='text' class='form-control '  name='body_value' placeholder='Body参数值'></div>"
        +"<span class='input-group-btn '>"
        +"<button type='button' class='btn btn-danger' onclick='del($(this));'>删除</button></span></div>";
    $("#params_body").append(testbox);
}
function del(obj){
    obj.parent().parent().remove();
}


$('#add_body_parameter').click(function(){
    addBody();
});

//ajax提交数据
$('#com').click( function() {
    var method = $('#method').val();
    var url = $('#url').val();
    var values = [];
    var aaa = "";
    var form = $("form").serialize();

    $.ajax({
        type: 'POST',
        url: 'ajax/create',
        //传递参数
        data: {method: method, url: url , form : form},
        dataType: 'json',
        headers: {
            // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },

        beforeSend:function(){
            //显示转菊花
            loading("info","查询中请稍候","提示")
        },
        success: function (data) {
            str_header = JSON.stringify(data[1], null, 4);
            $("#return_body").val(data[0]);
            $("#return_header").val(str_header);
            loading("success","查询结束","提示")
        },

        error: function (xhr, type) {
            loading("error","出错,请重试","提示")
        }

    });
});

//清空结果
$('#clear_result').click(function(){
    $("#return_body").val("");
    $("#return_header").val("");
});

//去掉引号,再次进行解析
$('#decode_result').click(function(){
    var body=JSON.parse( $("#return_body").val());
    var destr_body=JSON.stringify(body, null, 4);
    $("#return_body").val(destr_body);

});

//返回值自动撑起高度
$('textarea').tah({
    moreSpace:15,   //输入框底部预留的空白, 默认15, 单位像素
    maxHeight:1000,  //指定Textarea的最大高度, 默认600, 单位像素
    animateDur:200  //调整高度时的动画过渡时间, 默认200, 单位毫秒
});









