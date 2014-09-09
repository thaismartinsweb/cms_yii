<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><?php echo isset($model->id) ? 'Editar Conteúdo' : 'Adicionar Conteúdo'?></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" style="font-size:16px">Galeria de Fotos</div>
			<div class="panel-body">
				<?php echo CHtml::beginForm('', 'post', array('enctype'=>'multipart/form-data')); ?>
					
					<?php echo CHtml::activeHiddenField($model,'id') ?>
					
					<?php echo CHtml::showErrorMessage($model); ?>
					<?php echo CHtml::showSuccessMessage();?>
				
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'title', array('label' => 'Título da Galeria')); ?>
						<?php echo CHtml::activeTextField($model,'title', array('class' => 'form-control field-xxlg', 'placeholder' => 'Título')) ?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeLabel($model, 'image', array('label' => 'Imagem de Capa da Galeria')); ?>
						<?php echo CHtml::activeFileField($model, 'image'); ?>
						<?php if(isset($model['image'])){ ?>
							<a href="/public/<?php echo strtolower($this->model) ?>/<?php echo $model['image']?>" data-lightbox="<?php echo $model['image']?>">
								<img src="/public/<?php echo strtolower($this->model) ?>/<?php echo $model['image']?>" style="margin:10px;max-width:100px;max-height:100px;" title="Logo" alt="Logo" />
							</a>
						<?php }?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'description', array('label' => 'Descrição da Galeria')); ?>
						<?php echo CHtml::activeTextArea($model,'description', array('class' => 'form-control field-xxlg', 'placeholder' => 'Breve descrição sobre esta galeria')) ?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'exibition', array('label' => 'Ordem de Exibição')); ?>
						<?php echo CHtml::activeTextField($model,'exibition', array('class' => 'form-control field-sm', 'placeholder' => '1')) ?>
					</div>
					
					<?php if(isset($model['id'])){ ?>
						<div class="form-group">
							<?php echo CHtml::activeLabel($model, 'photos', array('label' => 'Imagens da Galeria')); ?>
							<?php $this->widget('CMultiFileUpload', array(
								'model' => $model,
								'attribute' => 'photos',
								'accept'=>'jpg|gif|png',
								'htmlOptions' => array('multiple' => 'multiple'),
								'duplicate' => 'Já tem um arquivo com esse nome. Por favor, renomeie.',
								'denied'=>'Tipo de imagem não é permitido. Por favor, insira um arquivo .png, .jpg ou .png.',
								'max' => 20, // max 10 files
								));?>
						</div>
					<?php } ?>

					<?php echo CHtml::submitButton(isset($model->id) ? 'Alterar' : 'Salvar', array('class' => 'btn btn-primary')); ?>
					
				<?php echo CHtml::endForm(); ?>
			</div>
		</div>
	</div>
</div>

<?php
	if(isset($photos) && is_array($photos)){
		echo $view_photos;
	} 
?>