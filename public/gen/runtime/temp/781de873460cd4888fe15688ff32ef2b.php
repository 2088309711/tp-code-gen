<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:81:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Controller\index.html";i:1546415995;s:79:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Controller\add.html";i:1551680250;s:80:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Controller\edit.html";i:1551680250;s:82:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Controller\delete.html";i:1551680558;s:83:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Controller\delList.html";i:1546415995;s:80:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Controller\info.html";i:1551680660;s:81:"F:\phpStudy\WWW\tp-code-gen\public\gen\codeRepository\amaze\Controller\lists.html";i:1546415995;}*/ ?>

//由ThinkphpHelper自动生成,请根据需要修改
namespace <?php echo get_db_config('app_namespace'); ?>\<?php echo $moduleName; ?>\controller;

use think\Controller;

class <?php echo tableNameToModelName($tableName); ?> extends Controller{
	protected $model = null;

	public function _initialize(){	//初始化
		$this->model = new \<?php echo get_db_config('app_namespace'); ?>\<?php echo $moduleName; ?>\model\<?php echo tableNameToModelName($tableName); ?>;
	}
	    //默认入口
    public function index(){
        $this->redirect('lists');
    }
		//新增
	public function add(){
		if($this->request->isPost()){

			$data = input('post.');

			$result = $this->validate($data, '<?php echo tableNameToModelName($tableName); ?>.add');
			if ($result !== true) {
				$this->error($result);
			}

			$flag = $this->model->add($this->request);
			if($flag){
				$this->success('添加成功', url('lists'));
			}else{
				$this->error('添加失败');
			}
		}else{
			return $this->fetch();
		}
	}
		//修改
	public function edit(){
		if($this->request->isPost()){


			$data = input('post.');

			$result = $this->validate($data, '<?php echo tableNameToModelName($tableName); ?>.edit');
			if ($result !== true) {
				$this->error($result);
			}

			$flag = $this->model->edit($this->request);
			if($flag){
				$this->success('编辑成功', url('lists'));
			}else{
				$this->error('编辑失败');
			}
		}else{

			$data = input('');

			$result = $this->validate($data, '<?php echo tableNameToModelName($tableName); ?>.ck_id');
			if ($result !== true) {
				$this->error($result);
			}


			$<?php echo $tableName; ?> = $this->model->info($this->request);
			$this->assign('<?php echo $tableName; ?>', $<?php echo $tableName; ?>);
			return $this->fetch();
		}
	}
		//删除
	public function delete(){


	$data = input('');

	$result = $this->validate($data, '<?php echo tableNameToModelName($tableName); ?>.ck_id');
	if ($result !== true) {
	$this->error($result);
	}


		$flag = $this->model->del($this->request);
		if($flag){
			$this->success('删除成功', url('lists'));
		}else{
			$this->error('删除失败');
		}
	}
	    //批量删除
    public function delList(){
        $flag = $this->model->delList($this->request);
        if($flag){
			$this->success('删除成功', url('lists'));
		}else{
			$this->error('删除失败');
		}
    }
	    //id单个查询
    public function info(){

    $data = input('');

    $result = $this->validate($data, '<?php echo tableNameToModelName($tableName); ?>.ck_id');
    if ($result !== true) {
    $this->error($result);
    }


        $<?php echo $tableName; ?> = $this->model->info($this->request);
        $this->assign('<?php echo $tableName; ?>', $<?php echo $tableName; ?>);
        return $this->fetch();
    }
		//列表
	public function lists(){
		$<?php echo $tableName; ?>List = $this->model->lists($this->request, 12);	
		$this->assign('<?php echo $tableName; ?>List', $<?php echo $tableName; ?>List);
		return $this->fetch();
	}
}
