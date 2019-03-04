<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsfavaclass extends Validate{

protected $rule =   [
        'cid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'cname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'cname.require' => 'cname不能为空',
'cname.number' => 'cname不是数字',
'cname.float' => 'cname不是小数',
'cname.boolean' => 'cname不是布尔值',
'cname.email' => 'cname不是邮箱地址',
'cname.array' => 'cname不是数组',
'cname.accepted' => 'cname请确认',
'cname.date' => 'cname不是有效日期',
'cname.alpha' => 'cname不是字母',
'cname.alphaNum' => 'cname不是字母和数字',
'cname.alphaDash' => 'cname不是字母和数字和下划线及破折号',
'cname.chs' => 'cname只能是汉字',
'cname.chsAlpha' => 'cname只能是汉字、字母',
'cname.chsAlphaNum' => 'cname只能是汉字、字母和数字',
'cname.chsDash' => 'cname只能是汉字、字母、数字和下划线_及破折号-',
'cname.activeUrl' => 'cname不是有效的域名或者IP',
'cname.url' => 'cname不是有效的URL地址',
'cname.ip' => 'cname不是有效的IP地址',
'cname.length' => 'cname长度不符',
'cname.max' => 'cname超出最大长度',
'cname.min' => 'cname低于最小长度',
'userid.require' => 'userid不能为空',
'userid.number' => 'userid不是数字',
'userid.float' => 'userid不是小数',
'userid.boolean' => 'userid不是布尔值',
'userid.email' => 'userid不是邮箱地址',
'userid.array' => 'userid不是数组',
'userid.accepted' => 'userid请确认',
'userid.date' => 'userid不是有效日期',
'userid.alpha' => 'userid不是字母',
'userid.alphaNum' => 'userid不是字母和数字',
'userid.alphaDash' => 'userid不是字母和数字和下划线及破折号',
'userid.chs' => 'userid只能是汉字',
'userid.chsAlpha' => 'userid只能是汉字、字母',
'userid.chsAlphaNum' => 'userid只能是汉字、字母和数字',
'userid.chsDash' => 'userid只能是汉字、字母、数字和下划线_及破折号-',
'userid.activeUrl' => 'userid不是有效的域名或者IP',
'userid.url' => 'userid不是有效的URL地址',
'userid.ip' => 'userid不是有效的IP地址',
'userid.length' => 'userid长度不符',
'userid.max' => 'userid超出最大长度',
'userid.min' => 'userid低于最小长度',
];

protected $scene =   [
    'add'=>['cid','cname','userid',],
    'edit'=>['cid','cname','userid',],
    'ck_id'=>['id']
];

}
