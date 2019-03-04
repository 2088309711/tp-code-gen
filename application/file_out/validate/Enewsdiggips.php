<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsdiggips extends Validate{

protected $rule =   [
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ips' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'ips.require' => 'ips不能为空',
'ips.number' => 'ips不是数字',
'ips.float' => 'ips不是小数',
'ips.boolean' => 'ips不是布尔值',
'ips.email' => 'ips不是邮箱地址',
'ips.array' => 'ips不是数组',
'ips.accepted' => 'ips请确认',
'ips.date' => 'ips不是有效日期',
'ips.alpha' => 'ips不是字母',
'ips.alphaNum' => 'ips不是字母和数字',
'ips.alphaDash' => 'ips不是字母和数字和下划线及破折号',
'ips.chs' => 'ips只能是汉字',
'ips.chsAlpha' => 'ips只能是汉字、字母',
'ips.chsAlphaNum' => 'ips只能是汉字、字母和数字',
'ips.chsDash' => 'ips只能是汉字、字母、数字和下划线_及破折号-',
'ips.activeUrl' => 'ips不是有效的域名或者IP',
'ips.url' => 'ips不是有效的URL地址',
'ips.ip' => 'ips不是有效的IP地址',
'ips.length' => 'ips长度不符',
'ips.max' => 'ips超出最大长度',
'ips.min' => 'ips低于最小长度',
];

protected $scene =   [
    'add'=>['classid','id','ips',],
    'edit'=>['classid','id','ips',],
    'ck_id'=>['id']
];

}
