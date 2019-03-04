<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EcmsFlashIndex extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'checked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'truetime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lastdotime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'havehtml' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'truetime.require' => 'truetime不能为空',
'truetime.number' => 'truetime不是数字',
'truetime.float' => 'truetime不是小数',
'truetime.boolean' => 'truetime不是布尔值',
'truetime.email' => 'truetime不是邮箱地址',
'truetime.array' => 'truetime不是数组',
'truetime.accepted' => 'truetime请确认',
'truetime.date' => 'truetime不是有效日期',
'truetime.alpha' => 'truetime不是字母',
'truetime.alphaNum' => 'truetime不是字母和数字',
'truetime.alphaDash' => 'truetime不是字母和数字和下划线及破折号',
'truetime.chs' => 'truetime只能是汉字',
'truetime.chsAlpha' => 'truetime只能是汉字、字母',
'truetime.chsAlphaNum' => 'truetime只能是汉字、字母和数字',
'truetime.chsDash' => 'truetime只能是汉字、字母、数字和下划线_及破折号-',
'truetime.activeUrl' => 'truetime不是有效的域名或者IP',
'truetime.url' => 'truetime不是有效的URL地址',
'truetime.ip' => 'truetime不是有效的IP地址',
'truetime.length' => 'truetime长度不符',
'truetime.max' => 'truetime超出最大长度',
'truetime.min' => 'truetime低于最小长度',
'lastdotime.require' => 'lastdotime不能为空',
'lastdotime.number' => 'lastdotime不是数字',
'lastdotime.float' => 'lastdotime不是小数',
'lastdotime.boolean' => 'lastdotime不是布尔值',
'lastdotime.email' => 'lastdotime不是邮箱地址',
'lastdotime.array' => 'lastdotime不是数组',
'lastdotime.accepted' => 'lastdotime请确认',
'lastdotime.date' => 'lastdotime不是有效日期',
'lastdotime.alpha' => 'lastdotime不是字母',
'lastdotime.alphaNum' => 'lastdotime不是字母和数字',
'lastdotime.alphaDash' => 'lastdotime不是字母和数字和下划线及破折号',
'lastdotime.chs' => 'lastdotime只能是汉字',
'lastdotime.chsAlpha' => 'lastdotime只能是汉字、字母',
'lastdotime.chsAlphaNum' => 'lastdotime只能是汉字、字母和数字',
'lastdotime.chsDash' => 'lastdotime只能是汉字、字母、数字和下划线_及破折号-',
'lastdotime.activeUrl' => 'lastdotime不是有效的域名或者IP',
'lastdotime.url' => 'lastdotime不是有效的URL地址',
'lastdotime.ip' => 'lastdotime不是有效的IP地址',
'lastdotime.length' => 'lastdotime长度不符',
'lastdotime.max' => 'lastdotime超出最大长度',
'lastdotime.min' => 'lastdotime低于最小长度',
'havehtml.require' => 'havehtml不能为空',
'havehtml.number' => 'havehtml不是数字',
'havehtml.float' => 'havehtml不是小数',
'havehtml.boolean' => 'havehtml不是布尔值',
'havehtml.email' => 'havehtml不是邮箱地址',
'havehtml.array' => 'havehtml不是数组',
'havehtml.accepted' => 'havehtml请确认',
'havehtml.date' => 'havehtml不是有效日期',
'havehtml.alpha' => 'havehtml不是字母',
'havehtml.alphaNum' => 'havehtml不是字母和数字',
'havehtml.alphaDash' => 'havehtml不是字母和数字和下划线及破折号',
'havehtml.chs' => 'havehtml只能是汉字',
'havehtml.chsAlpha' => 'havehtml只能是汉字、字母',
'havehtml.chsAlphaNum' => 'havehtml只能是汉字、字母和数字',
'havehtml.chsDash' => 'havehtml只能是汉字、字母、数字和下划线_及破折号-',
'havehtml.activeUrl' => 'havehtml不是有效的域名或者IP',
'havehtml.url' => 'havehtml不是有效的URL地址',
'havehtml.ip' => 'havehtml不是有效的IP地址',
'havehtml.length' => 'havehtml长度不符',
'havehtml.max' => 'havehtml超出最大长度',
'havehtml.min' => 'havehtml低于最小长度',
];

protected $scene =   [
    'add'=>['id','classid','checked','newstime','truetime','lastdotime','havehtml',],
    'edit'=>['id','classid','checked','newstime','truetime','lastdotime','havehtml',],
    'ck_id'=>['id']
];

}
