	<?php  
	require_once __DIR__."/autoload/autoload.php";
	$sqlhomecate = "SELECT name,id FROM categories WHERE home = 1 ORDER BY updated_at "; // lay ra cac danh muc dc hien thi tren trang chu
	$cateHome = $db -> fetchsql($sqlhomecate); // catehome luu gia tri cau sql
	$data=[];
	foreach ($cateHome as $item) {
		$cateId = intval($item['id']);
		$sql = "SELECT * FROM products WHERE category_id = $cateId";
		$prodHome= $db ->fetchsql($sql); // lay ra cac san pham thuoc danh muc dc hien thi
		  	// khai bao mang 2 chieu trong do 1 phan tu la 1 mang co name la ten danh muc va cac phan tu la cac san pham
		$data[$item['name']] = $prodHome;
		

	}
	
	?>	
	<?php  require_once __DIR__."/layouts/header.php";  ?>
	<div class="col-md-9 bor">
		<section id="slide" class="text-center" >
			<img src="<?php echo baseUrl(); ?>public/frontend/images/slide2.png" class="img-thumbnail">
		</section>
		<section class="box-main1">
			<?php foreach ($data as $key => $value): ?>
				<div class="boxtitle">
					<div class="heading_title"><?php echo $key; ?></div>
					<p><span class="bg_title"</span></p>
					<?php foreach ($cateHome as $cate): ?>
					<div class="listmore">
					<a href="danh-muc-san-pham.php?id=<?php echo $cate['id'] ?>">Xem thêm</a>
					</div>
					<?php endforeach; ?>
				</div>
				<?php $count = 0; ?>
				<div class="showitem clearfix">
					<?php foreach ($value as  $item):?>
						<div class="col-md-3 item-product bor">
							<a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
								<img src="<?php echo uploads()?>/products/<?php echo $item['thumbnail'] ?>" class="" width="100%" height="180">
							</a>
							<div class="info-item">
								<a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
								<p><strike class="sale">Giá gốc: <?php echo number_format($item['price']) ?>.VND</strike> </p>
								<p><b class="price">Chỉ còn :<?php echo number_format($item['sale']) ?>.VND</b></p>
							</div>
							<div class="hidenitem">
								<p><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
								<p><a href=""><i class="fa fa-heart"></i></a></p>
								<p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
							</div>
						</div>

						<?php $count++; if($count == 4) break; ?>
					<?php endforeach;?>


				</div>

			<?php endforeach; ?>
		</section>
	</div>
	<?php  require_once __DIR__."/layouts/footer.php";  ?>
