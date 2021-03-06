<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsdownerror extends Validate{

protected $rule =   [
        'errorid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'errortext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'errortime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'errorip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'email' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'cid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'errorid.require' => 'errorid不能为空',
'errorid.number' => 'errorid不是数字',
'errorid.float' => 'errorid不是小数',
'errorid.boolean' => 'errorid不是布尔值',
'errorid.email' => 'errorid不是邮箱地址',
'errorid.array' => 'errorid不是数组',
'errorid.accepted' => 'errorid请确认',
'errorid.date' => 'errorid不是有效日期',
'errorid.alpha' => 'errorid不是字母',
'errorid.alphaNum' => 'errorid不是字母和数字',
'errorid.alphaDash' => 'errorid不是字母和数字和下划线及破折号',
'errorid.chs' => 'errorid只能是汉字',
'errorid.chsAlpha' => 'errorid只能是汉字、字母',
'errorid.chsAlphaNum' => 'errorid只能是汉字、字母和数字',
'errorid.chsDash' => 'errorid只能是汉字、字母、数字和下划线_及破折号-',
'errorid.activeUrl' => 'errorid不是有效的域名或者IP',
'errorid.url' => 'errorid不是有效的URL地址',
'errorid.ip' => 'errorid不是有效的IP地址',
'errorid.length' => 'errorid长度不符',
'errorid.max' => 'errorid超出最大长度',
'errorid.min' => 'errorid低于最小长度',
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
'errortext.require' => 'errortext不能为空',
'errortext.number' => 'errortext不是数字',
'errortext.float' => 'errortext不是小数',
'errortext.boolean' => 'errortext不是布尔值',
'errortext.email' => 'errortext不是邮箱地址',
'errortext.array' => 'errortext不是数组',
'errortext.accepted' => 'errortext请确认',
'errortext.date' => 'errortext不是有效日期',
'errortext.alpha' => 'errortext不是字母',
'errortext.alphaNum' => 'errortext不是字母和数字',
'errortext.alphaDash' => 'errortext不是字母和数字和下划线及破折号',
'errortext.chs' => 'errortext只能是汉字',
'errortext.chsAlpha' => 'errortext只能是汉字、字母',
'errortext.chsAlphaNum' => 'errortext只能是汉字、字母和数字',
'errortext.chsDash' => 'errortext只能是汉字、字母、数字和下划线_及破折号-',
'errortext.activeUrl' => 'errortext不是有效的域名或者IP',
'errortext.url' => 'errortext不是有效的URL地址',
'errortext.ip' => 'errortext不是有效的IP地址',
'errortext.length' => 'errortext长度不符',
'errortext.max' => 'errortext超出最大长度',
'errortext.min' => 'errortext低于最小长度',
'errortime.require' => 'errortime不能为空',
'errortime.number' => 'errortime不是数字',
'errortime.float' => 'errortime不是小数',
'errortime.boolean' => 'errortime不是布尔值',
'errortime.email' => 'errortime不是邮箱地址',
'errortime.array' => 'errortime不是数组',
'errortime.accepted' => 'errortime请确认',
'errortime.date' => 'errortime不是有效日期',
'errortime.alpha' => 'errortime不是字母',
'errortime.alphaNum' => 'errortime不是字母和数字',
'errortime.alphaDash' => 'errortime不是字母和数字和下划线及破折号',
'errortime.chs' => 'errortime只能是汉字',
'errortime.chsAlpha' => 'errortime只能是汉字、字母',
'errortime.chsAlphaNum' => 'errortime只能是汉字、字母和数字',
'errortime.chsDash' => 'errortime只能是汉字、字母、数字和下划线_及破折号-',
'errortime.activeUrl' => 'errortime不是有效的域名或者IP',
'errortime.url' => 'errortime不是有效的URL地址',
'errortime.ip' => 'errortime不是有效的IP地址',
'errortime.length' => 'errortime长度不符',
'errortime.max' => 'errortime超出最大长度',
'errortime.min' => 'errortime低于最小长度',
'errorip.require' => 'errorip不能为空',
'errorip.number' => 'errorip不是数字',
'errorip.float' => 'errorip不是小数',
'errorip.boolean' => 'errorip不是布尔值',
'errorip.email' => 'errorip不是邮箱地址',
'errorip.array' => 'errorip不是数组',
'errorip.accepted' => 'errorip请确认',
'errorip.date' => 'errorip不是有效日期',
'errorip.alpha' => 'errorip不是字母',
'errorip.alphaNum' => 'errorip不是字母和数字',
'errorip.alphaDash' => 'errorip不是字母和数字和下划线及破折号',
'errorip.chs' => 'errorip只能是汉字',
'errorip.chsAlpha' => 'errorip只能是汉字、字母',
'errorip.chsAlphaNum' => 'errorip只能是汉字、字母和数字',
'errorip.chsDash' => 'errorip只能是汉字、字母、数字和下划线_及破折号-',
'errorip.activeUrl' => 'errorip不是有效的域名或者IP',
'errorip.url' => 'errorip不是有效的URL地址',
'errorip.ip' => 'errorip不是有效的IP地址',
'errorip.length' => 'errorip长度不符',
'errorip.max' => 'errorip超出最大长度',
'errorip.min' => 'errorip低于最小长度',
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
'cid.require' => 'cid不能为空',
'cid.number' => 'cid不是数字',
'cid.float' => 'cid不是小数',
'cid.boolean' => 'cid不是布尔值',
'cid.email' => 'cid不是邮箱地址',
'cid.array' => 'cid不是数组',
'cid.accepted' => 'cid请确认',
'cid.date' => 'cid不是有效日期',
'cid.alpha' => 'cid不是字母',
'cid.alphaNum' => 'cid不是字母和数字',
'cid.alphaDash' => 'cid不是字母和数字和下划线及破折号',
'cid.chs' => 'cid只能是汉字',
'cid.chsAlpha' => 'cid只能是汉字、字母',
'cid.chsAlphaNum' => 'cid只能是汉字、字母和数字',
'cid.chsDash' => 'cid只能是汉字、字母、数字和下划线_及破折号-',
'cid.activeUrl' => 'cid不是有效的域名或者IP',
'cid.url' => 'cid不是有效的URL地址',
'cid.ip' => 'cid不是有效的IP地址',
'cid.length' => 'cid长度不符',
'cid.max' => 'cid超出最大长度',
'cid.min' => 'cid低于最小长度',
];

protected $scene =   [
    'add'=>['errorid','id','errortext','errortime','errorip','email','classid','cid',],
    'edit'=>['errorid','id','errortext','errortime','errorip','email','classid','cid',],
    'ck_id'=>['id']
];

}
