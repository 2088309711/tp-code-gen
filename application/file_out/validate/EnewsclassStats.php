<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EnewsclassStats extends Validate{

protected $rule =   [
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'uptime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pvall' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pvyear' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pvhalfyear' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pvquarter' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pvmonth' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pvweek' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pvday' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'pvyesterday' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ipall' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ipyear' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'iphalfyear' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ipquarter' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ipmonth' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ipweek' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ipday' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ipyesterday' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
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
'uptime.require' => 'uptime不能为空',
'uptime.number' => 'uptime不是数字',
'uptime.float' => 'uptime不是小数',
'uptime.boolean' => 'uptime不是布尔值',
'uptime.email' => 'uptime不是邮箱地址',
'uptime.array' => 'uptime不是数组',
'uptime.accepted' => 'uptime请确认',
'uptime.date' => 'uptime不是有效日期',
'uptime.alpha' => 'uptime不是字母',
'uptime.alphaNum' => 'uptime不是字母和数字',
'uptime.alphaDash' => 'uptime不是字母和数字和下划线及破折号',
'uptime.chs' => 'uptime只能是汉字',
'uptime.chsAlpha' => 'uptime只能是汉字、字母',
'uptime.chsAlphaNum' => 'uptime只能是汉字、字母和数字',
'uptime.chsDash' => 'uptime只能是汉字、字母、数字和下划线_及破折号-',
'uptime.activeUrl' => 'uptime不是有效的域名或者IP',
'uptime.url' => 'uptime不是有效的URL地址',
'uptime.ip' => 'uptime不是有效的IP地址',
'uptime.length' => 'uptime长度不符',
'uptime.max' => 'uptime超出最大长度',
'uptime.min' => 'uptime低于最小长度',
'pvall.require' => 'pvall不能为空',
'pvall.number' => 'pvall不是数字',
'pvall.float' => 'pvall不是小数',
'pvall.boolean' => 'pvall不是布尔值',
'pvall.email' => 'pvall不是邮箱地址',
'pvall.array' => 'pvall不是数组',
'pvall.accepted' => 'pvall请确认',
'pvall.date' => 'pvall不是有效日期',
'pvall.alpha' => 'pvall不是字母',
'pvall.alphaNum' => 'pvall不是字母和数字',
'pvall.alphaDash' => 'pvall不是字母和数字和下划线及破折号',
'pvall.chs' => 'pvall只能是汉字',
'pvall.chsAlpha' => 'pvall只能是汉字、字母',
'pvall.chsAlphaNum' => 'pvall只能是汉字、字母和数字',
'pvall.chsDash' => 'pvall只能是汉字、字母、数字和下划线_及破折号-',
'pvall.activeUrl' => 'pvall不是有效的域名或者IP',
'pvall.url' => 'pvall不是有效的URL地址',
'pvall.ip' => 'pvall不是有效的IP地址',
'pvall.length' => 'pvall长度不符',
'pvall.max' => 'pvall超出最大长度',
'pvall.min' => 'pvall低于最小长度',
'pvyear.require' => 'pvyear不能为空',
'pvyear.number' => 'pvyear不是数字',
'pvyear.float' => 'pvyear不是小数',
'pvyear.boolean' => 'pvyear不是布尔值',
'pvyear.email' => 'pvyear不是邮箱地址',
'pvyear.array' => 'pvyear不是数组',
'pvyear.accepted' => 'pvyear请确认',
'pvyear.date' => 'pvyear不是有效日期',
'pvyear.alpha' => 'pvyear不是字母',
'pvyear.alphaNum' => 'pvyear不是字母和数字',
'pvyear.alphaDash' => 'pvyear不是字母和数字和下划线及破折号',
'pvyear.chs' => 'pvyear只能是汉字',
'pvyear.chsAlpha' => 'pvyear只能是汉字、字母',
'pvyear.chsAlphaNum' => 'pvyear只能是汉字、字母和数字',
'pvyear.chsDash' => 'pvyear只能是汉字、字母、数字和下划线_及破折号-',
'pvyear.activeUrl' => 'pvyear不是有效的域名或者IP',
'pvyear.url' => 'pvyear不是有效的URL地址',
'pvyear.ip' => 'pvyear不是有效的IP地址',
'pvyear.length' => 'pvyear长度不符',
'pvyear.max' => 'pvyear超出最大长度',
'pvyear.min' => 'pvyear低于最小长度',
'pvhalfyear.require' => 'pvhalfyear不能为空',
'pvhalfyear.number' => 'pvhalfyear不是数字',
'pvhalfyear.float' => 'pvhalfyear不是小数',
'pvhalfyear.boolean' => 'pvhalfyear不是布尔值',
'pvhalfyear.email' => 'pvhalfyear不是邮箱地址',
'pvhalfyear.array' => 'pvhalfyear不是数组',
'pvhalfyear.accepted' => 'pvhalfyear请确认',
'pvhalfyear.date' => 'pvhalfyear不是有效日期',
'pvhalfyear.alpha' => 'pvhalfyear不是字母',
'pvhalfyear.alphaNum' => 'pvhalfyear不是字母和数字',
'pvhalfyear.alphaDash' => 'pvhalfyear不是字母和数字和下划线及破折号',
'pvhalfyear.chs' => 'pvhalfyear只能是汉字',
'pvhalfyear.chsAlpha' => 'pvhalfyear只能是汉字、字母',
'pvhalfyear.chsAlphaNum' => 'pvhalfyear只能是汉字、字母和数字',
'pvhalfyear.chsDash' => 'pvhalfyear只能是汉字、字母、数字和下划线_及破折号-',
'pvhalfyear.activeUrl' => 'pvhalfyear不是有效的域名或者IP',
'pvhalfyear.url' => 'pvhalfyear不是有效的URL地址',
'pvhalfyear.ip' => 'pvhalfyear不是有效的IP地址',
'pvhalfyear.length' => 'pvhalfyear长度不符',
'pvhalfyear.max' => 'pvhalfyear超出最大长度',
'pvhalfyear.min' => 'pvhalfyear低于最小长度',
'pvquarter.require' => 'pvquarter不能为空',
'pvquarter.number' => 'pvquarter不是数字',
'pvquarter.float' => 'pvquarter不是小数',
'pvquarter.boolean' => 'pvquarter不是布尔值',
'pvquarter.email' => 'pvquarter不是邮箱地址',
'pvquarter.array' => 'pvquarter不是数组',
'pvquarter.accepted' => 'pvquarter请确认',
'pvquarter.date' => 'pvquarter不是有效日期',
'pvquarter.alpha' => 'pvquarter不是字母',
'pvquarter.alphaNum' => 'pvquarter不是字母和数字',
'pvquarter.alphaDash' => 'pvquarter不是字母和数字和下划线及破折号',
'pvquarter.chs' => 'pvquarter只能是汉字',
'pvquarter.chsAlpha' => 'pvquarter只能是汉字、字母',
'pvquarter.chsAlphaNum' => 'pvquarter只能是汉字、字母和数字',
'pvquarter.chsDash' => 'pvquarter只能是汉字、字母、数字和下划线_及破折号-',
'pvquarter.activeUrl' => 'pvquarter不是有效的域名或者IP',
'pvquarter.url' => 'pvquarter不是有效的URL地址',
'pvquarter.ip' => 'pvquarter不是有效的IP地址',
'pvquarter.length' => 'pvquarter长度不符',
'pvquarter.max' => 'pvquarter超出最大长度',
'pvquarter.min' => 'pvquarter低于最小长度',
'pvmonth.require' => 'pvmonth不能为空',
'pvmonth.number' => 'pvmonth不是数字',
'pvmonth.float' => 'pvmonth不是小数',
'pvmonth.boolean' => 'pvmonth不是布尔值',
'pvmonth.email' => 'pvmonth不是邮箱地址',
'pvmonth.array' => 'pvmonth不是数组',
'pvmonth.accepted' => 'pvmonth请确认',
'pvmonth.date' => 'pvmonth不是有效日期',
'pvmonth.alpha' => 'pvmonth不是字母',
'pvmonth.alphaNum' => 'pvmonth不是字母和数字',
'pvmonth.alphaDash' => 'pvmonth不是字母和数字和下划线及破折号',
'pvmonth.chs' => 'pvmonth只能是汉字',
'pvmonth.chsAlpha' => 'pvmonth只能是汉字、字母',
'pvmonth.chsAlphaNum' => 'pvmonth只能是汉字、字母和数字',
'pvmonth.chsDash' => 'pvmonth只能是汉字、字母、数字和下划线_及破折号-',
'pvmonth.activeUrl' => 'pvmonth不是有效的域名或者IP',
'pvmonth.url' => 'pvmonth不是有效的URL地址',
'pvmonth.ip' => 'pvmonth不是有效的IP地址',
'pvmonth.length' => 'pvmonth长度不符',
'pvmonth.max' => 'pvmonth超出最大长度',
'pvmonth.min' => 'pvmonth低于最小长度',
'pvweek.require' => 'pvweek不能为空',
'pvweek.number' => 'pvweek不是数字',
'pvweek.float' => 'pvweek不是小数',
'pvweek.boolean' => 'pvweek不是布尔值',
'pvweek.email' => 'pvweek不是邮箱地址',
'pvweek.array' => 'pvweek不是数组',
'pvweek.accepted' => 'pvweek请确认',
'pvweek.date' => 'pvweek不是有效日期',
'pvweek.alpha' => 'pvweek不是字母',
'pvweek.alphaNum' => 'pvweek不是字母和数字',
'pvweek.alphaDash' => 'pvweek不是字母和数字和下划线及破折号',
'pvweek.chs' => 'pvweek只能是汉字',
'pvweek.chsAlpha' => 'pvweek只能是汉字、字母',
'pvweek.chsAlphaNum' => 'pvweek只能是汉字、字母和数字',
'pvweek.chsDash' => 'pvweek只能是汉字、字母、数字和下划线_及破折号-',
'pvweek.activeUrl' => 'pvweek不是有效的域名或者IP',
'pvweek.url' => 'pvweek不是有效的URL地址',
'pvweek.ip' => 'pvweek不是有效的IP地址',
'pvweek.length' => 'pvweek长度不符',
'pvweek.max' => 'pvweek超出最大长度',
'pvweek.min' => 'pvweek低于最小长度',
'pvday.require' => 'pvday不能为空',
'pvday.number' => 'pvday不是数字',
'pvday.float' => 'pvday不是小数',
'pvday.boolean' => 'pvday不是布尔值',
'pvday.email' => 'pvday不是邮箱地址',
'pvday.array' => 'pvday不是数组',
'pvday.accepted' => 'pvday请确认',
'pvday.date' => 'pvday不是有效日期',
'pvday.alpha' => 'pvday不是字母',
'pvday.alphaNum' => 'pvday不是字母和数字',
'pvday.alphaDash' => 'pvday不是字母和数字和下划线及破折号',
'pvday.chs' => 'pvday只能是汉字',
'pvday.chsAlpha' => 'pvday只能是汉字、字母',
'pvday.chsAlphaNum' => 'pvday只能是汉字、字母和数字',
'pvday.chsDash' => 'pvday只能是汉字、字母、数字和下划线_及破折号-',
'pvday.activeUrl' => 'pvday不是有效的域名或者IP',
'pvday.url' => 'pvday不是有效的URL地址',
'pvday.ip' => 'pvday不是有效的IP地址',
'pvday.length' => 'pvday长度不符',
'pvday.max' => 'pvday超出最大长度',
'pvday.min' => 'pvday低于最小长度',
'pvyesterday.require' => 'pvyesterday不能为空',
'pvyesterday.number' => 'pvyesterday不是数字',
'pvyesterday.float' => 'pvyesterday不是小数',
'pvyesterday.boolean' => 'pvyesterday不是布尔值',
'pvyesterday.email' => 'pvyesterday不是邮箱地址',
'pvyesterday.array' => 'pvyesterday不是数组',
'pvyesterday.accepted' => 'pvyesterday请确认',
'pvyesterday.date' => 'pvyesterday不是有效日期',
'pvyesterday.alpha' => 'pvyesterday不是字母',
'pvyesterday.alphaNum' => 'pvyesterday不是字母和数字',
'pvyesterday.alphaDash' => 'pvyesterday不是字母和数字和下划线及破折号',
'pvyesterday.chs' => 'pvyesterday只能是汉字',
'pvyesterday.chsAlpha' => 'pvyesterday只能是汉字、字母',
'pvyesterday.chsAlphaNum' => 'pvyesterday只能是汉字、字母和数字',
'pvyesterday.chsDash' => 'pvyesterday只能是汉字、字母、数字和下划线_及破折号-',
'pvyesterday.activeUrl' => 'pvyesterday不是有效的域名或者IP',
'pvyesterday.url' => 'pvyesterday不是有效的URL地址',
'pvyesterday.ip' => 'pvyesterday不是有效的IP地址',
'pvyesterday.length' => 'pvyesterday长度不符',
'pvyesterday.max' => 'pvyesterday超出最大长度',
'pvyesterday.min' => 'pvyesterday低于最小长度',
'ipall.require' => 'ipall不能为空',
'ipall.number' => 'ipall不是数字',
'ipall.float' => 'ipall不是小数',
'ipall.boolean' => 'ipall不是布尔值',
'ipall.email' => 'ipall不是邮箱地址',
'ipall.array' => 'ipall不是数组',
'ipall.accepted' => 'ipall请确认',
'ipall.date' => 'ipall不是有效日期',
'ipall.alpha' => 'ipall不是字母',
'ipall.alphaNum' => 'ipall不是字母和数字',
'ipall.alphaDash' => 'ipall不是字母和数字和下划线及破折号',
'ipall.chs' => 'ipall只能是汉字',
'ipall.chsAlpha' => 'ipall只能是汉字、字母',
'ipall.chsAlphaNum' => 'ipall只能是汉字、字母和数字',
'ipall.chsDash' => 'ipall只能是汉字、字母、数字和下划线_及破折号-',
'ipall.activeUrl' => 'ipall不是有效的域名或者IP',
'ipall.url' => 'ipall不是有效的URL地址',
'ipall.ip' => 'ipall不是有效的IP地址',
'ipall.length' => 'ipall长度不符',
'ipall.max' => 'ipall超出最大长度',
'ipall.min' => 'ipall低于最小长度',
'ipyear.require' => 'ipyear不能为空',
'ipyear.number' => 'ipyear不是数字',
'ipyear.float' => 'ipyear不是小数',
'ipyear.boolean' => 'ipyear不是布尔值',
'ipyear.email' => 'ipyear不是邮箱地址',
'ipyear.array' => 'ipyear不是数组',
'ipyear.accepted' => 'ipyear请确认',
'ipyear.date' => 'ipyear不是有效日期',
'ipyear.alpha' => 'ipyear不是字母',
'ipyear.alphaNum' => 'ipyear不是字母和数字',
'ipyear.alphaDash' => 'ipyear不是字母和数字和下划线及破折号',
'ipyear.chs' => 'ipyear只能是汉字',
'ipyear.chsAlpha' => 'ipyear只能是汉字、字母',
'ipyear.chsAlphaNum' => 'ipyear只能是汉字、字母和数字',
'ipyear.chsDash' => 'ipyear只能是汉字、字母、数字和下划线_及破折号-',
'ipyear.activeUrl' => 'ipyear不是有效的域名或者IP',
'ipyear.url' => 'ipyear不是有效的URL地址',
'ipyear.ip' => 'ipyear不是有效的IP地址',
'ipyear.length' => 'ipyear长度不符',
'ipyear.max' => 'ipyear超出最大长度',
'ipyear.min' => 'ipyear低于最小长度',
'iphalfyear.require' => 'iphalfyear不能为空',
'iphalfyear.number' => 'iphalfyear不是数字',
'iphalfyear.float' => 'iphalfyear不是小数',
'iphalfyear.boolean' => 'iphalfyear不是布尔值',
'iphalfyear.email' => 'iphalfyear不是邮箱地址',
'iphalfyear.array' => 'iphalfyear不是数组',
'iphalfyear.accepted' => 'iphalfyear请确认',
'iphalfyear.date' => 'iphalfyear不是有效日期',
'iphalfyear.alpha' => 'iphalfyear不是字母',
'iphalfyear.alphaNum' => 'iphalfyear不是字母和数字',
'iphalfyear.alphaDash' => 'iphalfyear不是字母和数字和下划线及破折号',
'iphalfyear.chs' => 'iphalfyear只能是汉字',
'iphalfyear.chsAlpha' => 'iphalfyear只能是汉字、字母',
'iphalfyear.chsAlphaNum' => 'iphalfyear只能是汉字、字母和数字',
'iphalfyear.chsDash' => 'iphalfyear只能是汉字、字母、数字和下划线_及破折号-',
'iphalfyear.activeUrl' => 'iphalfyear不是有效的域名或者IP',
'iphalfyear.url' => 'iphalfyear不是有效的URL地址',
'iphalfyear.ip' => 'iphalfyear不是有效的IP地址',
'iphalfyear.length' => 'iphalfyear长度不符',
'iphalfyear.max' => 'iphalfyear超出最大长度',
'iphalfyear.min' => 'iphalfyear低于最小长度',
'ipquarter.require' => 'ipquarter不能为空',
'ipquarter.number' => 'ipquarter不是数字',
'ipquarter.float' => 'ipquarter不是小数',
'ipquarter.boolean' => 'ipquarter不是布尔值',
'ipquarter.email' => 'ipquarter不是邮箱地址',
'ipquarter.array' => 'ipquarter不是数组',
'ipquarter.accepted' => 'ipquarter请确认',
'ipquarter.date' => 'ipquarter不是有效日期',
'ipquarter.alpha' => 'ipquarter不是字母',
'ipquarter.alphaNum' => 'ipquarter不是字母和数字',
'ipquarter.alphaDash' => 'ipquarter不是字母和数字和下划线及破折号',
'ipquarter.chs' => 'ipquarter只能是汉字',
'ipquarter.chsAlpha' => 'ipquarter只能是汉字、字母',
'ipquarter.chsAlphaNum' => 'ipquarter只能是汉字、字母和数字',
'ipquarter.chsDash' => 'ipquarter只能是汉字、字母、数字和下划线_及破折号-',
'ipquarter.activeUrl' => 'ipquarter不是有效的域名或者IP',
'ipquarter.url' => 'ipquarter不是有效的URL地址',
'ipquarter.ip' => 'ipquarter不是有效的IP地址',
'ipquarter.length' => 'ipquarter长度不符',
'ipquarter.max' => 'ipquarter超出最大长度',
'ipquarter.min' => 'ipquarter低于最小长度',
'ipmonth.require' => 'ipmonth不能为空',
'ipmonth.number' => 'ipmonth不是数字',
'ipmonth.float' => 'ipmonth不是小数',
'ipmonth.boolean' => 'ipmonth不是布尔值',
'ipmonth.email' => 'ipmonth不是邮箱地址',
'ipmonth.array' => 'ipmonth不是数组',
'ipmonth.accepted' => 'ipmonth请确认',
'ipmonth.date' => 'ipmonth不是有效日期',
'ipmonth.alpha' => 'ipmonth不是字母',
'ipmonth.alphaNum' => 'ipmonth不是字母和数字',
'ipmonth.alphaDash' => 'ipmonth不是字母和数字和下划线及破折号',
'ipmonth.chs' => 'ipmonth只能是汉字',
'ipmonth.chsAlpha' => 'ipmonth只能是汉字、字母',
'ipmonth.chsAlphaNum' => 'ipmonth只能是汉字、字母和数字',
'ipmonth.chsDash' => 'ipmonth只能是汉字、字母、数字和下划线_及破折号-',
'ipmonth.activeUrl' => 'ipmonth不是有效的域名或者IP',
'ipmonth.url' => 'ipmonth不是有效的URL地址',
'ipmonth.ip' => 'ipmonth不是有效的IP地址',
'ipmonth.length' => 'ipmonth长度不符',
'ipmonth.max' => 'ipmonth超出最大长度',
'ipmonth.min' => 'ipmonth低于最小长度',
'ipweek.require' => 'ipweek不能为空',
'ipweek.number' => 'ipweek不是数字',
'ipweek.float' => 'ipweek不是小数',
'ipweek.boolean' => 'ipweek不是布尔值',
'ipweek.email' => 'ipweek不是邮箱地址',
'ipweek.array' => 'ipweek不是数组',
'ipweek.accepted' => 'ipweek请确认',
'ipweek.date' => 'ipweek不是有效日期',
'ipweek.alpha' => 'ipweek不是字母',
'ipweek.alphaNum' => 'ipweek不是字母和数字',
'ipweek.alphaDash' => 'ipweek不是字母和数字和下划线及破折号',
'ipweek.chs' => 'ipweek只能是汉字',
'ipweek.chsAlpha' => 'ipweek只能是汉字、字母',
'ipweek.chsAlphaNum' => 'ipweek只能是汉字、字母和数字',
'ipweek.chsDash' => 'ipweek只能是汉字、字母、数字和下划线_及破折号-',
'ipweek.activeUrl' => 'ipweek不是有效的域名或者IP',
'ipweek.url' => 'ipweek不是有效的URL地址',
'ipweek.ip' => 'ipweek不是有效的IP地址',
'ipweek.length' => 'ipweek长度不符',
'ipweek.max' => 'ipweek超出最大长度',
'ipweek.min' => 'ipweek低于最小长度',
'ipday.require' => 'ipday不能为空',
'ipday.number' => 'ipday不是数字',
'ipday.float' => 'ipday不是小数',
'ipday.boolean' => 'ipday不是布尔值',
'ipday.email' => 'ipday不是邮箱地址',
'ipday.array' => 'ipday不是数组',
'ipday.accepted' => 'ipday请确认',
'ipday.date' => 'ipday不是有效日期',
'ipday.alpha' => 'ipday不是字母',
'ipday.alphaNum' => 'ipday不是字母和数字',
'ipday.alphaDash' => 'ipday不是字母和数字和下划线及破折号',
'ipday.chs' => 'ipday只能是汉字',
'ipday.chsAlpha' => 'ipday只能是汉字、字母',
'ipday.chsAlphaNum' => 'ipday只能是汉字、字母和数字',
'ipday.chsDash' => 'ipday只能是汉字、字母、数字和下划线_及破折号-',
'ipday.activeUrl' => 'ipday不是有效的域名或者IP',
'ipday.url' => 'ipday不是有效的URL地址',
'ipday.ip' => 'ipday不是有效的IP地址',
'ipday.length' => 'ipday长度不符',
'ipday.max' => 'ipday超出最大长度',
'ipday.min' => 'ipday低于最小长度',
'ipyesterday.require' => 'ipyesterday不能为空',
'ipyesterday.number' => 'ipyesterday不是数字',
'ipyesterday.float' => 'ipyesterday不是小数',
'ipyesterday.boolean' => 'ipyesterday不是布尔值',
'ipyesterday.email' => 'ipyesterday不是邮箱地址',
'ipyesterday.array' => 'ipyesterday不是数组',
'ipyesterday.accepted' => 'ipyesterday请确认',
'ipyesterday.date' => 'ipyesterday不是有效日期',
'ipyesterday.alpha' => 'ipyesterday不是字母',
'ipyesterday.alphaNum' => 'ipyesterday不是字母和数字',
'ipyesterday.alphaDash' => 'ipyesterday不是字母和数字和下划线及破折号',
'ipyesterday.chs' => 'ipyesterday只能是汉字',
'ipyesterday.chsAlpha' => 'ipyesterday只能是汉字、字母',
'ipyesterday.chsAlphaNum' => 'ipyesterday只能是汉字、字母和数字',
'ipyesterday.chsDash' => 'ipyesterday只能是汉字、字母、数字和下划线_及破折号-',
'ipyesterday.activeUrl' => 'ipyesterday不是有效的域名或者IP',
'ipyesterday.url' => 'ipyesterday不是有效的URL地址',
'ipyesterday.ip' => 'ipyesterday不是有效的IP地址',
'ipyesterday.length' => 'ipyesterday长度不符',
'ipyesterday.max' => 'ipyesterday超出最大长度',
'ipyesterday.min' => 'ipyesterday低于最小长度',
];

protected $scene =   [
    'add'=>['classid','uptime','pvall','pvyear','pvhalfyear','pvquarter','pvmonth','pvweek','pvday','pvyesterday','ipall','ipyear','iphalfyear','ipquarter','ipmonth','ipweek','ipday','ipyesterday',],
    'edit'=>['classid','uptime','pvall','pvyear','pvhalfyear','pvquarter','pvmonth','pvweek','pvday','pvyesterday','ipall','ipyear','iphalfyear','ipquarter','ipmonth','ipweek','ipday','ipyesterday',],
    'ck_id'=>['id']
];

}
