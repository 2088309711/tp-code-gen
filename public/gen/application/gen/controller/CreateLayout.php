<?php
//	ThinkphpHelper v0.3
//	
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014年9月18日
namespace app\gen\Controller;

use think\Controller;
use think\Model;

//生成模块
class CreateLayout extends Base
{
    public function index()
    {
        $this->assign('db_prefix', C('database.prefix'));
        $tableNameList = get_table_name_list();
        $this->assign('tableNameList', $tableNameList);
        $moduleName = get_db_config('moduleName');
        $this->assign('moduleName', $moduleName);
        $layoutName = get_db_config('theme') == '' ? 'mac_theme' : get_db_config('theme');
        $this->assign('layoutName', $layoutName);
        return $this->fetch('CreateLayout' . DS . 'index');
    }

    //在指定目录下创建布局模板文件
    public function creatFiles()
    {
        $moduleName = I('moduleName');
        $layoutName = I('layoutName');
        $modulePath = BASE_PATH . get_db_config('projectPath') . $moduleName;
        $layoutPath = $modulePath . DS . 'file_out' . DS . 'view' . DS;
        $themePath = __ROOT__ . DS . CODE_REPOSITORY . DS . $layoutName . DS;

        $publicViewFileList = getFileListEndWith($themePath . 'view', 'view.html');
        foreach ($publicViewFileList as $publicViewFile) {
            $fileStr = file_get_contents($themePath . DS . 'view' . DS . $publicViewFile);
            $fileStr = $this->display($fileStr);//渲染模板内容
            $publicViewFileName = str_replace('.view.html', '.html', $publicViewFile);
            FileUtil::createDir($layoutPath);
            file_put_contents($layoutPath . $publicViewFileName, $fileStr);    //写入解析后的文件
            echo $publicViewFile . ' 视图公共文件写入成功，路径：' . $layoutPath . '<br>';
        }

        $fromPath = __ROOT__ . DS . CODE_REPOSITORY . DS . $layoutName . DS . 'public';
        $toPath = BASE_PATH . get_db_config('projectPublicPath') . 'static' . DS . 'file_out';
        FileUtil::copyDir($fromPath, $toPath, true);    //复制public到发布目录
        echo $layoutName . '/public/ 公共文件发布目录成功，路径：' . get_db_config('projectPublicPath') . '<br>';
    }

}