<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsyh extends Validate
{

    protected $rule = [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'yhname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'yhtext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'hlist' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'qlist' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bqnew' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bqhot' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bqpl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bqgood' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bqfirst' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bqdown' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'otherlink' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'qmlist' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dobq' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dojs' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'dosbq' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'rehtml' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

    protected $msg = [
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
        'yhname.require' => 'yhname不能为空',
        'yhname.number' => 'yhname不是数字',
        'yhname.float' => 'yhname不是小数',
        'yhname.boolean' => 'yhname不是布尔值',
        'yhname.email' => 'yhname不是邮箱地址',
        'yhname.array' => 'yhname不是数组',
        'yhname.accepted' => 'yhname请确认',
        'yhname.date' => 'yhname不是有效日期',
        'yhname.alpha' => 'yhname不是字母',
        'yhname.alphaNum' => 'yhname不是字母和数字',
        'yhname.alphaDash' => 'yhname不是字母和数字和下划线及破折号',
        'yhname.chs' => 'yhname只能是汉字',
        'yhname.chsAlpha' => 'yhname只能是汉字、字母',
        'yhname.chsAlphaNum' => 'yhname只能是汉字、字母和数字',
        'yhname.chsDash' => 'yhname只能是汉字、字母、数字和下划线_及破折号-',
        'yhname.activeUrl' => 'yhname不是有效的域名或者IP',
        'yhname.url' => 'yhname不是有效的URL地址',
        'yhname.ip' => 'yhname不是有效的IP地址',
        'yhname.length' => 'yhname长度不符',
        'yhname.max' => 'yhname超出最大长度',
        'yhname.min' => 'yhname低于最小长度',
        'yhtext.require' => 'yhtext不能为空',
        'yhtext.number' => 'yhtext不是数字',
        'yhtext.float' => 'yhtext不是小数',
        'yhtext.boolean' => 'yhtext不是布尔值',
        'yhtext.email' => 'yhtext不是邮箱地址',
        'yhtext.array' => 'yhtext不是数组',
        'yhtext.accepted' => 'yhtext请确认',
        'yhtext.date' => 'yhtext不是有效日期',
        'yhtext.alpha' => 'yhtext不是字母',
        'yhtext.alphaNum' => 'yhtext不是字母和数字',
        'yhtext.alphaDash' => 'yhtext不是字母和数字和下划线及破折号',
        'yhtext.chs' => 'yhtext只能是汉字',
        'yhtext.chsAlpha' => 'yhtext只能是汉字、字母',
        'yhtext.chsAlphaNum' => 'yhtext只能是汉字、字母和数字',
        'yhtext.chsDash' => 'yhtext只能是汉字、字母、数字和下划线_及破折号-',
        'yhtext.activeUrl' => 'yhtext不是有效的域名或者IP',
        'yhtext.url' => 'yhtext不是有效的URL地址',
        'yhtext.ip' => 'yhtext不是有效的IP地址',
        'yhtext.length' => 'yhtext长度不符',
        'yhtext.max' => 'yhtext超出最大长度',
        'yhtext.min' => 'yhtext低于最小长度',
        'hlist.require' => 'hlist不能为空',
        'hlist.number' => 'hlist不是数字',
        'hlist.float' => 'hlist不是小数',
        'hlist.boolean' => 'hlist不是布尔值',
        'hlist.email' => 'hlist不是邮箱地址',
        'hlist.array' => 'hlist不是数组',
        'hlist.accepted' => 'hlist请确认',
        'hlist.date' => 'hlist不是有效日期',
        'hlist.alpha' => 'hlist不是字母',
        'hlist.alphaNum' => 'hlist不是字母和数字',
        'hlist.alphaDash' => 'hlist不是字母和数字和下划线及破折号',
        'hlist.chs' => 'hlist只能是汉字',
        'hlist.chsAlpha' => 'hlist只能是汉字、字母',
        'hlist.chsAlphaNum' => 'hlist只能是汉字、字母和数字',
        'hlist.chsDash' => 'hlist只能是汉字、字母、数字和下划线_及破折号-',
        'hlist.activeUrl' => 'hlist不是有效的域名或者IP',
        'hlist.url' => 'hlist不是有效的URL地址',
        'hlist.ip' => 'hlist不是有效的IP地址',
        'hlist.length' => 'hlist长度不符',
        'hlist.max' => 'hlist超出最大长度',
        'hlist.min' => 'hlist低于最小长度',
        'qlist.require' => 'qlist不能为空',
        'qlist.number' => 'qlist不是数字',
        'qlist.float' => 'qlist不是小数',
        'qlist.boolean' => 'qlist不是布尔值',
        'qlist.email' => 'qlist不是邮箱地址',
        'qlist.array' => 'qlist不是数组',
        'qlist.accepted' => 'qlist请确认',
        'qlist.date' => 'qlist不是有效日期',
        'qlist.alpha' => 'qlist不是字母',
        'qlist.alphaNum' => 'qlist不是字母和数字',
        'qlist.alphaDash' => 'qlist不是字母和数字和下划线及破折号',
        'qlist.chs' => 'qlist只能是汉字',
        'qlist.chsAlpha' => 'qlist只能是汉字、字母',
        'qlist.chsAlphaNum' => 'qlist只能是汉字、字母和数字',
        'qlist.chsDash' => 'qlist只能是汉字、字母、数字和下划线_及破折号-',
        'qlist.activeUrl' => 'qlist不是有效的域名或者IP',
        'qlist.url' => 'qlist不是有效的URL地址',
        'qlist.ip' => 'qlist不是有效的IP地址',
        'qlist.length' => 'qlist长度不符',
        'qlist.max' => 'qlist超出最大长度',
        'qlist.min' => 'qlist低于最小长度',
        'bqnew.require' => 'bqnew不能为空',
        'bqnew.number' => 'bqnew不是数字',
        'bqnew.float' => 'bqnew不是小数',
        'bqnew.boolean' => 'bqnew不是布尔值',
        'bqnew.email' => 'bqnew不是邮箱地址',
        'bqnew.array' => 'bqnew不是数组',
        'bqnew.accepted' => 'bqnew请确认',
        'bqnew.date' => 'bqnew不是有效日期',
        'bqnew.alpha' => 'bqnew不是字母',
        'bqnew.alphaNum' => 'bqnew不是字母和数字',
        'bqnew.alphaDash' => 'bqnew不是字母和数字和下划线及破折号',
        'bqnew.chs' => 'bqnew只能是汉字',
        'bqnew.chsAlpha' => 'bqnew只能是汉字、字母',
        'bqnew.chsAlphaNum' => 'bqnew只能是汉字、字母和数字',
        'bqnew.chsDash' => 'bqnew只能是汉字、字母、数字和下划线_及破折号-',
        'bqnew.activeUrl' => 'bqnew不是有效的域名或者IP',
        'bqnew.url' => 'bqnew不是有效的URL地址',
        'bqnew.ip' => 'bqnew不是有效的IP地址',
        'bqnew.length' => 'bqnew长度不符',
        'bqnew.max' => 'bqnew超出最大长度',
        'bqnew.min' => 'bqnew低于最小长度',
        'bqhot.require' => 'bqhot不能为空',
        'bqhot.number' => 'bqhot不是数字',
        'bqhot.float' => 'bqhot不是小数',
        'bqhot.boolean' => 'bqhot不是布尔值',
        'bqhot.email' => 'bqhot不是邮箱地址',
        'bqhot.array' => 'bqhot不是数组',
        'bqhot.accepted' => 'bqhot请确认',
        'bqhot.date' => 'bqhot不是有效日期',
        'bqhot.alpha' => 'bqhot不是字母',
        'bqhot.alphaNum' => 'bqhot不是字母和数字',
        'bqhot.alphaDash' => 'bqhot不是字母和数字和下划线及破折号',
        'bqhot.chs' => 'bqhot只能是汉字',
        'bqhot.chsAlpha' => 'bqhot只能是汉字、字母',
        'bqhot.chsAlphaNum' => 'bqhot只能是汉字、字母和数字',
        'bqhot.chsDash' => 'bqhot只能是汉字、字母、数字和下划线_及破折号-',
        'bqhot.activeUrl' => 'bqhot不是有效的域名或者IP',
        'bqhot.url' => 'bqhot不是有效的URL地址',
        'bqhot.ip' => 'bqhot不是有效的IP地址',
        'bqhot.length' => 'bqhot长度不符',
        'bqhot.max' => 'bqhot超出最大长度',
        'bqhot.min' => 'bqhot低于最小长度',
        'bqpl.require' => 'bqpl不能为空',
        'bqpl.number' => 'bqpl不是数字',
        'bqpl.float' => 'bqpl不是小数',
        'bqpl.boolean' => 'bqpl不是布尔值',
        'bqpl.email' => 'bqpl不是邮箱地址',
        'bqpl.array' => 'bqpl不是数组',
        'bqpl.accepted' => 'bqpl请确认',
        'bqpl.date' => 'bqpl不是有效日期',
        'bqpl.alpha' => 'bqpl不是字母',
        'bqpl.alphaNum' => 'bqpl不是字母和数字',
        'bqpl.alphaDash' => 'bqpl不是字母和数字和下划线及破折号',
        'bqpl.chs' => 'bqpl只能是汉字',
        'bqpl.chsAlpha' => 'bqpl只能是汉字、字母',
        'bqpl.chsAlphaNum' => 'bqpl只能是汉字、字母和数字',
        'bqpl.chsDash' => 'bqpl只能是汉字、字母、数字和下划线_及破折号-',
        'bqpl.activeUrl' => 'bqpl不是有效的域名或者IP',
        'bqpl.url' => 'bqpl不是有效的URL地址',
        'bqpl.ip' => 'bqpl不是有效的IP地址',
        'bqpl.length' => 'bqpl长度不符',
        'bqpl.max' => 'bqpl超出最大长度',
        'bqpl.min' => 'bqpl低于最小长度',
        'bqgood.require' => 'bqgood不能为空',
        'bqgood.number' => 'bqgood不是数字',
        'bqgood.float' => 'bqgood不是小数',
        'bqgood.boolean' => 'bqgood不是布尔值',
        'bqgood.email' => 'bqgood不是邮箱地址',
        'bqgood.array' => 'bqgood不是数组',
        'bqgood.accepted' => 'bqgood请确认',
        'bqgood.date' => 'bqgood不是有效日期',
        'bqgood.alpha' => 'bqgood不是字母',
        'bqgood.alphaNum' => 'bqgood不是字母和数字',
        'bqgood.alphaDash' => 'bqgood不是字母和数字和下划线及破折号',
        'bqgood.chs' => 'bqgood只能是汉字',
        'bqgood.chsAlpha' => 'bqgood只能是汉字、字母',
        'bqgood.chsAlphaNum' => 'bqgood只能是汉字、字母和数字',
        'bqgood.chsDash' => 'bqgood只能是汉字、字母、数字和下划线_及破折号-',
        'bqgood.activeUrl' => 'bqgood不是有效的域名或者IP',
        'bqgood.url' => 'bqgood不是有效的URL地址',
        'bqgood.ip' => 'bqgood不是有效的IP地址',
        'bqgood.length' => 'bqgood长度不符',
        'bqgood.max' => 'bqgood超出最大长度',
        'bqgood.min' => 'bqgood低于最小长度',
        'bqfirst.require' => 'bqfirst不能为空',
        'bqfirst.number' => 'bqfirst不是数字',
        'bqfirst.float' => 'bqfirst不是小数',
        'bqfirst.boolean' => 'bqfirst不是布尔值',
        'bqfirst.email' => 'bqfirst不是邮箱地址',
        'bqfirst.array' => 'bqfirst不是数组',
        'bqfirst.accepted' => 'bqfirst请确认',
        'bqfirst.date' => 'bqfirst不是有效日期',
        'bqfirst.alpha' => 'bqfirst不是字母',
        'bqfirst.alphaNum' => 'bqfirst不是字母和数字',
        'bqfirst.alphaDash' => 'bqfirst不是字母和数字和下划线及破折号',
        'bqfirst.chs' => 'bqfirst只能是汉字',
        'bqfirst.chsAlpha' => 'bqfirst只能是汉字、字母',
        'bqfirst.chsAlphaNum' => 'bqfirst只能是汉字、字母和数字',
        'bqfirst.chsDash' => 'bqfirst只能是汉字、字母、数字和下划线_及破折号-',
        'bqfirst.activeUrl' => 'bqfirst不是有效的域名或者IP',
        'bqfirst.url' => 'bqfirst不是有效的URL地址',
        'bqfirst.ip' => 'bqfirst不是有效的IP地址',
        'bqfirst.length' => 'bqfirst长度不符',
        'bqfirst.max' => 'bqfirst超出最大长度',
        'bqfirst.min' => 'bqfirst低于最小长度',
        'bqdown.require' => 'bqdown不能为空',
        'bqdown.number' => 'bqdown不是数字',
        'bqdown.float' => 'bqdown不是小数',
        'bqdown.boolean' => 'bqdown不是布尔值',
        'bqdown.email' => 'bqdown不是邮箱地址',
        'bqdown.array' => 'bqdown不是数组',
        'bqdown.accepted' => 'bqdown请确认',
        'bqdown.date' => 'bqdown不是有效日期',
        'bqdown.alpha' => 'bqdown不是字母',
        'bqdown.alphaNum' => 'bqdown不是字母和数字',
        'bqdown.alphaDash' => 'bqdown不是字母和数字和下划线及破折号',
        'bqdown.chs' => 'bqdown只能是汉字',
        'bqdown.chsAlpha' => 'bqdown只能是汉字、字母',
        'bqdown.chsAlphaNum' => 'bqdown只能是汉字、字母和数字',
        'bqdown.chsDash' => 'bqdown只能是汉字、字母、数字和下划线_及破折号-',
        'bqdown.activeUrl' => 'bqdown不是有效的域名或者IP',
        'bqdown.url' => 'bqdown不是有效的URL地址',
        'bqdown.ip' => 'bqdown不是有效的IP地址',
        'bqdown.length' => 'bqdown长度不符',
        'bqdown.max' => 'bqdown超出最大长度',
        'bqdown.min' => 'bqdown低于最小长度',
        'otherlink.require' => 'otherlink不能为空',
        'otherlink.number' => 'otherlink不是数字',
        'otherlink.float' => 'otherlink不是小数',
        'otherlink.boolean' => 'otherlink不是布尔值',
        'otherlink.email' => 'otherlink不是邮箱地址',
        'otherlink.array' => 'otherlink不是数组',
        'otherlink.accepted' => 'otherlink请确认',
        'otherlink.date' => 'otherlink不是有效日期',
        'otherlink.alpha' => 'otherlink不是字母',
        'otherlink.alphaNum' => 'otherlink不是字母和数字',
        'otherlink.alphaDash' => 'otherlink不是字母和数字和下划线及破折号',
        'otherlink.chs' => 'otherlink只能是汉字',
        'otherlink.chsAlpha' => 'otherlink只能是汉字、字母',
        'otherlink.chsAlphaNum' => 'otherlink只能是汉字、字母和数字',
        'otherlink.chsDash' => 'otherlink只能是汉字、字母、数字和下划线_及破折号-',
        'otherlink.activeUrl' => 'otherlink不是有效的域名或者IP',
        'otherlink.url' => 'otherlink不是有效的URL地址',
        'otherlink.ip' => 'otherlink不是有效的IP地址',
        'otherlink.length' => 'otherlink长度不符',
        'otherlink.max' => 'otherlink超出最大长度',
        'otherlink.min' => 'otherlink低于最小长度',
        'qmlist.require' => 'qmlist不能为空',
        'qmlist.number' => 'qmlist不是数字',
        'qmlist.float' => 'qmlist不是小数',
        'qmlist.boolean' => 'qmlist不是布尔值',
        'qmlist.email' => 'qmlist不是邮箱地址',
        'qmlist.array' => 'qmlist不是数组',
        'qmlist.accepted' => 'qmlist请确认',
        'qmlist.date' => 'qmlist不是有效日期',
        'qmlist.alpha' => 'qmlist不是字母',
        'qmlist.alphaNum' => 'qmlist不是字母和数字',
        'qmlist.alphaDash' => 'qmlist不是字母和数字和下划线及破折号',
        'qmlist.chs' => 'qmlist只能是汉字',
        'qmlist.chsAlpha' => 'qmlist只能是汉字、字母',
        'qmlist.chsAlphaNum' => 'qmlist只能是汉字、字母和数字',
        'qmlist.chsDash' => 'qmlist只能是汉字、字母、数字和下划线_及破折号-',
        'qmlist.activeUrl' => 'qmlist不是有效的域名或者IP',
        'qmlist.url' => 'qmlist不是有效的URL地址',
        'qmlist.ip' => 'qmlist不是有效的IP地址',
        'qmlist.length' => 'qmlist长度不符',
        'qmlist.max' => 'qmlist超出最大长度',
        'qmlist.min' => 'qmlist低于最小长度',
        'dobq.require' => 'dobq不能为空',
        'dobq.number' => 'dobq不是数字',
        'dobq.float' => 'dobq不是小数',
        'dobq.boolean' => 'dobq不是布尔值',
        'dobq.email' => 'dobq不是邮箱地址',
        'dobq.array' => 'dobq不是数组',
        'dobq.accepted' => 'dobq请确认',
        'dobq.date' => 'dobq不是有效日期',
        'dobq.alpha' => 'dobq不是字母',
        'dobq.alphaNum' => 'dobq不是字母和数字',
        'dobq.alphaDash' => 'dobq不是字母和数字和下划线及破折号',
        'dobq.chs' => 'dobq只能是汉字',
        'dobq.chsAlpha' => 'dobq只能是汉字、字母',
        'dobq.chsAlphaNum' => 'dobq只能是汉字、字母和数字',
        'dobq.chsDash' => 'dobq只能是汉字、字母、数字和下划线_及破折号-',
        'dobq.activeUrl' => 'dobq不是有效的域名或者IP',
        'dobq.url' => 'dobq不是有效的URL地址',
        'dobq.ip' => 'dobq不是有效的IP地址',
        'dobq.length' => 'dobq长度不符',
        'dobq.max' => 'dobq超出最大长度',
        'dobq.min' => 'dobq低于最小长度',
        'dojs.require' => 'dojs不能为空',
        'dojs.number' => 'dojs不是数字',
        'dojs.float' => 'dojs不是小数',
        'dojs.boolean' => 'dojs不是布尔值',
        'dojs.email' => 'dojs不是邮箱地址',
        'dojs.array' => 'dojs不是数组',
        'dojs.accepted' => 'dojs请确认',
        'dojs.date' => 'dojs不是有效日期',
        'dojs.alpha' => 'dojs不是字母',
        'dojs.alphaNum' => 'dojs不是字母和数字',
        'dojs.alphaDash' => 'dojs不是字母和数字和下划线及破折号',
        'dojs.chs' => 'dojs只能是汉字',
        'dojs.chsAlpha' => 'dojs只能是汉字、字母',
        'dojs.chsAlphaNum' => 'dojs只能是汉字、字母和数字',
        'dojs.chsDash' => 'dojs只能是汉字、字母、数字和下划线_及破折号-',
        'dojs.activeUrl' => 'dojs不是有效的域名或者IP',
        'dojs.url' => 'dojs不是有效的URL地址',
        'dojs.ip' => 'dojs不是有效的IP地址',
        'dojs.length' => 'dojs长度不符',
        'dojs.max' => 'dojs超出最大长度',
        'dojs.min' => 'dojs低于最小长度',
        'dosbq.require' => 'dosbq不能为空',
        'dosbq.number' => 'dosbq不是数字',
        'dosbq.float' => 'dosbq不是小数',
        'dosbq.boolean' => 'dosbq不是布尔值',
        'dosbq.email' => 'dosbq不是邮箱地址',
        'dosbq.array' => 'dosbq不是数组',
        'dosbq.accepted' => 'dosbq请确认',
        'dosbq.date' => 'dosbq不是有效日期',
        'dosbq.alpha' => 'dosbq不是字母',
        'dosbq.alphaNum' => 'dosbq不是字母和数字',
        'dosbq.alphaDash' => 'dosbq不是字母和数字和下划线及破折号',
        'dosbq.chs' => 'dosbq只能是汉字',
        'dosbq.chsAlpha' => 'dosbq只能是汉字、字母',
        'dosbq.chsAlphaNum' => 'dosbq只能是汉字、字母和数字',
        'dosbq.chsDash' => 'dosbq只能是汉字、字母、数字和下划线_及破折号-',
        'dosbq.activeUrl' => 'dosbq不是有效的域名或者IP',
        'dosbq.url' => 'dosbq不是有效的URL地址',
        'dosbq.ip' => 'dosbq不是有效的IP地址',
        'dosbq.length' => 'dosbq长度不符',
        'dosbq.max' => 'dosbq超出最大长度',
        'dosbq.min' => 'dosbq低于最小长度',
        'rehtml.require' => 'rehtml不能为空',
        'rehtml.number' => 'rehtml不是数字',
        'rehtml.float' => 'rehtml不是小数',
        'rehtml.boolean' => 'rehtml不是布尔值',
        'rehtml.email' => 'rehtml不是邮箱地址',
        'rehtml.array' => 'rehtml不是数组',
        'rehtml.accepted' => 'rehtml请确认',
        'rehtml.date' => 'rehtml不是有效日期',
        'rehtml.alpha' => 'rehtml不是字母',
        'rehtml.alphaNum' => 'rehtml不是字母和数字',
        'rehtml.alphaDash' => 'rehtml不是字母和数字和下划线及破折号',
        'rehtml.chs' => 'rehtml只能是汉字',
        'rehtml.chsAlpha' => 'rehtml只能是汉字、字母',
        'rehtml.chsAlphaNum' => 'rehtml只能是汉字、字母和数字',
        'rehtml.chsDash' => 'rehtml只能是汉字、字母、数字和下划线_及破折号-',
        'rehtml.activeUrl' => 'rehtml不是有效的域名或者IP',
        'rehtml.url' => 'rehtml不是有效的URL地址',
        'rehtml.ip' => 'rehtml不是有效的IP地址',
        'rehtml.length' => 'rehtml长度不符',
        'rehtml.max' => 'rehtml超出最大长度',
        'rehtml.min' => 'rehtml低于最小长度',
    ];

    protected $scene = [
        'add' => ['id', 'yhname', 'yhtext', 'hlist', 'qlist', 'bqnew', 'bqhot', 'bqpl', 'bqgood', 'bqfirst', 'bqdown', 'otherlink', 'qmlist', 'dobq', 'dojs', 'dosbq', 'rehtml',],
        'edit' => ['id', 'yhname', 'yhtext', 'hlist', 'qlist', 'bqnew', 'bqhot', 'bqpl', 'bqgood', 'bqfirst', 'bqdown', 'otherlink', 'qmlist', 'dobq', 'dojs', 'dosbq', 'rehtml',],
        'ck_id' => ['id']
    ];

}