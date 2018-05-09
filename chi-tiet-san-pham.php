<?php  
require_once __DIR__."/autoload/autoload.php";  

	// $id = intval(inputGet("id"));
	// $product = $db ->fetchID("products",$id);
	$link=mysqli_connect("localhost","root","","shop") or die ();	
	$id = $_GET['id'];


	$sql = "SELECT * FROM products WHERE id=".$id;
	
	
	$product = $db->fetchID("products",$id);
?>

<?php  require_once __DIR__."/layouts/header.php";  ?>

<div class="col-md-9 bor">
	<section class="box-main1">
		<div class="col-md-6 text-center">
			<img src="<?php echo uploads()?>/products/<?php echo $product['thumbnail'] ?>" class="img-responsive bor" id="imgmain" width="100%" height="370" data-zoom-image="<?php echo baseUrl();?>/public/frontend/images/16-270x270.png">
			<ul class="text-center bor clearfix" id="imgdetail">
				<li>
					<img src="<?php echo uploads()?>/products/<?php echo $product['thumbnail'] ?>" class="img-responsive pull-left" width="80" height="80">
				</li>
				<li>
					<img src="<?php echo uploads()?>/products/<?php echo $product['thumbnail'] ?>" class="img-responsive pull-left" width="80" height="80">
				</li>
				<li>
					<img src="<?php echo uploads()?>/products/<?php echo $product['thumbnail'] ?>" class="img-responsive pull-left" width="80" height="80">
				</li>
				<li>
					<img src="<?php echo uploads()?>/products/<?php echo $product['thumbnail'] ?>" class="img-responsive pull-left" width="80" height="80">
				</li>
			</ul>
		</div>
		<div class="col-md-6 bor" style="margin-top: 20px;padding: 30px;">
			<ul id="right">
				<li>
					<h2> <?php echo $product['name'] ?> </h2>
				</li>

				<li>
					<p>Giá thị trường : <strike class="sale-sp"> <?php echo $product['price'] ?>.VNĐ</strike></p> 
					<p>PtitStore :
						<b class="price-sp"><?php echo $product['sale'] ?>.VNĐ
						</b>
					</p>
				</li>
				<li>
					<p class=" btn btn-block bg-success"> Khuyến mãi </p>
				</li>
				<li>
					<p>- Tặng balo, chuột không dây</p>
				</li>

				<li>
					<p>- Bảo hành: Thân máy 6 tháng, Pin & Sạc 03 tháng</p>
				</li>

				<li>
					<p>- Đổi miễn phí 30 ngày đầu nếu lỗi do NSX.</p>
				</li>


				<li><a href="" class="btn btn-block buy">Đặt mua ngay</a></li>
				<b class="price-sp">
				</b>
			</ul>
			<b class="price">
			</b>
		</div>
		<b class="price">
		</b>
	</section>
	<b class="price">
		<div class="col-md-12" id="tabdetail">
			<div class="row">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Mô tả sản phẩm </a></li>
					<li><a data-toggle="tab" href="#menu1">Thông tin khác </a></li>
					<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
					<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
				</ul>
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<h3>Nội dung</h3>
						<p><?php echo $product['content'] ?></p>
						</div>
						<div id="menu1" class="tab-pane fade">
							<h3> Thông tin khác </h3>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div id="menu2" class="tab-pane fade">
							<h3>Menu 2</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						</div>
						<div id="menu3" class="tab-pane fade">
							<h3>Menu 3</h3>
							<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						</div>
					</div>
				</div>
			</div>
		</b>
	</div>
	<?php  require_once __DIR__."/layouts/footer.php";  ?>

