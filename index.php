	<?php  
	require_once __DIR__."/autoload/autoload.php";
	$sqlhomecate = "SELECT name,id FROM categories WHERE home = 1 ORDER BY updated_at ";
	$cateHome = $db -> fetchsql($sqlhomecate);
	$data=[];
	foreach ($cateHome as $item) {
		$cateId = intval($item['id']);
		$sql = "SELECT * FROM products WHERE category_id = $cateId";
		$prodHome= $db ->fetchsql($sql);
		  	// khai bao mang 2 chieu trong do 1 phan tu la 1 mang co name la ten danh muc va cac phan tu la cac san pham
		$data[$item['name']] = $prodHome; 
	} 

	?>	
	<?php  require_once __DIR__."/layouts/header.php";  ?>
	<div class="col-md-9 bor">
		<section id="slide" class="text-center" >
			<img src="<?php echo baseUrl(); ?>public/frontend/images/slide/sl3.jpg" class="img-thumbnail">
		</section>
		<section class="box-main1">
			<?php foreach ($variable as $key => $value):?>
				<h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Máy Canong </a> </h3>
			<div class="showitem">
				<div class="col-md-3 item-product bor">
					<a href="">
						<img src="<?php echo baseUrl(); ?>public/frontend/images/anh1.png" class="" width="100%" height="180">
					</a>
					<div class="info-item">
						<a href="">Lorem ipsum dolor sit amet</a>
						<p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
					</div>
					<div class="hidenitem">
						<p><a href=""><i class="fa fa-search"></i></a></p>
						<p><a href=""><i class="fa fa-heart"></i></a></p>
						<p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</section>
	</div>
	<?php  require_once __DIR__."/layouts/footer.php";  ?>

