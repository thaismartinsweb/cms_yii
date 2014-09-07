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
			$this->breadcrumbs = array('Menu' => array('admin/menu'), 'Editar Conteúdo');
			
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
		$this->breadcrumbs = array('Menu' => array('admin/menu'), 'Adicionar Conteúdo');
		
		$model = $this->getCurrentModel();
		$data = array(	'model' => $model,
						'types' => $this->getTypesMenu(),
						'menus' => $this->getMenus());
		
		$this->render('edit', $data);		
	}

	public function actionIndex()
	{
		$this->breadcrumbs = array('Menu');
		$itens = Menu::model()->findAll();
		$data = array('itens' => $itens);
		$this->render('index', $data);
	}
	
}