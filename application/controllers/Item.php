<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Item extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{   
        $id = $this->get('id');
        // $kategori = $this->get('merek');
        // if(!empty($id) && empty($kategori)){
        //     $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.merk='$id' ORDER BY id DESC")->result();
        //     // $data = $this->db->get_where("produk", ['id' => $id])->result();
        // }else if(!empty($kategori) && empty($id)){
        //     $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori='$kategori' ORDER BY id DESC")->result();
        //     // $data = $this->db->get_where("produk", ['kategori' => $kategori])->row_array();
        // }else if(!empty($kategori) && !empty($id)){
        //     // $data = $this->db->get_where("produk", ['id' => $id,'kategori' => $kategori])->row_array();
        //     $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.merk='$id'AND produk.kategori='$kategori' ORDER BY id DESC")->result();
        // }else{
        //     $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek ORDER BY id DESC")->result();
        //     // $data = $this->db->get("produk")->result();
        // }
        if(!empty($id)){
            $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga,merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.merk='$id' ORDER BY id DESC")->result();
            // $data = $this->db->get_where("produk", ['id' => $id])->result();
        }else{
            $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga,merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek ORDER BY id DESC")->result();
            // $data = $this->db->get("produk")->result();
        }
     
        $this->response($hasil, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('produk',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('produk', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('produk', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}