<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewspl1 extends Validate{

protected $rule =   [
        'plid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pubid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'username' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'sayip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'saytime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'checked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'zcnum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fdnum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isgood' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'saytext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'eipport' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'plid.require' => 'plid不能为空',
'plid.number' => 'plid不是数字',
'plid.float' => 'plid不是小数',
'plid.boolean' => 'plid不是布尔值',
'plid.email' => 'plid不是邮箱地址',
'plid.array' => 'plid不是数组',
'plid.accepted' => 'plid请确认',
'plid.date' => 'plid不是有效日期',
'plid.alpha' => 'plid不是字母',
'plid.alphaNum' => 'plid不是字母和数字',
'plid.alphaDash' => 'plid不是字母和数字和下划线及破折号',
'plid.chs' => 'plid只能是汉字',
'plid.chsAlpha' => 'plid只能是汉字、字母',
'plid.chsAlphaNum' => 'plid只能是汉字、字母和数字',
'plid.chsDash' => 'plid只能是汉字、字母、数字和下划线_及破折号-',
'plid.activeUrl' => 'plid不是有效的域名或者IP',
'plid.url' => 'plid不是有效的URL地址',
'plid.ip' => 'plid不是有效的IP地址',
'plid.length' => 'plid长度不符',
'plid.max' => 'plid超出最大长度',
'plid.min' => 'plid低于最小长度',
'pubid.require' => 'pubid不能为空',
'pubid.number' => 'pubid不是数字',
'pubid.float' => 'pubid不是小数',
'pubid.boolean' => 'pubid不是布尔值',
'pubid.email' => 'pubid不是邮箱地址',
'pubid.array' => 'pubid不是数组',
'pubid.accepted' => 'pubid请确认',
'pubid.date' => 'pubid不是有效日期',
'pubid.alpha' => 'pubid不是字母',
'pubid.alphaNum' => 'pubid不是字母和数字',
'pubid.alphaDash' => 'pubid不是字母和数字和下划线及破折号',
'pubid.chs' => 'pubid只能是汉字',
'pubid.chsAlpha' => 'pubid只能是汉字、字母',
'pubid.chsAlphaNum' => 'pubid只能是汉字、字母和数字',
'pubid.chsDash' => 'pubid只能是汉字、字母、数字和下划线_及破折号-',
'pubid.activeUrl' => 'pubid不是有效的域名或者IP',
'pubid.url' => 'pubid不是有效的URL地址',
'pubid.ip' => 'pubid不是有效的IP地址',
'pubid.length' => 'pubid长度不符',
'pubid.max' => 'pubid超出最大长度',
'pubid.min' => 'pubid低于最小长度',
'username.require' => 'username不能为空',
'username.number' => 'username不是数字',
'username.float' => 'username不是小数',
'username.boolean' => 'username不是布尔值',
'username.email' => 'username不是邮箱地址',
'username.array' => 'username不是数组',
'username.accepted' => 'username请确认',
'username.date' => 'username不是有效日期',
'username.alpha' => 'username不是字母',
'username.alphaNum' => 'username不是字母和数字',
'username.alphaDash' => 'username不是字母和数字和下划线及破折号',
'username.chs' => 'username只能是汉字',
'username.chsAlpha' => 'username只能是汉字、字母',
'username.chsAlphaNum' => 'username只能是汉字、字母和数字',
'username.chsDash' => 'username只能是汉字、字母、数字和下划线_及破折号-',
'username.activeUrl' => 'username不是有效的域名或者IP',
'username.url' => 'username不是有效的URL地址',
'username.ip' => 'username不是有效的IP地址',
'username.length' => 'username长度不符',
'username.max' => 'username超出最大长度',
'username.min' => 'username低于最小长度',
'sayip.require' => 'sayip不能为空',
'sayip.number' => 'sayip不是数字',
'sayip.float' => 'sayip不是小数',
'sayip.boolean' => 'sayip不是布尔值',
'sayip.email' => 'sayip不是邮箱地址',
'sayip.array' => 'sayip不是数组',
'sayip.accepted' => 'sayip请确认',
'sayip.date' => 'sayip不是有效日期',
'sayip.alpha' => 'sayip不是字母',
'sayip.alphaNum' => 'sayip不是字母和数字',
'sayip.alphaDash' => 'sayip不是字母和数字和下划线及破折号',
'sayip.chs' => 'sayip只能是汉字',
'sayip.chsAlpha' => 'sayip只能是汉字、字母',
'sayip.chsAlphaNum' => 'sayip只能是汉字、字母和数字',
'sayip.chsDash' => 'sayip只能是汉字、字母、数字和下划线_及破折号-',
'sayip.activeUrl' => 'sayip不是有效的域名或者IP',
'sayip.url' => 'sayip不是有效的URL地址',
'sayip.ip' => 'sayip不是有效的IP地址',
'sayip.length' => 'sayip长度不符',
'sayip.max' => 'sayip超出最大长度',
'sayip.min' => 'sayip低于最小长度',
'saytime.require' => 'saytime不能为空',
'saytime.number' => 'saytime不是数字',
'saytime.float' => 'saytime不是小数',
'saytime.boolean' => 'saytime不是布尔值',
'saytime.email' => 'saytime不是邮箱地址',
'saytime.array' => 'saytime不是数组',
'saytime.accepted' => 'saytime请确认',
'saytime.date' => 'saytime不是有效日期',
'saytime.alpha' => 'saytime不是字母',
'saytime.alphaNum' => 'saytime不是字母和数字',
'saytime.alphaDash' => 'saytime不是字母和数字和下划线及破折号',
'saytime.chs' => 'saytime只能是汉字',
'saytime.chsAlpha' => 'saytime只能是汉字、字母',
'saytime.chsAlphaNum' => 'saytime只能是汉字、字母和数字',
'saytime.chsDash' => 'saytime只能是汉字、字母、数字和下划线_及破折号-',
'saytime.activeUrl' => 'saytime不是有效的域名或者IP',
'saytime.url' => 'saytime不是有效的URL地址',
'saytime.ip' => 'saytime不是有效的IP地址',
'saytime.length' => 'saytime长度不符',
'saytime.max' => 'saytime超出最大长度',
'saytime.min' => 'saytime低于最小长度',
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
'checked.require' => 'checked不能为空',
'checked.number' => 'checked不是数字',
'checked.float' => 'checked不是小数',
'checked.boolean' => 'checked不是布尔值',
'checked.email' => 'checked不是邮箱地址',
'checked.array' => 'checked不是数组',
'checked.accepted' => 'checked请确认',
'checked.date' => 'checked不是有效日期',
'checked.alpha' => 'checked不是字母',
'checked.alphaNum' => 'checked不是字母和数字',
'checked.alphaDash' => 'checked不是字母和数字和下划线及破折号',
'checked.chs' => 'checked只能是汉字',
'checked.chsAlpha' => 'checked只能是汉字、字母',
'checked.chsAlphaNum' => 'checked只能是汉字、字母和数字',
'checked.chsDash' => 'checked只能是汉字、字母、数字和下划线_及破折号-',
'checked.activeUrl' => 'checked不是有效的域名或者IP',
'checked.url' => 'checked不是有效的URL地址',
'checked.ip' => 'checked不是有效的IP地址',
'checked.length' => 'checked长度不符',
'checked.max' => 'checked超出最大长度',
'checked.min' => 'checked低于最小长度',
'classid.require' => 'classid不能为空',
'classid.number' => 'classid不是数字',
'classid.float' => 'classid不是小数',
'classid.boolean' => 'classid不是布尔值',
'classid.email' => 'classid不是邮箱地址',
'classid.array' => 'classid不是数组',
'classid.accepted' => 'classid请确认',
'classid.date' => 'classid不是有效日期',
'classid.alpha' => 'classid不是字母',
'classid.alphaNum' => 'classid不是字母和数字',
'classid.alphaDash' => 'classid不是字母和数字和下划线及破折号',
'classid.chs' => 'classid只能是汉字',
'classid.chsAlpha' => 'classid只能是汉字、字母',
'classid.chsAlphaNum' => 'classid只能是汉字、字母和数字',
'classid.chsDash' => 'classid只能是汉字、字母、数字和下划线_及破折号-',
'classid.activeUrl' => 'classid不是有效的域名或者IP',
'classid.url' => 'classid不是有效的URL地址',
'classid.ip' => 'classid不是有效的IP地址',
'classid.length' => 'classid长度不符',
'classid.max' => 'classid超出最大长度',
'classid.min' => 'classid低于最小长度',
'zcnum.require' => 'zcnum不能为空',
'zcnum.number' => 'zcnum不是数字',
'zcnum.float' => 'zcnum不是小数',
'zcnum.boolean' => 'zcnum不是布尔值',
'zcnum.email' => 'zcnum不是邮箱地址',
'zcnum.array' => 'zcnum不是数组',
'zcnum.accepted' => 'zcnum请确认',
'zcnum.date' => 'zcnum不是有效日期',
'zcnum.alpha' => 'zcnum不是字母',
'zcnum.alphaNum' => 'zcnum不是字母和数字',
'zcnum.alphaDash' => 'zcnum不是字母和数字和下划线及破折号',
'zcnum.chs' => 'zcnum只能是汉字',
'zcnum.chsAlpha' => 'zcnum只能是汉字、字母',
'zcnum.chsAlphaNum' => 'zcnum只能是汉字、字母和数字',
'zcnum.chsDash' => 'zcnum只能是汉字、字母、数字和下划线_及破折号-',
'zcnum.activeUrl' => 'zcnum不是有效的域名或者IP',
'zcnum.url' => 'zcnum不是有效的URL地址',
'zcnum.ip' => 'zcnum不是有效的IP地址',
'zcnum.length' => 'zcnum长度不符',
'zcnum.max' => 'zcnum超出最大长度',
'zcnum.min' => 'zcnum低于最小长度',
'fdnum.require' => 'fdnum不能为空',
'fdnum.number' => 'fdnum不是数字',
'fdnum.float' => 'fdnum不是小数',
'fdnum.boolean' => 'fdnum不是布尔值',
'fdnum.email' => 'fdnum不是邮箱地址',
'fdnum.array' => 'fdnum不是数组',
'fdnum.accepted' => 'fdnum请确认',
'fdnum.date' => 'fdnum不是有效日期',
'fdnum.alpha' => 'fdnum不是字母',
'fdnum.alphaNum' => 'fdnum不是字母和数字',
'fdnum.alphaDash' => 'fdnum不是字母和数字和下划线及破折号',
'fdnum.chs' => 'fdnum只能是汉字',
'fdnum.chsAlpha' => 'fdnum只能是汉字、字母',
'fdnum.chsAlphaNum' => 'fdnum只能是汉字、字母和数字',
'fdnum.chsDash' => 'fdnum只能是汉字、字母、数字和下划线_及破折号-',
'fdnum.activeUrl' => 'fdnum不是有效的域名或者IP',
'fdnum.url' => 'fdnum不是有效的URL地址',
'fdnum.ip' => 'fdnum不是有效的IP地址',
'fdnum.length' => 'fdnum长度不符',
'fdnum.max' => 'fdnum超出最大长度',
'fdnum.min' => 'fdnum低于最小长度',
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
'isgood.require' => 'isgood不能为空',
'isgood.number' => 'isgood不是数字',
'isgood.float' => 'isgood不是小数',
'isgood.boolean' => 'isgood不是布尔值',
'isgood.email' => 'isgood不是邮箱地址',
'isgood.array' => 'isgood不是数组',
'isgood.accepted' => 'isgood请确认',
'isgood.date' => 'isgood不是有效日期',
'isgood.alpha' => 'isgood不是字母',
'isgood.alphaNum' => 'isgood不是字母和数字',
'isgood.alphaDash' => 'isgood不是字母和数字和下划线及破折号',
'isgood.chs' => 'isgood只能是汉字',
'isgood.chsAlpha' => 'isgood只能是汉字、字母',
'isgood.chsAlphaNum' => 'isgood只能是汉字、字母和数字',
'isgood.chsDash' => 'isgood只能是汉字、字母、数字和下划线_及破折号-',
'isgood.activeUrl' => 'isgood不是有效的域名或者IP',
'isgood.url' => 'isgood不是有效的URL地址',
'isgood.ip' => 'isgood不是有效的IP地址',
'isgood.length' => 'isgood长度不符',
'isgood.max' => 'isgood超出最大长度',
'isgood.min' => 'isgood低于最小长度',
'saytext.require' => 'saytext不能为空',
'saytext.number' => 'saytext不是数字',
'saytext.float' => 'saytext不是小数',
'saytext.boolean' => 'saytext不是布尔值',
'saytext.email' => 'saytext不是邮箱地址',
'saytext.array' => 'saytext不是数组',
'saytext.accepted' => 'saytext请确认',
'saytext.date' => 'saytext不是有效日期',
'saytext.alpha' => 'saytext不是字母',
'saytext.alphaNum' => 'saytext不是字母和数字',
'saytext.alphaDash' => 'saytext不是字母和数字和下划线及破折号',
'saytext.chs' => 'saytext只能是汉字',
'saytext.chsAlpha' => 'saytext只能是汉字、字母',
'saytext.chsAlphaNum' => 'saytext只能是汉字、字母和数字',
'saytext.chsDash' => 'saytext只能是汉字、字母、数字和下划线_及破折号-',
'saytext.activeUrl' => 'saytext不是有效的域名或者IP',
'saytext.url' => 'saytext不是有效的URL地址',
'saytext.ip' => 'saytext不是有效的IP地址',
'saytext.length' => 'saytext长度不符',
'saytext.max' => 'saytext超出最大长度',
'saytext.min' => 'saytext低于最小长度',
'eipport.require' => 'eipport不能为空',
'eipport.number' => 'eipport不是数字',
'eipport.float' => 'eipport不是小数',
'eipport.boolean' => 'eipport不是布尔值',
'eipport.email' => 'eipport不是邮箱地址',
'eipport.array' => 'eipport不是数组',
'eipport.accepted' => 'eipport请确认',
'eipport.date' => 'eipport不是有效日期',
'eipport.alpha' => 'eipport不是字母',
'eipport.alphaNum' => 'eipport不是字母和数字',
'eipport.alphaDash' => 'eipport不是字母和数字和下划线及破折号',
'eipport.chs' => 'eipport只能是汉字',
'eipport.chsAlpha' => 'eipport只能是汉字、字母',
'eipport.chsAlphaNum' => 'eipport只能是汉字、字母和数字',
'eipport.chsDash' => 'eipport只能是汉字、字母、数字和下划线_及破折号-',
'eipport.activeUrl' => 'eipport不是有效的域名或者IP',
'eipport.url' => 'eipport不是有效的URL地址',
'eipport.ip' => 'eipport不是有效的IP地址',
'eipport.length' => 'eipport长度不符',
'eipport.max' => 'eipport超出最大长度',
'eipport.min' => 'eipport低于最小长度',
];

protected $scene =   [
    'add'=>['plid','pubid','username','sayip','saytime','id','checked','classid','zcnum','fdnum','userid','isgood','saytext','eipport',],
    'edit'=>['plid','pubid','username','sayip','saytime','id','checked','classid','zcnum','fdnum','userid','isgood','saytext','eipport',],
    'ck_id'=>['id']
];

}
