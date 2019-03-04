<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsmemberf extends Validate{

protected $rule =   [
        'fid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'f' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fform' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fhtml' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fzs' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'myorder' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ftype' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'flen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fvalue' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fformsize' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'fform.require' => 'fform不能为空',
'fform.number' => 'fform不是数字',
'fform.float' => 'fform不是小数',
'fform.boolean' => 'fform不是布尔值',
'fform.email' => 'fform不是邮箱地址',
'fform.array' => 'fform不是数组',
'fform.accepted' => 'fform请确认',
'fform.date' => 'fform不是有效日期',
'fform.alpha' => 'fform不是字母',
'fform.alphaNum' => 'fform不是字母和数字',
'fform.alphaDash' => 'fform不是字母和数字和下划线及破折号',
'fform.chs' => 'fform只能是汉字',
'fform.chsAlpha' => 'fform只能是汉字、字母',
'fform.chsAlphaNum' => 'fform只能是汉字、字母和数字',
'fform.chsDash' => 'fform只能是汉字、字母、数字和下划线_及破折号-',
'fform.activeUrl' => 'fform不是有效的域名或者IP',
'fform.url' => 'fform不是有效的URL地址',
'fform.ip' => 'fform不是有效的IP地址',
'fform.length' => 'fform长度不符',
'fform.max' => 'fform超出最大长度',
'fform.min' => 'fform低于最小长度',
'fhtml.require' => 'fhtml不能为空',
'fhtml.number' => 'fhtml不是数字',
'fhtml.float' => 'fhtml不是小数',
'fhtml.boolean' => 'fhtml不是布尔值',
'fhtml.email' => 'fhtml不是邮箱地址',
'fhtml.array' => 'fhtml不是数组',
'fhtml.accepted' => 'fhtml请确认',
'fhtml.date' => 'fhtml不是有效日期',
'fhtml.alpha' => 'fhtml不是字母',
'fhtml.alphaNum' => 'fhtml不是字母和数字',
'fhtml.alphaDash' => 'fhtml不是字母和数字和下划线及破折号',
'fhtml.chs' => 'fhtml只能是汉字',
'fhtml.chsAlpha' => 'fhtml只能是汉字、字母',
'fhtml.chsAlphaNum' => 'fhtml只能是汉字、字母和数字',
'fhtml.chsDash' => 'fhtml只能是汉字、字母、数字和下划线_及破折号-',
'fhtml.activeUrl' => 'fhtml不是有效的域名或者IP',
'fhtml.url' => 'fhtml不是有效的URL地址',
'fhtml.ip' => 'fhtml不是有效的IP地址',
'fhtml.length' => 'fhtml长度不符',
'fhtml.max' => 'fhtml超出最大长度',
'fhtml.min' => 'fhtml低于最小长度',
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
'fvalue.require' => 'fvalue不能为空',
'fvalue.number' => 'fvalue不是数字',
'fvalue.float' => 'fvalue不是小数',
'fvalue.boolean' => 'fvalue不是布尔值',
'fvalue.email' => 'fvalue不是邮箱地址',
'fvalue.array' => 'fvalue不是数组',
'fvalue.accepted' => 'fvalue请确认',
'fvalue.date' => 'fvalue不是有效日期',
'fvalue.alpha' => 'fvalue不是字母',
'fvalue.alphaNum' => 'fvalue不是字母和数字',
'fvalue.alphaDash' => 'fvalue不是字母和数字和下划线及破折号',
'fvalue.chs' => 'fvalue只能是汉字',
'fvalue.chsAlpha' => 'fvalue只能是汉字、字母',
'fvalue.chsAlphaNum' => 'fvalue只能是汉字、字母和数字',
'fvalue.chsDash' => 'fvalue只能是汉字、字母、数字和下划线_及破折号-',
'fvalue.activeUrl' => 'fvalue不是有效的域名或者IP',
'fvalue.url' => 'fvalue不是有效的URL地址',
'fvalue.ip' => 'fvalue不是有效的IP地址',
'fvalue.length' => 'fvalue长度不符',
'fvalue.max' => 'fvalue超出最大长度',
'fvalue.min' => 'fvalue低于最小长度',
'fformsize.require' => 'fformsize不能为空',
'fformsize.number' => 'fformsize不是数字',
'fformsize.float' => 'fformsize不是小数',
'fformsize.boolean' => 'fformsize不是布尔值',
'fformsize.email' => 'fformsize不是邮箱地址',
'fformsize.array' => 'fformsize不是数组',
'fformsize.accepted' => 'fformsize请确认',
'fformsize.date' => 'fformsize不是有效日期',
'fformsize.alpha' => 'fformsize不是字母',
'fformsize.alphaNum' => 'fformsize不是字母和数字',
'fformsize.alphaDash' => 'fformsize不是字母和数字和下划线及破折号',
'fformsize.chs' => 'fformsize只能是汉字',
'fformsize.chsAlpha' => 'fformsize只能是汉字、字母',
'fformsize.chsAlphaNum' => 'fformsize只能是汉字、字母和数字',
'fformsize.chsDash' => 'fformsize只能是汉字、字母、数字和下划线_及破折号-',
'fformsize.activeUrl' => 'fformsize不是有效的域名或者IP',
'fformsize.url' => 'fformsize不是有效的URL地址',
'fformsize.ip' => 'fformsize不是有效的IP地址',
'fformsize.length' => 'fformsize长度不符',
'fformsize.max' => 'fformsize超出最大长度',
'fformsize.min' => 'fformsize低于最小长度',
];

protected $scene =   [
    'add'=>['fid','f','fname','fform','fhtml','fzs','myorder','ftype','flen','fvalue','fformsize',],
    'edit'=>['fid','f','fname','fform','fhtml','fzs','myorder','ftype','flen','fvalue','fformsize',],
    'ck_id'=>['id']
];

}
