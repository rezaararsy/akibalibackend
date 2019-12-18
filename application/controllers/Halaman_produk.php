<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_produk extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');


	  }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		// $data['mobil'] = $this->m_data->getDaftarMobil();
		// $data['motor'] = $this->m_data->getDaftarMotor();
		// $data['truck'] = $this->m_data->getDaftarTruck();
		$data['merek'] = $this->m_data->get_merek();
		$this->load->view('halaman_produk2',$data);
	}
	public function detail(){
		$id = $this->uri->segment(3);
		$data['hasil'] = $this->m_data->getDataDetil($id);
		$this->load->view('detail-produk',$data);
	}
	// public function kategori(){
	// 	$data['merek_mobil'] = $this->m_data->getMerekMobil();
	// 	$data['merek_motor'] = $this->m_data->getMerekMotor();
	// 	$data['merek_truck'] = $this->m_data->getMerekTruck();
	// 	$data['merek_aksesoris'] = $this->m_data->getMerekAksesoris();
	// 	$this->load->view('kategori',$data);
	// }
	// public function data_json_produk(){
	// 	header('Content-Type: application/json');
    // 	echo $this->m_data->getDataProduk();
    // }
}
