<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ptit Store</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= baseUrl();?>public/admin/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= baseUrl();?>public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?= baseUrl();?>public/admin/css/sb-admin.min.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="<?= baseUrl();?>">Ptit Store</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="<?=baseUrl()?>admin">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Bảng điều khiển</span>
                    </a>
                </li>
               
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#admin" data-parent="#exampleAccordion1">
                        <i class="fa fas fa-user"></i>
                        <span class="nav-link-text">Quản lý Admin</span>
                    </a>

                    <ul class="sidenav-second-level collapse" id="admin">
                        <li>
                            <a href=" <?php echo modules("admin") ?>">Danh sách</a>
                        </li>
                        <li>
                            <a href=" <?php echo modules("admin/add.php") ?>">Thêm Admin</a>
                        </li>   
                    </ul>
                </li>
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#products" data-parent="#exampleAccordion1">
                        <i class="fa fa-circle-o"></i>
                        <span class="nav-link-text">Quản lý sản phẩm</span>
                    </a>

                    <ul class="sidenav-second-level collapse" id="products">
                        <li>
                            <a href=" <?php echo modules("products") ?>">Danh sách</a>
                        </li>
                        <li>
                            <a href=" <?php echo modules("products/add.php") ?>">Thêm san pham</a>
                        </li>   
                    </ul>
                </li>


                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#categories" data-parent="#exampleAccordion">
                         <i class="fa fa-list-alt"></i>
                        <span class="nav-link-text">Quản lí danh mục </span>
                    </a>
                    
                    <ul class="sidenav-second-level collapse" id="categories">
                        <li>
                            <a href=" <?php echo modules("categories") ?>">Danh sách</a>
                        </li>
                        <li>
                            <a href=" <?php echo modules("categories/add.php") ?>">Thêm danh mục</a>
                        </li>   
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope"></i>
                        <span class="d-lg-none">Messages
                            <span class="badge badge-pill badge-primary">12 New</span>
                        </span>
                        <span class="indicator text-primary d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">New Messages:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>David Miller</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                        </a>
                        
                        <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="d-lg-none">Alerts
                            <span class="badge badge-pill badge-warning">6 New</span>
                        </span>
                        <span class="indicator text-warning d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">New Alerts:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            
                            
                            <li class="nav-item">
                                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search for...">
                                        <span class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" > 
                                    <i class="fa fa-fw fa-sign-out"  ></i>Đăng Xuất</a>
                                </li>
                            </ul>
                        </div>
                    </nav>