<?php

class ContentController extends Controller
{
	public function beforeAction($action)
	{
		$this->layout = 'admin';
		$this->model  = 'Content';
		$this->post   = isset($_POST['Content']) ? $_POST['Content'] : false;
		$this->resolvePostAction($action);
		return parent::beforeAction($action);
	}

	public function actionEdit($id = null)
	{
		if($id){
			$this->breadcrumbs = array('Conteúdo' => array('admin/'.strtolower($this->model)), 'Editar Conteúdo');
			
			$model = $this->getCurrentModel($id);		
			$data = array(	'model' => $model,
							'types' => $this->getTypesPage(),
							'menus' => $this->getMenus());
			
			$this->render('edit', $data);
		} else {
			$this->redirect('index');
		}
	}
	
	public function actionNew()
	{
		$this->breadcrumbs = array('Conteúdo' => array('admin/'.strtolower($this->model)), 'Adicionar Conteúdo');
		
		$model = $this->getCurrentModel();
		$data = array(	'model' => $model,
						'types' => $this->getTypesPage(),
						'menus' => $this->getMenus());
		
		$this->render('edit', $data);		
	}

	public function actionIndex()
	{
		$this->breadcrumbs = array('Conteúdo');
		$itens = Content::model()->findAll(array('order'=>'date_create DESC'));
		$data = array('itens' => $itens);
		$this->render('index', $data);
	}
	
	public function actionRemove($id = null)
	{
		if($id)
		{
			$this->breadcrumbs = array('Conteúdo');
			$model = $this->getCurrentModel($id);
			$this->deleteModel($model);	
		}
		
		$this->redirect(array('admin/'.strtolower($this->model).'/index'));
	}
	
}