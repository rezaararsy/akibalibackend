<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Galeri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol> -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Galeri</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="" style="margin-bottom: 20px;">
                                <a href="<?php echo base_url(); ?>index.php/galeri/add"><button type="button"
                                        class="btn btn-warning">Tambah Galeri</button></a>

                            </div>
                            <table id="table_galeri" class="display">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Keterangan</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<form id="add-row-form" action="<?php echo base_url().'index.php/galeri/deleteGaleri'?>" method="post">
    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="filenya" class="form-control" placeholder="Kode Barang" required>
                    <input type="hidden" name="id" class="form-control" placeholder="Kode Barang" required>
                    <strong>Anda yakin mau menghapus record ini?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</form>