<?php

class HelpController extends Controller
{
	public function beforeAction($action)
	{
		$this->layout = 'admin';
		$this->model  = 'Help';
		return parent::beforeAction($action);
	}

	public function actionView($id = null)
	{
		if($id){
			$this->breadcrumbs = array('Contato' => array('admin/'.strtolower($this->model)), 'Visualizar Conteúdo');
			
			$model = Help::model()->findAll(array('module_id' => $id));
			$data = array('model' => $model);
			
			$this->render('view', $data);
		} else {
			$this->redirect('index');
		}
	}

	public function actionIndex()
	{
		$this->breadcrumbs = array('Menu');
		$itens = Module::model()->findAll();
		$data = array('itens' => $itens);
		$this->render('index', $data);
	}
	
}