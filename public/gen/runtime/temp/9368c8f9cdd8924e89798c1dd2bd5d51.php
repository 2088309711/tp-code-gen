<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\View\menu.html";i:1546415995;}*/ ?>
 <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="<?php echo TARGET_PUBLIC_NAME; ?>assets/img/user04.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              小张
          </span>
                    <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
                </div>
            </div>

            <!-- 菜单 -->
			<ul class="sidebar-nav">
			
<li class="sidebar-nav-heading">控制面板 <span class="sidebar-nav-heading-info"> Dashboard</span></li>
<?php if(is_array($menuList) || $menuList instanceof \think\Collection || $menuList instanceof \think\Paginator): $i = 0; $__LIST__ = $menuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menuItem): $mod = ($i % 2 );++$i;?>
	<li class="sidebar-nav-link">
		<a href="{:url(\\think\\Request::instance()->module().'/<?php echo tableNameToModelName($menuItem); ?>/lists')}">
				<i class="am-icon-wpforms sidebar-nav-link-logo"></i><?php echo getTableTitle($menuItem); ?>
		</a>
	</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>