<?php
    
    require_once __DIR__."/../../autoload/autoload.php" ;
    if (isset($_POST['btn-submit'])) 
    {
        $data = [
            "name" => inputPost('name')
        ];
        $error='';

        if(inputPost('name') == ""){
            $error = " Mời bạn nhập đầy đủ tên danh mục";
        }
        if($error == ''){
            $id_insert = $db ->insert("categories",$data);
            $_SESSION['success'] = "Thêm mới thành công!";
            redirectModules(categories);
        }else{
            
            $_SESSION['error'] = "Thêm mới thất bại!";
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
            <div class="col-12">
            <form class="form-inline" action="" method="POST">
              <div class="form-group col-md-2">
                <h4>Tên danh mục :</h4>
              </div>
              <div class="form-group col-md-4">
                <input type="text" class="form-control" name="name">
                <?php if (isset($error)):?>
                    <p class="text-danger"><?= $error; ?></p>
                <?php endif ?>
              </div>
              <button type="submit" name="btn-submit" class="btn btn-primary">Thêm</button>
            </form>                
            </div>
        </div>

       
    </div>
</div>

<?php require_once __DIR__."/../../layouts/footer.php" ?>