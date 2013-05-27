<?php
$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profile','url'=>array('index')),
	array('label'=>'Create Profile','url'=>array('create')),
	array('label'=>'View Profile','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Profile','url'=>array('admin')),
);
?>

<h2>Update Profile <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>