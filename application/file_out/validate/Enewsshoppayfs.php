<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsshoppayfs extends Validate{

protected $rule =   [
        'payid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'payname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'payurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'paysay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userpay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userfen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isclose' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isdefault' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'payid.require' => 'payid不能为空',
'payid.number' => 'payid不是数字',
'payid.float' => 'payid不是小数',
'payid.boolean' => 'payid不是布尔值',
'payid.email' => 'payid不是邮箱地址',
'payid.array' => 'payid不是数组',
'payid.accepted' => 'payid请确认',
'payid.date' => 'payid不是有效日期',
'payid.alpha' => 'payid不是字母',
'payid.alphaNum' => 'payid不是字母和数字',
'payid.alphaDash' => 'payid不是字母和数字和下划线及破折号',
'payid.chs' => 'payid只能是汉字',
'payid.chsAlpha' => 'payid只能是汉字、字母',
'payid.chsAlphaNum' => 'payid只能是汉字、字母和数字',
'payid.chsDash' => 'payid只能是汉字、字母、数字和下划线_及破折号-',
'payid.activeUrl' => 'payid不是有效的域名或者IP',
'payid.url' => 'payid不是有效的URL地址',
'payid.ip' => 'payid不是有效的IP地址',
'payid.length' => 'payid长度不符',
'payid.max' => 'payid超出最大长度',
'payid.min' => 'payid低于最小长度',
'payname.require' => 'payname不能为空',
'payname.number' => 'payname不是数字',
'payname.float' => 'payname不是小数',
'payname.boolean' => 'payname不是布尔值',
'payname.email' => 'payname不是邮箱地址',
'payname.array' => 'payname不是数组',
'payname.accepted' => 'payname请确认',
'payname.date' => 'payname不是有效日期',
'payname.alpha' => 'payname不是字母',
'payname.alphaNum' => 'payname不是字母和数字',
'payname.alphaDash' => 'payname不是字母和数字和下划线及破折号',
'payname.chs' => 'payname只能是汉字',
'payname.chsAlpha' => 'payname只能是汉字、字母',
'payname.chsAlphaNum' => 'payname只能是汉字、字母和数字',
'payname.chsDash' => 'payname只能是汉字、字母、数字和下划线_及破折号-',
'payname.activeUrl' => 'payname不是有效的域名或者IP',
'payname.url' => 'payname不是有效的URL地址',
'payname.ip' => 'payname不是有效的IP地址',
'payname.length' => 'payname长度不符',
'payname.max' => 'payname超出最大长度',
'payname.min' => 'payname低于最小长度',
'payurl.require' => 'payurl不能为空',
'payurl.number' => 'payurl不是数字',
'payurl.float' => 'payurl不是小数',
'payurl.boolean' => 'payurl不是布尔值',
'payurl.email' => 'payurl不是邮箱地址',
'payurl.array' => 'payurl不是数组',
'payurl.accepted' => 'payurl请确认',
'payurl.date' => 'payurl不是有效日期',
'payurl.alpha' => 'payurl不是字母',
'payurl.alphaNum' => 'payurl不是字母和数字',
'payurl.alphaDash' => 'payurl不是字母和数字和下划线及破折号',
'payurl.chs' => 'payurl只能是汉字',
'payurl.chsAlpha' => 'payurl只能是汉字、字母',
'payurl.chsAlphaNum' => 'payurl只能是汉字、字母和数字',
'payurl.chsDash' => 'payurl只能是汉字、字母、数字和下划线_及破折号-',
'payurl.activeUrl' => 'payurl不是有效的域名或者IP',
'payurl.url' => 'payurl不是有效的URL地址',
'payurl.ip' => 'payurl不是有效的IP地址',
'payurl.length' => 'payurl长度不符',
'payurl.max' => 'payurl超出最大长度',
'payurl.min' => 'payurl低于最小长度',
'paysay.require' => 'paysay不能为空',
'paysay.number' => 'paysay不是数字',
'paysay.float' => 'paysay不是小数',
'paysay.boolean' => 'paysay不是布尔值',
'paysay.email' => 'paysay不是邮箱地址',
'paysay.array' => 'paysay不是数组',
'paysay.accepted' => 'paysay请确认',
'paysay.date' => 'paysay不是有效日期',
'paysay.alpha' => 'paysay不是字母',
'paysay.alphaNum' => 'paysay不是字母和数字',
'paysay.alphaDash' => 'paysay不是字母和数字和下划线及破折号',
'paysay.chs' => 'paysay只能是汉字',
'paysay.chsAlpha' => 'paysay只能是汉字、字母',
'paysay.chsAlphaNum' => 'paysay只能是汉字、字母和数字',
'paysay.chsDash' => 'paysay只能是汉字、字母、数字和下划线_及破折号-',
'paysay.activeUrl' => 'paysay不是有效的域名或者IP',
'paysay.url' => 'paysay不是有效的URL地址',
'paysay.ip' => 'paysay不是有效的IP地址',
'paysay.length' => 'paysay长度不符',
'paysay.max' => 'paysay超出最大长度',
'paysay.min' => 'paysay低于最小长度',
'userpay.require' => 'userpay不能为空',
'userpay.number' => 'userpay不是数字',
'userpay.float' => 'userpay不是小数',
'userpay.boolean' => 'userpay不是布尔值',
'userpay.email' => 'userpay不是邮箱地址',
'userpay.array' => 'userpay不是数组',
'userpay.accepted' => 'userpay请确认',
'userpay.date' => 'userpay不是有效日期',
'userpay.alpha' => 'userpay不是字母',
'userpay.alphaNum' => 'userpay不是字母和数字',
'userpay.alphaDash' => 'userpay不是字母和数字和下划线及破折号',
'userpay.chs' => 'userpay只能是汉字',
'userpay.chsAlpha' => 'userpay只能是汉字、字母',
'userpay.chsAlphaNum' => 'userpay只能是汉字、字母和数字',
'userpay.chsDash' => 'userpay只能是汉字、字母、数字和下划线_及破折号-',
'userpay.activeUrl' => 'userpay不是有效的域名或者IP',
'userpay.url' => 'userpay不是有效的URL地址',
'userpay.ip' => 'userpay不是有效的IP地址',
'userpay.length' => 'userpay长度不符',
'userpay.max' => 'userpay超出最大长度',
'userpay.min' => 'userpay低于最小长度',
'userfen.require' => 'userfen不能为空',
'userfen.number' => 'userfen不是数字',
'userfen.float' => 'userfen不是小数',
'userfen.boolean' => 'userfen不是布尔值',
'userfen.email' => 'userfen不是邮箱地址',
'userfen.array' => 'userfen不是数组',
'userfen.accepted' => 'userfen请确认',
'userfen.date' => 'userfen不是有效日期',
'userfen.alpha' => 'userfen不是字母',
'userfen.alphaNum' => 'userfen不是字母和数字',
'userfen.alphaDash' => 'userfen不是字母和数字和下划线及破折号',
'userfen.chs' => 'userfen只能是汉字',
'userfen.chsAlpha' => 'userfen只能是汉字、字母',
'userfen.chsAlphaNum' => 'userfen只能是汉字、字母和数字',
'userfen.chsDash' => 'userfen只能是汉字、字母、数字和下划线_及破折号-',
'userfen.activeUrl' => 'userfen不是有效的域名或者IP',
'userfen.url' => 'userfen不是有效的URL地址',
'userfen.ip' => 'userfen不是有效的IP地址',
'userfen.length' => 'userfen长度不符',
'userfen.max' => 'userfen超出最大长度',
'userfen.min' => 'userfen低于最小长度',
'isclose.require' => 'isclose不能为空',
'isclose.number' => 'isclose不是数字',
'isclose.float' => 'isclose不是小数',
'isclose.boolean' => 'isclose不是布尔值',
'isclose.email' => 'isclose不是邮箱地址',
'isclose.array' => 'isclose不是数组',
'isclose.accepted' => 'isclose请确认',
'isclose.date' => 'isclose不是有效日期',
'isclose.alpha' => 'isclose不是字母',
'isclose.alphaNum' => 'isclose不是字母和数字',
'isclose.alphaDash' => 'isclose不是字母和数字和下划线及破折号',
'isclose.chs' => 'isclose只能是汉字',
'isclose.chsAlpha' => 'isclose只能是汉字、字母',
'isclose.chsAlphaNum' => 'isclose只能是汉字、字母和数字',
'isclose.chsDash' => 'isclose只能是汉字、字母、数字和下划线_及破折号-',
'isclose.activeUrl' => 'isclose不是有效的域名或者IP',
'isclose.url' => 'isclose不是有效的URL地址',
'isclose.ip' => 'isclose不是有效的IP地址',
'isclose.length' => 'isclose长度不符',
'isclose.max' => 'isclose超出最大长度',
'isclose.min' => 'isclose低于最小长度',
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
];

protected $scene =   [
    'add'=>['payid','payname','payurl','paysay','userpay','userfen','isclose','isdefault',],
    'edit'=>['payid','payname','payurl','paysay','userpay','userfen','isclose','isdefault',],
    'ck_id'=>['id']
];

}
