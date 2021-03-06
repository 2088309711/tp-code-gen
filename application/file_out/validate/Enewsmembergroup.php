<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsmembergroup extends Validate{

protected $rule =   [
        'groupid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'groupname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'level' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'checked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'favanum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'daydown' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'msglen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'msgnum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'canreg' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'formid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'regchecked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'spacestyleid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dayaddinfo' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'infochecked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'plchecked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'groupid.require' => 'groupid不能为空',
'groupid.number' => 'groupid不是数字',
'groupid.float' => 'groupid不是小数',
'groupid.boolean' => 'groupid不是布尔值',
'groupid.email' => 'groupid不是邮箱地址',
'groupid.array' => 'groupid不是数组',
'groupid.accepted' => 'groupid请确认',
'groupid.date' => 'groupid不是有效日期',
'groupid.alpha' => 'groupid不是字母',
'groupid.alphaNum' => 'groupid不是字母和数字',
'groupid.alphaDash' => 'groupid不是字母和数字和下划线及破折号',
'groupid.chs' => 'groupid只能是汉字',
'groupid.chsAlpha' => 'groupid只能是汉字、字母',
'groupid.chsAlphaNum' => 'groupid只能是汉字、字母和数字',
'groupid.chsDash' => 'groupid只能是汉字、字母、数字和下划线_及破折号-',
'groupid.activeUrl' => 'groupid不是有效的域名或者IP',
'groupid.url' => 'groupid不是有效的URL地址',
'groupid.ip' => 'groupid不是有效的IP地址',
'groupid.length' => 'groupid长度不符',
'groupid.max' => 'groupid超出最大长度',
'groupid.min' => 'groupid低于最小长度',
'groupname.require' => 'groupname不能为空',
'groupname.number' => 'groupname不是数字',
'groupname.float' => 'groupname不是小数',
'groupname.boolean' => 'groupname不是布尔值',
'groupname.email' => 'groupname不是邮箱地址',
'groupname.array' => 'groupname不是数组',
'groupname.accepted' => 'groupname请确认',
'groupname.date' => 'groupname不是有效日期',
'groupname.alpha' => 'groupname不是字母',
'groupname.alphaNum' => 'groupname不是字母和数字',
'groupname.alphaDash' => 'groupname不是字母和数字和下划线及破折号',
'groupname.chs' => 'groupname只能是汉字',
'groupname.chsAlpha' => 'groupname只能是汉字、字母',
'groupname.chsAlphaNum' => 'groupname只能是汉字、字母和数字',
'groupname.chsDash' => 'groupname只能是汉字、字母、数字和下划线_及破折号-',
'groupname.activeUrl' => 'groupname不是有效的域名或者IP',
'groupname.url' => 'groupname不是有效的URL地址',
'groupname.ip' => 'groupname不是有效的IP地址',
'groupname.length' => 'groupname长度不符',
'groupname.max' => 'groupname超出最大长度',
'groupname.min' => 'groupname低于最小长度',
'level.require' => 'level不能为空',
'level.number' => 'level不是数字',
'level.float' => 'level不是小数',
'level.boolean' => 'level不是布尔值',
'level.email' => 'level不是邮箱地址',
'level.array' => 'level不是数组',
'level.accepted' => 'level请确认',
'level.date' => 'level不是有效日期',
'level.alpha' => 'level不是字母',
'level.alphaNum' => 'level不是字母和数字',
'level.alphaDash' => 'level不是字母和数字和下划线及破折号',
'level.chs' => 'level只能是汉字',
'level.chsAlpha' => 'level只能是汉字、字母',
'level.chsAlphaNum' => 'level只能是汉字、字母和数字',
'level.chsDash' => 'level只能是汉字、字母、数字和下划线_及破折号-',
'level.activeUrl' => 'level不是有效的域名或者IP',
'level.url' => 'level不是有效的URL地址',
'level.ip' => 'level不是有效的IP地址',
'level.length' => 'level长度不符',
'level.max' => 'level超出最大长度',
'level.min' => 'level低于最小长度',
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
'favanum.require' => 'favanum不能为空',
'favanum.number' => 'favanum不是数字',
'favanum.float' => 'favanum不是小数',
'favanum.boolean' => 'favanum不是布尔值',
'favanum.email' => 'favanum不是邮箱地址',
'favanum.array' => 'favanum不是数组',
'favanum.accepted' => 'favanum请确认',
'favanum.date' => 'favanum不是有效日期',
'favanum.alpha' => 'favanum不是字母',
'favanum.alphaNum' => 'favanum不是字母和数字',
'favanum.alphaDash' => 'favanum不是字母和数字和下划线及破折号',
'favanum.chs' => 'favanum只能是汉字',
'favanum.chsAlpha' => 'favanum只能是汉字、字母',
'favanum.chsAlphaNum' => 'favanum只能是汉字、字母和数字',
'favanum.chsDash' => 'favanum只能是汉字、字母、数字和下划线_及破折号-',
'favanum.activeUrl' => 'favanum不是有效的域名或者IP',
'favanum.url' => 'favanum不是有效的URL地址',
'favanum.ip' => 'favanum不是有效的IP地址',
'favanum.length' => 'favanum长度不符',
'favanum.max' => 'favanum超出最大长度',
'favanum.min' => 'favanum低于最小长度',
'daydown.require' => 'daydown不能为空',
'daydown.number' => 'daydown不是数字',
'daydown.float' => 'daydown不是小数',
'daydown.boolean' => 'daydown不是布尔值',
'daydown.email' => 'daydown不是邮箱地址',
'daydown.array' => 'daydown不是数组',
'daydown.accepted' => 'daydown请确认',
'daydown.date' => 'daydown不是有效日期',
'daydown.alpha' => 'daydown不是字母',
'daydown.alphaNum' => 'daydown不是字母和数字',
'daydown.alphaDash' => 'daydown不是字母和数字和下划线及破折号',
'daydown.chs' => 'daydown只能是汉字',
'daydown.chsAlpha' => 'daydown只能是汉字、字母',
'daydown.chsAlphaNum' => 'daydown只能是汉字、字母和数字',
'daydown.chsDash' => 'daydown只能是汉字、字母、数字和下划线_及破折号-',
'daydown.activeUrl' => 'daydown不是有效的域名或者IP',
'daydown.url' => 'daydown不是有效的URL地址',
'daydown.ip' => 'daydown不是有效的IP地址',
'daydown.length' => 'daydown长度不符',
'daydown.max' => 'daydown超出最大长度',
'daydown.min' => 'daydown低于最小长度',
'msglen.require' => 'msglen不能为空',
'msglen.number' => 'msglen不是数字',
'msglen.float' => 'msglen不是小数',
'msglen.boolean' => 'msglen不是布尔值',
'msglen.email' => 'msglen不是邮箱地址',
'msglen.array' => 'msglen不是数组',
'msglen.accepted' => 'msglen请确认',
'msglen.date' => 'msglen不是有效日期',
'msglen.alpha' => 'msglen不是字母',
'msglen.alphaNum' => 'msglen不是字母和数字',
'msglen.alphaDash' => 'msglen不是字母和数字和下划线及破折号',
'msglen.chs' => 'msglen只能是汉字',
'msglen.chsAlpha' => 'msglen只能是汉字、字母',
'msglen.chsAlphaNum' => 'msglen只能是汉字、字母和数字',
'msglen.chsDash' => 'msglen只能是汉字、字母、数字和下划线_及破折号-',
'msglen.activeUrl' => 'msglen不是有效的域名或者IP',
'msglen.url' => 'msglen不是有效的URL地址',
'msglen.ip' => 'msglen不是有效的IP地址',
'msglen.length' => 'msglen长度不符',
'msglen.max' => 'msglen超出最大长度',
'msglen.min' => 'msglen低于最小长度',
'msgnum.require' => 'msgnum不能为空',
'msgnum.number' => 'msgnum不是数字',
'msgnum.float' => 'msgnum不是小数',
'msgnum.boolean' => 'msgnum不是布尔值',
'msgnum.email' => 'msgnum不是邮箱地址',
'msgnum.array' => 'msgnum不是数组',
'msgnum.accepted' => 'msgnum请确认',
'msgnum.date' => 'msgnum不是有效日期',
'msgnum.alpha' => 'msgnum不是字母',
'msgnum.alphaNum' => 'msgnum不是字母和数字',
'msgnum.alphaDash' => 'msgnum不是字母和数字和下划线及破折号',
'msgnum.chs' => 'msgnum只能是汉字',
'msgnum.chsAlpha' => 'msgnum只能是汉字、字母',
'msgnum.chsAlphaNum' => 'msgnum只能是汉字、字母和数字',
'msgnum.chsDash' => 'msgnum只能是汉字、字母、数字和下划线_及破折号-',
'msgnum.activeUrl' => 'msgnum不是有效的域名或者IP',
'msgnum.url' => 'msgnum不是有效的URL地址',
'msgnum.ip' => 'msgnum不是有效的IP地址',
'msgnum.length' => 'msgnum长度不符',
'msgnum.max' => 'msgnum超出最大长度',
'msgnum.min' => 'msgnum低于最小长度',
'canreg.require' => 'canreg不能为空',
'canreg.number' => 'canreg不是数字',
'canreg.float' => 'canreg不是小数',
'canreg.boolean' => 'canreg不是布尔值',
'canreg.email' => 'canreg不是邮箱地址',
'canreg.array' => 'canreg不是数组',
'canreg.accepted' => 'canreg请确认',
'canreg.date' => 'canreg不是有效日期',
'canreg.alpha' => 'canreg不是字母',
'canreg.alphaNum' => 'canreg不是字母和数字',
'canreg.alphaDash' => 'canreg不是字母和数字和下划线及破折号',
'canreg.chs' => 'canreg只能是汉字',
'canreg.chsAlpha' => 'canreg只能是汉字、字母',
'canreg.chsAlphaNum' => 'canreg只能是汉字、字母和数字',
'canreg.chsDash' => 'canreg只能是汉字、字母、数字和下划线_及破折号-',
'canreg.activeUrl' => 'canreg不是有效的域名或者IP',
'canreg.url' => 'canreg不是有效的URL地址',
'canreg.ip' => 'canreg不是有效的IP地址',
'canreg.length' => 'canreg长度不符',
'canreg.max' => 'canreg超出最大长度',
'canreg.min' => 'canreg低于最小长度',
'formid.require' => 'formid不能为空',
'formid.number' => 'formid不是数字',
'formid.float' => 'formid不是小数',
'formid.boolean' => 'formid不是布尔值',
'formid.email' => 'formid不是邮箱地址',
'formid.array' => 'formid不是数组',
'formid.accepted' => 'formid请确认',
'formid.date' => 'formid不是有效日期',
'formid.alpha' => 'formid不是字母',
'formid.alphaNum' => 'formid不是字母和数字',
'formid.alphaDash' => 'formid不是字母和数字和下划线及破折号',
'formid.chs' => 'formid只能是汉字',
'formid.chsAlpha' => 'formid只能是汉字、字母',
'formid.chsAlphaNum' => 'formid只能是汉字、字母和数字',
'formid.chsDash' => 'formid只能是汉字、字母、数字和下划线_及破折号-',
'formid.activeUrl' => 'formid不是有效的域名或者IP',
'formid.url' => 'formid不是有效的URL地址',
'formid.ip' => 'formid不是有效的IP地址',
'formid.length' => 'formid长度不符',
'formid.max' => 'formid超出最大长度',
'formid.min' => 'formid低于最小长度',
'regchecked.require' => 'regchecked不能为空',
'regchecked.number' => 'regchecked不是数字',
'regchecked.float' => 'regchecked不是小数',
'regchecked.boolean' => 'regchecked不是布尔值',
'regchecked.email' => 'regchecked不是邮箱地址',
'regchecked.array' => 'regchecked不是数组',
'regchecked.accepted' => 'regchecked请确认',
'regchecked.date' => 'regchecked不是有效日期',
'regchecked.alpha' => 'regchecked不是字母',
'regchecked.alphaNum' => 'regchecked不是字母和数字',
'regchecked.alphaDash' => 'regchecked不是字母和数字和下划线及破折号',
'regchecked.chs' => 'regchecked只能是汉字',
'regchecked.chsAlpha' => 'regchecked只能是汉字、字母',
'regchecked.chsAlphaNum' => 'regchecked只能是汉字、字母和数字',
'regchecked.chsDash' => 'regchecked只能是汉字、字母、数字和下划线_及破折号-',
'regchecked.activeUrl' => 'regchecked不是有效的域名或者IP',
'regchecked.url' => 'regchecked不是有效的URL地址',
'regchecked.ip' => 'regchecked不是有效的IP地址',
'regchecked.length' => 'regchecked长度不符',
'regchecked.max' => 'regchecked超出最大长度',
'regchecked.min' => 'regchecked低于最小长度',
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
'dayaddinfo.require' => 'dayaddinfo不能为空',
'dayaddinfo.number' => 'dayaddinfo不是数字',
'dayaddinfo.float' => 'dayaddinfo不是小数',
'dayaddinfo.boolean' => 'dayaddinfo不是布尔值',
'dayaddinfo.email' => 'dayaddinfo不是邮箱地址',
'dayaddinfo.array' => 'dayaddinfo不是数组',
'dayaddinfo.accepted' => 'dayaddinfo请确认',
'dayaddinfo.date' => 'dayaddinfo不是有效日期',
'dayaddinfo.alpha' => 'dayaddinfo不是字母',
'dayaddinfo.alphaNum' => 'dayaddinfo不是字母和数字',
'dayaddinfo.alphaDash' => 'dayaddinfo不是字母和数字和下划线及破折号',
'dayaddinfo.chs' => 'dayaddinfo只能是汉字',
'dayaddinfo.chsAlpha' => 'dayaddinfo只能是汉字、字母',
'dayaddinfo.chsAlphaNum' => 'dayaddinfo只能是汉字、字母和数字',
'dayaddinfo.chsDash' => 'dayaddinfo只能是汉字、字母、数字和下划线_及破折号-',
'dayaddinfo.activeUrl' => 'dayaddinfo不是有效的域名或者IP',
'dayaddinfo.url' => 'dayaddinfo不是有效的URL地址',
'dayaddinfo.ip' => 'dayaddinfo不是有效的IP地址',
'dayaddinfo.length' => 'dayaddinfo长度不符',
'dayaddinfo.max' => 'dayaddinfo超出最大长度',
'dayaddinfo.min' => 'dayaddinfo低于最小长度',
'infochecked.require' => 'infochecked不能为空',
'infochecked.number' => 'infochecked不是数字',
'infochecked.float' => 'infochecked不是小数',
'infochecked.boolean' => 'infochecked不是布尔值',
'infochecked.email' => 'infochecked不是邮箱地址',
'infochecked.array' => 'infochecked不是数组',
'infochecked.accepted' => 'infochecked请确认',
'infochecked.date' => 'infochecked不是有效日期',
'infochecked.alpha' => 'infochecked不是字母',
'infochecked.alphaNum' => 'infochecked不是字母和数字',
'infochecked.alphaDash' => 'infochecked不是字母和数字和下划线及破折号',
'infochecked.chs' => 'infochecked只能是汉字',
'infochecked.chsAlpha' => 'infochecked只能是汉字、字母',
'infochecked.chsAlphaNum' => 'infochecked只能是汉字、字母和数字',
'infochecked.chsDash' => 'infochecked只能是汉字、字母、数字和下划线_及破折号-',
'infochecked.activeUrl' => 'infochecked不是有效的域名或者IP',
'infochecked.url' => 'infochecked不是有效的URL地址',
'infochecked.ip' => 'infochecked不是有效的IP地址',
'infochecked.length' => 'infochecked长度不符',
'infochecked.max' => 'infochecked超出最大长度',
'infochecked.min' => 'infochecked低于最小长度',
'plchecked.require' => 'plchecked不能为空',
'plchecked.number' => 'plchecked不是数字',
'plchecked.float' => 'plchecked不是小数',
'plchecked.boolean' => 'plchecked不是布尔值',
'plchecked.email' => 'plchecked不是邮箱地址',
'plchecked.array' => 'plchecked不是数组',
'plchecked.accepted' => 'plchecked请确认',
'plchecked.date' => 'plchecked不是有效日期',
'plchecked.alpha' => 'plchecked不是字母',
'plchecked.alphaNum' => 'plchecked不是字母和数字',
'plchecked.alphaDash' => 'plchecked不是字母和数字和下划线及破折号',
'plchecked.chs' => 'plchecked只能是汉字',
'plchecked.chsAlpha' => 'plchecked只能是汉字、字母',
'plchecked.chsAlphaNum' => 'plchecked只能是汉字、字母和数字',
'plchecked.chsDash' => 'plchecked只能是汉字、字母、数字和下划线_及破折号-',
'plchecked.activeUrl' => 'plchecked不是有效的域名或者IP',
'plchecked.url' => 'plchecked不是有效的URL地址',
'plchecked.ip' => 'plchecked不是有效的IP地址',
'plchecked.length' => 'plchecked长度不符',
'plchecked.max' => 'plchecked超出最大长度',
'plchecked.min' => 'plchecked低于最小长度',
];

protected $scene =   [
    'add'=>['groupid','groupname','level','checked','favanum','daydown','msglen','msgnum','canreg','formid','regchecked','spacestyleid','dayaddinfo','infochecked','plchecked',],
    'edit'=>['groupid','groupname','level','checked','favanum','daydown','msglen','msgnum','canreg','formid','regchecked','spacestyleid','dayaddinfo','infochecked','plchecked',],
    'ck_id'=>['id']
];

}
