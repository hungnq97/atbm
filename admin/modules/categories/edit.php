<?php

require_once __DIR__."/../../autoload/autoload.php" ;

$id = intval(inputGet('id'));

    $edit =$db->fetchID("categories",$id); // LAY BAN GHI TRONG BANG CO ID 
    
    if(empty($edit)){
        $_SESSION['error'] = "Danh mục này không tồn tại!";
        redirectModules(categories);
    }
    
    if (isset($_POST['btn-submit'])) 
    {
        $data = [
        "name" => inputPost('name')
        ];

        if(inputPost('name')== ''){
            $error = " Mời bạn nhập đầy đủ tên danh mục";
        }
        
            $id_update = $db ->update("categories",$data,array("id"=>$id));
            if($id_update > 0){    
                $_SESSION['success'] = "Chinh sửa thành công!";
                redirectModules(categories);
                
            }else{
                
                $_SESSION['error'] = "Chỉnh sửa thất bại! Tên danh mục không thay đổi";
                redirectModules(categories);
            }
        
    }
    ?>

    <?php require_once __DIR__."/../../layouts/header.php" ?>
    <div class="content-wrapper">
        <div class="container-fluid">

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Trang quản trị</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="">Danh mục</a>
                </li>
                <li class="breadcrumb-item active">Thêm mới danh mục</li>
            </ol>
            <div class="row">
                <div class="clearfix"></div>
                <?php require_once __DIR__."/../../../partials/notification.php";  ?>
                <div class="col-12">
                    <form class="form-inline" action="" method="POST">
                      <div class="form-group col-md-2">
                        <h4>Tên danh mục :</h4>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="name" value="<?= $edit['name']; ?>">
                    </div>
                    <button type="submit" name="btn-submit" class="btn btn-info">Lưu</button>
                </form>                
            </div>
        </div>

        
    </div>
</div>

<?php require_once __DIR__."/../../layouts/footer.php" ?>