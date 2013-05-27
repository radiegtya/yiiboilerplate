
    <div id='wawa-create-modal' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Create Ajaxtest</h3>
    </div>
    
    <div class="modal-body">
    
    <div class="form">

   <?php
   
         $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'wawa-create-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'method'=>'post',
        'action'=>array("wawa/create"),
	'type'=>'horizontal',
	'htmlOptions'=>array(
	                        'onsubmit'=>"return false;",/* Disable normal form submit */
                            ),
          'clientOptions'=>array(
                    'validateOnType'=>true,
                    'validateOnSubmit'=>true,
                    'afterValidate'=>'js:function(form, data, hasError) {
                                     if (!hasError)
                                        {    
                                          create();
                                        }
                                     }'
                                    

            ),                  
  
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">
			
							  <div class="row">
					  <?php echo $form->labelEx($model,'name'); ?>
					  <?php echo $form->textArea($model,'name',array('rows'=>6, 'cols'=>50)); ?>
					  <?php echo $form->error($model,'name'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'wawe'); ?>
					  <?php echo $form->textArea($model,'wawe',array('rows'=>6, 'cols'=>50)); ?>
					  <?php echo $form->error($model,'wawe'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'wawi'); ?>
					  <?php echo $form->textArea($model,'wawi',array('rows'=>6, 'cols'=>50)); ?>
					  <?php echo $form->error($model,'wawi'); ?>
				  </div>

			  				  <div class="row">
					  <?php echo $form->labelEx($model,'haha'); ?>
					  <?php echo $form->textArea($model,'haha',array('rows'=>6, 'cols'=>50)); ?>
					  <?php echo $form->error($model,'haha'); ?>
				  </div>

			  
                        </div>   
  </div>

  </div><!--end modal body-->
  
  <div class="modal-footer">
	<div class="form-actions">

		<?php
		
		 $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white', 
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
			)
			
		);
		
		?>
              <?php
 $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Reset',
		)); ?>
	</div> 
   </div><!--end modal footer-->	
</fieldset>

<?php
 $this->endWidget(); ?>

</div>

</div><!--end modal-->

<script type="text/javascript">
function create()
 {
 
   var data=$("#wawa-create-form").serialize();
     


  $.ajax({
   type: 'POST',
    url: '<?php
 echo Yii::app()->createAbsoluteUrl("wawa/create"); ?>',
   data:data,
success:function(data){
                //alert("succes:"+data); 
                if(data!="false")
                 {
                  $('#wawa-create-modal').modal('hide');
                  renderView(data);
                    $.fn.yiiGridView.update('wawa-grid', {
                     
                         });
                   
                 }
                 
              },
   error: function(data) { // if error occured
         alert("Error occured.please try again");
         alert(data);
    },

  dataType:'html'
  });

}

function renderCreateForm()
{
  $('#wawa-create-form').each (function(){
  this.reset();
   });

  
  $('#wawa-view-modal').modal('hide');
  
  $('#wawa-create-modal').modal({
   show:true,
   
  });
}

</script>
