<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsclassnavcache extends Validate{

protected $rule =   [
        'navtype' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'modid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'navtype.require' => 'navtype不能为空',
'navtype.number' => 'navtype不是数字',
'navtype.float' => 'navtype不是小数',
'navtype.boolean' => 'navtype不是布尔值',
'navtype.email' => 'navtype不是邮箱地址',
'navtype.array' => 'navtype不是数组',
'navtype.accepted' => 'navtype请确认',
'navtype.date' => 'navtype不是有效日期',
'navtype.alpha' => 'navtype不是字母',
'navtype.alphaNum' => 'navtype不是字母和数字',
'navtype.alphaDash' => 'navtype不是字母和数字和下划线及破折号',
'navtype.chs' => 'navtype只能是汉字',
'navtype.chsAlpha' => 'navtype只能是汉字、字母',
'navtype.chsAlphaNum' => 'navtype只能是汉字、字母和数字',
'navtype.chsDash' => 'navtype只能是汉字、字母、数字和下划线_及破折号-',
'navtype.activeUrl' => 'navtype不是有效的域名或者IP',
'navtype.url' => 'navtype不是有效的URL地址',
'navtype.ip' => 'navtype不是有效的IP地址',
'navtype.length' => 'navtype长度不符',
'navtype.max' => 'navtype超出最大长度',
'navtype.min' => 'navtype低于最小长度',
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
'modid.require' => 'modid不能为空',
'modid.number' => 'modid不是数字',
'modid.float' => 'modid不是小数',
'modid.boolean' => 'modid不是布尔值',
'modid.email' => 'modid不是邮箱地址',
'modid.array' => 'modid不是数组',
'modid.accepted' => 'modid请确认',
'modid.date' => 'modid不是有效日期',
'modid.alpha' => 'modid不是字母',
'modid.alphaNum' => 'modid不是字母和数字',
'modid.alphaDash' => 'modid不是字母和数字和下划线及破折号',
'modid.chs' => 'modid只能是汉字',
'modid.chsAlpha' => 'modid只能是汉字、字母',
'modid.chsAlphaNum' => 'modid只能是汉字、字母和数字',
'modid.chsDash' => 'modid只能是汉字、字母、数字和下划线_及破折号-',
'modid.activeUrl' => 'modid不是有效的域名或者IP',
'modid.url' => 'modid不是有效的URL地址',
'modid.ip' => 'modid不是有效的IP地址',
'modid.length' => 'modid长度不符',
'modid.max' => 'modid超出最大长度',
'modid.min' => 'modid低于最小长度',
];

protected $scene =   [
    'add'=>['navtype','userid','modid',],
    'edit'=>['navtype','userid','modid',],
    'ck_id'=>['id']
];

}
