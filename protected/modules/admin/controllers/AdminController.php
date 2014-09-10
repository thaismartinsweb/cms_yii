<?php

class AdminController extends Controller
{
	protected function beforeAction($action){
		die('achou');
		return parent::beforeAction($action);
 	}
}