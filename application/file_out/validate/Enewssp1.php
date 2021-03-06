<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewssp1 extends Validate{

protected $rule =   [
        'sid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'spid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titlepic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'bigpic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titleurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'smalltext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titlefont' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titlepre' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titlenext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'sid.require' => 'sid不能为空',
'sid.number' => 'sid不是数字',
'sid.float' => 'sid不是小数',
'sid.boolean' => 'sid不是布尔值',
'sid.email' => 'sid不是邮箱地址',
'sid.array' => 'sid不是数组',
'sid.accepted' => 'sid请确认',
'sid.date' => 'sid不是有效日期',
'sid.alpha' => 'sid不是字母',
'sid.alphaNum' => 'sid不是字母和数字',
'sid.alphaDash' => 'sid不是字母和数字和下划线及破折号',
'sid.chs' => 'sid只能是汉字',
'sid.chsAlpha' => 'sid只能是汉字、字母',
'sid.chsAlphaNum' => 'sid只能是汉字、字母和数字',
'sid.chsDash' => 'sid只能是汉字、字母、数字和下划线_及破折号-',
'sid.activeUrl' => 'sid不是有效的域名或者IP',
'sid.url' => 'sid不是有效的URL地址',
'sid.ip' => 'sid不是有效的IP地址',
'sid.length' => 'sid长度不符',
'sid.max' => 'sid超出最大长度',
'sid.min' => 'sid低于最小长度',
'spid.require' => 'spid不能为空',
'spid.number' => 'spid不是数字',
'spid.float' => 'spid不是小数',
'spid.boolean' => 'spid不是布尔值',
'spid.email' => 'spid不是邮箱地址',
'spid.array' => 'spid不是数组',
'spid.accepted' => 'spid请确认',
'spid.date' => 'spid不是有效日期',
'spid.alpha' => 'spid不是字母',
'spid.alphaNum' => 'spid不是字母和数字',
'spid.alphaDash' => 'spid不是字母和数字和下划线及破折号',
'spid.chs' => 'spid只能是汉字',
'spid.chsAlpha' => 'spid只能是汉字、字母',
'spid.chsAlphaNum' => 'spid只能是汉字、字母和数字',
'spid.chsDash' => 'spid只能是汉字、字母、数字和下划线_及破折号-',
'spid.activeUrl' => 'spid不是有效的域名或者IP',
'spid.url' => 'spid不是有效的URL地址',
'spid.ip' => 'spid不是有效的IP地址',
'spid.length' => 'spid长度不符',
'spid.max' => 'spid超出最大长度',
'spid.min' => 'spid低于最小长度',
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
'titlepic.require' => 'titlepic不能为空',
'titlepic.number' => 'titlepic不是数字',
'titlepic.float' => 'titlepic不是小数',
'titlepic.boolean' => 'titlepic不是布尔值',
'titlepic.email' => 'titlepic不是邮箱地址',
'titlepic.array' => 'titlepic不是数组',
'titlepic.accepted' => 'titlepic请确认',
'titlepic.date' => 'titlepic不是有效日期',
'titlepic.alpha' => 'titlepic不是字母',
'titlepic.alphaNum' => 'titlepic不是字母和数字',
'titlepic.alphaDash' => 'titlepic不是字母和数字和下划线及破折号',
'titlepic.chs' => 'titlepic只能是汉字',
'titlepic.chsAlpha' => 'titlepic只能是汉字、字母',
'titlepic.chsAlphaNum' => 'titlepic只能是汉字、字母和数字',
'titlepic.chsDash' => 'titlepic只能是汉字、字母、数字和下划线_及破折号-',
'titlepic.activeUrl' => 'titlepic不是有效的域名或者IP',
'titlepic.url' => 'titlepic不是有效的URL地址',
'titlepic.ip' => 'titlepic不是有效的IP地址',
'titlepic.length' => 'titlepic长度不符',
'titlepic.max' => 'titlepic超出最大长度',
'titlepic.min' => 'titlepic低于最小长度',
'bigpic.require' => 'bigpic不能为空',
'bigpic.number' => 'bigpic不是数字',
'bigpic.float' => 'bigpic不是小数',
'bigpic.boolean' => 'bigpic不是布尔值',
'bigpic.email' => 'bigpic不是邮箱地址',
'bigpic.array' => 'bigpic不是数组',
'bigpic.accepted' => 'bigpic请确认',
'bigpic.date' => 'bigpic不是有效日期',
'bigpic.alpha' => 'bigpic不是字母',
'bigpic.alphaNum' => 'bigpic不是字母和数字',
'bigpic.alphaDash' => 'bigpic不是字母和数字和下划线及破折号',
'bigpic.chs' => 'bigpic只能是汉字',
'bigpic.chsAlpha' => 'bigpic只能是汉字、字母',
'bigpic.chsAlphaNum' => 'bigpic只能是汉字、字母和数字',
'bigpic.chsDash' => 'bigpic只能是汉字、字母、数字和下划线_及破折号-',
'bigpic.activeUrl' => 'bigpic不是有效的域名或者IP',
'bigpic.url' => 'bigpic不是有效的URL地址',
'bigpic.ip' => 'bigpic不是有效的IP地址',
'bigpic.length' => 'bigpic长度不符',
'bigpic.max' => 'bigpic超出最大长度',
'bigpic.min' => 'bigpic低于最小长度',
'titleurl.require' => 'titleurl不能为空',
'titleurl.number' => 'titleurl不是数字',
'titleurl.float' => 'titleurl不是小数',
'titleurl.boolean' => 'titleurl不是布尔值',
'titleurl.email' => 'titleurl不是邮箱地址',
'titleurl.array' => 'titleurl不是数组',
'titleurl.accepted' => 'titleurl请确认',
'titleurl.date' => 'titleurl不是有效日期',
'titleurl.alpha' => 'titleurl不是字母',
'titleurl.alphaNum' => 'titleurl不是字母和数字',
'titleurl.alphaDash' => 'titleurl不是字母和数字和下划线及破折号',
'titleurl.chs' => 'titleurl只能是汉字',
'titleurl.chsAlpha' => 'titleurl只能是汉字、字母',
'titleurl.chsAlphaNum' => 'titleurl只能是汉字、字母和数字',
'titleurl.chsDash' => 'titleurl只能是汉字、字母、数字和下划线_及破折号-',
'titleurl.activeUrl' => 'titleurl不是有效的域名或者IP',
'titleurl.url' => 'titleurl不是有效的URL地址',
'titleurl.ip' => 'titleurl不是有效的IP地址',
'titleurl.length' => 'titleurl长度不符',
'titleurl.max' => 'titleurl超出最大长度',
'titleurl.min' => 'titleurl低于最小长度',
'smalltext.require' => 'smalltext不能为空',
'smalltext.number' => 'smalltext不是数字',
'smalltext.float' => 'smalltext不是小数',
'smalltext.boolean' => 'smalltext不是布尔值',
'smalltext.email' => 'smalltext不是邮箱地址',
'smalltext.array' => 'smalltext不是数组',
'smalltext.accepted' => 'smalltext请确认',
'smalltext.date' => 'smalltext不是有效日期',
'smalltext.alpha' => 'smalltext不是字母',
'smalltext.alphaNum' => 'smalltext不是字母和数字',
'smalltext.alphaDash' => 'smalltext不是字母和数字和下划线及破折号',
'smalltext.chs' => 'smalltext只能是汉字',
'smalltext.chsAlpha' => 'smalltext只能是汉字、字母',
'smalltext.chsAlphaNum' => 'smalltext只能是汉字、字母和数字',
'smalltext.chsDash' => 'smalltext只能是汉字、字母、数字和下划线_及破折号-',
'smalltext.activeUrl' => 'smalltext不是有效的域名或者IP',
'smalltext.url' => 'smalltext不是有效的URL地址',
'smalltext.ip' => 'smalltext不是有效的IP地址',
'smalltext.length' => 'smalltext长度不符',
'smalltext.max' => 'smalltext超出最大长度',
'smalltext.min' => 'smalltext低于最小长度',
'titlefont.require' => 'titlefont不能为空',
'titlefont.number' => 'titlefont不是数字',
'titlefont.float' => 'titlefont不是小数',
'titlefont.boolean' => 'titlefont不是布尔值',
'titlefont.email' => 'titlefont不是邮箱地址',
'titlefont.array' => 'titlefont不是数组',
'titlefont.accepted' => 'titlefont请确认',
'titlefont.date' => 'titlefont不是有效日期',
'titlefont.alpha' => 'titlefont不是字母',
'titlefont.alphaNum' => 'titlefont不是字母和数字',
'titlefont.alphaDash' => 'titlefont不是字母和数字和下划线及破折号',
'titlefont.chs' => 'titlefont只能是汉字',
'titlefont.chsAlpha' => 'titlefont只能是汉字、字母',
'titlefont.chsAlphaNum' => 'titlefont只能是汉字、字母和数字',
'titlefont.chsDash' => 'titlefont只能是汉字、字母、数字和下划线_及破折号-',
'titlefont.activeUrl' => 'titlefont不是有效的域名或者IP',
'titlefont.url' => 'titlefont不是有效的URL地址',
'titlefont.ip' => 'titlefont不是有效的IP地址',
'titlefont.length' => 'titlefont长度不符',
'titlefont.max' => 'titlefont超出最大长度',
'titlefont.min' => 'titlefont低于最小长度',
'newstime.require' => 'newstime不能为空',
'newstime.number' => 'newstime不是数字',
'newstime.float' => 'newstime不是小数',
'newstime.boolean' => 'newstime不是布尔值',
'newstime.email' => 'newstime不是邮箱地址',
'newstime.array' => 'newstime不是数组',
'newstime.accepted' => 'newstime请确认',
'newstime.date' => 'newstime不是有效日期',
'newstime.alpha' => 'newstime不是字母',
'newstime.alphaNum' => 'newstime不是字母和数字',
'newstime.alphaDash' => 'newstime不是字母和数字和下划线及破折号',
'newstime.chs' => 'newstime只能是汉字',
'newstime.chsAlpha' => 'newstime只能是汉字、字母',
'newstime.chsAlphaNum' => 'newstime只能是汉字、字母和数字',
'newstime.chsDash' => 'newstime只能是汉字、字母、数字和下划线_及破折号-',
'newstime.activeUrl' => 'newstime不是有效的域名或者IP',
'newstime.url' => 'newstime不是有效的URL地址',
'newstime.ip' => 'newstime不是有效的IP地址',
'newstime.length' => 'newstime长度不符',
'newstime.max' => 'newstime超出最大长度',
'newstime.min' => 'newstime低于最小长度',
'titlepre.require' => 'titlepre不能为空',
'titlepre.number' => 'titlepre不是数字',
'titlepre.float' => 'titlepre不是小数',
'titlepre.boolean' => 'titlepre不是布尔值',
'titlepre.email' => 'titlepre不是邮箱地址',
'titlepre.array' => 'titlepre不是数组',
'titlepre.accepted' => 'titlepre请确认',
'titlepre.date' => 'titlepre不是有效日期',
'titlepre.alpha' => 'titlepre不是字母',
'titlepre.alphaNum' => 'titlepre不是字母和数字',
'titlepre.alphaDash' => 'titlepre不是字母和数字和下划线及破折号',
'titlepre.chs' => 'titlepre只能是汉字',
'titlepre.chsAlpha' => 'titlepre只能是汉字、字母',
'titlepre.chsAlphaNum' => 'titlepre只能是汉字、字母和数字',
'titlepre.chsDash' => 'titlepre只能是汉字、字母、数字和下划线_及破折号-',
'titlepre.activeUrl' => 'titlepre不是有效的域名或者IP',
'titlepre.url' => 'titlepre不是有效的URL地址',
'titlepre.ip' => 'titlepre不是有效的IP地址',
'titlepre.length' => 'titlepre长度不符',
'titlepre.max' => 'titlepre超出最大长度',
'titlepre.min' => 'titlepre低于最小长度',
'titlenext.require' => 'titlenext不能为空',
'titlenext.number' => 'titlenext不是数字',
'titlenext.float' => 'titlenext不是小数',
'titlenext.boolean' => 'titlenext不是布尔值',
'titlenext.email' => 'titlenext不是邮箱地址',
'titlenext.array' => 'titlenext不是数组',
'titlenext.accepted' => 'titlenext请确认',
'titlenext.date' => 'titlenext不是有效日期',
'titlenext.alpha' => 'titlenext不是字母',
'titlenext.alphaNum' => 'titlenext不是字母和数字',
'titlenext.alphaDash' => 'titlenext不是字母和数字和下划线及破折号',
'titlenext.chs' => 'titlenext只能是汉字',
'titlenext.chsAlpha' => 'titlenext只能是汉字、字母',
'titlenext.chsAlphaNum' => 'titlenext只能是汉字、字母和数字',
'titlenext.chsDash' => 'titlenext只能是汉字、字母、数字和下划线_及破折号-',
'titlenext.activeUrl' => 'titlenext不是有效的域名或者IP',
'titlenext.url' => 'titlenext不是有效的URL地址',
'titlenext.ip' => 'titlenext不是有效的IP地址',
'titlenext.length' => 'titlenext长度不符',
'titlenext.max' => 'titlenext超出最大长度',
'titlenext.min' => 'titlenext低于最小长度',
];

protected $scene =   [
    'add'=>['sid','spid','title','titlepic','bigpic','titleurl','smalltext','titlefont','newstime','titlepre','titlenext',],
    'edit'=>['sid','spid','title','titlepic','bigpic','titleurl','smalltext','titlefont','newstime','titlepre','titlenext',],
    'ck_id'=>['id']
];

}
