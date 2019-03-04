<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EnewspublicFc extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fclastindex' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'fclastindex.require' => 'fclastindex不能为空',
'fclastindex.number' => 'fclastindex不是数字',
'fclastindex.float' => 'fclastindex不是小数',
'fclastindex.boolean' => 'fclastindex不是布尔值',
'fclastindex.email' => 'fclastindex不是邮箱地址',
'fclastindex.array' => 'fclastindex不是数组',
'fclastindex.accepted' => 'fclastindex请确认',
'fclastindex.date' => 'fclastindex不是有效日期',
'fclastindex.alpha' => 'fclastindex不是字母',
'fclastindex.alphaNum' => 'fclastindex不是字母和数字',
'fclastindex.alphaDash' => 'fclastindex不是字母和数字和下划线及破折号',
'fclastindex.chs' => 'fclastindex只能是汉字',
'fclastindex.chsAlpha' => 'fclastindex只能是汉字、字母',
'fclastindex.chsAlphaNum' => 'fclastindex只能是汉字、字母和数字',
'fclastindex.chsDash' => 'fclastindex只能是汉字、字母、数字和下划线_及破折号-',
'fclastindex.activeUrl' => 'fclastindex不是有效的域名或者IP',
'fclastindex.url' => 'fclastindex不是有效的URL地址',
'fclastindex.ip' => 'fclastindex不是有效的IP地址',
'fclastindex.length' => 'fclastindex长度不符',
'fclastindex.max' => 'fclastindex超出最大长度',
'fclastindex.min' => 'fclastindex低于最小长度',
];

protected $scene =   [
    'add'=>['id','fclastindex',],
    'edit'=>['id','fclastindex',],
    'ck_id'=>['id']
];

}
