<?php

class MenuController extends Controller
{
	public function beforeAction($action)
	{
		$this->layout = 'admin';
		$this->breadcrumbs = array('Menu');
		return parent::beforeAction($action);
	}

	public function actionEdit($id = null)
	{
		
		if(isset($_POST['Menu']))
		{
			$model = $this->savePost($_POST['Menu']);
		}
		else {
			$model = $this->returnCurrentModel($id);
		}
		
		$types = $this->getTypesMenu();
		$menus = $this->getMenus();
		
		$data = array('model' => $model, 'types' => $types, 'menus' => $menus);
	
		$this->render('edit', $data);
	}
	
	private function savePost($post){
		
		if($post)
		{
			$model = $this->returnCurrentModel($post['id'], true);
			$model->attributes = $post;
			$image = CUploadedFile::getInstance($model, 'image');
			
			if($image)
			{
				$model->image = $image;
				$model->image->saveAs('/var/www/html/public/menu/' . $model->image->name);
			}
			
			$model->save();
			var_dump($model->save());
			return $model;
		}
	}
	
	public function actionNew()
	{
		
		if(isset($_POST['Menu']))
		{
			$model = $this->savePost($_POST['Menu']);
			$this->redirect('edit/' . $model->id);
		}
		
		$model = $this->returnCurrentModel();
		$types = $this->getTypesMenu();
		$menus = $this->getMenus();
			
		$data = array('model' => $model, 'types' => $types, 'menus' => $menus);
			
		$this->render('edit', $data);
		
	}

	public function actionIndex()
	{
		$itens = Menu::model()->findAll();
		$data = array('itens' => $itens);
		$this->render('index', $data);
	}
	
	private function returnCurrentModel($id = null, $save = false)
	{
		$item = false;
	
		if($id)
		{
			$item = Menu::model()->findAllByPk($id);
		}
	
		if($item){
			return $item[0];
		} else {
				
			if($save)
			{
				return new Menu;
			}
				
			return Menu::model();
		}
	}
	
	private function getTypesMenu(){
		
		$itens = TypeMenu::model()->findAll();
		
		if($itens){
			return CHtml::listData($itens, 'id', 'title');
		}
		
		return false;
	}
	
	private function getMenus(){
	
		$itens = Menu::model()->findAll();
	
		if($itens){
			return CHtml::listData($itens, 'id', 'title');
		}
	
		return false;
	}
}