<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewstempdt extends Validate{

protected $rule =   [
        'tempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempvar' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempsay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempfile' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'myorder' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'temptype' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'tempid.require' => 'tempid不能为空',
'tempid.number' => 'tempid不是数字',
'tempid.float' => 'tempid不是小数',
'tempid.boolean' => 'tempid不是布尔值',
'tempid.email' => 'tempid不是邮箱地址',
'tempid.array' => 'tempid不是数组',
'tempid.accepted' => 'tempid请确认',
'tempid.date' => 'tempid不是有效日期',
'tempid.alpha' => 'tempid不是字母',
'tempid.alphaNum' => 'tempid不是字母和数字',
'tempid.alphaDash' => 'tempid不是字母和数字和下划线及破折号',
'tempid.chs' => 'tempid只能是汉字',
'tempid.chsAlpha' => 'tempid只能是汉字、字母',
'tempid.chsAlphaNum' => 'tempid只能是汉字、字母和数字',
'tempid.chsDash' => 'tempid只能是汉字、字母、数字和下划线_及破折号-',
'tempid.activeUrl' => 'tempid不是有效的域名或者IP',
'tempid.url' => 'tempid不是有效的URL地址',
'tempid.ip' => 'tempid不是有效的IP地址',
'tempid.length' => 'tempid长度不符',
'tempid.max' => 'tempid超出最大长度',
'tempid.min' => 'tempid低于最小长度',
'tempvar.require' => 'tempvar不能为空',
'tempvar.number' => 'tempvar不是数字',
'tempvar.float' => 'tempvar不是小数',
'tempvar.boolean' => 'tempvar不是布尔值',
'tempvar.email' => 'tempvar不是邮箱地址',
'tempvar.array' => 'tempvar不是数组',
'tempvar.accepted' => 'tempvar请确认',
'tempvar.date' => 'tempvar不是有效日期',
'tempvar.alpha' => 'tempvar不是字母',
'tempvar.alphaNum' => 'tempvar不是字母和数字',
'tempvar.alphaDash' => 'tempvar不是字母和数字和下划线及破折号',
'tempvar.chs' => 'tempvar只能是汉字',
'tempvar.chsAlpha' => 'tempvar只能是汉字、字母',
'tempvar.chsAlphaNum' => 'tempvar只能是汉字、字母和数字',
'tempvar.chsDash' => 'tempvar只能是汉字、字母、数字和下划线_及破折号-',
'tempvar.activeUrl' => 'tempvar不是有效的域名或者IP',
'tempvar.url' => 'tempvar不是有效的URL地址',
'tempvar.ip' => 'tempvar不是有效的IP地址',
'tempvar.length' => 'tempvar长度不符',
'tempvar.max' => 'tempvar超出最大长度',
'tempvar.min' => 'tempvar低于最小长度',
'tempname.require' => 'tempname不能为空',
'tempname.number' => 'tempname不是数字',
'tempname.float' => 'tempname不是小数',
'tempname.boolean' => 'tempname不是布尔值',
'tempname.email' => 'tempname不是邮箱地址',
'tempname.array' => 'tempname不是数组',
'tempname.accepted' => 'tempname请确认',
'tempname.date' => 'tempname不是有效日期',
'tempname.alpha' => 'tempname不是字母',
'tempname.alphaNum' => 'tempname不是字母和数字',
'tempname.alphaDash' => 'tempname不是字母和数字和下划线及破折号',
'tempname.chs' => 'tempname只能是汉字',
'tempname.chsAlpha' => 'tempname只能是汉字、字母',
'tempname.chsAlphaNum' => 'tempname只能是汉字、字母和数字',
'tempname.chsDash' => 'tempname只能是汉字、字母、数字和下划线_及破折号-',
'tempname.activeUrl' => 'tempname不是有效的域名或者IP',
'tempname.url' => 'tempname不是有效的URL地址',
'tempname.ip' => 'tempname不是有效的IP地址',
'tempname.length' => 'tempname长度不符',
'tempname.max' => 'tempname超出最大长度',
'tempname.min' => 'tempname低于最小长度',
'tempsay.require' => 'tempsay不能为空',
'tempsay.number' => 'tempsay不是数字',
'tempsay.float' => 'tempsay不是小数',
'tempsay.boolean' => 'tempsay不是布尔值',
'tempsay.email' => 'tempsay不是邮箱地址',
'tempsay.array' => 'tempsay不是数组',
'tempsay.accepted' => 'tempsay请确认',
'tempsay.date' => 'tempsay不是有效日期',
'tempsay.alpha' => 'tempsay不是字母',
'tempsay.alphaNum' => 'tempsay不是字母和数字',
'tempsay.alphaDash' => 'tempsay不是字母和数字和下划线及破折号',
'tempsay.chs' => 'tempsay只能是汉字',
'tempsay.chsAlpha' => 'tempsay只能是汉字、字母',
'tempsay.chsAlphaNum' => 'tempsay只能是汉字、字母和数字',
'tempsay.chsDash' => 'tempsay只能是汉字、字母、数字和下划线_及破折号-',
'tempsay.activeUrl' => 'tempsay不是有效的域名或者IP',
'tempsay.url' => 'tempsay不是有效的URL地址',
'tempsay.ip' => 'tempsay不是有效的IP地址',
'tempsay.length' => 'tempsay长度不符',
'tempsay.max' => 'tempsay超出最大长度',
'tempsay.min' => 'tempsay低于最小长度',
'tempfile.require' => 'tempfile不能为空',
'tempfile.number' => 'tempfile不是数字',
'tempfile.float' => 'tempfile不是小数',
'tempfile.boolean' => 'tempfile不是布尔值',
'tempfile.email' => 'tempfile不是邮箱地址',
'tempfile.array' => 'tempfile不是数组',
'tempfile.accepted' => 'tempfile请确认',
'tempfile.date' => 'tempfile不是有效日期',
'tempfile.alpha' => 'tempfile不是字母',
'tempfile.alphaNum' => 'tempfile不是字母和数字',
'tempfile.alphaDash' => 'tempfile不是字母和数字和下划线及破折号',
'tempfile.chs' => 'tempfile只能是汉字',
'tempfile.chsAlpha' => 'tempfile只能是汉字、字母',
'tempfile.chsAlphaNum' => 'tempfile只能是汉字、字母和数字',
'tempfile.chsDash' => 'tempfile只能是汉字、字母、数字和下划线_及破折号-',
'tempfile.activeUrl' => 'tempfile不是有效的域名或者IP',
'tempfile.url' => 'tempfile不是有效的URL地址',
'tempfile.ip' => 'tempfile不是有效的IP地址',
'tempfile.length' => 'tempfile长度不符',
'tempfile.max' => 'tempfile超出最大长度',
'tempfile.min' => 'tempfile低于最小长度',
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
'temptype.require' => 'temptype不能为空',
'temptype.number' => 'temptype不是数字',
'temptype.float' => 'temptype不是小数',
'temptype.boolean' => 'temptype不是布尔值',
'temptype.email' => 'temptype不是邮箱地址',
'temptype.array' => 'temptype不是数组',
'temptype.accepted' => 'temptype请确认',
'temptype.date' => 'temptype不是有效日期',
'temptype.alpha' => 'temptype不是字母',
'temptype.alphaNum' => 'temptype不是字母和数字',
'temptype.alphaDash' => 'temptype不是字母和数字和下划线及破折号',
'temptype.chs' => 'temptype只能是汉字',
'temptype.chsAlpha' => 'temptype只能是汉字、字母',
'temptype.chsAlphaNum' => 'temptype只能是汉字、字母和数字',
'temptype.chsDash' => 'temptype只能是汉字、字母、数字和下划线_及破折号-',
'temptype.activeUrl' => 'temptype不是有效的域名或者IP',
'temptype.url' => 'temptype不是有效的URL地址',
'temptype.ip' => 'temptype不是有效的IP地址',
'temptype.length' => 'temptype长度不符',
'temptype.max' => 'temptype超出最大长度',
'temptype.min' => 'temptype低于最小长度',
];

protected $scene =   [
    'add'=>['tempid','tempvar','tempname','tempsay','tempfile','myorder','temptype',],
    'edit'=>['tempid','tempvar','tempname','tempsay','tempfile','myorder','temptype',],
    'ck_id'=>['id']
];

}
