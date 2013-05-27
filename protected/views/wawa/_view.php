<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wawe')); ?>:</b>
	<?php echo CHtml::encode($data->wawe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wawi')); ?>:</b>
	<?php echo CHtml::encode($data->wawi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('haha')); ?>:</b>
	<?php echo CHtml::encode($data->haha); ?>
	<br />


</div>