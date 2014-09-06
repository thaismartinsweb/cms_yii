<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Editar Conteúdo</h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo CHtml::beginForm('/admin/config/update', 'post', array('enctype'=>'multipart/form-data')); ?>
					<?php echo CHtml::errorSummary($model); ?>	
				
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'title', array('label' => 'Título do Site')); ?>
						<?php echo CHtml::activeTextField($model,'title', array('class' => 'form-control field-xxlg', 'placeholder' => 'Título')) ?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeLabel($model, 'image', array('label' => 'Logo do Site')); ?>
						<?php echo CHtml::activeFileField($model, 'image'); ?>
						<?php if(isset($model['image'])){ ?>
							<img src="/public/config/<?php echo $model['image']?>" style="margin:10px;max-width:100px;max-height:100px;" title="Logo" alt="Logo" />
						<?php }?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'email', array('label' => 'Email de Contato')); ?>
						<?php echo CHtml::activeTextField($model,'email', array('class' => 'form-control field-xlg', 'placeholder' => 'email@email.com.br')) ?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'contact', array('label' => 'Telefone para Contato')); ?>
						<?php echo CHtml::activeTextField($model,'contact', array('class' => 'form-control field-lg', 'placeholder' => '(11)2222-2222')) ?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'address', array('label' => 'Endereço')); ?>
						<?php echo CHtml::activeTextField($model,'address', array('class' => 'form-control field-xxlg', 'placeholder' => 'Rua Blabla, 123')) ?>
					</div>
					
					<?php echo CHtml::submitButton($model->id ? 'Alterar' : 'Salvar', array('class' => 'btn btn-primary')); ?>
					
				<?php echo CHtml::endForm(); ?>
			</div>
		</div>
	</div>
</div>
