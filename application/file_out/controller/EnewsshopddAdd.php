<?php

//由ThinkphpHelper自动生成,请根据需要修改
namespace app\index\controller;

use think\Controller;

class EnewsshopddAdd extends Controller{
	protected $model = null;

	public function _initialize(){	//初始化
		$this->model = new \app\index\model\EnewsshopddAdd;
	}
	    //默认入口
    public function index(){
        $this->redirect('lists');
    }
		//新增
	public function add(){
		if($this->request->isPost()){

			$data = input('post.');

			$result = $this->validate($data, 'EnewsshopddAdd.add');
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

			$result = $this->validate($data, 'EnewsshopddAdd.edit');
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

			$result = $this->validate($data, 'EnewsshopddAdd.ck_id');
			if ($result !== true) {
				$this->error($result);
			}


			$enewsshopdd_add = $this->model->info($this->request);
			$this->assign('enewsshopdd_add', $enewsshopdd_add);
			return $this->fetch();
		}
	}
		//删除
	public function delete(){


	$data = input('');

	$result = $this->validate($data, 'EnewsshopddAdd.ck_id');
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

    $result = $this->validate($data, 'EnewsshopddAdd.ck_id');
    if ($result !== true) {
    $this->error($result);
    }


        $enewsshopdd_add = $this->model->info($this->request);
        $this->assign('enewsshopdd_add', $enewsshopdd_add);
        return $this->fetch();
    }
		//列表
	public function lists(){
		$enewsshopdd_addList = $this->model->lists($this->request, 12);	
		$this->assign('enewsshopdd_addList', $enewsshopdd_addList);
		return $this->fetch();
	}
}
