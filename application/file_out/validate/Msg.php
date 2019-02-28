<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Msg extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'client_id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'staff_id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'content' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'send_type' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        's_get' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'c_get' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        's_read' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'c_read' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'create_time' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'update_time' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'client_id.require' => '客户ID不能为空',
'client_id.number' => '客户ID不是数字',
'client_id.float' => '客户ID不是小数',
'client_id.boolean' => '客户ID不是布尔值',
'client_id.email' => '客户ID不是邮箱地址',
'client_id.array' => '客户ID不是数组',
'client_id.accepted' => '客户ID请确认',
'client_id.date' => '客户ID不是有效日期',
'client_id.alpha' => '客户ID不是字母',
'client_id.alphaNum' => '客户ID不是字母和数字',
'client_id.alphaDash' => '客户ID不是字母和数字和下划线及破折号',
'client_id.chs' => '客户ID只能是汉字',
'client_id.chsAlpha' => '客户ID只能是汉字、字母',
'client_id.chsAlphaNum' => '客户ID只能是汉字、字母和数字',
'client_id.chsDash' => '客户ID只能是汉字、字母、数字和下划线_及破折号-',
'client_id.activeUrl' => '客户ID不是有效的域名或者IP',
'client_id.url' => '客户ID不是有效的URL地址',
'client_id.ip' => '客户ID不是有效的IP地址',
'client_id.length' => '客户ID长度不符',
'client_id.max' => '客户ID超出最大长度',
'client_id.min' => '客户ID低于最小长度',
'staff_id.require' => '客服ID不能为空',
'staff_id.number' => '客服ID不是数字',
'staff_id.float' => '客服ID不是小数',
'staff_id.boolean' => '客服ID不是布尔值',
'staff_id.email' => '客服ID不是邮箱地址',
'staff_id.array' => '客服ID不是数组',
'staff_id.accepted' => '客服ID请确认',
'staff_id.date' => '客服ID不是有效日期',
'staff_id.alpha' => '客服ID不是字母',
'staff_id.alphaNum' => '客服ID不是字母和数字',
'staff_id.alphaDash' => '客服ID不是字母和数字和下划线及破折号',
'staff_id.chs' => '客服ID只能是汉字',
'staff_id.chsAlpha' => '客服ID只能是汉字、字母',
'staff_id.chsAlphaNum' => '客服ID只能是汉字、字母和数字',
'staff_id.chsDash' => '客服ID只能是汉字、字母、数字和下划线_及破折号-',
'staff_id.activeUrl' => '客服ID不是有效的域名或者IP',
'staff_id.url' => '客服ID不是有效的URL地址',
'staff_id.ip' => '客服ID不是有效的IP地址',
'staff_id.length' => '客服ID长度不符',
'staff_id.max' => '客服ID超出最大长度',
'staff_id.min' => '客服ID低于最小长度',
'content.require' => '信息内容不能为空',
'content.number' => '信息内容不是数字',
'content.float' => '信息内容不是小数',
'content.boolean' => '信息内容不是布尔值',
'content.email' => '信息内容不是邮箱地址',
'content.array' => '信息内容不是数组',
'content.accepted' => '信息内容请确认',
'content.date' => '信息内容不是有效日期',
'content.alpha' => '信息内容不是字母',
'content.alphaNum' => '信息内容不是字母和数字',
'content.alphaDash' => '信息内容不是字母和数字和下划线及破折号',
'content.chs' => '信息内容只能是汉字',
'content.chsAlpha' => '信息内容只能是汉字、字母',
'content.chsAlphaNum' => '信息内容只能是汉字、字母和数字',
'content.chsDash' => '信息内容只能是汉字、字母、数字和下划线_及破折号-',
'content.activeUrl' => '信息内容不是有效的域名或者IP',
'content.url' => '信息内容不是有效的URL地址',
'content.ip' => '信息内容不是有效的IP地址',
'content.length' => '信息内容长度不符',
'content.max' => '信息内容超出最大长度',
'content.min' => '信息内容低于最小长度',
'send_type.require' => '客服发送=1，客户发送=0不能为空',
'send_type.number' => '客服发送=1，客户发送=0不是数字',
'send_type.float' => '客服发送=1，客户发送=0不是小数',
'send_type.boolean' => '客服发送=1，客户发送=0不是布尔值',
'send_type.email' => '客服发送=1，客户发送=0不是邮箱地址',
'send_type.array' => '客服发送=1，客户发送=0不是数组',
'send_type.accepted' => '客服发送=1，客户发送=0请确认',
'send_type.date' => '客服发送=1，客户发送=0不是有效日期',
'send_type.alpha' => '客服发送=1，客户发送=0不是字母',
'send_type.alphaNum' => '客服发送=1，客户发送=0不是字母和数字',
'send_type.alphaDash' => '客服发送=1，客户发送=0不是字母和数字和下划线及破折号',
'send_type.chs' => '客服发送=1，客户发送=0只能是汉字',
'send_type.chsAlpha' => '客服发送=1，客户发送=0只能是汉字、字母',
'send_type.chsAlphaNum' => '客服发送=1，客户发送=0只能是汉字、字母和数字',
'send_type.chsDash' => '客服发送=1，客户发送=0只能是汉字、字母、数字和下划线_及破折号-',
'send_type.activeUrl' => '客服发送=1，客户发送=0不是有效的域名或者IP',
'send_type.url' => '客服发送=1，客户发送=0不是有效的URL地址',
'send_type.ip' => '客服发送=1，客户发送=0不是有效的IP地址',
'send_type.length' => '客服发送=1，客户发送=0长度不符',
'send_type.max' => '客服发送=1，客户发送=0超出最大长度',
'send_type.min' => '客服发送=1，客户发送=0低于最小长度',
's_get.require' => '客服收到=1，没收到=0不能为空',
's_get.number' => '客服收到=1，没收到=0不是数字',
's_get.float' => '客服收到=1，没收到=0不是小数',
's_get.boolean' => '客服收到=1，没收到=0不是布尔值',
's_get.email' => '客服收到=1，没收到=0不是邮箱地址',
's_get.array' => '客服收到=1，没收到=0不是数组',
's_get.accepted' => '客服收到=1，没收到=0请确认',
's_get.date' => '客服收到=1，没收到=0不是有效日期',
's_get.alpha' => '客服收到=1，没收到=0不是字母',
's_get.alphaNum' => '客服收到=1，没收到=0不是字母和数字',
's_get.alphaDash' => '客服收到=1，没收到=0不是字母和数字和下划线及破折号',
's_get.chs' => '客服收到=1，没收到=0只能是汉字',
's_get.chsAlpha' => '客服收到=1，没收到=0只能是汉字、字母',
's_get.chsAlphaNum' => '客服收到=1，没收到=0只能是汉字、字母和数字',
's_get.chsDash' => '客服收到=1，没收到=0只能是汉字、字母、数字和下划线_及破折号-',
's_get.activeUrl' => '客服收到=1，没收到=0不是有效的域名或者IP',
's_get.url' => '客服收到=1，没收到=0不是有效的URL地址',
's_get.ip' => '客服收到=1，没收到=0不是有效的IP地址',
's_get.length' => '客服收到=1，没收到=0长度不符',
's_get.max' => '客服收到=1，没收到=0超出最大长度',
's_get.min' => '客服收到=1，没收到=0低于最小长度',
'c_get.require' => '客户收到=1，没收到=0不能为空',
'c_get.number' => '客户收到=1，没收到=0不是数字',
'c_get.float' => '客户收到=1，没收到=0不是小数',
'c_get.boolean' => '客户收到=1，没收到=0不是布尔值',
'c_get.email' => '客户收到=1，没收到=0不是邮箱地址',
'c_get.array' => '客户收到=1，没收到=0不是数组',
'c_get.accepted' => '客户收到=1，没收到=0请确认',
'c_get.date' => '客户收到=1，没收到=0不是有效日期',
'c_get.alpha' => '客户收到=1，没收到=0不是字母',
'c_get.alphaNum' => '客户收到=1，没收到=0不是字母和数字',
'c_get.alphaDash' => '客户收到=1，没收到=0不是字母和数字和下划线及破折号',
'c_get.chs' => '客户收到=1，没收到=0只能是汉字',
'c_get.chsAlpha' => '客户收到=1，没收到=0只能是汉字、字母',
'c_get.chsAlphaNum' => '客户收到=1，没收到=0只能是汉字、字母和数字',
'c_get.chsDash' => '客户收到=1，没收到=0只能是汉字、字母、数字和下划线_及破折号-',
'c_get.activeUrl' => '客户收到=1，没收到=0不是有效的域名或者IP',
'c_get.url' => '客户收到=1，没收到=0不是有效的URL地址',
'c_get.ip' => '客户收到=1，没收到=0不是有效的IP地址',
'c_get.length' => '客户收到=1，没收到=0长度不符',
'c_get.max' => '客户收到=1，没收到=0超出最大长度',
'c_get.min' => '客户收到=1，没收到=0低于最小长度',
's_read.require' => '客服已读=1，未读=0不能为空',
's_read.number' => '客服已读=1，未读=0不是数字',
's_read.float' => '客服已读=1，未读=0不是小数',
's_read.boolean' => '客服已读=1，未读=0不是布尔值',
's_read.email' => '客服已读=1，未读=0不是邮箱地址',
's_read.array' => '客服已读=1，未读=0不是数组',
's_read.accepted' => '客服已读=1，未读=0请确认',
's_read.date' => '客服已读=1，未读=0不是有效日期',
's_read.alpha' => '客服已读=1，未读=0不是字母',
's_read.alphaNum' => '客服已读=1，未读=0不是字母和数字',
's_read.alphaDash' => '客服已读=1，未读=0不是字母和数字和下划线及破折号',
's_read.chs' => '客服已读=1，未读=0只能是汉字',
's_read.chsAlpha' => '客服已读=1，未读=0只能是汉字、字母',
's_read.chsAlphaNum' => '客服已读=1，未读=0只能是汉字、字母和数字',
's_read.chsDash' => '客服已读=1，未读=0只能是汉字、字母、数字和下划线_及破折号-',
's_read.activeUrl' => '客服已读=1，未读=0不是有效的域名或者IP',
's_read.url' => '客服已读=1，未读=0不是有效的URL地址',
's_read.ip' => '客服已读=1，未读=0不是有效的IP地址',
's_read.length' => '客服已读=1，未读=0长度不符',
's_read.max' => '客服已读=1，未读=0超出最大长度',
's_read.min' => '客服已读=1，未读=0低于最小长度',
'c_read.require' => '客户已读=1，未读=0不能为空',
'c_read.number' => '客户已读=1，未读=0不是数字',
'c_read.float' => '客户已读=1，未读=0不是小数',
'c_read.boolean' => '客户已读=1，未读=0不是布尔值',
'c_read.email' => '客户已读=1，未读=0不是邮箱地址',
'c_read.array' => '客户已读=1，未读=0不是数组',
'c_read.accepted' => '客户已读=1，未读=0请确认',
'c_read.date' => '客户已读=1，未读=0不是有效日期',
'c_read.alpha' => '客户已读=1，未读=0不是字母',
'c_read.alphaNum' => '客户已读=1，未读=0不是字母和数字',
'c_read.alphaDash' => '客户已读=1，未读=0不是字母和数字和下划线及破折号',
'c_read.chs' => '客户已读=1，未读=0只能是汉字',
'c_read.chsAlpha' => '客户已读=1，未读=0只能是汉字、字母',
'c_read.chsAlphaNum' => '客户已读=1，未读=0只能是汉字、字母和数字',
'c_read.chsDash' => '客户已读=1，未读=0只能是汉字、字母、数字和下划线_及破折号-',
'c_read.activeUrl' => '客户已读=1，未读=0不是有效的域名或者IP',
'c_read.url' => '客户已读=1，未读=0不是有效的URL地址',
'c_read.ip' => '客户已读=1，未读=0不是有效的IP地址',
'c_read.length' => '客户已读=1，未读=0长度不符',
'c_read.max' => '客户已读=1，未读=0超出最大长度',
'c_read.min' => '客户已读=1，未读=0低于最小长度',
'create_time.require' => '创建时间不能为空',
'create_time.number' => '创建时间不是数字',
'create_time.float' => '创建时间不是小数',
'create_time.boolean' => '创建时间不是布尔值',
'create_time.email' => '创建时间不是邮箱地址',
'create_time.array' => '创建时间不是数组',
'create_time.accepted' => '创建时间请确认',
'create_time.date' => '创建时间不是有效日期',
'create_time.alpha' => '创建时间不是字母',
'create_time.alphaNum' => '创建时间不是字母和数字',
'create_time.alphaDash' => '创建时间不是字母和数字和下划线及破折号',
'create_time.chs' => '创建时间只能是汉字',
'create_time.chsAlpha' => '创建时间只能是汉字、字母',
'create_time.chsAlphaNum' => '创建时间只能是汉字、字母和数字',
'create_time.chsDash' => '创建时间只能是汉字、字母、数字和下划线_及破折号-',
'create_time.activeUrl' => '创建时间不是有效的域名或者IP',
'create_time.url' => '创建时间不是有效的URL地址',
'create_time.ip' => '创建时间不是有效的IP地址',
'create_time.length' => '创建时间长度不符',
'create_time.max' => '创建时间超出最大长度',
'create_time.min' => '创建时间低于最小长度',
'update_time.require' => '修改时间不能为空',
'update_time.number' => '修改时间不是数字',
'update_time.float' => '修改时间不是小数',
'update_time.boolean' => '修改时间不是布尔值',
'update_time.email' => '修改时间不是邮箱地址',
'update_time.array' => '修改时间不是数组',
'update_time.accepted' => '修改时间请确认',
'update_time.date' => '修改时间不是有效日期',
'update_time.alpha' => '修改时间不是字母',
'update_time.alphaNum' => '修改时间不是字母和数字',
'update_time.alphaDash' => '修改时间不是字母和数字和下划线及破折号',
'update_time.chs' => '修改时间只能是汉字',
'update_time.chsAlpha' => '修改时间只能是汉字、字母',
'update_time.chsAlphaNum' => '修改时间只能是汉字、字母和数字',
'update_time.chsDash' => '修改时间只能是汉字、字母、数字和下划线_及破折号-',
'update_time.activeUrl' => '修改时间不是有效的域名或者IP',
'update_time.url' => '修改时间不是有效的URL地址',
'update_time.ip' => '修改时间不是有效的IP地址',
'update_time.length' => '修改时间长度不符',
'update_time.max' => '修改时间超出最大长度',
'update_time.min' => '修改时间低于最小长度',
];

protected $scene =   [
    'add'=>['id','client_id','staff_id','content','send_type','s_get','c_get','s_read','c_read','create_time','update_time',],
    'edit'=>['id','client_id','staff_id','content','send_type','s_get','c_get','s_read','c_read','create_time','update_time',]
];

}
