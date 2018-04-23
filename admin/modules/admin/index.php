<?php 

require_once __DIR__."/../../autoload/autoload.php"; 
require_once __DIR__."/../../layouts/header.php"; 
$admin = $db->fetchAll('admin');
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
                    <h1 class="text-center">Danh sách Admin</h1>

                </div>
        </div>
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Avatar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            foreach ($admin as $item):?>
                            <tr>
                                <td><?= $item['id']  ?></td>
                                <td><?= $item['name']  ?></td>
                                <td><?= $item['address']  ?></td>
                                <td><?= $item['email']  ?></td>
                                <td><?= $item['password']  ?></td>
                                <td><?= $item['phone']  ?></td>
                                <td><img src="<?php echo uploads()?>admin/<?php echo $item['avatar'] ?>" width="80" height="80" alt=""></td>
                                <td><?= $item['status']  ?></td>
                                <td>
                                    <a  type="button" class="btn default btn-success" href=" <?php echo modules("admin/edit.php?id=").$item['id'] ?>"><i class="fa fa-edit"></i>Sửa</a>
                                    <a type="button" class="btn btn-danger" href=" <?php echo modules("admin/delete.php?id=").$item['id'] ?>"><i class="fa fa-times"></i>Xóa</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php require_once __DIR__."/../../layouts/footer.php" ?>