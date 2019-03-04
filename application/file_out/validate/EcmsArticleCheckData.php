<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EcmsArticleCheckData extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'keyid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dokey' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'closepl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'haveaddfen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'infotags' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
];

protected $scene =   [
    'add'=>['id','classid','keyid','dokey','newstempid','closepl','haveaddfen','infotags',],
    'edit'=>['id','classid','keyid','dokey','newstempid','closepl','haveaddfen','infotags',],
    'ck_id'=>['id']
];

}
