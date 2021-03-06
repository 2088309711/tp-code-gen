<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EcmsMovieDocData extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'keyid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dokey' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'closepl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'haveaddfen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'infotags' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'playdk' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'playtime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'downpath' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'playerid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'onlinepath' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'keyid.require' => 'keyid不能为空',
'keyid.number' => 'keyid不是数字',
'keyid.float' => 'keyid不是小数',
'keyid.boolean' => 'keyid不是布尔值',
'keyid.email' => 'keyid不是邮箱地址',
'keyid.array' => 'keyid不是数组',
'keyid.accepted' => 'keyid请确认',
'keyid.date' => 'keyid不是有效日期',
'keyid.alpha' => 'keyid不是字母',
'keyid.alphaNum' => 'keyid不是字母和数字',
'keyid.alphaDash' => 'keyid不是字母和数字和下划线及破折号',
'keyid.chs' => 'keyid只能是汉字',
'keyid.chsAlpha' => 'keyid只能是汉字、字母',
'keyid.chsAlphaNum' => 'keyid只能是汉字、字母和数字',
'keyid.chsDash' => 'keyid只能是汉字、字母、数字和下划线_及破折号-',
'keyid.activeUrl' => 'keyid不是有效的域名或者IP',
'keyid.url' => 'keyid不是有效的URL地址',
'keyid.ip' => 'keyid不是有效的IP地址',
'keyid.length' => 'keyid长度不符',
'keyid.max' => 'keyid超出最大长度',
'keyid.min' => 'keyid低于最小长度',
'dokey.require' => 'dokey不能为空',
'dokey.number' => 'dokey不是数字',
'dokey.float' => 'dokey不是小数',
'dokey.boolean' => 'dokey不是布尔值',
'dokey.email' => 'dokey不是邮箱地址',
'dokey.array' => 'dokey不是数组',
'dokey.accepted' => 'dokey请确认',
'dokey.date' => 'dokey不是有效日期',
'dokey.alpha' => 'dokey不是字母',
'dokey.alphaNum' => 'dokey不是字母和数字',
'dokey.alphaDash' => 'dokey不是字母和数字和下划线及破折号',
'dokey.chs' => 'dokey只能是汉字',
'dokey.chsAlpha' => 'dokey只能是汉字、字母',
'dokey.chsAlphaNum' => 'dokey只能是汉字、字母和数字',
'dokey.chsDash' => 'dokey只能是汉字、字母、数字和下划线_及破折号-',
'dokey.activeUrl' => 'dokey不是有效的域名或者IP',
'dokey.url' => 'dokey不是有效的URL地址',
'dokey.ip' => 'dokey不是有效的IP地址',
'dokey.length' => 'dokey长度不符',
'dokey.max' => 'dokey超出最大长度',
'dokey.min' => 'dokey低于最小长度',
'newstempid.require' => 'newstempid不能为空',
'newstempid.number' => 'newstempid不是数字',
'newstempid.float' => 'newstempid不是小数',
'newstempid.boolean' => 'newstempid不是布尔值',
'newstempid.email' => 'newstempid不是邮箱地址',
'newstempid.array' => 'newstempid不是数组',
'newstempid.accepted' => 'newstempid请确认',
'newstempid.date' => 'newstempid不是有效日期',
'newstempid.alpha' => 'newstempid不是字母',
'newstempid.alphaNum' => 'newstempid不是字母和数字',
'newstempid.alphaDash' => 'newstempid不是字母和数字和下划线及破折号',
'newstempid.chs' => 'newstempid只能是汉字',
'newstempid.chsAlpha' => 'newstempid只能是汉字、字母',
'newstempid.chsAlphaNum' => 'newstempid只能是汉字、字母和数字',
'newstempid.chsDash' => 'newstempid只能是汉字、字母、数字和下划线_及破折号-',
'newstempid.activeUrl' => 'newstempid不是有效的域名或者IP',
'newstempid.url' => 'newstempid不是有效的URL地址',
'newstempid.ip' => 'newstempid不是有效的IP地址',
'newstempid.length' => 'newstempid长度不符',
'newstempid.max' => 'newstempid超出最大长度',
'newstempid.min' => 'newstempid低于最小长度',
'closepl.require' => 'closepl不能为空',
'closepl.number' => 'closepl不是数字',
'closepl.float' => 'closepl不是小数',
'closepl.boolean' => 'closepl不是布尔值',
'closepl.email' => 'closepl不是邮箱地址',
'closepl.array' => 'closepl不是数组',
'closepl.accepted' => 'closepl请确认',
'closepl.date' => 'closepl不是有效日期',
'closepl.alpha' => 'closepl不是字母',
'closepl.alphaNum' => 'closepl不是字母和数字',
'closepl.alphaDash' => 'closepl不是字母和数字和下划线及破折号',
'closepl.chs' => 'closepl只能是汉字',
'closepl.chsAlpha' => 'closepl只能是汉字、字母',
'closepl.chsAlphaNum' => 'closepl只能是汉字、字母和数字',
'closepl.chsDash' => 'closepl只能是汉字、字母、数字和下划线_及破折号-',
'closepl.activeUrl' => 'closepl不是有效的域名或者IP',
'closepl.url' => 'closepl不是有效的URL地址',
'closepl.ip' => 'closepl不是有效的IP地址',
'closepl.length' => 'closepl长度不符',
'closepl.max' => 'closepl超出最大长度',
'closepl.min' => 'closepl低于最小长度',
'haveaddfen.require' => 'haveaddfen不能为空',
'haveaddfen.number' => 'haveaddfen不是数字',
'haveaddfen.float' => 'haveaddfen不是小数',
'haveaddfen.boolean' => 'haveaddfen不是布尔值',
'haveaddfen.email' => 'haveaddfen不是邮箱地址',
'haveaddfen.array' => 'haveaddfen不是数组',
'haveaddfen.accepted' => 'haveaddfen请确认',
'haveaddfen.date' => 'haveaddfen不是有效日期',
'haveaddfen.alpha' => 'haveaddfen不是字母',
'haveaddfen.alphaNum' => 'haveaddfen不是字母和数字',
'haveaddfen.alphaDash' => 'haveaddfen不是字母和数字和下划线及破折号',
'haveaddfen.chs' => 'haveaddfen只能是汉字',
'haveaddfen.chsAlpha' => 'haveaddfen只能是汉字、字母',
'haveaddfen.chsAlphaNum' => 'haveaddfen只能是汉字、字母和数字',
'haveaddfen.chsDash' => 'haveaddfen只能是汉字、字母、数字和下划线_及破折号-',
'haveaddfen.activeUrl' => 'haveaddfen不是有效的域名或者IP',
'haveaddfen.url' => 'haveaddfen不是有效的URL地址',
'haveaddfen.ip' => 'haveaddfen不是有效的IP地址',
'haveaddfen.length' => 'haveaddfen长度不符',
'haveaddfen.max' => 'haveaddfen超出最大长度',
'haveaddfen.min' => 'haveaddfen低于最小长度',
'infotags.require' => 'infotags不能为空',
'infotags.number' => 'infotags不是数字',
'infotags.float' => 'infotags不是小数',
'infotags.boolean' => 'infotags不是布尔值',
'infotags.email' => 'infotags不是邮箱地址',
'infotags.array' => 'infotags不是数组',
'infotags.accepted' => 'infotags请确认',
'infotags.date' => 'infotags不是有效日期',
'infotags.alpha' => 'infotags不是字母',
'infotags.alphaNum' => 'infotags不是字母和数字',
'infotags.alphaDash' => 'infotags不是字母和数字和下划线及破折号',
'infotags.chs' => 'infotags只能是汉字',
'infotags.chsAlpha' => 'infotags只能是汉字、字母',
'infotags.chsAlphaNum' => 'infotags只能是汉字、字母和数字',
'infotags.chsDash' => 'infotags只能是汉字、字母、数字和下划线_及破折号-',
'infotags.activeUrl' => 'infotags不是有效的域名或者IP',
'infotags.url' => 'infotags不是有效的URL地址',
'infotags.ip' => 'infotags不是有效的IP地址',
'infotags.length' => 'infotags长度不符',
'infotags.max' => 'infotags超出最大长度',
'infotags.min' => 'infotags低于最小长度',
'playdk.require' => 'playdk不能为空',
'playdk.number' => 'playdk不是数字',
'playdk.float' => 'playdk不是小数',
'playdk.boolean' => 'playdk不是布尔值',
'playdk.email' => 'playdk不是邮箱地址',
'playdk.array' => 'playdk不是数组',
'playdk.accepted' => 'playdk请确认',
'playdk.date' => 'playdk不是有效日期',
'playdk.alpha' => 'playdk不是字母',
'playdk.alphaNum' => 'playdk不是字母和数字',
'playdk.alphaDash' => 'playdk不是字母和数字和下划线及破折号',
'playdk.chs' => 'playdk只能是汉字',
'playdk.chsAlpha' => 'playdk只能是汉字、字母',
'playdk.chsAlphaNum' => 'playdk只能是汉字、字母和数字',
'playdk.chsDash' => 'playdk只能是汉字、字母、数字和下划线_及破折号-',
'playdk.activeUrl' => 'playdk不是有效的域名或者IP',
'playdk.url' => 'playdk不是有效的URL地址',
'playdk.ip' => 'playdk不是有效的IP地址',
'playdk.length' => 'playdk长度不符',
'playdk.max' => 'playdk超出最大长度',
'playdk.min' => 'playdk低于最小长度',
'playtime.require' => 'playtime不能为空',
'playtime.number' => 'playtime不是数字',
'playtime.float' => 'playtime不是小数',
'playtime.boolean' => 'playtime不是布尔值',
'playtime.email' => 'playtime不是邮箱地址',
'playtime.array' => 'playtime不是数组',
'playtime.accepted' => 'playtime请确认',
'playtime.date' => 'playtime不是有效日期',
'playtime.alpha' => 'playtime不是字母',
'playtime.alphaNum' => 'playtime不是字母和数字',
'playtime.alphaDash' => 'playtime不是字母和数字和下划线及破折号',
'playtime.chs' => 'playtime只能是汉字',
'playtime.chsAlpha' => 'playtime只能是汉字、字母',
'playtime.chsAlphaNum' => 'playtime只能是汉字、字母和数字',
'playtime.chsDash' => 'playtime只能是汉字、字母、数字和下划线_及破折号-',
'playtime.activeUrl' => 'playtime不是有效的域名或者IP',
'playtime.url' => 'playtime不是有效的URL地址',
'playtime.ip' => 'playtime不是有效的IP地址',
'playtime.length' => 'playtime长度不符',
'playtime.max' => 'playtime超出最大长度',
'playtime.min' => 'playtime低于最小长度',
'downpath.require' => 'downpath不能为空',
'downpath.number' => 'downpath不是数字',
'downpath.float' => 'downpath不是小数',
'downpath.boolean' => 'downpath不是布尔值',
'downpath.email' => 'downpath不是邮箱地址',
'downpath.array' => 'downpath不是数组',
'downpath.accepted' => 'downpath请确认',
'downpath.date' => 'downpath不是有效日期',
'downpath.alpha' => 'downpath不是字母',
'downpath.alphaNum' => 'downpath不是字母和数字',
'downpath.alphaDash' => 'downpath不是字母和数字和下划线及破折号',
'downpath.chs' => 'downpath只能是汉字',
'downpath.chsAlpha' => 'downpath只能是汉字、字母',
'downpath.chsAlphaNum' => 'downpath只能是汉字、字母和数字',
'downpath.chsDash' => 'downpath只能是汉字、字母、数字和下划线_及破折号-',
'downpath.activeUrl' => 'downpath不是有效的域名或者IP',
'downpath.url' => 'downpath不是有效的URL地址',
'downpath.ip' => 'downpath不是有效的IP地址',
'downpath.length' => 'downpath长度不符',
'downpath.max' => 'downpath超出最大长度',
'downpath.min' => 'downpath低于最小长度',
'playerid.require' => 'playerid不能为空',
'playerid.number' => 'playerid不是数字',
'playerid.float' => 'playerid不是小数',
'playerid.boolean' => 'playerid不是布尔值',
'playerid.email' => 'playerid不是邮箱地址',
'playerid.array' => 'playerid不是数组',
'playerid.accepted' => 'playerid请确认',
'playerid.date' => 'playerid不是有效日期',
'playerid.alpha' => 'playerid不是字母',
'playerid.alphaNum' => 'playerid不是字母和数字',
'playerid.alphaDash' => 'playerid不是字母和数字和下划线及破折号',
'playerid.chs' => 'playerid只能是汉字',
'playerid.chsAlpha' => 'playerid只能是汉字、字母',
'playerid.chsAlphaNum' => 'playerid只能是汉字、字母和数字',
'playerid.chsDash' => 'playerid只能是汉字、字母、数字和下划线_及破折号-',
'playerid.activeUrl' => 'playerid不是有效的域名或者IP',
'playerid.url' => 'playerid不是有效的URL地址',
'playerid.ip' => 'playerid不是有效的IP地址',
'playerid.length' => 'playerid长度不符',
'playerid.max' => 'playerid超出最大长度',
'playerid.min' => 'playerid低于最小长度',
'onlinepath.require' => 'onlinepath不能为空',
'onlinepath.number' => 'onlinepath不是数字',
'onlinepath.float' => 'onlinepath不是小数',
'onlinepath.boolean' => 'onlinepath不是布尔值',
'onlinepath.email' => 'onlinepath不是邮箱地址',
'onlinepath.array' => 'onlinepath不是数组',
'onlinepath.accepted' => 'onlinepath请确认',
'onlinepath.date' => 'onlinepath不是有效日期',
'onlinepath.alpha' => 'onlinepath不是字母',
'onlinepath.alphaNum' => 'onlinepath不是字母和数字',
'onlinepath.alphaDash' => 'onlinepath不是字母和数字和下划线及破折号',
'onlinepath.chs' => 'onlinepath只能是汉字',
'onlinepath.chsAlpha' => 'onlinepath只能是汉字、字母',
'onlinepath.chsAlphaNum' => 'onlinepath只能是汉字、字母和数字',
'onlinepath.chsDash' => 'onlinepath只能是汉字、字母、数字和下划线_及破折号-',
'onlinepath.activeUrl' => 'onlinepath不是有效的域名或者IP',
'onlinepath.url' => 'onlinepath不是有效的URL地址',
'onlinepath.ip' => 'onlinepath不是有效的IP地址',
'onlinepath.length' => 'onlinepath长度不符',
'onlinepath.max' => 'onlinepath超出最大长度',
'onlinepath.min' => 'onlinepath低于最小长度',
];

protected $scene =   [
    'add'=>['id','classid','keyid','dokey','newstempid','closepl','haveaddfen','infotags','playdk','playtime','downpath','playerid','onlinepath',],
    'edit'=>['id','classid','keyid','dokey','newstempid','closepl','haveaddfen','infotags','playdk','playtime','downpath','playerid','onlinepath',],
    'ck_id'=>['id']
];

}
