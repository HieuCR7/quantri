

<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Thêm thành viên</h4>
		</div>
		<div class="clearfix"></div>
		<form action="" method="POST">
			<div class="form">							
				<table class="table">
				    <tbody>
				      	<tr>
					        <td><p>Full name<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo form_error('fullName') ?></font></p></td>
					        <td><input type="text"  value="<?php echo set_value('fullName'); ?>" name="fullName" class="form-control" ></td>
					    </tr>
					    <tr>
					        <td><p>Email<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo form_error('email') ?></font></p></td>
					        <td><input type="text" value="<?php echo set_value('email'); ?>" name="email" class="form-control" ></td>
					    </tr>
					    <tr>
					        <td><p>Gender<font><?php echo form_error('gender') ?></font></p></td>
					        <td>
					        	<select name="gender" class="form-control">
									<option value="0" <?php echo set_select('gender','0',( isset($data['gender']) && $data['gender'] == 0) ?  true : false); ?> >Nam</option>
									<option value="1" <?php echo set_select('gender','1',( isset($data['gender']) && $data['gender'] == 1) ?  true : false) ?> >Nữ</option>
								</select>
							</td>
					    </tr>
					    <tr>
					        <td><p>Phone<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo form_error('phone') ?></font></p></td>
					        <td><input type="text" value="<?php echo set_value('phone'); ?>" name="phone" class="form-control" ></td>
					    </tr>
					    <tr>
					        <td><p>Address<font><?php echo form_error('address') ?></font></p></td>
					        <td><input type="text" value="<?php echo set_value('address'); ?>" name="address" class="form-control" ></td>
					    </tr>
					    <tr>
					        <td><p>Status<font><?php echo form_error('status') ?></font></p></td>
					        <td><textarea name="status" class="form-control" id="" cols="30" rows="10" ><?php echo set_value('status'); ?></textarea></td>
					    </tr>							      
					</tbody>
				</table>							
			</div>
			<div class="col-md-3 form-group pull-right">
				 <input type="submit" value="Submit" class="btn btn-primary btn-block">
			</div>
		</form>
	</div>
</div>
