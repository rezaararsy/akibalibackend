<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merek extends CI_Controller {
	function __construct()
	{
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');


	  }
	public function index()
	{	
		$this->load->view('admin/header');
		$this->load->view('admin/merek');
		$this->load->view('admin/footer');
    }
    public function add()
	{	
		$this->load->view('admin/header');
		$this->load->view('admin/add_merek');
		$this->load->view('admin/footer');
    }
    public function data_json_merek(){
		header('Content-Type: application/json');
    	echo $this->m_data->getDataMerek();
    }
    function deleteMerek(){ 
		$kode=$this->input->post('id');
		$this->db->where('id_merek',$kode);
		$this->db->delete('merek');
		redirect('/merek');
	  }

		function updateMerek(){ 
		$kode=$this->input->post('id');
		$data=array(
			'nama' => $this->input->post('nama'),
		);
		$this->db->where('id_merek',$kode);
		$this->db->update('merek', $data);
		redirect('/merek');
          }
          public function inputDataMerek()
          {	
              $data = array(
              'nama' => $this->input->post('nama'),
              'kategori' => $this->input->post('kategori'),
              );
              $this->m_data->input_data($data,'merek');
              redirect('/merek');
          }
 

}
