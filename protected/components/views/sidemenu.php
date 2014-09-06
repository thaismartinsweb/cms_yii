<?php if($modules){ ?>
	<?php foreach($modules as $module){ ?>
		<li>
			<a href="<?php echo Yii::app()->params['adminUrl']?><?php echo $module['controller']?>">
				<i class="fa fa-<?php echo $module['icon']?> fa-fw fa-3x"></i> <?php echo $module['title']?>
			</a>
		</li>
	<?php } ?>
<?php } ?>