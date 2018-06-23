



<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Sửa thành viên</h4>
		</div>
		<div class="clearfix"></div>
		<form action="" method="POST">
			<div class="form">							
				<table class="table">
				    <tbody>
				      	<tr>
				      		<input type="hidden" name="id" value="<?php echo $data->id ?>">
					        <td><p>Full name<font style="color: red; font-size: 18px; font-weight: bold"><?php echo form_error('fullName') ?></font></p></td>
					        <td><input type="text" name="fullName" value="<?php echo $data->fullName ?>" class="form-control" ></td>
					    </tr>
					    <tr>
					        <td><p>Email<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo form_error('email') ?></font></p></td>
					        <td><input type="text" name="email" value="<?php echo $data->email ?>" class="form-control" ></td>
					    </tr>
					    <tr>
					        <td><p>Gender<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo form_error('gender') ?></font></p></td>
					        <td>
					        	<select name="gender" value="<?php echo $data->gender ?>" class="form-control">
									<option value="0">Nam</option>
									<option value="1">Nữ</option>
								</select>
							</td>
					    </tr>
					    <tr>
					        <td><p>Phone<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo form_error('phone') ?></font></p></td>
					        <td><input type="text" name="phone" value="<?php echo $data->phone ?>" class="form-control" ></td>
					    </tr>
					    <tr>
					        <td><p>Address<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo form_error('address') ?></font></p></td>
					        <td><input type="text" name="address" value="<?php echo $data->address ?>" class="form-control" ></td>
					    </tr>
					    <tr>
					        <td><p>Status<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo form_error('status') ?></font></p></td>
					        <td>
					        	<textarea name="status" class="form-control" id="" cols="30" rows="10" ><?php echo $data->status ?></textarea>
					        </td>
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
