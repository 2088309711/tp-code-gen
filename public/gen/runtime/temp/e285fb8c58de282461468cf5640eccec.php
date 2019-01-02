<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:33:"template/ProjectConfig\index.html";i:1546415995;s:67:"F:\phpStudy\WWW\tp-code-gen\public\gen\template\default_layout.html";i:1546420313;s:61:"F:\phpStudy\WWW\tp-code-gen\public\gen\template\leftmenu.html";i:1546420465;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>配置TPH</title>
    <script src="<?php echo TEMPLATE_PATH; ?>asset/js/jquery.js"></script> <!-- jQuery -->
    <!-- Stylesheets -->
    <link href="<?php echo TEMPLATE_PATH; ?>asset/style/bootstrap.css" rel="stylesheet">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>asset/style/font-awesome.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>asset/style/jquery-ui.css">
    <!-- Calendar -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>asset/style/fullcalendar.css">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>asset/style/prettyPhoto.css">
    <!-- Star rating -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>asset/style/rateit.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>asset/style/bootstrap-datetimepicker.min.css">
    <!-- CLEditor -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>asset/style/jquery.cleditor.css">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>asset/style/bootstrap-switch.css">
    <!-- Main stylesheet -->
    <link href="<?php echo TEMPLATE_PATH; ?>asset/style/style.css" rel="stylesheet">
    <!-- Widgets stylesheet -->
    <link href="<?php echo TEMPLATE_PATH; ?>asset/style/widgets.css" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="<?php echo TEMPLATE_PATH; ?>asset/js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo MODULE_PATH; ?>/img/favicon/favicon.png">
    <script>
        $(document).ready(function () {
            $.post('<?php echo U(MODULE_NAME."/Index/checkVersion"); ?>',
                function (data) {
                    $('#version').html(data);
                }
            );
        });
    </script>
</head>

<body>
<!-- Header starts -->
<header>
    <div class="container">
        <div class="row">

            <!-- Logo section -->
            <div class="col-md-4">
                <!-- Logo. <!-- Logo ends -->
                <div class="logo">
                    <h1>代码生成器</h1>
                </div>
            </div>

            <!-- Button section -->
            <div class="col-md-4">

            </div>

            <!-- Data section -->

            <div class="col-md-4">
                <div class="header-data">

                    <!-- Traffic data -->
                    <div class="hdata">
                        <div class="mcol-left">
                            <!-- Icon with red background -->
                            <i class="icon-signal bred"></i>
                        </div>
                        <div class="mcol-right">
                            <!-- Number of visitors -->
                            <p><a href="https://github.com/zhuanqianfish/ThinkphpHelper">项目</a> <em>GitHub</em></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <!-- Members data -->
                    <div class="hdata">
                        <div class="mcol-left">
                            <!-- Icon with blue background -->
                            <i class="icon-user bblue"></i>
                        </div>
                        <div class="mcol-right">
                            <!-- Number of visitors -->
                            <p><a href="http://zhuanqianfish.github.io/ThinkphpHelper/donation.html">捐赠</a>
                                <em>donation</em></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- revenue data
                      <div class="hdata">
                        <div class="mcol-left">
                          <i class="icon-money bgreen"></i>
                        </div>
                        <div class="mcol-right">
                          <p><a href="#">赞助</a><em>support</em></p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                          -->
                </div>
            </div>

        </div>
    </div>
</header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">导航</a></div>

    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav">
      <!-- Main menu with font awesome icon -->
      
      <li class="has_sub "><a href="#"><i class="icon-bar-chart"></i>项目配置</a>
        <ul>
          <li><a href="<?php echo APP_NAME; ?>/ProjectConfig/index">项目配置</a></li>
          <li><a href="<?php echo APP_NAME; ?>/ProjectConfig/formConfig">表单配置</a></li>
        </ul>
      </li>

      <li><a href="<?php echo APP_NAME; ?>/CreateLayout"><i class="icon-bar-chart"></i>公共文件生成</a></li>
      <li><a href="<?php echo APP_NAME; ?>/WedgitCode/menu"><i class="icon-bar-chart"></i>菜单生成</a></li>
      <li><a href="<?php echo APP_NAME; ?>/ViewCode"><i class="icon-tasks"></i>前台界面生成</a></li>      
      <li><a href="<?php echo APP_NAME; ?>/ControllerCode"><i class="icon-bar-chart"></i>控制器代码生成</a></li>
      <li class="has_sub "><a href="#"><i class="icon-table"></i>模型代码生成</a>
        <ul>
          <li><a href="<?php echo APP_NAME; ?>/ModelCode/index">简易模型代码生成</a></li>
          <li><a href="<?php echo APP_NAME; ?>/ModelCode/index2">手动模型代码生成</a></li>
        </ul>
      </li>
      <li><a href="<?php echo APP_NAME; ?>/Index/help"><i class="icon-calendar"></i>帮助</a></li>
    </ul>
</div>
    <!-- Sidebar ends -->
    <!-- Main bar -->
    
<div class="mainbar">
	    <!-- Page heading -->
	    <div class="page-head">
	        <h2 class="pull-left"><i class="icon-home"></i>配置</h2>
            <div class="clearfix"></div>
	    </div>
	    <!-- Page heading ends -->

	    <!-- Matter -->
	    <div class="matter">
        <div class="container">
          <!-- Dashboard Graph starts -->

          <div class="row">
            <div class="col-md-6">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget head -->
                <div class="widget-head">
                  <div class="pull-left" height="80">
				  项目配置
				  </div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>              

                <!-- Widget content -->
                <div class="widget-content">
                  <div class="form-horizontal">
                    <form id="form1" method="post">
                        <?php if(is_array($configList) || $configList instanceof \think\Collection || $configList instanceof \think\Paginator): $i = 0; $__LIST__ = $configList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$config): $mod = ($i % 2 );++$i;?>
                        <!--废弃
                            <p>
                            <input type="hidden" id="<?php echo $config['name']; ?>" name="<?php echo $config['name']; ?>" value="<?php echo $config['value']; ?>" style="width:50%" >
                        </p>
                        -->
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="control-label col-lg-2">项目名称:</label>
                            <div class="col-lg-6">                               
                               <input name="projectName" class="form-control" value="项目名" type="text">
                            </div>
                            <span class="col-lg-4"></span>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">目标模块:</label>
                            <div class="col-lg-6">  
                            <select class="form-control" name="moduleName" id="moduleName">
                                <?php if(is_array($moduleNameList) || $moduleNameList instanceof \think\Collection || $moduleNameList instanceof \think\Paginator): $i = 0; $__LIST__ = $moduleNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$moduleName): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $moduleName; ?>"><?php echo $moduleName; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select> 
                            </div> 
                            
                            <span class="col-lg-4">目标模块名称</span>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-lg-2">项目命名空间:</label>
                            <div class="col-lg-6">                               
                               <input name="projectName" class="form-control" value="<?php echo getDbConfig('app_namespace'); ?>" type="text">
                            </div>
                            <span class="col-lg-4"></span>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">项目路径:</label>
                            <div class="col-lg-6">                               
                               <input name="projectPath" class="form-control" value="<?php echo getDbConfig('projectPath'); ?>" type="text">
                            </div>
                            <span class="col-lg-4"></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">发布路径:</label>
                            <div class="col-lg-6">                               
                               <input name="projectPublicPath" class="form-control" value="<?php echo getDbConfig('projectPublicPath'); ?>" type="text">
                            </div>
                            <span class="col-lg-4"></span>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">风格模板:</label>
                            <div class="col-lg-6">                               
                                <select class="form-control"  name="theme"  id="layoutName">
                                    <?php if(is_array($layoutNameList) || $layoutNameList instanceof \think\Collection || $layoutNameList instanceof \think\Paginator): $i = 0; $__LIST__ = $layoutNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$layoutName): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $layoutName; ?>"><?php echo $layoutName; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>  
                            </div>
                            <span class="col-lg-4">默认前端代码模板</span>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-lg-2">后端代码库:</label>
                            <div class="col-lg-6">                               
                                <select class="form-control" name="codelib" id="codelib">
                                    <?php if(is_array($codelibNameList) || $codelibNameList instanceof \think\Collection || $codelibNameList instanceof \think\Paginator): $i = 0; $__LIST__ = $codelibNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$codelibName): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $codelibName; ?>"><?php echo $codelibName; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>  
                            </div>
                            <span class="col-lg-4"></span>
                        </div> 


                        <div class="form-group">
                             <label class="control-label col-lg-2"> </label>
                            <div class="col-lg-6 ">          
                                <button type="button" onclick="save()" class="btn btn-primary">确定</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <!-- Widget ends -->
				<!-- Widget footer -->
			  <div class="widget-foot">
				  <form class="form-inline">
					
				  </form>
			  </div>
			  <!-- Widget footer end-->
              </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>
	 </div>
    <!-- 项目配置 ends -->
    </div>
   <div class="clearfix"></div>
   <!-- 模态框（Modal） -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        模态框（Modal）标题
                    </h4>
                </div>
                <div class="modal-body">
                    在这里添加一些文本
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        关闭
                    </button>
                    <button type="button" class="btn btn-primary">
                        确定
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
   <script>
       function save(){
            var projectName = $('#projectName').val();
            var theme = $('#theme').val();
            var codelib = $('#codelib').val();

            $('#form1').submit();
       }
   </script>
  


</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Copyright info -->
                <p class="copy">Copyright &copy; 2014-2018 | <a href="http://weiyunstudio.com">WeiYunStudio.com</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

<!-- JS -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- jQuery Notification - Noty -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="<?php echo TEMPLATE_PATH; ?>asset/js/sparklines.js"></script> <!-- Sparklines -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/filter.js"></script> <!-- Filter for support page -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/custom.js"></script> <!-- Custom codes -->
<script src="<?php echo TEMPLATE_PATH; ?>asset/js/charts.js"></script> <!-- Charts & Graphs -->


</body>
</html>
