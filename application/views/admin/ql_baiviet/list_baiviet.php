

<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Bài Viết</h4>
			<font style="color: red; font-size: 18px; font-weight: bold;"><?php echo $this->session->flashdata('msg') ?></font>
		</div>
		<div class="clearfix"></div>				
		<table class="table table-bordered" style="margin-top:20px;">
			<tbody>
				<tr class="bg-info">
					<td>id</td>
					<td>tiêu đề</td>
					<td>Danh mục</td>
					<td>Nội dung</td>
					<td>Hình ảnh</td>
					<td>edit</td>
					<td>delete</td>
				</tr>
				<?php foreach($data as $item){ ?>
				<tr>
					<td><?php echo $item['id'] ?></td>
					<td><?php echo $item['titles_bv'] ?></td>
					<td><?php echo $item['dm'] ?></td>
					<td><?php echo $item['nd_bv'] ?></td>
					<td><img src="/quantri/upload/<?php echo $item['images'] ?>" style="width: 100px; height: 100px; border-radius: 50px;"/></td>
					<td><a href="">edit</a></td>
					<td><a href="">delete</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>