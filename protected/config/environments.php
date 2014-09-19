<?php 

$url = $_SERVER['HTTP_HOST'];
$url = explode('.', $url);

switch($url[0])
{
	case 'dev':
		return array(
			'adminUrl' 	=> 'http://dev.bcash.com.br/admin/',
			'logoutUrl' => 'http://dev.bcash.com.br/admin/default/logout',
			'url' 		=> 'http://dev.bcash.com.br/',
		);
		break;
	case 'localhost':
		return array(
			'adminUrl' 	=> 'http://localhost/admin/',
			'logoutUrl' => 'http://localhost/admin/default/logout',
			'url' 		=> 'http://localhost/',
		);
		break;
}
