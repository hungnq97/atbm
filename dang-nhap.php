<?php  require_once __DIR__."/autoload/autoload.php";  
	$Allusers = $db -> fetchAll("users"); 

	if(isset($_POST['btn-submit']))
	{
		foreach($Allusers as $user){
			if(inputPost('email') == $user['email'] && inputPost('password') == $user['password']){
				echo "Dang nhap thanh cong";
				redirectModules("users");
			}
			
		}
	}
?>
<?php  require_once __DIR__."/layouts/header.php";  ?>
<div class="col-md-9 bor">
	<section id="slide" class="tẽt-center" >
		<img src="<?php echo baseUrl(); ?>public/frontend/images/slide/sl3.jpg" class="img-thumbnail">
	</section>
	<section class="box-main1">
		<div class="boxtitle">
			<div class="heading_title">Đăng Nhập</div>
			<p> <span class="bg_title"></span></p>
		</div>
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group ">
				<label class="col-md-4  control-label"><b>Email</b></label>
				<div class="col-md-4">
					<input type="email"  class="form-control" name="email" ">
				</div>
			</div>

			<div class="form-group ">
				<label class="col-md-4  control-label"><b>Password</b></label>
				<div class="col-md-4">
					<input type="password"  class="form-control" name="password" ">
				</div>
			</div>

			<div class="text-center">
				<button type="submit" name="btn-submit" class="btn btn-success">Đăng Nhập</button>
				<hr>
			</div>

			
		</form>
	</section>
</div>
<?php  require_once __DIR__."/layouts/footer.php";  ?>

