<?php
$data['/'] = 'site/index';
$data['<view:about>'] =  array('site/page', 'defaultParams' => array('view' => 'about'));
$data['<controller:\w+>/<id:\d+>'] = '<controller>/view';
$data['<controller:\w+>/<action:\w+>/<id:\d+>'] = '<controller>/<action>';
$data['<view:admin>/<controller:\w+>'] = '<controller>/index';
$data['<view:admin>/<controller:\w+>/<action:\w+>'] = '<controller>/<action>';
$data['<view:admin>/<controller:\w+>/<action:\w+>/<id:\d+>'] = '<controller>/<action>';

return $data;