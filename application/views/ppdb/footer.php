</div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="<?= base_url('assets/daftar/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/daftar/') ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/daftar/') ?>vendor/bootstrap/js/popper.js"></script>
<script src="<?= base_url('assets/daftar/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/daftar/') ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/daftar/') ?>vendor/daterangepicker/moment.min.js"></script>
<script src="<?= base_url('assets/daftar/') ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/daftar/') ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/daftar/') ?>js/main.js"></script>
<script>
    $('.trash').click(function() {
        var id = $(this).data('id');
        $('#modalDelete').attr('href', 'delete-cover.php?id=' + id);
    })
</script>



</body>

</html>