<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('model'); 
		$this->_cek_login();
	}
	private function _cek_login()
	{
		if(!$this->session->userdata('useradmin') && !$this->session->userdata('user')){            
			redirect(base_url().'login');
		}
		
	}

	public function index()
	{
		$data = array(
			//'total_product' => $this->model->GetProduk()->num_rows(),
			//'product_view' => $this->model->GetProductView()->result_array(),
			//'listuser' => $this->model->GetUserr()->result_array(),
			'nama' => $this->session->userdata('nama'),	
			'level' => $this->session->userdata('level'),	
		);
		
		$this->load->view('admin/dashboard/index', $data);
	}

	function listproject(){
		$data = array(
            //'datauser' => $this->model->GetArticle()->result_array(),
            'listproj' => $this->model->GetProject(" order by id_project desc")->result_array(),
			'nama' => $this->session->userdata('nama'),	
			'level' => $this->session->userdata('level'),
			//'datavid' => $this->model->GetVid("order by urut asc")->result_array(),
		);
		
		//$this->load->view('front/view_front');
		if (!$this->session->userdata('useradmin')) {
			redirect(base_url().'login');
		}
		else{

			$this->load->view('admin/project/data_project', $data);
			
		}
	}

	function addproject(){
		
		//$data_user = $this->model->GetArticle(" where id_article = '$kode'")->result_array();
		//$datapass = $this->model->GetUser("id_article = '$kode'")->result_array();
		//$word = $datapass[0]['word'];

		//$id_article = $_POST['id_article'];
		

		$data = array(
			'nama' => $this->session->userdata('nama'),	
			'level' => $this->session->userdata('level'),
			'category' => $this->model->GetCategory()->result_array(),
			
			);

		$this->load->view('admin/project/add_project', $data);

		
	}

	function saveproject(){

		
		$project_name = $_POST['project_name'];
		$category = $_POST['category'];
		//$date = date('Y-m-d');
		$description = $_POST['description'];
		$status = $_POST['status'];
		$price = $_POST['price'];

		$slug = url_title($this->input->post('judul_img'), 'dash', TRUE);
		$config = array(
			'upload_path' => './assets/front/img/portfolio',
			'allowed_types' => 'gif|jpg|JPG|png',
			'max_size' => '2048',
			'file_name' => 'Pic_'.$slug,
		);
		
		$this->load->library('upload', $config);	
		$this->upload->do_upload('img');
		$upload_data = $this->upload->data();
		
		//$id_user = '';
		//$id_user_update = '';
		//$urut = $_POST['urut_img'];
		
		
		//$status = $_POST['status'];
		$file_name = $upload_data['file_name'];

		$data = array(
			'id_project'=> '',
			'project_name' => $project_name,
			'id_category' => $category,
			//'tgl_update' => $date,
			'description' => $description,
			'status' => $status,
			'price' => $price,
			'img' => $file_name,
			);


		//$result = $this->model->Simpan('tb_login',$data);
		$result = $this->model->Simpan('projects_table',$data);

		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Ditambahkan</strong></div>");
			header('location:'.base_url().'dashboard/listproject');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data GAGAL Ditambahkan</strong></div>");
			header('location:'.base_url().'dashboard/listproject');
		}	

	}

	function editproject($kode = 0){
		
		$data_user = $this->model->GetProject(" where id_project = '$kode'")->result_array();
		//$datapass = $this->model->GetUser("id_article = '$kode'")->result_array();
		//$word = $datapass[0]['word'];
		$data = array(
			'nama' => $this->session->userdata('nama'),	
			'level' => $this->session->userdata('level'),
			'id_project' => $data_user[0]['id_project'],
			'project_name' => $data_user[0]['project_name'],
			'category' => $data_user[0]['category'],
			'description' => $data_user[0]['description'],
			'status' => $data_user[0]['status'],
			'img' => $data_user[0]['img'],
			'price' => $data_user[0]['price'],
			'link' => $data_user[0]['url'],
			'id_kat' => $data_user[0]['id_category'],
			'category' => $this->model->GetCategory()->result_array(),
			'kat' => $data_user[0]['category'],
			//'listvid' => $this->model->GetVid("where id_user = '$kode' order by urut asc")->result_array(),
			//'level_v' => $datapass[0]['level'],
			//'pass_v' => $datapass[0]['word'],
			//'label_post' => $kategori_post_array,
			);
		$this->load->view('admin/project/edit_project', $data);
	}

	function updateproject(){
		
		//$id_user = $_POST['id_user'];
		$id_project = $_POST['id_project'];
		$project_name = $_POST['project_name'];
		$category = $_POST['category'];
		//$date = date('Y-m-d');
		$description = $_POST['description'];
		$status = $_POST['status'];
		$price = $_POST['price'];
		$link = $_POST['link'];

		$data = array(	
			'id_project'=> $id_project,
			'project_name' => $project_name,
			'id_category' => $category,
			//'tgl_update' => $date,
			'description' => $description,
			'status' => $status,
			'price' => $price,
			'url' => $link,
			);
		
		
			//$result = $this->model->Simpan('tb_login',$data);
			$result = $this->model->Update('projects_table',$data, array('id_project' => $id_project));

			if($result == 1){
				$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil DiUpdate</strong></div>");
				header('location:'.base_url().'dashboard/editproject/'.$id_project);
			}else{
				$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data GAGAL DiUpdate</strong></div>");
				header('location:'.base_url().'dashboard/editproject/'.$id_project);
			}	

			
	}

	function saveimg($kode = 0){
		//$datausr = $this->model->GetUserr("where id_user = '$kode'")->result_array();
		//$id_user = $datausr[0]['id_user'];

		//$id_article = $_POST['id_article'];

		$this->db->where('id_project',$kode);
		$query = $this->db->get('projects_table');
		$row = $query->row();
		unlink("./assets/front/img/portfolio/$row->img"); //delete old image

		$slug = url_title($this->input->post('judul_img'), 'dash', TRUE);
		$config = array(
			'upload_path' => './assets/front/img/portfolio',
			'allowed_types' => 'gif|jpg|JPG|png',
			'max_size' => '2048',
			'file_name' => 'Image_'.$slug,
		);
		
		$this->load->library('upload', $config);	
		$this->upload->do_upload('img');
		$upload_data = $this->upload->data();
		
	
		
		//$status = $_POST['status'];
		$file_name = $upload_data['file_name'];

		$date = date('Y-m-d');

		$data = array(	
			'img' => $file_name,
			
			//'detik' => '5000',
			);
		
		$result = $this->model->Update('projects_table',$data, array('id_project' => $kode));


		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil DiUpdate</strong></div>");
			header('location:'.base_url().'dashboard/editproject/'.$kode);
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data GAGAL DiUpdate</strong></div>");
			header('location:'.base_url().'dashboard/editproject/'.$kode);
		}	
	}
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */