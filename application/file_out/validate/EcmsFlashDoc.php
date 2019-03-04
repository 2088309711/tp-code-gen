<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class EcmsFlashDoc extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ttid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'onclick' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'plnum' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'totaldown' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newspath' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'filename' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'username' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'firsttitle' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isgood' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ispic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'istop' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isqf' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ismember' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'isurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'truetime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lastdotime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'havehtml' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'groupid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'userfen' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titlefont' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titleurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'stb' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'fstb' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'restb' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'keyboard' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'newstime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'titlepic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'eckuid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'flashwriter' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'email' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'star' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'filesize' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'flashurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'width' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'height' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'flashsay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'ttid.require' => 'ttid不能为空',
'ttid.number' => 'ttid不是数字',
'ttid.float' => 'ttid不是小数',
'ttid.boolean' => 'ttid不是布尔值',
'ttid.email' => 'ttid不是邮箱地址',
'ttid.array' => 'ttid不是数组',
'ttid.accepted' => 'ttid请确认',
'ttid.date' => 'ttid不是有效日期',
'ttid.alpha' => 'ttid不是字母',
'ttid.alphaNum' => 'ttid不是字母和数字',
'ttid.alphaDash' => 'ttid不是字母和数字和下划线及破折号',
'ttid.chs' => 'ttid只能是汉字',
'ttid.chsAlpha' => 'ttid只能是汉字、字母',
'ttid.chsAlphaNum' => 'ttid只能是汉字、字母和数字',
'ttid.chsDash' => 'ttid只能是汉字、字母、数字和下划线_及破折号-',
'ttid.activeUrl' => 'ttid不是有效的域名或者IP',
'ttid.url' => 'ttid不是有效的URL地址',
'ttid.ip' => 'ttid不是有效的IP地址',
'ttid.length' => 'ttid长度不符',
'ttid.max' => 'ttid超出最大长度',
'ttid.min' => 'ttid低于最小长度',
'onclick.require' => 'onclick不能为空',
'onclick.number' => 'onclick不是数字',
'onclick.float' => 'onclick不是小数',
'onclick.boolean' => 'onclick不是布尔值',
'onclick.email' => 'onclick不是邮箱地址',
'onclick.array' => 'onclick不是数组',
'onclick.accepted' => 'onclick请确认',
'onclick.date' => 'onclick不是有效日期',
'onclick.alpha' => 'onclick不是字母',
'onclick.alphaNum' => 'onclick不是字母和数字',
'onclick.alphaDash' => 'onclick不是字母和数字和下划线及破折号',
'onclick.chs' => 'onclick只能是汉字',
'onclick.chsAlpha' => 'onclick只能是汉字、字母',
'onclick.chsAlphaNum' => 'onclick只能是汉字、字母和数字',
'onclick.chsDash' => 'onclick只能是汉字、字母、数字和下划线_及破折号-',
'onclick.activeUrl' => 'onclick不是有效的域名或者IP',
'onclick.url' => 'onclick不是有效的URL地址',
'onclick.ip' => 'onclick不是有效的IP地址',
'onclick.length' => 'onclick长度不符',
'onclick.max' => 'onclick超出最大长度',
'onclick.min' => 'onclick低于最小长度',
'plnum.require' => 'plnum不能为空',
'plnum.number' => 'plnum不是数字',
'plnum.float' => 'plnum不是小数',
'plnum.boolean' => 'plnum不是布尔值',
'plnum.email' => 'plnum不是邮箱地址',
'plnum.array' => 'plnum不是数组',
'plnum.accepted' => 'plnum请确认',
'plnum.date' => 'plnum不是有效日期',
'plnum.alpha' => 'plnum不是字母',
'plnum.alphaNum' => 'plnum不是字母和数字',
'plnum.alphaDash' => 'plnum不是字母和数字和下划线及破折号',
'plnum.chs' => 'plnum只能是汉字',
'plnum.chsAlpha' => 'plnum只能是汉字、字母',
'plnum.chsAlphaNum' => 'plnum只能是汉字、字母和数字',
'plnum.chsDash' => 'plnum只能是汉字、字母、数字和下划线_及破折号-',
'plnum.activeUrl' => 'plnum不是有效的域名或者IP',
'plnum.url' => 'plnum不是有效的URL地址',
'plnum.ip' => 'plnum不是有效的IP地址',
'plnum.length' => 'plnum长度不符',
'plnum.max' => 'plnum超出最大长度',
'plnum.min' => 'plnum低于最小长度',
'totaldown.require' => 'totaldown不能为空',
'totaldown.number' => 'totaldown不是数字',
'totaldown.float' => 'totaldown不是小数',
'totaldown.boolean' => 'totaldown不是布尔值',
'totaldown.email' => 'totaldown不是邮箱地址',
'totaldown.array' => 'totaldown不是数组',
'totaldown.accepted' => 'totaldown请确认',
'totaldown.date' => 'totaldown不是有效日期',
'totaldown.alpha' => 'totaldown不是字母',
'totaldown.alphaNum' => 'totaldown不是字母和数字',
'totaldown.alphaDash' => 'totaldown不是字母和数字和下划线及破折号',
'totaldown.chs' => 'totaldown只能是汉字',
'totaldown.chsAlpha' => 'totaldown只能是汉字、字母',
'totaldown.chsAlphaNum' => 'totaldown只能是汉字、字母和数字',
'totaldown.chsDash' => 'totaldown只能是汉字、字母、数字和下划线_及破折号-',
'totaldown.activeUrl' => 'totaldown不是有效的域名或者IP',
'totaldown.url' => 'totaldown不是有效的URL地址',
'totaldown.ip' => 'totaldown不是有效的IP地址',
'totaldown.length' => 'totaldown长度不符',
'totaldown.max' => 'totaldown超出最大长度',
'totaldown.min' => 'totaldown低于最小长度',
'newspath.require' => 'newspath不能为空',
'newspath.number' => 'newspath不是数字',
'newspath.float' => 'newspath不是小数',
'newspath.boolean' => 'newspath不是布尔值',
'newspath.email' => 'newspath不是邮箱地址',
'newspath.array' => 'newspath不是数组',
'newspath.accepted' => 'newspath请确认',
'newspath.date' => 'newspath不是有效日期',
'newspath.alpha' => 'newspath不是字母',
'newspath.alphaNum' => 'newspath不是字母和数字',
'newspath.alphaDash' => 'newspath不是字母和数字和下划线及破折号',
'newspath.chs' => 'newspath只能是汉字',
'newspath.chsAlpha' => 'newspath只能是汉字、字母',
'newspath.chsAlphaNum' => 'newspath只能是汉字、字母和数字',
'newspath.chsDash' => 'newspath只能是汉字、字母、数字和下划线_及破折号-',
'newspath.activeUrl' => 'newspath不是有效的域名或者IP',
'newspath.url' => 'newspath不是有效的URL地址',
'newspath.ip' => 'newspath不是有效的IP地址',
'newspath.length' => 'newspath长度不符',
'newspath.max' => 'newspath超出最大长度',
'newspath.min' => 'newspath低于最小长度',
'filename.require' => 'filename不能为空',
'filename.number' => 'filename不是数字',
'filename.float' => 'filename不是小数',
'filename.boolean' => 'filename不是布尔值',
'filename.email' => 'filename不是邮箱地址',
'filename.array' => 'filename不是数组',
'filename.accepted' => 'filename请确认',
'filename.date' => 'filename不是有效日期',
'filename.alpha' => 'filename不是字母',
'filename.alphaNum' => 'filename不是字母和数字',
'filename.alphaDash' => 'filename不是字母和数字和下划线及破折号',
'filename.chs' => 'filename只能是汉字',
'filename.chsAlpha' => 'filename只能是汉字、字母',
'filename.chsAlphaNum' => 'filename只能是汉字、字母和数字',
'filename.chsDash' => 'filename只能是汉字、字母、数字和下划线_及破折号-',
'filename.activeUrl' => 'filename不是有效的域名或者IP',
'filename.url' => 'filename不是有效的URL地址',
'filename.ip' => 'filename不是有效的IP地址',
'filename.length' => 'filename长度不符',
'filename.max' => 'filename超出最大长度',
'filename.min' => 'filename低于最小长度',
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
'firsttitle.require' => 'firsttitle不能为空',
'firsttitle.number' => 'firsttitle不是数字',
'firsttitle.float' => 'firsttitle不是小数',
'firsttitle.boolean' => 'firsttitle不是布尔值',
'firsttitle.email' => 'firsttitle不是邮箱地址',
'firsttitle.array' => 'firsttitle不是数组',
'firsttitle.accepted' => 'firsttitle请确认',
'firsttitle.date' => 'firsttitle不是有效日期',
'firsttitle.alpha' => 'firsttitle不是字母',
'firsttitle.alphaNum' => 'firsttitle不是字母和数字',
'firsttitle.alphaDash' => 'firsttitle不是字母和数字和下划线及破折号',
'firsttitle.chs' => 'firsttitle只能是汉字',
'firsttitle.chsAlpha' => 'firsttitle只能是汉字、字母',
'firsttitle.chsAlphaNum' => 'firsttitle只能是汉字、字母和数字',
'firsttitle.chsDash' => 'firsttitle只能是汉字、字母、数字和下划线_及破折号-',
'firsttitle.activeUrl' => 'firsttitle不是有效的域名或者IP',
'firsttitle.url' => 'firsttitle不是有效的URL地址',
'firsttitle.ip' => 'firsttitle不是有效的IP地址',
'firsttitle.length' => 'firsttitle长度不符',
'firsttitle.max' => 'firsttitle超出最大长度',
'firsttitle.min' => 'firsttitle低于最小长度',
'isgood.require' => 'isgood不能为空',
'isgood.number' => 'isgood不是数字',
'isgood.float' => 'isgood不是小数',
'isgood.boolean' => 'isgood不是布尔值',
'isgood.email' => 'isgood不是邮箱地址',
'isgood.array' => 'isgood不是数组',
'isgood.accepted' => 'isgood请确认',
'isgood.date' => 'isgood不是有效日期',
'isgood.alpha' => 'isgood不是字母',
'isgood.alphaNum' => 'isgood不是字母和数字',
'isgood.alphaDash' => 'isgood不是字母和数字和下划线及破折号',
'isgood.chs' => 'isgood只能是汉字',
'isgood.chsAlpha' => 'isgood只能是汉字、字母',
'isgood.chsAlphaNum' => 'isgood只能是汉字、字母和数字',
'isgood.chsDash' => 'isgood只能是汉字、字母、数字和下划线_及破折号-',
'isgood.activeUrl' => 'isgood不是有效的域名或者IP',
'isgood.url' => 'isgood不是有效的URL地址',
'isgood.ip' => 'isgood不是有效的IP地址',
'isgood.length' => 'isgood长度不符',
'isgood.max' => 'isgood超出最大长度',
'isgood.min' => 'isgood低于最小长度',
'ispic.require' => 'ispic不能为空',
'ispic.number' => 'ispic不是数字',
'ispic.float' => 'ispic不是小数',
'ispic.boolean' => 'ispic不是布尔值',
'ispic.email' => 'ispic不是邮箱地址',
'ispic.array' => 'ispic不是数组',
'ispic.accepted' => 'ispic请确认',
'ispic.date' => 'ispic不是有效日期',
'ispic.alpha' => 'ispic不是字母',
'ispic.alphaNum' => 'ispic不是字母和数字',
'ispic.alphaDash' => 'ispic不是字母和数字和下划线及破折号',
'ispic.chs' => 'ispic只能是汉字',
'ispic.chsAlpha' => 'ispic只能是汉字、字母',
'ispic.chsAlphaNum' => 'ispic只能是汉字、字母和数字',
'ispic.chsDash' => 'ispic只能是汉字、字母、数字和下划线_及破折号-',
'ispic.activeUrl' => 'ispic不是有效的域名或者IP',
'ispic.url' => 'ispic不是有效的URL地址',
'ispic.ip' => 'ispic不是有效的IP地址',
'ispic.length' => 'ispic长度不符',
'ispic.max' => 'ispic超出最大长度',
'ispic.min' => 'ispic低于最小长度',
'istop.require' => 'istop不能为空',
'istop.number' => 'istop不是数字',
'istop.float' => 'istop不是小数',
'istop.boolean' => 'istop不是布尔值',
'istop.email' => 'istop不是邮箱地址',
'istop.array' => 'istop不是数组',
'istop.accepted' => 'istop请确认',
'istop.date' => 'istop不是有效日期',
'istop.alpha' => 'istop不是字母',
'istop.alphaNum' => 'istop不是字母和数字',
'istop.alphaDash' => 'istop不是字母和数字和下划线及破折号',
'istop.chs' => 'istop只能是汉字',
'istop.chsAlpha' => 'istop只能是汉字、字母',
'istop.chsAlphaNum' => 'istop只能是汉字、字母和数字',
'istop.chsDash' => 'istop只能是汉字、字母、数字和下划线_及破折号-',
'istop.activeUrl' => 'istop不是有效的域名或者IP',
'istop.url' => 'istop不是有效的URL地址',
'istop.ip' => 'istop不是有效的IP地址',
'istop.length' => 'istop长度不符',
'istop.max' => 'istop超出最大长度',
'istop.min' => 'istop低于最小长度',
'isqf.require' => 'isqf不能为空',
'isqf.number' => 'isqf不是数字',
'isqf.float' => 'isqf不是小数',
'isqf.boolean' => 'isqf不是布尔值',
'isqf.email' => 'isqf不是邮箱地址',
'isqf.array' => 'isqf不是数组',
'isqf.accepted' => 'isqf请确认',
'isqf.date' => 'isqf不是有效日期',
'isqf.alpha' => 'isqf不是字母',
'isqf.alphaNum' => 'isqf不是字母和数字',
'isqf.alphaDash' => 'isqf不是字母和数字和下划线及破折号',
'isqf.chs' => 'isqf只能是汉字',
'isqf.chsAlpha' => 'isqf只能是汉字、字母',
'isqf.chsAlphaNum' => 'isqf只能是汉字、字母和数字',
'isqf.chsDash' => 'isqf只能是汉字、字母、数字和下划线_及破折号-',
'isqf.activeUrl' => 'isqf不是有效的域名或者IP',
'isqf.url' => 'isqf不是有效的URL地址',
'isqf.ip' => 'isqf不是有效的IP地址',
'isqf.length' => 'isqf长度不符',
'isqf.max' => 'isqf超出最大长度',
'isqf.min' => 'isqf低于最小长度',
'ismember.require' => 'ismember不能为空',
'ismember.number' => 'ismember不是数字',
'ismember.float' => 'ismember不是小数',
'ismember.boolean' => 'ismember不是布尔值',
'ismember.email' => 'ismember不是邮箱地址',
'ismember.array' => 'ismember不是数组',
'ismember.accepted' => 'ismember请确认',
'ismember.date' => 'ismember不是有效日期',
'ismember.alpha' => 'ismember不是字母',
'ismember.alphaNum' => 'ismember不是字母和数字',
'ismember.alphaDash' => 'ismember不是字母和数字和下划线及破折号',
'ismember.chs' => 'ismember只能是汉字',
'ismember.chsAlpha' => 'ismember只能是汉字、字母',
'ismember.chsAlphaNum' => 'ismember只能是汉字、字母和数字',
'ismember.chsDash' => 'ismember只能是汉字、字母、数字和下划线_及破折号-',
'ismember.activeUrl' => 'ismember不是有效的域名或者IP',
'ismember.url' => 'ismember不是有效的URL地址',
'ismember.ip' => 'ismember不是有效的IP地址',
'ismember.length' => 'ismember长度不符',
'ismember.max' => 'ismember超出最大长度',
'ismember.min' => 'ismember低于最小长度',
'isurl.require' => 'isurl不能为空',
'isurl.number' => 'isurl不是数字',
'isurl.float' => 'isurl不是小数',
'isurl.boolean' => 'isurl不是布尔值',
'isurl.email' => 'isurl不是邮箱地址',
'isurl.array' => 'isurl不是数组',
'isurl.accepted' => 'isurl请确认',
'isurl.date' => 'isurl不是有效日期',
'isurl.alpha' => 'isurl不是字母',
'isurl.alphaNum' => 'isurl不是字母和数字',
'isurl.alphaDash' => 'isurl不是字母和数字和下划线及破折号',
'isurl.chs' => 'isurl只能是汉字',
'isurl.chsAlpha' => 'isurl只能是汉字、字母',
'isurl.chsAlphaNum' => 'isurl只能是汉字、字母和数字',
'isurl.chsDash' => 'isurl只能是汉字、字母、数字和下划线_及破折号-',
'isurl.activeUrl' => 'isurl不是有效的域名或者IP',
'isurl.url' => 'isurl不是有效的URL地址',
'isurl.ip' => 'isurl不是有效的IP地址',
'isurl.length' => 'isurl长度不符',
'isurl.max' => 'isurl超出最大长度',
'isurl.min' => 'isurl低于最小长度',
'truetime.require' => 'truetime不能为空',
'truetime.number' => 'truetime不是数字',
'truetime.float' => 'truetime不是小数',
'truetime.boolean' => 'truetime不是布尔值',
'truetime.email' => 'truetime不是邮箱地址',
'truetime.array' => 'truetime不是数组',
'truetime.accepted' => 'truetime请确认',
'truetime.date' => 'truetime不是有效日期',
'truetime.alpha' => 'truetime不是字母',
'truetime.alphaNum' => 'truetime不是字母和数字',
'truetime.alphaDash' => 'truetime不是字母和数字和下划线及破折号',
'truetime.chs' => 'truetime只能是汉字',
'truetime.chsAlpha' => 'truetime只能是汉字、字母',
'truetime.chsAlphaNum' => 'truetime只能是汉字、字母和数字',
'truetime.chsDash' => 'truetime只能是汉字、字母、数字和下划线_及破折号-',
'truetime.activeUrl' => 'truetime不是有效的域名或者IP',
'truetime.url' => 'truetime不是有效的URL地址',
'truetime.ip' => 'truetime不是有效的IP地址',
'truetime.length' => 'truetime长度不符',
'truetime.max' => 'truetime超出最大长度',
'truetime.min' => 'truetime低于最小长度',
'lastdotime.require' => 'lastdotime不能为空',
'lastdotime.number' => 'lastdotime不是数字',
'lastdotime.float' => 'lastdotime不是小数',
'lastdotime.boolean' => 'lastdotime不是布尔值',
'lastdotime.email' => 'lastdotime不是邮箱地址',
'lastdotime.array' => 'lastdotime不是数组',
'lastdotime.accepted' => 'lastdotime请确认',
'lastdotime.date' => 'lastdotime不是有效日期',
'lastdotime.alpha' => 'lastdotime不是字母',
'lastdotime.alphaNum' => 'lastdotime不是字母和数字',
'lastdotime.alphaDash' => 'lastdotime不是字母和数字和下划线及破折号',
'lastdotime.chs' => 'lastdotime只能是汉字',
'lastdotime.chsAlpha' => 'lastdotime只能是汉字、字母',
'lastdotime.chsAlphaNum' => 'lastdotime只能是汉字、字母和数字',
'lastdotime.chsDash' => 'lastdotime只能是汉字、字母、数字和下划线_及破折号-',
'lastdotime.activeUrl' => 'lastdotime不是有效的域名或者IP',
'lastdotime.url' => 'lastdotime不是有效的URL地址',
'lastdotime.ip' => 'lastdotime不是有效的IP地址',
'lastdotime.length' => 'lastdotime长度不符',
'lastdotime.max' => 'lastdotime超出最大长度',
'lastdotime.min' => 'lastdotime低于最小长度',
'havehtml.require' => 'havehtml不能为空',
'havehtml.number' => 'havehtml不是数字',
'havehtml.float' => 'havehtml不是小数',
'havehtml.boolean' => 'havehtml不是布尔值',
'havehtml.email' => 'havehtml不是邮箱地址',
'havehtml.array' => 'havehtml不是数组',
'havehtml.accepted' => 'havehtml请确认',
'havehtml.date' => 'havehtml不是有效日期',
'havehtml.alpha' => 'havehtml不是字母',
'havehtml.alphaNum' => 'havehtml不是字母和数字',
'havehtml.alphaDash' => 'havehtml不是字母和数字和下划线及破折号',
'havehtml.chs' => 'havehtml只能是汉字',
'havehtml.chsAlpha' => 'havehtml只能是汉字、字母',
'havehtml.chsAlphaNum' => 'havehtml只能是汉字、字母和数字',
'havehtml.chsDash' => 'havehtml只能是汉字、字母、数字和下划线_及破折号-',
'havehtml.activeUrl' => 'havehtml不是有效的域名或者IP',
'havehtml.url' => 'havehtml不是有效的URL地址',
'havehtml.ip' => 'havehtml不是有效的IP地址',
'havehtml.length' => 'havehtml长度不符',
'havehtml.max' => 'havehtml超出最大长度',
'havehtml.min' => 'havehtml低于最小长度',
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
'userfen.require' => 'userfen不能为空',
'userfen.number' => 'userfen不是数字',
'userfen.float' => 'userfen不是小数',
'userfen.boolean' => 'userfen不是布尔值',
'userfen.email' => 'userfen不是邮箱地址',
'userfen.array' => 'userfen不是数组',
'userfen.accepted' => 'userfen请确认',
'userfen.date' => 'userfen不是有效日期',
'userfen.alpha' => 'userfen不是字母',
'userfen.alphaNum' => 'userfen不是字母和数字',
'userfen.alphaDash' => 'userfen不是字母和数字和下划线及破折号',
'userfen.chs' => 'userfen只能是汉字',
'userfen.chsAlpha' => 'userfen只能是汉字、字母',
'userfen.chsAlphaNum' => 'userfen只能是汉字、字母和数字',
'userfen.chsDash' => 'userfen只能是汉字、字母、数字和下划线_及破折号-',
'userfen.activeUrl' => 'userfen不是有效的域名或者IP',
'userfen.url' => 'userfen不是有效的URL地址',
'userfen.ip' => 'userfen不是有效的IP地址',
'userfen.length' => 'userfen长度不符',
'userfen.max' => 'userfen超出最大长度',
'userfen.min' => 'userfen低于最小长度',
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
'stb.require' => 'stb不能为空',
'stb.number' => 'stb不是数字',
'stb.float' => 'stb不是小数',
'stb.boolean' => 'stb不是布尔值',
'stb.email' => 'stb不是邮箱地址',
'stb.array' => 'stb不是数组',
'stb.accepted' => 'stb请确认',
'stb.date' => 'stb不是有效日期',
'stb.alpha' => 'stb不是字母',
'stb.alphaNum' => 'stb不是字母和数字',
'stb.alphaDash' => 'stb不是字母和数字和下划线及破折号',
'stb.chs' => 'stb只能是汉字',
'stb.chsAlpha' => 'stb只能是汉字、字母',
'stb.chsAlphaNum' => 'stb只能是汉字、字母和数字',
'stb.chsDash' => 'stb只能是汉字、字母、数字和下划线_及破折号-',
'stb.activeUrl' => 'stb不是有效的域名或者IP',
'stb.url' => 'stb不是有效的URL地址',
'stb.ip' => 'stb不是有效的IP地址',
'stb.length' => 'stb长度不符',
'stb.max' => 'stb超出最大长度',
'stb.min' => 'stb低于最小长度',
'fstb.require' => 'fstb不能为空',
'fstb.number' => 'fstb不是数字',
'fstb.float' => 'fstb不是小数',
'fstb.boolean' => 'fstb不是布尔值',
'fstb.email' => 'fstb不是邮箱地址',
'fstb.array' => 'fstb不是数组',
'fstb.accepted' => 'fstb请确认',
'fstb.date' => 'fstb不是有效日期',
'fstb.alpha' => 'fstb不是字母',
'fstb.alphaNum' => 'fstb不是字母和数字',
'fstb.alphaDash' => 'fstb不是字母和数字和下划线及破折号',
'fstb.chs' => 'fstb只能是汉字',
'fstb.chsAlpha' => 'fstb只能是汉字、字母',
'fstb.chsAlphaNum' => 'fstb只能是汉字、字母和数字',
'fstb.chsDash' => 'fstb只能是汉字、字母、数字和下划线_及破折号-',
'fstb.activeUrl' => 'fstb不是有效的域名或者IP',
'fstb.url' => 'fstb不是有效的URL地址',
'fstb.ip' => 'fstb不是有效的IP地址',
'fstb.length' => 'fstb长度不符',
'fstb.max' => 'fstb超出最大长度',
'fstb.min' => 'fstb低于最小长度',
'restb.require' => 'restb不能为空',
'restb.number' => 'restb不是数字',
'restb.float' => 'restb不是小数',
'restb.boolean' => 'restb不是布尔值',
'restb.email' => 'restb不是邮箱地址',
'restb.array' => 'restb不是数组',
'restb.accepted' => 'restb请确认',
'restb.date' => 'restb不是有效日期',
'restb.alpha' => 'restb不是字母',
'restb.alphaNum' => 'restb不是字母和数字',
'restb.alphaDash' => 'restb不是字母和数字和下划线及破折号',
'restb.chs' => 'restb只能是汉字',
'restb.chsAlpha' => 'restb只能是汉字、字母',
'restb.chsAlphaNum' => 'restb只能是汉字、字母和数字',
'restb.chsDash' => 'restb只能是汉字、字母、数字和下划线_及破折号-',
'restb.activeUrl' => 'restb不是有效的域名或者IP',
'restb.url' => 'restb不是有效的URL地址',
'restb.ip' => 'restb不是有效的IP地址',
'restb.length' => 'restb长度不符',
'restb.max' => 'restb超出最大长度',
'restb.min' => 'restb低于最小长度',
'keyboard.require' => 'keyboard不能为空',
'keyboard.number' => 'keyboard不是数字',
'keyboard.float' => 'keyboard不是小数',
'keyboard.boolean' => 'keyboard不是布尔值',
'keyboard.email' => 'keyboard不是邮箱地址',
'keyboard.array' => 'keyboard不是数组',
'keyboard.accepted' => 'keyboard请确认',
'keyboard.date' => 'keyboard不是有效日期',
'keyboard.alpha' => 'keyboard不是字母',
'keyboard.alphaNum' => 'keyboard不是字母和数字',
'keyboard.alphaDash' => 'keyboard不是字母和数字和下划线及破折号',
'keyboard.chs' => 'keyboard只能是汉字',
'keyboard.chsAlpha' => 'keyboard只能是汉字、字母',
'keyboard.chsAlphaNum' => 'keyboard只能是汉字、字母和数字',
'keyboard.chsDash' => 'keyboard只能是汉字、字母、数字和下划线_及破折号-',
'keyboard.activeUrl' => 'keyboard不是有效的域名或者IP',
'keyboard.url' => 'keyboard不是有效的URL地址',
'keyboard.ip' => 'keyboard不是有效的IP地址',
'keyboard.length' => 'keyboard长度不符',
'keyboard.max' => 'keyboard超出最大长度',
'keyboard.min' => 'keyboard低于最小长度',
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
'eckuid.require' => 'eckuid不能为空',
'eckuid.number' => 'eckuid不是数字',
'eckuid.float' => 'eckuid不是小数',
'eckuid.boolean' => 'eckuid不是布尔值',
'eckuid.email' => 'eckuid不是邮箱地址',
'eckuid.array' => 'eckuid不是数组',
'eckuid.accepted' => 'eckuid请确认',
'eckuid.date' => 'eckuid不是有效日期',
'eckuid.alpha' => 'eckuid不是字母',
'eckuid.alphaNum' => 'eckuid不是字母和数字',
'eckuid.alphaDash' => 'eckuid不是字母和数字和下划线及破折号',
'eckuid.chs' => 'eckuid只能是汉字',
'eckuid.chsAlpha' => 'eckuid只能是汉字、字母',
'eckuid.chsAlphaNum' => 'eckuid只能是汉字、字母和数字',
'eckuid.chsDash' => 'eckuid只能是汉字、字母、数字和下划线_及破折号-',
'eckuid.activeUrl' => 'eckuid不是有效的域名或者IP',
'eckuid.url' => 'eckuid不是有效的URL地址',
'eckuid.ip' => 'eckuid不是有效的IP地址',
'eckuid.length' => 'eckuid长度不符',
'eckuid.max' => 'eckuid超出最大长度',
'eckuid.min' => 'eckuid低于最小长度',
'flashwriter.require' => 'flashwriter不能为空',
'flashwriter.number' => 'flashwriter不是数字',
'flashwriter.float' => 'flashwriter不是小数',
'flashwriter.boolean' => 'flashwriter不是布尔值',
'flashwriter.email' => 'flashwriter不是邮箱地址',
'flashwriter.array' => 'flashwriter不是数组',
'flashwriter.accepted' => 'flashwriter请确认',
'flashwriter.date' => 'flashwriter不是有效日期',
'flashwriter.alpha' => 'flashwriter不是字母',
'flashwriter.alphaNum' => 'flashwriter不是字母和数字',
'flashwriter.alphaDash' => 'flashwriter不是字母和数字和下划线及破折号',
'flashwriter.chs' => 'flashwriter只能是汉字',
'flashwriter.chsAlpha' => 'flashwriter只能是汉字、字母',
'flashwriter.chsAlphaNum' => 'flashwriter只能是汉字、字母和数字',
'flashwriter.chsDash' => 'flashwriter只能是汉字、字母、数字和下划线_及破折号-',
'flashwriter.activeUrl' => 'flashwriter不是有效的域名或者IP',
'flashwriter.url' => 'flashwriter不是有效的URL地址',
'flashwriter.ip' => 'flashwriter不是有效的IP地址',
'flashwriter.length' => 'flashwriter长度不符',
'flashwriter.max' => 'flashwriter超出最大长度',
'flashwriter.min' => 'flashwriter低于最小长度',
'email.require' => 'email不能为空',
'email.number' => 'email不是数字',
'email.float' => 'email不是小数',
'email.boolean' => 'email不是布尔值',
'email.email' => 'email不是邮箱地址',
'email.array' => 'email不是数组',
'email.accepted' => 'email请确认',
'email.date' => 'email不是有效日期',
'email.alpha' => 'email不是字母',
'email.alphaNum' => 'email不是字母和数字',
'email.alphaDash' => 'email不是字母和数字和下划线及破折号',
'email.chs' => 'email只能是汉字',
'email.chsAlpha' => 'email只能是汉字、字母',
'email.chsAlphaNum' => 'email只能是汉字、字母和数字',
'email.chsDash' => 'email只能是汉字、字母、数字和下划线_及破折号-',
'email.activeUrl' => 'email不是有效的域名或者IP',
'email.url' => 'email不是有效的URL地址',
'email.ip' => 'email不是有效的IP地址',
'email.length' => 'email长度不符',
'email.max' => 'email超出最大长度',
'email.min' => 'email低于最小长度',
'star.require' => 'star不能为空',
'star.number' => 'star不是数字',
'star.float' => 'star不是小数',
'star.boolean' => 'star不是布尔值',
'star.email' => 'star不是邮箱地址',
'star.array' => 'star不是数组',
'star.accepted' => 'star请确认',
'star.date' => 'star不是有效日期',
'star.alpha' => 'star不是字母',
'star.alphaNum' => 'star不是字母和数字',
'star.alphaDash' => 'star不是字母和数字和下划线及破折号',
'star.chs' => 'star只能是汉字',
'star.chsAlpha' => 'star只能是汉字、字母',
'star.chsAlphaNum' => 'star只能是汉字、字母和数字',
'star.chsDash' => 'star只能是汉字、字母、数字和下划线_及破折号-',
'star.activeUrl' => 'star不是有效的域名或者IP',
'star.url' => 'star不是有效的URL地址',
'star.ip' => 'star不是有效的IP地址',
'star.length' => 'star长度不符',
'star.max' => 'star超出最大长度',
'star.min' => 'star低于最小长度',
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
'flashurl.require' => 'flashurl不能为空',
'flashurl.number' => 'flashurl不是数字',
'flashurl.float' => 'flashurl不是小数',
'flashurl.boolean' => 'flashurl不是布尔值',
'flashurl.email' => 'flashurl不是邮箱地址',
'flashurl.array' => 'flashurl不是数组',
'flashurl.accepted' => 'flashurl请确认',
'flashurl.date' => 'flashurl不是有效日期',
'flashurl.alpha' => 'flashurl不是字母',
'flashurl.alphaNum' => 'flashurl不是字母和数字',
'flashurl.alphaDash' => 'flashurl不是字母和数字和下划线及破折号',
'flashurl.chs' => 'flashurl只能是汉字',
'flashurl.chsAlpha' => 'flashurl只能是汉字、字母',
'flashurl.chsAlphaNum' => 'flashurl只能是汉字、字母和数字',
'flashurl.chsDash' => 'flashurl只能是汉字、字母、数字和下划线_及破折号-',
'flashurl.activeUrl' => 'flashurl不是有效的域名或者IP',
'flashurl.url' => 'flashurl不是有效的URL地址',
'flashurl.ip' => 'flashurl不是有效的IP地址',
'flashurl.length' => 'flashurl长度不符',
'flashurl.max' => 'flashurl超出最大长度',
'flashurl.min' => 'flashurl低于最小长度',
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
'flashsay.require' => 'flashsay不能为空',
'flashsay.number' => 'flashsay不是数字',
'flashsay.float' => 'flashsay不是小数',
'flashsay.boolean' => 'flashsay不是布尔值',
'flashsay.email' => 'flashsay不是邮箱地址',
'flashsay.array' => 'flashsay不是数组',
'flashsay.accepted' => 'flashsay请确认',
'flashsay.date' => 'flashsay不是有效日期',
'flashsay.alpha' => 'flashsay不是字母',
'flashsay.alphaNum' => 'flashsay不是字母和数字',
'flashsay.alphaDash' => 'flashsay不是字母和数字和下划线及破折号',
'flashsay.chs' => 'flashsay只能是汉字',
'flashsay.chsAlpha' => 'flashsay只能是汉字、字母',
'flashsay.chsAlphaNum' => 'flashsay只能是汉字、字母和数字',
'flashsay.chsDash' => 'flashsay只能是汉字、字母、数字和下划线_及破折号-',
'flashsay.activeUrl' => 'flashsay不是有效的域名或者IP',
'flashsay.url' => 'flashsay不是有效的URL地址',
'flashsay.ip' => 'flashsay不是有效的IP地址',
'flashsay.length' => 'flashsay长度不符',
'flashsay.max' => 'flashsay超出最大长度',
'flashsay.min' => 'flashsay低于最小长度',
];

protected $scene =   [
    'add'=>['id','classid','ttid','onclick','plnum','totaldown','newspath','filename','userid','username','firsttitle','isgood','ispic','istop','isqf','ismember','isurl','truetime','lastdotime','havehtml','groupid','userfen','titlefont','titleurl','stb','fstb','restb','keyboard','title','newstime','titlepic','eckuid','flashwriter','email','star','filesize','flashurl','width','height','flashsay',],
    'edit'=>['id','classid','ttid','onclick','plnum','totaldown','newspath','filename','userid','username','firsttitle','isgood','ispic','istop','isqf','ismember','isurl','truetime','lastdotime','havehtml','groupid','userfen','titlefont','titleurl','stb','fstb','restb','keyboard','title','newstime','titlepic','eckuid','flashwriter','email','star','filesize','flashurl','width','height','flashsay',],
    'ck_id'=>['id']
];

}
