<?php

class SideMenuWidget extends CWidget
{
    public function run()
    {
    	$modules = Module::model()->findAll();
		$data = array('modules' => $modules);
// 		$listdata=CHtml::listData($model,"category_id","name");

        $this->render('sidemenu', $data);
    }
}