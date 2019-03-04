<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsspacestyle extends Validate{

protected $rule =   [
        'styleid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'stylename' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'stylepic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'stylesay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'stylepath' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isdefault' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'membergroup' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'stylepic.require' => 'stylepic不能为空',
'stylepic.number' => 'stylepic不是数字',
'stylepic.float' => 'stylepic不是小数',
'stylepic.boolean' => 'stylepic不是布尔值',
'stylepic.email' => 'stylepic不是邮箱地址',
'stylepic.array' => 'stylepic不是数组',
'stylepic.accepted' => 'stylepic请确认',
'stylepic.date' => 'stylepic不是有效日期',
'stylepic.alpha' => 'stylepic不是字母',
'stylepic.alphaNum' => 'stylepic不是字母和数字',
'stylepic.alphaDash' => 'stylepic不是字母和数字和下划线及破折号',
'stylepic.chs' => 'stylepic只能是汉字',
'stylepic.chsAlpha' => 'stylepic只能是汉字、字母',
'stylepic.chsAlphaNum' => 'stylepic只能是汉字、字母和数字',
'stylepic.chsDash' => 'stylepic只能是汉字、字母、数字和下划线_及破折号-',
'stylepic.activeUrl' => 'stylepic不是有效的域名或者IP',
'stylepic.url' => 'stylepic不是有效的URL地址',
'stylepic.ip' => 'stylepic不是有效的IP地址',
'stylepic.length' => 'stylepic长度不符',
'stylepic.max' => 'stylepic超出最大长度',
'stylepic.min' => 'stylepic低于最小长度',
'stylesay.require' => 'stylesay不能为空',
'stylesay.number' => 'stylesay不是数字',
'stylesay.float' => 'stylesay不是小数',
'stylesay.boolean' => 'stylesay不是布尔值',
'stylesay.email' => 'stylesay不是邮箱地址',
'stylesay.array' => 'stylesay不是数组',
'stylesay.accepted' => 'stylesay请确认',
'stylesay.date' => 'stylesay不是有效日期',
'stylesay.alpha' => 'stylesay不是字母',
'stylesay.alphaNum' => 'stylesay不是字母和数字',
'stylesay.alphaDash' => 'stylesay不是字母和数字和下划线及破折号',
'stylesay.chs' => 'stylesay只能是汉字',
'stylesay.chsAlpha' => 'stylesay只能是汉字、字母',
'stylesay.chsAlphaNum' => 'stylesay只能是汉字、字母和数字',
'stylesay.chsDash' => 'stylesay只能是汉字、字母、数字和下划线_及破折号-',
'stylesay.activeUrl' => 'stylesay不是有效的域名或者IP',
'stylesay.url' => 'stylesay不是有效的URL地址',
'stylesay.ip' => 'stylesay不是有效的IP地址',
'stylesay.length' => 'stylesay长度不符',
'stylesay.max' => 'stylesay超出最大长度',
'stylesay.min' => 'stylesay低于最小长度',
'stylepath.require' => 'stylepath不能为空',
'stylepath.number' => 'stylepath不是数字',
'stylepath.float' => 'stylepath不是小数',
'stylepath.boolean' => 'stylepath不是布尔值',
'stylepath.email' => 'stylepath不是邮箱地址',
'stylepath.array' => 'stylepath不是数组',
'stylepath.accepted' => 'stylepath请确认',
'stylepath.date' => 'stylepath不是有效日期',
'stylepath.alpha' => 'stylepath不是字母',
'stylepath.alphaNum' => 'stylepath不是字母和数字',
'stylepath.alphaDash' => 'stylepath不是字母和数字和下划线及破折号',
'stylepath.chs' => 'stylepath只能是汉字',
'stylepath.chsAlpha' => 'stylepath只能是汉字、字母',
'stylepath.chsAlphaNum' => 'stylepath只能是汉字、字母和数字',
'stylepath.chsDash' => 'stylepath只能是汉字、字母、数字和下划线_及破折号-',
'stylepath.activeUrl' => 'stylepath不是有效的域名或者IP',
'stylepath.url' => 'stylepath不是有效的URL地址',
'stylepath.ip' => 'stylepath不是有效的IP地址',
'stylepath.length' => 'stylepath长度不符',
'stylepath.max' => 'stylepath超出最大长度',
'stylepath.min' => 'stylepath低于最小长度',
'isdefault.require' => 'isdefault不能为空',
'isdefault.number' => 'isdefault不是数字',
'isdefault.float' => 'isdefault不是小数',
'isdefault.boolean' => 'isdefault不是布尔值',
'isdefault.email' => 'isdefault不是邮箱地址',
'isdefault.array' => 'isdefault不是数组',
'isdefault.accepted' => 'isdefault请确认',
'isdefault.date' => 'isdefault不是有效日期',
'isdefault.alpha' => 'isdefault不是字母',
'isdefault.alphaNum' => 'isdefault不是字母和数字',
'isdefault.alphaDash' => 'isdefault不是字母和数字和下划线及破折号',
'isdefault.chs' => 'isdefault只能是汉字',
'isdefault.chsAlpha' => 'isdefault只能是汉字、字母',
'isdefault.chsAlphaNum' => 'isdefault只能是汉字、字母和数字',
'isdefault.chsDash' => 'isdefault只能是汉字、字母、数字和下划线_及破折号-',
'isdefault.activeUrl' => 'isdefault不是有效的域名或者IP',
'isdefault.url' => 'isdefault不是有效的URL地址',
'isdefault.ip' => 'isdefault不是有效的IP地址',
'isdefault.length' => 'isdefault长度不符',
'isdefault.max' => 'isdefault超出最大长度',
'isdefault.min' => 'isdefault低于最小长度',
'membergroup.require' => 'membergroup不能为空',
'membergroup.number' => 'membergroup不是数字',
'membergroup.float' => 'membergroup不是小数',
'membergroup.boolean' => 'membergroup不是布尔值',
'membergroup.email' => 'membergroup不是邮箱地址',
'membergroup.array' => 'membergroup不是数组',
'membergroup.accepted' => 'membergroup请确认',
'membergroup.date' => 'membergroup不是有效日期',
'membergroup.alpha' => 'membergroup不是字母',
'membergroup.alphaNum' => 'membergroup不是字母和数字',
'membergroup.alphaDash' => 'membergroup不是字母和数字和下划线及破折号',
'membergroup.chs' => 'membergroup只能是汉字',
'membergroup.chsAlpha' => 'membergroup只能是汉字、字母',
'membergroup.chsAlphaNum' => 'membergroup只能是汉字、字母和数字',
'membergroup.chsDash' => 'membergroup只能是汉字、字母、数字和下划线_及破折号-',
'membergroup.activeUrl' => 'membergroup不是有效的域名或者IP',
'membergroup.url' => 'membergroup不是有效的URL地址',
'membergroup.ip' => 'membergroup不是有效的IP地址',
'membergroup.length' => 'membergroup长度不符',
'membergroup.max' => 'membergroup超出最大长度',
'membergroup.min' => 'membergroup低于最小长度',
];

protected $scene =   [
    'add'=>['styleid','stylename','stylepic','stylesay','stylepath','isdefault','membergroup',],
    'edit'=>['styleid','stylename','stylepic','stylesay','stylepath','isdefault','membergroup',],
    'ck_id'=>['id']
];

}