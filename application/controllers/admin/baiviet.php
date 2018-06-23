<?php
	class Baiviet extends My_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('baiviet_model');
		}
		function add_baiviet()
		{
			$data['temp'] = 'admin/ql_baiviet/add_baiviet';
			if($this->input->POST())
			{
				//khi nguoi dung POST len ma khong co du lieu
				$this->form_validation->set_rules('titles_bv', 'ten bai viet', 'required');
				// $this->form_validation->set_rules('nd_bv', 'noi dung bai viet', 'required');
				// $this->form_validation->set_rules('images', 'hinh anh', 'required');
				// $this->form_validation->set_rules('dm', 'danh muc', 'required');
				if($this->form_validation->run()){
					if(!empty($_FILES['images']['tmp_name']))
					{
						$config['upload_path'] = './upload/';
				        $config['allowed_types'] = 'jpg|jpeg|png|gif';
				        //$config['file_name'] = $_FILES['images']['tmp_name'];
				        $this->load->library('upload', $config);
				        //$this->upload->initialize($config);
				        if ($this->upload->do_upload('images')) 
				        {
				          $uploadData = $this->upload->data();
				          $image = $uploadData['file_name'];
				        } else{
				          $image = '';
				        }
					}
					$title = $this->input->POST('titles_bv');
					$nd = $this->input->POST('nd_bv');
					//$image = $this->input->POST('images');
					$dm = $this->input->POST('dm');
					$input = array(
						'titles_bv' => $title,
						'nd_bv' => $nd,
						'images' => $image,
						'dm' => $dm
					);
					$this->baiviet_model->create($input);
					$this->session->set_flashdata('msg', 'Them thanh cong!!!');	
					redirect('admin/baiviet/list_baiviet');			
				}
			}
			$this->load->view('admin/index', $data);
		}

		function list_baiviet()
		{
			$data['temp'] = 'admin/ql_baiviet/list_baiviet';
			$data['data'] = $this->baiviet_model->get_list();
			$this->load->view('admin/index', $data); 
		}
	}
?>