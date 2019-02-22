<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\index\index.html";i:1505280616;s:83:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\public\header.html";i:1505280616;s:80:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\public\nav.html";i:1505280616;s:82:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\public\right.html";i:1505280616;s:83:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\public\footer.html";i:1505280616;}*/ ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>轮回博客</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="renderer" content="webkit">
            <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href="__CSS__/amazeui.min.css">
    <link rel="stylesheet" href="__CSS__/lunhui.css">
    <link rel="stylesheet" href="__CSS__/swiper.min.css">
    <style>
    .swiper-container {
        width: 100%;
        height: 400px;       
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>
    </head>
<body id="blog">

    <nav class="am-g blog-nav am-topbar-fixed-top">
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
        <div class="am-collapse am-container am-topbar-collapse" id="blog-collapse">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <h1 class="am-topbar-brand">
                    <a href="<?php echo url('Index/index'); ?>"><img src="__IMG__/logo.png" alt=""></a>
                </h1>
                <li class="am-active"><a href="<?php echo url('Index/index'); ?>">首页</a></li>
                <li class="am-dropdown" data-am-dropdown>
                    <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                            分类 <span class="am-icon-caret-down"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$vo): ?>
                            <li><a href="<?php echo url('index/index',['cate_id'=>$vo['id']]); ?>"><?php echo $vo['name']; ?></a></li>         
                        <?php endforeach; endif; else: echo "" ;endif; ?>                
                    </ul>
                </li>
                <li><a href="#">说说</a></li>
                <li><a href="#">留言板</a></li>
                <li><a href="#">访客</a></li>
                <li><a href="#">关于我</a></li>               
            </ul>
            <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
              <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
              </div>
            </form>
        </div>
    </nav>

<!-- 导航结束 -->
<!-- 轮播开始 -->
<!-- <div class="am-slider am-slider-default" data-am-flexslider="{playAfterPaused: 8000}">
  <ul class="am-slides">
    <li><img src="assets/i/f17.jpg" /></li>
  </ul>
</div> -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="__IMG__/banner1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="__IMG__/banner2.jpg" alt="" >
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
<!-- 轮播结束 -->
<br>

<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
        <hr>
       <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$vo): ?>
           <article class="am-g blog-entry-article" id="article_list">
               <div class="am-u-md-12 am-u-sm-12">
                    <h1>                      
                        <span class="am-badge am-badge-danger am-radius">原创</span>                    
                        <a href="<?php echo url('detail/index',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
                    </h1>
                </div>
                <div class="am-u-lg-5 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <img src="__IMG__/1.jpg" class="am-u-sm-12" height="200px">
                </div>
                <div class="am-u-lg-7 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <p style="text-indent: 2em;"><?php echo $vo['remark']; ?></p>
                </div>
                <div class="am-u-lg-12 am-u-md-12 am-u-sm-12 blog-cate-text"><span class="am-icon-paper-plane-o"></span> 
                <?php echo date('Y-m-d H:i:s',$vo['create_time']); ?>  作者：[ <?php echo $vo['writer']; ?> ]  分类：[ <?php echo $vo['name']; ?> ]  点击：[<?php echo $vo['views']; ?>]
                </div>
           </article>
       <?php endforeach; endif; else: echo "" ;endif; ?>
      
        <div id="Pages" style="text-align:right;"></div>

    </div>

<!-- 右侧 -->
<div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="__IMG__/f14.jpg" alt="about me" class="blog-entry-img" >
            <p>妹纸</p>
            <p>
        我是妹子UI，中国首个开源 HTML5 跨屏前端框架
        </p><p>我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？</p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>Contact ME</span></h2>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>TAG cloud</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
            <a href="" class="blog-tag">amaze</a>
            <a href="" class="blog-tag">妹纸 UI</a>
            <a href="" class="blog-tag">HTML5</a>
            <a href="" class="blog-tag">这是标签</a>
            <a href="" class="blog-tag">Impossible</a>
            <a href="" class="blog-tag">开源前端框架</a>
            </div>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>么么哒</span></h2>
            <ul class="am-list">
                <li><a href="#">每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>
                <li><a href="#">我把最深沉的秘密放在那里。</a></li>
                <li><a href="#">你不懂我，我不怪你。</a></li>
                <li><a href="#">每个人都有一道伤口， 或深或浅，盖上布，以为不存在。</a></li>
            </ul>
        </div>
    </div>
</div>   

<!-- 底部 -->
  <footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>模板简介</h3>
            <p class="am-text-sm">这是一个使用amazeUI做的简单的前端模板。<br> 博客/ 资讯类 前端模板 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
            Amaze UI 使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售 Amaze UI 及其副本。</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>
            </p>
            <h3>Credits</h3>
            <p>我们追求卓越，然时间、经验、能力有限。Amaze UI 有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>          
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
              <h1>我们站在巨人的肩膀上</h1>
             <h3>Heroes</h3>
            <p>
                <ul>
                    <li>ThinkPHP</li>
                    <li>jQuery</li>
                    <li>Zepto.js</li>
                    <li>Seajs</li>
                    <li>LESS</li>
                    <li>...</li>
                </ul>
            </p>
        </div>
    </div>    
    <div class="blog-text-center">Copyright © 2014 - 2016 轮回博客 & 版权所有   陇ICP备15002349号-1 | 博客管理 |站长统计</div>    
  </footer>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/static/admin/js/jquery.form.js"></script>
<script src="/static/admin/js/layer/layer.js"></script>
<script src="/static/admin/js/laypage/laypage.js"></script>
<script src="/static/admin/js/laytpl/laytpl.js"></script>
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/swiper.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 10,       
        loop : true,//循环
        speed:800,//滑动速度
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    </script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="__JS__/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="__JS__/amazeui.min.js"></script>
</body>
</html>
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
            //var urls = "<?php echo url('index/index'); ?>";
            location.href = '?page='+e.curr;
        }
    }
 });

</script>