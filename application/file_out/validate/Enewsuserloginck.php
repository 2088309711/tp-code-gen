<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsuserloginck extends Validate{

protected $rule =   [
        'userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'andauth' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
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
'andauth.require' => 'andauth不能为空',
'andauth.number' => 'andauth不是数字',
'andauth.float' => 'andauth不是小数',
'andauth.boolean' => 'andauth不是布尔值',
'andauth.email' => 'andauth不是邮箱地址',
'andauth.array' => 'andauth不是数组',
'andauth.accepted' => 'andauth请确认',
'andauth.date' => 'andauth不是有效日期',
'andauth.alpha' => 'andauth不是字母',
'andauth.alphaNum' => 'andauth不是字母和数字',
'andauth.alphaDash' => 'andauth不是字母和数字和下划线及破折号',
'andauth.chs' => 'andauth只能是汉字',
'andauth.chsAlpha' => 'andauth只能是汉字、字母',
'andauth.chsAlphaNum' => 'andauth只能是汉字、字母和数字',
'andauth.chsDash' => 'andauth只能是汉字、字母、数字和下划线_及破折号-',
'andauth.activeUrl' => 'andauth不是有效的域名或者IP',
'andauth.url' => 'andauth不是有效的URL地址',
'andauth.ip' => 'andauth不是有效的IP地址',
'andauth.length' => 'andauth长度不符',
'andauth.max' => 'andauth超出最大长度',
'andauth.min' => 'andauth低于最小长度',
];

protected $scene =   [
    'add'=>['userid','andauth',],
    'edit'=>['userid','andauth',],
    'ck_id'=>['id']
];

}
