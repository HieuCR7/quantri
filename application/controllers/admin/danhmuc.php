<?php
	class Danhmuc extends My_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('danhmuc_model');
		}
		function add_danhmuc()
		{
			$data = array();
			$data['temp'] = 'admin/ql_danhmuc/add_danhmuc';
			// Kiem tra nguoi dung nhan vao submit
			if($this->input->POST())
			{
				//Neu chua co du lieu nhap vao
				$this->form_validation->set_rules('titles_dm', 'ten danh muc', 'required');
				//Neu co du lieu nhap vao
				if($this->form_validation->run())
				{
					$danhmuc = $this->input->post('titles_dm');
					$input = array('titles_dm' => $danhmuc);
					$this->danhmuc_model->create($input);
					$this->session->set_flashdata('msg', 'Them thanh cong!!!');
					redirect('admin/danhmuc/list_danhmuc');
				}
			}
			$this->load->view('admin/index', $data);
		}
		function list_danhmuc()
		{
			$data['temp'] = 'admin/ql_danhmuc/list_danhmuc';
			$data['data'] = $this->danhmuc_model->get_list();
			$this->load->view('admin/index', $data);
		}
		function update()
		{
			$id = $this->input->get('id');
			if (!empty($id) && is_numeric($id)) {

				$data['temp'] = 'admin/ql_danhmuc/edit_danhmuc';
				$danhmuc = $this->danhmuc_model->findById($id);
				
				if (!empty($danhmuc)) {
					$data['data'] = $danhmuc;
					if($this->input->post())
					{
						$this->form_validation->set_rules('titles_dm', 'Ten danh muc', 'required');
						// Khi nhap lieu chinh xac
						if($this->form_validation->run())
						{
							$this->danhmuc_model->update($id, $this->input->post());
							$this->session->set_flashdata('msg', 'Sua thanh cong!');
							redirect('/admin/danhmuc/list_danhmuc');
						} else {
							$data['data'] = (object)$this->input->post();
							$this->session->set_flashdata('mess', validation_errors());
						}
					}
					
					$this->load->view('admin/index', $data);
				} else {
					redirect('/admin/danhmuc/list_danhmuc');
				}
			}
		}
		function xoa()
		{
			//Kiem tra nguoi dung nhan vao delete thi se post len database theo id
			$id = $this->input->POST('id');
			if(!empty($id) && is_numeric($id))
			{
				$data['temp'] = 'admin/danhmuc/list_danhmuc';
				$danhmuc = $this->danhmuc_model->delete($id);
				$this->session->set_flashdata('msg', 'delete thanh cong!!!');
				redirect('admin/danhmuc/list_danhmuc');
			}
		}
	}
?>
