<?php  require_once __DIR__."/autoload/autoload.php";
$error = [];

$data =
[
'name' => inputPost("name"),
'email' => inputPost("email"),
'password' =>(inputPost("password")),
'address'=> inputPost("address"),
'phone' => inputPost("phone")

];


if($_SERVER['REQUEST_METHOD'] == 'POST'){


	if($data['name'] == ''){
		$error['name'] = "Tên không được để trống";

	}


	if($data['email'] == ''){
		$error['email'] = "email không được để trống";
	}


	if($data['phone'] == ''){
		$error['phone'] = "phone không được để trống";
	}



	if($data['address'] == ''){
		$error['address'] = "address không được để trống";
	}

	if($data['password'] == ''){
		$error['password'] = "password không được để trống";
	}


	if($error==[]){

		$id_insert = $db -> insert("users",$data);
		$_SESSION['success']="Đăng ký thành công ! Vui lòng đăng nhập.";
		header('Location: '.baseUrl()."dang-nhap.php");
	}

}

?>
<?php  require_once __DIR__."/layouts/header.php";  ?>
<div class="col-md-9 bor">
	<section id="slide" class="text-center" >
		<img src="<?php echo baseUrl(); ?>public/frontend/images/slide/sl3.jpg" class="img-thumbnail">
	</section>
	<section class="box-main1">
		<div class="boxtitle">
			<div class="heading_title">Đăng Ký Thành Viên</div>
			<p> <span class="bg_title"></span></p>
		</div>
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group ">
				<label class="col-md-3  control-label"><b>Tên Thành Viên</b></label>
				<div class="col-md-4">
					<input type="text"  class="form-control" name="name" placeholder="Mời nhập tên của bạn vào " >
				</div>
				<br>
				<?php if (isset($error['name'])):?>
					<p class="text-danger"><?= $error['name']; ?></p>
				<?php endif ?>
			</div>

			<div class="form-group ">
				<label class="col-md-3  control-label"><b>Email</b></label>
				<div class="col-md-4">
					<input type="email"  class="form-control" name="email" placeholder="Mời nhập email của bạn vào ">
				</div>
				<?php if (isset($error['email'])):?>
					<p class="text-danger"><?= $error['email']; ?></p>
				<?php endif ?>
			</div>

			<div class="form-group ">
				<label class="col-md-3  control-label"><b>Password</b></label>
				<div class="col-md-4">
					<input type="password"  class="form-control" name="password" placeholder="Mời nhập mật khẩu của bạn vào " >
				</div>
				<?php if (isset($error['password'])):?>
					<p class="text-danger"><?= $error['password']; ?></p>
				<?php endif ?>
			</div>

			<div class="form-group ">
				<label class="col-md-3  control-label"><b>Địa chỉ</b></label>
				<div class="col-md-4">
					<input type="text"  class="form-control" name="address" placeholder="Mời nhập địa chỉ của bạn vào " >
				</div>
				<?php if (isset($error['address'])):?>
					<p class="text-danger"><?= $error['address']; ?></p>
				<?php endif ?>
			</div>

			<div class="form-group ">
				<label class="col-md-3  control-label"><b>Số điện thoại</b></label>
				<div class="col-md-4">
					<input type="number"  class="form-control" name="phone" placeholder="Mời nhập số điện thoại của bạn vào " >
				</div>
				<?php if (isset($error['phone'])):?>
					<p class="text-danger"><?= $error['phone']; ?></p>
				<?php endif ?>
			</div>
			<div class="text-center">
				<button type="submit" name="btn-submit" class="btn btn-success">Đăng ký</button>
				<hr>
			</div>

			
		</form>
	</section>
</div>
<?php  require_once __DIR__."/layouts/footer.php";  ?>

