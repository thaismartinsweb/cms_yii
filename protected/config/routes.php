<?php

// Site
$data['/'] = 'home/index';
$data['<view:about>'] =  array('site/page', 'defaultParams' => array('view' => 'about'));
$data['<controller:\w+>/<id:\d+>'] = '<controller>/view';
$data['<controller:\w+>/<action:\w+>'] = '<controller>/<action>';
$data['<controller:\w+>/<action:\w+>/<id:\d+>'] = '<controller>/<action>';

return $data;