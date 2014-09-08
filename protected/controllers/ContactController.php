<?php

class ContactController extends Controller
{
	public function beforeAction($action)
	{
		$this->layout = 'admin';
		$this->model  = 'Contact';
		return parent::beforeAction($action);
	}

	public function actionView($id = null)
	{
		if($id){
			$this->breadcrumbs = array('Contato' => array('admin/'.strtolower($this->model)), 'Visualizar Conteúdo');
			
			$model = $this->getCurrentModel($id);
			$data = array(	'model' => $model,
							'types' => $this->getTypesMenu(),
							'menus' => $this->getMenus());
			
			$this->render('view', $data);
		} else {
			$this->redirect('index');
		}
	}

	public function actionIndex()
	{
		$this->breadcrumbs = array('Menu');
		$itens = Contact::model()->findAll(array('order'=>'date_create DESC'));
		$data = array('itens' => $itens);
		$this->render('index', $data);
	}
	
	public function actionRemove($id = null)
	{
		if($id)
		{
			$model = $this->getCurrentModel($id);
			$this->deleteModel($model);
		}
	
		$this->redirect(array('admin/'.strtolower($this->model).'/index'));
	}
	
}