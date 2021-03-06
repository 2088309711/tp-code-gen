<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EcmsInfotmpShop extends Validate{

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
        'productno' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pbrand' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'intro' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'unit' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'weight' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tprice' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'price' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'buyfen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pmaxnum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'productpic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'psalenum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'productno.require' => 'productno不能为空',
'productno.number' => 'productno不是数字',
'productno.float' => 'productno不是小数',
'productno.boolean' => 'productno不是布尔值',
'productno.email' => 'productno不是邮箱地址',
'productno.array' => 'productno不是数组',
'productno.accepted' => 'productno请确认',
'productno.date' => 'productno不是有效日期',
'productno.alpha' => 'productno不是字母',
'productno.alphaNum' => 'productno不是字母和数字',
'productno.alphaDash' => 'productno不是字母和数字和下划线及破折号',
'productno.chs' => 'productno只能是汉字',
'productno.chsAlpha' => 'productno只能是汉字、字母',
'productno.chsAlphaNum' => 'productno只能是汉字、字母和数字',
'productno.chsDash' => 'productno只能是汉字、字母、数字和下划线_及破折号-',
'productno.activeUrl' => 'productno不是有效的域名或者IP',
'productno.url' => 'productno不是有效的URL地址',
'productno.ip' => 'productno不是有效的IP地址',
'productno.length' => 'productno长度不符',
'productno.max' => 'productno超出最大长度',
'productno.min' => 'productno低于最小长度',
'pbrand.require' => 'pbrand不能为空',
'pbrand.number' => 'pbrand不是数字',
'pbrand.float' => 'pbrand不是小数',
'pbrand.boolean' => 'pbrand不是布尔值',
'pbrand.email' => 'pbrand不是邮箱地址',
'pbrand.array' => 'pbrand不是数组',
'pbrand.accepted' => 'pbrand请确认',
'pbrand.date' => 'pbrand不是有效日期',
'pbrand.alpha' => 'pbrand不是字母',
'pbrand.alphaNum' => 'pbrand不是字母和数字',
'pbrand.alphaDash' => 'pbrand不是字母和数字和下划线及破折号',
'pbrand.chs' => 'pbrand只能是汉字',
'pbrand.chsAlpha' => 'pbrand只能是汉字、字母',
'pbrand.chsAlphaNum' => 'pbrand只能是汉字、字母和数字',
'pbrand.chsDash' => 'pbrand只能是汉字、字母、数字和下划线_及破折号-',
'pbrand.activeUrl' => 'pbrand不是有效的域名或者IP',
'pbrand.url' => 'pbrand不是有效的URL地址',
'pbrand.ip' => 'pbrand不是有效的IP地址',
'pbrand.length' => 'pbrand长度不符',
'pbrand.max' => 'pbrand超出最大长度',
'pbrand.min' => 'pbrand低于最小长度',
'intro.require' => 'intro不能为空',
'intro.number' => 'intro不是数字',
'intro.float' => 'intro不是小数',
'intro.boolean' => 'intro不是布尔值',
'intro.email' => 'intro不是邮箱地址',
'intro.array' => 'intro不是数组',
'intro.accepted' => 'intro请确认',
'intro.date' => 'intro不是有效日期',
'intro.alpha' => 'intro不是字母',
'intro.alphaNum' => 'intro不是字母和数字',
'intro.alphaDash' => 'intro不是字母和数字和下划线及破折号',
'intro.chs' => 'intro只能是汉字',
'intro.chsAlpha' => 'intro只能是汉字、字母',
'intro.chsAlphaNum' => 'intro只能是汉字、字母和数字',
'intro.chsDash' => 'intro只能是汉字、字母、数字和下划线_及破折号-',
'intro.activeUrl' => 'intro不是有效的域名或者IP',
'intro.url' => 'intro不是有效的URL地址',
'intro.ip' => 'intro不是有效的IP地址',
'intro.length' => 'intro长度不符',
'intro.max' => 'intro超出最大长度',
'intro.min' => 'intro低于最小长度',
'unit.require' => 'unit不能为空',
'unit.number' => 'unit不是数字',
'unit.float' => 'unit不是小数',
'unit.boolean' => 'unit不是布尔值',
'unit.email' => 'unit不是邮箱地址',
'unit.array' => 'unit不是数组',
'unit.accepted' => 'unit请确认',
'unit.date' => 'unit不是有效日期',
'unit.alpha' => 'unit不是字母',
'unit.alphaNum' => 'unit不是字母和数字',
'unit.alphaDash' => 'unit不是字母和数字和下划线及破折号',
'unit.chs' => 'unit只能是汉字',
'unit.chsAlpha' => 'unit只能是汉字、字母',
'unit.chsAlphaNum' => 'unit只能是汉字、字母和数字',
'unit.chsDash' => 'unit只能是汉字、字母、数字和下划线_及破折号-',
'unit.activeUrl' => 'unit不是有效的域名或者IP',
'unit.url' => 'unit不是有效的URL地址',
'unit.ip' => 'unit不是有效的IP地址',
'unit.length' => 'unit长度不符',
'unit.max' => 'unit超出最大长度',
'unit.min' => 'unit低于最小长度',
'weight.require' => 'weight不能为空',
'weight.number' => 'weight不是数字',
'weight.float' => 'weight不是小数',
'weight.boolean' => 'weight不是布尔值',
'weight.email' => 'weight不是邮箱地址',
'weight.array' => 'weight不是数组',
'weight.accepted' => 'weight请确认',
'weight.date' => 'weight不是有效日期',
'weight.alpha' => 'weight不是字母',
'weight.alphaNum' => 'weight不是字母和数字',
'weight.alphaDash' => 'weight不是字母和数字和下划线及破折号',
'weight.chs' => 'weight只能是汉字',
'weight.chsAlpha' => 'weight只能是汉字、字母',
'weight.chsAlphaNum' => 'weight只能是汉字、字母和数字',
'weight.chsDash' => 'weight只能是汉字、字母、数字和下划线_及破折号-',
'weight.activeUrl' => 'weight不是有效的域名或者IP',
'weight.url' => 'weight不是有效的URL地址',
'weight.ip' => 'weight不是有效的IP地址',
'weight.length' => 'weight长度不符',
'weight.max' => 'weight超出最大长度',
'weight.min' => 'weight低于最小长度',
'tprice.require' => 'tprice不能为空',
'tprice.number' => 'tprice不是数字',
'tprice.float' => 'tprice不是小数',
'tprice.boolean' => 'tprice不是布尔值',
'tprice.email' => 'tprice不是邮箱地址',
'tprice.array' => 'tprice不是数组',
'tprice.accepted' => 'tprice请确认',
'tprice.date' => 'tprice不是有效日期',
'tprice.alpha' => 'tprice不是字母',
'tprice.alphaNum' => 'tprice不是字母和数字',
'tprice.alphaDash' => 'tprice不是字母和数字和下划线及破折号',
'tprice.chs' => 'tprice只能是汉字',
'tprice.chsAlpha' => 'tprice只能是汉字、字母',
'tprice.chsAlphaNum' => 'tprice只能是汉字、字母和数字',
'tprice.chsDash' => 'tprice只能是汉字、字母、数字和下划线_及破折号-',
'tprice.activeUrl' => 'tprice不是有效的域名或者IP',
'tprice.url' => 'tprice不是有效的URL地址',
'tprice.ip' => 'tprice不是有效的IP地址',
'tprice.length' => 'tprice长度不符',
'tprice.max' => 'tprice超出最大长度',
'tprice.min' => 'tprice低于最小长度',
'price.require' => 'price不能为空',
'price.number' => 'price不是数字',
'price.float' => 'price不是小数',
'price.boolean' => 'price不是布尔值',
'price.email' => 'price不是邮箱地址',
'price.array' => 'price不是数组',
'price.accepted' => 'price请确认',
'price.date' => 'price不是有效日期',
'price.alpha' => 'price不是字母',
'price.alphaNum' => 'price不是字母和数字',
'price.alphaDash' => 'price不是字母和数字和下划线及破折号',
'price.chs' => 'price只能是汉字',
'price.chsAlpha' => 'price只能是汉字、字母',
'price.chsAlphaNum' => 'price只能是汉字、字母和数字',
'price.chsDash' => 'price只能是汉字、字母、数字和下划线_及破折号-',
'price.activeUrl' => 'price不是有效的域名或者IP',
'price.url' => 'price不是有效的URL地址',
'price.ip' => 'price不是有效的IP地址',
'price.length' => 'price长度不符',
'price.max' => 'price超出最大长度',
'price.min' => 'price低于最小长度',
'buyfen.require' => 'buyfen不能为空',
'buyfen.number' => 'buyfen不是数字',
'buyfen.float' => 'buyfen不是小数',
'buyfen.boolean' => 'buyfen不是布尔值',
'buyfen.email' => 'buyfen不是邮箱地址',
'buyfen.array' => 'buyfen不是数组',
'buyfen.accepted' => 'buyfen请确认',
'buyfen.date' => 'buyfen不是有效日期',
'buyfen.alpha' => 'buyfen不是字母',
'buyfen.alphaNum' => 'buyfen不是字母和数字',
'buyfen.alphaDash' => 'buyfen不是字母和数字和下划线及破折号',
'buyfen.chs' => 'buyfen只能是汉字',
'buyfen.chsAlpha' => 'buyfen只能是汉字、字母',
'buyfen.chsAlphaNum' => 'buyfen只能是汉字、字母和数字',
'buyfen.chsDash' => 'buyfen只能是汉字、字母、数字和下划线_及破折号-',
'buyfen.activeUrl' => 'buyfen不是有效的域名或者IP',
'buyfen.url' => 'buyfen不是有效的URL地址',
'buyfen.ip' => 'buyfen不是有效的IP地址',
'buyfen.length' => 'buyfen长度不符',
'buyfen.max' => 'buyfen超出最大长度',
'buyfen.min' => 'buyfen低于最小长度',
'pmaxnum.require' => 'pmaxnum不能为空',
'pmaxnum.number' => 'pmaxnum不是数字',
'pmaxnum.float' => 'pmaxnum不是小数',
'pmaxnum.boolean' => 'pmaxnum不是布尔值',
'pmaxnum.email' => 'pmaxnum不是邮箱地址',
'pmaxnum.array' => 'pmaxnum不是数组',
'pmaxnum.accepted' => 'pmaxnum请确认',
'pmaxnum.date' => 'pmaxnum不是有效日期',
'pmaxnum.alpha' => 'pmaxnum不是字母',
'pmaxnum.alphaNum' => 'pmaxnum不是字母和数字',
'pmaxnum.alphaDash' => 'pmaxnum不是字母和数字和下划线及破折号',
'pmaxnum.chs' => 'pmaxnum只能是汉字',
'pmaxnum.chsAlpha' => 'pmaxnum只能是汉字、字母',
'pmaxnum.chsAlphaNum' => 'pmaxnum只能是汉字、字母和数字',
'pmaxnum.chsDash' => 'pmaxnum只能是汉字、字母、数字和下划线_及破折号-',
'pmaxnum.activeUrl' => 'pmaxnum不是有效的域名或者IP',
'pmaxnum.url' => 'pmaxnum不是有效的URL地址',
'pmaxnum.ip' => 'pmaxnum不是有效的IP地址',
'pmaxnum.length' => 'pmaxnum长度不符',
'pmaxnum.max' => 'pmaxnum超出最大长度',
'pmaxnum.min' => 'pmaxnum低于最小长度',
'productpic.require' => 'productpic不能为空',
'productpic.number' => 'productpic不是数字',
'productpic.float' => 'productpic不是小数',
'productpic.boolean' => 'productpic不是布尔值',
'productpic.email' => 'productpic不是邮箱地址',
'productpic.array' => 'productpic不是数组',
'productpic.accepted' => 'productpic请确认',
'productpic.date' => 'productpic不是有效日期',
'productpic.alpha' => 'productpic不是字母',
'productpic.alphaNum' => 'productpic不是字母和数字',
'productpic.alphaDash' => 'productpic不是字母和数字和下划线及破折号',
'productpic.chs' => 'productpic只能是汉字',
'productpic.chsAlpha' => 'productpic只能是汉字、字母',
'productpic.chsAlphaNum' => 'productpic只能是汉字、字母和数字',
'productpic.chsDash' => 'productpic只能是汉字、字母、数字和下划线_及破折号-',
'productpic.activeUrl' => 'productpic不是有效的域名或者IP',
'productpic.url' => 'productpic不是有效的URL地址',
'productpic.ip' => 'productpic不是有效的IP地址',
'productpic.length' => 'productpic长度不符',
'productpic.max' => 'productpic超出最大长度',
'productpic.min' => 'productpic低于最小长度',
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
'psalenum.require' => 'psalenum不能为空',
'psalenum.number' => 'psalenum不是数字',
'psalenum.float' => 'psalenum不是小数',
'psalenum.boolean' => 'psalenum不是布尔值',
'psalenum.email' => 'psalenum不是邮箱地址',
'psalenum.array' => 'psalenum不是数组',
'psalenum.accepted' => 'psalenum请确认',
'psalenum.date' => 'psalenum不是有效日期',
'psalenum.alpha' => 'psalenum不是字母',
'psalenum.alphaNum' => 'psalenum不是字母和数字',
'psalenum.alphaDash' => 'psalenum不是字母和数字和下划线及破折号',
'psalenum.chs' => 'psalenum只能是汉字',
'psalenum.chsAlpha' => 'psalenum只能是汉字、字母',
'psalenum.chsAlphaNum' => 'psalenum只能是汉字、字母和数字',
'psalenum.chsDash' => 'psalenum只能是汉字、字母、数字和下划线_及破折号-',
'psalenum.activeUrl' => 'psalenum不是有效的域名或者IP',
'psalenum.url' => 'psalenum不是有效的URL地址',
'psalenum.ip' => 'psalenum不是有效的IP地址',
'psalenum.length' => 'psalenum长度不符',
'psalenum.max' => 'psalenum超出最大长度',
'psalenum.min' => 'psalenum低于最小长度',
];

protected $scene =   [
    'add'=>['id','classid','oldurl','checked','tmptime','userid','username','truetime','keyboard','title','newstime','titlepic','productno','pbrand','intro','unit','weight','tprice','price','buyfen','pmaxnum','productpic','newstext','psalenum',],
    'edit'=>['id','classid','oldurl','checked','tmptime','userid','username','truetime','keyboard','title','newstime','titlepic','productno','pbrand','intro','unit','weight','tprice','price','buyfen','pmaxnum','productpic','newstext','psalenum',],
    'ck_id'=>['id']
];

}
