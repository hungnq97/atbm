<?php  require_once __DIR__."/../autoload/autoload.php";  
$categories = $db->fetchAll('categories');
?>

<html>
<head>
    <title>Ptit Store</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo baseUrl(); ?>public/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo baseUrl(); ?>public/frontend/css/bootstrap.min.css">
    <script  src="<?php echo baseUrl(); ?>public/frontend/js/jquery-3.2.1.min.js"></script>
    <script  src="<?php echo baseUrl(); ?>public/frontend/js/bootstrap.min.js"></script>
    <!---->
    <link rel="stylesheet" type="text/css" href="<?php echo baseUrl(); ?>public/frontend/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo baseUrl(); ?>public/frontend/css/slick-theme.css"/>
    <!--slide-->
    <link rel="stylesheet" type="text/css" href="<?php echo baseUrl(); ?>public/frontend/css/style.css">
</head>
<body>
    <div id="wrapper">
        <!---->
        <!--HEADER-->
        <div id="header">
            <div id="header-top">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-6" id="header-text">
                            <a>Hungptit</a><b>Student at Post and Telecommunications Institude of Technology</b>
                        </div>
                        <div class="col-md-6">
                            <nav id="header-nav-top">
                                <ul class="list-inline pull-right" id="headermenu">
                                    <li>
                                        <a href=""><i class="fa fa-unlock"></i> Login</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-user"></i> My Account <i class="fa fa-caret-down"></i></a>
                                        <ul id="header-submenu">
                                            <li><a href="">Contact</a></li>
                                            <li><a href="">Cart</a></li>
                                            <li><a href="">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-share-square-o"></i> Checkout</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" id="header-main">
                    <div class="col-md-5">
                        <form class="form-inline">
                            <div class="form-group">
                                <label>
                                    <select class="form-control " name="category_id">
                                    <option value="">Danh muc</option>
                                        <?php foreach ($categories as $item) :?>
                                            
                                            <option  value="<?php echo $item['id'];?>"><a href="../danh-muc-san-pham.php?id=<?php echo $item['id']?>"><?php echo $item['name'] ?></a></option>
                                        <?php endforeach; ?>
                                    </select>
                                </label>
                                <input type="text" name="keywork" placeholder=" input keywork" class="form-control">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <img src="<?php echo baseUrl(); ?>public/frontend/images/logo0.png">
                        </a>
                    </div>
                    <div class="col-md-3" id="header-right">
                        <div class="pull-right">
                            <div class="pull-left">
                                <i class="glyphicon glyphicon-phone-alt"></i>
                            </div>
                            <div class="pull-right">
                                <p id="hotline">HOTLINE</p>
                                <p>0982975372</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END HEADER-->
        <!--MENUNAV-->
        <div id="menunav">
            <div class="container">
                <nav>
                    <div class="home pull-left">
                        <a href="<?php echo baseUrl(); ?>">Trang chủ</a>
                    </div>
                    <!--menu main-->
                    <ul id="menu-main">
                        <?php $categories = $db->fetchAll('categories'); ?>  
                        <?php foreach ($categories as $category):  ?>
                            <li>
                                <a href="<?php echo baseUrl();?>danh-muc-san-pham.php?id=<?php echo $category['id']?>">
                                    <?=$category['name']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>    
                    </ul>
                    <!-- end menu main-->
                    <!--Shopping-->
                    <ul class="pull-right" id="main-shopping">
                        <li>
                            <a href=""><i class="fa fa-shopping-basket"></i> giỏ hàng </a>
                        </li>
                    </ul>
                    <!--end Shopping-->
                </nav>
            </div>
        </div>
        <!--ENDMENUNAV-->
        <div id="maincontent">
            <div class="container">
                <div class="col-md-3  fixside" >
                    <div class="box-left box-menu" >
                        <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
                        <ul>
                            <?php $categories = $db->fetchAll('categories'); ?>  
                            <?php $categories = $db->fetchAll('categories'); ?>  
                            <?php foreach ($categories as $category):  ?>
                                <li>
                                    <a href="<?php echo baseUrl();?>danh-muc-san-pham.php?id=<?php echo $category['id']?>">
                                        <?=$category['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>                           </ul>
                    </div>
                    <div class="box-left box-menu">
                        <h3 class="box-title"><i class="fa fa-bell"></i>  Sản phẩm mới </h3>

                        <ul>
                            <?php foreach ($productNew as $item): ?>
                                <li class="clearfix">
                                    <a href="">
                                        <img src="<?php echo uploads()?>/products/<?php echo $item['thumbnail'] ?>" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name"><?= $item['name'] ?></p>
                                            <b class="price">Giảm giá: <?= number_format($item['sale'])?></b><br>
                                            <b class="sale">Giá gốc: <?= number_format($item['price'])?></b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>  
                            <?php endforeach; ?>
                                 
                        </ul>
                        <!-- </marquee> -->
                    </div> 

                    <div class="box-left box-menu">
                        <h3 class="box-title"><i class="fa fa-calendar"></i>  Sản phẩm hot </h3>

                        <ul>
                            <?php foreach ($productNew as $item): ?>
                                <li class="clearfix">
                                    <a href="">
                                        <img src="<?php echo uploads()?>/products/<?php echo $item['thumbnail'] ?>" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name"><?= $item['name'] ?></p>
                                            <b class="price">Giảm giá: <?= number_format($item['sale'])?></b><br>
                                            <b class="sale">Giá gốc: <?= number_format($item['price'])?></b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>  
                            <?php endforeach; ?>
                                 
                        </ul>
                        <!-- </marquee> -->
                    </div>
                </div>    
