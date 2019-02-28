<?php if (!defined('THINK_PATH')) exit(); /*a:0:{}*/ ?>

//由ThinkphpHelper自动生成,请根据需要修改
namespace <?php echo get_db_config('app_namespace'); ?>\<?php echo $moduleName; ?>\controller;

use think\Controller;

class <?php echo tableNameToModelName($tableName); ?> extends Controller{
protected $model = null;

public function _initialize(){	//初始化
$this->model = new \<?php echo get_db_config('app_namespace'); ?>\<?php echo $moduleName; ?>\model\<?php echo tableNameToModelName($tableName); ?>;
}



}
