<?php 

    function baseUrl() {
        return $url = "http://localhost/shop/";
    }
 ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="span3 well">
        <center>
        
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">Giới thiệu về tôi</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="<?php echo baseUrl(); ?>public/frontend/images/ptit.png" name="aboutme" width="140" height="140" border="0" class="img-circle">
                    <hr>
                    <h3 class="media-heading"> An Toàn Bảo Mật Hệ Thống Thông Tin</h3>
                    <ul class="list-group">
                      <li class="list-group-item"><h4>Danh sách thành viên</h4></li>
                      <li class="list-group-item">Nguyễn Quốc Hùng</li>
                      <li class="list-group-item">Tô Minh Hiển</li>
                      <li class="list-group-item">Nguyễn Đình Dũng</li>
                      <li class="list-group-item">Nguyễn Quốc Hùng</li>
                    </ul>
                    <span><strong>Kỹ Năng: </strong></span>
                        <span class="label label-warning">HTML5/CSS3</span>
                        <span class="label label-info">Python</span>
                        <span class="label label-info">PHP</span>
                        <span class="label label-success">Java</span>
                    </center>
                    <hr>
                    <center>
                    
                        <p class="text-left"><strong>Giới thiệu: </strong><br>
                        Nhóm chúng tôi gồm 4 sinh viên của lớp D15CN06, Đam mê và thích tìm tòi những thứ về công nghệ.Đây là project về môn
                        An toàn và bảo mật hệ thống thông tin của chúng tôi.
                        </p>
                    
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Liên Hệ Chúng Tôi</button>
                    </center>
                </div>
            </div>
        </center>
    </div>
    <!-- Modal -->
    
</div>