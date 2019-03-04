<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsbqtemp extends Validate{

protected $rule =   [
        'tempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'modid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'temptext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'showdate' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'listvar' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'subnews' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'rownum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'docode' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'tempid.require' => 'tempid不能为空',
'tempid.number' => 'tempid不是数字',
'tempid.float' => 'tempid不是小数',
'tempid.boolean' => 'tempid不是布尔值',
'tempid.email' => 'tempid不是邮箱地址',
'tempid.array' => 'tempid不是数组',
'tempid.accepted' => 'tempid请确认',
'tempid.date' => 'tempid不是有效日期',
'tempid.alpha' => 'tempid不是字母',
'tempid.alphaNum' => 'tempid不是字母和数字',
'tempid.alphaDash' => 'tempid不是字母和数字和下划线及破折号',
'tempid.chs' => 'tempid只能是汉字',
'tempid.chsAlpha' => 'tempid只能是汉字、字母',
'tempid.chsAlphaNum' => 'tempid只能是汉字、字母和数字',
'tempid.chsDash' => 'tempid只能是汉字、字母、数字和下划线_及破折号-',
'tempid.activeUrl' => 'tempid不是有效的域名或者IP',
'tempid.url' => 'tempid不是有效的URL地址',
'tempid.ip' => 'tempid不是有效的IP地址',
'tempid.length' => 'tempid长度不符',
'tempid.max' => 'tempid超出最大长度',
'tempid.min' => 'tempid低于最小长度',
'tempname.require' => 'tempname不能为空',
'tempname.number' => 'tempname不是数字',
'tempname.float' => 'tempname不是小数',
'tempname.boolean' => 'tempname不是布尔值',
'tempname.email' => 'tempname不是邮箱地址',
'tempname.array' => 'tempname不是数组',
'tempname.accepted' => 'tempname请确认',
'tempname.date' => 'tempname不是有效日期',
'tempname.alpha' => 'tempname不是字母',
'tempname.alphaNum' => 'tempname不是字母和数字',
'tempname.alphaDash' => 'tempname不是字母和数字和下划线及破折号',
'tempname.chs' => 'tempname只能是汉字',
'tempname.chsAlpha' => 'tempname只能是汉字、字母',
'tempname.chsAlphaNum' => 'tempname只能是汉字、字母和数字',
'tempname.chsDash' => 'tempname只能是汉字、字母、数字和下划线_及破折号-',
'tempname.activeUrl' => 'tempname不是有效的域名或者IP',
'tempname.url' => 'tempname不是有效的URL地址',
'tempname.ip' => 'tempname不是有效的IP地址',
'tempname.length' => 'tempname长度不符',
'tempname.max' => 'tempname超出最大长度',
'tempname.min' => 'tempname低于最小长度',
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
'temptext.require' => 'temptext不能为空',
'temptext.number' => 'temptext不是数字',
'temptext.float' => 'temptext不是小数',
'temptext.boolean' => 'temptext不是布尔值',
'temptext.email' => 'temptext不是邮箱地址',
'temptext.array' => 'temptext不是数组',
'temptext.accepted' => 'temptext请确认',
'temptext.date' => 'temptext不是有效日期',
'temptext.alpha' => 'temptext不是字母',
'temptext.alphaNum' => 'temptext不是字母和数字',
'temptext.alphaDash' => 'temptext不是字母和数字和下划线及破折号',
'temptext.chs' => 'temptext只能是汉字',
'temptext.chsAlpha' => 'temptext只能是汉字、字母',
'temptext.chsAlphaNum' => 'temptext只能是汉字、字母和数字',
'temptext.chsDash' => 'temptext只能是汉字、字母、数字和下划线_及破折号-',
'temptext.activeUrl' => 'temptext不是有效的域名或者IP',
'temptext.url' => 'temptext不是有效的URL地址',
'temptext.ip' => 'temptext不是有效的IP地址',
'temptext.length' => 'temptext长度不符',
'temptext.max' => 'temptext超出最大长度',
'temptext.min' => 'temptext低于最小长度',
'showdate.require' => 'showdate不能为空',
'showdate.number' => 'showdate不是数字',
'showdate.float' => 'showdate不是小数',
'showdate.boolean' => 'showdate不是布尔值',
'showdate.email' => 'showdate不是邮箱地址',
'showdate.array' => 'showdate不是数组',
'showdate.accepted' => 'showdate请确认',
'showdate.date' => 'showdate不是有效日期',
'showdate.alpha' => 'showdate不是字母',
'showdate.alphaNum' => 'showdate不是字母和数字',
'showdate.alphaDash' => 'showdate不是字母和数字和下划线及破折号',
'showdate.chs' => 'showdate只能是汉字',
'showdate.chsAlpha' => 'showdate只能是汉字、字母',
'showdate.chsAlphaNum' => 'showdate只能是汉字、字母和数字',
'showdate.chsDash' => 'showdate只能是汉字、字母、数字和下划线_及破折号-',
'showdate.activeUrl' => 'showdate不是有效的域名或者IP',
'showdate.url' => 'showdate不是有效的URL地址',
'showdate.ip' => 'showdate不是有效的IP地址',
'showdate.length' => 'showdate长度不符',
'showdate.max' => 'showdate超出最大长度',
'showdate.min' => 'showdate低于最小长度',
'listvar.require' => 'listvar不能为空',
'listvar.number' => 'listvar不是数字',
'listvar.float' => 'listvar不是小数',
'listvar.boolean' => 'listvar不是布尔值',
'listvar.email' => 'listvar不是邮箱地址',
'listvar.array' => 'listvar不是数组',
'listvar.accepted' => 'listvar请确认',
'listvar.date' => 'listvar不是有效日期',
'listvar.alpha' => 'listvar不是字母',
'listvar.alphaNum' => 'listvar不是字母和数字',
'listvar.alphaDash' => 'listvar不是字母和数字和下划线及破折号',
'listvar.chs' => 'listvar只能是汉字',
'listvar.chsAlpha' => 'listvar只能是汉字、字母',
'listvar.chsAlphaNum' => 'listvar只能是汉字、字母和数字',
'listvar.chsDash' => 'listvar只能是汉字、字母、数字和下划线_及破折号-',
'listvar.activeUrl' => 'listvar不是有效的域名或者IP',
'listvar.url' => 'listvar不是有效的URL地址',
'listvar.ip' => 'listvar不是有效的IP地址',
'listvar.length' => 'listvar长度不符',
'listvar.max' => 'listvar超出最大长度',
'listvar.min' => 'listvar低于最小长度',
'subnews.require' => 'subnews不能为空',
'subnews.number' => 'subnews不是数字',
'subnews.float' => 'subnews不是小数',
'subnews.boolean' => 'subnews不是布尔值',
'subnews.email' => 'subnews不是邮箱地址',
'subnews.array' => 'subnews不是数组',
'subnews.accepted' => 'subnews请确认',
'subnews.date' => 'subnews不是有效日期',
'subnews.alpha' => 'subnews不是字母',
'subnews.alphaNum' => 'subnews不是字母和数字',
'subnews.alphaDash' => 'subnews不是字母和数字和下划线及破折号',
'subnews.chs' => 'subnews只能是汉字',
'subnews.chsAlpha' => 'subnews只能是汉字、字母',
'subnews.chsAlphaNum' => 'subnews只能是汉字、字母和数字',
'subnews.chsDash' => 'subnews只能是汉字、字母、数字和下划线_及破折号-',
'subnews.activeUrl' => 'subnews不是有效的域名或者IP',
'subnews.url' => 'subnews不是有效的URL地址',
'subnews.ip' => 'subnews不是有效的IP地址',
'subnews.length' => 'subnews长度不符',
'subnews.max' => 'subnews超出最大长度',
'subnews.min' => 'subnews低于最小长度',
'rownum.require' => 'rownum不能为空',
'rownum.number' => 'rownum不是数字',
'rownum.float' => 'rownum不是小数',
'rownum.boolean' => 'rownum不是布尔值',
'rownum.email' => 'rownum不是邮箱地址',
'rownum.array' => 'rownum不是数组',
'rownum.accepted' => 'rownum请确认',
'rownum.date' => 'rownum不是有效日期',
'rownum.alpha' => 'rownum不是字母',
'rownum.alphaNum' => 'rownum不是字母和数字',
'rownum.alphaDash' => 'rownum不是字母和数字和下划线及破折号',
'rownum.chs' => 'rownum只能是汉字',
'rownum.chsAlpha' => 'rownum只能是汉字、字母',
'rownum.chsAlphaNum' => 'rownum只能是汉字、字母和数字',
'rownum.chsDash' => 'rownum只能是汉字、字母、数字和下划线_及破折号-',
'rownum.activeUrl' => 'rownum不是有效的域名或者IP',
'rownum.url' => 'rownum不是有效的URL地址',
'rownum.ip' => 'rownum不是有效的IP地址',
'rownum.length' => 'rownum长度不符',
'rownum.max' => 'rownum超出最大长度',
'rownum.min' => 'rownum低于最小长度',
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
'docode.require' => 'docode不能为空',
'docode.number' => 'docode不是数字',
'docode.float' => 'docode不是小数',
'docode.boolean' => 'docode不是布尔值',
'docode.email' => 'docode不是邮箱地址',
'docode.array' => 'docode不是数组',
'docode.accepted' => 'docode请确认',
'docode.date' => 'docode不是有效日期',
'docode.alpha' => 'docode不是字母',
'docode.alphaNum' => 'docode不是字母和数字',
'docode.alphaDash' => 'docode不是字母和数字和下划线及破折号',
'docode.chs' => 'docode只能是汉字',
'docode.chsAlpha' => 'docode只能是汉字、字母',
'docode.chsAlphaNum' => 'docode只能是汉字、字母和数字',
'docode.chsDash' => 'docode只能是汉字、字母、数字和下划线_及破折号-',
'docode.activeUrl' => 'docode不是有效的域名或者IP',
'docode.url' => 'docode不是有效的URL地址',
'docode.ip' => 'docode不是有效的IP地址',
'docode.length' => 'docode长度不符',
'docode.max' => 'docode超出最大长度',
'docode.min' => 'docode低于最小长度',
];

protected $scene =   [
    'add'=>['tempid','tempname','modid','temptext','showdate','listvar','subnews','rownum','classid','docode',],
    'edit'=>['tempid','tempname','modid','temptext','showdate','listvar','subnews','rownum','classid','docode',],
    'ck_id'=>['id']
];

}