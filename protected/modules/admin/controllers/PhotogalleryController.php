<?php

class PhotogalleryController extends Controller
{
	public function beforeAction($action)
	{
		$this->layout = 'admin';
		$this->model  = 'PhotoGallery';
		$this->post   = isset($_POST['PhotoGallery']) ? $_POST['PhotoGallery'] : false;
		$this->resolvePostAction($action);
		return parent::beforeAction($action);
	}

	public function actionEdit($id = null)
	{
		if($id){
			$this->breadcrumbs = array('Galeria de Fotos' => array('admin/'.strtolower($this->model)), 'Editar Conteúdo');

			$data = array('model' => $this->getCurrentModel($id),
					      'photos' => $this->getPhotosByGallery($id) );
			
			$data['view_photos'] = $this->renderPartial('photos', $data, true);
			$this->render('edit', $data);
			
		} else {
			$this->redirect('index');
		}
	}
	
	public function actionEditImage($id = null)
	{
		if($id){
			$this->model = 'Photo';
			$this->post = isset($_POST['Photo']) ? $_POST['Photo'] : false;
			$model = $this->setPost();

			if($model->save()) {
				Yii::app()->user->setFlash('save','Conteúdo salvo com sucesso!');
				$this->redirect('/admin/photogallery/edit/' . $model->photo_gallery_id);
			} else {
				Yii::app()->user->setFlash('error', $model);
			}
		} else {
			$this->redirect('index');
		}
	}

	public function actionNew()
	{
		$this->breadcrumbs = array('Galeria de Fotos' => array('admin/'.strtolower($this->model)), 'Adicionar Conteúdo');
		
		$model = $this->getCurrentModel();
		$data = array('model' => $model);
		
		$this->render('edit', $data);		
	}

	public function actionIndex()
	{
		$this->breadcrumbs = array('Galeria de Fotos');
		$itens = PhotoGallery::model()->findAll(array('order'=>'exibition'));
		$data = array('itens' => $itens);
		$this->render('index', $data);
	}
	
	public function actionRemove($id = null)
	{
		if($id)
		{
			$model = $this->getCurrentModel($id);
			$this->deleteModel($model);
		}
	
		$this->redirect(array('admin/'.strtolower($this->model).'/index'));
	}
	
}