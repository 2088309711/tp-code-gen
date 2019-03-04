<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewspostdata extends Validate{

protected $rule =   [
        'postid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'rnd' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'postdata' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ispath' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'postid.require' => 'postid不能为空',
'postid.number' => 'postid不是数字',
'postid.float' => 'postid不是小数',
'postid.boolean' => 'postid不是布尔值',
'postid.email' => 'postid不是邮箱地址',
'postid.array' => 'postid不是数组',
'postid.accepted' => 'postid请确认',
'postid.date' => 'postid不是有效日期',
'postid.alpha' => 'postid不是字母',
'postid.alphaNum' => 'postid不是字母和数字',
'postid.alphaDash' => 'postid不是字母和数字和下划线及破折号',
'postid.chs' => 'postid只能是汉字',
'postid.chsAlpha' => 'postid只能是汉字、字母',
'postid.chsAlphaNum' => 'postid只能是汉字、字母和数字',
'postid.chsDash' => 'postid只能是汉字、字母、数字和下划线_及破折号-',
'postid.activeUrl' => 'postid不是有效的域名或者IP',
'postid.url' => 'postid不是有效的URL地址',
'postid.ip' => 'postid不是有效的IP地址',
'postid.length' => 'postid长度不符',
'postid.max' => 'postid超出最大长度',
'postid.min' => 'postid低于最小长度',
'rnd.require' => 'rnd不能为空',
'rnd.number' => 'rnd不是数字',
'rnd.float' => 'rnd不是小数',
'rnd.boolean' => 'rnd不是布尔值',
'rnd.email' => 'rnd不是邮箱地址',
'rnd.array' => 'rnd不是数组',
'rnd.accepted' => 'rnd请确认',
'rnd.date' => 'rnd不是有效日期',
'rnd.alpha' => 'rnd不是字母',
'rnd.alphaNum' => 'rnd不是字母和数字',
'rnd.alphaDash' => 'rnd不是字母和数字和下划线及破折号',
'rnd.chs' => 'rnd只能是汉字',
'rnd.chsAlpha' => 'rnd只能是汉字、字母',
'rnd.chsAlphaNum' => 'rnd只能是汉字、字母和数字',
'rnd.chsDash' => 'rnd只能是汉字、字母、数字和下划线_及破折号-',
'rnd.activeUrl' => 'rnd不是有效的域名或者IP',
'rnd.url' => 'rnd不是有效的URL地址',
'rnd.ip' => 'rnd不是有效的IP地址',
'rnd.length' => 'rnd长度不符',
'rnd.max' => 'rnd超出最大长度',
'rnd.min' => 'rnd低于最小长度',
'postdata.require' => 'postdata不能为空',
'postdata.number' => 'postdata不是数字',
'postdata.float' => 'postdata不是小数',
'postdata.boolean' => 'postdata不是布尔值',
'postdata.email' => 'postdata不是邮箱地址',
'postdata.array' => 'postdata不是数组',
'postdata.accepted' => 'postdata请确认',
'postdata.date' => 'postdata不是有效日期',
'postdata.alpha' => 'postdata不是字母',
'postdata.alphaNum' => 'postdata不是字母和数字',
'postdata.alphaDash' => 'postdata不是字母和数字和下划线及破折号',
'postdata.chs' => 'postdata只能是汉字',
'postdata.chsAlpha' => 'postdata只能是汉字、字母',
'postdata.chsAlphaNum' => 'postdata只能是汉字、字母和数字',
'postdata.chsDash' => 'postdata只能是汉字、字母、数字和下划线_及破折号-',
'postdata.activeUrl' => 'postdata不是有效的域名或者IP',
'postdata.url' => 'postdata不是有效的URL地址',
'postdata.ip' => 'postdata不是有效的IP地址',
'postdata.length' => 'postdata长度不符',
'postdata.max' => 'postdata超出最大长度',
'postdata.min' => 'postdata低于最小长度',
'ispath.require' => 'ispath不能为空',
'ispath.number' => 'ispath不是数字',
'ispath.float' => 'ispath不是小数',
'ispath.boolean' => 'ispath不是布尔值',
'ispath.email' => 'ispath不是邮箱地址',
'ispath.array' => 'ispath不是数组',
'ispath.accepted' => 'ispath请确认',
'ispath.date' => 'ispath不是有效日期',
'ispath.alpha' => 'ispath不是字母',
'ispath.alphaNum' => 'ispath不是字母和数字',
'ispath.alphaDash' => 'ispath不是字母和数字和下划线及破折号',
'ispath.chs' => 'ispath只能是汉字',
'ispath.chsAlpha' => 'ispath只能是汉字、字母',
'ispath.chsAlphaNum' => 'ispath只能是汉字、字母和数字',
'ispath.chsDash' => 'ispath只能是汉字、字母、数字和下划线_及破折号-',
'ispath.activeUrl' => 'ispath不是有效的域名或者IP',
'ispath.url' => 'ispath不是有效的URL地址',
'ispath.ip' => 'ispath不是有效的IP地址',
'ispath.length' => 'ispath长度不符',
'ispath.max' => 'ispath超出最大长度',
'ispath.min' => 'ispath低于最小长度',
];

protected $scene =   [
    'add'=>['postid','rnd','postdata','ispath',],
    'edit'=>['postid','rnd','postdata','ispath',],
    'ck_id'=>['id']
];

}
