<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewsworkflowitem extends Validate{

protected $rule =   [
        'tid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'wfid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tno' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ttext' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'groupid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userclass' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'username' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lztype' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tbdo' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tddo' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'tstatus' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'tid.require' => 'tid不能为空',
'tid.number' => 'tid不是数字',
'tid.float' => 'tid不是小数',
'tid.boolean' => 'tid不是布尔值',
'tid.email' => 'tid不是邮箱地址',
'tid.array' => 'tid不是数组',
'tid.accepted' => 'tid请确认',
'tid.date' => 'tid不是有效日期',
'tid.alpha' => 'tid不是字母',
'tid.alphaNum' => 'tid不是字母和数字',
'tid.alphaDash' => 'tid不是字母和数字和下划线及破折号',
'tid.chs' => 'tid只能是汉字',
'tid.chsAlpha' => 'tid只能是汉字、字母',
'tid.chsAlphaNum' => 'tid只能是汉字、字母和数字',
'tid.chsDash' => 'tid只能是汉字、字母、数字和下划线_及破折号-',
'tid.activeUrl' => 'tid不是有效的域名或者IP',
'tid.url' => 'tid不是有效的URL地址',
'tid.ip' => 'tid不是有效的IP地址',
'tid.length' => 'tid长度不符',
'tid.max' => 'tid超出最大长度',
'tid.min' => 'tid低于最小长度',
'wfid.require' => 'wfid不能为空',
'wfid.number' => 'wfid不是数字',
'wfid.float' => 'wfid不是小数',
'wfid.boolean' => 'wfid不是布尔值',
'wfid.email' => 'wfid不是邮箱地址',
'wfid.array' => 'wfid不是数组',
'wfid.accepted' => 'wfid请确认',
'wfid.date' => 'wfid不是有效日期',
'wfid.alpha' => 'wfid不是字母',
'wfid.alphaNum' => 'wfid不是字母和数字',
'wfid.alphaDash' => 'wfid不是字母和数字和下划线及破折号',
'wfid.chs' => 'wfid只能是汉字',
'wfid.chsAlpha' => 'wfid只能是汉字、字母',
'wfid.chsAlphaNum' => 'wfid只能是汉字、字母和数字',
'wfid.chsDash' => 'wfid只能是汉字、字母、数字和下划线_及破折号-',
'wfid.activeUrl' => 'wfid不是有效的域名或者IP',
'wfid.url' => 'wfid不是有效的URL地址',
'wfid.ip' => 'wfid不是有效的IP地址',
'wfid.length' => 'wfid长度不符',
'wfid.max' => 'wfid超出最大长度',
'wfid.min' => 'wfid低于最小长度',
'tname.require' => 'tname不能为空',
'tname.number' => 'tname不是数字',
'tname.float' => 'tname不是小数',
'tname.boolean' => 'tname不是布尔值',
'tname.email' => 'tname不是邮箱地址',
'tname.array' => 'tname不是数组',
'tname.accepted' => 'tname请确认',
'tname.date' => 'tname不是有效日期',
'tname.alpha' => 'tname不是字母',
'tname.alphaNum' => 'tname不是字母和数字',
'tname.alphaDash' => 'tname不是字母和数字和下划线及破折号',
'tname.chs' => 'tname只能是汉字',
'tname.chsAlpha' => 'tname只能是汉字、字母',
'tname.chsAlphaNum' => 'tname只能是汉字、字母和数字',
'tname.chsDash' => 'tname只能是汉字、字母、数字和下划线_及破折号-',
'tname.activeUrl' => 'tname不是有效的域名或者IP',
'tname.url' => 'tname不是有效的URL地址',
'tname.ip' => 'tname不是有效的IP地址',
'tname.length' => 'tname长度不符',
'tname.max' => 'tname超出最大长度',
'tname.min' => 'tname低于最小长度',
'tno.require' => 'tno不能为空',
'tno.number' => 'tno不是数字',
'tno.float' => 'tno不是小数',
'tno.boolean' => 'tno不是布尔值',
'tno.email' => 'tno不是邮箱地址',
'tno.array' => 'tno不是数组',
'tno.accepted' => 'tno请确认',
'tno.date' => 'tno不是有效日期',
'tno.alpha' => 'tno不是字母',
'tno.alphaNum' => 'tno不是字母和数字',
'tno.alphaDash' => 'tno不是字母和数字和下划线及破折号',
'tno.chs' => 'tno只能是汉字',
'tno.chsAlpha' => 'tno只能是汉字、字母',
'tno.chsAlphaNum' => 'tno只能是汉字、字母和数字',
'tno.chsDash' => 'tno只能是汉字、字母、数字和下划线_及破折号-',
'tno.activeUrl' => 'tno不是有效的域名或者IP',
'tno.url' => 'tno不是有效的URL地址',
'tno.ip' => 'tno不是有效的IP地址',
'tno.length' => 'tno长度不符',
'tno.max' => 'tno超出最大长度',
'tno.min' => 'tno低于最小长度',
'ttext.require' => 'ttext不能为空',
'ttext.number' => 'ttext不是数字',
'ttext.float' => 'ttext不是小数',
'ttext.boolean' => 'ttext不是布尔值',
'ttext.email' => 'ttext不是邮箱地址',
'ttext.array' => 'ttext不是数组',
'ttext.accepted' => 'ttext请确认',
'ttext.date' => 'ttext不是有效日期',
'ttext.alpha' => 'ttext不是字母',
'ttext.alphaNum' => 'ttext不是字母和数字',
'ttext.alphaDash' => 'ttext不是字母和数字和下划线及破折号',
'ttext.chs' => 'ttext只能是汉字',
'ttext.chsAlpha' => 'ttext只能是汉字、字母',
'ttext.chsAlphaNum' => 'ttext只能是汉字、字母和数字',
'ttext.chsDash' => 'ttext只能是汉字、字母、数字和下划线_及破折号-',
'ttext.activeUrl' => 'ttext不是有效的域名或者IP',
'ttext.url' => 'ttext不是有效的URL地址',
'ttext.ip' => 'ttext不是有效的IP地址',
'ttext.length' => 'ttext长度不符',
'ttext.max' => 'ttext超出最大长度',
'ttext.min' => 'ttext低于最小长度',
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
'userclass.require' => 'userclass不能为空',
'userclass.number' => 'userclass不是数字',
'userclass.float' => 'userclass不是小数',
'userclass.boolean' => 'userclass不是布尔值',
'userclass.email' => 'userclass不是邮箱地址',
'userclass.array' => 'userclass不是数组',
'userclass.accepted' => 'userclass请确认',
'userclass.date' => 'userclass不是有效日期',
'userclass.alpha' => 'userclass不是字母',
'userclass.alphaNum' => 'userclass不是字母和数字',
'userclass.alphaDash' => 'userclass不是字母和数字和下划线及破折号',
'userclass.chs' => 'userclass只能是汉字',
'userclass.chsAlpha' => 'userclass只能是汉字、字母',
'userclass.chsAlphaNum' => 'userclass只能是汉字、字母和数字',
'userclass.chsDash' => 'userclass只能是汉字、字母、数字和下划线_及破折号-',
'userclass.activeUrl' => 'userclass不是有效的域名或者IP',
'userclass.url' => 'userclass不是有效的URL地址',
'userclass.ip' => 'userclass不是有效的IP地址',
'userclass.length' => 'userclass长度不符',
'userclass.max' => 'userclass超出最大长度',
'userclass.min' => 'userclass低于最小长度',
'username.require' => 'username不能为空',
'username.number' => 'username不是数字',
'username.float' => 'username不是小数',
'username.boolean' => 'username不是布尔值',
'username.email' => 'username不是邮箱地址',
'username.array' => 'username不是数组',
'username.accepted' => 'username请确认',
'username.date' => 'username不是有效日期',
'username.alpha' => 'username不是字母',
'username.alphaNum' => 'username不是字母和数字',
'username.alphaDash' => 'username不是字母和数字和下划线及破折号',
'username.chs' => 'username只能是汉字',
'username.chsAlpha' => 'username只能是汉字、字母',
'username.chsAlphaNum' => 'username只能是汉字、字母和数字',
'username.chsDash' => 'username只能是汉字、字母、数字和下划线_及破折号-',
'username.activeUrl' => 'username不是有效的域名或者IP',
'username.url' => 'username不是有效的URL地址',
'username.ip' => 'username不是有效的IP地址',
'username.length' => 'username长度不符',
'username.max' => 'username超出最大长度',
'username.min' => 'username低于最小长度',
'lztype.require' => 'lztype不能为空',
'lztype.number' => 'lztype不是数字',
'lztype.float' => 'lztype不是小数',
'lztype.boolean' => 'lztype不是布尔值',
'lztype.email' => 'lztype不是邮箱地址',
'lztype.array' => 'lztype不是数组',
'lztype.accepted' => 'lztype请确认',
'lztype.date' => 'lztype不是有效日期',
'lztype.alpha' => 'lztype不是字母',
'lztype.alphaNum' => 'lztype不是字母和数字',
'lztype.alphaDash' => 'lztype不是字母和数字和下划线及破折号',
'lztype.chs' => 'lztype只能是汉字',
'lztype.chsAlpha' => 'lztype只能是汉字、字母',
'lztype.chsAlphaNum' => 'lztype只能是汉字、字母和数字',
'lztype.chsDash' => 'lztype只能是汉字、字母、数字和下划线_及破折号-',
'lztype.activeUrl' => 'lztype不是有效的域名或者IP',
'lztype.url' => 'lztype不是有效的URL地址',
'lztype.ip' => 'lztype不是有效的IP地址',
'lztype.length' => 'lztype长度不符',
'lztype.max' => 'lztype超出最大长度',
'lztype.min' => 'lztype低于最小长度',
'tbdo.require' => 'tbdo不能为空',
'tbdo.number' => 'tbdo不是数字',
'tbdo.float' => 'tbdo不是小数',
'tbdo.boolean' => 'tbdo不是布尔值',
'tbdo.email' => 'tbdo不是邮箱地址',
'tbdo.array' => 'tbdo不是数组',
'tbdo.accepted' => 'tbdo请确认',
'tbdo.date' => 'tbdo不是有效日期',
'tbdo.alpha' => 'tbdo不是字母',
'tbdo.alphaNum' => 'tbdo不是字母和数字',
'tbdo.alphaDash' => 'tbdo不是字母和数字和下划线及破折号',
'tbdo.chs' => 'tbdo只能是汉字',
'tbdo.chsAlpha' => 'tbdo只能是汉字、字母',
'tbdo.chsAlphaNum' => 'tbdo只能是汉字、字母和数字',
'tbdo.chsDash' => 'tbdo只能是汉字、字母、数字和下划线_及破折号-',
'tbdo.activeUrl' => 'tbdo不是有效的域名或者IP',
'tbdo.url' => 'tbdo不是有效的URL地址',
'tbdo.ip' => 'tbdo不是有效的IP地址',
'tbdo.length' => 'tbdo长度不符',
'tbdo.max' => 'tbdo超出最大长度',
'tbdo.min' => 'tbdo低于最小长度',
'tddo.require' => 'tddo不能为空',
'tddo.number' => 'tddo不是数字',
'tddo.float' => 'tddo不是小数',
'tddo.boolean' => 'tddo不是布尔值',
'tddo.email' => 'tddo不是邮箱地址',
'tddo.array' => 'tddo不是数组',
'tddo.accepted' => 'tddo请确认',
'tddo.date' => 'tddo不是有效日期',
'tddo.alpha' => 'tddo不是字母',
'tddo.alphaNum' => 'tddo不是字母和数字',
'tddo.alphaDash' => 'tddo不是字母和数字和下划线及破折号',
'tddo.chs' => 'tddo只能是汉字',
'tddo.chsAlpha' => 'tddo只能是汉字、字母',
'tddo.chsAlphaNum' => 'tddo只能是汉字、字母和数字',
'tddo.chsDash' => 'tddo只能是汉字、字母、数字和下划线_及破折号-',
'tddo.activeUrl' => 'tddo不是有效的域名或者IP',
'tddo.url' => 'tddo不是有效的URL地址',
'tddo.ip' => 'tddo不是有效的IP地址',
'tddo.length' => 'tddo长度不符',
'tddo.max' => 'tddo超出最大长度',
'tddo.min' => 'tddo低于最小长度',
'tstatus.require' => 'tstatus不能为空',
'tstatus.number' => 'tstatus不是数字',
'tstatus.float' => 'tstatus不是小数',
'tstatus.boolean' => 'tstatus不是布尔值',
'tstatus.email' => 'tstatus不是邮箱地址',
'tstatus.array' => 'tstatus不是数组',
'tstatus.accepted' => 'tstatus请确认',
'tstatus.date' => 'tstatus不是有效日期',
'tstatus.alpha' => 'tstatus不是字母',
'tstatus.alphaNum' => 'tstatus不是字母和数字',
'tstatus.alphaDash' => 'tstatus不是字母和数字和下划线及破折号',
'tstatus.chs' => 'tstatus只能是汉字',
'tstatus.chsAlpha' => 'tstatus只能是汉字、字母',
'tstatus.chsAlphaNum' => 'tstatus只能是汉字、字母和数字',
'tstatus.chsDash' => 'tstatus只能是汉字、字母、数字和下划线_及破折号-',
'tstatus.activeUrl' => 'tstatus不是有效的域名或者IP',
'tstatus.url' => 'tstatus不是有效的URL地址',
'tstatus.ip' => 'tstatus不是有效的IP地址',
'tstatus.length' => 'tstatus长度不符',
'tstatus.max' => 'tstatus超出最大长度',
'tstatus.min' => 'tstatus低于最小长度',
];

protected $scene =   [
    'add'=>['tid','wfid','tname','tno','ttext','groupid','userclass','username','lztype','tbdo','tddo','tstatus',],
    'edit'=>['tid','wfid','tname','tno','ttext','groupid','userclass','username','lztype','tbdo','tddo','tstatus',],
    'ck_id'=>['id']
];

}
