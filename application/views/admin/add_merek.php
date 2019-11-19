<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Merek</h1>
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
                            <h3 class="card-title">Tambah Merek</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(). 'index.php/merek/inputDataMerek'; ?>" method="post">

                                <label for="fname">Masukkan Nama Merek</label>
                                <input class="form-control data" type="text" id="fname" name="nama" placeholder="">

                                <label for="usia" style="margin-top:10px">Kategori</label>
                                <select style="margin-bottom: 10px;" class="data form-control" name="kategori"
                                    id="klinik">
                                    <option value="" hidden>-- Please Select -- </option>
                                    <option value="1">Motor</option>
                                    <option value="2">Mobil</option>
                                    <option value="3">Truck</option>
                                    <option value="4">Aksesoris</option>
                                </select>

                                <button type="sumbit" class="btn btn-warning" style="margin-top: 10px;">Tambah
                                    Data</button>
                            </form>
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