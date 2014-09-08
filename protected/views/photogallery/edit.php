<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><?php echo isset($model->id) ? 'Editar Conteúdo' : 'Adicionar Conteúdo'?></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
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
			
			<?php if(isset($photos) && is_array($photos)){ ?>
				<div class="panel-body">
					<?php foreach($photos as $photo){ ?>
						
						<div class="form-group">
							<div class="photos">
								<img src="/public/photogallery/<?php echo $model['id']?>/<?php echo $photo['image']?>" title="<?php echo $photo['title']?>" alt="<?php echo $photo['title']?>" />
								<p>Título</p>
								<button data-toggle="modal" data-target="#model_<?php echo $photo['id']?>" class="btn btn-primary btn-circle"><i class="fa fa-edit"></i></button>
								<a href="#" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></a>
							</div>
							
							<div class="modal fade" id="model_<?php echo $photo['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
								
									<?php echo CHtml::beginForm('/admin/photogallery/editImage/'.$photo['id'], 'post', array('enctype'=>'multipart/form-data')); ?>
									
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Editar detalhes da Imagem</h4>
										</div>
										<div class="modal-body">
										
											<div class="form-group">
												<?php echo CHtml::activeLabel($photo,'title', array('label' => 'Título')); ?>
												<?php echo CHtml::activeTextField($photo,'title', array('class' => 'form-control field-xxlg', 'placeholder' => 'Título')) ?>
											</div>
											
											<div class="form-group">
												<?php echo CHtml::activeLabel($photo,'description', array('label' => 'Descrição da Foto')); ?>
												<?php echo CHtml::activeTextArea($photo,'description', array('class' => 'form-control field-xxlg', 'placeholder' => 'Breve descrição sobre esta galeria')) ?>
											</div>
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
											<?php echo CHtml::submitButton('Alterar', array('class' => 'btn btn-primary')); ?>
										</div>
									</div>
									
									<?php echo CHtml::endForm(); ?>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
				<div style="clear:both"></div>
		</div>
	</div>
</div>