<?php

require_once __DIR__."/../../autoload/autoload.php" ;

if (isset($_POST['btn-submit'])) 
{
    $data = [
    "name" => inputPost('name'),
    "address" => inputPost("address"),
    "phone" => inputPost("phone"),
    "email"  => inputPost("email"),
    "password" => inputPost("password"),
    "level" => inputPost("level")
    ];
    $error=[];

    if(inputPost('name') == ""){
        $error['name'] = " Mời bạn nhập đầy đủ tên ";
    }

    if(inputPost('address') == ""){
        $error['address'] = " Mời bạn nhập đầy đủ tên danh mục";
    }

    if(inputPost('phone') == ""){
        $error['phone'] = " Mời bạn nhập đầy đủ gia";
    }

    if(inputPost('password') == ""){
        $error['password'] = " Mời bạn nhập đầy đủ  noi dung";
    }
    if(inputPost('email') == ""){
        $error['email'] = " Mời bạn nhập đầy đủ  noi dung";
    }

    if(inputPost('level') == ""){
        $error['level'] = " Mời bạn nhập 1";
    }

    if( !isset($_FILES['avatar'])){
      $error['avatar'] = " Mời bạn nhập anh";
  }

  if($error == [])
  {   
    if (isset($_FILES['avatar'])){

            $file_name = $_FILES['avatar']['name']; // ten file
            $file_tmp = $_FILES['avatar']['tmp_name'];// ten duoi file
            $file_type = $_FILES['avatar']['type']; //loai file
            $file_error = $_FILES['avatar']['error'];
            
            if($file_error == 0){
                $part = ROOT."admin/";
                $data['avatar']=$file_name;
            }

            $id_insert = $db ->insert("admin",$data);
            if ($id_insert){
                move_uploaded_file($file_tmp,$part.$file_name);
                $_SESSION['success'] = "Thêm mới thành công!";
                redirectModules(admin);
            }
            else{

                $_SESSION['error'] = "Thêm mới thất bại!";
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
            <li class="breadcrumb-item active">Thêm mới admin</li>
        </ol>
        <div class="row">
            <div class="col-md-10 offset-2">
                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                        <div class="col-sm-8">
                            <label class=" control-label">Tên admin</label>
                            <input type="text" class="form-control" name="name">
                            <?php if (isset($error['name'])):?>
                                <p class="text-danger"><?= $error['name']; ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">  
                        <div class="col-sm-8">  
                            <label class="control-label">Phone</label>
                            <input type="number" class="form-control"  name="phone">
                            <?php if (isset($error['phone'])):?>
                                <p class="text-danger"><?= $error['phone']; ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control" name="address">
                            <?php if (isset($error['address'])):?>
                                <p class="text-danger['address']"><?= $error['address']; ?></p>
                            <?php endif ?>
                        </div>      
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Level</label>
                            <input type="text" class="form-control" name="level">
                            <?php if (isset($error['level'])):?>
                                <p class="text-danger['level']"><?= $error['level']; ?></p>
                            <?php endif ?>
                        </div>      
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">

                            <label class="control-label ">Avatar</label>
                            <input type="file" class="form-control" name="avatar">
                            <?php if (isset($error['avatar'])):?>
                                <p class="text-danger['level']"><?= $error['avatar']; ?></p>
                            <?php endif ?>        
                        </div>      
                    </div>
                    
                    
                    <div class="form-group">  
                      <div class="col-sm-8">  
                      <label class="control-label">Email</label>
                          <input type="email" class="form-control" name="email">
                          <?php if (isset($error['email'])):?>
                              <p class="text-danger"><?= $error['email']; ?></p>
                          <?php endif ?>
                      </div>
                  </div>


                  <div class="form-group">  
                      <div class="col-sm-8">  
                          <label class="control-label">Password</label>
                          <input type="password" class="form-control" name="password">
                          <?php if (isset($error['password'])):?>
                              <p class="text-danger"><?= $error['password']; ?></p>
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