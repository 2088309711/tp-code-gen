<?php
//	ThinkphpHelper v0.3
//	
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014年9月18日
namespace app\gen\Controller;


class ControllerCode extends Base
{
    public function index()
    {    //生成CRUD代码
        $this->assign('page_name', 'controll-file');
        return view();
    }

    //生成控制器代码
    public function generateControllerCode($tableName)
    {
        $moduleName = 'index';
        $this->assign('tableName', $tableName);
        $this->assign('moduleName', $moduleName);
        $codelibName = get_db_config('codeLib') == '' ? 'default' : get_db_config('codeLib');
        $codeBasePath = CODE_TEMPLATE . DS . $codelibName . DS;
        $template = file_get_contents($codeBasePath . 'Controller' . DS . 'controller.html');//读取模板.
        return PHP_HEAD . $this->display($template, [], [], ['view_path' => $codeBasePath . 'Controller' . DS]);
    }

    //生成控制器文件
    public function generateControllerFile($tableName)
    {
        $modelPath = BASE_PATH . get_db_config('projectPath') . 'file_out' . DS . 'controller' . DS;

        if (!file_exists($modelPath)) {
            FileUtil::createDir($modelPath);
        }
        $code = $this->generateControllerCode($tableName);
        $filePath = $modelPath . tableNameToModelName($tableName) . ".php";
        file_put_contents($filePath, $code);
        return '生成成功，生成路径为：' . $filePath . '<br>';
    }

    //生成所有代码对应的文件，
    public function creatAllFiles()
    {
        $tableNameList = get_table_name_list();

        $res = '';
        foreach ($tableNameList as $item) {
            $res .= $this->generateControllerFile(getTableName($item));
        }

        return $res;
    }

}