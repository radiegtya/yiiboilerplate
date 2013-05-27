<?php
$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Profile','url'=>array('index')),
	array('label'=>'Create Profile','url'=>array('create')),
	array('label'=>'Update Profile','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Profile','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profile','url'=>array('admin')),
);
?>

<h2>View Profile #<?php echo $model->id; ?></h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'image',
		'email',
		'cursed',
	),
)); ?>
