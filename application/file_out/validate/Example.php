<?php
//由代码生成器自动生成
namespace app\index\validate;

use think\Validate;

class Example extends Validate{

protected $rule =   [
        'id' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'state' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'name' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'phone' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'user_name' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'access' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'create_time' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'update_time' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'description' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'staff_pk' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_switch' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_switch_m' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_first' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_first_m' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_after' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_after_m' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_num' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_num_m' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_time' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_time_m' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_week' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_week_m' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_auto_close' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'invitation_auto_close_m' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'color' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
        'color_m' => 'require|number|float|boolean|email|array|accepted|date|alpha|alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|length:4,25|max:25|min:5',
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
'state.require' => '实例功能：1=启用，0=禁用不能为空',
'state.number' => '实例功能：1=启用，0=禁用不是数字',
'state.float' => '实例功能：1=启用，0=禁用不是小数',
'state.boolean' => '实例功能：1=启用，0=禁用不是布尔值',
'state.email' => '实例功能：1=启用，0=禁用不是邮箱地址',
'state.array' => '实例功能：1=启用，0=禁用不是数组',
'state.accepted' => '实例功能：1=启用，0=禁用请确认',
'state.date' => '实例功能：1=启用，0=禁用不是有效日期',
'state.alpha' => '实例功能：1=启用，0=禁用不是字母',
'state.alphaNum' => '实例功能：1=启用，0=禁用不是字母和数字',
'state.alphaDash' => '实例功能：1=启用，0=禁用不是字母和数字和下划线及破折号',
'state.chs' => '实例功能：1=启用，0=禁用只能是汉字',
'state.chsAlpha' => '实例功能：1=启用，0=禁用只能是汉字、字母',
'state.chsAlphaNum' => '实例功能：1=启用，0=禁用只能是汉字、字母和数字',
'state.chsDash' => '实例功能：1=启用，0=禁用只能是汉字、字母、数字和下划线_及破折号-',
'state.activeUrl' => '实例功能：1=启用，0=禁用不是有效的域名或者IP',
'state.url' => '实例功能：1=启用，0=禁用不是有效的URL地址',
'state.ip' => '实例功能：1=启用，0=禁用不是有效的IP地址',
'state.length' => '实例功能：1=启用，0=禁用长度不符',
'state.max' => '实例功能：1=启用，0=禁用超出最大长度',
'state.min' => '实例功能：1=启用，0=禁用低于最小长度',
'name.require' => '实例名不能为空',
'name.number' => '实例名不是数字',
'name.float' => '实例名不是小数',
'name.boolean' => '实例名不是布尔值',
'name.email' => '实例名不是邮箱地址',
'name.array' => '实例名不是数组',
'name.accepted' => '实例名请确认',
'name.date' => '实例名不是有效日期',
'name.alpha' => '实例名不是字母',
'name.alphaNum' => '实例名不是字母和数字',
'name.alphaDash' => '实例名不是字母和数字和下划线及破折号',
'name.chs' => '实例名只能是汉字',
'name.chsAlpha' => '实例名只能是汉字、字母',
'name.chsAlphaNum' => '实例名只能是汉字、字母和数字',
'name.chsDash' => '实例名只能是汉字、字母、数字和下划线_及破折号-',
'name.activeUrl' => '实例名不是有效的域名或者IP',
'name.url' => '实例名不是有效的URL地址',
'name.ip' => '实例名不是有效的IP地址',
'name.length' => '实例名长度不符',
'name.max' => '实例名超出最大长度',
'name.min' => '实例名低于最小长度',
'phone.require' => '手机号，移动端可拨打不能为空',
'phone.number' => '手机号，移动端可拨打不是数字',
'phone.float' => '手机号，移动端可拨打不是小数',
'phone.boolean' => '手机号，移动端可拨打不是布尔值',
'phone.email' => '手机号，移动端可拨打不是邮箱地址',
'phone.array' => '手机号，移动端可拨打不是数组',
'phone.accepted' => '手机号，移动端可拨打请确认',
'phone.date' => '手机号，移动端可拨打不是有效日期',
'phone.alpha' => '手机号，移动端可拨打不是字母',
'phone.alphaNum' => '手机号，移动端可拨打不是字母和数字',
'phone.alphaDash' => '手机号，移动端可拨打不是字母和数字和下划线及破折号',
'phone.chs' => '手机号，移动端可拨打只能是汉字',
'phone.chsAlpha' => '手机号，移动端可拨打只能是汉字、字母',
'phone.chsAlphaNum' => '手机号，移动端可拨打只能是汉字、字母和数字',
'phone.chsDash' => '手机号，移动端可拨打只能是汉字、字母、数字和下划线_及破折号-',
'phone.activeUrl' => '手机号，移动端可拨打不是有效的域名或者IP',
'phone.url' => '手机号，移动端可拨打不是有效的URL地址',
'phone.ip' => '手机号，移动端可拨打不是有效的IP地址',
'phone.length' => '手机号，移动端可拨打长度不符',
'phone.max' => '手机号，移动端可拨打超出最大长度',
'phone.min' => '手机号，移动端可拨打低于最小长度',
'user_name.require' => '负责人不能为空',
'user_name.number' => '负责人不是数字',
'user_name.float' => '负责人不是小数',
'user_name.boolean' => '负责人不是布尔值',
'user_name.email' => '负责人不是邮箱地址',
'user_name.array' => '负责人不是数组',
'user_name.accepted' => '负责人请确认',
'user_name.date' => '负责人不是有效日期',
'user_name.alpha' => '负责人不是字母',
'user_name.alphaNum' => '负责人不是字母和数字',
'user_name.alphaDash' => '负责人不是字母和数字和下划线及破折号',
'user_name.chs' => '负责人只能是汉字',
'user_name.chsAlpha' => '负责人只能是汉字、字母',
'user_name.chsAlphaNum' => '负责人只能是汉字、字母和数字',
'user_name.chsDash' => '负责人只能是汉字、字母、数字和下划线_及破折号-',
'user_name.activeUrl' => '负责人不是有效的域名或者IP',
'user_name.url' => '负责人不是有效的URL地址',
'user_name.ip' => '负责人不是有效的IP地址',
'user_name.length' => '负责人长度不符',
'user_name.max' => '负责人超出最大长度',
'user_name.min' => '负责人低于最小长度',
'access.require' => '接入口不能为空',
'access.number' => '接入口不是数字',
'access.float' => '接入口不是小数',
'access.boolean' => '接入口不是布尔值',
'access.email' => '接入口不是邮箱地址',
'access.array' => '接入口不是数组',
'access.accepted' => '接入口请确认',
'access.date' => '接入口不是有效日期',
'access.alpha' => '接入口不是字母',
'access.alphaNum' => '接入口不是字母和数字',
'access.alphaDash' => '接入口不是字母和数字和下划线及破折号',
'access.chs' => '接入口只能是汉字',
'access.chsAlpha' => '接入口只能是汉字、字母',
'access.chsAlphaNum' => '接入口只能是汉字、字母和数字',
'access.chsDash' => '接入口只能是汉字、字母、数字和下划线_及破折号-',
'access.activeUrl' => '接入口不是有效的域名或者IP',
'access.url' => '接入口不是有效的URL地址',
'access.ip' => '接入口不是有效的IP地址',
'access.length' => '接入口长度不符',
'access.max' => '接入口超出最大长度',
'access.min' => '接入口低于最小长度',
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
'description.require' => '实例描述不能为空',
'description.number' => '实例描述不是数字',
'description.float' => '实例描述不是小数',
'description.boolean' => '实例描述不是布尔值',
'description.email' => '实例描述不是邮箱地址',
'description.array' => '实例描述不是数组',
'description.accepted' => '实例描述请确认',
'description.date' => '实例描述不是有效日期',
'description.alpha' => '实例描述不是字母',
'description.alphaNum' => '实例描述不是字母和数字',
'description.alphaDash' => '实例描述不是字母和数字和下划线及破折号',
'description.chs' => '实例描述只能是汉字',
'description.chsAlpha' => '实例描述只能是汉字、字母',
'description.chsAlphaNum' => '实例描述只能是汉字、字母和数字',
'description.chsDash' => '实例描述只能是汉字、字母、数字和下划线_及破折号-',
'description.activeUrl' => '实例描述不是有效的域名或者IP',
'description.url' => '实例描述不是有效的URL地址',
'description.ip' => '实例描述不是有效的IP地址',
'description.length' => '实例描述长度不符',
'description.max' => '实例描述超出最大长度',
'description.min' => '实例描述低于最小长度',
'staff_pk.require' => '可接入的客服，主键，分割符 |不能为空',
'staff_pk.number' => '可接入的客服，主键，分割符 |不是数字',
'staff_pk.float' => '可接入的客服，主键，分割符 |不是小数',
'staff_pk.boolean' => '可接入的客服，主键，分割符 |不是布尔值',
'staff_pk.email' => '可接入的客服，主键，分割符 |不是邮箱地址',
'staff_pk.array' => '可接入的客服，主键，分割符 |不是数组',
'staff_pk.accepted' => '可接入的客服，主键，分割符 |请确认',
'staff_pk.date' => '可接入的客服，主键，分割符 |不是有效日期',
'staff_pk.alpha' => '可接入的客服，主键，分割符 |不是字母',
'staff_pk.alphaNum' => '可接入的客服，主键，分割符 |不是字母和数字',
'staff_pk.alphaDash' => '可接入的客服，主键，分割符 |不是字母和数字和下划线及破折号',
'staff_pk.chs' => '可接入的客服，主键，分割符 |只能是汉字',
'staff_pk.chsAlpha' => '可接入的客服，主键，分割符 |只能是汉字、字母',
'staff_pk.chsAlphaNum' => '可接入的客服，主键，分割符 |只能是汉字、字母和数字',
'staff_pk.chsDash' => '可接入的客服，主键，分割符 |只能是汉字、字母、数字和下划线_及破折号-',
'staff_pk.activeUrl' => '可接入的客服，主键，分割符 |不是有效的域名或者IP',
'staff_pk.url' => '可接入的客服，主键，分割符 |不是有效的URL地址',
'staff_pk.ip' => '可接入的客服，主键，分割符 |不是有效的IP地址',
'staff_pk.length' => '可接入的客服，主键，分割符 |长度不符',
'staff_pk.max' => '可接入的客服，主键，分割符 |超出最大长度',
'staff_pk.min' => '可接入的客服，主键，分割符 |低于最小长度',
'invitation_switch.require' => '邀请功能：1=启用，0=禁用不能为空',
'invitation_switch.number' => '邀请功能：1=启用，0=禁用不是数字',
'invitation_switch.float' => '邀请功能：1=启用，0=禁用不是小数',
'invitation_switch.boolean' => '邀请功能：1=启用，0=禁用不是布尔值',
'invitation_switch.email' => '邀请功能：1=启用，0=禁用不是邮箱地址',
'invitation_switch.array' => '邀请功能：1=启用，0=禁用不是数组',
'invitation_switch.accepted' => '邀请功能：1=启用，0=禁用请确认',
'invitation_switch.date' => '邀请功能：1=启用，0=禁用不是有效日期',
'invitation_switch.alpha' => '邀请功能：1=启用，0=禁用不是字母',
'invitation_switch.alphaNum' => '邀请功能：1=启用，0=禁用不是字母和数字',
'invitation_switch.alphaDash' => '邀请功能：1=启用，0=禁用不是字母和数字和下划线及破折号',
'invitation_switch.chs' => '邀请功能：1=启用，0=禁用只能是汉字',
'invitation_switch.chsAlpha' => '邀请功能：1=启用，0=禁用只能是汉字、字母',
'invitation_switch.chsAlphaNum' => '邀请功能：1=启用，0=禁用只能是汉字、字母和数字',
'invitation_switch.chsDash' => '邀请功能：1=启用，0=禁用只能是汉字、字母、数字和下划线_及破折号-',
'invitation_switch.activeUrl' => '邀请功能：1=启用，0=禁用不是有效的域名或者IP',
'invitation_switch.url' => '邀请功能：1=启用，0=禁用不是有效的URL地址',
'invitation_switch.ip' => '邀请功能：1=启用，0=禁用不是有效的IP地址',
'invitation_switch.length' => '邀请功能：1=启用，0=禁用长度不符',
'invitation_switch.max' => '邀请功能：1=启用，0=禁用超出最大长度',
'invitation_switch.min' => '邀请功能：1=启用，0=禁用低于最小长度',
'invitation_switch_m.require' => '手机邀请功能：1=打开，0=关闭不能为空',
'invitation_switch_m.number' => '手机邀请功能：1=打开，0=关闭不是数字',
'invitation_switch_m.float' => '手机邀请功能：1=打开，0=关闭不是小数',
'invitation_switch_m.boolean' => '手机邀请功能：1=打开，0=关闭不是布尔值',
'invitation_switch_m.email' => '手机邀请功能：1=打开，0=关闭不是邮箱地址',
'invitation_switch_m.array' => '手机邀请功能：1=打开，0=关闭不是数组',
'invitation_switch_m.accepted' => '手机邀请功能：1=打开，0=关闭请确认',
'invitation_switch_m.date' => '手机邀请功能：1=打开，0=关闭不是有效日期',
'invitation_switch_m.alpha' => '手机邀请功能：1=打开，0=关闭不是字母',
'invitation_switch_m.alphaNum' => '手机邀请功能：1=打开，0=关闭不是字母和数字',
'invitation_switch_m.alphaDash' => '手机邀请功能：1=打开，0=关闭不是字母和数字和下划线及破折号',
'invitation_switch_m.chs' => '手机邀请功能：1=打开，0=关闭只能是汉字',
'invitation_switch_m.chsAlpha' => '手机邀请功能：1=打开，0=关闭只能是汉字、字母',
'invitation_switch_m.chsAlphaNum' => '手机邀请功能：1=打开，0=关闭只能是汉字、字母和数字',
'invitation_switch_m.chsDash' => '手机邀请功能：1=打开，0=关闭只能是汉字、字母、数字和下划线_及破折号-',
'invitation_switch_m.activeUrl' => '手机邀请功能：1=打开，0=关闭不是有效的域名或者IP',
'invitation_switch_m.url' => '手机邀请功能：1=打开，0=关闭不是有效的URL地址',
'invitation_switch_m.ip' => '手机邀请功能：1=打开，0=关闭不是有效的IP地址',
'invitation_switch_m.length' => '手机邀请功能：1=打开，0=关闭长度不符',
'invitation_switch_m.max' => '手机邀请功能：1=打开，0=关闭超出最大长度',
'invitation_switch_m.min' => '手机邀请功能：1=打开，0=关闭低于最小长度',
'invitation_first.require' => '首次邀请延迟，默认10秒不能为空',
'invitation_first.number' => '首次邀请延迟，默认10秒不是数字',
'invitation_first.float' => '首次邀请延迟，默认10秒不是小数',
'invitation_first.boolean' => '首次邀请延迟，默认10秒不是布尔值',
'invitation_first.email' => '首次邀请延迟，默认10秒不是邮箱地址',
'invitation_first.array' => '首次邀请延迟，默认10秒不是数组',
'invitation_first.accepted' => '首次邀请延迟，默认10秒请确认',
'invitation_first.date' => '首次邀请延迟，默认10秒不是有效日期',
'invitation_first.alpha' => '首次邀请延迟，默认10秒不是字母',
'invitation_first.alphaNum' => '首次邀请延迟，默认10秒不是字母和数字',
'invitation_first.alphaDash' => '首次邀请延迟，默认10秒不是字母和数字和下划线及破折号',
'invitation_first.chs' => '首次邀请延迟，默认10秒只能是汉字',
'invitation_first.chsAlpha' => '首次邀请延迟，默认10秒只能是汉字、字母',
'invitation_first.chsAlphaNum' => '首次邀请延迟，默认10秒只能是汉字、字母和数字',
'invitation_first.chsDash' => '首次邀请延迟，默认10秒只能是汉字、字母、数字和下划线_及破折号-',
'invitation_first.activeUrl' => '首次邀请延迟，默认10秒不是有效的域名或者IP',
'invitation_first.url' => '首次邀请延迟，默认10秒不是有效的URL地址',
'invitation_first.ip' => '首次邀请延迟，默认10秒不是有效的IP地址',
'invitation_first.length' => '首次邀请延迟，默认10秒长度不符',
'invitation_first.max' => '首次邀请延迟，默认10秒超出最大长度',
'invitation_first.min' => '首次邀请延迟，默认10秒低于最小长度',
'invitation_first_m.require' => '手机首次邀请延迟，默认10秒不能为空',
'invitation_first_m.number' => '手机首次邀请延迟，默认10秒不是数字',
'invitation_first_m.float' => '手机首次邀请延迟，默认10秒不是小数',
'invitation_first_m.boolean' => '手机首次邀请延迟，默认10秒不是布尔值',
'invitation_first_m.email' => '手机首次邀请延迟，默认10秒不是邮箱地址',
'invitation_first_m.array' => '手机首次邀请延迟，默认10秒不是数组',
'invitation_first_m.accepted' => '手机首次邀请延迟，默认10秒请确认',
'invitation_first_m.date' => '手机首次邀请延迟，默认10秒不是有效日期',
'invitation_first_m.alpha' => '手机首次邀请延迟，默认10秒不是字母',
'invitation_first_m.alphaNum' => '手机首次邀请延迟，默认10秒不是字母和数字',
'invitation_first_m.alphaDash' => '手机首次邀请延迟，默认10秒不是字母和数字和下划线及破折号',
'invitation_first_m.chs' => '手机首次邀请延迟，默认10秒只能是汉字',
'invitation_first_m.chsAlpha' => '手机首次邀请延迟，默认10秒只能是汉字、字母',
'invitation_first_m.chsAlphaNum' => '手机首次邀请延迟，默认10秒只能是汉字、字母和数字',
'invitation_first_m.chsDash' => '手机首次邀请延迟，默认10秒只能是汉字、字母、数字和下划线_及破折号-',
'invitation_first_m.activeUrl' => '手机首次邀请延迟，默认10秒不是有效的域名或者IP',
'invitation_first_m.url' => '手机首次邀请延迟，默认10秒不是有效的URL地址',
'invitation_first_m.ip' => '手机首次邀请延迟，默认10秒不是有效的IP地址',
'invitation_first_m.length' => '手机首次邀请延迟，默认10秒长度不符',
'invitation_first_m.max' => '手机首次邀请延迟，默认10秒超出最大长度',
'invitation_first_m.min' => '手机首次邀请延迟，默认10秒低于最小长度',
'invitation_after.require' => '后续邀请延迟，默认20秒不能为空',
'invitation_after.number' => '后续邀请延迟，默认20秒不是数字',
'invitation_after.float' => '后续邀请延迟，默认20秒不是小数',
'invitation_after.boolean' => '后续邀请延迟，默认20秒不是布尔值',
'invitation_after.email' => '后续邀请延迟，默认20秒不是邮箱地址',
'invitation_after.array' => '后续邀请延迟，默认20秒不是数组',
'invitation_after.accepted' => '后续邀请延迟，默认20秒请确认',
'invitation_after.date' => '后续邀请延迟，默认20秒不是有效日期',
'invitation_after.alpha' => '后续邀请延迟，默认20秒不是字母',
'invitation_after.alphaNum' => '后续邀请延迟，默认20秒不是字母和数字',
'invitation_after.alphaDash' => '后续邀请延迟，默认20秒不是字母和数字和下划线及破折号',
'invitation_after.chs' => '后续邀请延迟，默认20秒只能是汉字',
'invitation_after.chsAlpha' => '后续邀请延迟，默认20秒只能是汉字、字母',
'invitation_after.chsAlphaNum' => '后续邀请延迟，默认20秒只能是汉字、字母和数字',
'invitation_after.chsDash' => '后续邀请延迟，默认20秒只能是汉字、字母、数字和下划线_及破折号-',
'invitation_after.activeUrl' => '后续邀请延迟，默认20秒不是有效的域名或者IP',
'invitation_after.url' => '后续邀请延迟，默认20秒不是有效的URL地址',
'invitation_after.ip' => '后续邀请延迟，默认20秒不是有效的IP地址',
'invitation_after.length' => '后续邀请延迟，默认20秒长度不符',
'invitation_after.max' => '后续邀请延迟，默认20秒超出最大长度',
'invitation_after.min' => '后续邀请延迟，默认20秒低于最小长度',
'invitation_after_m.require' => '手机后续邀请延迟，默认20秒不能为空',
'invitation_after_m.number' => '手机后续邀请延迟，默认20秒不是数字',
'invitation_after_m.float' => '手机后续邀请延迟，默认20秒不是小数',
'invitation_after_m.boolean' => '手机后续邀请延迟，默认20秒不是布尔值',
'invitation_after_m.email' => '手机后续邀请延迟，默认20秒不是邮箱地址',
'invitation_after_m.array' => '手机后续邀请延迟，默认20秒不是数组',
'invitation_after_m.accepted' => '手机后续邀请延迟，默认20秒请确认',
'invitation_after_m.date' => '手机后续邀请延迟，默认20秒不是有效日期',
'invitation_after_m.alpha' => '手机后续邀请延迟，默认20秒不是字母',
'invitation_after_m.alphaNum' => '手机后续邀请延迟，默认20秒不是字母和数字',
'invitation_after_m.alphaDash' => '手机后续邀请延迟，默认20秒不是字母和数字和下划线及破折号',
'invitation_after_m.chs' => '手机后续邀请延迟，默认20秒只能是汉字',
'invitation_after_m.chsAlpha' => '手机后续邀请延迟，默认20秒只能是汉字、字母',
'invitation_after_m.chsAlphaNum' => '手机后续邀请延迟，默认20秒只能是汉字、字母和数字',
'invitation_after_m.chsDash' => '手机后续邀请延迟，默认20秒只能是汉字、字母、数字和下划线_及破折号-',
'invitation_after_m.activeUrl' => '手机后续邀请延迟，默认20秒不是有效的域名或者IP',
'invitation_after_m.url' => '手机后续邀请延迟，默认20秒不是有效的URL地址',
'invitation_after_m.ip' => '手机后续邀请延迟，默认20秒不是有效的IP地址',
'invitation_after_m.length' => '手机后续邀请延迟，默认20秒长度不符',
'invitation_after_m.max' => '手机后续邀请延迟，默认20秒超出最大长度',
'invitation_after_m.min' => '手机后续邀请延迟，默认20秒低于最小长度',
'invitation_num.require' => '邀请次数，0=不限制不能为空',
'invitation_num.number' => '邀请次数，0=不限制不是数字',
'invitation_num.float' => '邀请次数，0=不限制不是小数',
'invitation_num.boolean' => '邀请次数，0=不限制不是布尔值',
'invitation_num.email' => '邀请次数，0=不限制不是邮箱地址',
'invitation_num.array' => '邀请次数，0=不限制不是数组',
'invitation_num.accepted' => '邀请次数，0=不限制请确认',
'invitation_num.date' => '邀请次数，0=不限制不是有效日期',
'invitation_num.alpha' => '邀请次数，0=不限制不是字母',
'invitation_num.alphaNum' => '邀请次数，0=不限制不是字母和数字',
'invitation_num.alphaDash' => '邀请次数，0=不限制不是字母和数字和下划线及破折号',
'invitation_num.chs' => '邀请次数，0=不限制只能是汉字',
'invitation_num.chsAlpha' => '邀请次数，0=不限制只能是汉字、字母',
'invitation_num.chsAlphaNum' => '邀请次数，0=不限制只能是汉字、字母和数字',
'invitation_num.chsDash' => '邀请次数，0=不限制只能是汉字、字母、数字和下划线_及破折号-',
'invitation_num.activeUrl' => '邀请次数，0=不限制不是有效的域名或者IP',
'invitation_num.url' => '邀请次数，0=不限制不是有效的URL地址',
'invitation_num.ip' => '邀请次数，0=不限制不是有效的IP地址',
'invitation_num.length' => '邀请次数，0=不限制长度不符',
'invitation_num.max' => '邀请次数，0=不限制超出最大长度',
'invitation_num.min' => '邀请次数，0=不限制低于最小长度',
'invitation_num_m.require' => '手机邀请次数，0=不限制不能为空',
'invitation_num_m.number' => '手机邀请次数，0=不限制不是数字',
'invitation_num_m.float' => '手机邀请次数，0=不限制不是小数',
'invitation_num_m.boolean' => '手机邀请次数，0=不限制不是布尔值',
'invitation_num_m.email' => '手机邀请次数，0=不限制不是邮箱地址',
'invitation_num_m.array' => '手机邀请次数，0=不限制不是数组',
'invitation_num_m.accepted' => '手机邀请次数，0=不限制请确认',
'invitation_num_m.date' => '手机邀请次数，0=不限制不是有效日期',
'invitation_num_m.alpha' => '手机邀请次数，0=不限制不是字母',
'invitation_num_m.alphaNum' => '手机邀请次数，0=不限制不是字母和数字',
'invitation_num_m.alphaDash' => '手机邀请次数，0=不限制不是字母和数字和下划线及破折号',
'invitation_num_m.chs' => '手机邀请次数，0=不限制只能是汉字',
'invitation_num_m.chsAlpha' => '手机邀请次数，0=不限制只能是汉字、字母',
'invitation_num_m.chsAlphaNum' => '手机邀请次数，0=不限制只能是汉字、字母和数字',
'invitation_num_m.chsDash' => '手机邀请次数，0=不限制只能是汉字、字母、数字和下划线_及破折号-',
'invitation_num_m.activeUrl' => '手机邀请次数，0=不限制不是有效的域名或者IP',
'invitation_num_m.url' => '手机邀请次数，0=不限制不是有效的URL地址',
'invitation_num_m.ip' => '手机邀请次数，0=不限制不是有效的IP地址',
'invitation_num_m.length' => '手机邀请次数，0=不限制长度不符',
'invitation_num_m.max' => '手机邀请次数，0=不限制超出最大长度',
'invitation_num_m.min' => '手机邀请次数，0=不限制低于最小长度',
'invitation_time.require' => '时间范围内邀请不能为空',
'invitation_time.number' => '时间范围内邀请不是数字',
'invitation_time.float' => '时间范围内邀请不是小数',
'invitation_time.boolean' => '时间范围内邀请不是布尔值',
'invitation_time.email' => '时间范围内邀请不是邮箱地址',
'invitation_time.array' => '时间范围内邀请不是数组',
'invitation_time.accepted' => '时间范围内邀请请确认',
'invitation_time.date' => '时间范围内邀请不是有效日期',
'invitation_time.alpha' => '时间范围内邀请不是字母',
'invitation_time.alphaNum' => '时间范围内邀请不是字母和数字',
'invitation_time.alphaDash' => '时间范围内邀请不是字母和数字和下划线及破折号',
'invitation_time.chs' => '时间范围内邀请只能是汉字',
'invitation_time.chsAlpha' => '时间范围内邀请只能是汉字、字母',
'invitation_time.chsAlphaNum' => '时间范围内邀请只能是汉字、字母和数字',
'invitation_time.chsDash' => '时间范围内邀请只能是汉字、字母、数字和下划线_及破折号-',
'invitation_time.activeUrl' => '时间范围内邀请不是有效的域名或者IP',
'invitation_time.url' => '时间范围内邀请不是有效的URL地址',
'invitation_time.ip' => '时间范围内邀请不是有效的IP地址',
'invitation_time.length' => '时间范围内邀请长度不符',
'invitation_time.max' => '时间范围内邀请超出最大长度',
'invitation_time.min' => '时间范围内邀请低于最小长度',
'invitation_time_m.require' => '手机时间范围内邀请不能为空',
'invitation_time_m.number' => '手机时间范围内邀请不是数字',
'invitation_time_m.float' => '手机时间范围内邀请不是小数',
'invitation_time_m.boolean' => '手机时间范围内邀请不是布尔值',
'invitation_time_m.email' => '手机时间范围内邀请不是邮箱地址',
'invitation_time_m.array' => '手机时间范围内邀请不是数组',
'invitation_time_m.accepted' => '手机时间范围内邀请请确认',
'invitation_time_m.date' => '手机时间范围内邀请不是有效日期',
'invitation_time_m.alpha' => '手机时间范围内邀请不是字母',
'invitation_time_m.alphaNum' => '手机时间范围内邀请不是字母和数字',
'invitation_time_m.alphaDash' => '手机时间范围内邀请不是字母和数字和下划线及破折号',
'invitation_time_m.chs' => '手机时间范围内邀请只能是汉字',
'invitation_time_m.chsAlpha' => '手机时间范围内邀请只能是汉字、字母',
'invitation_time_m.chsAlphaNum' => '手机时间范围内邀请只能是汉字、字母和数字',
'invitation_time_m.chsDash' => '手机时间范围内邀请只能是汉字、字母、数字和下划线_及破折号-',
'invitation_time_m.activeUrl' => '手机时间范围内邀请不是有效的域名或者IP',
'invitation_time_m.url' => '手机时间范围内邀请不是有效的URL地址',
'invitation_time_m.ip' => '手机时间范围内邀请不是有效的IP地址',
'invitation_time_m.length' => '手机时间范围内邀请长度不符',
'invitation_time_m.max' => '手机时间范围内邀请超出最大长度',
'invitation_time_m.min' => '手机时间范围内邀请低于最小长度',
'invitation_week.require' => '星期范围，周一至周末(1-7)，分割符 |不能为空',
'invitation_week.number' => '星期范围，周一至周末(1-7)，分割符 |不是数字',
'invitation_week.float' => '星期范围，周一至周末(1-7)，分割符 |不是小数',
'invitation_week.boolean' => '星期范围，周一至周末(1-7)，分割符 |不是布尔值',
'invitation_week.email' => '星期范围，周一至周末(1-7)，分割符 |不是邮箱地址',
'invitation_week.array' => '星期范围，周一至周末(1-7)，分割符 |不是数组',
'invitation_week.accepted' => '星期范围，周一至周末(1-7)，分割符 |请确认',
'invitation_week.date' => '星期范围，周一至周末(1-7)，分割符 |不是有效日期',
'invitation_week.alpha' => '星期范围，周一至周末(1-7)，分割符 |不是字母',
'invitation_week.alphaNum' => '星期范围，周一至周末(1-7)，分割符 |不是字母和数字',
'invitation_week.alphaDash' => '星期范围，周一至周末(1-7)，分割符 |不是字母和数字和下划线及破折号',
'invitation_week.chs' => '星期范围，周一至周末(1-7)，分割符 |只能是汉字',
'invitation_week.chsAlpha' => '星期范围，周一至周末(1-7)，分割符 |只能是汉字、字母',
'invitation_week.chsAlphaNum' => '星期范围，周一至周末(1-7)，分割符 |只能是汉字、字母和数字',
'invitation_week.chsDash' => '星期范围，周一至周末(1-7)，分割符 |只能是汉字、字母、数字和下划线_及破折号-',
'invitation_week.activeUrl' => '星期范围，周一至周末(1-7)，分割符 |不是有效的域名或者IP',
'invitation_week.url' => '星期范围，周一至周末(1-7)，分割符 |不是有效的URL地址',
'invitation_week.ip' => '星期范围，周一至周末(1-7)，分割符 |不是有效的IP地址',
'invitation_week.length' => '星期范围，周一至周末(1-7)，分割符 |长度不符',
'invitation_week.max' => '星期范围，周一至周末(1-7)，分割符 |超出最大长度',
'invitation_week.min' => '星期范围，周一至周末(1-7)，分割符 |低于最小长度',
'invitation_week_m.require' => '手机星期范围，周一至周末(1-7)，分割符 |不能为空',
'invitation_week_m.number' => '手机星期范围，周一至周末(1-7)，分割符 |不是数字',
'invitation_week_m.float' => '手机星期范围，周一至周末(1-7)，分割符 |不是小数',
'invitation_week_m.boolean' => '手机星期范围，周一至周末(1-7)，分割符 |不是布尔值',
'invitation_week_m.email' => '手机星期范围，周一至周末(1-7)，分割符 |不是邮箱地址',
'invitation_week_m.array' => '手机星期范围，周一至周末(1-7)，分割符 |不是数组',
'invitation_week_m.accepted' => '手机星期范围，周一至周末(1-7)，分割符 |请确认',
'invitation_week_m.date' => '手机星期范围，周一至周末(1-7)，分割符 |不是有效日期',
'invitation_week_m.alpha' => '手机星期范围，周一至周末(1-7)，分割符 |不是字母',
'invitation_week_m.alphaNum' => '手机星期范围，周一至周末(1-7)，分割符 |不是字母和数字',
'invitation_week_m.alphaDash' => '手机星期范围，周一至周末(1-7)，分割符 |不是字母和数字和下划线及破折号',
'invitation_week_m.chs' => '手机星期范围，周一至周末(1-7)，分割符 |只能是汉字',
'invitation_week_m.chsAlpha' => '手机星期范围，周一至周末(1-7)，分割符 |只能是汉字、字母',
'invitation_week_m.chsAlphaNum' => '手机星期范围，周一至周末(1-7)，分割符 |只能是汉字、字母和数字',
'invitation_week_m.chsDash' => '手机星期范围，周一至周末(1-7)，分割符 |只能是汉字、字母、数字和下划线_及破折号-',
'invitation_week_m.activeUrl' => '手机星期范围，周一至周末(1-7)，分割符 |不是有效的域名或者IP',
'invitation_week_m.url' => '手机星期范围，周一至周末(1-7)，分割符 |不是有效的URL地址',
'invitation_week_m.ip' => '手机星期范围，周一至周末(1-7)，分割符 |不是有效的IP地址',
'invitation_week_m.length' => '手机星期范围，周一至周末(1-7)，分割符 |长度不符',
'invitation_week_m.max' => '手机星期范围，周一至周末(1-7)，分割符 |超出最大长度',
'invitation_week_m.min' => '手机星期范围，周一至周末(1-7)，分割符 |低于最小长度',
'invitation_auto_close.require' => '自动关闭邀请延迟，0=不限制不能为空',
'invitation_auto_close.number' => '自动关闭邀请延迟，0=不限制不是数字',
'invitation_auto_close.float' => '自动关闭邀请延迟，0=不限制不是小数',
'invitation_auto_close.boolean' => '自动关闭邀请延迟，0=不限制不是布尔值',
'invitation_auto_close.email' => '自动关闭邀请延迟，0=不限制不是邮箱地址',
'invitation_auto_close.array' => '自动关闭邀请延迟，0=不限制不是数组',
'invitation_auto_close.accepted' => '自动关闭邀请延迟，0=不限制请确认',
'invitation_auto_close.date' => '自动关闭邀请延迟，0=不限制不是有效日期',
'invitation_auto_close.alpha' => '自动关闭邀请延迟，0=不限制不是字母',
'invitation_auto_close.alphaNum' => '自动关闭邀请延迟，0=不限制不是字母和数字',
'invitation_auto_close.alphaDash' => '自动关闭邀请延迟，0=不限制不是字母和数字和下划线及破折号',
'invitation_auto_close.chs' => '自动关闭邀请延迟，0=不限制只能是汉字',
'invitation_auto_close.chsAlpha' => '自动关闭邀请延迟，0=不限制只能是汉字、字母',
'invitation_auto_close.chsAlphaNum' => '自动关闭邀请延迟，0=不限制只能是汉字、字母和数字',
'invitation_auto_close.chsDash' => '自动关闭邀请延迟，0=不限制只能是汉字、字母、数字和下划线_及破折号-',
'invitation_auto_close.activeUrl' => '自动关闭邀请延迟，0=不限制不是有效的域名或者IP',
'invitation_auto_close.url' => '自动关闭邀请延迟，0=不限制不是有效的URL地址',
'invitation_auto_close.ip' => '自动关闭邀请延迟，0=不限制不是有效的IP地址',
'invitation_auto_close.length' => '自动关闭邀请延迟，0=不限制长度不符',
'invitation_auto_close.max' => '自动关闭邀请延迟，0=不限制超出最大长度',
'invitation_auto_close.min' => '自动关闭邀请延迟，0=不限制低于最小长度',
'invitation_auto_close_m.require' => '手机自动关闭邀请延迟，0=不限制不能为空',
'invitation_auto_close_m.number' => '手机自动关闭邀请延迟，0=不限制不是数字',
'invitation_auto_close_m.float' => '手机自动关闭邀请延迟，0=不限制不是小数',
'invitation_auto_close_m.boolean' => '手机自动关闭邀请延迟，0=不限制不是布尔值',
'invitation_auto_close_m.email' => '手机自动关闭邀请延迟，0=不限制不是邮箱地址',
'invitation_auto_close_m.array' => '手机自动关闭邀请延迟，0=不限制不是数组',
'invitation_auto_close_m.accepted' => '手机自动关闭邀请延迟，0=不限制请确认',
'invitation_auto_close_m.date' => '手机自动关闭邀请延迟，0=不限制不是有效日期',
'invitation_auto_close_m.alpha' => '手机自动关闭邀请延迟，0=不限制不是字母',
'invitation_auto_close_m.alphaNum' => '手机自动关闭邀请延迟，0=不限制不是字母和数字',
'invitation_auto_close_m.alphaDash' => '手机自动关闭邀请延迟，0=不限制不是字母和数字和下划线及破折号',
'invitation_auto_close_m.chs' => '手机自动关闭邀请延迟，0=不限制只能是汉字',
'invitation_auto_close_m.chsAlpha' => '手机自动关闭邀请延迟，0=不限制只能是汉字、字母',
'invitation_auto_close_m.chsAlphaNum' => '手机自动关闭邀请延迟，0=不限制只能是汉字、字母和数字',
'invitation_auto_close_m.chsDash' => '手机自动关闭邀请延迟，0=不限制只能是汉字、字母、数字和下划线_及破折号-',
'invitation_auto_close_m.activeUrl' => '手机自动关闭邀请延迟，0=不限制不是有效的域名或者IP',
'invitation_auto_close_m.url' => '手机自动关闭邀请延迟，0=不限制不是有效的URL地址',
'invitation_auto_close_m.ip' => '手机自动关闭邀请延迟，0=不限制不是有效的IP地址',
'invitation_auto_close_m.length' => '手机自动关闭邀请延迟，0=不限制长度不符',
'invitation_auto_close_m.max' => '手机自动关闭邀请延迟，0=不限制超出最大长度',
'invitation_auto_close_m.min' => '手机自动关闭邀请延迟，0=不限制低于最小长度',
'color.require' => '主题色不能为空',
'color.number' => '主题色不是数字',
'color.float' => '主题色不是小数',
'color.boolean' => '主题色不是布尔值',
'color.email' => '主题色不是邮箱地址',
'color.array' => '主题色不是数组',
'color.accepted' => '主题色请确认',
'color.date' => '主题色不是有效日期',
'color.alpha' => '主题色不是字母',
'color.alphaNum' => '主题色不是字母和数字',
'color.alphaDash' => '主题色不是字母和数字和下划线及破折号',
'color.chs' => '主题色只能是汉字',
'color.chsAlpha' => '主题色只能是汉字、字母',
'color.chsAlphaNum' => '主题色只能是汉字、字母和数字',
'color.chsDash' => '主题色只能是汉字、字母、数字和下划线_及破折号-',
'color.activeUrl' => '主题色不是有效的域名或者IP',
'color.url' => '主题色不是有效的URL地址',
'color.ip' => '主题色不是有效的IP地址',
'color.length' => '主题色长度不符',
'color.max' => '主题色超出最大长度',
'color.min' => '主题色低于最小长度',
'color_m.require' => '手机主题色不能为空',
'color_m.number' => '手机主题色不是数字',
'color_m.float' => '手机主题色不是小数',
'color_m.boolean' => '手机主题色不是布尔值',
'color_m.email' => '手机主题色不是邮箱地址',
'color_m.array' => '手机主题色不是数组',
'color_m.accepted' => '手机主题色请确认',
'color_m.date' => '手机主题色不是有效日期',
'color_m.alpha' => '手机主题色不是字母',
'color_m.alphaNum' => '手机主题色不是字母和数字',
'color_m.alphaDash' => '手机主题色不是字母和数字和下划线及破折号',
'color_m.chs' => '手机主题色只能是汉字',
'color_m.chsAlpha' => '手机主题色只能是汉字、字母',
'color_m.chsAlphaNum' => '手机主题色只能是汉字、字母和数字',
'color_m.chsDash' => '手机主题色只能是汉字、字母、数字和下划线_及破折号-',
'color_m.activeUrl' => '手机主题色不是有效的域名或者IP',
'color_m.url' => '手机主题色不是有效的URL地址',
'color_m.ip' => '手机主题色不是有效的IP地址',
'color_m.length' => '手机主题色长度不符',
'color_m.max' => '手机主题色超出最大长度',
'color_m.min' => '手机主题色低于最小长度',
];

protected $scene =   [
    'add'=>['id','state','name','phone','user_name','access','create_time','update_time','description','staff_pk','invitation_switch','invitation_switch_m','invitation_first','invitation_first_m','invitation_after','invitation_after_m','invitation_num','invitation_num_m','invitation_time','invitation_time_m','invitation_week','invitation_week_m','invitation_auto_close','invitation_auto_close_m','color','color_m',],
    'edit'=>['id','state','name','phone','user_name','access','create_time','update_time','description','staff_pk','invitation_switch','invitation_switch_m','invitation_first','invitation_first_m','invitation_after','invitation_after_m','invitation_num','invitation_num_m','invitation_time','invitation_time_m','invitation_week','invitation_week_m','invitation_auto_close','invitation_auto_close_m','color','color_m',]
];

}
