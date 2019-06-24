<?php
    $menus = \App\Helpers\Helper::menu();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $setting['appname']; ?>:<?php echo $setting['title']; ?> </title>
    <?php if(Request::segment(1)=="blog"): ?>
        <?php echo Html::style('resources/assets/css/blog.css'); ?>

    <?php elseif(Request::segment(1)=="forum"): ?>
        <?php echo Html::style('resources/assets/css/forum.css'); ?>

    <?php else: ?>
        <?php echo Html::style('resources/assets/css/style.css'); ?>

    <?php endif; ?>

    <?php echo Html::style('resources/assets/css/header_footer.css'); ?>

    <?php echo Html::style('resources/assets/css/bootstrap.css'); ?>

    <?php echo Html::style('resources/assets/css/bootstrap-theme.css'); ?>

    <?php echo Html::style('resources/assets/css/font-awesome.min.css'); ?>

    <?php echo Html::style('resources/assets/css/new.css'); ?>

    <?php echo Html::style('resources/assets/css/responsive-tabs.css'); ?>

    <?php echo Html::style('resources/assets/css/ashutosh.css'); ?>

    <?php echo Html::style('http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'); ?>

    <?php echo Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'); ?>

    <?php echo Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js'); ?>

    <?php echo Html::script('resources/assets/js/jquery.min.js'); ?>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <script>
        $('.lazy').Lazy({
            // your configuration goes here
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true,
            onError: function(element) {
                console.log('error loading ' + element.data('src'));
            }
        });
    </script>
    <?php
    $cartCollection = Cart::getContent();
    ?>
  <style>
        .affix { top: 0;  width:auto; z-index:1 !important;  }
        .affix + .container-fluid { padding-top: 70px;}
        .morecontent span {
            display: none;
        }
        .morelink {
            display: block;
        }
    </style>
</head>
<body>
<!--header-->
<div class="header_wra">
    <div class="header_fixed">
        <div class="container-fluid">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="navbar-brand" href="<?php echo url('/'); ?>">
                        <?php echo Html::image('public/'. $setting['logo'], $setting['appname'],['class'=>'img-res logo']); ?>

                    </a>
                    <span id="search_show"><i class="fa fa-search" aria-hidden="true"></i></span>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper my_nav" style="transition-property: none;">
                    <?php echo Html::image('public/'. $setting['logo'], $setting['appname'],['class'=>'img-res logo_mob']); ?>

                    <div class="mob_sigin">
                        <?php if(Auth::check()): ?>
                        <div class="user_name"><a href="<?php echo url('dashboard'); ?>"><span>
                            <?php if(Auth::user()->photo==""): ?>
                            <?php echo Html::image('resources/assets/images/profile_pic_bg.jpg??w=32&h=32&fit=crop-center','',['class'=>'img-res']); ?>

                            <?php else: ?>
                            <?php echo Html::image(Auth::user()->photo.'?w=32&h=32&fit=crop-center','',['class'=>'img-res']); ?>

                           <?php endif; ?>
                          </span> Hello, <?php echo Auth::user()->name; ?>!</a>
                          <ul>
                          <li><a href="<?php echo url('dashboard'); ?>"><i class="fa fa-user"></i> Profile</a></li>
                          <li><a href="<?php echo url('logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                          </ul>
                          </div>
                         <?php else: ?>
                          <div class="signin"><a href="<?php echo url('login'); ?>">Signin</a></div>
                         <?php endif; ?>
                        <ul class="round_btn">
                            <li><a href="<?php echo url('faq'); ?>"><i class="fa fa-question" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo url('wishlist'); ?>"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo url('checkout'); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php echo @$cartCollection->count(); ?></span></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="nav-menu nav navbar-nav">
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="active"><a href="<?php echo url($menu->url); ?>"><?php echo ucfirst($menu->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="desktop_sigin">
                      <?php if(Auth::check()): ?>
                      <div class="user_name"><a href="<?php echo url('dashboard'); ?>"><span>
                                <?php if(Auth::user()->photo==""): ?>
                                      <?php echo Html::image('resources/assets/images/profile_pic_bg.jpg??w=32&h=32&fit=crop-center','',['class'=>'img-res']); ?>

                                  <?php else: ?>
                                      <?php echo Html::image(Auth::user()->photo.'?w=32&h=32&fit=crop-center','',['class'=>'img-res']); ?>

                                  <?php endif; ?>

                              </span> Hello, <?php echo Auth::user()->name; ?>!</a>
                        <ul>
                        <li><a href="<?php echo url('dashboard'); ?>"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="<?php echo url('logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                        </div>
                       <?php else: ?>
                        <div class="signin"><a href="<?php echo url('login'); ?>">Signin</a></div>
                       <?php endif; ?>
                        <ul class="round_btn">
                            <li><a href="<?php echo url('faq'); ?>"><i class="fa fa-question" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo url('wishlist'); ?>"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo url('checkout'); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php echo @$cartCollection->count(); ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!--end header-->

<?php echo $__env->yieldContent('content'); ?>

<!--footer-->
<div class="footer_wra">
    <div class="container-fluid">
        <div class="f_column">
          <?php echo $setting['footer_section_1']; ?>

        </div>
        <div class="f_column">
            <?php echo $setting['footer_section_2']; ?>

        </div>
        <div class="f_column">
          <?php echo $setting['footer_section_3']; ?>

        </div>
        <div class="f_column">
            <?php echo $setting['footer_section_4']; ?>

        </div>
        <div class="f_column">
            <div class="title">MOBILE APP</div>
            <?php echo Html::image('resources/assets/images/gplay.png',''); ?>

            <?php echo Html::image('resources/assets/images/app_store.png',''); ?>

            <div class="lan">
                <select>
                    <option>Language</option>
                    <option>English</option>
                </select>
                <select>
                    <option>Dollar</option>
                </select>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer_wra2">
    <div class="container-fluid">
        <div class="mob_footer">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_matter">
                        <h2>FEATURED TRAVEL DESTINATION</h2>
                        <p>
                          <?php $featureTour = \App\Helpers\Helper::featureTour();  ?>
                          <?php $__currentLoopData = $featureTour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ftValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php
                                $ftour = explode('/',$ftValue->page_url);
                                $ft = urlencode(end($ftour));
                          ?>
                          <a href="<?php echo url('/location/'.urldecode($ft)); ?>"><?php echo ucfirst(str_replace(array('+','%2B','%20'),' ',urldecode($ft))); ?></a>  |
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_matter">
                        <h2>POPULAR TOUR SEARCH</h2>
                        <p>
                         <?php $searchResult = \App\Helpers\Helper::searchResult();  ?>
                            <?php $__currentLoopData = $searchResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $stour = explode('/',$sValue->page_url);
                                $st = urlencode(end($stour));
                                ?>
                                <a href="<?php echo url('/location/'.urldecode($st)); ?>"><?php echo ucfirst(str_replace(array('+','%2B','%20'),' ',urldecode($st))); ?></a>  |
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
            <?php echo $setting['copy_right']; ?>

        </div>
    </div>
</div>
<!--end footer-->
<a href="#" class="scrollToTop"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
<?php echo Html::script('resources/assets/js/bootstrap.min.js'); ?>

<?php echo Html::script('resources/assets/js/init.js'); ?>

<?php echo Html::script('https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.5/platform.js'); ?>

<?php echo Html::script('resources/assets/js/jquery.responsiveTabs.js'); ?>

<?php echo Html::script('https://code.jquery.com/ui/1.12.1/jquery-ui.js'); ?>

<script>
$('.r-tabs-anchor').click(function() {
    $("i", this).toggleClass("fa-chevron-down fa-chevron-right");
});
</script>
<script>
        $(window).load(function() {
            var dt = new Date();
            $.ajax({
                type: "GET",
                url: "<?php echo url('client-log') ?>",
                data: { log_type: '1', client_time: dt , request_uri : "<?php echo $_SERVER['REQUEST_URI']  ?>" },
            });
        });
</script>
<script type="text/javascript">
        $(document).ready(function () {
            var $tabs = $('#horizontalTab');
            $tabs.responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                click: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
                },
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });
            $('.select-tab').on('click', function() {
                $tabs.responsiveTabs('activate', $(this).val());
            });

        });
    </script>
<script>
    $(document).ready(function() {
        var showChar = 100;
        var ellipsestext = "...";
        var moretext = "Show less>";
        var lesstext = "Show more";
        $('.more').each(function() {
            var content = $(this).html();
            if(content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                $(this).html(html);
            }
        });
        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
    $('.heading3').click(function() {
        $("i", this).toggleClass("fa-angle-down fa-angle-up");
        return false;
    });
    $('.heading3').click(function(){
        target_num = $(this).attr('id').split('-')[1];
        content_id = '#expandable-'.concat(target_num);
        $(content_id).slideToggle('fast');
        return false;
    });
    $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
              if (
                  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                  &&
                  location.hostname == this.hostname
              ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                    });
                }
            }

        });
    $(document).ready(function(){
        $("#search-box").keyup(function(){
            $.ajax({
                type: "GET",
                url: "<?php echo url('search') ?>",
                data:'keyword='+$(this).val(),
                beforeSend: function(){
                    $("#search-box").css("display:block");
                },
                success: function(data){
                    $("#suggesstion-box").show();
                    $("#suggesstion-box").html(data);
                    $("#search-box").css("background","#FFF");
                }
            });
        });
    });
    function selectCountry(val) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
    }
    $(document).ready(function(){
        $("#search_hide").click(function(){
            $(".mobile_search").hide();
        });
        $("#search_show").click(function(){
            $(".mobile_search").show();
        });
    });
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 200) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    });
    $(document).click(function (event) {
        var clickover = $(event.target);
        var $navbar = $(".navbar-collapse");
        var _opened = $navbar.hasClass("in");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
            $navbar.collapse('hide');
        }
    });
</script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            minDate: 0
        });
    } );
</script>
<script>
    $( function() {
        $( "#datepicker2" ).datepicker({
            changeMonth: true,
            changeYear: false,
            minDate: 0
        });
    } );
</script>
<script>
$(document).ready(function(){
    $("#search_hide").click(function(){
        $(".mobile_search").hide();
    });
    $("#search_show").click(function(){
        $(".mobile_search").show();
    });
});
</script>
<script>!function(n,e,i,a){n.navigation=function(t,s){var o={responsive:!0,mobileBreakpoint:768,showDuration:300,hideDuration:300,showDelayDuration:0,hideDelayDuration:0,submenuTrigger:"click",effect:"fade",submenuIndicator:!0,hideSubWhenGoOut:!0,visibleSubmenusOnMobile:!1,fixed:!1,overlay:!0,overlayColor:"rgba(0, 0, 0, 0.5)",hidden:!1,offCanvasSide:"left",onInit:function(){},onShowOffCanvas:function(){},onHideOffCanvas:function(){}},u=this,r=Number.MAX_VALUE,d=1,f="click.nav touchstart.nav",l="mouseenter.nav",c="mouseleave.nav";u.settings={};var t=(n(t),t);n(t).find(".nav-menus-wrapper").prepend("<span class='nav-menus-wrapper-close-button'>✕</span>"),n(t).find(".nav-search").length>0&&n(t).find(".nav-search").find("form").prepend("<span class='nav-search-close-button'>✕</span>"),u.init=function(){u.settings=n.extend({},o,s),"right"==u.settings.offCanvasSide&&n(t).find(".nav-menus-wrapper").addClass("nav-menus-wrapper-right"),u.settings.hidden&&(n(t).addClass("navigation-hidden"),u.settings.mobileBreakpoint=99999),v(),u.settings.fixed&&n(t).addClass("navigation-fixed"),n(t).find(".nav-toggle").on("click touchstart",function(n){n.stopPropagation(),n.preventDefault(),u.showOffcanvas(),s!==a&&u.callback("onShowOffCanvas")}),n(t).find(".nav-menus-wrapper-close-button").on("click touchstart",function(){u.hideOffcanvas(),s!==a&&u.callback("onHideOffCanvas")}),n(t).find(".nav-search-button").on("click touchstart",function(n){n.stopPropagation(),n.preventDefault(),u.toggleSearch()}),n(t).find(".nav-search-close-button").on("click touchstart",function(){u.toggleSearch()}),n(t).find(".megamenu-tabs").length>0&&y(),n(e).resize(function(){m(),C()}),m(),s!==a&&u.callback("onInit")};var v=function(){n(t).find("li").each(function(){n(this).children(".nav-dropdown,.megamenu-panel").length>0&&(n(this).children(".nav-dropdown,.megamenu-panel").addClass("nav-submenu"),u.settings.submenuIndicator&&n(this).children("a").append("<span class='submenu-indicator'><span class='submenu-indicator-chevron'></span></span>"))})};u.showSubmenu=function(e,i){g()>u.settings.mobileBreakpoint&&n(t).find(".nav-search").find("form").slideUp(),"fade"==i?n(e).children(".nav-submenu").stop(!0,!0).delay(u.settings.showDelayDuration).fadeIn(u.settings.showDuration):n(e).children(".nav-submenu").stop(!0,!0).delay(u.settings.showDelayDuration).slideDown(u.settings.showDuration),n(e).addClass("nav-submenu-open")},u.hideSubmenu=function(e,i){"fade"==i?n(e).find(".nav-submenu").stop(!0,!0).delay(u.settings.hideDelayDuration).fadeOut(u.settings.hideDuration):n(e).find(".nav-submenu").stop(!0,!0).delay(u.settings.hideDelayDuration).slideUp(u.settings.hideDuration),n(e).removeClass("nav-submenu-open").find(".nav-submenu-open").removeClass("nav-submenu-open")};var h=function(){n("body").addClass("no-scroll"),u.settings.overlay&&(n(t).append("<div class='nav-overlay-panel'></div>"),n(t).find(".nav-overlay-panel").css("background-color",u.settings.overlayColor).fadeIn(300).on("click touchstart",function(n){u.hideOffcanvas()}))},p=function(){n("body").removeClass("no-scroll"),u.settings.overlay&&n(t).find(".nav-overlay-panel").fadeOut(400,function(){n(this).remove()})};u.showOffcanvas=function(){h(),"left"==u.settings.offCanvasSide?n(t).find(".nav-menus-wrapper").css("transition-property","left").addClass("nav-menus-wrapper-open"):n(t).find(".nav-menus-wrapper").css("transition-property","right").addClass("nav-menus-wrapper-open")},u.hideOffcanvas=function(){n(t).find(".nav-menus-wrapper").removeClass("nav-menus-wrapper-open").on("webkitTransitionEnd moztransitionend transitionend oTransitionEnd",function(){n(t).find(".nav-menus-wrapper").css("transition-property","none").off()}),p()},u.toggleOffcanvas=function(){g()<=u.settings.mobileBreakpoint&&(n(t).find(".nav-menus-wrapper").hasClass("nav-menus-wrapper-open")?(u.hideOffcanvas(),s!==a&&u.callback("onHideOffCanvas")):(u.showOffcanvas(),s!==a&&u.callback("onShowOffCanvas")))},u.toggleSearch=function(){"none"==n(t).find(".nav-search").find("form").css("display")?(n(t).find(".nav-search").find("form").slideDown(),n(t).find(".nav-submenu").fadeOut(200)):n(t).find(".nav-search").find("form").slideUp()};var m=function(){u.settings.responsive?(g()<=u.settings.mobileBreakpoint&&r>u.settings.mobileBreakpoint&&(n(t).addClass("navigation-portrait").removeClass("navigation-landscape"),D()),g()>u.settings.mobileBreakpoint&&d<=u.settings.mobileBreakpoint&&(n(t).addClass("navigation-landscape").removeClass("navigation-portrait"),k(),p(),u.hideOffcanvas()),r=g(),d=g()):k()},b=function(){n("body").on("click.body touchstart.body",function(e){0===n(e.target).closest(".navigation").length&&(n(t).find(".nav-submenu").fadeOut(),n(t).find(".nav-submenu-open").removeClass("nav-submenu-open"),n(t).find(".nav-search").find("form").slideUp())})},g=function(){return e.innerWidth||i.documentElement.clientWidth||i.body.clientWidth},w=function(){n(t).find(".nav-menu").find("li, a").off(f).off(l).off(c)},C=function(){if(g()>u.settings.mobileBreakpoint){var e=n(t).outerWidth(!0);n(t).find(".nav-menu").children("li").children(".nav-submenu").each(function(){n(this).parent().position().left+n(this).outerWidth()>e?n(this).css("right",0):n(this).css("right","auto")})}},y=function(){function e(e){var i=n(e).children(".megamenu-tabs-nav").children("li"),a=n(e).children(".megamenu-tabs-pane");n(i).on("click.tabs touchstart.tabs",function(e){e.stopPropagation(),e.preventDefault(),n(i).removeClass("active"),n(this).addClass("active"),n(a).hide(0).removeClass("active"),n(a[n(this).index()]).show(0).addClass("active")})}if(n(t).find(".megamenu-tabs").length>0)for(var i=n(t).find(".megamenu-tabs"),a=0;a<i.length;a++)e(i[a])},k=function(){w(),n(t).find(".nav-submenu").hide(0),navigator.userAgent.match(/Mobi/i)||navigator.maxTouchPoints>0||"click"==u.settings.submenuTrigger?n(t).find(".nav-menu, .nav-dropdown").children("li").children("a").on(f,function(i){if(u.hideSubmenu(n(this).parent("li").siblings("li"),u.settings.effect),n(this).closest(".nav-menu").siblings(".nav-menu").find(".nav-submenu").fadeOut(u.settings.hideDuration),n(this).siblings(".nav-submenu").length>0){if(i.stopPropagation(),i.preventDefault(),"none"==n(this).siblings(".nav-submenu").css("display"))return u.showSubmenu(n(this).parent("li"),u.settings.effect),C(),!1;if(u.hideSubmenu(n(this).parent("li"),u.settings.effect),"_blank"==n(this).attr("target")||"blank"==n(this).attr("target"))e.open(n(this).attr("href"));else{if("#"==n(this).attr("href")||""==n(this).attr("href"))return!1;e.location.href=n(this).attr("href")}}}):n(t).find(".nav-menu").find("li").on(l,function(){u.showSubmenu(this,u.settings.effect),C()}).on(c,function(){u.hideSubmenu(this,u.settings.effect)}),u.settings.hideSubWhenGoOut&&b()},D=function(){w(),n(t).find(".nav-submenu").hide(0),u.settings.visibleSubmenusOnMobile?n(t).find(".nav-submenu").show(0):(n(t).find(".nav-submenu").hide(0),n(t).find(".submenu-indicator").removeClass("submenu-indicator-up"),u.settings.submenuIndicator?n(t).find(".submenu-indicator").on(f,function(e){return e.stopPropagation(),e.preventDefault(),u.hideSubmenu(n(this).parent("a").parent("li").siblings("li"),"slide"),u.hideSubmenu(n(this).closest(".nav-menu").siblings(".nav-menu").children("li"),"slide"),"none"==n(this).parent("a").siblings(".nav-submenu").css("display")?(n(this).addClass("submenu-indicator-up"),n(this).parent("a").parent("li").siblings("li").find(".submenu-indicator").removeClass("submenu-indicator-up"),n(this).closest(".nav-menu").siblings(".nav-menu").find(".submenu-indicator").removeClass("submenu-indicator-up"),u.showSubmenu(n(this).parent("a").parent("li"),"slide"),!1):(n(this).parent("a").parent("li").find(".submenu-indicator").removeClass("submenu-indicator-up"),void u.hideSubmenu(n(this).parent("a").parent("li"),"slide"))}):k())};u.callback=function(n){s[n]!==a&&s[n].call(t)},u.init()},n.fn.navigation=function(e){return this.each(function(){if(a===n(this).data("navigation")){var i=new n.navigation(this,e);n(this).data("navigation",i)}})}}(jQuery,window,document),$(document).ready(function(){$("#navigation").navigation()});</script>
</body>
</html>
