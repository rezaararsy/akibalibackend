<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 AKiBali.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>asset/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#table_galeri').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            serverSide: true,
            ajax: { "url": "<?php echo base_url().'index.php/galeri/data_json_galeri'?>", "type": "POST" },
            columns: [
                { "data": "id" },
                { "data": "nama" },
                {
                    "data": null,
                    render: function (data, type, row, meta) {
                        return '<img src="<?php echo base_url();?>' + row['gambar'] + '"style="height:100px;width:100px;" />';
                    }
                },
                { "data": "view" }
            ]
        });
    });

    $('#table_galeri').on('click', '.hapus_record', function () {
        var kode = $(this).data('kode');
        var filenya = $(this).data('filenya');
        $('#ModalHapus').modal('show');
        $('[name="id"]').val(kode);
        $('[name="filenya"]').val(filenya);

        // var kode = $(this).data('kode');
        // $('#ModalHapus').modal('show');
        // $('[name="id"]').val(kode);
    });

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#table_merek').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            serverSide: true,
            ajax: { "url": "<?php echo base_url().'index.php/merek/data_json_merek'?>", "type": "POST" },
            columns: [
                { "data": "id_merek" },
                { "data": "nama" },
                {
                    "data": null,
                    render: function (data, type, row, meta) {
                        if (row['kategori'] == 1) {
                            return 'Motor'
                        } else if (row['kategori'] == 2) {
                            return 'Mobil'
                        } else if (row['kategori'] == 3) {
                            return 'Truck'
                        } else if (row['kategori'] == 4) {
                            return 'Aksesoris'
                        }
                    }
                },
                { "data": "view" }
            ]
        });
    });

    $('#table_merek').on('click', '.hapus_record', function () {
        var kode = $(this).data('kode');
        $('#ModalHapus').modal('show');
        $('[name="id"]').val(kode);
    });

    $('#table_merek').on('click', '.edit_record', function () {
        var kode = $(this).data('kode');
        var nama = $(this).data('nama');
        $('#ModalUpdate').modal('show');
        $('[name="id"]').val(kode);
        $('[name="nama"]').val(nama);
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#table_produk').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            serverSide: true,
            ajax: { "url": "<?php echo base_url().'index.php/produk/data_json_produk'?>", "type": "POST" },
            columns: [

                { "data": "id" },
                { "data": "nama" },
                { "data": "keterangan" },
                {
                    "data": null,
                    render: function (data, type, row, meta) {
                        return '<img src="<?php echo base_url();?>' + row['gambar'] + '"style="height:100px;width:100px;" />';
                    }
                },
                { "data": "harga" },
                { "data": "view" }
            ],
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "order": [[1, 'asc']]

        });

        // t.on('order.dt search.dt', function () {
        //     t.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
        //         cell.innerHTML = i + 1;
        //     });
        // }).draw();
    });



    $('#table_produk').on('click', '.hapus_record', function () {
        var kode = $(this).data('kode');
        var filenya = $(this).data('filenya');
        $('#ModalHapus').modal('show');
        $('[name="id"]').val(kode);
        $('[name="filenya"]').val(filenya);
    });

    $('#table_produk').on('click', '.edit_record', function () {
        var kode = $(this).data('kode');
        var nama = $(this).data('nama');
        var harga = $(this).data('harga');
        var gambar = $(this).data('gambar');
        var keterangan = $(this).data('keterangan');
        $('#ModalUpdate').modal('show');
        $('[name="id"]').val(kode);
        $('[name="nama"]').val(nama);
        $('[name="harga"]').val(harga);
        $('[name="gambar"]').val(gambar);
        $('[name="keterangan"]').val(keterangan);
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#category').change(function () {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('/produk/get_sub_category');?>",
                method: "POST",
                data: { id: id },
                async: true,
                dataType: 'json',
                success: function (data) {
                    console.log(data);

                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id_merek + '>' + data[i].nama + '</option>';
                    }
                    $('#sub_category').html(html);

                }
            });
            return false;
        });

    });
</script>
</body>

</html>