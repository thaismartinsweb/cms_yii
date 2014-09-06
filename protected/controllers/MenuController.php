<?php

class MenuController extends Controller
{
	public function beforeAction()
	{
		$this->layout = 'admin';
		$this->breadcrumbs = array('Menu');
		return parent::beforeAction($action);
	}

	public function actionEdit()
	{
		$model = $this->returnCurrentModel();
		$data = array('model' => $model);
		
		$this->render('edit', $data);
	}

	public function actionIndex()
	{
		$model = $this->returnCurrentModel();
		$data = array('model' => $model);
		
		$this->render('index', $data);
	}

	public function returnCurrentModel($id = null, $save = false)
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

	public function update()
	{
	
		if(isset($_POST['Menu']))
		{
			$model = $this->returnCurrentModel(true);
			
			$model->attributes = $_POST['Menu'];
			$model->image = CUploadedFile::getInstance($model, 'image');
			if($model->save())
			{
				
				$model->image->saveAs('/var/www/html/public/menu/' . $model->image->name);
				$this->redirect(array('index'));
			} else {
				var_dump($model->getErrors());
				$this->render('index', array('model' => $model));
			}
		} 	
	}
}