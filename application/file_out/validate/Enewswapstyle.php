<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewswapstyle extends Validate{

protected $rule =   [
        'styleid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'stylename' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'path' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'styleid.require' => 'styleid不能为空',
'styleid.number' => 'styleid不是数字',
'styleid.float' => 'styleid不是小数',
'styleid.boolean' => 'styleid不是布尔值',
'styleid.email' => 'styleid不是邮箱地址',
'styleid.array' => 'styleid不是数组',
'styleid.accepted' => 'styleid请确认',
'styleid.date' => 'styleid不是有效日期',
'styleid.alpha' => 'styleid不是字母',
'styleid.alphaNum' => 'styleid不是字母和数字',
'styleid.alphaDash' => 'styleid不是字母和数字和下划线及破折号',
'styleid.chs' => 'styleid只能是汉字',
'styleid.chsAlpha' => 'styleid只能是汉字、字母',
'styleid.chsAlphaNum' => 'styleid只能是汉字、字母和数字',
'styleid.chsDash' => 'styleid只能是汉字、字母、数字和下划线_及破折号-',
'styleid.activeUrl' => 'styleid不是有效的域名或者IP',
'styleid.url' => 'styleid不是有效的URL地址',
'styleid.ip' => 'styleid不是有效的IP地址',
'styleid.length' => 'styleid长度不符',
'styleid.max' => 'styleid超出最大长度',
'styleid.min' => 'styleid低于最小长度',
'stylename.require' => 'stylename不能为空',
'stylename.number' => 'stylename不是数字',
'stylename.float' => 'stylename不是小数',
'stylename.boolean' => 'stylename不是布尔值',
'stylename.email' => 'stylename不是邮箱地址',
'stylename.array' => 'stylename不是数组',
'stylename.accepted' => 'stylename请确认',
'stylename.date' => 'stylename不是有效日期',
'stylename.alpha' => 'stylename不是字母',
'stylename.alphaNum' => 'stylename不是字母和数字',
'stylename.alphaDash' => 'stylename不是字母和数字和下划线及破折号',
'stylename.chs' => 'stylename只能是汉字',
'stylename.chsAlpha' => 'stylename只能是汉字、字母',
'stylename.chsAlphaNum' => 'stylename只能是汉字、字母和数字',
'stylename.chsDash' => 'stylename只能是汉字、字母、数字和下划线_及破折号-',
'stylename.activeUrl' => 'stylename不是有效的域名或者IP',
'stylename.url' => 'stylename不是有效的URL地址',
'stylename.ip' => 'stylename不是有效的IP地址',
'stylename.length' => 'stylename长度不符',
'stylename.max' => 'stylename超出最大长度',
'stylename.min' => 'stylename低于最小长度',
'path.require' => 'path不能为空',
'path.number' => 'path不是数字',
'path.float' => 'path不是小数',
'path.boolean' => 'path不是布尔值',
'path.email' => 'path不是邮箱地址',
'path.array' => 'path不是数组',
'path.accepted' => 'path请确认',
'path.date' => 'path不是有效日期',
'path.alpha' => 'path不是字母',
'path.alphaNum' => 'path不是字母和数字',
'path.alphaDash' => 'path不是字母和数字和下划线及破折号',
'path.chs' => 'path只能是汉字',
'path.chsAlpha' => 'path只能是汉字、字母',
'path.chsAlphaNum' => 'path只能是汉字、字母和数字',
'path.chsDash' => 'path只能是汉字、字母、数字和下划线_及破折号-',
'path.activeUrl' => 'path不是有效的域名或者IP',
'path.url' => 'path不是有效的URL地址',
'path.ip' => 'path不是有效的IP地址',
'path.length' => 'path长度不符',
'path.max' => 'path超出最大长度',
'path.min' => 'path低于最小长度',
];

protected $scene =   [
    'add'=>['styleid','stylename','path',],
    'edit'=>['styleid','stylename','path',],
    'ck_id'=>['id']
];

}
