<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"F:\phpStudy\WWW\tp-code-gen\public\gen/application/gen\view\create_layout\index.html";i:1546590797;s:69:"F:\phpStudy\WWW\tp-code-gen\public\gen\application\gen\view\main.html";i:1546586483;s:69:"F:\phpStudy\WWW\tp-code-gen\public\gen\application\gen\view\menu.html";i:1551234258;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="/static/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/static/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <script src="/static/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/static/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/static/assets/css/amazeui.datatables.min.css"/>
    <link rel="stylesheet" href="/static/assets/css/app.css">
    <script src="/static/assets/js/jquery.min.js"></script>

</head>

<body data-type="widgets">
<script src="/static/assets/js/theme.js"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->
    <header>

        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="am-fl tpl-header-switch-button am-icon-list">
                <!--<span></span>-->
            </div>

            <div class="am-fr tpl-header-navbar">
                <ul>
                    <!-- 退出 -->
                    <li class="am-text-sm">
                        <a href="javascript:;">
                            <span class="am-icon-sign-out"></span> 退出
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </header>

    <!-- 风格切换 -->
    <div class="tpl-skiner">
        <div class="tpl-skiner-toggle am-icon-cog">
        </div>
        <div class="tpl-skiner-content">
            <div class="tpl-skiner-content-title">
                选择主题
            </div>
            <div class="tpl-skiner-content-bar">
                <span class="skiner-color skiner-white" data-color="theme-white"></span>
                <span class="skiner-color skiner-black" data-color="theme-black"></span>
            </div>
        </div>
    </div>

    <!-- 侧边导航栏 -->
    <div class="left-sidebar">
        <!-- 用户信息 -->

        <ul class="sidebar-nav">

            <!-- 菜单 -->
            <li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/CreateLayout"
       <?php if($page_name == 'public-file'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 公共文件生成
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/WedgitCode/menu"
       <?php if($page_name == 'menu'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 菜单生成
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/ViewCode"
       <?php if($page_name == 'front-file'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 前台界面生成
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/ControllerCode"
       <?php if($page_name == 'controll-file'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 控制器代码生成
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/ModelCode/index"
       <?php if($page_name == 'auto-model'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 模型代码生成
    </a>
</li>





            <!-- 菜单 -->

        </ul>
    </div>

    <div class="tpl-content-wrapper">
        <!-- 内容区域 -->
        

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">部署资源文件</div>
                </div>
                <div class="widget-body am-fr">
                    <form class="am-form tpl-form-border-form">
                        <div class="am-form-group">
                            <label class="am-u-sm-12 am-form-label am-text-left">目标模块
                            </label>
                            <div class="am-u-sm-12">
                                <input type="text" class="tpl-form-input am-margin-top-xs" id="module-name"
                                       value="<?php echo $moduleName; ?>" disabled>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label class="am-u-sm-12 am-form-label am-text-left">风格模板
                            </label>
                            <div class="am-u-sm-12">
                                <input type="text" class="tpl-form-input am-margin-top-xs" id="layout-name"
                                       value="<?php echo $layoutName; ?>" disabled>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-12 am-u-sm-push-12">
                                <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success"
                                        id="submit">
                                    发布
                                </button>
                            </div>
                        </div>

                        <div class="am-panel am-panel-default am-hide" id="result-panel">
                            <div class="am-panel-bd" id="result"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#submit').click(function () {
            $.post("<?php echo CONTROLLER_NAME; ?>/creatFiles", {
                'moduleName': $('#module-name').val(),
                'layoutName': $('#layout-name').val()
            }, function (data) {
                $('#result-panel').removeClass('am-hide');
                $('#result').html(data);
            });
        });
    });
</script>

        <!-- 内容区域 -->
    </div>
</div>

<script src="/static/assets/js/amazeui.min.js"></script>
<script src="/static/assets/js/amazeui.datatables.min.js"></script>
<script src="/static/assets/js/dataTables.responsive.min.js"></script>
<script src="/static/assets/js/app.js"></script>
</body>
</html>