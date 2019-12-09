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
		$data['mobil'] = $this->m_data->getDaftarMobil();
		$data['motor'] = $this->m_data->getDaftarMotor();
		$data['truck'] = $this->m_data->getDaftarTruck();
		$data['aksesoris'] = $this->m_data->getDaftarAksesoris();
		$this->load->view('halaman_produk',$data);
	}
}
