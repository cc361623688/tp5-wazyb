<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\config\index.html";i:1505281480;s:84:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\public\header.html";i:1505280616;s:84:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\public\footer.html";i:1505280616;}*/ ?>
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
<style type="text/css">
/* TAB */
.nav-tabs.nav>li>a {
    padding: 10px 25px;
    margin-right: 0;
}
.nav-tabs.nav>li>a:hover,
.nav-tabs.nav>li.active>a {
    border-top: 3px solid #1ab394;
    padding-top: 8px;
    border-bottom: 1px solid #FFFFFF;
}
.nav-tabs>li>a {
    color: #A7B1C2;
    font-weight: 500;  
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 0;
}
</style>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>网站配置</h5>
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
                    <div class="panel blank-panel">
                        <div class="panel-heading">                     
                            <div class="panel-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">基本配置</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">内容配置</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">系统配置</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">短信配置</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <form action="<?php echo url('save'); ?>" method="post" class="form-horizontal">  
                                        <div class="hr-line-dashed"></div>                                
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">网站标题：</label>
                                            <div class="input-group col-sm-4">                                              
                                                <input type="text" class="form-control" name="config[web_site_title]" value="<?php echo $config['web_site_title']; ?>">
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 网站标题</span>                                           
                                            </div>
                                        </div>                                 
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">网站描述：</label>
                                            <div class="input-group col-sm-4">
                                                <textarea class="form-control" type="text" rows="3" name="config[web_site_description]"><?php echo $config['web_site_description']; ?></textarea>
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 网站搜索引擎描述</span>                                           
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">网站关键字：</label>
                                            <div class="input-group col-sm-4">
                                                <textarea class="form-control" type="text" rows="3" name="config[web_site_keyword]"><?php echo $config['web_site_keyword']; ?></textarea>
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 网站搜索引擎关键字</span>                                           
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">网站备案号：</label>
                                            <div class="input-group col-sm-4">                                              
                                                <input type="text" class="form-control" name="config[web_site_icp]" value="<?php echo $config['web_site_icp']; ?>">
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 设置在网站底部显示的备案号，如“ 陇ICP备15002349号-1</span>                                           
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">统计代码：</label>
                                            <div class="input-group col-sm-4">                                              
                                                <textarea class="form-control" type="text" rows="3" name="config[web_site_cnzz]"><?php echo $config['web_site_cnzz']; ?></textarea>
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 设置在网站底部显示的站长统计信息</span>                                           
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">版权信息：</label>
                                            <div class="input-group col-sm-4">                                              
                                                <input type="text" class="form-control" name="config[web_site_copy]" value="<?php echo $config['web_site_copy']; ?>">
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 设置在网站底部显示的版权信息</span>                                           
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">站点状态：</label>
                                            <div class="input-group col-sm-4">
                                                <div class="radio i-checks">
                                                    <input type="radio" name='config[web_site_close]' value="1" <?php if($config['web_site_close'] == 1): ?>checked<?php endif; ?>/>开启&nbsp;&nbsp;
                                                    <input type="radio" name='config[web_site_close]' value="0" <?php if($config['web_site_close'] == 0): ?>checked<?php endif; ?>/>关闭
                                                </div>
                                            <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 站点关闭后除管理员外所有人访问不了后台</span>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-3">
                                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                                            </div>
                                        </div>                               
                                    </form>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <form action="<?php echo url('save'); ?>" method="post" class="form-horizontal">  
                                        <div class="hr-line-dashed"></div>                                
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">后台每页记录数：</label>
                                            <div class="input-group col-sm-4">                                              
                                                <input type="text" class="form-control" name="config[list_rows]" value="<?php echo $config['list_rows']; ?>">
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 后台数据每页显示记录数</span>                                           
                                            </div>
                                        </div>                                 
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-3">
                                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                                            </div>
                                        </div>                               
                                    </form>
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <form action="<?php echo url('save'); ?>" method="post" class="form-horizontal">                             
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">禁止后台访问IP：</label>
                                            <div class="input-group col-sm-4">
                                                <textarea class="form-control" type="text" rows="3" name="config[admin_allow_ip]"><?php echo $config['admin_allow_ip']; ?></textarea>
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 多个用#号分隔，如果不配置表示不限制IP访问</span>                                           
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-3">
                                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                                            </div>
                                        </div>                               
                                    </form>
                                </div>
                                <div id="tab-4" class="tab-pane">
                                    <form action="<?php echo url('save'); ?>" method="post" class="form-horizontal">  
                                        <div class="hr-line-dashed"></div>                                
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">AppKey：</label>
                                            <div class="input-group col-sm-4">                                              
                                                <input type="text" class="form-control" name="config[alisms_appkey]" value="<?php echo $config['alisms_appkey']; ?>">
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请前往阿里云云通信平台查看AppKey</span>                                           
                                            </div>
                                        </div>                                 
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">AppSecret：</label>
                                            <div class="input-group col-sm-4">                                              
                                                <input type="text" class="form-control" name="config[alisms_appsecret]" value="<?php echo $config['alisms_appsecret']; ?>">
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请前往阿里云云通信平台查看AppSecret</span>                                           
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">短信签名：</label>
                                            <div class="input-group col-sm-4">                                              
                                                <input type="text" class="form-control" name="config[alisms_signname]" value="<?php echo $config['alisms_signname']; ?>">
                                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请前往阿里云云通信平台查看短信签名</span>                                           
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-3">
                                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                                            </div>
                                        </div>                               
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>         
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

    var config = {
        '.chosen-select': {},                    
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>
</body>
</html>
