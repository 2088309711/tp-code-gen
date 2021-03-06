<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EcmsPhotoDocData extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'keyid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dokey' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstempid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'closepl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'haveaddfen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'infotags' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'filesize' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'picsize' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'picfbl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'picfrom' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'morepic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'num' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'width' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'height' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'keyid.require' => 'keyid不能为空',
'keyid.number' => 'keyid不是数字',
'keyid.float' => 'keyid不是小数',
'keyid.boolean' => 'keyid不是布尔值',
'keyid.email' => 'keyid不是邮箱地址',
'keyid.array' => 'keyid不是数组',
'keyid.accepted' => 'keyid请确认',
'keyid.date' => 'keyid不是有效日期',
'keyid.alpha' => 'keyid不是字母',
'keyid.alphaNum' => 'keyid不是字母和数字',
'keyid.alphaDash' => 'keyid不是字母和数字和下划线及破折号',
'keyid.chs' => 'keyid只能是汉字',
'keyid.chsAlpha' => 'keyid只能是汉字、字母',
'keyid.chsAlphaNum' => 'keyid只能是汉字、字母和数字',
'keyid.chsDash' => 'keyid只能是汉字、字母、数字和下划线_及破折号-',
'keyid.activeUrl' => 'keyid不是有效的域名或者IP',
'keyid.url' => 'keyid不是有效的URL地址',
'keyid.ip' => 'keyid不是有效的IP地址',
'keyid.length' => 'keyid长度不符',
'keyid.max' => 'keyid超出最大长度',
'keyid.min' => 'keyid低于最小长度',
'dokey.require' => 'dokey不能为空',
'dokey.number' => 'dokey不是数字',
'dokey.float' => 'dokey不是小数',
'dokey.boolean' => 'dokey不是布尔值',
'dokey.email' => 'dokey不是邮箱地址',
'dokey.array' => 'dokey不是数组',
'dokey.accepted' => 'dokey请确认',
'dokey.date' => 'dokey不是有效日期',
'dokey.alpha' => 'dokey不是字母',
'dokey.alphaNum' => 'dokey不是字母和数字',
'dokey.alphaDash' => 'dokey不是字母和数字和下划线及破折号',
'dokey.chs' => 'dokey只能是汉字',
'dokey.chsAlpha' => 'dokey只能是汉字、字母',
'dokey.chsAlphaNum' => 'dokey只能是汉字、字母和数字',
'dokey.chsDash' => 'dokey只能是汉字、字母、数字和下划线_及破折号-',
'dokey.activeUrl' => 'dokey不是有效的域名或者IP',
'dokey.url' => 'dokey不是有效的URL地址',
'dokey.ip' => 'dokey不是有效的IP地址',
'dokey.length' => 'dokey长度不符',
'dokey.max' => 'dokey超出最大长度',
'dokey.min' => 'dokey低于最小长度',
'newstempid.require' => 'newstempid不能为空',
'newstempid.number' => 'newstempid不是数字',
'newstempid.float' => 'newstempid不是小数',
'newstempid.boolean' => 'newstempid不是布尔值',
'newstempid.email' => 'newstempid不是邮箱地址',
'newstempid.array' => 'newstempid不是数组',
'newstempid.accepted' => 'newstempid请确认',
'newstempid.date' => 'newstempid不是有效日期',
'newstempid.alpha' => 'newstempid不是字母',
'newstempid.alphaNum' => 'newstempid不是字母和数字',
'newstempid.alphaDash' => 'newstempid不是字母和数字和下划线及破折号',
'newstempid.chs' => 'newstempid只能是汉字',
'newstempid.chsAlpha' => 'newstempid只能是汉字、字母',
'newstempid.chsAlphaNum' => 'newstempid只能是汉字、字母和数字',
'newstempid.chsDash' => 'newstempid只能是汉字、字母、数字和下划线_及破折号-',
'newstempid.activeUrl' => 'newstempid不是有效的域名或者IP',
'newstempid.url' => 'newstempid不是有效的URL地址',
'newstempid.ip' => 'newstempid不是有效的IP地址',
'newstempid.length' => 'newstempid长度不符',
'newstempid.max' => 'newstempid超出最大长度',
'newstempid.min' => 'newstempid低于最小长度',
'closepl.require' => 'closepl不能为空',
'closepl.number' => 'closepl不是数字',
'closepl.float' => 'closepl不是小数',
'closepl.boolean' => 'closepl不是布尔值',
'closepl.email' => 'closepl不是邮箱地址',
'closepl.array' => 'closepl不是数组',
'closepl.accepted' => 'closepl请确认',
'closepl.date' => 'closepl不是有效日期',
'closepl.alpha' => 'closepl不是字母',
'closepl.alphaNum' => 'closepl不是字母和数字',
'closepl.alphaDash' => 'closepl不是字母和数字和下划线及破折号',
'closepl.chs' => 'closepl只能是汉字',
'closepl.chsAlpha' => 'closepl只能是汉字、字母',
'closepl.chsAlphaNum' => 'closepl只能是汉字、字母和数字',
'closepl.chsDash' => 'closepl只能是汉字、字母、数字和下划线_及破折号-',
'closepl.activeUrl' => 'closepl不是有效的域名或者IP',
'closepl.url' => 'closepl不是有效的URL地址',
'closepl.ip' => 'closepl不是有效的IP地址',
'closepl.length' => 'closepl长度不符',
'closepl.max' => 'closepl超出最大长度',
'closepl.min' => 'closepl低于最小长度',
'haveaddfen.require' => 'haveaddfen不能为空',
'haveaddfen.number' => 'haveaddfen不是数字',
'haveaddfen.float' => 'haveaddfen不是小数',
'haveaddfen.boolean' => 'haveaddfen不是布尔值',
'haveaddfen.email' => 'haveaddfen不是邮箱地址',
'haveaddfen.array' => 'haveaddfen不是数组',
'haveaddfen.accepted' => 'haveaddfen请确认',
'haveaddfen.date' => 'haveaddfen不是有效日期',
'haveaddfen.alpha' => 'haveaddfen不是字母',
'haveaddfen.alphaNum' => 'haveaddfen不是字母和数字',
'haveaddfen.alphaDash' => 'haveaddfen不是字母和数字和下划线及破折号',
'haveaddfen.chs' => 'haveaddfen只能是汉字',
'haveaddfen.chsAlpha' => 'haveaddfen只能是汉字、字母',
'haveaddfen.chsAlphaNum' => 'haveaddfen只能是汉字、字母和数字',
'haveaddfen.chsDash' => 'haveaddfen只能是汉字、字母、数字和下划线_及破折号-',
'haveaddfen.activeUrl' => 'haveaddfen不是有效的域名或者IP',
'haveaddfen.url' => 'haveaddfen不是有效的URL地址',
'haveaddfen.ip' => 'haveaddfen不是有效的IP地址',
'haveaddfen.length' => 'haveaddfen长度不符',
'haveaddfen.max' => 'haveaddfen超出最大长度',
'haveaddfen.min' => 'haveaddfen低于最小长度',
'infotags.require' => 'infotags不能为空',
'infotags.number' => 'infotags不是数字',
'infotags.float' => 'infotags不是小数',
'infotags.boolean' => 'infotags不是布尔值',
'infotags.email' => 'infotags不是邮箱地址',
'infotags.array' => 'infotags不是数组',
'infotags.accepted' => 'infotags请确认',
'infotags.date' => 'infotags不是有效日期',
'infotags.alpha' => 'infotags不是字母',
'infotags.alphaNum' => 'infotags不是字母和数字',
'infotags.alphaDash' => 'infotags不是字母和数字和下划线及破折号',
'infotags.chs' => 'infotags只能是汉字',
'infotags.chsAlpha' => 'infotags只能是汉字、字母',
'infotags.chsAlphaNum' => 'infotags只能是汉字、字母和数字',
'infotags.chsDash' => 'infotags只能是汉字、字母、数字和下划线_及破折号-',
'infotags.activeUrl' => 'infotags不是有效的域名或者IP',
'infotags.url' => 'infotags不是有效的URL地址',
'infotags.ip' => 'infotags不是有效的IP地址',
'infotags.length' => 'infotags长度不符',
'infotags.max' => 'infotags超出最大长度',
'infotags.min' => 'infotags低于最小长度',
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
'picsize.require' => 'picsize不能为空',
'picsize.number' => 'picsize不是数字',
'picsize.float' => 'picsize不是小数',
'picsize.boolean' => 'picsize不是布尔值',
'picsize.email' => 'picsize不是邮箱地址',
'picsize.array' => 'picsize不是数组',
'picsize.accepted' => 'picsize请确认',
'picsize.date' => 'picsize不是有效日期',
'picsize.alpha' => 'picsize不是字母',
'picsize.alphaNum' => 'picsize不是字母和数字',
'picsize.alphaDash' => 'picsize不是字母和数字和下划线及破折号',
'picsize.chs' => 'picsize只能是汉字',
'picsize.chsAlpha' => 'picsize只能是汉字、字母',
'picsize.chsAlphaNum' => 'picsize只能是汉字、字母和数字',
'picsize.chsDash' => 'picsize只能是汉字、字母、数字和下划线_及破折号-',
'picsize.activeUrl' => 'picsize不是有效的域名或者IP',
'picsize.url' => 'picsize不是有效的URL地址',
'picsize.ip' => 'picsize不是有效的IP地址',
'picsize.length' => 'picsize长度不符',
'picsize.max' => 'picsize超出最大长度',
'picsize.min' => 'picsize低于最小长度',
'picfbl.require' => 'picfbl不能为空',
'picfbl.number' => 'picfbl不是数字',
'picfbl.float' => 'picfbl不是小数',
'picfbl.boolean' => 'picfbl不是布尔值',
'picfbl.email' => 'picfbl不是邮箱地址',
'picfbl.array' => 'picfbl不是数组',
'picfbl.accepted' => 'picfbl请确认',
'picfbl.date' => 'picfbl不是有效日期',
'picfbl.alpha' => 'picfbl不是字母',
'picfbl.alphaNum' => 'picfbl不是字母和数字',
'picfbl.alphaDash' => 'picfbl不是字母和数字和下划线及破折号',
'picfbl.chs' => 'picfbl只能是汉字',
'picfbl.chsAlpha' => 'picfbl只能是汉字、字母',
'picfbl.chsAlphaNum' => 'picfbl只能是汉字、字母和数字',
'picfbl.chsDash' => 'picfbl只能是汉字、字母、数字和下划线_及破折号-',
'picfbl.activeUrl' => 'picfbl不是有效的域名或者IP',
'picfbl.url' => 'picfbl不是有效的URL地址',
'picfbl.ip' => 'picfbl不是有效的IP地址',
'picfbl.length' => 'picfbl长度不符',
'picfbl.max' => 'picfbl超出最大长度',
'picfbl.min' => 'picfbl低于最小长度',
'picfrom.require' => 'picfrom不能为空',
'picfrom.number' => 'picfrom不是数字',
'picfrom.float' => 'picfrom不是小数',
'picfrom.boolean' => 'picfrom不是布尔值',
'picfrom.email' => 'picfrom不是邮箱地址',
'picfrom.array' => 'picfrom不是数组',
'picfrom.accepted' => 'picfrom请确认',
'picfrom.date' => 'picfrom不是有效日期',
'picfrom.alpha' => 'picfrom不是字母',
'picfrom.alphaNum' => 'picfrom不是字母和数字',
'picfrom.alphaDash' => 'picfrom不是字母和数字和下划线及破折号',
'picfrom.chs' => 'picfrom只能是汉字',
'picfrom.chsAlpha' => 'picfrom只能是汉字、字母',
'picfrom.chsAlphaNum' => 'picfrom只能是汉字、字母和数字',
'picfrom.chsDash' => 'picfrom只能是汉字、字母、数字和下划线_及破折号-',
'picfrom.activeUrl' => 'picfrom不是有效的域名或者IP',
'picfrom.url' => 'picfrom不是有效的URL地址',
'picfrom.ip' => 'picfrom不是有效的IP地址',
'picfrom.length' => 'picfrom长度不符',
'picfrom.max' => 'picfrom超出最大长度',
'picfrom.min' => 'picfrom低于最小长度',
'morepic.require' => 'morepic不能为空',
'morepic.number' => 'morepic不是数字',
'morepic.float' => 'morepic不是小数',
'morepic.boolean' => 'morepic不是布尔值',
'morepic.email' => 'morepic不是邮箱地址',
'morepic.array' => 'morepic不是数组',
'morepic.accepted' => 'morepic请确认',
'morepic.date' => 'morepic不是有效日期',
'morepic.alpha' => 'morepic不是字母',
'morepic.alphaNum' => 'morepic不是字母和数字',
'morepic.alphaDash' => 'morepic不是字母和数字和下划线及破折号',
'morepic.chs' => 'morepic只能是汉字',
'morepic.chsAlpha' => 'morepic只能是汉字、字母',
'morepic.chsAlphaNum' => 'morepic只能是汉字、字母和数字',
'morepic.chsDash' => 'morepic只能是汉字、字母、数字和下划线_及破折号-',
'morepic.activeUrl' => 'morepic不是有效的域名或者IP',
'morepic.url' => 'morepic不是有效的URL地址',
'morepic.ip' => 'morepic不是有效的IP地址',
'morepic.length' => 'morepic长度不符',
'morepic.max' => 'morepic超出最大长度',
'morepic.min' => 'morepic低于最小长度',
'num.require' => 'num不能为空',
'num.number' => 'num不是数字',
'num.float' => 'num不是小数',
'num.boolean' => 'num不是布尔值',
'num.email' => 'num不是邮箱地址',
'num.array' => 'num不是数组',
'num.accepted' => 'num请确认',
'num.date' => 'num不是有效日期',
'num.alpha' => 'num不是字母',
'num.alphaNum' => 'num不是字母和数字',
'num.alphaDash' => 'num不是字母和数字和下划线及破折号',
'num.chs' => 'num只能是汉字',
'num.chsAlpha' => 'num只能是汉字、字母',
'num.chsAlphaNum' => 'num只能是汉字、字母和数字',
'num.chsDash' => 'num只能是汉字、字母、数字和下划线_及破折号-',
'num.activeUrl' => 'num不是有效的域名或者IP',
'num.url' => 'num不是有效的URL地址',
'num.ip' => 'num不是有效的IP地址',
'num.length' => 'num长度不符',
'num.max' => 'num超出最大长度',
'num.min' => 'num低于最小长度',
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
];

protected $scene =   [
    'add'=>['id','classid','keyid','dokey','newstempid','closepl','haveaddfen','infotags','filesize','picsize','picfbl','picfrom','morepic','num','width','height',],
    'edit'=>['id','classid','keyid','dokey','newstempid','closepl','haveaddfen','infotags','filesize','picsize','picfbl','picfrom','morepic','num','width','height',],
    'ck_id'=>['id']
];

}
