<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsvg extends Validate{

protected $rule =   [
        'vgid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'gids' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ingids' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'agids' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'mlist' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'vgid.require' => 'vgid不能为空',
'vgid.number' => 'vgid不是数字',
'vgid.float' => 'vgid不是小数',
'vgid.boolean' => 'vgid不是布尔值',
'vgid.email' => 'vgid不是邮箱地址',
'vgid.array' => 'vgid不是数组',
'vgid.accepted' => 'vgid请确认',
'vgid.date' => 'vgid不是有效日期',
'vgid.alpha' => 'vgid不是字母',
'vgid.alphaNum' => 'vgid不是字母和数字',
'vgid.alphaDash' => 'vgid不是字母和数字和下划线及破折号',
'vgid.chs' => 'vgid只能是汉字',
'vgid.chsAlpha' => 'vgid只能是汉字、字母',
'vgid.chsAlphaNum' => 'vgid只能是汉字、字母和数字',
'vgid.chsDash' => 'vgid只能是汉字、字母、数字和下划线_及破折号-',
'vgid.activeUrl' => 'vgid不是有效的域名或者IP',
'vgid.url' => 'vgid不是有效的URL地址',
'vgid.ip' => 'vgid不是有效的IP地址',
'vgid.length' => 'vgid长度不符',
'vgid.max' => 'vgid超出最大长度',
'vgid.min' => 'vgid低于最小长度',
'gname.require' => 'gname不能为空',
'gname.number' => 'gname不是数字',
'gname.float' => 'gname不是小数',
'gname.boolean' => 'gname不是布尔值',
'gname.email' => 'gname不是邮箱地址',
'gname.array' => 'gname不是数组',
'gname.accepted' => 'gname请确认',
'gname.date' => 'gname不是有效日期',
'gname.alpha' => 'gname不是字母',
'gname.alphaNum' => 'gname不是字母和数字',
'gname.alphaDash' => 'gname不是字母和数字和下划线及破折号',
'gname.chs' => 'gname只能是汉字',
'gname.chsAlpha' => 'gname只能是汉字、字母',
'gname.chsAlphaNum' => 'gname只能是汉字、字母和数字',
'gname.chsDash' => 'gname只能是汉字、字母、数字和下划线_及破折号-',
'gname.activeUrl' => 'gname不是有效的域名或者IP',
'gname.url' => 'gname不是有效的URL地址',
'gname.ip' => 'gname不是有效的IP地址',
'gname.length' => 'gname长度不符',
'gname.max' => 'gname超出最大长度',
'gname.min' => 'gname低于最小长度',
'gids.require' => 'gids不能为空',
'gids.number' => 'gids不是数字',
'gids.float' => 'gids不是小数',
'gids.boolean' => 'gids不是布尔值',
'gids.email' => 'gids不是邮箱地址',
'gids.array' => 'gids不是数组',
'gids.accepted' => 'gids请确认',
'gids.date' => 'gids不是有效日期',
'gids.alpha' => 'gids不是字母',
'gids.alphaNum' => 'gids不是字母和数字',
'gids.alphaDash' => 'gids不是字母和数字和下划线及破折号',
'gids.chs' => 'gids只能是汉字',
'gids.chsAlpha' => 'gids只能是汉字、字母',
'gids.chsAlphaNum' => 'gids只能是汉字、字母和数字',
'gids.chsDash' => 'gids只能是汉字、字母、数字和下划线_及破折号-',
'gids.activeUrl' => 'gids不是有效的域名或者IP',
'gids.url' => 'gids不是有效的URL地址',
'gids.ip' => 'gids不是有效的IP地址',
'gids.length' => 'gids长度不符',
'gids.max' => 'gids超出最大长度',
'gids.min' => 'gids低于最小长度',
'ingids.require' => 'ingids不能为空',
'ingids.number' => 'ingids不是数字',
'ingids.float' => 'ingids不是小数',
'ingids.boolean' => 'ingids不是布尔值',
'ingids.email' => 'ingids不是邮箱地址',
'ingids.array' => 'ingids不是数组',
'ingids.accepted' => 'ingids请确认',
'ingids.date' => 'ingids不是有效日期',
'ingids.alpha' => 'ingids不是字母',
'ingids.alphaNum' => 'ingids不是字母和数字',
'ingids.alphaDash' => 'ingids不是字母和数字和下划线及破折号',
'ingids.chs' => 'ingids只能是汉字',
'ingids.chsAlpha' => 'ingids只能是汉字、字母',
'ingids.chsAlphaNum' => 'ingids只能是汉字、字母和数字',
'ingids.chsDash' => 'ingids只能是汉字、字母、数字和下划线_及破折号-',
'ingids.activeUrl' => 'ingids不是有效的域名或者IP',
'ingids.url' => 'ingids不是有效的URL地址',
'ingids.ip' => 'ingids不是有效的IP地址',
'ingids.length' => 'ingids长度不符',
'ingids.max' => 'ingids超出最大长度',
'ingids.min' => 'ingids低于最小长度',
'agids.require' => 'agids不能为空',
'agids.number' => 'agids不是数字',
'agids.float' => 'agids不是小数',
'agids.boolean' => 'agids不是布尔值',
'agids.email' => 'agids不是邮箱地址',
'agids.array' => 'agids不是数组',
'agids.accepted' => 'agids请确认',
'agids.date' => 'agids不是有效日期',
'agids.alpha' => 'agids不是字母',
'agids.alphaNum' => 'agids不是字母和数字',
'agids.alphaDash' => 'agids不是字母和数字和下划线及破折号',
'agids.chs' => 'agids只能是汉字',
'agids.chsAlpha' => 'agids只能是汉字、字母',
'agids.chsAlphaNum' => 'agids只能是汉字、字母和数字',
'agids.chsDash' => 'agids只能是汉字、字母、数字和下划线_及破折号-',
'agids.activeUrl' => 'agids不是有效的域名或者IP',
'agids.url' => 'agids不是有效的URL地址',
'agids.ip' => 'agids不是有效的IP地址',
'agids.length' => 'agids长度不符',
'agids.max' => 'agids超出最大长度',
'agids.min' => 'agids低于最小长度',
'mlist.require' => 'mlist不能为空',
'mlist.number' => 'mlist不是数字',
'mlist.float' => 'mlist不是小数',
'mlist.boolean' => 'mlist不是布尔值',
'mlist.email' => 'mlist不是邮箱地址',
'mlist.array' => 'mlist不是数组',
'mlist.accepted' => 'mlist请确认',
'mlist.date' => 'mlist不是有效日期',
'mlist.alpha' => 'mlist不是字母',
'mlist.alphaNum' => 'mlist不是字母和数字',
'mlist.alphaDash' => 'mlist不是字母和数字和下划线及破折号',
'mlist.chs' => 'mlist只能是汉字',
'mlist.chsAlpha' => 'mlist只能是汉字、字母',
'mlist.chsAlphaNum' => 'mlist只能是汉字、字母和数字',
'mlist.chsDash' => 'mlist只能是汉字、字母、数字和下划线_及破折号-',
'mlist.activeUrl' => 'mlist不是有效的域名或者IP',
'mlist.url' => 'mlist不是有效的URL地址',
'mlist.ip' => 'mlist不是有效的IP地址',
'mlist.length' => 'mlist长度不符',
'mlist.max' => 'mlist超出最大长度',
'mlist.min' => 'mlist低于最小长度',
];

protected $scene =   [
    'add'=>['vgid','gname','gids','ingids','agids','mlist',],
    'edit'=>['vgid','gname','gids','ingids','agids','mlist',],
    'ck_id'=>['id']
];

}
