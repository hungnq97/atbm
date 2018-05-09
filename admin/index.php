<?php 
    session_start(); 
    require_once __DIR__."/../libraries/functions.php";
     if (isset($_SESSION['email'])) {
         header('location:'.baseUrl()."admin/dasboard.php");
    }
    
    $link=mysqli_connect("localhost","root","","shop") or die ();
    $error='';
    if(isset($_POST['btn-submit']))
    {       $email = $_POST['email'];
            $password = $_POST['password'];
            if ($email == "" || $password ==""){
                $error="Khong duoc de trong email va password";
            }else {
            
            $sql = "SELECT * FROM admin where email = '$email' AND password = '$password'";
            echo $sql;
            $query = mysqli_query($link,$sql);
            $num_rows = mysqli_num_rows($query);
            if($num_rows==0){
               $error="Sai mat khau hoac tai khoan";
                
            }else {
                $_SESSION['email'] = $email;
                header('location:'.baseUrl()."admin/dasboard.php");
            }
            
        }
    
    }    

 ?>
 <title>Ptit Store</title>
    <meta charset="utf-8">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../public/frontend/css/login.css">
<!-- Include the above in your HEAD tag -->
<body>
<section class="login-block">
    <div class="container">
    <div class="row">
        <div class="col-md-4 login-sec">
            <h2 class="text-center">Đăng nhập hệ thống PtitStore</h2>
            <p class="alert-danger"><?=$error ?></p>
            <form class="login-form" action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                    <input type="text" class="form-control" placeholder="" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                    <input type="password" class="form-control" placeholder="" name="password">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    <small>Remember Me</small>
                    </label>
                    <button type="submit" class="btn btn-login float-right" name="btn-submit">Submit</button>
                </div>
            </form>
            <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="">hungptit.com</a></div>
        </div>
        <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="../public/frontend/images/nhien.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="banner-text bg-white">
                                <h2 class="text-dark" >Hệ thống PtitStore</h2>
                                <p class="text-dark">Được thành lập vào tháng 3/2018 bởi nữ doanh nhân Nhân Trần.Một người thành đạt với nhiều hệ thống siêu thị công nghệ. Cô từng là sinh viên trường Học viện công nghệ Bưu chính viễn thông. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</body>