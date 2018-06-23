
<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Danh sách thành viên</h4>
			<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo $this->session->flashdata('msg') ?></font>
		</div>
		<div class="clearfix"></div>				
		<table class="table table-bordered" style="margin-top:20px;">
			<tbody>
				<tr class="bg-info">
					<td>id</td>
					<td>Full name</td>
					<td>Email</td>
					<td>gender</td>
					<td>Phone</td>
					<td>Address</td>
					<td>status</td>
					<td>edit</td>
					<td>delete</td>
				</tr>
				<?php
					foreach($data as $item){

				?>
				<tr>
					<td><?php echo $item['id'] ?></td>
					<td><?php echo $item['fullName'] ?></td>
					<td><?php echo $item['email'] ?></td>
					<td><?php echo $item['gender'] ?></td>
					<td><?php echo $item['phone'] ?></td>
					<td><?php echo $item['address'] ?></td>
					<td><?php echo $item['status'] ?></td>
					<td><a href="//localhost/quantri/admin/thanhvien/edit?id=<?php echo $item['id'] ?>">edit</a></td>
					<td><a class="delete" data-id="<?php echo $item['id'] ?>" href="#">delete</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="deletePopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Delete Member </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Are you sure for delete this member?
	      </div>
	      <div class="modal-footer">
	        <form action="//localhost/quantri/admin/thanhvien/xoa" method="POST">
	            <input type="hidden" name="id" class="id_delete">
	            <button type="submit" class="btn btn-primary">Delete</button>
	        </form>
	      </div>
	    </div>
  </div>
</div>

<script type="text/javascript">
	$('.delete').click(function(){
		var id = $(this).attr('data-id');
		$('.id_delete').val(id);
		$('#deletePopup').modal('show');
	});
</script>






