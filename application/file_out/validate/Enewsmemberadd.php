<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsmemberadd extends Validate{

protected $rule =   [
        'userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'truename' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'oicq' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'msn' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'mycall' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'phone' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'address' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'zip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'spacestyleid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'homepage' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'saytext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'company' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fax' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userpic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'spacename' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'spacegg' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'viewstats' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'regip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lasttime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lastip' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'loginnum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'regipport' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lastipport' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
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
'truename.require' => 'truename不能为空',
'truename.number' => 'truename不是数字',
'truename.float' => 'truename不是小数',
'truename.boolean' => 'truename不是布尔值',
'truename.email' => 'truename不是邮箱地址',
'truename.array' => 'truename不是数组',
'truename.accepted' => 'truename请确认',
'truename.date' => 'truename不是有效日期',
'truename.alpha' => 'truename不是字母',
'truename.alphaNum' => 'truename不是字母和数字',
'truename.alphaDash' => 'truename不是字母和数字和下划线及破折号',
'truename.chs' => 'truename只能是汉字',
'truename.chsAlpha' => 'truename只能是汉字、字母',
'truename.chsAlphaNum' => 'truename只能是汉字、字母和数字',
'truename.chsDash' => 'truename只能是汉字、字母、数字和下划线_及破折号-',
'truename.activeUrl' => 'truename不是有效的域名或者IP',
'truename.url' => 'truename不是有效的URL地址',
'truename.ip' => 'truename不是有效的IP地址',
'truename.length' => 'truename长度不符',
'truename.max' => 'truename超出最大长度',
'truename.min' => 'truename低于最小长度',
'oicq.require' => 'oicq不能为空',
'oicq.number' => 'oicq不是数字',
'oicq.float' => 'oicq不是小数',
'oicq.boolean' => 'oicq不是布尔值',
'oicq.email' => 'oicq不是邮箱地址',
'oicq.array' => 'oicq不是数组',
'oicq.accepted' => 'oicq请确认',
'oicq.date' => 'oicq不是有效日期',
'oicq.alpha' => 'oicq不是字母',
'oicq.alphaNum' => 'oicq不是字母和数字',
'oicq.alphaDash' => 'oicq不是字母和数字和下划线及破折号',
'oicq.chs' => 'oicq只能是汉字',
'oicq.chsAlpha' => 'oicq只能是汉字、字母',
'oicq.chsAlphaNum' => 'oicq只能是汉字、字母和数字',
'oicq.chsDash' => 'oicq只能是汉字、字母、数字和下划线_及破折号-',
'oicq.activeUrl' => 'oicq不是有效的域名或者IP',
'oicq.url' => 'oicq不是有效的URL地址',
'oicq.ip' => 'oicq不是有效的IP地址',
'oicq.length' => 'oicq长度不符',
'oicq.max' => 'oicq超出最大长度',
'oicq.min' => 'oicq低于最小长度',
'msn.require' => 'msn不能为空',
'msn.number' => 'msn不是数字',
'msn.float' => 'msn不是小数',
'msn.boolean' => 'msn不是布尔值',
'msn.email' => 'msn不是邮箱地址',
'msn.array' => 'msn不是数组',
'msn.accepted' => 'msn请确认',
'msn.date' => 'msn不是有效日期',
'msn.alpha' => 'msn不是字母',
'msn.alphaNum' => 'msn不是字母和数字',
'msn.alphaDash' => 'msn不是字母和数字和下划线及破折号',
'msn.chs' => 'msn只能是汉字',
'msn.chsAlpha' => 'msn只能是汉字、字母',
'msn.chsAlphaNum' => 'msn只能是汉字、字母和数字',
'msn.chsDash' => 'msn只能是汉字、字母、数字和下划线_及破折号-',
'msn.activeUrl' => 'msn不是有效的域名或者IP',
'msn.url' => 'msn不是有效的URL地址',
'msn.ip' => 'msn不是有效的IP地址',
'msn.length' => 'msn长度不符',
'msn.max' => 'msn超出最大长度',
'msn.min' => 'msn低于最小长度',
'mycall.require' => 'mycall不能为空',
'mycall.number' => 'mycall不是数字',
'mycall.float' => 'mycall不是小数',
'mycall.boolean' => 'mycall不是布尔值',
'mycall.email' => 'mycall不是邮箱地址',
'mycall.array' => 'mycall不是数组',
'mycall.accepted' => 'mycall请确认',
'mycall.date' => 'mycall不是有效日期',
'mycall.alpha' => 'mycall不是字母',
'mycall.alphaNum' => 'mycall不是字母和数字',
'mycall.alphaDash' => 'mycall不是字母和数字和下划线及破折号',
'mycall.chs' => 'mycall只能是汉字',
'mycall.chsAlpha' => 'mycall只能是汉字、字母',
'mycall.chsAlphaNum' => 'mycall只能是汉字、字母和数字',
'mycall.chsDash' => 'mycall只能是汉字、字母、数字和下划线_及破折号-',
'mycall.activeUrl' => 'mycall不是有效的域名或者IP',
'mycall.url' => 'mycall不是有效的URL地址',
'mycall.ip' => 'mycall不是有效的IP地址',
'mycall.length' => 'mycall长度不符',
'mycall.max' => 'mycall超出最大长度',
'mycall.min' => 'mycall低于最小长度',
'phone.require' => 'phone不能为空',
'phone.number' => 'phone不是数字',
'phone.float' => 'phone不是小数',
'phone.boolean' => 'phone不是布尔值',
'phone.email' => 'phone不是邮箱地址',
'phone.array' => 'phone不是数组',
'phone.accepted' => 'phone请确认',
'phone.date' => 'phone不是有效日期',
'phone.alpha' => 'phone不是字母',
'phone.alphaNum' => 'phone不是字母和数字',
'phone.alphaDash' => 'phone不是字母和数字和下划线及破折号',
'phone.chs' => 'phone只能是汉字',
'phone.chsAlpha' => 'phone只能是汉字、字母',
'phone.chsAlphaNum' => 'phone只能是汉字、字母和数字',
'phone.chsDash' => 'phone只能是汉字、字母、数字和下划线_及破折号-',
'phone.activeUrl' => 'phone不是有效的域名或者IP',
'phone.url' => 'phone不是有效的URL地址',
'phone.ip' => 'phone不是有效的IP地址',
'phone.length' => 'phone长度不符',
'phone.max' => 'phone超出最大长度',
'phone.min' => 'phone低于最小长度',
'address.require' => 'address不能为空',
'address.number' => 'address不是数字',
'address.float' => 'address不是小数',
'address.boolean' => 'address不是布尔值',
'address.email' => 'address不是邮箱地址',
'address.array' => 'address不是数组',
'address.accepted' => 'address请确认',
'address.date' => 'address不是有效日期',
'address.alpha' => 'address不是字母',
'address.alphaNum' => 'address不是字母和数字',
'address.alphaDash' => 'address不是字母和数字和下划线及破折号',
'address.chs' => 'address只能是汉字',
'address.chsAlpha' => 'address只能是汉字、字母',
'address.chsAlphaNum' => 'address只能是汉字、字母和数字',
'address.chsDash' => 'address只能是汉字、字母、数字和下划线_及破折号-',
'address.activeUrl' => 'address不是有效的域名或者IP',
'address.url' => 'address不是有效的URL地址',
'address.ip' => 'address不是有效的IP地址',
'address.length' => 'address长度不符',
'address.max' => 'address超出最大长度',
'address.min' => 'address低于最小长度',
'zip.require' => 'zip不能为空',
'zip.number' => 'zip不是数字',
'zip.float' => 'zip不是小数',
'zip.boolean' => 'zip不是布尔值',
'zip.email' => 'zip不是邮箱地址',
'zip.array' => 'zip不是数组',
'zip.accepted' => 'zip请确认',
'zip.date' => 'zip不是有效日期',
'zip.alpha' => 'zip不是字母',
'zip.alphaNum' => 'zip不是字母和数字',
'zip.alphaDash' => 'zip不是字母和数字和下划线及破折号',
'zip.chs' => 'zip只能是汉字',
'zip.chsAlpha' => 'zip只能是汉字、字母',
'zip.chsAlphaNum' => 'zip只能是汉字、字母和数字',
'zip.chsDash' => 'zip只能是汉字、字母、数字和下划线_及破折号-',
'zip.activeUrl' => 'zip不是有效的域名或者IP',
'zip.url' => 'zip不是有效的URL地址',
'zip.ip' => 'zip不是有效的IP地址',
'zip.length' => 'zip长度不符',
'zip.max' => 'zip超出最大长度',
'zip.min' => 'zip低于最小长度',
'spacestyleid.require' => 'spacestyleid不能为空',
'spacestyleid.number' => 'spacestyleid不是数字',
'spacestyleid.float' => 'spacestyleid不是小数',
'spacestyleid.boolean' => 'spacestyleid不是布尔值',
'spacestyleid.email' => 'spacestyleid不是邮箱地址',
'spacestyleid.array' => 'spacestyleid不是数组',
'spacestyleid.accepted' => 'spacestyleid请确认',
'spacestyleid.date' => 'spacestyleid不是有效日期',
'spacestyleid.alpha' => 'spacestyleid不是字母',
'spacestyleid.alphaNum' => 'spacestyleid不是字母和数字',
'spacestyleid.alphaDash' => 'spacestyleid不是字母和数字和下划线及破折号',
'spacestyleid.chs' => 'spacestyleid只能是汉字',
'spacestyleid.chsAlpha' => 'spacestyleid只能是汉字、字母',
'spacestyleid.chsAlphaNum' => 'spacestyleid只能是汉字、字母和数字',
'spacestyleid.chsDash' => 'spacestyleid只能是汉字、字母、数字和下划线_及破折号-',
'spacestyleid.activeUrl' => 'spacestyleid不是有效的域名或者IP',
'spacestyleid.url' => 'spacestyleid不是有效的URL地址',
'spacestyleid.ip' => 'spacestyleid不是有效的IP地址',
'spacestyleid.length' => 'spacestyleid长度不符',
'spacestyleid.max' => 'spacestyleid超出最大长度',
'spacestyleid.min' => 'spacestyleid低于最小长度',
'homepage.require' => 'homepage不能为空',
'homepage.number' => 'homepage不是数字',
'homepage.float' => 'homepage不是小数',
'homepage.boolean' => 'homepage不是布尔值',
'homepage.email' => 'homepage不是邮箱地址',
'homepage.array' => 'homepage不是数组',
'homepage.accepted' => 'homepage请确认',
'homepage.date' => 'homepage不是有效日期',
'homepage.alpha' => 'homepage不是字母',
'homepage.alphaNum' => 'homepage不是字母和数字',
'homepage.alphaDash' => 'homepage不是字母和数字和下划线及破折号',
'homepage.chs' => 'homepage只能是汉字',
'homepage.chsAlpha' => 'homepage只能是汉字、字母',
'homepage.chsAlphaNum' => 'homepage只能是汉字、字母和数字',
'homepage.chsDash' => 'homepage只能是汉字、字母、数字和下划线_及破折号-',
'homepage.activeUrl' => 'homepage不是有效的域名或者IP',
'homepage.url' => 'homepage不是有效的URL地址',
'homepage.ip' => 'homepage不是有效的IP地址',
'homepage.length' => 'homepage长度不符',
'homepage.max' => 'homepage超出最大长度',
'homepage.min' => 'homepage低于最小长度',
'saytext.require' => 'saytext不能为空',
'saytext.number' => 'saytext不是数字',
'saytext.float' => 'saytext不是小数',
'saytext.boolean' => 'saytext不是布尔值',
'saytext.email' => 'saytext不是邮箱地址',
'saytext.array' => 'saytext不是数组',
'saytext.accepted' => 'saytext请确认',
'saytext.date' => 'saytext不是有效日期',
'saytext.alpha' => 'saytext不是字母',
'saytext.alphaNum' => 'saytext不是字母和数字',
'saytext.alphaDash' => 'saytext不是字母和数字和下划线及破折号',
'saytext.chs' => 'saytext只能是汉字',
'saytext.chsAlpha' => 'saytext只能是汉字、字母',
'saytext.chsAlphaNum' => 'saytext只能是汉字、字母和数字',
'saytext.chsDash' => 'saytext只能是汉字、字母、数字和下划线_及破折号-',
'saytext.activeUrl' => 'saytext不是有效的域名或者IP',
'saytext.url' => 'saytext不是有效的URL地址',
'saytext.ip' => 'saytext不是有效的IP地址',
'saytext.length' => 'saytext长度不符',
'saytext.max' => 'saytext超出最大长度',
'saytext.min' => 'saytext低于最小长度',
'company.require' => 'company不能为空',
'company.number' => 'company不是数字',
'company.float' => 'company不是小数',
'company.boolean' => 'company不是布尔值',
'company.email' => 'company不是邮箱地址',
'company.array' => 'company不是数组',
'company.accepted' => 'company请确认',
'company.date' => 'company不是有效日期',
'company.alpha' => 'company不是字母',
'company.alphaNum' => 'company不是字母和数字',
'company.alphaDash' => 'company不是字母和数字和下划线及破折号',
'company.chs' => 'company只能是汉字',
'company.chsAlpha' => 'company只能是汉字、字母',
'company.chsAlphaNum' => 'company只能是汉字、字母和数字',
'company.chsDash' => 'company只能是汉字、字母、数字和下划线_及破折号-',
'company.activeUrl' => 'company不是有效的域名或者IP',
'company.url' => 'company不是有效的URL地址',
'company.ip' => 'company不是有效的IP地址',
'company.length' => 'company长度不符',
'company.max' => 'company超出最大长度',
'company.min' => 'company低于最小长度',
'fax.require' => 'fax不能为空',
'fax.number' => 'fax不是数字',
'fax.float' => 'fax不是小数',
'fax.boolean' => 'fax不是布尔值',
'fax.email' => 'fax不是邮箱地址',
'fax.array' => 'fax不是数组',
'fax.accepted' => 'fax请确认',
'fax.date' => 'fax不是有效日期',
'fax.alpha' => 'fax不是字母',
'fax.alphaNum' => 'fax不是字母和数字',
'fax.alphaDash' => 'fax不是字母和数字和下划线及破折号',
'fax.chs' => 'fax只能是汉字',
'fax.chsAlpha' => 'fax只能是汉字、字母',
'fax.chsAlphaNum' => 'fax只能是汉字、字母和数字',
'fax.chsDash' => 'fax只能是汉字、字母、数字和下划线_及破折号-',
'fax.activeUrl' => 'fax不是有效的域名或者IP',
'fax.url' => 'fax不是有效的URL地址',
'fax.ip' => 'fax不是有效的IP地址',
'fax.length' => 'fax长度不符',
'fax.max' => 'fax超出最大长度',
'fax.min' => 'fax低于最小长度',
'userpic.require' => 'userpic不能为空',
'userpic.number' => 'userpic不是数字',
'userpic.float' => 'userpic不是小数',
'userpic.boolean' => 'userpic不是布尔值',
'userpic.email' => 'userpic不是邮箱地址',
'userpic.array' => 'userpic不是数组',
'userpic.accepted' => 'userpic请确认',
'userpic.date' => 'userpic不是有效日期',
'userpic.alpha' => 'userpic不是字母',
'userpic.alphaNum' => 'userpic不是字母和数字',
'userpic.alphaDash' => 'userpic不是字母和数字和下划线及破折号',
'userpic.chs' => 'userpic只能是汉字',
'userpic.chsAlpha' => 'userpic只能是汉字、字母',
'userpic.chsAlphaNum' => 'userpic只能是汉字、字母和数字',
'userpic.chsDash' => 'userpic只能是汉字、字母、数字和下划线_及破折号-',
'userpic.activeUrl' => 'userpic不是有效的域名或者IP',
'userpic.url' => 'userpic不是有效的URL地址',
'userpic.ip' => 'userpic不是有效的IP地址',
'userpic.length' => 'userpic长度不符',
'userpic.max' => 'userpic超出最大长度',
'userpic.min' => 'userpic低于最小长度',
'spacename.require' => 'spacename不能为空',
'spacename.number' => 'spacename不是数字',
'spacename.float' => 'spacename不是小数',
'spacename.boolean' => 'spacename不是布尔值',
'spacename.email' => 'spacename不是邮箱地址',
'spacename.array' => 'spacename不是数组',
'spacename.accepted' => 'spacename请确认',
'spacename.date' => 'spacename不是有效日期',
'spacename.alpha' => 'spacename不是字母',
'spacename.alphaNum' => 'spacename不是字母和数字',
'spacename.alphaDash' => 'spacename不是字母和数字和下划线及破折号',
'spacename.chs' => 'spacename只能是汉字',
'spacename.chsAlpha' => 'spacename只能是汉字、字母',
'spacename.chsAlphaNum' => 'spacename只能是汉字、字母和数字',
'spacename.chsDash' => 'spacename只能是汉字、字母、数字和下划线_及破折号-',
'spacename.activeUrl' => 'spacename不是有效的域名或者IP',
'spacename.url' => 'spacename不是有效的URL地址',
'spacename.ip' => 'spacename不是有效的IP地址',
'spacename.length' => 'spacename长度不符',
'spacename.max' => 'spacename超出最大长度',
'spacename.min' => 'spacename低于最小长度',
'spacegg.require' => 'spacegg不能为空',
'spacegg.number' => 'spacegg不是数字',
'spacegg.float' => 'spacegg不是小数',
'spacegg.boolean' => 'spacegg不是布尔值',
'spacegg.email' => 'spacegg不是邮箱地址',
'spacegg.array' => 'spacegg不是数组',
'spacegg.accepted' => 'spacegg请确认',
'spacegg.date' => 'spacegg不是有效日期',
'spacegg.alpha' => 'spacegg不是字母',
'spacegg.alphaNum' => 'spacegg不是字母和数字',
'spacegg.alphaDash' => 'spacegg不是字母和数字和下划线及破折号',
'spacegg.chs' => 'spacegg只能是汉字',
'spacegg.chsAlpha' => 'spacegg只能是汉字、字母',
'spacegg.chsAlphaNum' => 'spacegg只能是汉字、字母和数字',
'spacegg.chsDash' => 'spacegg只能是汉字、字母、数字和下划线_及破折号-',
'spacegg.activeUrl' => 'spacegg不是有效的域名或者IP',
'spacegg.url' => 'spacegg不是有效的URL地址',
'spacegg.ip' => 'spacegg不是有效的IP地址',
'spacegg.length' => 'spacegg长度不符',
'spacegg.max' => 'spacegg超出最大长度',
'spacegg.min' => 'spacegg低于最小长度',
'viewstats.require' => 'viewstats不能为空',
'viewstats.number' => 'viewstats不是数字',
'viewstats.float' => 'viewstats不是小数',
'viewstats.boolean' => 'viewstats不是布尔值',
'viewstats.email' => 'viewstats不是邮箱地址',
'viewstats.array' => 'viewstats不是数组',
'viewstats.accepted' => 'viewstats请确认',
'viewstats.date' => 'viewstats不是有效日期',
'viewstats.alpha' => 'viewstats不是字母',
'viewstats.alphaNum' => 'viewstats不是字母和数字',
'viewstats.alphaDash' => 'viewstats不是字母和数字和下划线及破折号',
'viewstats.chs' => 'viewstats只能是汉字',
'viewstats.chsAlpha' => 'viewstats只能是汉字、字母',
'viewstats.chsAlphaNum' => 'viewstats只能是汉字、字母和数字',
'viewstats.chsDash' => 'viewstats只能是汉字、字母、数字和下划线_及破折号-',
'viewstats.activeUrl' => 'viewstats不是有效的域名或者IP',
'viewstats.url' => 'viewstats不是有效的URL地址',
'viewstats.ip' => 'viewstats不是有效的IP地址',
'viewstats.length' => 'viewstats长度不符',
'viewstats.max' => 'viewstats超出最大长度',
'viewstats.min' => 'viewstats低于最小长度',
'regip.require' => 'regip不能为空',
'regip.number' => 'regip不是数字',
'regip.float' => 'regip不是小数',
'regip.boolean' => 'regip不是布尔值',
'regip.email' => 'regip不是邮箱地址',
'regip.array' => 'regip不是数组',
'regip.accepted' => 'regip请确认',
'regip.date' => 'regip不是有效日期',
'regip.alpha' => 'regip不是字母',
'regip.alphaNum' => 'regip不是字母和数字',
'regip.alphaDash' => 'regip不是字母和数字和下划线及破折号',
'regip.chs' => 'regip只能是汉字',
'regip.chsAlpha' => 'regip只能是汉字、字母',
'regip.chsAlphaNum' => 'regip只能是汉字、字母和数字',
'regip.chsDash' => 'regip只能是汉字、字母、数字和下划线_及破折号-',
'regip.activeUrl' => 'regip不是有效的域名或者IP',
'regip.url' => 'regip不是有效的URL地址',
'regip.ip' => 'regip不是有效的IP地址',
'regip.length' => 'regip长度不符',
'regip.max' => 'regip超出最大长度',
'regip.min' => 'regip低于最小长度',
'lasttime.require' => 'lasttime不能为空',
'lasttime.number' => 'lasttime不是数字',
'lasttime.float' => 'lasttime不是小数',
'lasttime.boolean' => 'lasttime不是布尔值',
'lasttime.email' => 'lasttime不是邮箱地址',
'lasttime.array' => 'lasttime不是数组',
'lasttime.accepted' => 'lasttime请确认',
'lasttime.date' => 'lasttime不是有效日期',
'lasttime.alpha' => 'lasttime不是字母',
'lasttime.alphaNum' => 'lasttime不是字母和数字',
'lasttime.alphaDash' => 'lasttime不是字母和数字和下划线及破折号',
'lasttime.chs' => 'lasttime只能是汉字',
'lasttime.chsAlpha' => 'lasttime只能是汉字、字母',
'lasttime.chsAlphaNum' => 'lasttime只能是汉字、字母和数字',
'lasttime.chsDash' => 'lasttime只能是汉字、字母、数字和下划线_及破折号-',
'lasttime.activeUrl' => 'lasttime不是有效的域名或者IP',
'lasttime.url' => 'lasttime不是有效的URL地址',
'lasttime.ip' => 'lasttime不是有效的IP地址',
'lasttime.length' => 'lasttime长度不符',
'lasttime.max' => 'lasttime超出最大长度',
'lasttime.min' => 'lasttime低于最小长度',
'lastip.require' => 'lastip不能为空',
'lastip.number' => 'lastip不是数字',
'lastip.float' => 'lastip不是小数',
'lastip.boolean' => 'lastip不是布尔值',
'lastip.email' => 'lastip不是邮箱地址',
'lastip.array' => 'lastip不是数组',
'lastip.accepted' => 'lastip请确认',
'lastip.date' => 'lastip不是有效日期',
'lastip.alpha' => 'lastip不是字母',
'lastip.alphaNum' => 'lastip不是字母和数字',
'lastip.alphaDash' => 'lastip不是字母和数字和下划线及破折号',
'lastip.chs' => 'lastip只能是汉字',
'lastip.chsAlpha' => 'lastip只能是汉字、字母',
'lastip.chsAlphaNum' => 'lastip只能是汉字、字母和数字',
'lastip.chsDash' => 'lastip只能是汉字、字母、数字和下划线_及破折号-',
'lastip.activeUrl' => 'lastip不是有效的域名或者IP',
'lastip.url' => 'lastip不是有效的URL地址',
'lastip.ip' => 'lastip不是有效的IP地址',
'lastip.length' => 'lastip长度不符',
'lastip.max' => 'lastip超出最大长度',
'lastip.min' => 'lastip低于最小长度',
'loginnum.require' => 'loginnum不能为空',
'loginnum.number' => 'loginnum不是数字',
'loginnum.float' => 'loginnum不是小数',
'loginnum.boolean' => 'loginnum不是布尔值',
'loginnum.email' => 'loginnum不是邮箱地址',
'loginnum.array' => 'loginnum不是数组',
'loginnum.accepted' => 'loginnum请确认',
'loginnum.date' => 'loginnum不是有效日期',
'loginnum.alpha' => 'loginnum不是字母',
'loginnum.alphaNum' => 'loginnum不是字母和数字',
'loginnum.alphaDash' => 'loginnum不是字母和数字和下划线及破折号',
'loginnum.chs' => 'loginnum只能是汉字',
'loginnum.chsAlpha' => 'loginnum只能是汉字、字母',
'loginnum.chsAlphaNum' => 'loginnum只能是汉字、字母和数字',
'loginnum.chsDash' => 'loginnum只能是汉字、字母、数字和下划线_及破折号-',
'loginnum.activeUrl' => 'loginnum不是有效的域名或者IP',
'loginnum.url' => 'loginnum不是有效的URL地址',
'loginnum.ip' => 'loginnum不是有效的IP地址',
'loginnum.length' => 'loginnum长度不符',
'loginnum.max' => 'loginnum超出最大长度',
'loginnum.min' => 'loginnum低于最小长度',
'regipport.require' => 'regipport不能为空',
'regipport.number' => 'regipport不是数字',
'regipport.float' => 'regipport不是小数',
'regipport.boolean' => 'regipport不是布尔值',
'regipport.email' => 'regipport不是邮箱地址',
'regipport.array' => 'regipport不是数组',
'regipport.accepted' => 'regipport请确认',
'regipport.date' => 'regipport不是有效日期',
'regipport.alpha' => 'regipport不是字母',
'regipport.alphaNum' => 'regipport不是字母和数字',
'regipport.alphaDash' => 'regipport不是字母和数字和下划线及破折号',
'regipport.chs' => 'regipport只能是汉字',
'regipport.chsAlpha' => 'regipport只能是汉字、字母',
'regipport.chsAlphaNum' => 'regipport只能是汉字、字母和数字',
'regipport.chsDash' => 'regipport只能是汉字、字母、数字和下划线_及破折号-',
'regipport.activeUrl' => 'regipport不是有效的域名或者IP',
'regipport.url' => 'regipport不是有效的URL地址',
'regipport.ip' => 'regipport不是有效的IP地址',
'regipport.length' => 'regipport长度不符',
'regipport.max' => 'regipport超出最大长度',
'regipport.min' => 'regipport低于最小长度',
'lastipport.require' => 'lastipport不能为空',
'lastipport.number' => 'lastipport不是数字',
'lastipport.float' => 'lastipport不是小数',
'lastipport.boolean' => 'lastipport不是布尔值',
'lastipport.email' => 'lastipport不是邮箱地址',
'lastipport.array' => 'lastipport不是数组',
'lastipport.accepted' => 'lastipport请确认',
'lastipport.date' => 'lastipport不是有效日期',
'lastipport.alpha' => 'lastipport不是字母',
'lastipport.alphaNum' => 'lastipport不是字母和数字',
'lastipport.alphaDash' => 'lastipport不是字母和数字和下划线及破折号',
'lastipport.chs' => 'lastipport只能是汉字',
'lastipport.chsAlpha' => 'lastipport只能是汉字、字母',
'lastipport.chsAlphaNum' => 'lastipport只能是汉字、字母和数字',
'lastipport.chsDash' => 'lastipport只能是汉字、字母、数字和下划线_及破折号-',
'lastipport.activeUrl' => 'lastipport不是有效的域名或者IP',
'lastipport.url' => 'lastipport不是有效的URL地址',
'lastipport.ip' => 'lastipport不是有效的IP地址',
'lastipport.length' => 'lastipport长度不符',
'lastipport.max' => 'lastipport超出最大长度',
'lastipport.min' => 'lastipport低于最小长度',
];

protected $scene =   [
    'add'=>['userid','truename','oicq','msn','mycall','phone','address','zip','spacestyleid','homepage','saytext','company','fax','userpic','spacename','spacegg','viewstats','regip','lasttime','lastip','loginnum','regipport','lastipport',],
    'edit'=>['userid','truename','oicq','msn','mycall','phone','address','zip','spacestyleid','homepage','saytext','company','fax','userpic','spacename','spacegg','viewstats','regip','lasttime','lastip','loginnum','regipport','lastipport',],
    'ck_id'=>['id']
];

}
