<?php
//	ThinkphpHelper v0.3
//	
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014年9月18日
namespace app\gen\Controller;


//生成模块
class WedgitCode extends Base
{
    //菜单管理
    public function menu()
    {
        $this->assign('page_name', 'menu');
        return view();
    }

    //在指定目录下创建菜单文件
    public function creatFiles()
    {

        //输出路径
        $outPath = BASE_PATH . get_db_config('projectPath') . 'file_out' . DS . 'view';

        if (!file_exists($outPath)) {
            FileUtil::createDir($outPath);
        }

        $tableNameList = get_table_name_list();

        foreach ($tableNameList as $key => $value) {
            $tableNameList[$key] = getTableName($value);
        }

        $this->assign('menuList', $tableNameList);

        $theme = 'amaze_theme'; //代码风格
        $templateBasePath = CODE_TEMPLATE . DS . $theme . DS . "view" . DS;
        $codeBasePath = CODE_TEMPLATE . DS . 'amaze' . DS;
        $wedgitName = 'menu1.menu.html';
        $saveFileName = 'menu1.html';
        $template = file_get_contents($templateBasePath . $wedgitName);    //读取模板
        $resCode = $this->display($template, [], [], ['view_path' => $codeBasePath . 'View' . DS]);
        $filePath = $outPath . DS . $saveFileName;
        file_put_contents($filePath, $resCode);
        echo $wedgitName . ' 写入菜单成功，路径：' . $filePath . '<br>';
    }


}