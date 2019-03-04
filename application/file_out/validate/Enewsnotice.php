<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsnotice extends Validate{

protected $rule =   [
        'mid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'msgtext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'haveread' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'msgtime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'to_username' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'from_userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'from_username' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'mid.require' => 'mid不能为空',
'mid.number' => 'mid不是数字',
'mid.float' => 'mid不是小数',
'mid.boolean' => 'mid不是布尔值',
'mid.email' => 'mid不是邮箱地址',
'mid.array' => 'mid不是数组',
'mid.accepted' => 'mid请确认',
'mid.date' => 'mid不是有效日期',
'mid.alpha' => 'mid不是字母',
'mid.alphaNum' => 'mid不是字母和数字',
'mid.alphaDash' => 'mid不是字母和数字和下划线及破折号',
'mid.chs' => 'mid只能是汉字',
'mid.chsAlpha' => 'mid只能是汉字、字母',
'mid.chsAlphaNum' => 'mid只能是汉字、字母和数字',
'mid.chsDash' => 'mid只能是汉字、字母、数字和下划线_及破折号-',
'mid.activeUrl' => 'mid不是有效的域名或者IP',
'mid.url' => 'mid不是有效的URL地址',
'mid.ip' => 'mid不是有效的IP地址',
'mid.length' => 'mid长度不符',
'mid.max' => 'mid超出最大长度',
'mid.min' => 'mid低于最小长度',
'title.require' => 'title不能为空',
'title.number' => 'title不是数字',
'title.float' => 'title不是小数',
'title.boolean' => 'title不是布尔值',
'title.email' => 'title不是邮箱地址',
'title.array' => 'title不是数组',
'title.accepted' => 'title请确认',
'title.date' => 'title不是有效日期',
'title.alpha' => 'title不是字母',
'title.alphaNum' => 'title不是字母和数字',
'title.alphaDash' => 'title不是字母和数字和下划线及破折号',
'title.chs' => 'title只能是汉字',
'title.chsAlpha' => 'title只能是汉字、字母',
'title.chsAlphaNum' => 'title只能是汉字、字母和数字',
'title.chsDash' => 'title只能是汉字、字母、数字和下划线_及破折号-',
'title.activeUrl' => 'title不是有效的域名或者IP',
'title.url' => 'title不是有效的URL地址',
'title.ip' => 'title不是有效的IP地址',
'title.length' => 'title长度不符',
'title.max' => 'title超出最大长度',
'title.min' => 'title低于最小长度',
'msgtext.require' => 'msgtext不能为空',
'msgtext.number' => 'msgtext不是数字',
'msgtext.float' => 'msgtext不是小数',
'msgtext.boolean' => 'msgtext不是布尔值',
'msgtext.email' => 'msgtext不是邮箱地址',
'msgtext.array' => 'msgtext不是数组',
'msgtext.accepted' => 'msgtext请确认',
'msgtext.date' => 'msgtext不是有效日期',
'msgtext.alpha' => 'msgtext不是字母',
'msgtext.alphaNum' => 'msgtext不是字母和数字',
'msgtext.alphaDash' => 'msgtext不是字母和数字和下划线及破折号',
'msgtext.chs' => 'msgtext只能是汉字',
'msgtext.chsAlpha' => 'msgtext只能是汉字、字母',
'msgtext.chsAlphaNum' => 'msgtext只能是汉字、字母和数字',
'msgtext.chsDash' => 'msgtext只能是汉字、字母、数字和下划线_及破折号-',
'msgtext.activeUrl' => 'msgtext不是有效的域名或者IP',
'msgtext.url' => 'msgtext不是有效的URL地址',
'msgtext.ip' => 'msgtext不是有效的IP地址',
'msgtext.length' => 'msgtext长度不符',
'msgtext.max' => 'msgtext超出最大长度',
'msgtext.min' => 'msgtext低于最小长度',
'haveread.require' => 'haveread不能为空',
'haveread.number' => 'haveread不是数字',
'haveread.float' => 'haveread不是小数',
'haveread.boolean' => 'haveread不是布尔值',
'haveread.email' => 'haveread不是邮箱地址',
'haveread.array' => 'haveread不是数组',
'haveread.accepted' => 'haveread请确认',
'haveread.date' => 'haveread不是有效日期',
'haveread.alpha' => 'haveread不是字母',
'haveread.alphaNum' => 'haveread不是字母和数字',
'haveread.alphaDash' => 'haveread不是字母和数字和下划线及破折号',
'haveread.chs' => 'haveread只能是汉字',
'haveread.chsAlpha' => 'haveread只能是汉字、字母',
'haveread.chsAlphaNum' => 'haveread只能是汉字、字母和数字',
'haveread.chsDash' => 'haveread只能是汉字、字母、数字和下划线_及破折号-',
'haveread.activeUrl' => 'haveread不是有效的域名或者IP',
'haveread.url' => 'haveread不是有效的URL地址',
'haveread.ip' => 'haveread不是有效的IP地址',
'haveread.length' => 'haveread长度不符',
'haveread.max' => 'haveread超出最大长度',
'haveread.min' => 'haveread低于最小长度',
'msgtime.require' => 'msgtime不能为空',
'msgtime.number' => 'msgtime不是数字',
'msgtime.float' => 'msgtime不是小数',
'msgtime.boolean' => 'msgtime不是布尔值',
'msgtime.email' => 'msgtime不是邮箱地址',
'msgtime.array' => 'msgtime不是数组',
'msgtime.accepted' => 'msgtime请确认',
'msgtime.date' => 'msgtime不是有效日期',
'msgtime.alpha' => 'msgtime不是字母',
'msgtime.alphaNum' => 'msgtime不是字母和数字',
'msgtime.alphaDash' => 'msgtime不是字母和数字和下划线及破折号',
'msgtime.chs' => 'msgtime只能是汉字',
'msgtime.chsAlpha' => 'msgtime只能是汉字、字母',
'msgtime.chsAlphaNum' => 'msgtime只能是汉字、字母和数字',
'msgtime.chsDash' => 'msgtime只能是汉字、字母、数字和下划线_及破折号-',
'msgtime.activeUrl' => 'msgtime不是有效的域名或者IP',
'msgtime.url' => 'msgtime不是有效的URL地址',
'msgtime.ip' => 'msgtime不是有效的IP地址',
'msgtime.length' => 'msgtime长度不符',
'msgtime.max' => 'msgtime超出最大长度',
'msgtime.min' => 'msgtime低于最小长度',
'to_username.require' => 'to_username不能为空',
'to_username.number' => 'to_username不是数字',
'to_username.float' => 'to_username不是小数',
'to_username.boolean' => 'to_username不是布尔值',
'to_username.email' => 'to_username不是邮箱地址',
'to_username.array' => 'to_username不是数组',
'to_username.accepted' => 'to_username请确认',
'to_username.date' => 'to_username不是有效日期',
'to_username.alpha' => 'to_username不是字母',
'to_username.alphaNum' => 'to_username不是字母和数字',
'to_username.alphaDash' => 'to_username不是字母和数字和下划线及破折号',
'to_username.chs' => 'to_username只能是汉字',
'to_username.chsAlpha' => 'to_username只能是汉字、字母',
'to_username.chsAlphaNum' => 'to_username只能是汉字、字母和数字',
'to_username.chsDash' => 'to_username只能是汉字、字母、数字和下划线_及破折号-',
'to_username.activeUrl' => 'to_username不是有效的域名或者IP',
'to_username.url' => 'to_username不是有效的URL地址',
'to_username.ip' => 'to_username不是有效的IP地址',
'to_username.length' => 'to_username长度不符',
'to_username.max' => 'to_username超出最大长度',
'to_username.min' => 'to_username低于最小长度',
'from_userid.require' => 'from_userid不能为空',
'from_userid.number' => 'from_userid不是数字',
'from_userid.float' => 'from_userid不是小数',
'from_userid.boolean' => 'from_userid不是布尔值',
'from_userid.email' => 'from_userid不是邮箱地址',
'from_userid.array' => 'from_userid不是数组',
'from_userid.accepted' => 'from_userid请确认',
'from_userid.date' => 'from_userid不是有效日期',
'from_userid.alpha' => 'from_userid不是字母',
'from_userid.alphaNum' => 'from_userid不是字母和数字',
'from_userid.alphaDash' => 'from_userid不是字母和数字和下划线及破折号',
'from_userid.chs' => 'from_userid只能是汉字',
'from_userid.chsAlpha' => 'from_userid只能是汉字、字母',
'from_userid.chsAlphaNum' => 'from_userid只能是汉字、字母和数字',
'from_userid.chsDash' => 'from_userid只能是汉字、字母、数字和下划线_及破折号-',
'from_userid.activeUrl' => 'from_userid不是有效的域名或者IP',
'from_userid.url' => 'from_userid不是有效的URL地址',
'from_userid.ip' => 'from_userid不是有效的IP地址',
'from_userid.length' => 'from_userid长度不符',
'from_userid.max' => 'from_userid超出最大长度',
'from_userid.min' => 'from_userid低于最小长度',
'from_username.require' => 'from_username不能为空',
'from_username.number' => 'from_username不是数字',
'from_username.float' => 'from_username不是小数',
'from_username.boolean' => 'from_username不是布尔值',
'from_username.email' => 'from_username不是邮箱地址',
'from_username.array' => 'from_username不是数组',
'from_username.accepted' => 'from_username请确认',
'from_username.date' => 'from_username不是有效日期',
'from_username.alpha' => 'from_username不是字母',
'from_username.alphaNum' => 'from_username不是字母和数字',
'from_username.alphaDash' => 'from_username不是字母和数字和下划线及破折号',
'from_username.chs' => 'from_username只能是汉字',
'from_username.chsAlpha' => 'from_username只能是汉字、字母',
'from_username.chsAlphaNum' => 'from_username只能是汉字、字母和数字',
'from_username.chsDash' => 'from_username只能是汉字、字母、数字和下划线_及破折号-',
'from_username.activeUrl' => 'from_username不是有效的域名或者IP',
'from_username.url' => 'from_username不是有效的URL地址',
'from_username.ip' => 'from_username不是有效的IP地址',
'from_username.length' => 'from_username长度不符',
'from_username.max' => 'from_username超出最大长度',
'from_username.min' => 'from_username低于最小长度',
];

protected $scene =   [
    'add'=>['mid','title','msgtext','haveread','msgtime','to_username','from_userid','from_username',],
    'edit'=>['mid','title','msgtext','haveread','msgtime','to_username','from_userid','from_username',],
    'ck_id'=>['id']
];

}
