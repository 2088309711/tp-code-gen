<?php
//	ThinkphpHelper v0.3
//	
//	生成自定义模型
//
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014年9月18日
namespace app\gen\Controller;


use think\Request;


class ModelCode extends Base
{

    //简易模型代码生成
    public function index()
    {
        $this->assign('db_prefix', config('database.prefix'));
        $tableNameList = get_table_name_list();
        $this->assign('tableNameList', $tableNameList);
        $moduleNameList = get_module_name_list();
        $this->assign('moduleNameList', $moduleNameList);
        $moduleName = get_db_config('moduleName');
        $this->assign('moduleName', $moduleName);
        $this->assign('page_name', 'auto-model');
        return $this->fetch();
    }


    //生成模型代码源码
    public function generateModelCode()
    {
        $tableName = getTableName(input('tableName'));
        $moduleName = input('moduleName');
        $this->assign('tableName', $tableName);
        $this->assign('moduleName', $moduleName);
        $codelibName = get_db_config('codeLib') == '' ? 'default' : get_db_config('codeLib');
        $codeBasePath = CODE_TEMPLATE . DS . $codelibName . DS;
        $template = file_get_contents($codeBasePath . 'Model' . DS . 'model.html');//读取模板
        return PHP_HEAD . $this->display($template, [], [], ['view_path' => $codeBasePath . 'Model' . DS]);
    }

    //一键生成所有代码对应的文件，
    public function creatAllFiles()
    {
        $tableNameList = input()['selectTableName'];

        $res = '';
        for ($i = 0; $i < count($tableNameList); $i++) {
            Request::instance()->post(['tableName' => $tableNameList[$i]]);
            $res .= $this->createModelFile() . "<br>";
        }
        return $res;
    }


    //生成模型文件
    public function createModelFile()
    {


        $modelPath = BASE_PATH . get_db_config('projectPath') . 'file_out' . DS . 'model' . DS;
        $tableName = getTableName(input('tableName'));
        if (!file_exists($modelPath)) {
            FileUtil::createDir($modelPath);
        }
        $code = $this->generateModelCode();
        $filePath = $modelPath . tableNameToModelName($tableName) . ".php";
        file_put_contents($filePath, $code);
        return '生成成功，生成路径为：' . $filePath;
    }


}