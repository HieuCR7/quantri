
<?php
	class Thanhvien extends My_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('thanhvien_model');
		}
		function add_member()
		{
			$data['temp'] = 'admin/ql_member/add_member';
			if($this->input->post())
			{
				//Neu chua nhap du lieu ma nhan submit
				$this->form_validation->set_rules('fullName', 'ho ten', 'required|callback_checkFullName');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_checkEmail'); 
				$this->form_validation->set_rules('gender', 'gioi tinh', 'required');
				$this->form_validation->set_rules('phone', 'sdt', 'required|regex_match[/^[0-9]{11}$/]|callback_checkPhone');
				$this->form_validation->set_rules('address', 'dia chi', 'required'); 
				$this->form_validation->set_rules('status', 'trang thai', 'required');
				if($this->form_validation->run())
				{
					$name = $this->input->POST('fullName');
					$email = $this->input->POST('email');
					$gender = $this->input->POST('gender');
					$phone = $this->input->POST('phone');
					$address = $this->input->POST('address');
					$status = $this->input->POST('status');
					$input = array(
						'fullName' => $name,
						'email' => $email,
						'gender' => $gender,
						'phone' => $phone,
						'address' => $address,
						'status' => $status
					);
					$this->thanhvien_model->create($input);
					$this->session->set_flashdata('msg', 'Them thanh cong!!!');
					redirect('admin/thanhvien/list_member');
				}
				if($this->form_validation->run() === FALSE){
					$this->session->set_flashdata('mess', validation_errors('<p class="error">', '</p>'));
				}
				$data['data'] = $this->input->post();
			}
			$this->load->view('admin/index', $data);
		}
		function list_member()
		{
			$data['temp'] = 'admin/ql_member/list_member';
			$data['data'] = $this->thanhvien_model->get_list();
			$this->load->view('admin/index', $data); 
		}
		function edit()
		{
			//thuc hien lay theo id
			$id = $this->input->get('id');
			//kiem tra id rong va id la so
			if(!empty($id) && is_numeric($id))
			{
				$data['temp'] = 'admin/ql_member/edit_member';
				$findById = $this->thanhvien_model->findById($id);
				if(!empty($findById))
				{
					$data['data'] = $findById;
					//khi nguoi dung submit ma khong co du lieu
					if($this->input->POST())
					{
						$this->form_validation->set_rules('fullName', 'ho ten', 'required|callback_checkFullName');
						$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_checkEmail'); 
						$this->form_validation->set_rules('gender', 'gioi tinh', 'required');
						$this->form_validation->set_rules('phone', 'sdt', 'required|regex_match[/^[0-9]{11}$/]|callback_checkPhone'); 
						$this->form_validation->set_rules('address', 'dia chi', 'required'); 
						$this->form_validation->set_rules('status', 'trang thai', 'required');
						if($this->form_validation->run())
						{
							$this->thanhvien_model->update($id, $this->input->POST());
							$this->session->set_flashdata('msg', 'Sua thanh cong!!!');
							redirect('admin/thanhvien/list_member');
						}
						if($this->form_validation->run() === FALSE)
						{
							$this->session->set_flashdata('msg', validation_errors('<p class="error">', '</p>'));
						}
						else
						{
							$data['data'] = (object)$this->input->POST();
							$this->session->set_flashdata('msg', validation_errors());
						}
					}
					$this->load->view('admin/index', $data);
				}
				else{
					redirect('admin/thanhvien/list_member');
				} 
			}
		}
		function xoa()
		{
			$id = $this->input->POST('id');
			if(!empty($id) && is_numeric($id))
			{
				$data['temp'] = 'admin/ql_member/list_member';
				$delete = $this->thanhvien_model->delete($id);
				$this->session->set_flashdata('msg', 'Xoa thanh cong!!!');
				redirect('admin/thanhvien/list_member');
			}
		}

		public function checkPhone()
		{
			$phone = $this->input->post('phone');
			$id = $this->input->post('id');
			$checkPhone = $this->thanhvien_model->getByField('phone', $phone, $id);
			if (!empty($checkPhone)) {
				 $this->form_validation->set_message('checkPhone', 'so phone exists');
                 return false;
			}
			return true;
		}
		public function checkFullName()
		{
			$name = $this->input->post('fullName');
			$id = $this->input->post('id');
			$checkFullName = $this->thanhvien_model->getByField('fullName', $name, $id);
			if (!empty($checkFullName)) {
				 $this->form_validation->set_message('checkFullName', 'fullName exists');
                 return false;
			}
			return true;
		}
		public function checkEmail()
		{
			$email = $this->input->post('email');
			$id = $this->input->post('id');
			$email = $this->thanhvien_model->getByField('email', $email, $id);
			if (!empty($email)) {
				 $this->form_validation->set_message('checkEmail', 'email exists');
                 return false;
			}
			return true;
		}
	}
?>