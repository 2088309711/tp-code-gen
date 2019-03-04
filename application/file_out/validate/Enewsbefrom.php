<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsbefrom extends Validate{

protected $rule =   [
        'befromid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'sitename' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'siteurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'befromid.require' => 'befromid不能为空',
'befromid.number' => 'befromid不是数字',
'befromid.float' => 'befromid不是小数',
'befromid.boolean' => 'befromid不是布尔值',
'befromid.email' => 'befromid不是邮箱地址',
'befromid.array' => 'befromid不是数组',
'befromid.accepted' => 'befromid请确认',
'befromid.date' => 'befromid不是有效日期',
'befromid.alpha' => 'befromid不是字母',
'befromid.alphaNum' => 'befromid不是字母和数字',
'befromid.alphaDash' => 'befromid不是字母和数字和下划线及破折号',
'befromid.chs' => 'befromid只能是汉字',
'befromid.chsAlpha' => 'befromid只能是汉字、字母',
'befromid.chsAlphaNum' => 'befromid只能是汉字、字母和数字',
'befromid.chsDash' => 'befromid只能是汉字、字母、数字和下划线_及破折号-',
'befromid.activeUrl' => 'befromid不是有效的域名或者IP',
'befromid.url' => 'befromid不是有效的URL地址',
'befromid.ip' => 'befromid不是有效的IP地址',
'befromid.length' => 'befromid长度不符',
'befromid.max' => 'befromid超出最大长度',
'befromid.min' => 'befromid低于最小长度',
'sitename.require' => 'sitename不能为空',
'sitename.number' => 'sitename不是数字',
'sitename.float' => 'sitename不是小数',
'sitename.boolean' => 'sitename不是布尔值',
'sitename.email' => 'sitename不是邮箱地址',
'sitename.array' => 'sitename不是数组',
'sitename.accepted' => 'sitename请确认',
'sitename.date' => 'sitename不是有效日期',
'sitename.alpha' => 'sitename不是字母',
'sitename.alphaNum' => 'sitename不是字母和数字',
'sitename.alphaDash' => 'sitename不是字母和数字和下划线及破折号',
'sitename.chs' => 'sitename只能是汉字',
'sitename.chsAlpha' => 'sitename只能是汉字、字母',
'sitename.chsAlphaNum' => 'sitename只能是汉字、字母和数字',
'sitename.chsDash' => 'sitename只能是汉字、字母、数字和下划线_及破折号-',
'sitename.activeUrl' => 'sitename不是有效的域名或者IP',
'sitename.url' => 'sitename不是有效的URL地址',
'sitename.ip' => 'sitename不是有效的IP地址',
'sitename.length' => 'sitename长度不符',
'sitename.max' => 'sitename超出最大长度',
'sitename.min' => 'sitename低于最小长度',
'siteurl.require' => 'siteurl不能为空',
'siteurl.number' => 'siteurl不是数字',
'siteurl.float' => 'siteurl不是小数',
'siteurl.boolean' => 'siteurl不是布尔值',
'siteurl.email' => 'siteurl不是邮箱地址',
'siteurl.array' => 'siteurl不是数组',
'siteurl.accepted' => 'siteurl请确认',
'siteurl.date' => 'siteurl不是有效日期',
'siteurl.alpha' => 'siteurl不是字母',
'siteurl.alphaNum' => 'siteurl不是字母和数字',
'siteurl.alphaDash' => 'siteurl不是字母和数字和下划线及破折号',
'siteurl.chs' => 'siteurl只能是汉字',
'siteurl.chsAlpha' => 'siteurl只能是汉字、字母',
'siteurl.chsAlphaNum' => 'siteurl只能是汉字、字母和数字',
'siteurl.chsDash' => 'siteurl只能是汉字、字母、数字和下划线_及破折号-',
'siteurl.activeUrl' => 'siteurl不是有效的域名或者IP',
'siteurl.url' => 'siteurl不是有效的URL地址',
'siteurl.ip' => 'siteurl不是有效的IP地址',
'siteurl.length' => 'siteurl长度不符',
'siteurl.max' => 'siteurl超出最大长度',
'siteurl.min' => 'siteurl低于最小长度',
];

protected $scene =   [
    'add'=>['befromid','sitename','siteurl',],
    'edit'=>['befromid','sitename','siteurl',],
    'ck_id'=>['id']
];

}
