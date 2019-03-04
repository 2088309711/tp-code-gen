<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsztadd extends Validate{

protected $rule =   [
        'ztid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classtext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'ztid.require' => 'ztid不能为空',
'ztid.number' => 'ztid不是数字',
'ztid.float' => 'ztid不是小数',
'ztid.boolean' => 'ztid不是布尔值',
'ztid.email' => 'ztid不是邮箱地址',
'ztid.array' => 'ztid不是数组',
'ztid.accepted' => 'ztid请确认',
'ztid.date' => 'ztid不是有效日期',
'ztid.alpha' => 'ztid不是字母',
'ztid.alphaNum' => 'ztid不是字母和数字',
'ztid.alphaDash' => 'ztid不是字母和数字和下划线及破折号',
'ztid.chs' => 'ztid只能是汉字',
'ztid.chsAlpha' => 'ztid只能是汉字、字母',
'ztid.chsAlphaNum' => 'ztid只能是汉字、字母和数字',
'ztid.chsDash' => 'ztid只能是汉字、字母、数字和下划线_及破折号-',
'ztid.activeUrl' => 'ztid不是有效的域名或者IP',
'ztid.url' => 'ztid不是有效的URL地址',
'ztid.ip' => 'ztid不是有效的IP地址',
'ztid.length' => 'ztid长度不符',
'ztid.max' => 'ztid超出最大长度',
'ztid.min' => 'ztid低于最小长度',
'classtext.require' => 'classtext不能为空',
'classtext.number' => 'classtext不是数字',
'classtext.float' => 'classtext不是小数',
'classtext.boolean' => 'classtext不是布尔值',
'classtext.email' => 'classtext不是邮箱地址',
'classtext.array' => 'classtext不是数组',
'classtext.accepted' => 'classtext请确认',
'classtext.date' => 'classtext不是有效日期',
'classtext.alpha' => 'classtext不是字母',
'classtext.alphaNum' => 'classtext不是字母和数字',
'classtext.alphaDash' => 'classtext不是字母和数字和下划线及破折号',
'classtext.chs' => 'classtext只能是汉字',
'classtext.chsAlpha' => 'classtext只能是汉字、字母',
'classtext.chsAlphaNum' => 'classtext只能是汉字、字母和数字',
'classtext.chsDash' => 'classtext只能是汉字、字母、数字和下划线_及破折号-',
'classtext.activeUrl' => 'classtext不是有效的域名或者IP',
'classtext.url' => 'classtext不是有效的URL地址',
'classtext.ip' => 'classtext不是有效的IP地址',
'classtext.length' => 'classtext长度不符',
'classtext.max' => 'classtext超出最大长度',
'classtext.min' => 'classtext低于最小长度',
];

protected $scene =   [
    'add'=>['ztid','classtext',],
    'edit'=>['ztid','classtext',],
    'ck_id'=>['id']
];

}
