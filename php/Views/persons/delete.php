<?php
    ?>
<form class="form-horizontal" action="?action=delete" method="post" >
  <div class="modal-header">
    <a href="?" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></a>
    <h4 class="modal-title" id="myModalLabel">Delete a person</h4>
  </div>
  	<div class="modal-body">
        
        <? my_print($errors); ?>
        
  		<h5>Are you sure you want to delete <?=$model['name']?>?</h5>
  		
  	</div>
	<div class="modal-footer">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		<a href="?" class="btn btn-default" data-dismiss="modal" >Cancel </a>
		<input type="submit" name="submit" class="btn btn-primary" value="Save changes" />
	</div>
</form>