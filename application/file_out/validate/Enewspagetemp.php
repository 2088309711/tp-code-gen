<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewspagetemp extends Validate{

protected $rule =   [
        'tempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'temptext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'tempid.require' => 'tempid不能为空',
'tempid.number' => 'tempid不是数字',
'tempid.float' => 'tempid不是小数',
'tempid.boolean' => 'tempid不是布尔值',
'tempid.email' => 'tempid不是邮箱地址',
'tempid.array' => 'tempid不是数组',
'tempid.accepted' => 'tempid请确认',
'tempid.date' => 'tempid不是有效日期',
'tempid.alpha' => 'tempid不是字母',
'tempid.alphaNum' => 'tempid不是字母和数字',
'tempid.alphaDash' => 'tempid不是字母和数字和下划线及破折号',
'tempid.chs' => 'tempid只能是汉字',
'tempid.chsAlpha' => 'tempid只能是汉字、字母',
'tempid.chsAlphaNum' => 'tempid只能是汉字、字母和数字',
'tempid.chsDash' => 'tempid只能是汉字、字母、数字和下划线_及破折号-',
'tempid.activeUrl' => 'tempid不是有效的域名或者IP',
'tempid.url' => 'tempid不是有效的URL地址',
'tempid.ip' => 'tempid不是有效的IP地址',
'tempid.length' => 'tempid长度不符',
'tempid.max' => 'tempid超出最大长度',
'tempid.min' => 'tempid低于最小长度',
'tempname.require' => 'tempname不能为空',
'tempname.number' => 'tempname不是数字',
'tempname.float' => 'tempname不是小数',
'tempname.boolean' => 'tempname不是布尔值',
'tempname.email' => 'tempname不是邮箱地址',
'tempname.array' => 'tempname不是数组',
'tempname.accepted' => 'tempname请确认',
'tempname.date' => 'tempname不是有效日期',
'tempname.alpha' => 'tempname不是字母',
'tempname.alphaNum' => 'tempname不是字母和数字',
'tempname.alphaDash' => 'tempname不是字母和数字和下划线及破折号',
'tempname.chs' => 'tempname只能是汉字',
'tempname.chsAlpha' => 'tempname只能是汉字、字母',
'tempname.chsAlphaNum' => 'tempname只能是汉字、字母和数字',
'tempname.chsDash' => 'tempname只能是汉字、字母、数字和下划线_及破折号-',
'tempname.activeUrl' => 'tempname不是有效的域名或者IP',
'tempname.url' => 'tempname不是有效的URL地址',
'tempname.ip' => 'tempname不是有效的IP地址',
'tempname.length' => 'tempname长度不符',
'tempname.max' => 'tempname超出最大长度',
'tempname.min' => 'tempname低于最小长度',
'temptext.require' => 'temptext不能为空',
'temptext.number' => 'temptext不是数字',
'temptext.float' => 'temptext不是小数',
'temptext.boolean' => 'temptext不是布尔值',
'temptext.email' => 'temptext不是邮箱地址',
'temptext.array' => 'temptext不是数组',
'temptext.accepted' => 'temptext请确认',
'temptext.date' => 'temptext不是有效日期',
'temptext.alpha' => 'temptext不是字母',
'temptext.alphaNum' => 'temptext不是字母和数字',
'temptext.alphaDash' => 'temptext不是字母和数字和下划线及破折号',
'temptext.chs' => 'temptext只能是汉字',
'temptext.chsAlpha' => 'temptext只能是汉字、字母',
'temptext.chsAlphaNum' => 'temptext只能是汉字、字母和数字',
'temptext.chsDash' => 'temptext只能是汉字、字母、数字和下划线_及破折号-',
'temptext.activeUrl' => 'temptext不是有效的域名或者IP',
'temptext.url' => 'temptext不是有效的URL地址',
'temptext.ip' => 'temptext不是有效的IP地址',
'temptext.length' => 'temptext长度不符',
'temptext.max' => 'temptext超出最大长度',
'temptext.min' => 'temptext低于最小长度',
];

protected $scene =   [
    'add'=>['tempid','tempname','temptext',],
    'edit'=>['tempid','tempname','temptext',],
    'ck_id'=>['id']
];

}
