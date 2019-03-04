<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsnotcj extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'word' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'id.require' => 'id不能为空',
'id.number' => 'id不是数字',
'id.float' => 'id不是小数',
'id.boolean' => 'id不是布尔值',
'id.email' => 'id不是邮箱地址',
'id.array' => 'id不是数组',
'id.accepted' => 'id请确认',
'id.date' => 'id不是有效日期',
'id.alpha' => 'id不是字母',
'id.alphaNum' => 'id不是字母和数字',
'id.alphaDash' => 'id不是字母和数字和下划线及破折号',
'id.chs' => 'id只能是汉字',
'id.chsAlpha' => 'id只能是汉字、字母',
'id.chsAlphaNum' => 'id只能是汉字、字母和数字',
'id.chsDash' => 'id只能是汉字、字母、数字和下划线_及破折号-',
'id.activeUrl' => 'id不是有效的域名或者IP',
'id.url' => 'id不是有效的URL地址',
'id.ip' => 'id不是有效的IP地址',
'id.length' => 'id长度不符',
'id.max' => 'id超出最大长度',
'id.min' => 'id低于最小长度',
'word.require' => 'word不能为空',
'word.number' => 'word不是数字',
'word.float' => 'word不是小数',
'word.boolean' => 'word不是布尔值',
'word.email' => 'word不是邮箱地址',
'word.array' => 'word不是数组',
'word.accepted' => 'word请确认',
'word.date' => 'word不是有效日期',
'word.alpha' => 'word不是字母',
'word.alphaNum' => 'word不是字母和数字',
'word.alphaDash' => 'word不是字母和数字和下划线及破折号',
'word.chs' => 'word只能是汉字',
'word.chsAlpha' => 'word只能是汉字、字母',
'word.chsAlphaNum' => 'word只能是汉字、字母和数字',
'word.chsDash' => 'word只能是汉字、字母、数字和下划线_及破折号-',
'word.activeUrl' => 'word不是有效的域名或者IP',
'word.url' => 'word不是有效的URL地址',
'word.ip' => 'word不是有效的IP地址',
'word.length' => 'word长度不符',
'word.max' => 'word超出最大长度',
'word.min' => 'word低于最小长度',
];

protected $scene =   [
    'add'=>['id','word',],
    'edit'=>['id','word',],
    'ck_id'=>['id']
];

}
