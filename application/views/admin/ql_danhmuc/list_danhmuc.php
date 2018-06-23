
<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Danh mục<br><font style="color: red"><?php echo $this->session->flashdata('msg'); ?></font></h4>
		</div>
		<div class="clearfix"></div>				
				<table class="table table-bordered" style="margin-top:20px;">
					<tbody><tr class="bg-info">
						<td>id</td>
						<td>title</td>
						<td>edit</td>
						<td>delete</td>
					</tr>
					<?php 
						foreach($data as $item){ 
					?>
					<tr>
						<td><?php echo $item['id']; ?></td>
						<td><?php echo $item['titles_dm'] ?></td>
						<td><a href="//localhost/quantri/admin/danhmuc/update?id=<?php echo $item['id'] ?>">edit</a></td>
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
	        Are you sure for delete this category?
	      </div>
	      <div class="modal-footer">
	        <form action="//localhost/quantri/admin/danhmuc/xoa" method="POST">
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
