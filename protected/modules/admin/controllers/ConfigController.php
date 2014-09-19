<?php

class ConfigController extends Controller
{
	
	public function beforeAction($action){
		$this->post   = isset($_POST['Config']) ? $_POST['Config'] : false;
		return parent::beforeAction($action);
	}
	
	public function actionIndex()
	{
		$this->render('index', array('model' => $this->getCurrentModel(1)));
	}
	
}