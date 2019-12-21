<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
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
		$this->load->view('admin/produk');
		$this->load->view('admin/footer');
    }
    public function add()
	{	
        $this->load->view('admin/header');
        $data['merek'] = $this->m_data->get_merek();
		    $this->load->view('admin/add_produk',$data);
		    $this->load->view('admin/footer');
    }
    function get_sub_category(){
        $category_id = $this->input->post('id');
        $data = $this->m_data->get_sub_category($category_id)->result();
        echo json_encode($data);
    }
    

    public function data_json_produk(){
		header('Content-Type: application/json');
    	echo $this->m_data->getDataProduk();
    }
    function delete(){ 
        $kode=$this->input->post('id');
        $filenya='.'.$this->input->post('filenya');
        $this->db->where('id',$kode);
        $this->db->delete('produk');
        unlink($filenya); 
        redirect('/produk');     
    }
     
    function update(){ 
          $config['upload_path']          = './asset/img/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['file_name']       	 	= $this->input->post('nama');
          $config['max_size']             = 4096000;
          echo $this->input->post('foto');
          $linke = '';
  
          $this->load->library('upload', $config);
  
          if ($this->upload->do_upload('foto')){
              // $error = array('error' => $this->upload->display_errors());
              // echo $error;
              $filenya='.'.$this->input->post('filenya');
              unlink($filenya); 
              $data = array('upload_data' => $this->upload->data());
              $nama = $this->upload->data('file_name');
              $linke = '/asset/img/'.$nama;
              
          }else{
              echo $this->upload->display_errors();
              $linke = $this->input->post('filenya');
          }

        $kode=$this->input->post('id');
        $data=array(
          'nama' => $this->input->post('nama'),
          'keterangan' => $this->input->post('keterangan'),
          'harga' => $this->input->post('harga'),
          'gambar' => $linke
        );
        $this->db->where('id',$kode);
        $this->db->update('produk', $data);
        redirect('/produk');
    }

          
          public function inputDataProduksi()
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
              'nama' => $this->input->post('nama'),
              'keterangan' => $this->input->post('keterangan'),
              'gambar' => $linke,
              'harga' => $this->input->post('harga'),
              // 'kategori' => $this->input->post('kategori'),
              'merk' => $this->input->post('merek')
              );
              $this->m_data->input_data($data,'produk');
              redirect('/produk/');
          }
    
}
