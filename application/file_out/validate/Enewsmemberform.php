<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsmemberform extends Validate{

protected $rule =   [
        'fid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ftemp' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fzs' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'enter' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'mustenter' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'filef' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'imgf' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tobrf' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'viewenter' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'searchvar' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'canaddf' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'caneditf' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'checkboxf' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'ftemp.require' => 'ftemp不能为空',
'ftemp.number' => 'ftemp不是数字',
'ftemp.float' => 'ftemp不是小数',
'ftemp.boolean' => 'ftemp不是布尔值',
'ftemp.email' => 'ftemp不是邮箱地址',
'ftemp.array' => 'ftemp不是数组',
'ftemp.accepted' => 'ftemp请确认',
'ftemp.date' => 'ftemp不是有效日期',
'ftemp.alpha' => 'ftemp不是字母',
'ftemp.alphaNum' => 'ftemp不是字母和数字',
'ftemp.alphaDash' => 'ftemp不是字母和数字和下划线及破折号',
'ftemp.chs' => 'ftemp只能是汉字',
'ftemp.chsAlpha' => 'ftemp只能是汉字、字母',
'ftemp.chsAlphaNum' => 'ftemp只能是汉字、字母和数字',
'ftemp.chsDash' => 'ftemp只能是汉字、字母、数字和下划线_及破折号-',
'ftemp.activeUrl' => 'ftemp不是有效的域名或者IP',
'ftemp.url' => 'ftemp不是有效的URL地址',
'ftemp.ip' => 'ftemp不是有效的IP地址',
'ftemp.length' => 'ftemp长度不符',
'ftemp.max' => 'ftemp超出最大长度',
'ftemp.min' => 'ftemp低于最小长度',
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
'enter.require' => 'enter不能为空',
'enter.number' => 'enter不是数字',
'enter.float' => 'enter不是小数',
'enter.boolean' => 'enter不是布尔值',
'enter.email' => 'enter不是邮箱地址',
'enter.array' => 'enter不是数组',
'enter.accepted' => 'enter请确认',
'enter.date' => 'enter不是有效日期',
'enter.alpha' => 'enter不是字母',
'enter.alphaNum' => 'enter不是字母和数字',
'enter.alphaDash' => 'enter不是字母和数字和下划线及破折号',
'enter.chs' => 'enter只能是汉字',
'enter.chsAlpha' => 'enter只能是汉字、字母',
'enter.chsAlphaNum' => 'enter只能是汉字、字母和数字',
'enter.chsDash' => 'enter只能是汉字、字母、数字和下划线_及破折号-',
'enter.activeUrl' => 'enter不是有效的域名或者IP',
'enter.url' => 'enter不是有效的URL地址',
'enter.ip' => 'enter不是有效的IP地址',
'enter.length' => 'enter长度不符',
'enter.max' => 'enter超出最大长度',
'enter.min' => 'enter低于最小长度',
'mustenter.require' => 'mustenter不能为空',
'mustenter.number' => 'mustenter不是数字',
'mustenter.float' => 'mustenter不是小数',
'mustenter.boolean' => 'mustenter不是布尔值',
'mustenter.email' => 'mustenter不是邮箱地址',
'mustenter.array' => 'mustenter不是数组',
'mustenter.accepted' => 'mustenter请确认',
'mustenter.date' => 'mustenter不是有效日期',
'mustenter.alpha' => 'mustenter不是字母',
'mustenter.alphaNum' => 'mustenter不是字母和数字',
'mustenter.alphaDash' => 'mustenter不是字母和数字和下划线及破折号',
'mustenter.chs' => 'mustenter只能是汉字',
'mustenter.chsAlpha' => 'mustenter只能是汉字、字母',
'mustenter.chsAlphaNum' => 'mustenter只能是汉字、字母和数字',
'mustenter.chsDash' => 'mustenter只能是汉字、字母、数字和下划线_及破折号-',
'mustenter.activeUrl' => 'mustenter不是有效的域名或者IP',
'mustenter.url' => 'mustenter不是有效的URL地址',
'mustenter.ip' => 'mustenter不是有效的IP地址',
'mustenter.length' => 'mustenter长度不符',
'mustenter.max' => 'mustenter超出最大长度',
'mustenter.min' => 'mustenter低于最小长度',
'filef.require' => 'filef不能为空',
'filef.number' => 'filef不是数字',
'filef.float' => 'filef不是小数',
'filef.boolean' => 'filef不是布尔值',
'filef.email' => 'filef不是邮箱地址',
'filef.array' => 'filef不是数组',
'filef.accepted' => 'filef请确认',
'filef.date' => 'filef不是有效日期',
'filef.alpha' => 'filef不是字母',
'filef.alphaNum' => 'filef不是字母和数字',
'filef.alphaDash' => 'filef不是字母和数字和下划线及破折号',
'filef.chs' => 'filef只能是汉字',
'filef.chsAlpha' => 'filef只能是汉字、字母',
'filef.chsAlphaNum' => 'filef只能是汉字、字母和数字',
'filef.chsDash' => 'filef只能是汉字、字母、数字和下划线_及破折号-',
'filef.activeUrl' => 'filef不是有效的域名或者IP',
'filef.url' => 'filef不是有效的URL地址',
'filef.ip' => 'filef不是有效的IP地址',
'filef.length' => 'filef长度不符',
'filef.max' => 'filef超出最大长度',
'filef.min' => 'filef低于最小长度',
'imgf.require' => 'imgf不能为空',
'imgf.number' => 'imgf不是数字',
'imgf.float' => 'imgf不是小数',
'imgf.boolean' => 'imgf不是布尔值',
'imgf.email' => 'imgf不是邮箱地址',
'imgf.array' => 'imgf不是数组',
'imgf.accepted' => 'imgf请确认',
'imgf.date' => 'imgf不是有效日期',
'imgf.alpha' => 'imgf不是字母',
'imgf.alphaNum' => 'imgf不是字母和数字',
'imgf.alphaDash' => 'imgf不是字母和数字和下划线及破折号',
'imgf.chs' => 'imgf只能是汉字',
'imgf.chsAlpha' => 'imgf只能是汉字、字母',
'imgf.chsAlphaNum' => 'imgf只能是汉字、字母和数字',
'imgf.chsDash' => 'imgf只能是汉字、字母、数字和下划线_及破折号-',
'imgf.activeUrl' => 'imgf不是有效的域名或者IP',
'imgf.url' => 'imgf不是有效的URL地址',
'imgf.ip' => 'imgf不是有效的IP地址',
'imgf.length' => 'imgf长度不符',
'imgf.max' => 'imgf超出最大长度',
'imgf.min' => 'imgf低于最小长度',
'tobrf.require' => 'tobrf不能为空',
'tobrf.number' => 'tobrf不是数字',
'tobrf.float' => 'tobrf不是小数',
'tobrf.boolean' => 'tobrf不是布尔值',
'tobrf.email' => 'tobrf不是邮箱地址',
'tobrf.array' => 'tobrf不是数组',
'tobrf.accepted' => 'tobrf请确认',
'tobrf.date' => 'tobrf不是有效日期',
'tobrf.alpha' => 'tobrf不是字母',
'tobrf.alphaNum' => 'tobrf不是字母和数字',
'tobrf.alphaDash' => 'tobrf不是字母和数字和下划线及破折号',
'tobrf.chs' => 'tobrf只能是汉字',
'tobrf.chsAlpha' => 'tobrf只能是汉字、字母',
'tobrf.chsAlphaNum' => 'tobrf只能是汉字、字母和数字',
'tobrf.chsDash' => 'tobrf只能是汉字、字母、数字和下划线_及破折号-',
'tobrf.activeUrl' => 'tobrf不是有效的域名或者IP',
'tobrf.url' => 'tobrf不是有效的URL地址',
'tobrf.ip' => 'tobrf不是有效的IP地址',
'tobrf.length' => 'tobrf长度不符',
'tobrf.max' => 'tobrf超出最大长度',
'tobrf.min' => 'tobrf低于最小长度',
'viewenter.require' => 'viewenter不能为空',
'viewenter.number' => 'viewenter不是数字',
'viewenter.float' => 'viewenter不是小数',
'viewenter.boolean' => 'viewenter不是布尔值',
'viewenter.email' => 'viewenter不是邮箱地址',
'viewenter.array' => 'viewenter不是数组',
'viewenter.accepted' => 'viewenter请确认',
'viewenter.date' => 'viewenter不是有效日期',
'viewenter.alpha' => 'viewenter不是字母',
'viewenter.alphaNum' => 'viewenter不是字母和数字',
'viewenter.alphaDash' => 'viewenter不是字母和数字和下划线及破折号',
'viewenter.chs' => 'viewenter只能是汉字',
'viewenter.chsAlpha' => 'viewenter只能是汉字、字母',
'viewenter.chsAlphaNum' => 'viewenter只能是汉字、字母和数字',
'viewenter.chsDash' => 'viewenter只能是汉字、字母、数字和下划线_及破折号-',
'viewenter.activeUrl' => 'viewenter不是有效的域名或者IP',
'viewenter.url' => 'viewenter不是有效的URL地址',
'viewenter.ip' => 'viewenter不是有效的IP地址',
'viewenter.length' => 'viewenter长度不符',
'viewenter.max' => 'viewenter超出最大长度',
'viewenter.min' => 'viewenter低于最小长度',
'searchvar.require' => 'searchvar不能为空',
'searchvar.number' => 'searchvar不是数字',
'searchvar.float' => 'searchvar不是小数',
'searchvar.boolean' => 'searchvar不是布尔值',
'searchvar.email' => 'searchvar不是邮箱地址',
'searchvar.array' => 'searchvar不是数组',
'searchvar.accepted' => 'searchvar请确认',
'searchvar.date' => 'searchvar不是有效日期',
'searchvar.alpha' => 'searchvar不是字母',
'searchvar.alphaNum' => 'searchvar不是字母和数字',
'searchvar.alphaDash' => 'searchvar不是字母和数字和下划线及破折号',
'searchvar.chs' => 'searchvar只能是汉字',
'searchvar.chsAlpha' => 'searchvar只能是汉字、字母',
'searchvar.chsAlphaNum' => 'searchvar只能是汉字、字母和数字',
'searchvar.chsDash' => 'searchvar只能是汉字、字母、数字和下划线_及破折号-',
'searchvar.activeUrl' => 'searchvar不是有效的域名或者IP',
'searchvar.url' => 'searchvar不是有效的URL地址',
'searchvar.ip' => 'searchvar不是有效的IP地址',
'searchvar.length' => 'searchvar长度不符',
'searchvar.max' => 'searchvar超出最大长度',
'searchvar.min' => 'searchvar低于最小长度',
'canaddf.require' => 'canaddf不能为空',
'canaddf.number' => 'canaddf不是数字',
'canaddf.float' => 'canaddf不是小数',
'canaddf.boolean' => 'canaddf不是布尔值',
'canaddf.email' => 'canaddf不是邮箱地址',
'canaddf.array' => 'canaddf不是数组',
'canaddf.accepted' => 'canaddf请确认',
'canaddf.date' => 'canaddf不是有效日期',
'canaddf.alpha' => 'canaddf不是字母',
'canaddf.alphaNum' => 'canaddf不是字母和数字',
'canaddf.alphaDash' => 'canaddf不是字母和数字和下划线及破折号',
'canaddf.chs' => 'canaddf只能是汉字',
'canaddf.chsAlpha' => 'canaddf只能是汉字、字母',
'canaddf.chsAlphaNum' => 'canaddf只能是汉字、字母和数字',
'canaddf.chsDash' => 'canaddf只能是汉字、字母、数字和下划线_及破折号-',
'canaddf.activeUrl' => 'canaddf不是有效的域名或者IP',
'canaddf.url' => 'canaddf不是有效的URL地址',
'canaddf.ip' => 'canaddf不是有效的IP地址',
'canaddf.length' => 'canaddf长度不符',
'canaddf.max' => 'canaddf超出最大长度',
'canaddf.min' => 'canaddf低于最小长度',
'caneditf.require' => 'caneditf不能为空',
'caneditf.number' => 'caneditf不是数字',
'caneditf.float' => 'caneditf不是小数',
'caneditf.boolean' => 'caneditf不是布尔值',
'caneditf.email' => 'caneditf不是邮箱地址',
'caneditf.array' => 'caneditf不是数组',
'caneditf.accepted' => 'caneditf请确认',
'caneditf.date' => 'caneditf不是有效日期',
'caneditf.alpha' => 'caneditf不是字母',
'caneditf.alphaNum' => 'caneditf不是字母和数字',
'caneditf.alphaDash' => 'caneditf不是字母和数字和下划线及破折号',
'caneditf.chs' => 'caneditf只能是汉字',
'caneditf.chsAlpha' => 'caneditf只能是汉字、字母',
'caneditf.chsAlphaNum' => 'caneditf只能是汉字、字母和数字',
'caneditf.chsDash' => 'caneditf只能是汉字、字母、数字和下划线_及破折号-',
'caneditf.activeUrl' => 'caneditf不是有效的域名或者IP',
'caneditf.url' => 'caneditf不是有效的URL地址',
'caneditf.ip' => 'caneditf不是有效的IP地址',
'caneditf.length' => 'caneditf长度不符',
'caneditf.max' => 'caneditf超出最大长度',
'caneditf.min' => 'caneditf低于最小长度',
'checkboxf.require' => 'checkboxf不能为空',
'checkboxf.number' => 'checkboxf不是数字',
'checkboxf.float' => 'checkboxf不是小数',
'checkboxf.boolean' => 'checkboxf不是布尔值',
'checkboxf.email' => 'checkboxf不是邮箱地址',
'checkboxf.array' => 'checkboxf不是数组',
'checkboxf.accepted' => 'checkboxf请确认',
'checkboxf.date' => 'checkboxf不是有效日期',
'checkboxf.alpha' => 'checkboxf不是字母',
'checkboxf.alphaNum' => 'checkboxf不是字母和数字',
'checkboxf.alphaDash' => 'checkboxf不是字母和数字和下划线及破折号',
'checkboxf.chs' => 'checkboxf只能是汉字',
'checkboxf.chsAlpha' => 'checkboxf只能是汉字、字母',
'checkboxf.chsAlphaNum' => 'checkboxf只能是汉字、字母和数字',
'checkboxf.chsDash' => 'checkboxf只能是汉字、字母、数字和下划线_及破折号-',
'checkboxf.activeUrl' => 'checkboxf不是有效的域名或者IP',
'checkboxf.url' => 'checkboxf不是有效的URL地址',
'checkboxf.ip' => 'checkboxf不是有效的IP地址',
'checkboxf.length' => 'checkboxf长度不符',
'checkboxf.max' => 'checkboxf超出最大长度',
'checkboxf.min' => 'checkboxf低于最小长度',
];

protected $scene =   [
    'add'=>['fid','fname','ftemp','fzs','enter','mustenter','filef','imgf','tobrf','viewenter','searchvar','canaddf','caneditf','checkboxf',],
    'edit'=>['fid','fname','ftemp','fzs','enter','mustenter','filef','imgf','tobrf','viewenter','searchvar','canaddf','caneditf','checkboxf',],
    'ck_id'=>['id']
];

}
