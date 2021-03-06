<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EnewsshopddAdd extends Validate{

protected $rule =   [
        'ddid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'buycar' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bz' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'retext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'ddid.require' => 'ddid不能为空',
'ddid.number' => 'ddid不是数字',
'ddid.float' => 'ddid不是小数',
'ddid.boolean' => 'ddid不是布尔值',
'ddid.email' => 'ddid不是邮箱地址',
'ddid.array' => 'ddid不是数组',
'ddid.accepted' => 'ddid请确认',
'ddid.date' => 'ddid不是有效日期',
'ddid.alpha' => 'ddid不是字母',
'ddid.alphaNum' => 'ddid不是字母和数字',
'ddid.alphaDash' => 'ddid不是字母和数字和下划线及破折号',
'ddid.chs' => 'ddid只能是汉字',
'ddid.chsAlpha' => 'ddid只能是汉字、字母',
'ddid.chsAlphaNum' => 'ddid只能是汉字、字母和数字',
'ddid.chsDash' => 'ddid只能是汉字、字母、数字和下划线_及破折号-',
'ddid.activeUrl' => 'ddid不是有效的域名或者IP',
'ddid.url' => 'ddid不是有效的URL地址',
'ddid.ip' => 'ddid不是有效的IP地址',
'ddid.length' => 'ddid长度不符',
'ddid.max' => 'ddid超出最大长度',
'ddid.min' => 'ddid低于最小长度',
'buycar.require' => 'buycar不能为空',
'buycar.number' => 'buycar不是数字',
'buycar.float' => 'buycar不是小数',
'buycar.boolean' => 'buycar不是布尔值',
'buycar.email' => 'buycar不是邮箱地址',
'buycar.array' => 'buycar不是数组',
'buycar.accepted' => 'buycar请确认',
'buycar.date' => 'buycar不是有效日期',
'buycar.alpha' => 'buycar不是字母',
'buycar.alphaNum' => 'buycar不是字母和数字',
'buycar.alphaDash' => 'buycar不是字母和数字和下划线及破折号',
'buycar.chs' => 'buycar只能是汉字',
'buycar.chsAlpha' => 'buycar只能是汉字、字母',
'buycar.chsAlphaNum' => 'buycar只能是汉字、字母和数字',
'buycar.chsDash' => 'buycar只能是汉字、字母、数字和下划线_及破折号-',
'buycar.activeUrl' => 'buycar不是有效的域名或者IP',
'buycar.url' => 'buycar不是有效的URL地址',
'buycar.ip' => 'buycar不是有效的IP地址',
'buycar.length' => 'buycar长度不符',
'buycar.max' => 'buycar超出最大长度',
'buycar.min' => 'buycar低于最小长度',
'bz.require' => 'bz不能为空',
'bz.number' => 'bz不是数字',
'bz.float' => 'bz不是小数',
'bz.boolean' => 'bz不是布尔值',
'bz.email' => 'bz不是邮箱地址',
'bz.array' => 'bz不是数组',
'bz.accepted' => 'bz请确认',
'bz.date' => 'bz不是有效日期',
'bz.alpha' => 'bz不是字母',
'bz.alphaNum' => 'bz不是字母和数字',
'bz.alphaDash' => 'bz不是字母和数字和下划线及破折号',
'bz.chs' => 'bz只能是汉字',
'bz.chsAlpha' => 'bz只能是汉字、字母',
'bz.chsAlphaNum' => 'bz只能是汉字、字母和数字',
'bz.chsDash' => 'bz只能是汉字、字母、数字和下划线_及破折号-',
'bz.activeUrl' => 'bz不是有效的域名或者IP',
'bz.url' => 'bz不是有效的URL地址',
'bz.ip' => 'bz不是有效的IP地址',
'bz.length' => 'bz长度不符',
'bz.max' => 'bz超出最大长度',
'bz.min' => 'bz低于最小长度',
'retext.require' => 'retext不能为空',
'retext.number' => 'retext不是数字',
'retext.float' => 'retext不是小数',
'retext.boolean' => 'retext不是布尔值',
'retext.email' => 'retext不是邮箱地址',
'retext.array' => 'retext不是数组',
'retext.accepted' => 'retext请确认',
'retext.date' => 'retext不是有效日期',
'retext.alpha' => 'retext不是字母',
'retext.alphaNum' => 'retext不是字母和数字',
'retext.alphaDash' => 'retext不是字母和数字和下划线及破折号',
'retext.chs' => 'retext只能是汉字',
'retext.chsAlpha' => 'retext只能是汉字、字母',
'retext.chsAlphaNum' => 'retext只能是汉字、字母和数字',
'retext.chsDash' => 'retext只能是汉字、字母、数字和下划线_及破折号-',
'retext.activeUrl' => 'retext不是有效的域名或者IP',
'retext.url' => 'retext不是有效的URL地址',
'retext.ip' => 'retext不是有效的IP地址',
'retext.length' => 'retext长度不符',
'retext.max' => 'retext超出最大长度',
'retext.min' => 'retext低于最小长度',
];

protected $scene =   [
    'add'=>['ddid','buycar','bz','retext',],
    'edit'=>['ddid','buycar','bz','retext',],
    'ck_id'=>['id']
];

}
