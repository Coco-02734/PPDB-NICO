<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; 2020 - developed by
                <b><a href="https://www.instagram.com/nicofrnds_37/" target="_blank">Nico</a></b>
            </span>
        </div>
    </div>
</footer>
  <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Gelombang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?= form_open_multipart('user_admin/update_gel') ?>
                                <div class="form-group">
                                    <label for="gelombang">Gelombang Pendaftaran</label>
                                    <input type="number" class="form-control" id="gelombang" name="gelombang" value="<?= $gel['gelombang']; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script type='text/javascript' src='<?php echo base_url(); ?>ckeditor/ckeditor.js'></script>
<script src="<?= base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>js/ruang-admin.min.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url('assets/admin/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script>
    function klik() {
        var pro = document.getElementById("pro");
        var width = 1;
        var id = setInterval(kondisiPro, 2000);

        function kondisiPro() {
            if (width >= 100) {
                clearInterval(id);
            } else {
                width++;
                pro.style.width = width + '%';
                pro.innerHTML = width + "%";
                
                document.getElementById("status").innerHTML = "Mohon bersabar yah lagi diproses...„"
            }

            if (width == 100) {

                document.getElementById("status_ok").innerHTML = " Berhasil Di Upload, tunggu yah halaman akan dialihkan. ";
            }
        }
    }
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });

    var ckeditor = CKEDITOR.replace('isi', {
        height: '500px'
    });

    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('editable');
    $(document).ready(function() {
        //focusin berfungsi ketika cursor berada di dalam textbox modal langsung aktif
        $(".pencarian").focusin(function() {
            $("#myModal").modal('show'); // ini fungsi untuk menampilkan modal
        });
        $('#example').DataTable(); // fungsi ini untuk memanggil datatable
    });

    // function in berfungsi untuk memindahkan data kolom yang di klik menuju text box
    function masuk(txt, data) {
        document.getElementById('textbox').value = data; // ini berfungsi mengisi value  yang ber id textbox
        $("#myModal").modal('hide'); // ini berfungsi untuk menyembunyikan modal
    }
</script>

</body>

</html>