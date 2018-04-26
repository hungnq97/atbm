<?php 

require_once __DIR__."/../../autoload/autoload.php"; 

require_once __DIR__."/../../layouts/header.php"; 
$categories = $db->fetchAll('categories');
?>
<div class="content-wrapper">
    <div class="container-fluid">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="">Trang quản trị</a>
            </li>
            <li class="breadcrumb-item active">Danh sách danh mục</li>
        </ol>
        <div class="row">
                <div class="clearfix"></div>
                <?php require_once __DIR__."/../../../partials/notification.php";  ?>
                <div class="col-12">
                    <h1 class="text-center">Danh sách danh mục</h1>

                </div>
        </div>
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Banner</th>
                                <th>Home</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            foreach ($categories as $category):?>
                            <tr>
                                <td><?= $category['id']  ?></td>
                                <td><?= $category['name']  ?></td>
                                <td><?= $category['slug']  ?></td>
                                <td><?= $category['banner']  ?></td>
                                <td><a href="home.php?id=<?php echo $category['id'];?>" class ="btn btn-xs <?php echo ($category['home']==1) ? "btn-info" : "btn-danger" ?>">
                                    <?php echo ($category['home'] == 1) ? "hiển thị": "không hiển thị" ?>
                                </a></td>
                                <td><?= $category['created_at']  ?></td>
                                <td>
                                    <a  type="button" class="btn default btn-success" href=" <?php echo modules("categories/edit.php?id=").$category['id'] ?>"><i class="fa fa-edit"></i>Sửa</a>
                                    <a type="button" class="btn btn-danger" href=" <?php echo modules("categories/delete.php?id=").$category['id'] ?>"><i class="fa fa-times"></i>Xóa</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php require_once __DIR__."/../../layouts/footer.php" ?>