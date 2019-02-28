<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Validate\rule.html";i:1551339119;s:77:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Validate\msg.html";i:1551339540;s:79:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Validate\scene.html";i:1551339930;}*/ ?>

//由ThinkphpHelper自动生成,请根据需要修改
namespace <?php echo get_db_config('app_namespace'); ?>\index\validate;

use think\Validate;

class <?php echo tableNameToModelName($tableName); ?> extends Validate{
protected $model = null;

public function _initialize(){	//初始化
$this->model = new \<?php echo get_db_config('app_namespace'); ?>\index\model\<?php echo tableNameToModelName($tableName); ?>;
}

protected $rule =   [
    <?php foreach ($rule as $key => $value) { ?>
    '<?php echo $key; ?>' => '<?php echo $value; ?>',
    <?php } ?>
];
protected $msg =   [
<?php foreach ($message as $key => $value) { ?>
'<?php echo $key; ?>' => '<?php echo $value; ?>',
<?php } ?>
];
protected $scene =   [
    'add'=>' <?php foreach ($rule as $key => $value) { ?><?php echo $key; ?>,<?php } ?>',
    'edit'=>' <?php foreach ($rule as $key => $value) { ?><?php echo $key; ?>,<?php } ?>'
];

}
