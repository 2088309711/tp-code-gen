<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsshopps extends Validate{

protected $rule =   [
        'pid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'price' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'otherprice' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'psay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isclose' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isdefault' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'pid.require' => 'pid不能为空',
'pid.number' => 'pid不是数字',
'pid.float' => 'pid不是小数',
'pid.boolean' => 'pid不是布尔值',
'pid.email' => 'pid不是邮箱地址',
'pid.array' => 'pid不是数组',
'pid.accepted' => 'pid请确认',
'pid.date' => 'pid不是有效日期',
'pid.alpha' => 'pid不是字母',
'pid.alphaNum' => 'pid不是字母和数字',
'pid.alphaDash' => 'pid不是字母和数字和下划线及破折号',
'pid.chs' => 'pid只能是汉字',
'pid.chsAlpha' => 'pid只能是汉字、字母',
'pid.chsAlphaNum' => 'pid只能是汉字、字母和数字',
'pid.chsDash' => 'pid只能是汉字、字母、数字和下划线_及破折号-',
'pid.activeUrl' => 'pid不是有效的域名或者IP',
'pid.url' => 'pid不是有效的URL地址',
'pid.ip' => 'pid不是有效的IP地址',
'pid.length' => 'pid长度不符',
'pid.max' => 'pid超出最大长度',
'pid.min' => 'pid低于最小长度',
'pname.require' => 'pname不能为空',
'pname.number' => 'pname不是数字',
'pname.float' => 'pname不是小数',
'pname.boolean' => 'pname不是布尔值',
'pname.email' => 'pname不是邮箱地址',
'pname.array' => 'pname不是数组',
'pname.accepted' => 'pname请确认',
'pname.date' => 'pname不是有效日期',
'pname.alpha' => 'pname不是字母',
'pname.alphaNum' => 'pname不是字母和数字',
'pname.alphaDash' => 'pname不是字母和数字和下划线及破折号',
'pname.chs' => 'pname只能是汉字',
'pname.chsAlpha' => 'pname只能是汉字、字母',
'pname.chsAlphaNum' => 'pname只能是汉字、字母和数字',
'pname.chsDash' => 'pname只能是汉字、字母、数字和下划线_及破折号-',
'pname.activeUrl' => 'pname不是有效的域名或者IP',
'pname.url' => 'pname不是有效的URL地址',
'pname.ip' => 'pname不是有效的IP地址',
'pname.length' => 'pname长度不符',
'pname.max' => 'pname超出最大长度',
'pname.min' => 'pname低于最小长度',
'price.require' => 'price不能为空',
'price.number' => 'price不是数字',
'price.float' => 'price不是小数',
'price.boolean' => 'price不是布尔值',
'price.email' => 'price不是邮箱地址',
'price.array' => 'price不是数组',
'price.accepted' => 'price请确认',
'price.date' => 'price不是有效日期',
'price.alpha' => 'price不是字母',
'price.alphaNum' => 'price不是字母和数字',
'price.alphaDash' => 'price不是字母和数字和下划线及破折号',
'price.chs' => 'price只能是汉字',
'price.chsAlpha' => 'price只能是汉字、字母',
'price.chsAlphaNum' => 'price只能是汉字、字母和数字',
'price.chsDash' => 'price只能是汉字、字母、数字和下划线_及破折号-',
'price.activeUrl' => 'price不是有效的域名或者IP',
'price.url' => 'price不是有效的URL地址',
'price.ip' => 'price不是有效的IP地址',
'price.length' => 'price长度不符',
'price.max' => 'price超出最大长度',
'price.min' => 'price低于最小长度',
'otherprice.require' => 'otherprice不能为空',
'otherprice.number' => 'otherprice不是数字',
'otherprice.float' => 'otherprice不是小数',
'otherprice.boolean' => 'otherprice不是布尔值',
'otherprice.email' => 'otherprice不是邮箱地址',
'otherprice.array' => 'otherprice不是数组',
'otherprice.accepted' => 'otherprice请确认',
'otherprice.date' => 'otherprice不是有效日期',
'otherprice.alpha' => 'otherprice不是字母',
'otherprice.alphaNum' => 'otherprice不是字母和数字',
'otherprice.alphaDash' => 'otherprice不是字母和数字和下划线及破折号',
'otherprice.chs' => 'otherprice只能是汉字',
'otherprice.chsAlpha' => 'otherprice只能是汉字、字母',
'otherprice.chsAlphaNum' => 'otherprice只能是汉字、字母和数字',
'otherprice.chsDash' => 'otherprice只能是汉字、字母、数字和下划线_及破折号-',
'otherprice.activeUrl' => 'otherprice不是有效的域名或者IP',
'otherprice.url' => 'otherprice不是有效的URL地址',
'otherprice.ip' => 'otherprice不是有效的IP地址',
'otherprice.length' => 'otherprice长度不符',
'otherprice.max' => 'otherprice超出最大长度',
'otherprice.min' => 'otherprice低于最小长度',
'psay.require' => 'psay不能为空',
'psay.number' => 'psay不是数字',
'psay.float' => 'psay不是小数',
'psay.boolean' => 'psay不是布尔值',
'psay.email' => 'psay不是邮箱地址',
'psay.array' => 'psay不是数组',
'psay.accepted' => 'psay请确认',
'psay.date' => 'psay不是有效日期',
'psay.alpha' => 'psay不是字母',
'psay.alphaNum' => 'psay不是字母和数字',
'psay.alphaDash' => 'psay不是字母和数字和下划线及破折号',
'psay.chs' => 'psay只能是汉字',
'psay.chsAlpha' => 'psay只能是汉字、字母',
'psay.chsAlphaNum' => 'psay只能是汉字、字母和数字',
'psay.chsDash' => 'psay只能是汉字、字母、数字和下划线_及破折号-',
'psay.activeUrl' => 'psay不是有效的域名或者IP',
'psay.url' => 'psay不是有效的URL地址',
'psay.ip' => 'psay不是有效的IP地址',
'psay.length' => 'psay长度不符',
'psay.max' => 'psay超出最大长度',
'psay.min' => 'psay低于最小长度',
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
    'add'=>['pid','pname','price','otherprice','psay','isclose','isdefault',],
    'edit'=>['pid','pname','price','otherprice','psay','isclose','isdefault',],
    'ck_id'=>['id']
];

}