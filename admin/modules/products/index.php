<?php 

require_once __DIR__."/../../autoload/autoload.php"; 
require_once __DIR__."/../../layouts/header.php"; 
$products = $db->fetchAll('products');
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
                    <h1 class="text-center">Danh sách san pham</h1>

                </div>
        </div>
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Sale</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            foreach ($products as $product):?>
                            <tr>
                                <td><?= $product['id']  ?></td>
                                <td><?= $product['name']  ?></td>
                                <td><?= $product['price']  ?></td>
                                <td><?= $product['category_id']  ?></td>
                                <td><?= $product['sale']  ?></td>
                                <td><img src="<?php echo uploads()?>products/<?php echo $product['thumbnail'] ?>" width="80" height="80" alt=""></td>
                                <td><?= $product['content']  ?></td>
                                <td>
                                    <a  type="button" class="btn default btn-success" href=" <?php echo modules("products/edit.php?id=").$product['id'] ?>"><i class="fa fa-edit"></i>Sửa</a>
                                    <a type="button" class="btn btn-danger" href=" <?php echo modules("products/delete.php?id=").$product['id'] ?>"><i class="fa fa-times"></i>Xóa</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                        <nav aria-label="Page navigation example " class="pull-right">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                </div>
            </div>
        </div>

        <?php require_once __DIR__."/../../layouts/footer.php" ?>