<?php
//	ThinkphpHelper v0.3
//	
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014年9月18日
namespace app\gen\Controller;

use think\Request;

class ControllerCode extends Base
{
    public function index()
    {    //生成CRUD代码
        $this->assign('tableNameList', get_table_name_list());
        $this->assign('moduleNameList', get_module_name_list());
        $this->assign('selectTableName', $this->getSessionTableName());
        $this->assign('db_prefix', config('database.prefix'));
        $this->assign('moduleName', get_db_config('moduleName'));
        $this->assign('page_name', 'controll-file');
        return $this->fetch();
    }

    //生成控制器代码
    public function generateControllerCode()
    {
        $tableName = getTableName(input('tableName'));
        $moduleName = input('moduleName');
        $this->assign('tableName', $tableName);
        $this->assign('moduleName', $moduleName);
        $codelibName = get_db_config('codeLib') == '' ? 'default' : get_db_config('codeLib');
        $codeBasePath = CODE_TEMPLATE . DS . $codelibName . DS;
        $template = file_get_contents($codeBasePath . 'Controller' . DS . 'controller.html');//读取模板.
        return PHP_HEAD . $this->display($template, [], [], ['view_path' => $codeBasePath . 'Controller' . DS]);
    }

    //生成控制器文件
    public function generateControllerFile()
    {
        $modelPath = BASE_PATH . get_db_config('projectPath') . 'file_out' . DS . 'controller' . DS;

        $tableName = getTableName(input('tableName'));
        if (!file_exists($modelPath)) {
            FileUtil::createDir($modelPath);
        }
        $code = $this->generateControllerCode();
        $filePath = $modelPath . tableNameToModelName($tableName) . ".php";
        file_put_contents($filePath, $code);
        return '生成成功，生成路径为：' . $filePath . '<br>';
    }

    //生成所有代码对应的文件，
    public function creatAllFiles()
    {
        $tableNameList = input()['selectTableName'];

        $res = '';
        for ($i = 0; $i < count($tableNameList); $i++) {
            Request::instance()->post(['tableName' => $tableNameList[$i]]);
            $res .= $this->generateControllerFile();
        }
        return $res;
    }

    ///读取session中已选中的table
    public function getSessionTableName()
    {
        if (session('selectTableName')) {
            $selectTableName = implode("','", session('selectTableName'));
            return $selectTableName;
        }
    }


}