<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewskey extends Validate{

protected $rule =   [
        'keyid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'keyname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'keyurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'cid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'keyid.require' => 'keyid不能为空',
'keyid.number' => 'keyid不是数字',
'keyid.float' => 'keyid不是小数',
'keyid.boolean' => 'keyid不是布尔值',
'keyid.email' => 'keyid不是邮箱地址',
'keyid.array' => 'keyid不是数组',
'keyid.accepted' => 'keyid请确认',
'keyid.date' => 'keyid不是有效日期',
'keyid.alpha' => 'keyid不是字母',
'keyid.alphaNum' => 'keyid不是字母和数字',
'keyid.alphaDash' => 'keyid不是字母和数字和下划线及破折号',
'keyid.chs' => 'keyid只能是汉字',
'keyid.chsAlpha' => 'keyid只能是汉字、字母',
'keyid.chsAlphaNum' => 'keyid只能是汉字、字母和数字',
'keyid.chsDash' => 'keyid只能是汉字、字母、数字和下划线_及破折号-',
'keyid.activeUrl' => 'keyid不是有效的域名或者IP',
'keyid.url' => 'keyid不是有效的URL地址',
'keyid.ip' => 'keyid不是有效的IP地址',
'keyid.length' => 'keyid长度不符',
'keyid.max' => 'keyid超出最大长度',
'keyid.min' => 'keyid低于最小长度',
'keyname.require' => 'keyname不能为空',
'keyname.number' => 'keyname不是数字',
'keyname.float' => 'keyname不是小数',
'keyname.boolean' => 'keyname不是布尔值',
'keyname.email' => 'keyname不是邮箱地址',
'keyname.array' => 'keyname不是数组',
'keyname.accepted' => 'keyname请确认',
'keyname.date' => 'keyname不是有效日期',
'keyname.alpha' => 'keyname不是字母',
'keyname.alphaNum' => 'keyname不是字母和数字',
'keyname.alphaDash' => 'keyname不是字母和数字和下划线及破折号',
'keyname.chs' => 'keyname只能是汉字',
'keyname.chsAlpha' => 'keyname只能是汉字、字母',
'keyname.chsAlphaNum' => 'keyname只能是汉字、字母和数字',
'keyname.chsDash' => 'keyname只能是汉字、字母、数字和下划线_及破折号-',
'keyname.activeUrl' => 'keyname不是有效的域名或者IP',
'keyname.url' => 'keyname不是有效的URL地址',
'keyname.ip' => 'keyname不是有效的IP地址',
'keyname.length' => 'keyname长度不符',
'keyname.max' => 'keyname超出最大长度',
'keyname.min' => 'keyname低于最小长度',
'keyurl.require' => 'keyurl不能为空',
'keyurl.number' => 'keyurl不是数字',
'keyurl.float' => 'keyurl不是小数',
'keyurl.boolean' => 'keyurl不是布尔值',
'keyurl.email' => 'keyurl不是邮箱地址',
'keyurl.array' => 'keyurl不是数组',
'keyurl.accepted' => 'keyurl请确认',
'keyurl.date' => 'keyurl不是有效日期',
'keyurl.alpha' => 'keyurl不是字母',
'keyurl.alphaNum' => 'keyurl不是字母和数字',
'keyurl.alphaDash' => 'keyurl不是字母和数字和下划线及破折号',
'keyurl.chs' => 'keyurl只能是汉字',
'keyurl.chsAlpha' => 'keyurl只能是汉字、字母',
'keyurl.chsAlphaNum' => 'keyurl只能是汉字、字母和数字',
'keyurl.chsDash' => 'keyurl只能是汉字、字母、数字和下划线_及破折号-',
'keyurl.activeUrl' => 'keyurl不是有效的域名或者IP',
'keyurl.url' => 'keyurl不是有效的URL地址',
'keyurl.ip' => 'keyurl不是有效的IP地址',
'keyurl.length' => 'keyurl长度不符',
'keyurl.max' => 'keyurl超出最大长度',
'keyurl.min' => 'keyurl低于最小长度',
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
];

protected $scene =   [
    'add'=>['keyid','keyname','keyurl','cid',],
    'edit'=>['keyid','keyname','keyurl','cid',],
    'ck_id'=>['id']
];

}
