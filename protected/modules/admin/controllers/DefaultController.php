<?php

class DefaultController extends Controller
{
	protected function beforeAction($action){
		$this->layout = 'admin';
		$this->model  = 'Admin';
		return parent::beforeAction($action);
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
				$this->layout='admin';
				$this->render('error', $error);
			}
	
		}
	
	}
	
}