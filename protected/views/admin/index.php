<div class="row">
	<?php if($modules){ ?>
		<?php foreach($modules as $module){ ?>
			<div class="col-xs-3 col-md-3">
				<div class="panel panel-primary text-center panel-eyecandy">
					<div class="panel-body theme-color">
						<i class="fa fa-<?php echo $module['icon']?> fa-3x"></i>
					</div>
					<div class="panel-footer">
						<span class="panel-eyecandy-title">
							<a href="<?php echo Yii::app()->params['adminUrl']?><?php echo $module['controller']?>"><?php echo $module['title']?></a>
						</span>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php } ?>
</div>


<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">Últimos Conteúdos</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>