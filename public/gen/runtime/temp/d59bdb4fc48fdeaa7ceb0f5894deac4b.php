<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"F:\phpStudy\WWW\tp-code-gen\public\gen/application/gen\view\view_code\index.html";i:1546590690;s:69:"F:\phpStudy\WWW\tp-code-gen\public\gen\application\gen\view\main.html";i:1551259222;s:69:"F:\phpStudy\WWW\tp-code-gen\public\gen\application\gen\view\menu.html";i:1551322195;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Code Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="/gen/static/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/gen/static/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <script src="/gen/static/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/gen/static/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/gen/static/assets/css/amazeui.datatables.min.css"/>
    <link rel="stylesheet" href="/gen/static/assets/css/app.css">
    <script src="/gen/static/assets/js/jquery.min.js"></script>

</head>

<body data-type="widgets">
<script src="/gen/static/assets/js/theme.js"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->
    <!--<header>-->

    <!-- 右侧内容 -->
    <!--<div class="tpl-header-fluid">-->
    <!-- 侧边切换 -->
    <!--<div class="am-fl tpl-header-switch-button am-icon-list">-->
    <!--<span></span>-->
    <!--</div>-->

    <!--<div class="am-fr tpl-header-navbar">-->
    <!--<ul>-->
    <!--<li class="am-text-sm">-->
    <!--<a href="javascript:;">-->
    <!--<span class="am-icon-sign-out"></span> 退出-->
    <!--</a>-->
    <!--</li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->

    <!--</header>-->

    <!-- 风格切换 -->
    <!--<div class="tpl-skiner">-->
    <!--<div class="tpl-skiner-toggle am-icon-cog">-->
    <!--</div>-->
    <!--<div class="tpl-skiner-content">-->
    <!--<div class="tpl-skiner-content-title">-->
    <!--选择主题-->
    <!--</div>-->
    <!--<div class="tpl-skiner-content-bar">-->
    <!--<span class="skiner-color skiner-white" data-color="theme-white"></span>-->
    <!--<span class="skiner-color skiner-black" data-color="theme-black"></span>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!-- 侧边导航栏 -->
    <div class="left-sidebar">
        <!-- 用户信息 -->

        <ul class="sidebar-nav">

            <!-- 菜单 -->
            <li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/index.php/CreateLayout"
       <?php if($page_name == 'public-file'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 资源
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/index.php/WedgitCode/menu"
       <?php if($page_name == 'menu'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 菜单
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/index.php/ViewCode"
       <?php if($page_name == 'front-file'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 视图
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/index.php/ControllerCode"
       <?php if($page_name == 'controll-file'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 控制器
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/index.php/ModelCode/index"
       <?php if($page_name == 'auto-model'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 模型
    </a>
</li>

<li class="sidebar-nav-link">
    <a href="<?php echo APP_NAME; ?>/index.php/ValidateCode/index"
       <?php if($page_name == 'validate'): ?>class="active" <?php endif; ?>>
    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 验证器
    </a>
</li>




            <!-- 菜单 -->

        </ul>
    </div>

    <div class="tpl-content-wrapper">
        <!-- 内容区域 -->
        

<!-- 内容区域 -->
<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">生成前台界面</div>
                </div>
                <div class="widget-body am-fr">
                    <form class="am-form tpl-form-border-form">
                        <div class="am-form-group">
                            <label class="am-u-sm-12 am-form-label am-text-left">目标模块
                            </label>
                            <div class="am-u-sm-12">
                                <input type="text" class="tpl-form-input am-margin-top-xs" id="moduleName"
                                       value="<?php echo $moduleName; ?>" disabled>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label class="am-u-sm-12 am-form-label am-text-left">前端风格
                            </label>
                            <div class="am-u-sm-12">


                                <select id="theme">
                                    <?php if(is_array($themeList) || $themeList instanceof \think\Collection || $themeList instanceof \think\Paginator): $i = 0; $__LIST__ = $themeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$theme): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $theme; ?>"><?php echo $theme; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </div>
                        </div>

                        <div class="am-form-group">
                            <label class="am-u-sm-12 am-form-label am-text-left">布局模板
                            </label>
                            <div class="am-u-sm-12">
                                <input type="text" class="tpl-form-input am-margin-top-xs" id="layoutList"
                                       value="layout" placeholder="逗号分隔,可留空">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label class="am-u-sm-12 am-form-label am-text-left">数据表
                            </label>
                            <div class="am-u-sm-12">
                                <?php if(is_array($tableNameList) || $tableNameList instanceof \think\Collection || $tableNameList instanceof \think\Paginator): $i = 0; $__LIST__ = $tableNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?>
                                <label class="am-checkbox">
                                    <input type="checkbox" name="table" value="<?php echo $table; ?>" data-am-ucheck checked>
                                    <?php echo $table; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-12 am-u-sm-push-12">
                                <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success"
                                        id="submit">
                                    生成
                                </button>
                            </div>
                        </div>

                        <!--$('#result-panel').removeClass('am-hide');-->
                        <!--$('#result').html(data);-->
                        <div class="am-panel am-panel-default am-hide" id="result-panel">
                            <div class="am-panel-bd am-text-break" id="result"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    var db_prefix = '<?php echo $db_prefix; ?>';

    $(function () {
        $('#submit').click(function () {
            var theme = $('#theme').val();
            var module = $('#moduleName').val();
            var checkedBox = $('input:checked');
            var selectTableName = [];
            if (db_prefix != '') {
                checkedBox.each(function () {
                    selectTableName.push($(this).val().replace(db_prefix, ''));
                });
                console.log(selectTableName)
            } else {
                checkedBox.each(function () {
                    selectTableName.push($(this).val());
                });
            }

            $.post("<?php echo CONTROLLER_NAME; ?>/generateAllView", {
                'moduleName': module,
                'selectTableName': selectTableName,
                'theme': theme
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

<script src="/gen/static/assets/js/amazeui.min.js"></script>
<script src="/gen/static/assets/js/amazeui.datatables.min.js"></script>
<script src="/gen/static/assets/js/dataTables.responsive.min.js"></script>
<script src="/gen/static/assets/js/app.js"></script>
</body>
</html>