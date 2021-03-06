<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EcmsInfotmpFlash extends Validate{

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
        'flashwriter' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'email' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'star' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'filesize' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'flashurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'width' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'height' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'flashsay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'flashwriter.require' => 'flashwriter不能为空',
'flashwriter.number' => 'flashwriter不是数字',
'flashwriter.float' => 'flashwriter不是小数',
'flashwriter.boolean' => 'flashwriter不是布尔值',
'flashwriter.email' => 'flashwriter不是邮箱地址',
'flashwriter.array' => 'flashwriter不是数组',
'flashwriter.accepted' => 'flashwriter请确认',
'flashwriter.date' => 'flashwriter不是有效日期',
'flashwriter.alpha' => 'flashwriter不是字母',
'flashwriter.alphaNum' => 'flashwriter不是字母和数字',
'flashwriter.alphaDash' => 'flashwriter不是字母和数字和下划线及破折号',
'flashwriter.chs' => 'flashwriter只能是汉字',
'flashwriter.chsAlpha' => 'flashwriter只能是汉字、字母',
'flashwriter.chsAlphaNum' => 'flashwriter只能是汉字、字母和数字',
'flashwriter.chsDash' => 'flashwriter只能是汉字、字母、数字和下划线_及破折号-',
'flashwriter.activeUrl' => 'flashwriter不是有效的域名或者IP',
'flashwriter.url' => 'flashwriter不是有效的URL地址',
'flashwriter.ip' => 'flashwriter不是有效的IP地址',
'flashwriter.length' => 'flashwriter长度不符',
'flashwriter.max' => 'flashwriter超出最大长度',
'flashwriter.min' => 'flashwriter低于最小长度',
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
'star.require' => 'star不能为空',
'star.number' => 'star不是数字',
'star.float' => 'star不是小数',
'star.boolean' => 'star不是布尔值',
'star.email' => 'star不是邮箱地址',
'star.array' => 'star不是数组',
'star.accepted' => 'star请确认',
'star.date' => 'star不是有效日期',
'star.alpha' => 'star不是字母',
'star.alphaNum' => 'star不是字母和数字',
'star.alphaDash' => 'star不是字母和数字和下划线及破折号',
'star.chs' => 'star只能是汉字',
'star.chsAlpha' => 'star只能是汉字、字母',
'star.chsAlphaNum' => 'star只能是汉字、字母和数字',
'star.chsDash' => 'star只能是汉字、字母、数字和下划线_及破折号-',
'star.activeUrl' => 'star不是有效的域名或者IP',
'star.url' => 'star不是有效的URL地址',
'star.ip' => 'star不是有效的IP地址',
'star.length' => 'star长度不符',
'star.max' => 'star超出最大长度',
'star.min' => 'star低于最小长度',
'filesize.require' => 'filesize不能为空',
'filesize.number' => 'filesize不是数字',
'filesize.float' => 'filesize不是小数',
'filesize.boolean' => 'filesize不是布尔值',
'filesize.email' => 'filesize不是邮箱地址',
'filesize.array' => 'filesize不是数组',
'filesize.accepted' => 'filesize请确认',
'filesize.date' => 'filesize不是有效日期',
'filesize.alpha' => 'filesize不是字母',
'filesize.alphaNum' => 'filesize不是字母和数字',
'filesize.alphaDash' => 'filesize不是字母和数字和下划线及破折号',
'filesize.chs' => 'filesize只能是汉字',
'filesize.chsAlpha' => 'filesize只能是汉字、字母',
'filesize.chsAlphaNum' => 'filesize只能是汉字、字母和数字',
'filesize.chsDash' => 'filesize只能是汉字、字母、数字和下划线_及破折号-',
'filesize.activeUrl' => 'filesize不是有效的域名或者IP',
'filesize.url' => 'filesize不是有效的URL地址',
'filesize.ip' => 'filesize不是有效的IP地址',
'filesize.length' => 'filesize长度不符',
'filesize.max' => 'filesize超出最大长度',
'filesize.min' => 'filesize低于最小长度',
'flashurl.require' => 'flashurl不能为空',
'flashurl.number' => 'flashurl不是数字',
'flashurl.float' => 'flashurl不是小数',
'flashurl.boolean' => 'flashurl不是布尔值',
'flashurl.email' => 'flashurl不是邮箱地址',
'flashurl.array' => 'flashurl不是数组',
'flashurl.accepted' => 'flashurl请确认',
'flashurl.date' => 'flashurl不是有效日期',
'flashurl.alpha' => 'flashurl不是字母',
'flashurl.alphaNum' => 'flashurl不是字母和数字',
'flashurl.alphaDash' => 'flashurl不是字母和数字和下划线及破折号',
'flashurl.chs' => 'flashurl只能是汉字',
'flashurl.chsAlpha' => 'flashurl只能是汉字、字母',
'flashurl.chsAlphaNum' => 'flashurl只能是汉字、字母和数字',
'flashurl.chsDash' => 'flashurl只能是汉字、字母、数字和下划线_及破折号-',
'flashurl.activeUrl' => 'flashurl不是有效的域名或者IP',
'flashurl.url' => 'flashurl不是有效的URL地址',
'flashurl.ip' => 'flashurl不是有效的IP地址',
'flashurl.length' => 'flashurl长度不符',
'flashurl.max' => 'flashurl超出最大长度',
'flashurl.min' => 'flashurl低于最小长度',
'width.require' => 'width不能为空',
'width.number' => 'width不是数字',
'width.float' => 'width不是小数',
'width.boolean' => 'width不是布尔值',
'width.email' => 'width不是邮箱地址',
'width.array' => 'width不是数组',
'width.accepted' => 'width请确认',
'width.date' => 'width不是有效日期',
'width.alpha' => 'width不是字母',
'width.alphaNum' => 'width不是字母和数字',
'width.alphaDash' => 'width不是字母和数字和下划线及破折号',
'width.chs' => 'width只能是汉字',
'width.chsAlpha' => 'width只能是汉字、字母',
'width.chsAlphaNum' => 'width只能是汉字、字母和数字',
'width.chsDash' => 'width只能是汉字、字母、数字和下划线_及破折号-',
'width.activeUrl' => 'width不是有效的域名或者IP',
'width.url' => 'width不是有效的URL地址',
'width.ip' => 'width不是有效的IP地址',
'width.length' => 'width长度不符',
'width.max' => 'width超出最大长度',
'width.min' => 'width低于最小长度',
'height.require' => 'height不能为空',
'height.number' => 'height不是数字',
'height.float' => 'height不是小数',
'height.boolean' => 'height不是布尔值',
'height.email' => 'height不是邮箱地址',
'height.array' => 'height不是数组',
'height.accepted' => 'height请确认',
'height.date' => 'height不是有效日期',
'height.alpha' => 'height不是字母',
'height.alphaNum' => 'height不是字母和数字',
'height.alphaDash' => 'height不是字母和数字和下划线及破折号',
'height.chs' => 'height只能是汉字',
'height.chsAlpha' => 'height只能是汉字、字母',
'height.chsAlphaNum' => 'height只能是汉字、字母和数字',
'height.chsDash' => 'height只能是汉字、字母、数字和下划线_及破折号-',
'height.activeUrl' => 'height不是有效的域名或者IP',
'height.url' => 'height不是有效的URL地址',
'height.ip' => 'height不是有效的IP地址',
'height.length' => 'height长度不符',
'height.max' => 'height超出最大长度',
'height.min' => 'height低于最小长度',
'flashsay.require' => 'flashsay不能为空',
'flashsay.number' => 'flashsay不是数字',
'flashsay.float' => 'flashsay不是小数',
'flashsay.boolean' => 'flashsay不是布尔值',
'flashsay.email' => 'flashsay不是邮箱地址',
'flashsay.array' => 'flashsay不是数组',
'flashsay.accepted' => 'flashsay请确认',
'flashsay.date' => 'flashsay不是有效日期',
'flashsay.alpha' => 'flashsay不是字母',
'flashsay.alphaNum' => 'flashsay不是字母和数字',
'flashsay.alphaDash' => 'flashsay不是字母和数字和下划线及破折号',
'flashsay.chs' => 'flashsay只能是汉字',
'flashsay.chsAlpha' => 'flashsay只能是汉字、字母',
'flashsay.chsAlphaNum' => 'flashsay只能是汉字、字母和数字',
'flashsay.chsDash' => 'flashsay只能是汉字、字母、数字和下划线_及破折号-',
'flashsay.activeUrl' => 'flashsay不是有效的域名或者IP',
'flashsay.url' => 'flashsay不是有效的URL地址',
'flashsay.ip' => 'flashsay不是有效的IP地址',
'flashsay.length' => 'flashsay长度不符',
'flashsay.max' => 'flashsay超出最大长度',
'flashsay.min' => 'flashsay低于最小长度',
];

protected $scene =   [
    'add'=>['id','classid','oldurl','checked','tmptime','userid','username','truetime','keyboard','title','newstime','titlepic','flashwriter','email','star','filesize','flashurl','width','height','flashsay',],
    'edit'=>['id','classid','oldurl','checked','tmptime','userid','username','truetime','keyboard','title','newstime','titlepic','flashwriter','email','star','filesize','flashurl','width','height','flashsay',],
    'ck_id'=>['id']
];

}
