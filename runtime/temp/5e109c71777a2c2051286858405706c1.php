<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\ad\index_position.html";i:1505280616;s:84:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\public\header.html";i:1505280616;s:84:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/admin\view\public\footer.html";i:1505280616;}*/ ?>
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
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>广告位列表</h5>
        </div>
        <div class="ibox-content">       
            <div class="row">
                <div class="col-sm-12">   
                <div  class="col-sm-2" style="width: 100px">
                    <div class="input-group" >  
                        <a href="<?php echo url('add_position'); ?>"><button class="btn btn-outline btn-primary" type="button">添加广告位</button></a> 
                    </div>
                </div>                                                                    
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="example-wrap">
                <div class="example">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="long-tr">
                                <th>ID</th>
                                <th>位置名称</th>
                                <th>排序</th>
                                <th>状态</th>
                                <th width="15%">添加时间</th>
                                <th width="15%">更新时间</th>
                                <th width="20%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                                <tr class="long-td">
                                    <td><?php echo $vo['id']; ?></td>
                                    <td><?php echo $vo['name']; ?></td>
                                    <td><?php echo $vo['orderby']; ?></td>                                                              
                                    <td>
                                        <?php if($vo['status'] == 1): ?>
                                            <a href="javascript:;" onclick="position_state(<?php echo $vo['id']; ?>);">
                                                <div id="zt<?php echo $vo['id']; ?>"><span class="label label-info">开启</span></div>
                                            </a>
                                        <?php else: ?>    
                                            <a href="javascript:;" onclick="position_state(<?php echo $vo['id']; ?>);">
                                                <div id="zt<?php echo $vo['id']; ?>"><span class="label label-danger">禁用</span></div>
                                            </a>
                                        <?php endif; ?>   
                                    </td>
                                    <td><?php echo $vo['create_time']; ?></td>
                                    <td><?php echo $vo['update_time']; ?></td>
                                    <td>
                                        <a href="<?php echo url('edit_position',['id'=>$vo['id']]); ?>" class="btn btn-primary btn-xs btn-outline">
                                            <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="del_position(<?php echo $vo['id']; ?>)" class="btn btn-danger btn-xs btn-outline">
                                            <i class="fa fa-trash-o"></i> 删除</a>   
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>                     
                    </table>
                     <div id="Pages" style="text-align:right;"></div><div id="allpage" style=" text-align: right;"></div>
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

    //分页
    laypage({
        cont: $('#Pages'),  // 分页容器
        pages: "<?php echo $allpage; ?>",// 总页数
        skip: false, //是否开启跳页
        skin: '#1AB5B7',//分页组件颜色
        groups: 3,//连续显示分页数
        curr: function(){
            var page = "<?php echo $nowpage; ?>"; // 当前页(后台获取到的)
            return page ? page : 1; // 返回当前页码值
        }(),
        jump: function(e, first){ //触发分页后的回调(单击页码后)
            if(!first){ //一定要加此判断，否则初始时会无限刷新
                location.href = '?page='+e.curr;
            }
        }
    });


/**
 * [del_position 删除广告位]
 * @Author[田建龙 864491238@qq.com]
 */
function del_position(id){
    layer.confirm('确认删除此广告位?', {icon: 3, title:'提示'}, function(index){
        //do something
        $.getJSON('./del_position', {'id' : id}, function(res){
            if(res.code == 1){
                layer.msg(res.msg,{icon:1,time:1500,shade: 0.1},function(){
                    window.location.href="<?php echo url('ad/index_position'); ?>";
                });               
            }else{
                layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
            }
        });

        layer.close(index);
    })

}

/**
 * [position_state 广告位状态]
 * @Author[田建龙 864491238@qq.com]
 */
function position_state(val){
    $.post('<?php echo url("position_state"); ?>',
    {id:val},
    function(data){
         
        if(data.code==1){
            var a='<span class="label label-danger">禁用</span>'
            $('#zt'+val).html(a);
            layer.msg(data.msg,{icon:2,time:1500,shade: 0.1,});
            return false;
        }else{
            var b='<span class="label label-info">开启</span>'
            $('#zt'+val).html(b);
            layer.msg(data.msg,{icon:1,time:1500,shade: 0.1,});
            return false;
        }         
        
    });
    return false;
}


</script>
</body>
</html>