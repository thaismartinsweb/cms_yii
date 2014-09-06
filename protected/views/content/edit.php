<?php
$this->breadcrumbs = array(
	'Conteúdo' => array('admin/content'),
	 $model->id ? 'Editar Conteúdo' : 'Adicionar Conteúdo',
);
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><?php echo $model->id ? 'Editar Conteúdo' : 'Adicionar Conteúdo'?></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo CHtml::beginForm('', 'post', array('enctype'=>'multipart/form-data')); ?>
					
					<?php echo CHtml::activeHiddenField($model,'id') ?>
					
					<?php echo CHtml::errorSummary($model); ?>	
				
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'title', array('label' => 'Título do Menu')); ?>
						<?php echo CHtml::activeTextField($model,'title', array('class' => 'form-control field-xxlg', 'placeholder' => 'Título')) ?>
					</div>
					
					<?php if($menus){ ?>
						<div class="form-group">
							<?php echo CHtml::activeLabel($model,'master_id', array('label' => 'Menu Pai')); ?>
							<?php echo CHtml::activeDropDownList($model,'master_id', $menus, array('class' => 'form-control  field-md', 'empty' => '')) ?>
						</div>
					<?php }?>
					
					<?php if($types){ ?>
						<div class="form-group">
							<?php echo CHtml::activeLabel($model,'type_menu_id', array('label' => 'Tipo de Menu')); ?>
							<?php echo CHtml::activeDropDownList($model,'type_menu_id', $types, array('class' => 'form-control field-sm')) ?>
						</div>
					<?php }?>

					<div class="form-group">
						<?php echo CHtml::activeLabel($model, 'image', array('label' => 'Imagem do Menu')); ?>
						<?php echo CHtml::activeFileField($model, 'image'); ?>
						<?php if(isset($model['image'])){ ?>
							<img src="/public/menu/<?php echo $model['image']?>" style="margin:10px;max-width:100px;max-height:100px;" title="Logo" alt="Logo" />
						<?php }?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeLabel($model,'description', array('label' => 'Descrição do Menu')); ?>
						<?php echo CHtml::activeTextArea($model,'description', array('class' => 'form-control field-xxlg', 'placeholder' => 'Breve descrição sobre este menu')) ?>
					</div>
					
					<div class="form-group">
						<?php echo CHtml::activeCheckBox($model,'special') ?>
						<?php echo CHtml::activeLabel($model,'special', array('label' => 'Exibir menu')); ?>
						<br />
						<?php echo CHtml::activeCheckBox($model,'exibition') ?>
						<?php echo CHtml::activeLabel($model,'exibition', array('label' => 'Exibir menu na página inicial')); ?>
					</div>
			
					<?php echo CHtml::submitButton($model->id ? 'Alterar' : 'Salvar', array('class' => 'btn btn-primary')); ?>
					
				<?php echo CHtml::endForm(); ?>
			</div>
		</div>
	</div>
</div>