<?php
// $this->widget('zii.widgets.CMenu',array(
// 			'items'=>array(
// 				array('label'=>'Home', 'url'=>array('/site/index')),
// 				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
// 				array('label'=>'Contact', 'url'=>array('/site/contact')),
// 				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
// 				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
// 			),
// ));
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="description" content="CMS | Gerenciador de Conteúdo By Thais Martins" />
	<link rel="author" href="http://www.tmartins.com" />
	
	<!-- Core CSS - Include with every page -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" />
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" />
	
	<!-- Page-Level Plugin CSS - Dashboard -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/timeline/timeline.css" rel="stylesheet" />
	
	<!-- Mint Admin CSS - Include with every page -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/mint-admin.css" rel="stylesheet" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			
			<!-- LOGO -->
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img class="brand-logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="" /><?php echo CHtml::encode(Yii::app()->params['pageName']); ?></a>
			</div>
			<!-- / LOGO -->
			
			<!-- / LOGOUT -->
			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-sign-out  fa-2x fa-fw"></i>
					</a>
				</li>
			</ul>
           <!-- / LOGOUT -->

            </nav>
            <!-- /.navbar-static-top -->

			<nav class="navbar-default navbar-static-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="side-menu">
						<li>
						<div class="user-info-wrapper">	
							<div class="user-info-profile-image">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/profile-1.jpg" alt="" width="65" height="65" />
							</div>
							<div class="user-info">
								<div class="user-welcome">Bem vindo</div>
								<div class="username">John <strong>Doe</strong></div>
							</div>
						</div>
						</li>
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Procurar por" />
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw fa-3x"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw fa-3x"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-th fa-fw fa-3x"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw fa-3x"></i> Forms</a>
                        </li>
                        <li>
                            <a href="fullcalendar.html"><i class="fa fa-table fa-fw fa-3x"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw fa-3x"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw fa-3x"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                                <li>
                                    <a href="timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="404.html">404 Error Page</a>
                                </li>
                                <li>
                                    <a href="500.html">500 Error Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </nav>
            <!-- /.navbar-static-side -->

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
					<h3 class="page-header text-asbestos"><?php echo CHtml::encode(Yii::app()->name); ?></h3>
					
					<?php if(isset($this->breadcrumbs)):?>
						<?php $this->widget('zii.widgets.CBreadcrumbs', array(
								'links'=>$this->breadcrumbs, )); ?>
					<?php endif?>			
					
					</div>
				</div>
				
				<?php echo $content; ?>
				
			</div>
  
	<div id="footer">2014 - <?php echo date('Y'); ?> | by <a href="#">Thais Martins</a></div>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/morris/raphael-2.1.0.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/morris/morris.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/mint-admin.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/demo/dashboard-demo.js"></script>

</body>
</html>