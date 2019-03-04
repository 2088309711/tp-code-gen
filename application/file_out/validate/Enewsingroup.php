<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsingroup extends Validate{

protected $rule =   [
        'gid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'myorder' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'gid.require' => 'gid不能为空',
'gid.number' => 'gid不是数字',
'gid.float' => 'gid不是小数',
'gid.boolean' => 'gid不是布尔值',
'gid.email' => 'gid不是邮箱地址',
'gid.array' => 'gid不是数组',
'gid.accepted' => 'gid请确认',
'gid.date' => 'gid不是有效日期',
'gid.alpha' => 'gid不是字母',
'gid.alphaNum' => 'gid不是字母和数字',
'gid.alphaDash' => 'gid不是字母和数字和下划线及破折号',
'gid.chs' => 'gid只能是汉字',
'gid.chsAlpha' => 'gid只能是汉字、字母',
'gid.chsAlphaNum' => 'gid只能是汉字、字母和数字',
'gid.chsDash' => 'gid只能是汉字、字母、数字和下划线_及破折号-',
'gid.activeUrl' => 'gid不是有效的域名或者IP',
'gid.url' => 'gid不是有效的URL地址',
'gid.ip' => 'gid不是有效的IP地址',
'gid.length' => 'gid长度不符',
'gid.max' => 'gid超出最大长度',
'gid.min' => 'gid低于最小长度',
'gname.require' => 'gname不能为空',
'gname.number' => 'gname不是数字',
'gname.float' => 'gname不是小数',
'gname.boolean' => 'gname不是布尔值',
'gname.email' => 'gname不是邮箱地址',
'gname.array' => 'gname不是数组',
'gname.accepted' => 'gname请确认',
'gname.date' => 'gname不是有效日期',
'gname.alpha' => 'gname不是字母',
'gname.alphaNum' => 'gname不是字母和数字',
'gname.alphaDash' => 'gname不是字母和数字和下划线及破折号',
'gname.chs' => 'gname只能是汉字',
'gname.chsAlpha' => 'gname只能是汉字、字母',
'gname.chsAlphaNum' => 'gname只能是汉字、字母和数字',
'gname.chsDash' => 'gname只能是汉字、字母、数字和下划线_及破折号-',
'gname.activeUrl' => 'gname不是有效的域名或者IP',
'gname.url' => 'gname不是有效的URL地址',
'gname.ip' => 'gname不是有效的IP地址',
'gname.length' => 'gname长度不符',
'gname.max' => 'gname超出最大长度',
'gname.min' => 'gname低于最小长度',
'myorder.require' => 'myorder不能为空',
'myorder.number' => 'myorder不是数字',
'myorder.float' => 'myorder不是小数',
'myorder.boolean' => 'myorder不是布尔值',
'myorder.email' => 'myorder不是邮箱地址',
'myorder.array' => 'myorder不是数组',
'myorder.accepted' => 'myorder请确认',
'myorder.date' => 'myorder不是有效日期',
'myorder.alpha' => 'myorder不是字母',
'myorder.alphaNum' => 'myorder不是字母和数字',
'myorder.alphaDash' => 'myorder不是字母和数字和下划线及破折号',
'myorder.chs' => 'myorder只能是汉字',
'myorder.chsAlpha' => 'myorder只能是汉字、字母',
'myorder.chsAlphaNum' => 'myorder只能是汉字、字母和数字',
'myorder.chsDash' => 'myorder只能是汉字、字母、数字和下划线_及破折号-',
'myorder.activeUrl' => 'myorder不是有效的域名或者IP',
'myorder.url' => 'myorder不是有效的URL地址',
'myorder.ip' => 'myorder不是有效的IP地址',
'myorder.length' => 'myorder长度不符',
'myorder.max' => 'myorder超出最大长度',
'myorder.min' => 'myorder低于最小长度',
];

protected $scene =   [
    'add'=>['gid','gname','myorder',],
    'edit'=>['gid','gname','myorder',],
    'ck_id'=>['id']
];

}
