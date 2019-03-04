<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewspubvar extends Validate{

protected $rule =   [
        'varid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'myvar' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'varname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'varvalue' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'varsay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'myorder' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tocache' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'varid.require' => 'varid不能为空',
'varid.number' => 'varid不是数字',
'varid.float' => 'varid不是小数',
'varid.boolean' => 'varid不是布尔值',
'varid.email' => 'varid不是邮箱地址',
'varid.array' => 'varid不是数组',
'varid.accepted' => 'varid请确认',
'varid.date' => 'varid不是有效日期',
'varid.alpha' => 'varid不是字母',
'varid.alphaNum' => 'varid不是字母和数字',
'varid.alphaDash' => 'varid不是字母和数字和下划线及破折号',
'varid.chs' => 'varid只能是汉字',
'varid.chsAlpha' => 'varid只能是汉字、字母',
'varid.chsAlphaNum' => 'varid只能是汉字、字母和数字',
'varid.chsDash' => 'varid只能是汉字、字母、数字和下划线_及破折号-',
'varid.activeUrl' => 'varid不是有效的域名或者IP',
'varid.url' => 'varid不是有效的URL地址',
'varid.ip' => 'varid不是有效的IP地址',
'varid.length' => 'varid长度不符',
'varid.max' => 'varid超出最大长度',
'varid.min' => 'varid低于最小长度',
'myvar.require' => 'myvar不能为空',
'myvar.number' => 'myvar不是数字',
'myvar.float' => 'myvar不是小数',
'myvar.boolean' => 'myvar不是布尔值',
'myvar.email' => 'myvar不是邮箱地址',
'myvar.array' => 'myvar不是数组',
'myvar.accepted' => 'myvar请确认',
'myvar.date' => 'myvar不是有效日期',
'myvar.alpha' => 'myvar不是字母',
'myvar.alphaNum' => 'myvar不是字母和数字',
'myvar.alphaDash' => 'myvar不是字母和数字和下划线及破折号',
'myvar.chs' => 'myvar只能是汉字',
'myvar.chsAlpha' => 'myvar只能是汉字、字母',
'myvar.chsAlphaNum' => 'myvar只能是汉字、字母和数字',
'myvar.chsDash' => 'myvar只能是汉字、字母、数字和下划线_及破折号-',
'myvar.activeUrl' => 'myvar不是有效的域名或者IP',
'myvar.url' => 'myvar不是有效的URL地址',
'myvar.ip' => 'myvar不是有效的IP地址',
'myvar.length' => 'myvar长度不符',
'myvar.max' => 'myvar超出最大长度',
'myvar.min' => 'myvar低于最小长度',
'varname.require' => 'varname不能为空',
'varname.number' => 'varname不是数字',
'varname.float' => 'varname不是小数',
'varname.boolean' => 'varname不是布尔值',
'varname.email' => 'varname不是邮箱地址',
'varname.array' => 'varname不是数组',
'varname.accepted' => 'varname请确认',
'varname.date' => 'varname不是有效日期',
'varname.alpha' => 'varname不是字母',
'varname.alphaNum' => 'varname不是字母和数字',
'varname.alphaDash' => 'varname不是字母和数字和下划线及破折号',
'varname.chs' => 'varname只能是汉字',
'varname.chsAlpha' => 'varname只能是汉字、字母',
'varname.chsAlphaNum' => 'varname只能是汉字、字母和数字',
'varname.chsDash' => 'varname只能是汉字、字母、数字和下划线_及破折号-',
'varname.activeUrl' => 'varname不是有效的域名或者IP',
'varname.url' => 'varname不是有效的URL地址',
'varname.ip' => 'varname不是有效的IP地址',
'varname.length' => 'varname长度不符',
'varname.max' => 'varname超出最大长度',
'varname.min' => 'varname低于最小长度',
'varvalue.require' => 'varvalue不能为空',
'varvalue.number' => 'varvalue不是数字',
'varvalue.float' => 'varvalue不是小数',
'varvalue.boolean' => 'varvalue不是布尔值',
'varvalue.email' => 'varvalue不是邮箱地址',
'varvalue.array' => 'varvalue不是数组',
'varvalue.accepted' => 'varvalue请确认',
'varvalue.date' => 'varvalue不是有效日期',
'varvalue.alpha' => 'varvalue不是字母',
'varvalue.alphaNum' => 'varvalue不是字母和数字',
'varvalue.alphaDash' => 'varvalue不是字母和数字和下划线及破折号',
'varvalue.chs' => 'varvalue只能是汉字',
'varvalue.chsAlpha' => 'varvalue只能是汉字、字母',
'varvalue.chsAlphaNum' => 'varvalue只能是汉字、字母和数字',
'varvalue.chsDash' => 'varvalue只能是汉字、字母、数字和下划线_及破折号-',
'varvalue.activeUrl' => 'varvalue不是有效的域名或者IP',
'varvalue.url' => 'varvalue不是有效的URL地址',
'varvalue.ip' => 'varvalue不是有效的IP地址',
'varvalue.length' => 'varvalue长度不符',
'varvalue.max' => 'varvalue超出最大长度',
'varvalue.min' => 'varvalue低于最小长度',
'varsay.require' => 'varsay不能为空',
'varsay.number' => 'varsay不是数字',
'varsay.float' => 'varsay不是小数',
'varsay.boolean' => 'varsay不是布尔值',
'varsay.email' => 'varsay不是邮箱地址',
'varsay.array' => 'varsay不是数组',
'varsay.accepted' => 'varsay请确认',
'varsay.date' => 'varsay不是有效日期',
'varsay.alpha' => 'varsay不是字母',
'varsay.alphaNum' => 'varsay不是字母和数字',
'varsay.alphaDash' => 'varsay不是字母和数字和下划线及破折号',
'varsay.chs' => 'varsay只能是汉字',
'varsay.chsAlpha' => 'varsay只能是汉字、字母',
'varsay.chsAlphaNum' => 'varsay只能是汉字、字母和数字',
'varsay.chsDash' => 'varsay只能是汉字、字母、数字和下划线_及破折号-',
'varsay.activeUrl' => 'varsay不是有效的域名或者IP',
'varsay.url' => 'varsay不是有效的URL地址',
'varsay.ip' => 'varsay不是有效的IP地址',
'varsay.length' => 'varsay长度不符',
'varsay.max' => 'varsay超出最大长度',
'varsay.min' => 'varsay低于最小长度',
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
'tocache.require' => 'tocache不能为空',
'tocache.number' => 'tocache不是数字',
'tocache.float' => 'tocache不是小数',
'tocache.boolean' => 'tocache不是布尔值',
'tocache.email' => 'tocache不是邮箱地址',
'tocache.array' => 'tocache不是数组',
'tocache.accepted' => 'tocache请确认',
'tocache.date' => 'tocache不是有效日期',
'tocache.alpha' => 'tocache不是字母',
'tocache.alphaNum' => 'tocache不是字母和数字',
'tocache.alphaDash' => 'tocache不是字母和数字和下划线及破折号',
'tocache.chs' => 'tocache只能是汉字',
'tocache.chsAlpha' => 'tocache只能是汉字、字母',
'tocache.chsAlphaNum' => 'tocache只能是汉字、字母和数字',
'tocache.chsDash' => 'tocache只能是汉字、字母、数字和下划线_及破折号-',
'tocache.activeUrl' => 'tocache不是有效的域名或者IP',
'tocache.url' => 'tocache不是有效的URL地址',
'tocache.ip' => 'tocache不是有效的IP地址',
'tocache.length' => 'tocache长度不符',
'tocache.max' => 'tocache超出最大长度',
'tocache.min' => 'tocache低于最小长度',
];

protected $scene =   [
    'add'=>['varid','myvar','varname','varvalue','varsay','myorder','classid','tocache',],
    'edit'=>['varid','myvar','varname','varvalue','varsay','myorder','classid','tocache',],
    'ck_id'=>['id']
];

}