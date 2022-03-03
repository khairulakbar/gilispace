<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function GetProject($where= "")
	{
		//$data = $this->db->query('select * from customers '.$where);
		$data = $this->db->query('select * from projects_table left join categories_table on projects_table.id_category=categories_table.id_category'.$where);
		return $data;
	}

	public function GetCategory($where= "")
	{
		//$data = $this->db->query('select * from customers '.$where);
		$data = $this->db->query('select * from categories_table'.$where);
		return $data;
	}

	public function viewproject($kode){
		//$company_id = $this->session->userdata('company_id');
		//$user_id = $this->session->userdata('user_id');
		$this->load->library('pagination'); // Load librari paginationnya
		
		$query = "select * from projects_table left join categories_table on projects_table.id_category=categories_table.id_category
				WHERE projects_table.id_category=$kode AND projects_table.status='2' ORDER BY projects_table.id_project DESC
					"; // Query untuk menampilkan semua data
		
		$config['base_url'] = base_url('Projects/listprojects/'.$kode);
		$config['total_rows'] = $this->db->query($query)->num_rows();
		$config['per_page'] = 6;
		$config['uri_segment'] = 4; 
		$config['num_links'] = 9;
		
		// Style Pagination
		// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
		$config['full_tag_open']   = '<ul class="pagination">';
        $config['full_tag_close']  = '</ul>';
        
        $config['first_link']      = 'First'; 
        $config['first_tag_open']  = '<li class="page-item page-link">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link']       = 'Last'; 
        $config['last_tag_open']   = '<li class="page-item page-link">';
        $config['last_tag_close']  = '</li>';
        
        $config['next_link']       = '&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;'; 
        $config['next_tag_open']   = '<li class="page-item page-link">';
        $config['next_tag_close']  = '</li>';
        
        $config['prev_link']       = '&nbsp;<i class="fa fa-angle-double-left"></i>&nbsp;'; 
        $config['prev_tag_open']   = '<li class="page-item page-link">';
        $config['prev_tag_close']  = '</li>';
        
        $config['cur_tag_open']    = '<li class="page-item page-link active bg-primary text-white">';
        $config['cur_tag_close']   = '</li>';
         
        $config['num_tag_open']    = '<li  class="page-item page-link">';
        $config['num_tag_close']   = '</li>';
        // End style pagination
		
		$this->pagination->initialize($config); // Set konfigurasi paginationnya
		
		$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
		$query .= " LIMIT ".$page.", ".$config['per_page'];
		
		$data['limit'] = $config['per_page'];
		$data['total_rows'] = $config['total_rows'];
		$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
		$data['projects_table'] = $this->db->query($query)->result();
		
		return $data;
	}

	//for admin
	//ambil data user
	function GetUser($data) {
        $query = $this->db->get_where('tb_login', $data);
        return $query;
	}
	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}
	
	public function Update($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}

}

/* End of file model.php */
/* Location: ./application/models/model.php */