<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewstagsclass extends Validate{

protected $rule =   [
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'classid.require' => 'classid不能为空',
'classid.number' => 'classid不是数字',
'classid.float' => 'classid不是小数',
'classid.boolean' => 'classid不是布尔值',
'classid.email' => 'classid不是邮箱地址',
'classid.array' => 'classid不是数组',
'classid.accepted' => 'classid请确认',
'classid.date' => 'classid不是有效日期',
'classid.alpha' => 'classid不是字母',
'classid.alphaNum' => 'classid不是字母和数字',
'classid.alphaDash' => 'classid不是字母和数字和下划线及破折号',
'classid.chs' => 'classid只能是汉字',
'classid.chsAlpha' => 'classid只能是汉字、字母',
'classid.chsAlphaNum' => 'classid只能是汉字、字母和数字',
'classid.chsDash' => 'classid只能是汉字、字母、数字和下划线_及破折号-',
'classid.activeUrl' => 'classid不是有效的域名或者IP',
'classid.url' => 'classid不是有效的URL地址',
'classid.ip' => 'classid不是有效的IP地址',
'classid.length' => 'classid长度不符',
'classid.max' => 'classid超出最大长度',
'classid.min' => 'classid低于最小长度',
'classname.require' => 'classname不能为空',
'classname.number' => 'classname不是数字',
'classname.float' => 'classname不是小数',
'classname.boolean' => 'classname不是布尔值',
'classname.email' => 'classname不是邮箱地址',
'classname.array' => 'classname不是数组',
'classname.accepted' => 'classname请确认',
'classname.date' => 'classname不是有效日期',
'classname.alpha' => 'classname不是字母',
'classname.alphaNum' => 'classname不是字母和数字',
'classname.alphaDash' => 'classname不是字母和数字和下划线及破折号',
'classname.chs' => 'classname只能是汉字',
'classname.chsAlpha' => 'classname只能是汉字、字母',
'classname.chsAlphaNum' => 'classname只能是汉字、字母和数字',
'classname.chsDash' => 'classname只能是汉字、字母、数字和下划线_及破折号-',
'classname.activeUrl' => 'classname不是有效的域名或者IP',
'classname.url' => 'classname不是有效的URL地址',
'classname.ip' => 'classname不是有效的IP地址',
'classname.length' => 'classname长度不符',
'classname.max' => 'classname超出最大长度',
'classname.min' => 'classname低于最小长度',
];

protected $scene =   [
    'add'=>['classid','classname',],
    'edit'=>['classid','classname',],
    'ck_id'=>['id']
];

}
