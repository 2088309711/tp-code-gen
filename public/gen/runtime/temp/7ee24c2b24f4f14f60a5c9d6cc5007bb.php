<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Validate\rule.html";i:1551339119;s:77:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Validate\msg.html";i:1551339540;s:79:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Validate\scene.html";i:1551680776;}*/ ?>
//由代码生成器自动生成
namespace <?php echo get_db_config('app_namespace'); ?>\<?php echo $moduleName; ?>\validate;

use think\Validate;

class <?php echo tableNameToModelName($tableName); ?> extends Validate{

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
    'add'=>[<?php foreach ($rule as $key => $value) { ?>'<?php echo $key; ?>',<?php } ?>],
    'edit'=>[<?php foreach ($rule as $key => $value) { ?>'<?php echo $key; ?>',<?php } ?>],
    'ck_id'=>['id']
];

}
