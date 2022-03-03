<?php
class Artikel extends CI_Controller{
	function __construct(){
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

	function index(){
		$data = array(
            //'datauser' => $this->model->GetArticle()->result_array(),
            'listartikel' => $this->model->GetArticle(" order by id_article desc")->result_array(),
			'nama' => $this->session->userdata('nama'),	
			'level' => $this->session->userdata('level'),
			//'datavid' => $this->model->GetVid("order by urut asc")->result_array(),
		);
		
		//$this->load->view('front/view_front');
		if (!$this->session->userdata('useradmin')) {
			redirect(base_url().'login');
		}
		else{

			$this->load->view('artikel/data_artikel', $data);
			
		}
    }


	function addartikel(){
		
		//$data_user = $this->model->GetArticle(" where id_article = '$kode'")->result_array();
		//$datapass = $this->model->GetUser("id_article = '$kode'")->result_array();
		//$word = $datapass[0]['word'];

		//$id_article = $_POST['id_article'];
		

		$data = array(
			'nama' => $this->session->userdata('nama'),	
			'level' => $this->session->userdata('level'),
			'category' => $this->model->GetCategory()->result_array(),
			
			);

		$this->load->view('artikel/add_artikel', $data);

		
	}

	function saveartikel(){

		$title = $_POST['title'];
		$category = $_POST['category'];
		//$date = $_POST['date'];
		$date = date('Y-m-d');
		$article = $_POST['article'];
		$status = $_POST['status'];
		$featured = $_POST['featured'];

		$slug = url_title($this->input->post('judul_img'), 'dash', TRUE);
		$config = array(
			'upload_path' => './assets/front/images',
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
			'id_article'=> '',
			'title' => $title,
			'id_category' => $category,
			'date' => $date,
			'article' => $article,
			'status' => $status,
			'featured' => $featured,
			'postedby' => $this->session->userdata('nama'),
			'img' => $file_name,
			);


		//$result = $this->model->Simpan('tb_login',$data);
		$result = $this->model->Simpan('tb_articles',$data);

		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Ditambahkan</strong></div>");
			header('location:'.base_url().'artikel/');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data GAGAL Ditambahkan</strong></div>");
			header('location:'.base_url().'artikel/');
		}	

	}

	function editartikel($kode = 0){
		
		$data_user = $this->model->GetArticle(" where id_article = '$kode'")->result_array();
		//$datapass = $this->model->GetUser("id_article = '$kode'")->result_array();
		//$word = $datapass[0]['word'];
		$data = array(
			'nama' => $this->session->userdata('nama'),	
			'level' => $this->session->userdata('level'),
			'id_article' => $data_user[0]['id_article'],
			'title' => $data_user[0]['title'],
			'article' => $data_user[0]['article'],
			'featured' => $data_user[0]['featured'],
			'status' => $data_user[0]['status'],
			'img' => $data_user[0]['img'],
			'date' => $data_user[0]['date'],
			'id_kat' => $data_user[0]['id_category'],
			'kat' => $data_user[0]['category'],
			'category' => $this->model->GetCategory()->result_array(),
			//'listvid' => $this->model->GetVid("where id_user = '$kode' order by urut asc")->result_array(),
			//'level_v' => $datapass[0]['level'],
			//'pass_v' => $datapass[0]['word'],
			//'label_post' => $kategori_post_array,
			);
		$this->load->view('artikel/edit_artikel', $data);
	}

	

	function updateartikel(){
		
		//$id_user = $_POST['id_user'];
		$id_article = $_POST['id_article'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$date = date('Y-m-d');
		$article = $_POST['article'];
		$status = $_POST['status'];
		$featured = $_POST['featured'];

		//$datausr = $this->model->GetUser("id_user = '$kode'")->result_array();
		//$cekuser = $datausr[0]['id_user'];
		//$id_user_update = '';
		//$nama = $_POST['nama_user'];
		//$level = $_POST['level'];		
		//$tlp = $_POST['tlp'];
		//$pass = $_POST['pass'];
		//$teks = $_POST['teks'];
		//$tampil = $_POST['tampil'];
		//$file_name = $upload_data['file_name'];

		$data = array(	
			'id_article'=> $id_article,
			'title' => $title,
			'id_category' => $category,
			'tgl_update' => $date,
			'article' => $article,
			'status' => $status,
			'featured' => $featured,
			);
		
		
			//$result = $this->model->Simpan('tb_login',$data);
			$result = $this->model->Update('tb_articles',$data, array('id_article' => $id_article));

			if($result == 1){
				$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil DiUpdate</strong></div>");
				header('location:'.base_url().'artikel/editartikel/'.$id_article);
			}else{
				$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data GAGAL DiUpdate</strong></div>");
				header('location:'.base_url().'artikel/editartikel/'.$id_article);
			}	

			
	}

	function saveimg($kode = 0){
		//$datausr = $this->model->GetUserr("where id_user = '$kode'")->result_array();
		//$id_user = $datausr[0]['id_user'];

		//$id_article = $_POST['id_article'];

		$this->db->where('id_article',$kode);
		$query = $this->db->get('tb_articles');
		$row = $query->row();
		unlink("./assets/front/images/$row->img"); //delete old image

		$slug = url_title($this->input->post('judul_img'), 'dash', TRUE);
		$config = array(
			'upload_path' => './assets/front/images',
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
			'tgl_update' => $date,
			//'detik' => '5000',
			);
		
		$result = $this->model->Update('tb_articles',$data, array('id_article' => $kode));


		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil DiUpdate</strong></div>");
			header('location:'.base_url().'artikel/editartikel/'.$kode);
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data GAGAL DiUpdate</strong></div>");
			header('location:'.base_url().'artikel/editartikel/'.$kode);
		}	
	}

	/*
	function hapusimg($kode = 1){
		$this->db->where('id_img',$kode);
		$query = $this->db->get('tb_img');
		$row = $query->row();
		unlink("./image_file/$row->img");
		
		$datausr = $this->model->GetImg("where id_img = '$kode'")->result_array();
		$id_user = $datausr[0]['id_user'];

		$result = $this->model->Hapus('tb_img', array('id_img' => $kode));
		
		if($result == 1){
			
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Hapus data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'user/edituser/'.$id_user);
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Hapus data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'user/edituser/'.$id_user);
		}
	}

    fungsi hapus user
	function hapususer($kode = 1){
		$this->db->where('id_user',$kode);
		$query = $this->db->get('user');
		$row = $query->row();

		$dtvid = $this->model->GetVid("where id_user = '$kode'")->result_array();
		$vids = $dtvid[0]['vids'];
		unlink("./video_file/$vids");

		$dtimg = $this->model->GetImg("where id_user = '$kode'")->result_array();
		$img = $dtimg[0]['img'];
		unlink("./image_file/$img");
		
		$datausr = $this->model->GetVid("where id_vids = '$kode'")->result_array();
		$id_user = $datausr[0]['id_user'];

		$result = $this->model->Hapus('tb_vids', array('id_vids' => $kode));
		
        $result = $this->model->Hapus('user', array('id_user' => $kode));
        $result = $this->model->Hapus('user_update', array('id_user' => $kode));
        $result = $this->model->Hapus('tb_vids', array('id_user' => $kode));
        $result = $this->model->Hapus('tb_img', array('id_user' => $kode));
		
		if($result == 1){
			
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Hapus data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'user');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Hapus data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'user');
		}
	}

	*/
	

}