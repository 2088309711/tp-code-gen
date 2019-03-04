<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsvote extends Validate{

protected $rule =   [
        'voteid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'votenum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'voteip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'votetext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'voteclass' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'doip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'votetime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dotime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'width' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'height' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'addtime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'voteid.require' => 'voteid不能为空',
'voteid.number' => 'voteid不是数字',
'voteid.float' => 'voteid不是小数',
'voteid.boolean' => 'voteid不是布尔值',
'voteid.email' => 'voteid不是邮箱地址',
'voteid.array' => 'voteid不是数组',
'voteid.accepted' => 'voteid请确认',
'voteid.date' => 'voteid不是有效日期',
'voteid.alpha' => 'voteid不是字母',
'voteid.alphaNum' => 'voteid不是字母和数字',
'voteid.alphaDash' => 'voteid不是字母和数字和下划线及破折号',
'voteid.chs' => 'voteid只能是汉字',
'voteid.chsAlpha' => 'voteid只能是汉字、字母',
'voteid.chsAlphaNum' => 'voteid只能是汉字、字母和数字',
'voteid.chsDash' => 'voteid只能是汉字、字母、数字和下划线_及破折号-',
'voteid.activeUrl' => 'voteid不是有效的域名或者IP',
'voteid.url' => 'voteid不是有效的URL地址',
'voteid.ip' => 'voteid不是有效的IP地址',
'voteid.length' => 'voteid长度不符',
'voteid.max' => 'voteid超出最大长度',
'voteid.min' => 'voteid低于最小长度',
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
'votetime.require' => 'votetime不能为空',
'votetime.number' => 'votetime不是数字',
'votetime.float' => 'votetime不是小数',
'votetime.boolean' => 'votetime不是布尔值',
'votetime.email' => 'votetime不是邮箱地址',
'votetime.array' => 'votetime不是数组',
'votetime.accepted' => 'votetime请确认',
'votetime.date' => 'votetime不是有效日期',
'votetime.alpha' => 'votetime不是字母',
'votetime.alphaNum' => 'votetime不是字母和数字',
'votetime.alphaDash' => 'votetime不是字母和数字和下划线及破折号',
'votetime.chs' => 'votetime只能是汉字',
'votetime.chsAlpha' => 'votetime只能是汉字、字母',
'votetime.chsAlphaNum' => 'votetime只能是汉字、字母和数字',
'votetime.chsDash' => 'votetime只能是汉字、字母、数字和下划线_及破折号-',
'votetime.activeUrl' => 'votetime不是有效的域名或者IP',
'votetime.url' => 'votetime不是有效的URL地址',
'votetime.ip' => 'votetime不是有效的IP地址',
'votetime.length' => 'votetime长度不符',
'votetime.max' => 'votetime超出最大长度',
'votetime.min' => 'votetime低于最小长度',
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
'addtime.require' => 'addtime不能为空',
'addtime.number' => 'addtime不是数字',
'addtime.float' => 'addtime不是小数',
'addtime.boolean' => 'addtime不是布尔值',
'addtime.email' => 'addtime不是邮箱地址',
'addtime.array' => 'addtime不是数组',
'addtime.accepted' => 'addtime请确认',
'addtime.date' => 'addtime不是有效日期',
'addtime.alpha' => 'addtime不是字母',
'addtime.alphaNum' => 'addtime不是字母和数字',
'addtime.alphaDash' => 'addtime不是字母和数字和下划线及破折号',
'addtime.chs' => 'addtime只能是汉字',
'addtime.chsAlpha' => 'addtime只能是汉字、字母',
'addtime.chsAlphaNum' => 'addtime只能是汉字、字母和数字',
'addtime.chsDash' => 'addtime只能是汉字、字母、数字和下划线_及破折号-',
'addtime.activeUrl' => 'addtime不是有效的域名或者IP',
'addtime.url' => 'addtime不是有效的URL地址',
'addtime.ip' => 'addtime不是有效的IP地址',
'addtime.length' => 'addtime长度不符',
'addtime.max' => 'addtime超出最大长度',
'addtime.min' => 'addtime低于最小长度',
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
];

protected $scene =   [
    'add'=>['voteid','title','votenum','voteip','votetext','voteclass','doip','votetime','dotime','width','height','addtime','tempid',],
    'edit'=>['voteid','title','votenum','voteip','votetext','voteclass','doip','votetime','dotime','width','height','addtime','tempid',],
    'ck_id'=>['id']
];

}
