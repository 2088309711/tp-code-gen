<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewssp2 extends Validate{

protected $rule =   [
        'sid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'spid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'spid.require' => 'spid不能为空',
'spid.number' => 'spid不是数字',
'spid.float' => 'spid不是小数',
'spid.boolean' => 'spid不是布尔值',
'spid.email' => 'spid不是邮箱地址',
'spid.array' => 'spid不是数组',
'spid.accepted' => 'spid请确认',
'spid.date' => 'spid不是有效日期',
'spid.alpha' => 'spid不是字母',
'spid.alphaNum' => 'spid不是字母和数字',
'spid.alphaDash' => 'spid不是字母和数字和下划线及破折号',
'spid.chs' => 'spid只能是汉字',
'spid.chsAlpha' => 'spid只能是汉字、字母',
'spid.chsAlphaNum' => 'spid只能是汉字、字母和数字',
'spid.chsDash' => 'spid只能是汉字、字母、数字和下划线_及破折号-',
'spid.activeUrl' => 'spid不是有效的域名或者IP',
'spid.url' => 'spid不是有效的URL地址',
'spid.ip' => 'spid不是有效的IP地址',
'spid.length' => 'spid长度不符',
'spid.max' => 'spid超出最大长度',
'spid.min' => 'spid低于最小长度',
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
'newstime.require' => 'newstime不能为空',
'newstime.number' => 'newstime不是数字',
'newstime.float' => 'newstime不是小数',
'newstime.boolean' => 'newstime不是布尔值',
'newstime.email' => 'newstime不是邮箱地址',
'newstime.array' => 'newstime不是数组',
'newstime.accepted' => 'newstime请确认',
'newstime.date' => 'newstime不是有效日期',
'newstime.alpha' => 'newstime不是字母',
'newstime.alphaNum' => 'newstime不是字母和数字',
'newstime.alphaDash' => 'newstime不是字母和数字和下划线及破折号',
'newstime.chs' => 'newstime只能是汉字',
'newstime.chsAlpha' => 'newstime只能是汉字、字母',
'newstime.chsAlphaNum' => 'newstime只能是汉字、字母和数字',
'newstime.chsDash' => 'newstime只能是汉字、字母、数字和下划线_及破折号-',
'newstime.activeUrl' => 'newstime不是有效的域名或者IP',
'newstime.url' => 'newstime不是有效的URL地址',
'newstime.ip' => 'newstime不是有效的IP地址',
'newstime.length' => 'newstime长度不符',
'newstime.max' => 'newstime超出最大长度',
'newstime.min' => 'newstime低于最小长度',
];

protected $scene =   [
    'add'=>['sid','spid','classid','id','newstime',],
    'edit'=>['sid','spid','classid','id','newstime',],
    'ck_id'=>['id']
];

}
