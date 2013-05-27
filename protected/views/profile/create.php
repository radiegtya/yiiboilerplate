<?php
$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Profile','url'=>array('index')),
	array('label'=>'Manage Profile','url'=>array('admin')),
);
?>

<h2>Create Profile</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>