/**
 * Created by yu on 16/1/13.
 */



$('.page-logo').addClass('LightSpeedIn  animated');
jQuery(document).ready(function() {
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    Index.init(); // init index page

});

//ajax提交数据
$('#buttimes').click( function() {
    var method = $('#method').val();
    var url = $('#url').val();
    var values = [];
    var aaa = "";
    var form = $("form").serialize();

    $.ajax({
        type: 'POST',
        url: '/play/get',
        //传递参数
        data: {method: method, url: url , form : form},
        dataType: 'json',
        headers: {
            // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },

        beforeSend:function(){
            //
            loading("info","查询中请稍候","提示")
        },
        success: function (data) {
            $("#return_body").val(data.result);

            loading("success","查询结束","提示")
        },

        error: function (xhr, type) {
            loading("error","出错,请重试","提示")
        }

    });
});


