

<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Sửa danh mục<?php echo $this->session->flashdata('mess'); ?></h4>
		</div>
		<div class="clearfix"></div>
		<form method="post">
			<div class="form">							
				<table class="table">
			      <tbody><tr>
			        <td><p>tiêu đề danh mục<?php echo form_error('titles_dm'); ?></p>
			        </td><td><input type="text" name="titles_dm" value="<?php echo $data->titles_dm ?>" class="form-control" required=""></td>
			      </tr>
			    					      
			  </tbody></table>							
			</div>
			<div class="col-md-3 form-group pull-right">
				 <input type="submit" value="submit" class="btn btn-primary btn-block">
			</div>
		</form>
	</div>
</div>
