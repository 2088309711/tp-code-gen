<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewswords extends Validate{

protected $rule =   [
        'wordid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'oldword' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newword' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'wordid.require' => 'wordid不能为空',
'wordid.number' => 'wordid不是数字',
'wordid.float' => 'wordid不是小数',
'wordid.boolean' => 'wordid不是布尔值',
'wordid.email' => 'wordid不是邮箱地址',
'wordid.array' => 'wordid不是数组',
'wordid.accepted' => 'wordid请确认',
'wordid.date' => 'wordid不是有效日期',
'wordid.alpha' => 'wordid不是字母',
'wordid.alphaNum' => 'wordid不是字母和数字',
'wordid.alphaDash' => 'wordid不是字母和数字和下划线及破折号',
'wordid.chs' => 'wordid只能是汉字',
'wordid.chsAlpha' => 'wordid只能是汉字、字母',
'wordid.chsAlphaNum' => 'wordid只能是汉字、字母和数字',
'wordid.chsDash' => 'wordid只能是汉字、字母、数字和下划线_及破折号-',
'wordid.activeUrl' => 'wordid不是有效的域名或者IP',
'wordid.url' => 'wordid不是有效的URL地址',
'wordid.ip' => 'wordid不是有效的IP地址',
'wordid.length' => 'wordid长度不符',
'wordid.max' => 'wordid超出最大长度',
'wordid.min' => 'wordid低于最小长度',
'oldword.require' => 'oldword不能为空',
'oldword.number' => 'oldword不是数字',
'oldword.float' => 'oldword不是小数',
'oldword.boolean' => 'oldword不是布尔值',
'oldword.email' => 'oldword不是邮箱地址',
'oldword.array' => 'oldword不是数组',
'oldword.accepted' => 'oldword请确认',
'oldword.date' => 'oldword不是有效日期',
'oldword.alpha' => 'oldword不是字母',
'oldword.alphaNum' => 'oldword不是字母和数字',
'oldword.alphaDash' => 'oldword不是字母和数字和下划线及破折号',
'oldword.chs' => 'oldword只能是汉字',
'oldword.chsAlpha' => 'oldword只能是汉字、字母',
'oldword.chsAlphaNum' => 'oldword只能是汉字、字母和数字',
'oldword.chsDash' => 'oldword只能是汉字、字母、数字和下划线_及破折号-',
'oldword.activeUrl' => 'oldword不是有效的域名或者IP',
'oldword.url' => 'oldword不是有效的URL地址',
'oldword.ip' => 'oldword不是有效的IP地址',
'oldword.length' => 'oldword长度不符',
'oldword.max' => 'oldword超出最大长度',
'oldword.min' => 'oldword低于最小长度',
'newword.require' => 'newword不能为空',
'newword.number' => 'newword不是数字',
'newword.float' => 'newword不是小数',
'newword.boolean' => 'newword不是布尔值',
'newword.email' => 'newword不是邮箱地址',
'newword.array' => 'newword不是数组',
'newword.accepted' => 'newword请确认',
'newword.date' => 'newword不是有效日期',
'newword.alpha' => 'newword不是字母',
'newword.alphaNum' => 'newword不是字母和数字',
'newword.alphaDash' => 'newword不是字母和数字和下划线及破折号',
'newword.chs' => 'newword只能是汉字',
'newword.chsAlpha' => 'newword只能是汉字、字母',
'newword.chsAlphaNum' => 'newword只能是汉字、字母和数字',
'newword.chsDash' => 'newword只能是汉字、字母、数字和下划线_及破折号-',
'newword.activeUrl' => 'newword不是有效的域名或者IP',
'newword.url' => 'newword不是有效的URL地址',
'newword.ip' => 'newword不是有效的IP地址',
'newword.length' => 'newword长度不符',
'newword.max' => 'newword超出最大长度',
'newword.min' => 'newword低于最小长度',
];

protected $scene =   [
    'add'=>['wordid','oldword','newword',],
    'edit'=>['wordid','oldword','newword',],
    'ck_id'=>['id']
];

}
