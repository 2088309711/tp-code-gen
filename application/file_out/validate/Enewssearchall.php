<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewssearchall extends Validate{

protected $rule =   [
        'sid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'infotime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'infotext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'sid.require' => 'sid不能为空',
'sid.number' => 'sid不是数字',
'sid.float' => 'sid不是小数',
'sid.boolean' => 'sid不是布尔值',
'sid.email' => 'sid不是邮箱地址',
'sid.array' => 'sid不是数组',
'sid.accepted' => 'sid请确认',
'sid.date' => 'sid不是有效日期',
'sid.alpha' => 'sid不是字母',
'sid.alphaNum' => 'sid不是字母和数字',
'sid.alphaDash' => 'sid不是字母和数字和下划线及破折号',
'sid.chs' => 'sid只能是汉字',
'sid.chsAlpha' => 'sid只能是汉字、字母',
'sid.chsAlphaNum' => 'sid只能是汉字、字母和数字',
'sid.chsDash' => 'sid只能是汉字、字母、数字和下划线_及破折号-',
'sid.activeUrl' => 'sid不是有效的域名或者IP',
'sid.url' => 'sid不是有效的URL地址',
'sid.ip' => 'sid不是有效的IP地址',
'sid.length' => 'sid长度不符',
'sid.max' => 'sid超出最大长度',
'sid.min' => 'sid低于最小长度',
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
'infotime.require' => 'infotime不能为空',
'infotime.number' => 'infotime不是数字',
'infotime.float' => 'infotime不是小数',
'infotime.boolean' => 'infotime不是布尔值',
'infotime.email' => 'infotime不是邮箱地址',
'infotime.array' => 'infotime不是数组',
'infotime.accepted' => 'infotime请确认',
'infotime.date' => 'infotime不是有效日期',
'infotime.alpha' => 'infotime不是字母',
'infotime.alphaNum' => 'infotime不是字母和数字',
'infotime.alphaDash' => 'infotime不是字母和数字和下划线及破折号',
'infotime.chs' => 'infotime只能是汉字',
'infotime.chsAlpha' => 'infotime只能是汉字、字母',
'infotime.chsAlphaNum' => 'infotime只能是汉字、字母和数字',
'infotime.chsDash' => 'infotime只能是汉字、字母、数字和下划线_及破折号-',
'infotime.activeUrl' => 'infotime不是有效的域名或者IP',
'infotime.url' => 'infotime不是有效的URL地址',
'infotime.ip' => 'infotime不是有效的IP地址',
'infotime.length' => 'infotime长度不符',
'infotime.max' => 'infotime超出最大长度',
'infotime.min' => 'infotime低于最小长度',
'infotext.require' => 'infotext不能为空',
'infotext.number' => 'infotext不是数字',
'infotext.float' => 'infotext不是小数',
'infotext.boolean' => 'infotext不是布尔值',
'infotext.email' => 'infotext不是邮箱地址',
'infotext.array' => 'infotext不是数组',
'infotext.accepted' => 'infotext请确认',
'infotext.date' => 'infotext不是有效日期',
'infotext.alpha' => 'infotext不是字母',
'infotext.alphaNum' => 'infotext不是字母和数字',
'infotext.alphaDash' => 'infotext不是字母和数字和下划线及破折号',
'infotext.chs' => 'infotext只能是汉字',
'infotext.chsAlpha' => 'infotext只能是汉字、字母',
'infotext.chsAlphaNum' => 'infotext只能是汉字、字母和数字',
'infotext.chsDash' => 'infotext只能是汉字、字母、数字和下划线_及破折号-',
'infotext.activeUrl' => 'infotext不是有效的域名或者IP',
'infotext.url' => 'infotext不是有效的URL地址',
'infotext.ip' => 'infotext不是有效的IP地址',
'infotext.length' => 'infotext长度不符',
'infotext.max' => 'infotext超出最大长度',
'infotext.min' => 'infotext低于最小长度',
];

protected $scene =   [
    'add'=>['sid','id','classid','title','infotime','infotext',],
    'edit'=>['sid','id','classid','title','infotime','infotext',],
    'ck_id'=>['id']
];

}
