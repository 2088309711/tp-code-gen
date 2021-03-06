<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewssearch extends Validate{

protected $rule =   [
        'searchid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'keyboard' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'searchtime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'searchclass' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'result_num' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'searchip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'onclick' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'orderby' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'myorder' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'checkpass' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tbname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'iskey' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'andsql' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'trueclassid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'searchid.require' => 'searchid不能为空',
'searchid.number' => 'searchid不是数字',
'searchid.float' => 'searchid不是小数',
'searchid.boolean' => 'searchid不是布尔值',
'searchid.email' => 'searchid不是邮箱地址',
'searchid.array' => 'searchid不是数组',
'searchid.accepted' => 'searchid请确认',
'searchid.date' => 'searchid不是有效日期',
'searchid.alpha' => 'searchid不是字母',
'searchid.alphaNum' => 'searchid不是字母和数字',
'searchid.alphaDash' => 'searchid不是字母和数字和下划线及破折号',
'searchid.chs' => 'searchid只能是汉字',
'searchid.chsAlpha' => 'searchid只能是汉字、字母',
'searchid.chsAlphaNum' => 'searchid只能是汉字、字母和数字',
'searchid.chsDash' => 'searchid只能是汉字、字母、数字和下划线_及破折号-',
'searchid.activeUrl' => 'searchid不是有效的域名或者IP',
'searchid.url' => 'searchid不是有效的URL地址',
'searchid.ip' => 'searchid不是有效的IP地址',
'searchid.length' => 'searchid长度不符',
'searchid.max' => 'searchid超出最大长度',
'searchid.min' => 'searchid低于最小长度',
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
'searchtime.require' => 'searchtime不能为空',
'searchtime.number' => 'searchtime不是数字',
'searchtime.float' => 'searchtime不是小数',
'searchtime.boolean' => 'searchtime不是布尔值',
'searchtime.email' => 'searchtime不是邮箱地址',
'searchtime.array' => 'searchtime不是数组',
'searchtime.accepted' => 'searchtime请确认',
'searchtime.date' => 'searchtime不是有效日期',
'searchtime.alpha' => 'searchtime不是字母',
'searchtime.alphaNum' => 'searchtime不是字母和数字',
'searchtime.alphaDash' => 'searchtime不是字母和数字和下划线及破折号',
'searchtime.chs' => 'searchtime只能是汉字',
'searchtime.chsAlpha' => 'searchtime只能是汉字、字母',
'searchtime.chsAlphaNum' => 'searchtime只能是汉字、字母和数字',
'searchtime.chsDash' => 'searchtime只能是汉字、字母、数字和下划线_及破折号-',
'searchtime.activeUrl' => 'searchtime不是有效的域名或者IP',
'searchtime.url' => 'searchtime不是有效的URL地址',
'searchtime.ip' => 'searchtime不是有效的IP地址',
'searchtime.length' => 'searchtime长度不符',
'searchtime.max' => 'searchtime超出最大长度',
'searchtime.min' => 'searchtime低于最小长度',
'searchclass.require' => 'searchclass不能为空',
'searchclass.number' => 'searchclass不是数字',
'searchclass.float' => 'searchclass不是小数',
'searchclass.boolean' => 'searchclass不是布尔值',
'searchclass.email' => 'searchclass不是邮箱地址',
'searchclass.array' => 'searchclass不是数组',
'searchclass.accepted' => 'searchclass请确认',
'searchclass.date' => 'searchclass不是有效日期',
'searchclass.alpha' => 'searchclass不是字母',
'searchclass.alphaNum' => 'searchclass不是字母和数字',
'searchclass.alphaDash' => 'searchclass不是字母和数字和下划线及破折号',
'searchclass.chs' => 'searchclass只能是汉字',
'searchclass.chsAlpha' => 'searchclass只能是汉字、字母',
'searchclass.chsAlphaNum' => 'searchclass只能是汉字、字母和数字',
'searchclass.chsDash' => 'searchclass只能是汉字、字母、数字和下划线_及破折号-',
'searchclass.activeUrl' => 'searchclass不是有效的域名或者IP',
'searchclass.url' => 'searchclass不是有效的URL地址',
'searchclass.ip' => 'searchclass不是有效的IP地址',
'searchclass.length' => 'searchclass长度不符',
'searchclass.max' => 'searchclass超出最大长度',
'searchclass.min' => 'searchclass低于最小长度',
'result_num.require' => 'result_num不能为空',
'result_num.number' => 'result_num不是数字',
'result_num.float' => 'result_num不是小数',
'result_num.boolean' => 'result_num不是布尔值',
'result_num.email' => 'result_num不是邮箱地址',
'result_num.array' => 'result_num不是数组',
'result_num.accepted' => 'result_num请确认',
'result_num.date' => 'result_num不是有效日期',
'result_num.alpha' => 'result_num不是字母',
'result_num.alphaNum' => 'result_num不是字母和数字',
'result_num.alphaDash' => 'result_num不是字母和数字和下划线及破折号',
'result_num.chs' => 'result_num只能是汉字',
'result_num.chsAlpha' => 'result_num只能是汉字、字母',
'result_num.chsAlphaNum' => 'result_num只能是汉字、字母和数字',
'result_num.chsDash' => 'result_num只能是汉字、字母、数字和下划线_及破折号-',
'result_num.activeUrl' => 'result_num不是有效的域名或者IP',
'result_num.url' => 'result_num不是有效的URL地址',
'result_num.ip' => 'result_num不是有效的IP地址',
'result_num.length' => 'result_num长度不符',
'result_num.max' => 'result_num超出最大长度',
'result_num.min' => 'result_num低于最小长度',
'searchip.require' => 'searchip不能为空',
'searchip.number' => 'searchip不是数字',
'searchip.float' => 'searchip不是小数',
'searchip.boolean' => 'searchip不是布尔值',
'searchip.email' => 'searchip不是邮箱地址',
'searchip.array' => 'searchip不是数组',
'searchip.accepted' => 'searchip请确认',
'searchip.date' => 'searchip不是有效日期',
'searchip.alpha' => 'searchip不是字母',
'searchip.alphaNum' => 'searchip不是字母和数字',
'searchip.alphaDash' => 'searchip不是字母和数字和下划线及破折号',
'searchip.chs' => 'searchip只能是汉字',
'searchip.chsAlpha' => 'searchip只能是汉字、字母',
'searchip.chsAlphaNum' => 'searchip只能是汉字、字母和数字',
'searchip.chsDash' => 'searchip只能是汉字、字母、数字和下划线_及破折号-',
'searchip.activeUrl' => 'searchip不是有效的域名或者IP',
'searchip.url' => 'searchip不是有效的URL地址',
'searchip.ip' => 'searchip不是有效的IP地址',
'searchip.length' => 'searchip长度不符',
'searchip.max' => 'searchip超出最大长度',
'searchip.min' => 'searchip低于最小长度',
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
'onclick.require' => 'onclick不能为空',
'onclick.number' => 'onclick不是数字',
'onclick.float' => 'onclick不是小数',
'onclick.boolean' => 'onclick不是布尔值',
'onclick.email' => 'onclick不是邮箱地址',
'onclick.array' => 'onclick不是数组',
'onclick.accepted' => 'onclick请确认',
'onclick.date' => 'onclick不是有效日期',
'onclick.alpha' => 'onclick不是字母',
'onclick.alphaNum' => 'onclick不是字母和数字',
'onclick.alphaDash' => 'onclick不是字母和数字和下划线及破折号',
'onclick.chs' => 'onclick只能是汉字',
'onclick.chsAlpha' => 'onclick只能是汉字、字母',
'onclick.chsAlphaNum' => 'onclick只能是汉字、字母和数字',
'onclick.chsDash' => 'onclick只能是汉字、字母、数字和下划线_及破折号-',
'onclick.activeUrl' => 'onclick不是有效的域名或者IP',
'onclick.url' => 'onclick不是有效的URL地址',
'onclick.ip' => 'onclick不是有效的IP地址',
'onclick.length' => 'onclick长度不符',
'onclick.max' => 'onclick超出最大长度',
'onclick.min' => 'onclick低于最小长度',
'orderby.require' => 'orderby不能为空',
'orderby.number' => 'orderby不是数字',
'orderby.float' => 'orderby不是小数',
'orderby.boolean' => 'orderby不是布尔值',
'orderby.email' => 'orderby不是邮箱地址',
'orderby.array' => 'orderby不是数组',
'orderby.accepted' => 'orderby请确认',
'orderby.date' => 'orderby不是有效日期',
'orderby.alpha' => 'orderby不是字母',
'orderby.alphaNum' => 'orderby不是字母和数字',
'orderby.alphaDash' => 'orderby不是字母和数字和下划线及破折号',
'orderby.chs' => 'orderby只能是汉字',
'orderby.chsAlpha' => 'orderby只能是汉字、字母',
'orderby.chsAlphaNum' => 'orderby只能是汉字、字母和数字',
'orderby.chsDash' => 'orderby只能是汉字、字母、数字和下划线_及破折号-',
'orderby.activeUrl' => 'orderby不是有效的域名或者IP',
'orderby.url' => 'orderby不是有效的URL地址',
'orderby.ip' => 'orderby不是有效的IP地址',
'orderby.length' => 'orderby长度不符',
'orderby.max' => 'orderby超出最大长度',
'orderby.min' => 'orderby低于最小长度',
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
'checkpass.require' => 'checkpass不能为空',
'checkpass.number' => 'checkpass不是数字',
'checkpass.float' => 'checkpass不是小数',
'checkpass.boolean' => 'checkpass不是布尔值',
'checkpass.email' => 'checkpass不是邮箱地址',
'checkpass.array' => 'checkpass不是数组',
'checkpass.accepted' => 'checkpass请确认',
'checkpass.date' => 'checkpass不是有效日期',
'checkpass.alpha' => 'checkpass不是字母',
'checkpass.alphaNum' => 'checkpass不是字母和数字',
'checkpass.alphaDash' => 'checkpass不是字母和数字和下划线及破折号',
'checkpass.chs' => 'checkpass只能是汉字',
'checkpass.chsAlpha' => 'checkpass只能是汉字、字母',
'checkpass.chsAlphaNum' => 'checkpass只能是汉字、字母和数字',
'checkpass.chsDash' => 'checkpass只能是汉字、字母、数字和下划线_及破折号-',
'checkpass.activeUrl' => 'checkpass不是有效的域名或者IP',
'checkpass.url' => 'checkpass不是有效的URL地址',
'checkpass.ip' => 'checkpass不是有效的IP地址',
'checkpass.length' => 'checkpass长度不符',
'checkpass.max' => 'checkpass超出最大长度',
'checkpass.min' => 'checkpass低于最小长度',
'tbname.require' => 'tbname不能为空',
'tbname.number' => 'tbname不是数字',
'tbname.float' => 'tbname不是小数',
'tbname.boolean' => 'tbname不是布尔值',
'tbname.email' => 'tbname不是邮箱地址',
'tbname.array' => 'tbname不是数组',
'tbname.accepted' => 'tbname请确认',
'tbname.date' => 'tbname不是有效日期',
'tbname.alpha' => 'tbname不是字母',
'tbname.alphaNum' => 'tbname不是字母和数字',
'tbname.alphaDash' => 'tbname不是字母和数字和下划线及破折号',
'tbname.chs' => 'tbname只能是汉字',
'tbname.chsAlpha' => 'tbname只能是汉字、字母',
'tbname.chsAlphaNum' => 'tbname只能是汉字、字母和数字',
'tbname.chsDash' => 'tbname只能是汉字、字母、数字和下划线_及破折号-',
'tbname.activeUrl' => 'tbname不是有效的域名或者IP',
'tbname.url' => 'tbname不是有效的URL地址',
'tbname.ip' => 'tbname不是有效的IP地址',
'tbname.length' => 'tbname长度不符',
'tbname.max' => 'tbname超出最大长度',
'tbname.min' => 'tbname低于最小长度',
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
'iskey.require' => 'iskey不能为空',
'iskey.number' => 'iskey不是数字',
'iskey.float' => 'iskey不是小数',
'iskey.boolean' => 'iskey不是布尔值',
'iskey.email' => 'iskey不是邮箱地址',
'iskey.array' => 'iskey不是数组',
'iskey.accepted' => 'iskey请确认',
'iskey.date' => 'iskey不是有效日期',
'iskey.alpha' => 'iskey不是字母',
'iskey.alphaNum' => 'iskey不是字母和数字',
'iskey.alphaDash' => 'iskey不是字母和数字和下划线及破折号',
'iskey.chs' => 'iskey只能是汉字',
'iskey.chsAlpha' => 'iskey只能是汉字、字母',
'iskey.chsAlphaNum' => 'iskey只能是汉字、字母和数字',
'iskey.chsDash' => 'iskey只能是汉字、字母、数字和下划线_及破折号-',
'iskey.activeUrl' => 'iskey不是有效的域名或者IP',
'iskey.url' => 'iskey不是有效的URL地址',
'iskey.ip' => 'iskey不是有效的IP地址',
'iskey.length' => 'iskey长度不符',
'iskey.max' => 'iskey超出最大长度',
'iskey.min' => 'iskey低于最小长度',
'andsql.require' => 'andsql不能为空',
'andsql.number' => 'andsql不是数字',
'andsql.float' => 'andsql不是小数',
'andsql.boolean' => 'andsql不是布尔值',
'andsql.email' => 'andsql不是邮箱地址',
'andsql.array' => 'andsql不是数组',
'andsql.accepted' => 'andsql请确认',
'andsql.date' => 'andsql不是有效日期',
'andsql.alpha' => 'andsql不是字母',
'andsql.alphaNum' => 'andsql不是字母和数字',
'andsql.alphaDash' => 'andsql不是字母和数字和下划线及破折号',
'andsql.chs' => 'andsql只能是汉字',
'andsql.chsAlpha' => 'andsql只能是汉字、字母',
'andsql.chsAlphaNum' => 'andsql只能是汉字、字母和数字',
'andsql.chsDash' => 'andsql只能是汉字、字母、数字和下划线_及破折号-',
'andsql.activeUrl' => 'andsql不是有效的域名或者IP',
'andsql.url' => 'andsql不是有效的URL地址',
'andsql.ip' => 'andsql不是有效的IP地址',
'andsql.length' => 'andsql长度不符',
'andsql.max' => 'andsql超出最大长度',
'andsql.min' => 'andsql低于最小长度',
'trueclassid.require' => 'trueclassid不能为空',
'trueclassid.number' => 'trueclassid不是数字',
'trueclassid.float' => 'trueclassid不是小数',
'trueclassid.boolean' => 'trueclassid不是布尔值',
'trueclassid.email' => 'trueclassid不是邮箱地址',
'trueclassid.array' => 'trueclassid不是数组',
'trueclassid.accepted' => 'trueclassid请确认',
'trueclassid.date' => 'trueclassid不是有效日期',
'trueclassid.alpha' => 'trueclassid不是字母',
'trueclassid.alphaNum' => 'trueclassid不是字母和数字',
'trueclassid.alphaDash' => 'trueclassid不是字母和数字和下划线及破折号',
'trueclassid.chs' => 'trueclassid只能是汉字',
'trueclassid.chsAlpha' => 'trueclassid只能是汉字、字母',
'trueclassid.chsAlphaNum' => 'trueclassid只能是汉字、字母和数字',
'trueclassid.chsDash' => 'trueclassid只能是汉字、字母、数字和下划线_及破折号-',
'trueclassid.activeUrl' => 'trueclassid不是有效的域名或者IP',
'trueclassid.url' => 'trueclassid不是有效的URL地址',
'trueclassid.ip' => 'trueclassid不是有效的IP地址',
'trueclassid.length' => 'trueclassid长度不符',
'trueclassid.max' => 'trueclassid超出最大长度',
'trueclassid.min' => 'trueclassid低于最小长度',
];

protected $scene =   [
    'add'=>['searchid','keyboard','searchtime','searchclass','result_num','searchip','classid','onclick','orderby','myorder','checkpass','tbname','tempid','iskey','andsql','trueclassid',],
    'edit'=>['searchid','keyboard','searchtime','searchclass','result_num','searchip','classid','onclick','orderby','myorder','checkpass','tbname','tempid','iskey','andsql','trueclassid',],
    'ck_id'=>['id']
];

}
