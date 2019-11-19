<?php

defined('BASEPATH') OR exit ('No direct script access allowed');


class M_Data extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }


  function getDaftarSupir(){
    $hasil=$this->db->query("SELECT * FROM driver WHERE status=0");
        return $hasil->result();
  }

  function getDaftarKendaraan(){
    $hasil=$this->db->query("SELECT * FROM kendaraan WHERE status=0");
        return $hasil->result();
  }

  function getDaftarDivisi(){
    $hasil=$this->db->query("SELECT * FROM divisi");
        return $hasil->result();
  }

  function updateStatus($id,$set){
    $this->db->set('status', $set);
    $this->db->where('id', $id);
    $this->db->update('permohonan');
  }

  function getJsonMohon(){
    $this->datatables->select('driver.id as driver_id, kendaraan.id as kendaraan_id, permohonan.id,permohonan.nama,divisi.nama as nama_divisi,divisi.id as divisie,permohonan.tanggal,permohonan.time_mulai,permohonan.time_selesai,kendaraan.nama as kendar, driver.nama as supir, permohonan.tujuan, permohonan.alasan, permohonan.surat, permohonan.undangan, permohonan.status, permohonan.file');
    $this->datatables->from('permohonan');
    $this->datatables->join('driver', 'permohonan.driver=driver.id');
    $this->datatables->join('kendaraan', 'permohonan.kendaraan=kendaraan.id');
    $this->datatables->join('divisi', 'permohonan.divisi=divisi.id');
    //$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama');
    return $this->datatables->generate();
  }

  function getJsonUser(){
    $this->datatables->select('divisi.id as divisi_id, divisi.nama as divisi_nama, user.nama as namae, user.divisi as divisie');
    $this->datatables->from('user');
    $this->datatables->join('divisi', 'user.divisi=divisi.id');
    $this->datatables->where('user.role', 1 );
    //$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama');
    return $this->datatables->generate();
  }

  function getJsonUserKadiv(){
    $this->datatables->select('divisi.id as divisi_id, divisi.nama as divisi_nama, user.nama as namae, user.divisi as divisie');
    $this->datatables->from('user');
    $this->datatables->join('divisi', 'user.divisi=divisi.id');
    $this->datatables->where('user.role', 2 );
    //$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama');
    return $this->datatables->generate();
  }

  function getJsonKendaraan(){
    $this->datatables->select('id,nama,plat,status');
    $this->datatables->from('kendaraan');
    //$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama');
    return $this->datatables->generate();
  }
  function getJsonDriver(){
    $this->datatables->select('id,nama,status');
    $this->datatables->from('driver');
    //$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama');
    return $this->datatables->generate();
  }

  function countGuna(){
    $query=$this->db->query("SELECT COUNT(id) AS jumlahe FROM permohonan WHERE status<>3 AND status<>-1");
    return $query->row();
  }

  function countDriver(){
    $query=$this->db->query("SELECT COUNT(id) AS jumlahe FROM driver WHERE status=0");
    return $query->row();
  }

  function countKendaraan(){
    $query=$this->db->query("SELECT COUNT(id) AS jumlahe FROM kendaraan WHERE status=0");
    return $query->row();
  }

  function hapusKendaraan($id){
    $this->db->delete('kendaraan', array('id' => $id)); 
  }

  function hapusSupir($id){
    $this->db->delete('driver', array('id' => $id)); 
  }

  function hapusUser($id){
    $this->db->delete('user', array('divisi' => $id)); 
  }

  function hapusDivisi($id){
    $this->db->delete('divisi', array('id' => $id)); 
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

  // function getDataProduk(){
  //   $this->datatables->select('id,nama,keterangan,gambar,harga');
  //   $this->datatables->from('produk');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-harga="$3" data-gambar="$4" data-keterangan="$5">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama,harga,gambar,keterangan');
  //   return $this->datatables->generate();
  // }
  // function getDataMerek(){
  //   $this->datatables->select('id_merek,nama,kategori');
  //   $this->datatables->from('merek');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id_merek,nama,kategori');
  //   return $this->datatables->generate();
  // }
  // function getDataGaleri(){
  //   $this->datatables->select('id,nama,gambar');
  //   $this->datatables->from('galeri');
  //   $this->datatables->add_column('view', ' <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama,gambar');
  //   return $this->datatables->generate();
  // }
  // function getDaftarMerek($id){
  //   $hasil=$this->db->query("SELECT * FROM merek WHERE kategori='$id'");
  //       return $hasil->result();
  // }
  // function getMerek($id){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE merk='$id'");
  //       return $hasil->result();
  // }
  // function getDaftarMobil(){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE kategori=2 ORDER BY id DESC");
  //       return $hasil->result();
  // }
  // function getDaftarMobile($id){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE kategori=2 AND merk='$id'");
  //       return $hasil->result();
  // }
  // function getDaftarMotor(){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE kategori=1");
  //       return $hasil->result();
  // }
  // function getDaftarMotore($id){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE kategori=1 AND merk='$id'");
  //       return $hasil->result();
  // }
  // function getDaftarTruck(){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE kategori=3");
  //       return $hasil->result();
  // }
  // function getDaftarTrucke($id){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE kategori=3 AND merk='$id'");
  //       return $hasil->result();
  // }
  // function getDaftarAksesoris(){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE kategori=4");
  //       return $hasil->result();
  // }
  // function getDaftarAksesorise($id){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE kategori=4 AND merk='$id'");
  //       return $hasil->result();
  // }
  // function getDaftarGaleri(){
  //   $hasil=$this->db->query("SELECT * FROM galeri ORDER BY id DESC");
  //       return $hasil->result();
  // }
  // function getDataDetil($id){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE id='$id'");
  //       return $hasil->result();
  // }
  // function getMerekMotor(){
  //   $hasil=$this->db->query("SELECT * FROM merek where kategori=1");
  //       return $hasil->result();
  // }
  // function getMerekMobil(){
  //   $hasil=$this->db->query("SELECT * FROM merek where kategori=2");
  //       return $hasil->result();
  // }
  // function getMerekTruck(){
  //   $hasil=$this->db->query("SELECT * FROM merek where kategori=3");
  //       return $hasil->result();
  // }
  // function getMerekAksesoris(){
  //   $hasil=$this->db->query("SELECT * FROM merek where kategori=4");
  //       return $hasil->result();
  // }
  // function get_data_email(){
  //   $hasil=$this->db->query("SELECT email FROM subscribe");
  //       return $hasil->result();
  // }
  // function countProduk(){
  //   $query=$this->db->query("SELECT COUNT(id) AS jumlahe FROM produk");
  //   return $query->row();
  // }
  // function countGaleri(){
  //   $query=$this->db->query("SELECT COUNT(id) AS jumlahe FROM galeri");
  //   return $query->row();
  // }













  // function getDataStockBahan(){
  //   $this->datatables->select('id,nama_barang,jml_stock,satuan,tgl,harga');
  //   $this->datatables->from('bahan_produksi');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-satuan="$4" data-harga="$5">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_barang,jml_stock,satuan,harga');
  //   return $this->datatables->generate();
  // }
  // function getDataStockProduk(){
  //   $this->datatables->select('id,nama_produk,jml_stock,harga,tgl');
  //   $this->datatables->from('produk');
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
  //   return $this->datatables->generate();
  // }
  // function getDataStockToko(){
  //   $this->datatables->select('stock_toko.id as idst,toko.nama_toko as namatok, produk.nama_produk as namaprod, stock_toko.jml as jmlst, stock_toko.hargaTotal as hargat');
  //   $this->datatables->from('stock_toko');
  //   $this->datatables->join('toko', 'stock_toko.toko=toko.id_toko');
  //   $this->datatables->join('produk', 'stock_toko.produk=produk.id');
  //   return $this->datatables->generate();
  // }
  // function getDataStockToko2($id){
  //   $this->datatables->select('stock_toko.id as idst, produk.nama_produk as namaprod, stock_toko.jml as jmlst');
  //   $this->datatables->from('stock_toko');
  //   $this->datatables->join('toko', 'stock_toko.toko=toko.id_toko');
  //   $this->datatables->join('produk', 'stock_toko.produk=produk.id');
  //   $this->datatables->where('stock_toko.toko', $id);
  //   $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-jml="$2">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','idst,jmlst');
  //   return $this->datatables->generate();
  // }
  // function getDataStockToko3($id){
  //   $this->datatables->select('stock_toko.id as idst, produk.nama_produk as namaprod, stock_toko.jml as jmlst, , stock_toko.hargaTotal as hargat');
  //   $this->datatables->from('stock_toko');
  //   $this->datatables->join('toko', 'stock_toko.toko=toko.id_toko');
  //   $this->datatables->join('produk', 'stock_toko.produk=produk.id');
  //   $this->datatables->where('stock_toko.toko', $id);
    
  //   return $this->datatables->generate();
  // }
  function input_data($data,$table){
    $this->db->insert($table,$data);
  }
  function cek_login($table,$where){
    return $this->db->get_where($table,$where);
  }
  // function get_produk(){
  //   $hasil=$this->db->query("SELECT * FROM produk");
  //       return $hasil->result();
  // }
  // function get_toko(){
  //   $hasil=$this->db->query("SELECT * FROM toko");
  //       return $hasil->result();
  // }
  // function get_produk2($id){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE id='$id'");
  //       return $hasil->result();
  // }
  // function get_toko2($id){
  //   $hasil=$this->db->query("SELECT * FROM toko WHERE id_toko='$id'");
  //       return $hasil->result();
  // }
  // function get_subProduk($id){
  //   $hasil=$this->db->query("SELECT * FROM produk WHERE id='$id'");
  //       return $hasil->result();
  // }
  // function getHargaProduk($produk){
  //   $query=$this->db->query("SELECT * FROM produk WHERE id = '$produk'");
  //   return $query->row();
  // }
  //  function get_cekStock($id){
  //   $hasil=$this->db->query("SELECT * FROM stock_toko WHERE id='$id'");
  //       return $hasil->row();
  // }
  // function updateProduk($id,$set){
  //   $this->db->set('jml_stock', $set);
  //   $this->db->where('id', $id);
  //   $this->db->update('produk');
  // }
  // function get_data_chart_bahan(){
  //       $query = $this->db->query("SELECT nama_barang,SUM(jml_stock) AS stok FROM bahan_produksi GROUP BY nama_barang");
          
  //       if($query->num_rows() > 0){
  //           foreach($query->result() as $data){
  //               $hasil[] = $data;
  //           }
  //           return $hasil;
  //       }
  //   }
  //   function get_data_chart_produk(){
  //       $query = $this->db->query("SELECT nama_produk,SUM(jml_stock) AS stok FROM produk GROUP BY nama_produk");
          
  //       if($query->num_rows() > 0){
  //           foreach($query->result() as $data){
  //               $hasil[] = $data;
  //           }
  //           return $hasil;
  //       }
  //   }
}
