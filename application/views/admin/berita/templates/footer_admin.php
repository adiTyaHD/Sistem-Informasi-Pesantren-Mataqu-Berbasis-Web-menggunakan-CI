<!-- Footer -->

<footer class="sticky-footer bg-white fixed-buttom">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Pesantren Al-Quran Mah'ad Mataqu</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->


<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin untuk Logout ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" jika anda ingin keluar sekarang </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/') ?>vendor/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/dist/myscript.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.pkgd.min.js"></script>

<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/sb-admin-2.min.js"> </script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/demo/chart-pie-demo.js"></script>

<!-- AJAX dan JQ-->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);

    });




    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');


        $.ajax({
            url: "<?= base_url('admin/changeakses'); ?>",
            type: 'post',
            data: {
                'menuId': menuId,
                'roleId': roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/role_akses/'); ?>" + roleId;
            }
        });
    });
    $(function() {
        $('textarea').froalaEditor()
    });

    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
</body>

</html>