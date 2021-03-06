<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsinfovote extends Validate{

protected $rule =   [
        'pubid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'votenum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'voteip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'votetext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'voteclass' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'doip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dotime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'width' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'height' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'diyotherlink' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'infouptime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'infodowntime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'copyids' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'pubid.require' => 'pubid不能为空',
'pubid.number' => 'pubid不是数字',
'pubid.float' => 'pubid不是小数',
'pubid.boolean' => 'pubid不是布尔值',
'pubid.email' => 'pubid不是邮箱地址',
'pubid.array' => 'pubid不是数组',
'pubid.accepted' => 'pubid请确认',
'pubid.date' => 'pubid不是有效日期',
'pubid.alpha' => 'pubid不是字母',
'pubid.alphaNum' => 'pubid不是字母和数字',
'pubid.alphaDash' => 'pubid不是字母和数字和下划线及破折号',
'pubid.chs' => 'pubid只能是汉字',
'pubid.chsAlpha' => 'pubid只能是汉字、字母',
'pubid.chsAlphaNum' => 'pubid只能是汉字、字母和数字',
'pubid.chsDash' => 'pubid只能是汉字、字母、数字和下划线_及破折号-',
'pubid.activeUrl' => 'pubid不是有效的域名或者IP',
'pubid.url' => 'pubid不是有效的URL地址',
'pubid.ip' => 'pubid不是有效的IP地址',
'pubid.length' => 'pubid长度不符',
'pubid.max' => 'pubid超出最大长度',
'pubid.min' => 'pubid低于最小长度',
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
'votenum.require' => 'votenum不能为空',
'votenum.number' => 'votenum不是数字',
'votenum.float' => 'votenum不是小数',
'votenum.boolean' => 'votenum不是布尔值',
'votenum.email' => 'votenum不是邮箱地址',
'votenum.array' => 'votenum不是数组',
'votenum.accepted' => 'votenum请确认',
'votenum.date' => 'votenum不是有效日期',
'votenum.alpha' => 'votenum不是字母',
'votenum.alphaNum' => 'votenum不是字母和数字',
'votenum.alphaDash' => 'votenum不是字母和数字和下划线及破折号',
'votenum.chs' => 'votenum只能是汉字',
'votenum.chsAlpha' => 'votenum只能是汉字、字母',
'votenum.chsAlphaNum' => 'votenum只能是汉字、字母和数字',
'votenum.chsDash' => 'votenum只能是汉字、字母、数字和下划线_及破折号-',
'votenum.activeUrl' => 'votenum不是有效的域名或者IP',
'votenum.url' => 'votenum不是有效的URL地址',
'votenum.ip' => 'votenum不是有效的IP地址',
'votenum.length' => 'votenum长度不符',
'votenum.max' => 'votenum超出最大长度',
'votenum.min' => 'votenum低于最小长度',
'voteip.require' => 'voteip不能为空',
'voteip.number' => 'voteip不是数字',
'voteip.float' => 'voteip不是小数',
'voteip.boolean' => 'voteip不是布尔值',
'voteip.email' => 'voteip不是邮箱地址',
'voteip.array' => 'voteip不是数组',
'voteip.accepted' => 'voteip请确认',
'voteip.date' => 'voteip不是有效日期',
'voteip.alpha' => 'voteip不是字母',
'voteip.alphaNum' => 'voteip不是字母和数字',
'voteip.alphaDash' => 'voteip不是字母和数字和下划线及破折号',
'voteip.chs' => 'voteip只能是汉字',
'voteip.chsAlpha' => 'voteip只能是汉字、字母',
'voteip.chsAlphaNum' => 'voteip只能是汉字、字母和数字',
'voteip.chsDash' => 'voteip只能是汉字、字母、数字和下划线_及破折号-',
'voteip.activeUrl' => 'voteip不是有效的域名或者IP',
'voteip.url' => 'voteip不是有效的URL地址',
'voteip.ip' => 'voteip不是有效的IP地址',
'voteip.length' => 'voteip长度不符',
'voteip.max' => 'voteip超出最大长度',
'voteip.min' => 'voteip低于最小长度',
'votetext.require' => 'votetext不能为空',
'votetext.number' => 'votetext不是数字',
'votetext.float' => 'votetext不是小数',
'votetext.boolean' => 'votetext不是布尔值',
'votetext.email' => 'votetext不是邮箱地址',
'votetext.array' => 'votetext不是数组',
'votetext.accepted' => 'votetext请确认',
'votetext.date' => 'votetext不是有效日期',
'votetext.alpha' => 'votetext不是字母',
'votetext.alphaNum' => 'votetext不是字母和数字',
'votetext.alphaDash' => 'votetext不是字母和数字和下划线及破折号',
'votetext.chs' => 'votetext只能是汉字',
'votetext.chsAlpha' => 'votetext只能是汉字、字母',
'votetext.chsAlphaNum' => 'votetext只能是汉字、字母和数字',
'votetext.chsDash' => 'votetext只能是汉字、字母、数字和下划线_及破折号-',
'votetext.activeUrl' => 'votetext不是有效的域名或者IP',
'votetext.url' => 'votetext不是有效的URL地址',
'votetext.ip' => 'votetext不是有效的IP地址',
'votetext.length' => 'votetext长度不符',
'votetext.max' => 'votetext超出最大长度',
'votetext.min' => 'votetext低于最小长度',
'voteclass.require' => 'voteclass不能为空',
'voteclass.number' => 'voteclass不是数字',
'voteclass.float' => 'voteclass不是小数',
'voteclass.boolean' => 'voteclass不是布尔值',
'voteclass.email' => 'voteclass不是邮箱地址',
'voteclass.array' => 'voteclass不是数组',
'voteclass.accepted' => 'voteclass请确认',
'voteclass.date' => 'voteclass不是有效日期',
'voteclass.alpha' => 'voteclass不是字母',
'voteclass.alphaNum' => 'voteclass不是字母和数字',
'voteclass.alphaDash' => 'voteclass不是字母和数字和下划线及破折号',
'voteclass.chs' => 'voteclass只能是汉字',
'voteclass.chsAlpha' => 'voteclass只能是汉字、字母',
'voteclass.chsAlphaNum' => 'voteclass只能是汉字、字母和数字',
'voteclass.chsDash' => 'voteclass只能是汉字、字母、数字和下划线_及破折号-',
'voteclass.activeUrl' => 'voteclass不是有效的域名或者IP',
'voteclass.url' => 'voteclass不是有效的URL地址',
'voteclass.ip' => 'voteclass不是有效的IP地址',
'voteclass.length' => 'voteclass长度不符',
'voteclass.max' => 'voteclass超出最大长度',
'voteclass.min' => 'voteclass低于最小长度',
'doip.require' => 'doip不能为空',
'doip.number' => 'doip不是数字',
'doip.float' => 'doip不是小数',
'doip.boolean' => 'doip不是布尔值',
'doip.email' => 'doip不是邮箱地址',
'doip.array' => 'doip不是数组',
'doip.accepted' => 'doip请确认',
'doip.date' => 'doip不是有效日期',
'doip.alpha' => 'doip不是字母',
'doip.alphaNum' => 'doip不是字母和数字',
'doip.alphaDash' => 'doip不是字母和数字和下划线及破折号',
'doip.chs' => 'doip只能是汉字',
'doip.chsAlpha' => 'doip只能是汉字、字母',
'doip.chsAlphaNum' => 'doip只能是汉字、字母和数字',
'doip.chsDash' => 'doip只能是汉字、字母、数字和下划线_及破折号-',
'doip.activeUrl' => 'doip不是有效的域名或者IP',
'doip.url' => 'doip不是有效的URL地址',
'doip.ip' => 'doip不是有效的IP地址',
'doip.length' => 'doip长度不符',
'doip.max' => 'doip超出最大长度',
'doip.min' => 'doip低于最小长度',
'dotime.require' => 'dotime不能为空',
'dotime.number' => 'dotime不是数字',
'dotime.float' => 'dotime不是小数',
'dotime.boolean' => 'dotime不是布尔值',
'dotime.email' => 'dotime不是邮箱地址',
'dotime.array' => 'dotime不是数组',
'dotime.accepted' => 'dotime请确认',
'dotime.date' => 'dotime不是有效日期',
'dotime.alpha' => 'dotime不是字母',
'dotime.alphaNum' => 'dotime不是字母和数字',
'dotime.alphaDash' => 'dotime不是字母和数字和下划线及破折号',
'dotime.chs' => 'dotime只能是汉字',
'dotime.chsAlpha' => 'dotime只能是汉字、字母',
'dotime.chsAlphaNum' => 'dotime只能是汉字、字母和数字',
'dotime.chsDash' => 'dotime只能是汉字、字母、数字和下划线_及破折号-',
'dotime.activeUrl' => 'dotime不是有效的域名或者IP',
'dotime.url' => 'dotime不是有效的URL地址',
'dotime.ip' => 'dotime不是有效的IP地址',
'dotime.length' => 'dotime长度不符',
'dotime.max' => 'dotime超出最大长度',
'dotime.min' => 'dotime低于最小长度',
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
'diyotherlink.require' => 'diyotherlink不能为空',
'diyotherlink.number' => 'diyotherlink不是数字',
'diyotherlink.float' => 'diyotherlink不是小数',
'diyotherlink.boolean' => 'diyotherlink不是布尔值',
'diyotherlink.email' => 'diyotherlink不是邮箱地址',
'diyotherlink.array' => 'diyotherlink不是数组',
'diyotherlink.accepted' => 'diyotherlink请确认',
'diyotherlink.date' => 'diyotherlink不是有效日期',
'diyotherlink.alpha' => 'diyotherlink不是字母',
'diyotherlink.alphaNum' => 'diyotherlink不是字母和数字',
'diyotherlink.alphaDash' => 'diyotherlink不是字母和数字和下划线及破折号',
'diyotherlink.chs' => 'diyotherlink只能是汉字',
'diyotherlink.chsAlpha' => 'diyotherlink只能是汉字、字母',
'diyotherlink.chsAlphaNum' => 'diyotherlink只能是汉字、字母和数字',
'diyotherlink.chsDash' => 'diyotherlink只能是汉字、字母、数字和下划线_及破折号-',
'diyotherlink.activeUrl' => 'diyotherlink不是有效的域名或者IP',
'diyotherlink.url' => 'diyotherlink不是有效的URL地址',
'diyotherlink.ip' => 'diyotherlink不是有效的IP地址',
'diyotherlink.length' => 'diyotherlink长度不符',
'diyotherlink.max' => 'diyotherlink超出最大长度',
'diyotherlink.min' => 'diyotherlink低于最小长度',
'infouptime.require' => 'infouptime不能为空',
'infouptime.number' => 'infouptime不是数字',
'infouptime.float' => 'infouptime不是小数',
'infouptime.boolean' => 'infouptime不是布尔值',
'infouptime.email' => 'infouptime不是邮箱地址',
'infouptime.array' => 'infouptime不是数组',
'infouptime.accepted' => 'infouptime请确认',
'infouptime.date' => 'infouptime不是有效日期',
'infouptime.alpha' => 'infouptime不是字母',
'infouptime.alphaNum' => 'infouptime不是字母和数字',
'infouptime.alphaDash' => 'infouptime不是字母和数字和下划线及破折号',
'infouptime.chs' => 'infouptime只能是汉字',
'infouptime.chsAlpha' => 'infouptime只能是汉字、字母',
'infouptime.chsAlphaNum' => 'infouptime只能是汉字、字母和数字',
'infouptime.chsDash' => 'infouptime只能是汉字、字母、数字和下划线_及破折号-',
'infouptime.activeUrl' => 'infouptime不是有效的域名或者IP',
'infouptime.url' => 'infouptime不是有效的URL地址',
'infouptime.ip' => 'infouptime不是有效的IP地址',
'infouptime.length' => 'infouptime长度不符',
'infouptime.max' => 'infouptime超出最大长度',
'infouptime.min' => 'infouptime低于最小长度',
'infodowntime.require' => 'infodowntime不能为空',
'infodowntime.number' => 'infodowntime不是数字',
'infodowntime.float' => 'infodowntime不是小数',
'infodowntime.boolean' => 'infodowntime不是布尔值',
'infodowntime.email' => 'infodowntime不是邮箱地址',
'infodowntime.array' => 'infodowntime不是数组',
'infodowntime.accepted' => 'infodowntime请确认',
'infodowntime.date' => 'infodowntime不是有效日期',
'infodowntime.alpha' => 'infodowntime不是字母',
'infodowntime.alphaNum' => 'infodowntime不是字母和数字',
'infodowntime.alphaDash' => 'infodowntime不是字母和数字和下划线及破折号',
'infodowntime.chs' => 'infodowntime只能是汉字',
'infodowntime.chsAlpha' => 'infodowntime只能是汉字、字母',
'infodowntime.chsAlphaNum' => 'infodowntime只能是汉字、字母和数字',
'infodowntime.chsDash' => 'infodowntime只能是汉字、字母、数字和下划线_及破折号-',
'infodowntime.activeUrl' => 'infodowntime不是有效的域名或者IP',
'infodowntime.url' => 'infodowntime不是有效的URL地址',
'infodowntime.ip' => 'infodowntime不是有效的IP地址',
'infodowntime.length' => 'infodowntime长度不符',
'infodowntime.max' => 'infodowntime超出最大长度',
'infodowntime.min' => 'infodowntime低于最小长度',
'copyids.require' => 'copyids不能为空',
'copyids.number' => 'copyids不是数字',
'copyids.float' => 'copyids不是小数',
'copyids.boolean' => 'copyids不是布尔值',
'copyids.email' => 'copyids不是邮箱地址',
'copyids.array' => 'copyids不是数组',
'copyids.accepted' => 'copyids请确认',
'copyids.date' => 'copyids不是有效日期',
'copyids.alpha' => 'copyids不是字母',
'copyids.alphaNum' => 'copyids不是字母和数字',
'copyids.alphaDash' => 'copyids不是字母和数字和下划线及破折号',
'copyids.chs' => 'copyids只能是汉字',
'copyids.chsAlpha' => 'copyids只能是汉字、字母',
'copyids.chsAlphaNum' => 'copyids只能是汉字、字母和数字',
'copyids.chsDash' => 'copyids只能是汉字、字母、数字和下划线_及破折号-',
'copyids.activeUrl' => 'copyids不是有效的域名或者IP',
'copyids.url' => 'copyids不是有效的URL地址',
'copyids.ip' => 'copyids不是有效的IP地址',
'copyids.length' => 'copyids长度不符',
'copyids.max' => 'copyids超出最大长度',
'copyids.min' => 'copyids低于最小长度',
];

protected $scene =   [
    'add'=>['pubid','id','classid','title','votenum','voteip','votetext','voteclass','doip','dotime','tempid','width','height','diyotherlink','infouptime','infodowntime','copyids',],
    'edit'=>['pubid','id','classid','title','votenum','voteip','votetext','voteclass','doip','dotime','tempid','width','height','diyotherlink','infouptime','infodowntime','copyids',],
    'ck_id'=>['id']
];

}
