<?php
//	ThinkphpHelper v0.3
//	
//	生成表单代码
//
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014年9月18日
namespace app\gen\Controller;


class ViewCode extends Base
{

    public function index()
    {
        $this->assign('page_name', 'front-file');
        return view();
    }


    /*
     *
     *  目标模块 index
        前端风格 amaze_theme
        布局模板 layout
     *
     */

    //一键生成表单文件
    public function generateAllView()
    {
        $defaultActionList = ['add', 'edit', 'lists']; //默认生成增，改，查

        $tableNameList = get_table_name_list();

        $modelPath = BASE_PATH . get_db_config('projectPath') . 'file_out' . DS . 'view' . DS;
        $res = '';
        foreach ($tableNameList as $tableName) {
            $tableName = getTableName($tableName);
            if (!file_exists($modelPath)) {
                FileUtil::createDir($modelPath);
            }
            if (!file_exists($modelPath . DS . $tableName . DS)) {
                FileUtil::createDir($modelPath . DS . $tableName . DS);
            }

            foreach ($defaultActionList as $actionName) {
                $code = $this->generateViewCode($actionName, $tableName);
                $filePath = $modelPath . $tableName . DS . $actionName . ".html";
                file_put_contents($filePath, $code);
                $res .= '生成成功，生成路径为：' . $filePath . "<br>";
            }
        }
        return $res;
    }


    //生成视图代码
    public function generateViewCode($actionName, $tableName)
    {

        $moduleName = 'index';
        $controllerName = $tableName;
        $columnNameKey = getColumnNameKey();
        $tableInfoArray = getTableInfoArray($tableName);

        $tableInfoArray = $this->fillFormInputList($tableName, $tableInfoArray, $columnNameKey);
        $this->assign('tableName', $tableName);
        $this->assign('controllerName', $controllerName);
        $this->assign('moduleName', $moduleName);
        $this->assign('tableInfoArray', $tableInfoArray);
        $this->assign('columnNameKey', $columnNameKey);
        $theme = 'amaze_theme';//代码风格

        $templateBasePath = CODE_TEMPLATE . DS . $theme . DS . "view" . DS;    //代码所在文件夹
        $codelibName = get_db_config('codeLib') == '' ? 'default' : get_db_config('codeLib');
        $codeBasePath = CODE_TEMPLATE . DS . $codelibName . DS;
        $template = file_get_contents($templateBasePath . $actionName . '.html');    //读取模板
        $resCode = $this->display($template, [], [], ['view_path' => $codeBasePath . 'View' . DS]);

        return $resCode;
    }


    //由于{input}标签无法识别变量，需要预先加载输入组件模板
    protected function fillFormInputList($tableName, $tableInfoArray, $columnNameKey)
    {
        $resStr = null;
        for ($i = 0; $i < count($tableInfoArray); $i++) {
            $this->assign('tableInfo', $tableInfoArray[$i]);
            $this->assign('tableName', $tableName);
            $this->assign('columnNameKey', $columnNameKey);
            $tfile = pressInputTypeTemplate($tableName, $tableInfoArray[$i][$columnNameKey]);
            $tableInfoArray[$i]['input'] = $this->display(file_get_contents($tfile));
        }
        return $tableInfoArray;
    }
}