<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Your Website 2018</small>
        </div>
    </div>
</footer>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bạn muốn đăng xuất?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bấm vào nút Đăng Xuất để kết thúc phiên làm việc và trở lại trang đăng nhập</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                <a class="btn btn-primary" href="<?php echo baseUrl()."admin/logout.php" ?>">Đăng Xuất</a>
            </div>
        </div>
    </div>
</div>

<script src="<?= baseUrl(); ?>/public/admin/js/jquery.min.js"></script>
<script src="<?=baseUrl(); ?>public/admin/js/bootstrap.bundle.min.js"></script>

<script src="<?=baseUrl(); ?>/public/admin/js/jquery.easing.min.js"></script>

<script src="<?=baseUrl(); ?>/shop/public/admin/js/sb-admin.min.js"></script>
</div>
</body>
</html>