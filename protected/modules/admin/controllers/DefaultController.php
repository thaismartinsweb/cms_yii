<?php

class DefaultController extends Controller
{
	protected function beforeAction($action){
		$this->layout = 'admin';
		$this->model  = 'Default';
		return parent::beforeAction($action);
 	}
 	
 	public function actionLogin(){
 		$this->layout = 'main';
 		$model = new User();
 		$data['model'] = $model;
 		
 		if(isset($_POST['User'])){
 			
 			$model->attributes = $_POST['User'];
 			
 			if($model->validate() && $model->login())
 			{
 				$this->redirect(Yii::app()->user->returnUrl);
 			} 
 		}
 		
 		$this->render('login', $data);
 	}
	
	public function actionIndex()
	{
		$modules = Module::model()->findAll();
		$contents = Content::model()->findAll();
		$data = array( 'modules' => $modules,
					   'contents' => $contents);
		
		$this->render('index', $data);
	}
	
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else {
				$this->layout = 'admin';
				$this->render('error', $error);
			}
	
		}
	}
	
	public function actionLogout()
	{
		Yii::app()->user->logout(false);
		$this->redirect(Yii::app()->getModule('admin')->user->loginUrl);
	}
	
}