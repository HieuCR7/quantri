
<html>
	<head>
		<?php $this->load->view('admin/head') ?>
	</head>
	<body>
		<div id="warper">
			<div id="top">
				<?php $this->load->view('admin/top') ?>
			</div>
			<div class="col-md-2 left">
				<?php $this->load->view('admin/menu') ?>
			</div>
			<div class="right">
				<?php $this->load->view($temp) ?>
			</div>
		</div>
	</body>
</html>