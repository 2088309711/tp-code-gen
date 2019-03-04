<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EcmsInfotmpArticle extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'oldurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'checked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tmptime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'username' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'truetime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'keyboard' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titlepic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ftitle' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'smalltext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'writer' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'befrom' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'diggtop' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'oldurl.require' => 'oldurl不能为空',
'oldurl.number' => 'oldurl不是数字',
'oldurl.float' => 'oldurl不是小数',
'oldurl.boolean' => 'oldurl不是布尔值',
'oldurl.email' => 'oldurl不是邮箱地址',
'oldurl.array' => 'oldurl不是数组',
'oldurl.accepted' => 'oldurl请确认',
'oldurl.date' => 'oldurl不是有效日期',
'oldurl.alpha' => 'oldurl不是字母',
'oldurl.alphaNum' => 'oldurl不是字母和数字',
'oldurl.alphaDash' => 'oldurl不是字母和数字和下划线及破折号',
'oldurl.chs' => 'oldurl只能是汉字',
'oldurl.chsAlpha' => 'oldurl只能是汉字、字母',
'oldurl.chsAlphaNum' => 'oldurl只能是汉字、字母和数字',
'oldurl.chsDash' => 'oldurl只能是汉字、字母、数字和下划线_及破折号-',
'oldurl.activeUrl' => 'oldurl不是有效的域名或者IP',
'oldurl.url' => 'oldurl不是有效的URL地址',
'oldurl.ip' => 'oldurl不是有效的IP地址',
'oldurl.length' => 'oldurl长度不符',
'oldurl.max' => 'oldurl超出最大长度',
'oldurl.min' => 'oldurl低于最小长度',
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
'tmptime.require' => 'tmptime不能为空',
'tmptime.number' => 'tmptime不是数字',
'tmptime.float' => 'tmptime不是小数',
'tmptime.boolean' => 'tmptime不是布尔值',
'tmptime.email' => 'tmptime不是邮箱地址',
'tmptime.array' => 'tmptime不是数组',
'tmptime.accepted' => 'tmptime请确认',
'tmptime.date' => 'tmptime不是有效日期',
'tmptime.alpha' => 'tmptime不是字母',
'tmptime.alphaNum' => 'tmptime不是字母和数字',
'tmptime.alphaDash' => 'tmptime不是字母和数字和下划线及破折号',
'tmptime.chs' => 'tmptime只能是汉字',
'tmptime.chsAlpha' => 'tmptime只能是汉字、字母',
'tmptime.chsAlphaNum' => 'tmptime只能是汉字、字母和数字',
'tmptime.chsDash' => 'tmptime只能是汉字、字母、数字和下划线_及破折号-',
'tmptime.activeUrl' => 'tmptime不是有效的域名或者IP',
'tmptime.url' => 'tmptime不是有效的URL地址',
'tmptime.ip' => 'tmptime不是有效的IP地址',
'tmptime.length' => 'tmptime长度不符',
'tmptime.max' => 'tmptime超出最大长度',
'tmptime.min' => 'tmptime低于最小长度',
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
'keyboard.require' => 'keyboard不能为空',
'keyboard.number' => 'keyboard不是数字',
'keyboard.float' => 'keyboard不是小数',
'keyboard.boolean' => 'keyboard不是布尔值',
'keyboard.email' => 'keyboard不是邮箱地址',
'keyboard.array' => 'keyboard不是数组',
'keyboard.accepted' => 'keyboard请确认',
'keyboard.date' => 'keyboard不是有效日期',
'keyboard.alpha' => 'keyboard不是字母',
'keyboard.alphaNum' => 'keyboard不是字母和数字',
'keyboard.alphaDash' => 'keyboard不是字母和数字和下划线及破折号',
'keyboard.chs' => 'keyboard只能是汉字',
'keyboard.chsAlpha' => 'keyboard只能是汉字、字母',
'keyboard.chsAlphaNum' => 'keyboard只能是汉字、字母和数字',
'keyboard.chsDash' => 'keyboard只能是汉字、字母、数字和下划线_及破折号-',
'keyboard.activeUrl' => 'keyboard不是有效的域名或者IP',
'keyboard.url' => 'keyboard不是有效的URL地址',
'keyboard.ip' => 'keyboard不是有效的IP地址',
'keyboard.length' => 'keyboard长度不符',
'keyboard.max' => 'keyboard超出最大长度',
'keyboard.min' => 'keyboard低于最小长度',
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
'titlepic.require' => 'titlepic不能为空',
'titlepic.number' => 'titlepic不是数字',
'titlepic.float' => 'titlepic不是小数',
'titlepic.boolean' => 'titlepic不是布尔值',
'titlepic.email' => 'titlepic不是邮箱地址',
'titlepic.array' => 'titlepic不是数组',
'titlepic.accepted' => 'titlepic请确认',
'titlepic.date' => 'titlepic不是有效日期',
'titlepic.alpha' => 'titlepic不是字母',
'titlepic.alphaNum' => 'titlepic不是字母和数字',
'titlepic.alphaDash' => 'titlepic不是字母和数字和下划线及破折号',
'titlepic.chs' => 'titlepic只能是汉字',
'titlepic.chsAlpha' => 'titlepic只能是汉字、字母',
'titlepic.chsAlphaNum' => 'titlepic只能是汉字、字母和数字',
'titlepic.chsDash' => 'titlepic只能是汉字、字母、数字和下划线_及破折号-',
'titlepic.activeUrl' => 'titlepic不是有效的域名或者IP',
'titlepic.url' => 'titlepic不是有效的URL地址',
'titlepic.ip' => 'titlepic不是有效的IP地址',
'titlepic.length' => 'titlepic长度不符',
'titlepic.max' => 'titlepic超出最大长度',
'titlepic.min' => 'titlepic低于最小长度',
'ftitle.require' => 'ftitle不能为空',
'ftitle.number' => 'ftitle不是数字',
'ftitle.float' => 'ftitle不是小数',
'ftitle.boolean' => 'ftitle不是布尔值',
'ftitle.email' => 'ftitle不是邮箱地址',
'ftitle.array' => 'ftitle不是数组',
'ftitle.accepted' => 'ftitle请确认',
'ftitle.date' => 'ftitle不是有效日期',
'ftitle.alpha' => 'ftitle不是字母',
'ftitle.alphaNum' => 'ftitle不是字母和数字',
'ftitle.alphaDash' => 'ftitle不是字母和数字和下划线及破折号',
'ftitle.chs' => 'ftitle只能是汉字',
'ftitle.chsAlpha' => 'ftitle只能是汉字、字母',
'ftitle.chsAlphaNum' => 'ftitle只能是汉字、字母和数字',
'ftitle.chsDash' => 'ftitle只能是汉字、字母、数字和下划线_及破折号-',
'ftitle.activeUrl' => 'ftitle不是有效的域名或者IP',
'ftitle.url' => 'ftitle不是有效的URL地址',
'ftitle.ip' => 'ftitle不是有效的IP地址',
'ftitle.length' => 'ftitle长度不符',
'ftitle.max' => 'ftitle超出最大长度',
'ftitle.min' => 'ftitle低于最小长度',
'smalltext.require' => 'smalltext不能为空',
'smalltext.number' => 'smalltext不是数字',
'smalltext.float' => 'smalltext不是小数',
'smalltext.boolean' => 'smalltext不是布尔值',
'smalltext.email' => 'smalltext不是邮箱地址',
'smalltext.array' => 'smalltext不是数组',
'smalltext.accepted' => 'smalltext请确认',
'smalltext.date' => 'smalltext不是有效日期',
'smalltext.alpha' => 'smalltext不是字母',
'smalltext.alphaNum' => 'smalltext不是字母和数字',
'smalltext.alphaDash' => 'smalltext不是字母和数字和下划线及破折号',
'smalltext.chs' => 'smalltext只能是汉字',
'smalltext.chsAlpha' => 'smalltext只能是汉字、字母',
'smalltext.chsAlphaNum' => 'smalltext只能是汉字、字母和数字',
'smalltext.chsDash' => 'smalltext只能是汉字、字母、数字和下划线_及破折号-',
'smalltext.activeUrl' => 'smalltext不是有效的域名或者IP',
'smalltext.url' => 'smalltext不是有效的URL地址',
'smalltext.ip' => 'smalltext不是有效的IP地址',
'smalltext.length' => 'smalltext长度不符',
'smalltext.max' => 'smalltext超出最大长度',
'smalltext.min' => 'smalltext低于最小长度',
'writer.require' => 'writer不能为空',
'writer.number' => 'writer不是数字',
'writer.float' => 'writer不是小数',
'writer.boolean' => 'writer不是布尔值',
'writer.email' => 'writer不是邮箱地址',
'writer.array' => 'writer不是数组',
'writer.accepted' => 'writer请确认',
'writer.date' => 'writer不是有效日期',
'writer.alpha' => 'writer不是字母',
'writer.alphaNum' => 'writer不是字母和数字',
'writer.alphaDash' => 'writer不是字母和数字和下划线及破折号',
'writer.chs' => 'writer只能是汉字',
'writer.chsAlpha' => 'writer只能是汉字、字母',
'writer.chsAlphaNum' => 'writer只能是汉字、字母和数字',
'writer.chsDash' => 'writer只能是汉字、字母、数字和下划线_及破折号-',
'writer.activeUrl' => 'writer不是有效的域名或者IP',
'writer.url' => 'writer不是有效的URL地址',
'writer.ip' => 'writer不是有效的IP地址',
'writer.length' => 'writer长度不符',
'writer.max' => 'writer超出最大长度',
'writer.min' => 'writer低于最小长度',
'befrom.require' => 'befrom不能为空',
'befrom.number' => 'befrom不是数字',
'befrom.float' => 'befrom不是小数',
'befrom.boolean' => 'befrom不是布尔值',
'befrom.email' => 'befrom不是邮箱地址',
'befrom.array' => 'befrom不是数组',
'befrom.accepted' => 'befrom请确认',
'befrom.date' => 'befrom不是有效日期',
'befrom.alpha' => 'befrom不是字母',
'befrom.alphaNum' => 'befrom不是字母和数字',
'befrom.alphaDash' => 'befrom不是字母和数字和下划线及破折号',
'befrom.chs' => 'befrom只能是汉字',
'befrom.chsAlpha' => 'befrom只能是汉字、字母',
'befrom.chsAlphaNum' => 'befrom只能是汉字、字母和数字',
'befrom.chsDash' => 'befrom只能是汉字、字母、数字和下划线_及破折号-',
'befrom.activeUrl' => 'befrom不是有效的域名或者IP',
'befrom.url' => 'befrom不是有效的URL地址',
'befrom.ip' => 'befrom不是有效的IP地址',
'befrom.length' => 'befrom长度不符',
'befrom.max' => 'befrom超出最大长度',
'befrom.min' => 'befrom低于最小长度',
'newstext.require' => 'newstext不能为空',
'newstext.number' => 'newstext不是数字',
'newstext.float' => 'newstext不是小数',
'newstext.boolean' => 'newstext不是布尔值',
'newstext.email' => 'newstext不是邮箱地址',
'newstext.array' => 'newstext不是数组',
'newstext.accepted' => 'newstext请确认',
'newstext.date' => 'newstext不是有效日期',
'newstext.alpha' => 'newstext不是字母',
'newstext.alphaNum' => 'newstext不是字母和数字',
'newstext.alphaDash' => 'newstext不是字母和数字和下划线及破折号',
'newstext.chs' => 'newstext只能是汉字',
'newstext.chsAlpha' => 'newstext只能是汉字、字母',
'newstext.chsAlphaNum' => 'newstext只能是汉字、字母和数字',
'newstext.chsDash' => 'newstext只能是汉字、字母、数字和下划线_及破折号-',
'newstext.activeUrl' => 'newstext不是有效的域名或者IP',
'newstext.url' => 'newstext不是有效的URL地址',
'newstext.ip' => 'newstext不是有效的IP地址',
'newstext.length' => 'newstext长度不符',
'newstext.max' => 'newstext超出最大长度',
'newstext.min' => 'newstext低于最小长度',
'diggtop.require' => 'diggtop不能为空',
'diggtop.number' => 'diggtop不是数字',
'diggtop.float' => 'diggtop不是小数',
'diggtop.boolean' => 'diggtop不是布尔值',
'diggtop.email' => 'diggtop不是邮箱地址',
'diggtop.array' => 'diggtop不是数组',
'diggtop.accepted' => 'diggtop请确认',
'diggtop.date' => 'diggtop不是有效日期',
'diggtop.alpha' => 'diggtop不是字母',
'diggtop.alphaNum' => 'diggtop不是字母和数字',
'diggtop.alphaDash' => 'diggtop不是字母和数字和下划线及破折号',
'diggtop.chs' => 'diggtop只能是汉字',
'diggtop.chsAlpha' => 'diggtop只能是汉字、字母',
'diggtop.chsAlphaNum' => 'diggtop只能是汉字、字母和数字',
'diggtop.chsDash' => 'diggtop只能是汉字、字母、数字和下划线_及破折号-',
'diggtop.activeUrl' => 'diggtop不是有效的域名或者IP',
'diggtop.url' => 'diggtop不是有效的URL地址',
'diggtop.ip' => 'diggtop不是有效的IP地址',
'diggtop.length' => 'diggtop长度不符',
'diggtop.max' => 'diggtop超出最大长度',
'diggtop.min' => 'diggtop低于最小长度',
];

protected $scene =   [
    'add'=>['id','classid','oldurl','checked','tmptime','userid','username','truetime','keyboard','title','newstime','titlepic','ftitle','smalltext','writer','befrom','newstext','diggtop',],
    'edit'=>['id','classid','oldurl','checked','tmptime','userid','username','truetime','keyboard','title','newstime','titlepic','ftitle','smalltext','writer','befrom','newstext','diggtop',],
    'ck_id'=>['id']
];

}
