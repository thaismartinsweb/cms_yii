<?php

// Site
$data['/'] = 'home/index';
$data['<view:about>'] =  array('site/page', 'defaultParams' => array('view' => 'about'));
$data['<controller:\w+>/<id:\d+>'] = '<controller>/view';
$data['<controller:\w+>/<action:\w+>'] = '<controller>/<action>';
$data['<controller:\w+>/<action:\w+>/<id:\d+>'] = '<controller>/<action>';
$data['<module:\w+>/<controller:\w+>/<action:\w+>'] = '<module>/<controller>/<action>';
$data['<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>'] = '<module>/<controller>/<action>';

return $data;