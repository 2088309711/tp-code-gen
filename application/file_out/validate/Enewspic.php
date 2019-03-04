<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewspic extends Validate{

protected $rule =   [
        'picid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pic_url' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'url' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pic_width' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pic_height' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'open_pic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'border' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pictext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'picid.require' => 'picid不能为空',
'picid.number' => 'picid不是数字',
'picid.float' => 'picid不是小数',
'picid.boolean' => 'picid不是布尔值',
'picid.email' => 'picid不是邮箱地址',
'picid.array' => 'picid不是数组',
'picid.accepted' => 'picid请确认',
'picid.date' => 'picid不是有效日期',
'picid.alpha' => 'picid不是字母',
'picid.alphaNum' => 'picid不是字母和数字',
'picid.alphaDash' => 'picid不是字母和数字和下划线及破折号',
'picid.chs' => 'picid只能是汉字',
'picid.chsAlpha' => 'picid只能是汉字、字母',
'picid.chsAlphaNum' => 'picid只能是汉字、字母和数字',
'picid.chsDash' => 'picid只能是汉字、字母、数字和下划线_及破折号-',
'picid.activeUrl' => 'picid不是有效的域名或者IP',
'picid.url' => 'picid不是有效的URL地址',
'picid.ip' => 'picid不是有效的IP地址',
'picid.length' => 'picid长度不符',
'picid.max' => 'picid超出最大长度',
'picid.min' => 'picid低于最小长度',
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
'pic_url.require' => 'pic_url不能为空',
'pic_url.number' => 'pic_url不是数字',
'pic_url.float' => 'pic_url不是小数',
'pic_url.boolean' => 'pic_url不是布尔值',
'pic_url.email' => 'pic_url不是邮箱地址',
'pic_url.array' => 'pic_url不是数组',
'pic_url.accepted' => 'pic_url请确认',
'pic_url.date' => 'pic_url不是有效日期',
'pic_url.alpha' => 'pic_url不是字母',
'pic_url.alphaNum' => 'pic_url不是字母和数字',
'pic_url.alphaDash' => 'pic_url不是字母和数字和下划线及破折号',
'pic_url.chs' => 'pic_url只能是汉字',
'pic_url.chsAlpha' => 'pic_url只能是汉字、字母',
'pic_url.chsAlphaNum' => 'pic_url只能是汉字、字母和数字',
'pic_url.chsDash' => 'pic_url只能是汉字、字母、数字和下划线_及破折号-',
'pic_url.activeUrl' => 'pic_url不是有效的域名或者IP',
'pic_url.url' => 'pic_url不是有效的URL地址',
'pic_url.ip' => 'pic_url不是有效的IP地址',
'pic_url.length' => 'pic_url长度不符',
'pic_url.max' => 'pic_url超出最大长度',
'pic_url.min' => 'pic_url低于最小长度',
'url.require' => 'url不能为空',
'url.number' => 'url不是数字',
'url.float' => 'url不是小数',
'url.boolean' => 'url不是布尔值',
'url.email' => 'url不是邮箱地址',
'url.array' => 'url不是数组',
'url.accepted' => 'url请确认',
'url.date' => 'url不是有效日期',
'url.alpha' => 'url不是字母',
'url.alphaNum' => 'url不是字母和数字',
'url.alphaDash' => 'url不是字母和数字和下划线及破折号',
'url.chs' => 'url只能是汉字',
'url.chsAlpha' => 'url只能是汉字、字母',
'url.chsAlphaNum' => 'url只能是汉字、字母和数字',
'url.chsDash' => 'url只能是汉字、字母、数字和下划线_及破折号-',
'url.activeUrl' => 'url不是有效的域名或者IP',
'url.url' => 'url不是有效的URL地址',
'url.ip' => 'url不是有效的IP地址',
'url.length' => 'url长度不符',
'url.max' => 'url超出最大长度',
'url.min' => 'url低于最小长度',
'pic_width.require' => 'pic_width不能为空',
'pic_width.number' => 'pic_width不是数字',
'pic_width.float' => 'pic_width不是小数',
'pic_width.boolean' => 'pic_width不是布尔值',
'pic_width.email' => 'pic_width不是邮箱地址',
'pic_width.array' => 'pic_width不是数组',
'pic_width.accepted' => 'pic_width请确认',
'pic_width.date' => 'pic_width不是有效日期',
'pic_width.alpha' => 'pic_width不是字母',
'pic_width.alphaNum' => 'pic_width不是字母和数字',
'pic_width.alphaDash' => 'pic_width不是字母和数字和下划线及破折号',
'pic_width.chs' => 'pic_width只能是汉字',
'pic_width.chsAlpha' => 'pic_width只能是汉字、字母',
'pic_width.chsAlphaNum' => 'pic_width只能是汉字、字母和数字',
'pic_width.chsDash' => 'pic_width只能是汉字、字母、数字和下划线_及破折号-',
'pic_width.activeUrl' => 'pic_width不是有效的域名或者IP',
'pic_width.url' => 'pic_width不是有效的URL地址',
'pic_width.ip' => 'pic_width不是有效的IP地址',
'pic_width.length' => 'pic_width长度不符',
'pic_width.max' => 'pic_width超出最大长度',
'pic_width.min' => 'pic_width低于最小长度',
'pic_height.require' => 'pic_height不能为空',
'pic_height.number' => 'pic_height不是数字',
'pic_height.float' => 'pic_height不是小数',
'pic_height.boolean' => 'pic_height不是布尔值',
'pic_height.email' => 'pic_height不是邮箱地址',
'pic_height.array' => 'pic_height不是数组',
'pic_height.accepted' => 'pic_height请确认',
'pic_height.date' => 'pic_height不是有效日期',
'pic_height.alpha' => 'pic_height不是字母',
'pic_height.alphaNum' => 'pic_height不是字母和数字',
'pic_height.alphaDash' => 'pic_height不是字母和数字和下划线及破折号',
'pic_height.chs' => 'pic_height只能是汉字',
'pic_height.chsAlpha' => 'pic_height只能是汉字、字母',
'pic_height.chsAlphaNum' => 'pic_height只能是汉字、字母和数字',
'pic_height.chsDash' => 'pic_height只能是汉字、字母、数字和下划线_及破折号-',
'pic_height.activeUrl' => 'pic_height不是有效的域名或者IP',
'pic_height.url' => 'pic_height不是有效的URL地址',
'pic_height.ip' => 'pic_height不是有效的IP地址',
'pic_height.length' => 'pic_height长度不符',
'pic_height.max' => 'pic_height超出最大长度',
'pic_height.min' => 'pic_height低于最小长度',
'open_pic.require' => 'open_pic不能为空',
'open_pic.number' => 'open_pic不是数字',
'open_pic.float' => 'open_pic不是小数',
'open_pic.boolean' => 'open_pic不是布尔值',
'open_pic.email' => 'open_pic不是邮箱地址',
'open_pic.array' => 'open_pic不是数组',
'open_pic.accepted' => 'open_pic请确认',
'open_pic.date' => 'open_pic不是有效日期',
'open_pic.alpha' => 'open_pic不是字母',
'open_pic.alphaNum' => 'open_pic不是字母和数字',
'open_pic.alphaDash' => 'open_pic不是字母和数字和下划线及破折号',
'open_pic.chs' => 'open_pic只能是汉字',
'open_pic.chsAlpha' => 'open_pic只能是汉字、字母',
'open_pic.chsAlphaNum' => 'open_pic只能是汉字、字母和数字',
'open_pic.chsDash' => 'open_pic只能是汉字、字母、数字和下划线_及破折号-',
'open_pic.activeUrl' => 'open_pic不是有效的域名或者IP',
'open_pic.url' => 'open_pic不是有效的URL地址',
'open_pic.ip' => 'open_pic不是有效的IP地址',
'open_pic.length' => 'open_pic长度不符',
'open_pic.max' => 'open_pic超出最大长度',
'open_pic.min' => 'open_pic低于最小长度',
'border.require' => 'border不能为空',
'border.number' => 'border不是数字',
'border.float' => 'border不是小数',
'border.boolean' => 'border不是布尔值',
'border.email' => 'border不是邮箱地址',
'border.array' => 'border不是数组',
'border.accepted' => 'border请确认',
'border.date' => 'border不是有效日期',
'border.alpha' => 'border不是字母',
'border.alphaNum' => 'border不是字母和数字',
'border.alphaDash' => 'border不是字母和数字和下划线及破折号',
'border.chs' => 'border只能是汉字',
'border.chsAlpha' => 'border只能是汉字、字母',
'border.chsAlphaNum' => 'border只能是汉字、字母和数字',
'border.chsDash' => 'border只能是汉字、字母、数字和下划线_及破折号-',
'border.activeUrl' => 'border不是有效的域名或者IP',
'border.url' => 'border不是有效的URL地址',
'border.ip' => 'border不是有效的IP地址',
'border.length' => 'border长度不符',
'border.max' => 'border超出最大长度',
'border.min' => 'border低于最小长度',
'pictext.require' => 'pictext不能为空',
'pictext.number' => 'pictext不是数字',
'pictext.float' => 'pictext不是小数',
'pictext.boolean' => 'pictext不是布尔值',
'pictext.email' => 'pictext不是邮箱地址',
'pictext.array' => 'pictext不是数组',
'pictext.accepted' => 'pictext请确认',
'pictext.date' => 'pictext不是有效日期',
'pictext.alpha' => 'pictext不是字母',
'pictext.alphaNum' => 'pictext不是字母和数字',
'pictext.alphaDash' => 'pictext不是字母和数字和下划线及破折号',
'pictext.chs' => 'pictext只能是汉字',
'pictext.chsAlpha' => 'pictext只能是汉字、字母',
'pictext.chsAlphaNum' => 'pictext只能是汉字、字母和数字',
'pictext.chsDash' => 'pictext只能是汉字、字母、数字和下划线_及破折号-',
'pictext.activeUrl' => 'pictext不是有效的域名或者IP',
'pictext.url' => 'pictext不是有效的URL地址',
'pictext.ip' => 'pictext不是有效的IP地址',
'pictext.length' => 'pictext长度不符',
'pictext.max' => 'pictext超出最大长度',
'pictext.min' => 'pictext低于最小长度',
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
];

protected $scene =   [
    'add'=>['picid','title','pic_url','url','pic_width','pic_height','open_pic','border','pictext','classid',],
    'edit'=>['picid','title','pic_url','url','pic_width','pic_height','open_pic','border','pictext','classid',],
    'ck_id'=>['id']
];

}
