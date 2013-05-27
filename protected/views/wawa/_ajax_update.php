<div id="wawa-update-modal-container" >

</div>

<script type="text/javascript">
function update()
 {
  
   var data=$("#wawa-update-form").serialize();

  $.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("wawa/update"); ?>',
   data:data,
success:function(data){
                if(data!="false")
                 {
                  $('#wawa-update-modal').modal('hide');
                  renderView(data);
                  $.fn.yiiGridView.update('wawa-grid', {
                     
                         });
                 }
                 
              },
   error: function(data) { // if error occured
          alert(JSON.stringify(data)); 

    },

  dataType:'html'
  });

}

function renderUpdateForm(id)
{
 
   $('#wawa-view-modal').modal('hide');
 var data="id="+id;

  $.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("wawa/update"); ?>',
   data:data,
success:function(data){
                 // alert("succes:"+data); 
                 $('#wawa-update-modal-container').html(data); 
                 $('#wawa-update-modal').modal('show');
              },
   error: function(data) { // if error occured
           alert(JSON.stringify(data)); 
         alert("Error occured.please try again");
    },

  dataType:'html'
  });

}
</script>
