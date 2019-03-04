<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsloginfail extends Validate{

protected $rule =   [
        'ip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'num' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lasttime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'ip.require' => 'ip不能为空',
'ip.number' => 'ip不是数字',
'ip.float' => 'ip不是小数',
'ip.boolean' => 'ip不是布尔值',
'ip.email' => 'ip不是邮箱地址',
'ip.array' => 'ip不是数组',
'ip.accepted' => 'ip请确认',
'ip.date' => 'ip不是有效日期',
'ip.alpha' => 'ip不是字母',
'ip.alphaNum' => 'ip不是字母和数字',
'ip.alphaDash' => 'ip不是字母和数字和下划线及破折号',
'ip.chs' => 'ip只能是汉字',
'ip.chsAlpha' => 'ip只能是汉字、字母',
'ip.chsAlphaNum' => 'ip只能是汉字、字母和数字',
'ip.chsDash' => 'ip只能是汉字、字母、数字和下划线_及破折号-',
'ip.activeUrl' => 'ip不是有效的域名或者IP',
'ip.url' => 'ip不是有效的URL地址',
'ip.ip' => 'ip不是有效的IP地址',
'ip.length' => 'ip长度不符',
'ip.max' => 'ip超出最大长度',
'ip.min' => 'ip低于最小长度',
'num.require' => 'num不能为空',
'num.number' => 'num不是数字',
'num.float' => 'num不是小数',
'num.boolean' => 'num不是布尔值',
'num.email' => 'num不是邮箱地址',
'num.array' => 'num不是数组',
'num.accepted' => 'num请确认',
'num.date' => 'num不是有效日期',
'num.alpha' => 'num不是字母',
'num.alphaNum' => 'num不是字母和数字',
'num.alphaDash' => 'num不是字母和数字和下划线及破折号',
'num.chs' => 'num只能是汉字',
'num.chsAlpha' => 'num只能是汉字、字母',
'num.chsAlphaNum' => 'num只能是汉字、字母和数字',
'num.chsDash' => 'num只能是汉字、字母、数字和下划线_及破折号-',
'num.activeUrl' => 'num不是有效的域名或者IP',
'num.url' => 'num不是有效的URL地址',
'num.ip' => 'num不是有效的IP地址',
'num.length' => 'num长度不符',
'num.max' => 'num超出最大长度',
'num.min' => 'num低于最小长度',
'lasttime.require' => 'lasttime不能为空',
'lasttime.number' => 'lasttime不是数字',
'lasttime.float' => 'lasttime不是小数',
'lasttime.boolean' => 'lasttime不是布尔值',
'lasttime.email' => 'lasttime不是邮箱地址',
'lasttime.array' => 'lasttime不是数组',
'lasttime.accepted' => 'lasttime请确认',
'lasttime.date' => 'lasttime不是有效日期',
'lasttime.alpha' => 'lasttime不是字母',
'lasttime.alphaNum' => 'lasttime不是字母和数字',
'lasttime.alphaDash' => 'lasttime不是字母和数字和下划线及破折号',
'lasttime.chs' => 'lasttime只能是汉字',
'lasttime.chsAlpha' => 'lasttime只能是汉字、字母',
'lasttime.chsAlphaNum' => 'lasttime只能是汉字、字母和数字',
'lasttime.chsDash' => 'lasttime只能是汉字、字母、数字和下划线_及破折号-',
'lasttime.activeUrl' => 'lasttime不是有效的域名或者IP',
'lasttime.url' => 'lasttime不是有效的URL地址',
'lasttime.ip' => 'lasttime不是有效的IP地址',
'lasttime.length' => 'lasttime长度不符',
'lasttime.max' => 'lasttime超出最大长度',
'lasttime.min' => 'lasttime低于最小长度',
];

protected $scene =   [
    'add'=>['ip','num','lasttime',],
    'edit'=>['ip','num','lasttime',],
    'ck_id'=>['id']
];

}
