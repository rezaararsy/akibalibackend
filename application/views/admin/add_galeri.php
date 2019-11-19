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
                            <h3 class="card-title">Tambah Galeri</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(). 'index.php/galeri/inputDataGaleri'; ?>" method="post"
                                enctype="multipart/form-data">

                                <label for="fname">Masukkan Keterangan</label>
                                <input class="form-control data" type="text" id="fname" name="keterangan"
                                    placeholder="">

                                <label for="fname">Gambar</label><br>
                                <!--<input style="border:none;"  class="form-control data" type="file" id="lname" name="foto">-->

                                <img id="image-preview" alt="image preview" />
                                <br />
                                <input type="file" class="form-control data" id="image-source"
                                    onchange="previewImage();" name="foto" />

                                <button type="sumbit" class="btn btn-warning" style="margin-top: 10px;">Selesai</button>
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
<script>
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
</script>
<!-- /.content-wrapper -->