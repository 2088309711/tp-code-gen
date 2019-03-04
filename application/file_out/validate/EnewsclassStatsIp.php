<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EnewsclassStatsIp extends Validate{

protected $rule =   [
        'ip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
];

protected $scene =   [
    'add'=>['ip',],
    'edit'=>['ip',],
    'ck_id'=>['id']
];

}
