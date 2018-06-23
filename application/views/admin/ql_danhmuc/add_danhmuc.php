<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Thêm danh mục<br><font style="color: red"><?php echo $this->session->flashdata('msg'); ?></font></h4>
		</div>
		<div class="clearfix"></div>
		<form action="" method="POST">
			<div class="form">							
				<table class="table">
			      <tbody><tr>
			        <td><p>tiêu đề danh mục<font style="color: red"><?php echo form_error('titles_dm'); ?></font></p>
			        </td>
			        <td><input type="text" name="titles_dm" class="form-control"></td>
			      </tr>
			    					      
			  </tbody></table>							
			</div>
			<div class="col-md-3 form-group pull-right">
				 <input type="submit" value="Submit" class="btn btn-primary btn-block">
			</div>
		</form>
	</div>
</div>
