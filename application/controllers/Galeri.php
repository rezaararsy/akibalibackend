<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
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
		$this->load->view('admin/galeri');
		$this->load->view('admin/footer');
    }
    public function add()
	{	
		$this->load->view('admin/header');
		$this->load->view('admin/add_galeri');
		$this->load->view('admin/footer');
    }
    public function data_json_galeri(){
		header('Content-Type: application/json');
    	echo $this->m_data->getDataGaleri();
    }   
    function deleteGaleri(){ 
		$kode=$this->input->post('id');
		$this->db->where('id',$kode);
		$this->db->delete('galeri');
		redirect('/galeri');
	  }
      public function inputDataGaleri()
      {	
  
          $config['upload_path']          = './asset/img/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['file_name']       	 	= $this->input->post('keterangan');
          $config['max_size']             = 2048000;
          echo $this->input->post('foto');
          $linke = '';
  
          $this->load->library('upload', $config);
  
          if ($this->upload->do_upload('foto')){
              // $error = array('error' => $this->upload->display_errors());
              // echo $error;
              $data = array('upload_data' => $this->upload->data());
              $nama = $this->upload->data('file_name');
              $linke = '/asset/img/'.$nama;
              
          }else{
              echo $this->upload->display_errors();
          }
  
          $data = array(
          'nama' => $this->input->post('keterangan'),
          'gambar' => $linke
          );
          $this->m_data->input_data($data,'galeri');
  
          redirect('/galeri');
      }
}
