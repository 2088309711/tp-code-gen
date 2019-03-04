<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewszttypeadd extends Validate{

protected $rule =   [
        'cid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classtext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'cid.require' => 'cid不能为空',
'cid.number' => 'cid不是数字',
'cid.float' => 'cid不是小数',
'cid.boolean' => 'cid不是布尔值',
'cid.email' => 'cid不是邮箱地址',
'cid.array' => 'cid不是数组',
'cid.accepted' => 'cid请确认',
'cid.date' => 'cid不是有效日期',
'cid.alpha' => 'cid不是字母',
'cid.alphaNum' => 'cid不是字母和数字',
'cid.alphaDash' => 'cid不是字母和数字和下划线及破折号',
'cid.chs' => 'cid只能是汉字',
'cid.chsAlpha' => 'cid只能是汉字、字母',
'cid.chsAlphaNum' => 'cid只能是汉字、字母和数字',
'cid.chsDash' => 'cid只能是汉字、字母、数字和下划线_及破折号-',
'cid.activeUrl' => 'cid不是有效的域名或者IP',
'cid.url' => 'cid不是有效的URL地址',
'cid.ip' => 'cid不是有效的IP地址',
'cid.length' => 'cid长度不符',
'cid.max' => 'cid超出最大长度',
'cid.min' => 'cid低于最小长度',
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
    'add'=>['cid','classtext',],
    'edit'=>['cid','classtext',],
    'ck_id'=>['id']
];

}
