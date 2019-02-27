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
        $this->assign('db_prefix', config('database.prefix'));
        $this->assign('tableNameList', get_table_name_list());
        $this->assign('moduleName', get_db_config('moduleName'));
        $layoutName = get_db_config('theme') == '' ? 'mac_theme' : get_db_config('theme');
        $this->assign('layoutName', $layoutName);
        $codelibName = get_db_config('codeLib') == '' ? 'default' : get_db_config('codeLib');
        $this->assign('codelibName', $codelibName);
        $this->assign('menuList', $this->getMenuFileList());
        $this->assign('page_name', 'menu');
        return $this->fetch();
    }

    //在指定目录下创建菜单文件
    public function creatFiles()
    {
        $moduleName = input('moduleName');
        //先创建view文件夹

        //输出路径
        $outPath = BASE_PATH . get_db_config('projectPath') . 'file_out' . DS . 'view';

        if (!file_exists($outPath)) {
            FileUtil::createDir($outPath);
        }

        foreach (input()['selectTableName'] as $selectTableName) {
            $tableNameList[] = getTableName($selectTableName);
        }
        $this->assign('menuList', $tableNameList);
        $this->assign('moduleName', $moduleName);
        $theme = input('theme'); //代码风格
        $templateBasePath = CODE_TEMPLATE . DS . $theme . DS . "view" . DS;
        $codeBasePath = CODE_TEMPLATE . DS . input('codelib') . DS;
        $wedgitName = input('menuName');
        $saveFileName = input('saveFileName') . '.html';
        $template = file_get_contents($templateBasePath . $wedgitName);    //读取模板
        $resCode = $this->display($template, [], [], ['view_path' => $codeBasePath . 'View' . DS]);
        $filePath = $outPath . DS . $saveFileName;
        file_put_contents($filePath, $resCode);
        echo $wedgitName . ' 写入菜单成功，路径：' . $filePath . '<br>';
    }

    //ajax方式读取风格下模板文件列表（以menu.html结尾的文件）
    public function getMenuFileList()
    {
        $themeName = input('themeName') ? input('themeName') : 'mac_theme';
        $themePath = __ROOT__ . DS . CODE_TEMPLATE . DS . $themeName . DS;
        $menuList = getFileListEndWith($themePath . 'view', 'menu.html');
        return $menuList;
    }
}