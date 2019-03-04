<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewswriter extends Validate{

protected $rule =   [
        'wid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'writer' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'email' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'wid.require' => 'wid不能为空',
'wid.number' => 'wid不是数字',
'wid.float' => 'wid不是小数',
'wid.boolean' => 'wid不是布尔值',
'wid.email' => 'wid不是邮箱地址',
'wid.array' => 'wid不是数组',
'wid.accepted' => 'wid请确认',
'wid.date' => 'wid不是有效日期',
'wid.alpha' => 'wid不是字母',
'wid.alphaNum' => 'wid不是字母和数字',
'wid.alphaDash' => 'wid不是字母和数字和下划线及破折号',
'wid.chs' => 'wid只能是汉字',
'wid.chsAlpha' => 'wid只能是汉字、字母',
'wid.chsAlphaNum' => 'wid只能是汉字、字母和数字',
'wid.chsDash' => 'wid只能是汉字、字母、数字和下划线_及破折号-',
'wid.activeUrl' => 'wid不是有效的域名或者IP',
'wid.url' => 'wid不是有效的URL地址',
'wid.ip' => 'wid不是有效的IP地址',
'wid.length' => 'wid长度不符',
'wid.max' => 'wid超出最大长度',
'wid.min' => 'wid低于最小长度',
'writer.require' => 'writer不能为空',
'writer.number' => 'writer不是数字',
'writer.float' => 'writer不是小数',
'writer.boolean' => 'writer不是布尔值',
'writer.email' => 'writer不是邮箱地址',
'writer.array' => 'writer不是数组',
'writer.accepted' => 'writer请确认',
'writer.date' => 'writer不是有效日期',
'writer.alpha' => 'writer不是字母',
'writer.alphaNum' => 'writer不是字母和数字',
'writer.alphaDash' => 'writer不是字母和数字和下划线及破折号',
'writer.chs' => 'writer只能是汉字',
'writer.chsAlpha' => 'writer只能是汉字、字母',
'writer.chsAlphaNum' => 'writer只能是汉字、字母和数字',
'writer.chsDash' => 'writer只能是汉字、字母、数字和下划线_及破折号-',
'writer.activeUrl' => 'writer不是有效的域名或者IP',
'writer.url' => 'writer不是有效的URL地址',
'writer.ip' => 'writer不是有效的IP地址',
'writer.length' => 'writer长度不符',
'writer.max' => 'writer超出最大长度',
'writer.min' => 'writer低于最小长度',
'email.require' => 'email不能为空',
'email.number' => 'email不是数字',
'email.float' => 'email不是小数',
'email.boolean' => 'email不是布尔值',
'email.email' => 'email不是邮箱地址',
'email.array' => 'email不是数组',
'email.accepted' => 'email请确认',
'email.date' => 'email不是有效日期',
'email.alpha' => 'email不是字母',
'email.alphaNum' => 'email不是字母和数字',
'email.alphaDash' => 'email不是字母和数字和下划线及破折号',
'email.chs' => 'email只能是汉字',
'email.chsAlpha' => 'email只能是汉字、字母',
'email.chsAlphaNum' => 'email只能是汉字、字母和数字',
'email.chsDash' => 'email只能是汉字、字母、数字和下划线_及破折号-',
'email.activeUrl' => 'email不是有效的域名或者IP',
'email.url' => 'email不是有效的URL地址',
'email.ip' => 'email不是有效的IP地址',
'email.length' => 'email长度不符',
'email.max' => 'email超出最大长度',
'email.min' => 'email低于最小长度',
];

protected $scene =   [
    'add'=>['wid','writer','email',],
    'edit'=>['wid','writer','email',],
    'ck_id'=>['id']
];

}
