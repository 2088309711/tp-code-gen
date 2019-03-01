<?php
//	ThinkphpHelper v0.3
//	
//	生成自定义模型
//
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014年9月18日
namespace app\gen\Controller;


class ModelCode extends Base
{

    //简易模型代码生成
    public function index()
    {
        $this->assign('page_name', 'auto-model');
        return view();
    }

    //生成模型代码源码
    public function generateModelCode($tableName)
    {
        $moduleName = 'index';
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
        $tableNameList = get_table_name_list();
        $res = '';
        foreach ($tableNameList as $value) {
            $res .= $this->createModelFile(getTableName($value)) . "<br>";
        }
        return $res;
    }

    //生成模型文件
    public function createModelFile($tableName)
    {
        $modelPath = BASE_PATH . get_db_config('projectPath') . 'file_out' . DS . 'model' . DS;

        if (!file_exists($modelPath)) {
            FileUtil::createDir($modelPath);
        }
        $code = $this->generateModelCode($tableName);
        $filePath = $modelPath . tableNameToModelName($tableName) . ".php";
        file_put_contents($filePath, $code);
        return '生成成功，生成路径为：' . $filePath;
    }

}