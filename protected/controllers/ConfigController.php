<?php

class ConfigController extends Controller
{
	
	protected function beforeAction($action){
		$this->layout = 'admin';
		return parent::beforeAction($action);
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}
}