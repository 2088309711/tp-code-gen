<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewssql extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'sqlname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'sqltext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'id.require' => 'id不能为空',
'id.number' => 'id不是数字',
'id.float' => 'id不是小数',
'id.boolean' => 'id不是布尔值',
'id.email' => 'id不是邮箱地址',
'id.array' => 'id不是数组',
'id.accepted' => 'id请确认',
'id.date' => 'id不是有效日期',
'id.alpha' => 'id不是字母',
'id.alphaNum' => 'id不是字母和数字',
'id.alphaDash' => 'id不是字母和数字和下划线及破折号',
'id.chs' => 'id只能是汉字',
'id.chsAlpha' => 'id只能是汉字、字母',
'id.chsAlphaNum' => 'id只能是汉字、字母和数字',
'id.chsDash' => 'id只能是汉字、字母、数字和下划线_及破折号-',
'id.activeUrl' => 'id不是有效的域名或者IP',
'id.url' => 'id不是有效的URL地址',
'id.ip' => 'id不是有效的IP地址',
'id.length' => 'id长度不符',
'id.max' => 'id超出最大长度',
'id.min' => 'id低于最小长度',
'sqlname.require' => 'sqlname不能为空',
'sqlname.number' => 'sqlname不是数字',
'sqlname.float' => 'sqlname不是小数',
'sqlname.boolean' => 'sqlname不是布尔值',
'sqlname.email' => 'sqlname不是邮箱地址',
'sqlname.array' => 'sqlname不是数组',
'sqlname.accepted' => 'sqlname请确认',
'sqlname.date' => 'sqlname不是有效日期',
'sqlname.alpha' => 'sqlname不是字母',
'sqlname.alphaNum' => 'sqlname不是字母和数字',
'sqlname.alphaDash' => 'sqlname不是字母和数字和下划线及破折号',
'sqlname.chs' => 'sqlname只能是汉字',
'sqlname.chsAlpha' => 'sqlname只能是汉字、字母',
'sqlname.chsAlphaNum' => 'sqlname只能是汉字、字母和数字',
'sqlname.chsDash' => 'sqlname只能是汉字、字母、数字和下划线_及破折号-',
'sqlname.activeUrl' => 'sqlname不是有效的域名或者IP',
'sqlname.url' => 'sqlname不是有效的URL地址',
'sqlname.ip' => 'sqlname不是有效的IP地址',
'sqlname.length' => 'sqlname长度不符',
'sqlname.max' => 'sqlname超出最大长度',
'sqlname.min' => 'sqlname低于最小长度',
'sqltext.require' => 'sqltext不能为空',
'sqltext.number' => 'sqltext不是数字',
'sqltext.float' => 'sqltext不是小数',
'sqltext.boolean' => 'sqltext不是布尔值',
'sqltext.email' => 'sqltext不是邮箱地址',
'sqltext.array' => 'sqltext不是数组',
'sqltext.accepted' => 'sqltext请确认',
'sqltext.date' => 'sqltext不是有效日期',
'sqltext.alpha' => 'sqltext不是字母',
'sqltext.alphaNum' => 'sqltext不是字母和数字',
'sqltext.alphaDash' => 'sqltext不是字母和数字和下划线及破折号',
'sqltext.chs' => 'sqltext只能是汉字',
'sqltext.chsAlpha' => 'sqltext只能是汉字、字母',
'sqltext.chsAlphaNum' => 'sqltext只能是汉字、字母和数字',
'sqltext.chsDash' => 'sqltext只能是汉字、字母、数字和下划线_及破折号-',
'sqltext.activeUrl' => 'sqltext不是有效的域名或者IP',
'sqltext.url' => 'sqltext不是有效的URL地址',
'sqltext.ip' => 'sqltext不是有效的IP地址',
'sqltext.length' => 'sqltext长度不符',
'sqltext.max' => 'sqltext超出最大长度',
'sqltext.min' => 'sqltext低于最小长度',
];

protected $scene =   [
    'add'=>['id','sqlname','sqltext',],
    'edit'=>['id','sqlname','sqltext',],
    'ck_id'=>['id']
];

}
