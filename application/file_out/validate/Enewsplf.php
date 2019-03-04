<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsplf extends Validate{

protected $rule =   [
        'fid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'f' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fzs' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ftype' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'flen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ismust' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'fid.require' => 'fid不能为空',
'fid.number' => 'fid不是数字',
'fid.float' => 'fid不是小数',
'fid.boolean' => 'fid不是布尔值',
'fid.email' => 'fid不是邮箱地址',
'fid.array' => 'fid不是数组',
'fid.accepted' => 'fid请确认',
'fid.date' => 'fid不是有效日期',
'fid.alpha' => 'fid不是字母',
'fid.alphaNum' => 'fid不是字母和数字',
'fid.alphaDash' => 'fid不是字母和数字和下划线及破折号',
'fid.chs' => 'fid只能是汉字',
'fid.chsAlpha' => 'fid只能是汉字、字母',
'fid.chsAlphaNum' => 'fid只能是汉字、字母和数字',
'fid.chsDash' => 'fid只能是汉字、字母、数字和下划线_及破折号-',
'fid.activeUrl' => 'fid不是有效的域名或者IP',
'fid.url' => 'fid不是有效的URL地址',
'fid.ip' => 'fid不是有效的IP地址',
'fid.length' => 'fid长度不符',
'fid.max' => 'fid超出最大长度',
'fid.min' => 'fid低于最小长度',
'f.require' => 'f不能为空',
'f.number' => 'f不是数字',
'f.float' => 'f不是小数',
'f.boolean' => 'f不是布尔值',
'f.email' => 'f不是邮箱地址',
'f.array' => 'f不是数组',
'f.accepted' => 'f请确认',
'f.date' => 'f不是有效日期',
'f.alpha' => 'f不是字母',
'f.alphaNum' => 'f不是字母和数字',
'f.alphaDash' => 'f不是字母和数字和下划线及破折号',
'f.chs' => 'f只能是汉字',
'f.chsAlpha' => 'f只能是汉字、字母',
'f.chsAlphaNum' => 'f只能是汉字、字母和数字',
'f.chsDash' => 'f只能是汉字、字母、数字和下划线_及破折号-',
'f.activeUrl' => 'f不是有效的域名或者IP',
'f.url' => 'f不是有效的URL地址',
'f.ip' => 'f不是有效的IP地址',
'f.length' => 'f长度不符',
'f.max' => 'f超出最大长度',
'f.min' => 'f低于最小长度',
'fname.require' => 'fname不能为空',
'fname.number' => 'fname不是数字',
'fname.float' => 'fname不是小数',
'fname.boolean' => 'fname不是布尔值',
'fname.email' => 'fname不是邮箱地址',
'fname.array' => 'fname不是数组',
'fname.accepted' => 'fname请确认',
'fname.date' => 'fname不是有效日期',
'fname.alpha' => 'fname不是字母',
'fname.alphaNum' => 'fname不是字母和数字',
'fname.alphaDash' => 'fname不是字母和数字和下划线及破折号',
'fname.chs' => 'fname只能是汉字',
'fname.chsAlpha' => 'fname只能是汉字、字母',
'fname.chsAlphaNum' => 'fname只能是汉字、字母和数字',
'fname.chsDash' => 'fname只能是汉字、字母、数字和下划线_及破折号-',
'fname.activeUrl' => 'fname不是有效的域名或者IP',
'fname.url' => 'fname不是有效的URL地址',
'fname.ip' => 'fname不是有效的IP地址',
'fname.length' => 'fname长度不符',
'fname.max' => 'fname超出最大长度',
'fname.min' => 'fname低于最小长度',
'fzs.require' => 'fzs不能为空',
'fzs.number' => 'fzs不是数字',
'fzs.float' => 'fzs不是小数',
'fzs.boolean' => 'fzs不是布尔值',
'fzs.email' => 'fzs不是邮箱地址',
'fzs.array' => 'fzs不是数组',
'fzs.accepted' => 'fzs请确认',
'fzs.date' => 'fzs不是有效日期',
'fzs.alpha' => 'fzs不是字母',
'fzs.alphaNum' => 'fzs不是字母和数字',
'fzs.alphaDash' => 'fzs不是字母和数字和下划线及破折号',
'fzs.chs' => 'fzs只能是汉字',
'fzs.chsAlpha' => 'fzs只能是汉字、字母',
'fzs.chsAlphaNum' => 'fzs只能是汉字、字母和数字',
'fzs.chsDash' => 'fzs只能是汉字、字母、数字和下划线_及破折号-',
'fzs.activeUrl' => 'fzs不是有效的域名或者IP',
'fzs.url' => 'fzs不是有效的URL地址',
'fzs.ip' => 'fzs不是有效的IP地址',
'fzs.length' => 'fzs长度不符',
'fzs.max' => 'fzs超出最大长度',
'fzs.min' => 'fzs低于最小长度',
'ftype.require' => 'ftype不能为空',
'ftype.number' => 'ftype不是数字',
'ftype.float' => 'ftype不是小数',
'ftype.boolean' => 'ftype不是布尔值',
'ftype.email' => 'ftype不是邮箱地址',
'ftype.array' => 'ftype不是数组',
'ftype.accepted' => 'ftype请确认',
'ftype.date' => 'ftype不是有效日期',
'ftype.alpha' => 'ftype不是字母',
'ftype.alphaNum' => 'ftype不是字母和数字',
'ftype.alphaDash' => 'ftype不是字母和数字和下划线及破折号',
'ftype.chs' => 'ftype只能是汉字',
'ftype.chsAlpha' => 'ftype只能是汉字、字母',
'ftype.chsAlphaNum' => 'ftype只能是汉字、字母和数字',
'ftype.chsDash' => 'ftype只能是汉字、字母、数字和下划线_及破折号-',
'ftype.activeUrl' => 'ftype不是有效的域名或者IP',
'ftype.url' => 'ftype不是有效的URL地址',
'ftype.ip' => 'ftype不是有效的IP地址',
'ftype.length' => 'ftype长度不符',
'ftype.max' => 'ftype超出最大长度',
'ftype.min' => 'ftype低于最小长度',
'flen.require' => 'flen不能为空',
'flen.number' => 'flen不是数字',
'flen.float' => 'flen不是小数',
'flen.boolean' => 'flen不是布尔值',
'flen.email' => 'flen不是邮箱地址',
'flen.array' => 'flen不是数组',
'flen.accepted' => 'flen请确认',
'flen.date' => 'flen不是有效日期',
'flen.alpha' => 'flen不是字母',
'flen.alphaNum' => 'flen不是字母和数字',
'flen.alphaDash' => 'flen不是字母和数字和下划线及破折号',
'flen.chs' => 'flen只能是汉字',
'flen.chsAlpha' => 'flen只能是汉字、字母',
'flen.chsAlphaNum' => 'flen只能是汉字、字母和数字',
'flen.chsDash' => 'flen只能是汉字、字母、数字和下划线_及破折号-',
'flen.activeUrl' => 'flen不是有效的域名或者IP',
'flen.url' => 'flen不是有效的URL地址',
'flen.ip' => 'flen不是有效的IP地址',
'flen.length' => 'flen长度不符',
'flen.max' => 'flen超出最大长度',
'flen.min' => 'flen低于最小长度',
'ismust.require' => 'ismust不能为空',
'ismust.number' => 'ismust不是数字',
'ismust.float' => 'ismust不是小数',
'ismust.boolean' => 'ismust不是布尔值',
'ismust.email' => 'ismust不是邮箱地址',
'ismust.array' => 'ismust不是数组',
'ismust.accepted' => 'ismust请确认',
'ismust.date' => 'ismust不是有效日期',
'ismust.alpha' => 'ismust不是字母',
'ismust.alphaNum' => 'ismust不是字母和数字',
'ismust.alphaDash' => 'ismust不是字母和数字和下划线及破折号',
'ismust.chs' => 'ismust只能是汉字',
'ismust.chsAlpha' => 'ismust只能是汉字、字母',
'ismust.chsAlphaNum' => 'ismust只能是汉字、字母和数字',
'ismust.chsDash' => 'ismust只能是汉字、字母、数字和下划线_及破折号-',
'ismust.activeUrl' => 'ismust不是有效的域名或者IP',
'ismust.url' => 'ismust不是有效的URL地址',
'ismust.ip' => 'ismust不是有效的IP地址',
'ismust.length' => 'ismust长度不符',
'ismust.max' => 'ismust超出最大长度',
'ismust.min' => 'ismust低于最小长度',
];

protected $scene =   [
    'add'=>['fid','f','fname','fzs','ftype','flen','ismust',],
    'edit'=>['fid','f','fname','fzs','ftype','flen','ismust',],
    'ck_id'=>['id']
];

}
