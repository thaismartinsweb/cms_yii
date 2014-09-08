<?php

class MenuController extends Controller
{
	public function beforeAction($action)
	{
		$this->layout = 'admin';
		$this->model  = 'Menu';
		$this->post   = isset($_POST['Menu']) ? $_POST['Menu'] : false;
		$this->resolvePostAction($action);
		return parent::beforeAction($action);
	}

	public function actionEdit($id = null)
	{
		if($id){
			$this->breadcrumbs = array('Menu' => array('admin/'.strtolower($this->model)), 'Editar Conteúdo');
			
			$model = $this->getCurrentModel($id);
			$data = array(	'model' => $model,
							'types' => $this->getTypesMenu(),
							'menus' => $this->getMenus());
			
			$this->render('edit', $data);
		} else {
			$this->redirect('index');
		}
	}

	public function actionNew()
	{
		$this->breadcrumbs = array('Menu' => array('admin/'.strtolower($this->model)), 'Adicionar Conteúdo');
		
		$model = $this->getCurrentModel();
		$data = array(	'model' => $model,
						'types' => $this->getTypesMenu(),
						'menus' => $this->getMenus());
		
		$this->render('edit', $data);		
	}

	public function actionIndex()
	{
		$this->breadcrumbs = array('Menu');
		$itens = Menu::model()->findAll(array('order'=>'exibition'));
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