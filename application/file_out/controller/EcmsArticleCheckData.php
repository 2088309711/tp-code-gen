<?php

//由ThinkphpHelper自动生成,请根据需要修改
namespace app\index\controller;

use think\Controller;

class EcmsArticleCheckData extends Controller{
	protected $model = null;

	public function _initialize(){	//初始化
		$this->model = new \app\index\model\EcmsArticleCheckData;
	}
	    //默认入口
    public function index(){
        $this->redirect('lists');
    }
		//新增
	public function add(){
		if($this->request->isPost()){

			$data = input('post.');

			$result = $this->validate($data, 'EcmsArticleCheckData.add');
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

			$result = $this->validate($data, 'EcmsArticleCheckData.edit');
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

			$result = $this->validate($data, 'EcmsArticleCheckData.ck_id');
			if ($result !== true) {
				$this->error($result);
			}


			$ecms_article_check_data = $this->model->info($this->request);
			$this->assign('ecms_article_check_data', $ecms_article_check_data);
			return $this->fetch();
		}
	}
		//删除
	public function delete(){


	$data = input('');

	$result = $this->validate($data, 'EcmsArticleCheckData.ck_id');
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

    $result = $this->validate($data, 'EcmsArticleCheckData.ck_id');
    if ($result !== true) {
    $this->error($result);
    }


        $ecms_article_check_data = $this->model->info($this->request);
        $this->assign('ecms_article_check_data', $ecms_article_check_data);
        return $this->fetch();
    }
		//列表
	public function lists(){
		$ecms_article_check_dataList = $this->model->lists($this->request, 12);	
		$this->assign('ecms_article_check_dataList', $ecms_article_check_dataList);
		return $this->fetch();
	}
}
