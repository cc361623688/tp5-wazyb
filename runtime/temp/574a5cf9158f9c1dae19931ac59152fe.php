<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:82:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\detail\index.html";i:1505280616;s:83:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\public\header.html";i:1505280616;s:80:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\public\nav.html";i:1505280616;s:82:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\public\right.html";i:1505280616;s:83:"D:\phpStudy\PHPTutorial\WWW\demo\public/../application/home\view\public\footer.html";i:1505280616;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $detail['title']; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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

<body id="blog-article-sidebar">
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
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
        <article class="am-article blog-article-p">
            <div class="am-article-hd">
                <h1 class="am-article-title blog-text-center"><?php echo $detail['title']; ?></h1>
                <p class="am-article-meta blog-text-center">
                    <span><a href="#" class="blog-color">article &nbsp;</a></span>-
                    <span><a href="#">@amazeUI &nbsp;</a></span>-
                    <span><a href="#">2015/10/9</a></span>
                </p>
            </div>        
            <div class="am-article-bd">
                <p><?php echo $detail['content']; ?></p>
            </div>
        </article>
        
        <div class="am-g blog-article-widget blog-article-margin">
            <div class="am-u-sm-12 am-u-sm-centered blog-text-center">
                <div class="a-write hidden-xs">
                    <eq name="Article.a_type" value="1">本文为原创，转载请注明出处:&nbsp;&nbsp;<a>http://ilunhui.cn/deatil/index/id/<?php echo $detail['id']; ?>.html</a>
                        <br>
                    </eq>
                    发表自：&nbsp;<?php echo $detail['from']; ?>&nbsp;&nbsp;地址：<?php echo $detail['ip']; ?>&nbsp;&nbsp;关键词：&nbsp;<?php echo !empty($detail['keyword'])?$detail['keyword']:'暂无标签'; ?>&nbsp;&nbsp;
                </div>
                <hr>
                <div class="bdsharebuttonbox fenxiang">
                    <a class="bds_more" href="#" data-cmd="more"></a>
                    <a title="分享到QQ空间" class="bds_qzone" href="#" data-cmd="qzone"></a>
                    <a title="分享到腾讯微博" class="bds_tqq" href="#" data-cmd="tqq"></a>
                    <a title="分享到微信" class="bds_weixin" href="#" data-cmd="weixin"></a>
                    <a title="分享到百度贴吧" class="bds_tieba" href="#" data-cmd="tieba"></a>
                    <a title="分享到百度云收藏" class="bds_bdysc" href="#" data-cmd="bdysc"></a>
                    <a title="分享到QQ好友" class="bds_sqq" href="#" data-cmd="sqq"></a>
                </div>
                <script>
                    window._bd_share_config = {
                        "common": {
                            "bdSnsKey": {},
                            "bdText": "轮回博客的分享",
                            "bdMini": "2",
                            "bdMiniList": false,
                            "bdPic": "http://ilunhui.cn//Public/Img/logo.png",
                            "bdStyle": "1",
                            "bdSize": "24"
                        },
                        "share": {}
                    };
                    with(document)
                    0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                </script>
            </div>
        </div>

        <hr>
            <ul class="am-pagination blog-article-margin">
              <p>上一篇：
                <?php if($down['id'] == 0): ?>
                    <a title='没有了'>&nbsp;没有了</a>
                <?php else: ?>
                    <a title='<?php echo $down['title']; ?>' href="<?php echo url('detail/index',['id'=>$down['id']]); ?>" class="down_text"><?php echo $down['title']; ?></a>
                <?php endif; ?>

              </p>
              <p>下一篇：
                <?php if($up['id'] == 0): ?>
                    <a title='没有了'>&nbsp;没有了</a>
                <?php else: ?>
                    <a title='<?php echo $up['title']; ?>' href="<?php echo url('detail/index',['id'=>$up['id']]); ?>" class="down_text"><?php echo $up['title']; ?></a>
                <?php endif; ?>
              </p>
            </ul>      
        <hr>

        <form class="am-form am-g">
            <h3 class="blog-comment">评论</h3>
            <fieldset>
                <div class="am-form-group am-u-sm-4 blog-clear-left">
                    <input type="text" class="" placeholder="名字">
                </div>
                <div class="am-form-group am-u-sm-4">
                    <input type="email" class="" placeholder="邮箱">
                </div>

                <div class="am-form-group am-u-sm-4 blog-clear-right">
                    <input type="password" class="" placeholder="网站">
                </div>
            
                <div class="am-form-group">
                    <textarea class="" rows="5" placeholder="一字千金"></textarea>
                </div>
            
                <p><button type="submit" class="am-btn am-btn-primary">发表评论</button></p>
            </fieldset>
        </form>

        <hr>
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