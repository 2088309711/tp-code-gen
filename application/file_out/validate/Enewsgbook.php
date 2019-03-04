<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsgbook extends Validate{

protected $rule =   [
        'lyid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'name' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'email' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'mycall' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lytime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lytext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'retext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'checked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'username' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'eipport' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'lyid.require' => 'lyid不能为空',
'lyid.number' => 'lyid不是数字',
'lyid.float' => 'lyid不是小数',
'lyid.boolean' => 'lyid不是布尔值',
'lyid.email' => 'lyid不是邮箱地址',
'lyid.array' => 'lyid不是数组',
'lyid.accepted' => 'lyid请确认',
'lyid.date' => 'lyid不是有效日期',
'lyid.alpha' => 'lyid不是字母',
'lyid.alphaNum' => 'lyid不是字母和数字',
'lyid.alphaDash' => 'lyid不是字母和数字和下划线及破折号',
'lyid.chs' => 'lyid只能是汉字',
'lyid.chsAlpha' => 'lyid只能是汉字、字母',
'lyid.chsAlphaNum' => 'lyid只能是汉字、字母和数字',
'lyid.chsDash' => 'lyid只能是汉字、字母、数字和下划线_及破折号-',
'lyid.activeUrl' => 'lyid不是有效的域名或者IP',
'lyid.url' => 'lyid不是有效的URL地址',
'lyid.ip' => 'lyid不是有效的IP地址',
'lyid.length' => 'lyid长度不符',
'lyid.max' => 'lyid超出最大长度',
'lyid.min' => 'lyid低于最小长度',
'name.require' => 'name不能为空',
'name.number' => 'name不是数字',
'name.float' => 'name不是小数',
'name.boolean' => 'name不是布尔值',
'name.email' => 'name不是邮箱地址',
'name.array' => 'name不是数组',
'name.accepted' => 'name请确认',
'name.date' => 'name不是有效日期',
'name.alpha' => 'name不是字母',
'name.alphaNum' => 'name不是字母和数字',
'name.alphaDash' => 'name不是字母和数字和下划线及破折号',
'name.chs' => 'name只能是汉字',
'name.chsAlpha' => 'name只能是汉字、字母',
'name.chsAlphaNum' => 'name只能是汉字、字母和数字',
'name.chsDash' => 'name只能是汉字、字母、数字和下划线_及破折号-',
'name.activeUrl' => 'name不是有效的域名或者IP',
'name.url' => 'name不是有效的URL地址',
'name.ip' => 'name不是有效的IP地址',
'name.length' => 'name长度不符',
'name.max' => 'name超出最大长度',
'name.min' => 'name低于最小长度',
'email.require' => 'email不能为空',
'email.number' => 'email不是数字',
'email.float' => 'email不是小数',
'email.boolean' => 'email不是布尔值',
'email.email' => 'email不是邮箱地址',
'email.array' => 'email不是数组',
'email.accepted' => 'email请确认',
'email.date' => 'email不是有效日期',
'email.alpha' => 'email不是字母',
'email.alphaNum' => 'email不是字母和数字',
'email.alphaDash' => 'email不是字母和数字和下划线及破折号',
'email.chs' => 'email只能是汉字',
'email.chsAlpha' => 'email只能是汉字、字母',
'email.chsAlphaNum' => 'email只能是汉字、字母和数字',
'email.chsDash' => 'email只能是汉字、字母、数字和下划线_及破折号-',
'email.activeUrl' => 'email不是有效的域名或者IP',
'email.url' => 'email不是有效的URL地址',
'email.ip' => 'email不是有效的IP地址',
'email.length' => 'email长度不符',
'email.max' => 'email超出最大长度',
'email.min' => 'email低于最小长度',
'mycall.require' => 'mycall不能为空',
'mycall.number' => 'mycall不是数字',
'mycall.float' => 'mycall不是小数',
'mycall.boolean' => 'mycall不是布尔值',
'mycall.email' => 'mycall不是邮箱地址',
'mycall.array' => 'mycall不是数组',
'mycall.accepted' => 'mycall请确认',
'mycall.date' => 'mycall不是有效日期',
'mycall.alpha' => 'mycall不是字母',
'mycall.alphaNum' => 'mycall不是字母和数字',
'mycall.alphaDash' => 'mycall不是字母和数字和下划线及破折号',
'mycall.chs' => 'mycall只能是汉字',
'mycall.chsAlpha' => 'mycall只能是汉字、字母',
'mycall.chsAlphaNum' => 'mycall只能是汉字、字母和数字',
'mycall.chsDash' => 'mycall只能是汉字、字母、数字和下划线_及破折号-',
'mycall.activeUrl' => 'mycall不是有效的域名或者IP',
'mycall.url' => 'mycall不是有效的URL地址',
'mycall.ip' => 'mycall不是有效的IP地址',
'mycall.length' => 'mycall长度不符',
'mycall.max' => 'mycall超出最大长度',
'mycall.min' => 'mycall低于最小长度',
'lytime.require' => 'lytime不能为空',
'lytime.number' => 'lytime不是数字',
'lytime.float' => 'lytime不是小数',
'lytime.boolean' => 'lytime不是布尔值',
'lytime.email' => 'lytime不是邮箱地址',
'lytime.array' => 'lytime不是数组',
'lytime.accepted' => 'lytime请确认',
'lytime.date' => 'lytime不是有效日期',
'lytime.alpha' => 'lytime不是字母',
'lytime.alphaNum' => 'lytime不是字母和数字',
'lytime.alphaDash' => 'lytime不是字母和数字和下划线及破折号',
'lytime.chs' => 'lytime只能是汉字',
'lytime.chsAlpha' => 'lytime只能是汉字、字母',
'lytime.chsAlphaNum' => 'lytime只能是汉字、字母和数字',
'lytime.chsDash' => 'lytime只能是汉字、字母、数字和下划线_及破折号-',
'lytime.activeUrl' => 'lytime不是有效的域名或者IP',
'lytime.url' => 'lytime不是有效的URL地址',
'lytime.ip' => 'lytime不是有效的IP地址',
'lytime.length' => 'lytime长度不符',
'lytime.max' => 'lytime超出最大长度',
'lytime.min' => 'lytime低于最小长度',
'lytext.require' => 'lytext不能为空',
'lytext.number' => 'lytext不是数字',
'lytext.float' => 'lytext不是小数',
'lytext.boolean' => 'lytext不是布尔值',
'lytext.email' => 'lytext不是邮箱地址',
'lytext.array' => 'lytext不是数组',
'lytext.accepted' => 'lytext请确认',
'lytext.date' => 'lytext不是有效日期',
'lytext.alpha' => 'lytext不是字母',
'lytext.alphaNum' => 'lytext不是字母和数字',
'lytext.alphaDash' => 'lytext不是字母和数字和下划线及破折号',
'lytext.chs' => 'lytext只能是汉字',
'lytext.chsAlpha' => 'lytext只能是汉字、字母',
'lytext.chsAlphaNum' => 'lytext只能是汉字、字母和数字',
'lytext.chsDash' => 'lytext只能是汉字、字母、数字和下划线_及破折号-',
'lytext.activeUrl' => 'lytext不是有效的域名或者IP',
'lytext.url' => 'lytext不是有效的URL地址',
'lytext.ip' => 'lytext不是有效的IP地址',
'lytext.length' => 'lytext长度不符',
'lytext.max' => 'lytext超出最大长度',
'lytext.min' => 'lytext低于最小长度',
'retext.require' => 'retext不能为空',
'retext.number' => 'retext不是数字',
'retext.float' => 'retext不是小数',
'retext.boolean' => 'retext不是布尔值',
'retext.email' => 'retext不是邮箱地址',
'retext.array' => 'retext不是数组',
'retext.accepted' => 'retext请确认',
'retext.date' => 'retext不是有效日期',
'retext.alpha' => 'retext不是字母',
'retext.alphaNum' => 'retext不是字母和数字',
'retext.alphaDash' => 'retext不是字母和数字和下划线及破折号',
'retext.chs' => 'retext只能是汉字',
'retext.chsAlpha' => 'retext只能是汉字、字母',
'retext.chsAlphaNum' => 'retext只能是汉字、字母和数字',
'retext.chsDash' => 'retext只能是汉字、字母、数字和下划线_及破折号-',
'retext.activeUrl' => 'retext不是有效的域名或者IP',
'retext.url' => 'retext不是有效的URL地址',
'retext.ip' => 'retext不是有效的IP地址',
'retext.length' => 'retext长度不符',
'retext.max' => 'retext超出最大长度',
'retext.min' => 'retext低于最小长度',
'bid.require' => 'bid不能为空',
'bid.number' => 'bid不是数字',
'bid.float' => 'bid不是小数',
'bid.boolean' => 'bid不是布尔值',
'bid.email' => 'bid不是邮箱地址',
'bid.array' => 'bid不是数组',
'bid.accepted' => 'bid请确认',
'bid.date' => 'bid不是有效日期',
'bid.alpha' => 'bid不是字母',
'bid.alphaNum' => 'bid不是字母和数字',
'bid.alphaDash' => 'bid不是字母和数字和下划线及破折号',
'bid.chs' => 'bid只能是汉字',
'bid.chsAlpha' => 'bid只能是汉字、字母',
'bid.chsAlphaNum' => 'bid只能是汉字、字母和数字',
'bid.chsDash' => 'bid只能是汉字、字母、数字和下划线_及破折号-',
'bid.activeUrl' => 'bid不是有效的域名或者IP',
'bid.url' => 'bid不是有效的URL地址',
'bid.ip' => 'bid不是有效的IP地址',
'bid.length' => 'bid长度不符',
'bid.max' => 'bid超出最大长度',
'bid.min' => 'bid低于最小长度',
'ip.require' => 'ip不能为空',
'ip.number' => 'ip不是数字',
'ip.float' => 'ip不是小数',
'ip.boolean' => 'ip不是布尔值',
'ip.email' => 'ip不是邮箱地址',
'ip.array' => 'ip不是数组',
'ip.accepted' => 'ip请确认',
'ip.date' => 'ip不是有效日期',
'ip.alpha' => 'ip不是字母',
'ip.alphaNum' => 'ip不是字母和数字',
'ip.alphaDash' => 'ip不是字母和数字和下划线及破折号',
'ip.chs' => 'ip只能是汉字',
'ip.chsAlpha' => 'ip只能是汉字、字母',
'ip.chsAlphaNum' => 'ip只能是汉字、字母和数字',
'ip.chsDash' => 'ip只能是汉字、字母、数字和下划线_及破折号-',
'ip.activeUrl' => 'ip不是有效的域名或者IP',
'ip.url' => 'ip不是有效的URL地址',
'ip.ip' => 'ip不是有效的IP地址',
'ip.length' => 'ip长度不符',
'ip.max' => 'ip超出最大长度',
'ip.min' => 'ip低于最小长度',
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
    'add'=>['lyid','name','email','mycall','lytime','lytext','retext','bid','ip','checked','userid','username','eipport',],
    'edit'=>['lyid','name','email','mycall','lytime','lytext','retext','bid','ip','checked','userid','username','eipport',],
    'ck_id'=>['id']
];

}