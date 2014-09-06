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
                        
                        <?php $this->widget('SideMenuWidget'); ?>
                       
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
					
						<div style="margin:25px 0 15px 0;">
							<?php if(isset($this->breadcrumbs)):?>
								<?php $this->widget('zii.widgets.CBreadcrumbs', array(
										'links'=>$this->breadcrumbs,
										'homeLink' => CHtml::link('Home', Yii::app()->homeUrl . 'admin'),)); ?>
							<?php endif?>
						</div>
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