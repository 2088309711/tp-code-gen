<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/28 0028
 * Time: 10:50
 */

namespace app\gen\Controller;


class ValidateCode extends Base
{

    public function index()
    {
        $this->assign('page_name', 'validate');
        return view();
    }

    public function creatAllFiles()
    {

        //获取表名
        $tableName = get_table_name_list();

        $returnText = '';


        //遍历表名
        foreach ($tableName as $item => $tableName) {
            $fieldName = getTableInfoArray($tableName, true);//获取字段名

            $rule = [];
            $message = [];

            //遍历字段
            foreach ($fieldName as $item2 => $value2) {

                $field = $value2['column_name'];
                $name = $value2['column_comment'] != '' ? $value2['column_comment'] : $field;

                $rule[$field] = 'require|number|float|boolean|email|array|accepted|date|alpha|' .
                    'alphaNum|alphaDash|chs|chsAlpha|chsAlphaNum|chsDash|activeUrl|url|ip|' .
                    'length:4,25|max:25|min:5';

                $message[$field . '.require'] = $name . '不能为空';
                $message[$field . '.number'] = $name . '不是数字';
                $message[$field . '.float'] = $name . '不是小数';
                $message[$field . '.boolean'] = $name . '不是布尔值';
                $message[$field . '.email'] = $name . '不是邮箱地址';
                $message[$field . '.array'] = $name . '不是数组';
                $message[$field . '.accepted'] = $name . '请确认';
                $message[$field . '.date'] = $name . '不是有效日期';
                $message[$field . '.alpha'] = $name . '不是字母';
                $message[$field . '.alphaNum'] = $name . '不是字母和数字';
                $message[$field . '.alphaDash'] = $name . '不是字母和数字和下划线及破折号';
                $message[$field . '.chs'] = $name . '只能是汉字';
                $message[$field . '.chsAlpha'] = $name . '只能是汉字、字母';
                $message[$field . '.chsAlphaNum'] = $name . '只能是汉字、字母和数字';
                $message[$field . '.chsDash'] = $name . '只能是汉字、字母、数字和下划线_及破折号-';
                $message[$field . '.activeUrl'] = $name . '不是有效的域名或者IP';
                $message[$field . '.url'] = $name . '不是有效的URL地址';
                $message[$field . '.ip'] = $name . '不是有效的IP地址';
                $message[$field . '.length'] = $name . '长度不符';
                $message[$field . '.max'] = $name . '超出最大长度';
                $message[$field . '.min'] = $name . '低于最小长度';

            }

            //渲染并输出文件
            $returnText .= $this->generateValidateFile($tableName, $rule, $message);

        }

        echo $returnText;

    }


    //生成验证器代码
    public function generateValidateCode($tableName, $rule, $message)
    {

        $moduleName = 'index';

        $this->assign('tableName', getTableName($tableName));

        $codeBasePath = CODE_TEMPLATE . DS . 'amaze' . DS;
        $template = file_get_contents($codeBasePath . 'Validate' . DS . 'validate.html');//读取模板.

        $this->assign('rule', $rule);
        $this->assign('message', $message);
        $this->assign('moduleName', $moduleName);

        return PHP_HEAD . $this->display($template, [], [], ['view_path' => $codeBasePath . 'Validate' . DS]);
    }

    //生成验证器文件
    public function generateValidateFile($tableName, $rule, $message)
    {
        $path = BASE_PATH . get_db_config('projectPath') . 'file_out' . DS . 'validate' . DS;


        if (!file_exists($path)) {
            FileUtil::createDir($path);
        }

        $code = $this->generateValidateCode($tableName, $rule, $message);
        $filePath = $path . tableNameToModelName(getTableName($tableName)) . ".php";


        file_put_contents($filePath, $code);
        return '生成成功，生成路径为：' . $filePath . '<br>';
    }


}