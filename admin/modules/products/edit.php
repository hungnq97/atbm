<?php

require_once __DIR__."/../../autoload/autoload.php" ;
$categories = $db ->fetchAll("categories");

// $id = intval(inputGet('id'));
  $id = $_GET['id'];
    $edit =$db->fetchID("products",$id); // LAY BAN GHI TRONG BANG CO ID 
    
    if(empty($edit)){
        $_SESSION['error'] = "San pham này không tồn tại!";
        redirectModules(products);
    }
    
    if (isset($_POST['btn-submit'])) 
    {
       $data = [
       "name" => inputPost('name'),
       "category_id" => inputPost("category_id"),
       "price" => inputPost("price"),
       "content" => inputPost("content"),
       "sale" => inputPost("sale")
       ];
       $error=[];

       if(inputPost('name') == ""){
           $error['name'] = " Mời bạn nhập đầy đủ tên ";
       }

       if(inputPost('category_id') == ""){
           $error['category_id'] = " Mời bạn nhập đầy đủ tên danh mục";
       }

       if(inputPost('price') == ""){
           $error['price'] = " Mời bạn nhập đầy đủ gia";
       }

       if(inputPost('content') == ""){
           $error['content'] = " Mời bạn nhập đầy đủ  noi dung";
       }

       if(inputPost('sale') == ""){
           $error['sale'] = " Mời bạn nhập 1";
       }

       if( !isset($_FILES['thumbnail'])){
         $error['thumbnail'] = " Mời bạn nhập anh";
     }


     if($error == [])
     {   
        if (isset($_FILES['thumbnail'])){

            $file_name = $_FILES['thumbnail']['name']; // ten file
            $file_tmp = $_FILES['thumbnail']['tmp_name'];// ten duoi file
            $file_type = $_FILES['thumbnail']['type']; //loai file
            $file_error = $_FILES['thumbnail']['error'];
            
            if($file_error == 0){
                $part = ROOT."products/";
                $data['thumbnail']=$file_name;
            }

            $id_update = $db ->update("products",$data,array("id"=>$id));
            if ($id_update > 0){
                move_uploaded_file($file_tmp,$part.$file_name);
                $_SESSION['success'] = "Thêm mới thành công!";
                redirectModules(products);
            }
            else{

                $_SESSION['error'] = "Chỉnh sửa thất bại!  không thay đổi";
                redirectModules(products);
            }
        }

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
                <a href="">San pham</a>
            </li>
            <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
        </ol>
        <div class="row">
            <div class="col-md-10 offset-2">
                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <label class=" control-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" value="<?=$edit['name']?>">
                            <?php if (isset($error['name'])):?>
                                <p class="text-danger"><?= $error['name']; ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">  
                        <div class="col-sm-8">  
                            <label class="control-label">Gía sản phẩm</label>
                            <input type="number" class="form-control" placeholder="9.000.000" name="price" value="<?= $edit['price']?>">
                            <?php if (isset($error['price'])):?>
                                <p class="text-danger"><?= $error['price']; ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                            <label class=" control-label">Danh mục sản phẩm</label>
                            <select class="form-control " name="category_id">
                                <option value="">--Moi ban chon danh muc san pham--</option>
                                <?php foreach ($categories as $item) :?>
                                    <option value="<?php echo $item['id']?>" <?php echo $edit['category_id'] == $item['id'] ? "selected ='selected'" : '' ?> >
                                        <?php echo $item['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>

                            <?php if (isset($error['category_id'])):?>
                                <p class="text-danger"><?= $error['category_id']; ?></p>
                            <?php endif ?>
                        </div>      
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">giam gia</label>
                            <input type="text" class="form-control" name="sale" value="<?= $edit['sale']?>">
                            <?php if (isset($error['sale'])):?>
                                <p class="text-danger"><?= $error['sale']; ?></p>
                            <?php endif ?>
                        </div>      
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">

                            <label class="control-label ">Hinh anh</label>
                            <br>
                            <img src="<?php echo uploads()?>products/<?php echo $edit['thumbnail']?>" width="80" height="80" alt="">
                            <input type="file" class="form-control" name="thumbnail" >
                            <?php if (isset($error['thumbnail'])):?>
                                <p class="text-danger"><?= $error['thumbnail']; ?></p>
                            <?php endif ?>

                        </div>      
                    </div>

                    <div class="form-group">  
                      <div class="col-sm-8">  
                          <label class="control-label">Noi dung</label>
                          <textarea name="content" class="form-control" rows="5" ><?= $edit['content']?></textarea>
                          <?php if (isset($error['content'])):?>
                              <p class="text-danger"><?= $error['content']; ?></p>
                          <?php endif ?>
                      </div>
                  </div>

                  <div class="form-group col-sm-8">
                    <br>
                    <button type="submit" name="btn-submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>         
        </div>
    </div>
</div>
</div>

<?php require_once __DIR__."/../../layouts/footer.php" ?>