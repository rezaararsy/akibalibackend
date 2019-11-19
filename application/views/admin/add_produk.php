<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Produk</h1>
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
                            <h3 class="card-title">Data Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(). 'index.php/produk/inputDataProduksi'; ?>" method="post"
                                enctype="multipart/form-data">

                                <label for="fname">Masukkan Nama Produk</label>
                                <input class="form-control data" type="text" id="fname" name="nama" placeholder="">

                                <label for="fname">Masukkan Harga </label>
                                <input class="form-control data" type="number" id="fname" name="harga" placeholder="">

                                <label for="fname">Keterangan</label><br>
                                <textarea name="keterangan" id="editor">
                                </textarea>

                                <br>

                                <label for="usia" style="margin-top:10px">Kategori : </label>
                                <!-- <select style="margin-bottom: 10px;" class="data form-control" name="kategori"
                                    id="klinik">
                                    <option value="" hidden>-- Please Select -- </option>
                                    <option value="1">Motor</option>
                                    <option value="2">Mobil</option>
                                    <option value="3">Truck</option>
                                    <option value="4">Aksesoris</option>
                                </select> -->
                                <select class="form-control" name="kategori" id="category" required>
                                    <option value="">Pilih</option>
                                    <?php foreach($category as $row):?>
                                    <option value="<?php echo $row->id_kategori;?>"><?php echo $row->nama;?>
                                    </option>
                                    <?php endforeach;?>
                                </select>

                                <div class="form-group">
                                    <label>Merek</label>
                                    <select class="form-control" id="sub_category" name="merek" required>
                                        <option>No Selected</option>

                                    </select>
                                </div>




                                <label for="fname">Gambar</label><br>
                                <!--<input style="border:none;"  class="form-control data" type="file" id="lname" name="foto">-->
                                <img id="image-preview" alt="image preview" />
                                <br />
                                <input type="file" class="form-control data" id="image-source"
                                    onchange="previewImage();" name="foto" />

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

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
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