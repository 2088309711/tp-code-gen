<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Enewslink extends Validate{

protected $rule =   [
        'lid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lname' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lpic' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lurl' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ltime' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'onclick' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'width' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'height' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'target' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'myorder' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'email' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'lsay' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'checked' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'ltype' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'classid' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
    ];

protected $msg =   [
'lid.require' => 'lid不能为空',
'lid.number' => 'lid不是数字',
'lid.float' => 'lid不是小数',
'lid.boolean' => 'lid不是布尔值',
'lid.email' => 'lid不是邮箱地址',
'lid.array' => 'lid不是数组',
'lid.accepted' => 'lid请确认',
'lid.date' => 'lid不是有效日期',
'lid.alpha' => 'lid不是字母',
'lid.alphaNum' => 'lid不是字母和数字',
'lid.alphaDash' => 'lid不是字母和数字和下划线及破折号',
'lid.chs' => 'lid只能是汉字',
'lid.chsAlpha' => 'lid只能是汉字、字母',
'lid.chsAlphaNum' => 'lid只能是汉字、字母和数字',
'lid.chsDash' => 'lid只能是汉字、字母、数字和下划线_及破折号-',
'lid.activeUrl' => 'lid不是有效的域名或者IP',
'lid.url' => 'lid不是有效的URL地址',
'lid.ip' => 'lid不是有效的IP地址',
'lid.length' => 'lid长度不符',
'lid.max' => 'lid超出最大长度',
'lid.min' => 'lid低于最小长度',
'lname.require' => 'lname不能为空',
'lname.number' => 'lname不是数字',
'lname.float' => 'lname不是小数',
'lname.boolean' => 'lname不是布尔值',
'lname.email' => 'lname不是邮箱地址',
'lname.array' => 'lname不是数组',
'lname.accepted' => 'lname请确认',
'lname.date' => 'lname不是有效日期',
'lname.alpha' => 'lname不是字母',
'lname.alphaNum' => 'lname不是字母和数字',
'lname.alphaDash' => 'lname不是字母和数字和下划线及破折号',
'lname.chs' => 'lname只能是汉字',
'lname.chsAlpha' => 'lname只能是汉字、字母',
'lname.chsAlphaNum' => 'lname只能是汉字、字母和数字',
'lname.chsDash' => 'lname只能是汉字、字母、数字和下划线_及破折号-',
'lname.activeUrl' => 'lname不是有效的域名或者IP',
'lname.url' => 'lname不是有效的URL地址',
'lname.ip' => 'lname不是有效的IP地址',
'lname.length' => 'lname长度不符',
'lname.max' => 'lname超出最大长度',
'lname.min' => 'lname低于最小长度',
'lpic.require' => 'lpic不能为空',
'lpic.number' => 'lpic不是数字',
'lpic.float' => 'lpic不是小数',
'lpic.boolean' => 'lpic不是布尔值',
'lpic.email' => 'lpic不是邮箱地址',
'lpic.array' => 'lpic不是数组',
'lpic.accepted' => 'lpic请确认',
'lpic.date' => 'lpic不是有效日期',
'lpic.alpha' => 'lpic不是字母',
'lpic.alphaNum' => 'lpic不是字母和数字',
'lpic.alphaDash' => 'lpic不是字母和数字和下划线及破折号',
'lpic.chs' => 'lpic只能是汉字',
'lpic.chsAlpha' => 'lpic只能是汉字、字母',
'lpic.chsAlphaNum' => 'lpic只能是汉字、字母和数字',
'lpic.chsDash' => 'lpic只能是汉字、字母、数字和下划线_及破折号-',
'lpic.activeUrl' => 'lpic不是有效的域名或者IP',
'lpic.url' => 'lpic不是有效的URL地址',
'lpic.ip' => 'lpic不是有效的IP地址',
'lpic.length' => 'lpic长度不符',
'lpic.max' => 'lpic超出最大长度',
'lpic.min' => 'lpic低于最小长度',
'lurl.require' => 'lurl不能为空',
'lurl.number' => 'lurl不是数字',
'lurl.float' => 'lurl不是小数',
'lurl.boolean' => 'lurl不是布尔值',
'lurl.email' => 'lurl不是邮箱地址',
'lurl.array' => 'lurl不是数组',
'lurl.accepted' => 'lurl请确认',
'lurl.date' => 'lurl不是有效日期',
'lurl.alpha' => 'lurl不是字母',
'lurl.alphaNum' => 'lurl不是字母和数字',
'lurl.alphaDash' => 'lurl不是字母和数字和下划线及破折号',
'lurl.chs' => 'lurl只能是汉字',
'lurl.chsAlpha' => 'lurl只能是汉字、字母',
'lurl.chsAlphaNum' => 'lurl只能是汉字、字母和数字',
'lurl.chsDash' => 'lurl只能是汉字、字母、数字和下划线_及破折号-',
'lurl.activeUrl' => 'lurl不是有效的域名或者IP',
'lurl.url' => 'lurl不是有效的URL地址',
'lurl.ip' => 'lurl不是有效的IP地址',
'lurl.length' => 'lurl长度不符',
'lurl.max' => 'lurl超出最大长度',
'lurl.min' => 'lurl低于最小长度',
'ltime.require' => 'ltime不能为空',
'ltime.number' => 'ltime不是数字',
'ltime.float' => 'ltime不是小数',
'ltime.boolean' => 'ltime不是布尔值',
'ltime.email' => 'ltime不是邮箱地址',
'ltime.array' => 'ltime不是数组',
'ltime.accepted' => 'ltime请确认',
'ltime.date' => 'ltime不是有效日期',
'ltime.alpha' => 'ltime不是字母',
'ltime.alphaNum' => 'ltime不是字母和数字',
'ltime.alphaDash' => 'ltime不是字母和数字和下划线及破折号',
'ltime.chs' => 'ltime只能是汉字',
'ltime.chsAlpha' => 'ltime只能是汉字、字母',
'ltime.chsAlphaNum' => 'ltime只能是汉字、字母和数字',
'ltime.chsDash' => 'ltime只能是汉字、字母、数字和下划线_及破折号-',
'ltime.activeUrl' => 'ltime不是有效的域名或者IP',
'ltime.url' => 'ltime不是有效的URL地址',
'ltime.ip' => 'ltime不是有效的IP地址',
'ltime.length' => 'ltime长度不符',
'ltime.max' => 'ltime超出最大长度',
'ltime.min' => 'ltime低于最小长度',
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
'target.require' => 'target不能为空',
'target.number' => 'target不是数字',
'target.float' => 'target不是小数',
'target.boolean' => 'target不是布尔值',
'target.email' => 'target不是邮箱地址',
'target.array' => 'target不是数组',
'target.accepted' => 'target请确认',
'target.date' => 'target不是有效日期',
'target.alpha' => 'target不是字母',
'target.alphaNum' => 'target不是字母和数字',
'target.alphaDash' => 'target不是字母和数字和下划线及破折号',
'target.chs' => 'target只能是汉字',
'target.chsAlpha' => 'target只能是汉字、字母',
'target.chsAlphaNum' => 'target只能是汉字、字母和数字',
'target.chsDash' => 'target只能是汉字、字母、数字和下划线_及破折号-',
'target.activeUrl' => 'target不是有效的域名或者IP',
'target.url' => 'target不是有效的URL地址',
'target.ip' => 'target不是有效的IP地址',
'target.length' => 'target长度不符',
'target.max' => 'target超出最大长度',
'target.min' => 'target低于最小长度',
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
'lsay.require' => 'lsay不能为空',
'lsay.number' => 'lsay不是数字',
'lsay.float' => 'lsay不是小数',
'lsay.boolean' => 'lsay不是布尔值',
'lsay.email' => 'lsay不是邮箱地址',
'lsay.array' => 'lsay不是数组',
'lsay.accepted' => 'lsay请确认',
'lsay.date' => 'lsay不是有效日期',
'lsay.alpha' => 'lsay不是字母',
'lsay.alphaNum' => 'lsay不是字母和数字',
'lsay.alphaDash' => 'lsay不是字母和数字和下划线及破折号',
'lsay.chs' => 'lsay只能是汉字',
'lsay.chsAlpha' => 'lsay只能是汉字、字母',
'lsay.chsAlphaNum' => 'lsay只能是汉字、字母和数字',
'lsay.chsDash' => 'lsay只能是汉字、字母、数字和下划线_及破折号-',
'lsay.activeUrl' => 'lsay不是有效的域名或者IP',
'lsay.url' => 'lsay不是有效的URL地址',
'lsay.ip' => 'lsay不是有效的IP地址',
'lsay.length' => 'lsay长度不符',
'lsay.max' => 'lsay超出最大长度',
'lsay.min' => 'lsay低于最小长度',
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
'ltype.require' => 'ltype不能为空',
'ltype.number' => 'ltype不是数字',
'ltype.float' => 'ltype不是小数',
'ltype.boolean' => 'ltype不是布尔值',
'ltype.email' => 'ltype不是邮箱地址',
'ltype.array' => 'ltype不是数组',
'ltype.accepted' => 'ltype请确认',
'ltype.date' => 'ltype不是有效日期',
'ltype.alpha' => 'ltype不是字母',
'ltype.alphaNum' => 'ltype不是字母和数字',
'ltype.alphaDash' => 'ltype不是字母和数字和下划线及破折号',
'ltype.chs' => 'ltype只能是汉字',
'ltype.chsAlpha' => 'ltype只能是汉字、字母',
'ltype.chsAlphaNum' => 'ltype只能是汉字、字母和数字',
'ltype.chsDash' => 'ltype只能是汉字、字母、数字和下划线_及破折号-',
'ltype.activeUrl' => 'ltype不是有效的域名或者IP',
'ltype.url' => 'ltype不是有效的URL地址',
'ltype.ip' => 'ltype不是有效的IP地址',
'ltype.length' => 'ltype长度不符',
'ltype.max' => 'ltype超出最大长度',
'ltype.min' => 'ltype低于最小长度',
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
];

protected $scene =   [
    'add'=>['lid','lname','lpic','lurl','ltime','onclick','width','height','target','myorder','email','lsay','checked','ltype','classid',],
    'edit'=>['lid','lname','lpic','lurl','ltime','onclick','width','height','target','myorder','email','lsay','checked','ltype','classid',],
    'ck_id'=>['id']
];

}
