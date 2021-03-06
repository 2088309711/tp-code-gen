<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsbuygroup extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gmoney' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gfen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gdate' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ggroupid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gzgroupid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'buygroupid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gsay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'myorder' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'gname.require' => 'gname不能为空',
'gname.number' => 'gname不是数字',
'gname.float' => 'gname不是小数',
'gname.boolean' => 'gname不是布尔值',
'gname.email' => 'gname不是邮箱地址',
'gname.array' => 'gname不是数组',
'gname.accepted' => 'gname请确认',
'gname.date' => 'gname不是有效日期',
'gname.alpha' => 'gname不是字母',
'gname.alphaNum' => 'gname不是字母和数字',
'gname.alphaDash' => 'gname不是字母和数字和下划线及破折号',
'gname.chs' => 'gname只能是汉字',
'gname.chsAlpha' => 'gname只能是汉字、字母',
'gname.chsAlphaNum' => 'gname只能是汉字、字母和数字',
'gname.chsDash' => 'gname只能是汉字、字母、数字和下划线_及破折号-',
'gname.activeUrl' => 'gname不是有效的域名或者IP',
'gname.url' => 'gname不是有效的URL地址',
'gname.ip' => 'gname不是有效的IP地址',
'gname.length' => 'gname长度不符',
'gname.max' => 'gname超出最大长度',
'gname.min' => 'gname低于最小长度',
'gmoney.require' => 'gmoney不能为空',
'gmoney.number' => 'gmoney不是数字',
'gmoney.float' => 'gmoney不是小数',
'gmoney.boolean' => 'gmoney不是布尔值',
'gmoney.email' => 'gmoney不是邮箱地址',
'gmoney.array' => 'gmoney不是数组',
'gmoney.accepted' => 'gmoney请确认',
'gmoney.date' => 'gmoney不是有效日期',
'gmoney.alpha' => 'gmoney不是字母',
'gmoney.alphaNum' => 'gmoney不是字母和数字',
'gmoney.alphaDash' => 'gmoney不是字母和数字和下划线及破折号',
'gmoney.chs' => 'gmoney只能是汉字',
'gmoney.chsAlpha' => 'gmoney只能是汉字、字母',
'gmoney.chsAlphaNum' => 'gmoney只能是汉字、字母和数字',
'gmoney.chsDash' => 'gmoney只能是汉字、字母、数字和下划线_及破折号-',
'gmoney.activeUrl' => 'gmoney不是有效的域名或者IP',
'gmoney.url' => 'gmoney不是有效的URL地址',
'gmoney.ip' => 'gmoney不是有效的IP地址',
'gmoney.length' => 'gmoney长度不符',
'gmoney.max' => 'gmoney超出最大长度',
'gmoney.min' => 'gmoney低于最小长度',
'gfen.require' => 'gfen不能为空',
'gfen.number' => 'gfen不是数字',
'gfen.float' => 'gfen不是小数',
'gfen.boolean' => 'gfen不是布尔值',
'gfen.email' => 'gfen不是邮箱地址',
'gfen.array' => 'gfen不是数组',
'gfen.accepted' => 'gfen请确认',
'gfen.date' => 'gfen不是有效日期',
'gfen.alpha' => 'gfen不是字母',
'gfen.alphaNum' => 'gfen不是字母和数字',
'gfen.alphaDash' => 'gfen不是字母和数字和下划线及破折号',
'gfen.chs' => 'gfen只能是汉字',
'gfen.chsAlpha' => 'gfen只能是汉字、字母',
'gfen.chsAlphaNum' => 'gfen只能是汉字、字母和数字',
'gfen.chsDash' => 'gfen只能是汉字、字母、数字和下划线_及破折号-',
'gfen.activeUrl' => 'gfen不是有效的域名或者IP',
'gfen.url' => 'gfen不是有效的URL地址',
'gfen.ip' => 'gfen不是有效的IP地址',
'gfen.length' => 'gfen长度不符',
'gfen.max' => 'gfen超出最大长度',
'gfen.min' => 'gfen低于最小长度',
'gdate.require' => 'gdate不能为空',
'gdate.number' => 'gdate不是数字',
'gdate.float' => 'gdate不是小数',
'gdate.boolean' => 'gdate不是布尔值',
'gdate.email' => 'gdate不是邮箱地址',
'gdate.array' => 'gdate不是数组',
'gdate.accepted' => 'gdate请确认',
'gdate.date' => 'gdate不是有效日期',
'gdate.alpha' => 'gdate不是字母',
'gdate.alphaNum' => 'gdate不是字母和数字',
'gdate.alphaDash' => 'gdate不是字母和数字和下划线及破折号',
'gdate.chs' => 'gdate只能是汉字',
'gdate.chsAlpha' => 'gdate只能是汉字、字母',
'gdate.chsAlphaNum' => 'gdate只能是汉字、字母和数字',
'gdate.chsDash' => 'gdate只能是汉字、字母、数字和下划线_及破折号-',
'gdate.activeUrl' => 'gdate不是有效的域名或者IP',
'gdate.url' => 'gdate不是有效的URL地址',
'gdate.ip' => 'gdate不是有效的IP地址',
'gdate.length' => 'gdate长度不符',
'gdate.max' => 'gdate超出最大长度',
'gdate.min' => 'gdate低于最小长度',
'ggroupid.require' => 'ggroupid不能为空',
'ggroupid.number' => 'ggroupid不是数字',
'ggroupid.float' => 'ggroupid不是小数',
'ggroupid.boolean' => 'ggroupid不是布尔值',
'ggroupid.email' => 'ggroupid不是邮箱地址',
'ggroupid.array' => 'ggroupid不是数组',
'ggroupid.accepted' => 'ggroupid请确认',
'ggroupid.date' => 'ggroupid不是有效日期',
'ggroupid.alpha' => 'ggroupid不是字母',
'ggroupid.alphaNum' => 'ggroupid不是字母和数字',
'ggroupid.alphaDash' => 'ggroupid不是字母和数字和下划线及破折号',
'ggroupid.chs' => 'ggroupid只能是汉字',
'ggroupid.chsAlpha' => 'ggroupid只能是汉字、字母',
'ggroupid.chsAlphaNum' => 'ggroupid只能是汉字、字母和数字',
'ggroupid.chsDash' => 'ggroupid只能是汉字、字母、数字和下划线_及破折号-',
'ggroupid.activeUrl' => 'ggroupid不是有效的域名或者IP',
'ggroupid.url' => 'ggroupid不是有效的URL地址',
'ggroupid.ip' => 'ggroupid不是有效的IP地址',
'ggroupid.length' => 'ggroupid长度不符',
'ggroupid.max' => 'ggroupid超出最大长度',
'ggroupid.min' => 'ggroupid低于最小长度',
'gzgroupid.require' => 'gzgroupid不能为空',
'gzgroupid.number' => 'gzgroupid不是数字',
'gzgroupid.float' => 'gzgroupid不是小数',
'gzgroupid.boolean' => 'gzgroupid不是布尔值',
'gzgroupid.email' => 'gzgroupid不是邮箱地址',
'gzgroupid.array' => 'gzgroupid不是数组',
'gzgroupid.accepted' => 'gzgroupid请确认',
'gzgroupid.date' => 'gzgroupid不是有效日期',
'gzgroupid.alpha' => 'gzgroupid不是字母',
'gzgroupid.alphaNum' => 'gzgroupid不是字母和数字',
'gzgroupid.alphaDash' => 'gzgroupid不是字母和数字和下划线及破折号',
'gzgroupid.chs' => 'gzgroupid只能是汉字',
'gzgroupid.chsAlpha' => 'gzgroupid只能是汉字、字母',
'gzgroupid.chsAlphaNum' => 'gzgroupid只能是汉字、字母和数字',
'gzgroupid.chsDash' => 'gzgroupid只能是汉字、字母、数字和下划线_及破折号-',
'gzgroupid.activeUrl' => 'gzgroupid不是有效的域名或者IP',
'gzgroupid.url' => 'gzgroupid不是有效的URL地址',
'gzgroupid.ip' => 'gzgroupid不是有效的IP地址',
'gzgroupid.length' => 'gzgroupid长度不符',
'gzgroupid.max' => 'gzgroupid超出最大长度',
'gzgroupid.min' => 'gzgroupid低于最小长度',
'buygroupid.require' => 'buygroupid不能为空',
'buygroupid.number' => 'buygroupid不是数字',
'buygroupid.float' => 'buygroupid不是小数',
'buygroupid.boolean' => 'buygroupid不是布尔值',
'buygroupid.email' => 'buygroupid不是邮箱地址',
'buygroupid.array' => 'buygroupid不是数组',
'buygroupid.accepted' => 'buygroupid请确认',
'buygroupid.date' => 'buygroupid不是有效日期',
'buygroupid.alpha' => 'buygroupid不是字母',
'buygroupid.alphaNum' => 'buygroupid不是字母和数字',
'buygroupid.alphaDash' => 'buygroupid不是字母和数字和下划线及破折号',
'buygroupid.chs' => 'buygroupid只能是汉字',
'buygroupid.chsAlpha' => 'buygroupid只能是汉字、字母',
'buygroupid.chsAlphaNum' => 'buygroupid只能是汉字、字母和数字',
'buygroupid.chsDash' => 'buygroupid只能是汉字、字母、数字和下划线_及破折号-',
'buygroupid.activeUrl' => 'buygroupid不是有效的域名或者IP',
'buygroupid.url' => 'buygroupid不是有效的URL地址',
'buygroupid.ip' => 'buygroupid不是有效的IP地址',
'buygroupid.length' => 'buygroupid长度不符',
'buygroupid.max' => 'buygroupid超出最大长度',
'buygroupid.min' => 'buygroupid低于最小长度',
'gsay.require' => 'gsay不能为空',
'gsay.number' => 'gsay不是数字',
'gsay.float' => 'gsay不是小数',
'gsay.boolean' => 'gsay不是布尔值',
'gsay.email' => 'gsay不是邮箱地址',
'gsay.array' => 'gsay不是数组',
'gsay.accepted' => 'gsay请确认',
'gsay.date' => 'gsay不是有效日期',
'gsay.alpha' => 'gsay不是字母',
'gsay.alphaNum' => 'gsay不是字母和数字',
'gsay.alphaDash' => 'gsay不是字母和数字和下划线及破折号',
'gsay.chs' => 'gsay只能是汉字',
'gsay.chsAlpha' => 'gsay只能是汉字、字母',
'gsay.chsAlphaNum' => 'gsay只能是汉字、字母和数字',
'gsay.chsDash' => 'gsay只能是汉字、字母、数字和下划线_及破折号-',
'gsay.activeUrl' => 'gsay不是有效的域名或者IP',
'gsay.url' => 'gsay不是有效的URL地址',
'gsay.ip' => 'gsay不是有效的IP地址',
'gsay.length' => 'gsay长度不符',
'gsay.max' => 'gsay超出最大长度',
'gsay.min' => 'gsay低于最小长度',
'myorder.require' => 'myorder不能为空',
'myorder.number' => 'myorder不是数字',
'myorder.float' => 'myorder不是小数',
'myorder.boolean' => 'myorder不是布尔值',
'myorder.email' => 'myorder不是邮箱地址',
'myorder.array' => 'myorder不是数组',
'myorder.accepted' => 'myorder请确认',
'myorder.date' => 'myorder不是有效日期',
'myorder.alpha' => 'myorder不是字母',
'myorder.alphaNum' => 'myorder不是字母和数字',
'myorder.alphaDash' => 'myorder不是字母和数字和下划线及破折号',
'myorder.chs' => 'myorder只能是汉字',
'myorder.chsAlpha' => 'myorder只能是汉字、字母',
'myorder.chsAlphaNum' => 'myorder只能是汉字、字母和数字',
'myorder.chsDash' => 'myorder只能是汉字、字母、数字和下划线_及破折号-',
'myorder.activeUrl' => 'myorder不是有效的域名或者IP',
'myorder.url' => 'myorder不是有效的URL地址',
'myorder.ip' => 'myorder不是有效的IP地址',
'myorder.length' => 'myorder长度不符',
'myorder.max' => 'myorder超出最大长度',
'myorder.min' => 'myorder低于最小长度',
];

protected $scene =   [
    'add'=>['id','gname','gmoney','gfen','gdate','ggroupid','gzgroupid','buygroupid','gsay','myorder',],
    'edit'=>['id','gname','gmoney','gfen','gdate','ggroupid','gzgroupid','buygroupid','gsay','myorder',],
    'ck_id'=>['id']
];

}
