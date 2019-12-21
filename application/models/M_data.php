<?php

defined('BASEPATH') OR exit ('No direct script access allowed');


class M_Data extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function get_category(){
    $query = $this->db->get('kategori');
    return $query;  
}

function get_sub_category($category_id){
    $query = $this->db->get_where('merek', array('kategori' => $category_id));
    return $query;
}

  // function getDataStockBlmJadi(){
  //   $this->datatables->select('id_barang,nama_barang,jumlah,user,tgl,supplier,biaya');
  //   $this->datatables->from('blm_jadi');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id_barang,nama_barang');
  //   return $this->datatables->generate();
  // }
  // function getDataStockSetJadi(){
  //   $this->datatables->select('id_barang,nama_barang,jumlah,user,tgl,biaya');
  //   $this->datatables->from('set_jadi');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id_barang,nama_barang');
  //   return $this->datatables->generate();
  // }
  // function getDataStockJadi(){
  //   $this->datatables->select('id_barang,nama_barang,jumlah,user,tgl,konsumen,biaya,tgl_kirim');
  //   $this->datatables->from('brg_jadi');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id_barang,nama_barang');
  //   return $this->datatables->generate();
  // }
  // function getDataProduksi(){
  //   $this->datatables->select('id,tgl_masuk,tgl_mulai,tgl_selesai,quantity,kode_produk,mesin,status');
  //   $this->datatables->from('produksi');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id');
  //   return $this->datatables->generate();
  // }
  // function getDataPenjualan(){
  //   $this->datatables->select('id,customer,tgl,biaya,status');
  //   $this->datatables->from('penjualan');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id');
  //   return $this->datatables->generate();
  // }

//   function getDataProduk(){
//     $this->datatables->select('id,nama,keterangan,gambar,harga');
//     $this->datatables->from('produk');
//     $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-harga="$3" data-gambar="$4" data-keterangan="$5">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama,harga,gambar,keterangan');
//     $this->datatables->add_column('link', '<img src="$1"style="height:100px;width:100px;" />','gambar');
//     return $this->datatables->generate();
//   }
  function getDataProduk(){
    $this->datatables->select('id,nama,keterangan,gambar,harga');
    $this->datatables->from('produk');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-harga="$3" data-keterangan="$5" data-filenya="$4">Edit<i class="fa fa-fw fa-edit"></i></a> <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1" data-filenya="$4">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama,harga,gambar,keterangan');
    $this->datatables->add_column('link', '<img src="$1"style="height:100px;width:100px;" />','gambar');
    return $this->datatables->generate();
  }
  function getDataMerek(){
    $this->datatables->select('id_merek,nama');
    $this->datatables->from('merek');
    $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id_merek,nama');
    return $this->datatables->generate();
  }
  function getDataGaleri(){
    $this->datatables->select('id,nama,gambar');
    $this->datatables->from('galeri');
    $this->datatables->add_column('view',  '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-filenya="$3">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1" data-filenya="$3">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama,gambar');
    $this->datatables->add_column('link', '<img src="$1"style="height:100px;width:100px;" />','gambar');
    return $this->datatables->generate();
  }
  function getDaftarMerek($id){
    $hasil=$this->db->query("SELECT * FROM merek WHERE kategori='$id'");
        return $hasil->result();
  }
  function getMerek($id){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.merk='$id'");
        return $hasil->result();
  }

  function get_merek(){
    $hasil=$this->db->query("SELECT * FROM merek");
        return $hasil->result();
  }


  function getDaftarMobil(){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori=2 ORDER BY id DESC");
        return $hasil->result();
  }
  function getDaftarMobile($id){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori=2 AND merk='$id'");
        return $hasil->result();
  }
  function getDaftarMotor(){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori=1");
        return $hasil->result();
  }
  function getDaftarMotore($id){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori=1 AND merk='$id'");
        return $hasil->result();
  }
  function getDaftarTruck(){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori=3");
        return $hasil->result();
  }
  function getDaftarTrucke($id){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori=3 AND merk='$id'");
        return $hasil->result();
  }
  function getDaftarAksesoris(){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori=4");
        return $hasil->result();
  }
  function getDaftarAksesorise($id){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, produk.jumlah, produk.kategori, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE produk.kategori=4 AND merk='$id'");
        return $hasil->result();
  }
  function getDaftarGambar(){
    $hasil=$this->db->query("SELECT * FROM galeri");
        return $hasil->result();
  }
























  function getDaftarGaleri(){
    $hasil=$this->db->query("SELECT * FROM galeri ORDER BY id DESC");
        return $hasil->result();
  }
  function getDataDetil($id){
    $hasil=$this->db->query("SELECT produk.id, produk.nama, produk.keterangan, produk.gambar, produk.harga, merek.nama as merek, produk.merk as merek1 FROM produk INNER JOIN merek ON produk.merk=merek.id_merek WHERE id='$id'");
        return $hasil->result();
  }
  function getMerekMotor(){
    $hasil=$this->db->query("SELECT * FROM merek where kategori=1");
        return $hasil->result();
  }
  function getMerekMobil(){
    $hasil=$this->db->query("SELECT * FROM merek where kategori=2");
        return $hasil->result();
  }
  function getMerekTruck(){
    $hasil=$this->db->query("SELECT * FROM merek where kategori=3");
        return $hasil->result();
  }
  function getMerekAksesoris(){
    $hasil=$this->db->query("SELECT * FROM merek where kategori=4");
        return $hasil->result();
  }
  function get_data_email(){
    $hasil=$this->db->query("SELECT email FROM subscribe");
        return $hasil->result();
  }
  function countProduk(){
    $query=$this->db->query("SELECT COUNT(id) AS jumlahe FROM produk");
    return $query->row();
  }
  function countGaleri(){
    $query=$this->db->query("SELECT COUNT(id) AS jumlahe FROM galeri");
    return $query->row();
  }













  function getDataStockBahan(){
    $this->datatables->select('id,nama_barang,jml_stock,satuan,tgl,harga');
    $this->datatables->from('bahan_produksi');
    $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-satuan="$4" data-harga="$5">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_barang,jml_stock,satuan,harga');
    return $this->datatables->generate();
  }
  function getDataStockProduk(){
    $this->datatables->select('id,nama_produk,jml_stock,harga,tgl');
    $this->datatables->from('produk');
    $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
    return $this->datatables->generate();
  }
  function getDataStockToko(){
    $this->datatables->select('stock_toko.id as idst,toko.nama_toko as namatok, produk.nama_produk as namaprod, stock_toko.jml as jmlst, stock_toko.hargaTotal as hargat');
    $this->datatables->from('stock_toko');
    $this->datatables->join('toko', 'stock_toko.toko=toko.id_toko');
    $this->datatables->join('produk', 'stock_toko.produk=produk.id');
    return $this->datatables->generate();
  }
  function getDataStockToko2($id){
    $this->datatables->select('stock_toko.id as idst, produk.nama_produk as namaprod, stock_toko.jml as jmlst');
    $this->datatables->from('stock_toko');
    $this->datatables->join('toko', 'stock_toko.toko=toko.id_toko');
    $this->datatables->join('produk', 'stock_toko.produk=produk.id');
    $this->datatables->where('stock_toko.toko', $id);
    $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-jml="$2">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','idst,jmlst');
    return $this->datatables->generate();
  }
  function getDataStockToko3($id){
    $this->datatables->select('stock_toko.id as idst, produk.nama_produk as namaprod, stock_toko.jml as jmlst, , stock_toko.hargaTotal as hargat');
    $this->datatables->from('stock_toko');
    $this->datatables->join('toko', 'stock_toko.toko=toko.id_toko');
    $this->datatables->join('produk', 'stock_toko.produk=produk.id');
    $this->datatables->where('stock_toko.toko', $id);
    
    return $this->datatables->generate();
  }
  function input_data($data,$table){
    $this->db->insert($table,$data);
  }
  function cek_login($table,$where){
    return $this->db->get_where($table,$where);
  }
  function get_produk(){
    $hasil=$this->db->query("SELECT * FROM produk");
        return $hasil->result();
  }
  function get_toko(){
    $hasil=$this->db->query("SELECT * FROM toko");
        return $hasil->result();
  }
  function get_produk2($id){
    $hasil=$this->db->query("SELECT * FROM produk WHERE id='$id'");
        return $hasil->result();
  }
  function get_toko2($id){
    $hasil=$this->db->query("SELECT * FROM toko WHERE id_toko='$id'");
        return $hasil->result();
  }
  function get_subProduk($id){
    $hasil=$this->db->query("SELECT * FROM produk WHERE id='$id'");
        return $hasil->result();
  }
  function getHargaProduk($produk){
    $query=$this->db->query("SELECT * FROM produk WHERE id = '$produk'");
    return $query->row();
  }
   function get_cekStock($id){
    $hasil=$this->db->query("SELECT * FROM stock_toko WHERE id='$id'");
        return $hasil->row();
  }
  function updateProduk($id,$set){
    $this->db->set('jml_stock', $set);
    $this->db->where('id', $id);
    $this->db->update('produk');
  }
  function get_data_chart_bahan(){
        $query = $this->db->query("SELECT nama_barang,SUM(jml_stock) AS stok FROM bahan_produksi GROUP BY nama_barang");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function get_data_chart_produk(){
        $query = $this->db->query("SELECT nama_produk,SUM(jml_stock) AS stok FROM produk GROUP BY nama_produk");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
