<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewssp3 extends Validate{

protected $rule =   [
        'sid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'spid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'sptext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'sid.require' => 'sid不能为空',
'sid.number' => 'sid不是数字',
'sid.float' => 'sid不是小数',
'sid.boolean' => 'sid不是布尔值',
'sid.email' => 'sid不是邮箱地址',
'sid.array' => 'sid不是数组',
'sid.accepted' => 'sid请确认',
'sid.date' => 'sid不是有效日期',
'sid.alpha' => 'sid不是字母',
'sid.alphaNum' => 'sid不是字母和数字',
'sid.alphaDash' => 'sid不是字母和数字和下划线及破折号',
'sid.chs' => 'sid只能是汉字',
'sid.chsAlpha' => 'sid只能是汉字、字母',
'sid.chsAlphaNum' => 'sid只能是汉字、字母和数字',
'sid.chsDash' => 'sid只能是汉字、字母、数字和下划线_及破折号-',
'sid.activeUrl' => 'sid不是有效的域名或者IP',
'sid.url' => 'sid不是有效的URL地址',
'sid.ip' => 'sid不是有效的IP地址',
'sid.length' => 'sid长度不符',
'sid.max' => 'sid超出最大长度',
'sid.min' => 'sid低于最小长度',
'spid.require' => 'spid不能为空',
'spid.number' => 'spid不是数字',
'spid.float' => 'spid不是小数',
'spid.boolean' => 'spid不是布尔值',
'spid.email' => 'spid不是邮箱地址',
'spid.array' => 'spid不是数组',
'spid.accepted' => 'spid请确认',
'spid.date' => 'spid不是有效日期',
'spid.alpha' => 'spid不是字母',
'spid.alphaNum' => 'spid不是字母和数字',
'spid.alphaDash' => 'spid不是字母和数字和下划线及破折号',
'spid.chs' => 'spid只能是汉字',
'spid.chsAlpha' => 'spid只能是汉字、字母',
'spid.chsAlphaNum' => 'spid只能是汉字、字母和数字',
'spid.chsDash' => 'spid只能是汉字、字母、数字和下划线_及破折号-',
'spid.activeUrl' => 'spid不是有效的域名或者IP',
'spid.url' => 'spid不是有效的URL地址',
'spid.ip' => 'spid不是有效的IP地址',
'spid.length' => 'spid长度不符',
'spid.max' => 'spid超出最大长度',
'spid.min' => 'spid低于最小长度',
'sptext.require' => 'sptext不能为空',
'sptext.number' => 'sptext不是数字',
'sptext.float' => 'sptext不是小数',
'sptext.boolean' => 'sptext不是布尔值',
'sptext.email' => 'sptext不是邮箱地址',
'sptext.array' => 'sptext不是数组',
'sptext.accepted' => 'sptext请确认',
'sptext.date' => 'sptext不是有效日期',
'sptext.alpha' => 'sptext不是字母',
'sptext.alphaNum' => 'sptext不是字母和数字',
'sptext.alphaDash' => 'sptext不是字母和数字和下划线及破折号',
'sptext.chs' => 'sptext只能是汉字',
'sptext.chsAlpha' => 'sptext只能是汉字、字母',
'sptext.chsAlphaNum' => 'sptext只能是汉字、字母和数字',
'sptext.chsDash' => 'sptext只能是汉字、字母、数字和下划线_及破折号-',
'sptext.activeUrl' => 'sptext不是有效的域名或者IP',
'sptext.url' => 'sptext不是有效的URL地址',
'sptext.ip' => 'sptext不是有效的IP地址',
'sptext.length' => 'sptext长度不符',
'sptext.max' => 'sptext超出最大长度',
'sptext.min' => 'sptext低于最小长度',
];

protected $scene =   [
    'add'=>['sid','spid','sptext',],
    'edit'=>['sid','spid','sptext',],
    'ck_id'=>['id']
];

}
