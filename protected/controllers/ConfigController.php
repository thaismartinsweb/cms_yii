<?php

class ConfigController extends Controller
{
	
	protected function beforeAction($action){
		$this->layout = 'admin';
		$this->breadcrumbs = array('Dados do Site');
		return parent::beforeAction($action);
	}
	
	public function actionIndex()
	{
		$model = $this->returnCurrentModel();
		$data = array('model' => $model);
		
		$this->render('index', $data);
	}
	
	public function actionUpdate()
	{
		
		if(isset($_POST['Config']))
		{
			$model = $this->returnCurrentModel(true);
			
			$model->attributes = $_POST['Config'];
			$model->image = CUploadedFile::getInstance($model, 'image');
			if($model->save())
			{
				
				$model->image->saveAs('/var/www/html/public/config/' . $model->image->name);
				$this->redirect(array('index'));
			} else {
				var_dump($model->getErrors());
				$this->render('index', array('model' => $model));
			}
		} 		
	}
	
	private function returnCurrentModel($save = false)
	{
		$config = Config::model()->findAllByPk(1);

		if($config){
			
			return $config[0];
		} else {
			
			if($save)
			{
				return new Config;
			} 
			
			return Config::model();
		}

	}
}