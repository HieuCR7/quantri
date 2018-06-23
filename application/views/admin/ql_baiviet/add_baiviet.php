
<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Thêm bài viết</h4>
		</div>
		<div class="clearfix"></div>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form">							
				<table class="table">
			      <tbody><tr>
			        <td><p>tiêu đề danh mục<font><?php echo form_error('titles_bv') ?></font></p></td>
			        <td><input type="text" name="titles_bv" class="form-control" required=""></td>
			      </tr>
			      <tr>
			        <td><p>nội dung bài viết<font><?php echo form_error('nd_bv') ?></font></p></td>
			        <td><textarea name="nd_bv" class="form-control" id="" cols="30" rows="10" required=""></textarea></td>
			      </tr>
			      <tr>
			        <td><p>hình ảnh bài viết<font><?php echo form_error('images') ?></font></p></td>
			        <td><input type="file" name="images" class="form-control" required=""></td>
			      </tr>
			      <tr>
			        <td><p>Lựa chọn danh mục cha<font><?php echo form_error('dm') ?></font></p></td>
			        <td>
			        	<select name="dm" class="form-control">
							<option>Lựa chọn danh mục</option>
							<option>Thể thao</option>
							<option>Văn hóa</option>
							<option>Du lịch</option>
							<option>Ẩm thực</option>
							<option>Đường phố</option>
							<option>Nghệ thuật</option>
						</select>
					</td>
			      </tr>							      
			  </tbody></table>							
			</div>
			<div class="col-md-3 form-group pull-right">
				 <input type="submit" value="Submit" class="btn btn-primary btn-block">
			</div>
		</form>
	</div>
</div>