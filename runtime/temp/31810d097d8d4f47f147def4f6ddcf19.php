<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\demo\sms.html";i:1505289666;s:84:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\public\header.html";i:1505280616;s:84:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\public\footer.html";i:1505280616;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    </style>
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>发送短信</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" name="sms" id="sms" method="post" action="<?php echo url('sms'); ?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">手机号码：</label>
                            <div class="input-group col-sm-4">
                                <input id="mobile" type="text" maxlength="11" class="form-control" name="mobile" placeholder="输入手机号码">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">模板ID：</label>
                            <div class="input-group col-sm-4">
                                <input id="tplcode" type="text" class="form-control" name="tplcode" placeholder="输入模板ID">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">验证码：</label>
                            <div class="input-group col-sm-4">
                                <input id="code" type="text" maxlength="6" class="form-control" name="code" placeholder="输入要模拟的验证码">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> 发送</button>
                            </div>
                        </div>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/chosen/chosen.jquery.js"></script>
<script src="__JS__/plugins/iCheck/icheck.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="__JS__/jquery.form.js"></script>
<script src="__JS__/layer/layer.js"></script>
<script src="__JS__/laypage/laypage.js"></script>
<script src="__JS__/laytpl/laytpl.js"></script>
<script src="__JS__/lunhui.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>

<script type="text/javascript">
    
    //提交
    $(function(){
        $('#sms').ajaxForm({
            beforeSubmit: checkForm, 
            success: complete, 
            dataType: 'json'
        });
        
        function checkForm(){
            var mobile = $('#mobile').val();
            var tplcode = $('#tplcode').val();
            var code = $('#code').val();
            var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
            if(!mobile){
                layer.msg('请输入要发送的手机号码',{time:1500}, function(index){
                    layer.close(index);
                });
                return false;
            }        
            if(!myreg.test(mobile)){ 
                layer.msg('请输入有效的手机号码！',{time:1500}); 
                return false; 
            } 
            if(!tplcode){
                layer.msg('请输入短信模板ID',{time:1500}, function(index){
                    layer.close(index);
                });
                return false;
            }
            if(!code){
                layer.msg('请输入要发送的验证码',{time:1500}, function(index){
                    layer.close(index);
                });
                return false;
            }
        }


        function complete(data){
            if(data.code=='OK'){
                layer.msg('发送成功', {icon: 1,time:2000,shade: 0.1}, function(index){
                    layer.close(index);
                });
            }else{
                layer.msg(data.msg, {icon: 2,time:2000,shade: 0.1});
                return false;   
            }
        }
     
    });

</script>
</body>
</html>