<?php

class ConfigController extends Controller
{
	
	protected function beforeAction($action){
		$this->layout = 'admin';
		$this->model  = 'Config';
		$this->post   = isset($_POST['Config']) ? $_POST['Config'] : false;
		$this->resolvePostAction($action);
		return parent::beforeAction($action);
	}
	
	public function actionIndex()
	{
		$this->breadcrumbs = array('Dados do Site');
		$model = $this->getCurrentModel(1);
		$data = array('model' => $model);
		$this->render('index', $data);
	}
	
}