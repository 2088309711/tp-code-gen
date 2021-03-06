<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\View\lists.html";i:1546415995;}*/ ?>
{extend name="layout" /}
{block name="content"}
<!-- 内容区域 -->
<div class="tpl-content-wrapper">
		<div class="row-content am-cf">
				<div class="row">
						<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
								<div class="widget am-cf">
										<div class="widget-head am-cf">
												<div class="widget-title  am-cf">管理<?php echo $tableName; ?></div>
										</div>
										<div class="widget-body  am-fr">
	<div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
		<div class="am-form-group">
			<div class="am-btn-toolbar">
				<div class="am-btn-group am-btn-group-xs">
					<a class="am-btn am-btn-default am-btn-success" href="{:url('<?php echo $tableName; ?>/add')}">
						<span class="am-icon-plus"></span> 新增
					</a>
					<!--
					<button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
					<button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
					<button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
					-->
				</div>
			</div>
		</div>
	</div>
	<div class="am-u-sm-12">
		<table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
				<thead>
					<tr>
						<?php if(is_array($tableInfoArray) || $tableInfoArray instanceof \think\Collection || $tableInfoArray instanceof \think\Paginator): $i = 0; $__LIST__ = $tableInfoArray;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tableInfo): $mod = ($i % 2 );++$i;?>
						<th><?php echo getFieldTitle($tableName, $tableInfo[$columnNameKey]); ?></th>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
						{volist name="<?php echo $tableName; ?>List" id="vo"}
						<tr class="gradeX">
								<?php if(is_array($tableInfoArray) || $tableInfoArray instanceof \think\Collection || $tableInfoArray instanceof \think\Paginator): $i = 0; $__LIST__ = $tableInfoArray;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tableInfo): $mod = ($i % 2 );++$i;?>
								<td>{$vo.<?php echo $tableInfo[$columnNameKey]; ?>}</td>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								<td>
										<div class="tpl-table-black-operation">
												<a  href="{:url('<?php echo $tableName; ?>/edit', ['id'=>$vo['id']])}">
													<i class="am-icon-pencil"></i> 编辑
												</a>
												<a href="{:url('<?php echo $tableName; ?>/delete', ['id'=>$vo['id']])}" onclick='return confirm("确定删除吗？")' class="tpl-table-black-operation-del">
													<i class="am-icon-trash"></i> 删除
												</a>
										</div>
								</td>
						</tr>
						{/volist}
						<!-- more data -->
				</tbody>
		</table>
	</div>
	<div class="am-u-lg-12 am-cf">

			<div class="am-fr">
					<ul class="am-pagination tpl-pagination">
							{$<?php echo $tableName; ?>List->render()}
					</ul>
			</div>
	</div>
</div>
								</div>
						</div>
				</div>
		</div>
</div>
{/block}