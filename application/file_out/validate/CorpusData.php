<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class CorpusData extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'title' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'content' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'create_time' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'update_time' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'group_id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'title.require' => '匹配内容不能为空',
'title.number' => '匹配内容不是数字',
'title.float' => '匹配内容不是小数',
'title.boolean' => '匹配内容不是布尔值',
'title.email' => '匹配内容不是邮箱地址',
'title.array' => '匹配内容不是数组',
'title.accepted' => '匹配内容请确认',
'title.date' => '匹配内容不是有效日期',
'title.alpha' => '匹配内容不是字母',
'title.alphaNum' => '匹配内容不是字母和数字',
'title.alphaDash' => '匹配内容不是字母和数字和下划线及破折号',
'title.chs' => '匹配内容只能是汉字',
'title.chsAlpha' => '匹配内容只能是汉字、字母',
'title.chsAlphaNum' => '匹配内容只能是汉字、字母和数字',
'title.chsDash' => '匹配内容只能是汉字、字母、数字和下划线_及破折号-',
'title.activeUrl' => '匹配内容不是有效的域名或者IP',
'title.url' => '匹配内容不是有效的URL地址',
'title.ip' => '匹配内容不是有效的IP地址',
'title.length' => '匹配内容长度不符',
'title.max' => '匹配内容超出最大长度',
'title.min' => '匹配内容低于最小长度',
'content.require' => '回复内容不能为空',
'content.number' => '回复内容不是数字',
'content.float' => '回复内容不是小数',
'content.boolean' => '回复内容不是布尔值',
'content.email' => '回复内容不是邮箱地址',
'content.array' => '回复内容不是数组',
'content.accepted' => '回复内容请确认',
'content.date' => '回复内容不是有效日期',
'content.alpha' => '回复内容不是字母',
'content.alphaNum' => '回复内容不是字母和数字',
'content.alphaDash' => '回复内容不是字母和数字和下划线及破折号',
'content.chs' => '回复内容只能是汉字',
'content.chsAlpha' => '回复内容只能是汉字、字母',
'content.chsAlphaNum' => '回复内容只能是汉字、字母和数字',
'content.chsDash' => '回复内容只能是汉字、字母、数字和下划线_及破折号-',
'content.activeUrl' => '回复内容不是有效的域名或者IP',
'content.url' => '回复内容不是有效的URL地址',
'content.ip' => '回复内容不是有效的IP地址',
'content.length' => '回复内容长度不符',
'content.max' => '回复内容超出最大长度',
'content.min' => '回复内容低于最小长度',
'create_time.require' => 'create_time不能为空',
'create_time.number' => 'create_time不是数字',
'create_time.float' => 'create_time不是小数',
'create_time.boolean' => 'create_time不是布尔值',
'create_time.email' => 'create_time不是邮箱地址',
'create_time.array' => 'create_time不是数组',
'create_time.accepted' => 'create_time请确认',
'create_time.date' => 'create_time不是有效日期',
'create_time.alpha' => 'create_time不是字母',
'create_time.alphaNum' => 'create_time不是字母和数字',
'create_time.alphaDash' => 'create_time不是字母和数字和下划线及破折号',
'create_time.chs' => 'create_time只能是汉字',
'create_time.chsAlpha' => 'create_time只能是汉字、字母',
'create_time.chsAlphaNum' => 'create_time只能是汉字、字母和数字',
'create_time.chsDash' => 'create_time只能是汉字、字母、数字和下划线_及破折号-',
'create_time.activeUrl' => 'create_time不是有效的域名或者IP',
'create_time.url' => 'create_time不是有效的URL地址',
'create_time.ip' => 'create_time不是有效的IP地址',
'create_time.length' => 'create_time长度不符',
'create_time.max' => 'create_time超出最大长度',
'create_time.min' => 'create_time低于最小长度',
'update_time.require' => 'update_time不能为空',
'update_time.number' => 'update_time不是数字',
'update_time.float' => 'update_time不是小数',
'update_time.boolean' => 'update_time不是布尔值',
'update_time.email' => 'update_time不是邮箱地址',
'update_time.array' => 'update_time不是数组',
'update_time.accepted' => 'update_time请确认',
'update_time.date' => 'update_time不是有效日期',
'update_time.alpha' => 'update_time不是字母',
'update_time.alphaNum' => 'update_time不是字母和数字',
'update_time.alphaDash' => 'update_time不是字母和数字和下划线及破折号',
'update_time.chs' => 'update_time只能是汉字',
'update_time.chsAlpha' => 'update_time只能是汉字、字母',
'update_time.chsAlphaNum' => 'update_time只能是汉字、字母和数字',
'update_time.chsDash' => 'update_time只能是汉字、字母、数字和下划线_及破折号-',
'update_time.activeUrl' => 'update_time不是有效的域名或者IP',
'update_time.url' => 'update_time不是有效的URL地址',
'update_time.ip' => 'update_time不是有效的IP地址',
'update_time.length' => 'update_time长度不符',
'update_time.max' => 'update_time超出最大长度',
'update_time.min' => 'update_time低于最小长度',
'group_id.require' => '组ID不能为空',
'group_id.number' => '组ID不是数字',
'group_id.float' => '组ID不是小数',
'group_id.boolean' => '组ID不是布尔值',
'group_id.email' => '组ID不是邮箱地址',
'group_id.array' => '组ID不是数组',
'group_id.accepted' => '组ID请确认',
'group_id.date' => '组ID不是有效日期',
'group_id.alpha' => '组ID不是字母',
'group_id.alphaNum' => '组ID不是字母和数字',
'group_id.alphaDash' => '组ID不是字母和数字和下划线及破折号',
'group_id.chs' => '组ID只能是汉字',
'group_id.chsAlpha' => '组ID只能是汉字、字母',
'group_id.chsAlphaNum' => '组ID只能是汉字、字母和数字',
'group_id.chsDash' => '组ID只能是汉字、字母、数字和下划线_及破折号-',
'group_id.activeUrl' => '组ID不是有效的域名或者IP',
'group_id.url' => '组ID不是有效的URL地址',
'group_id.ip' => '组ID不是有效的IP地址',
'group_id.length' => '组ID长度不符',
'group_id.max' => '组ID超出最大长度',
'group_id.min' => '组ID低于最小长度',
];

protected $scene =   [
    'add'=>['id','title','content','create_time','update_time','group_id',],
    'edit'=>['id','title','content','create_time','update_time','group_id',]
];

}
