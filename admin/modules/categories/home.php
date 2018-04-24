<?php 
	 require_once __DIR__."/../../autoload/autoload.php";
	$id = intval(inputGet("id"));

	$edit = $db ->fetchID("categories",$id); //ham nay lay ra ban ghi co id 
	if(empty($edit)){
		$_SESSION['error']="Du lieu khong ton tai";
		redirectModules("categories");
	}

	$home = $edit['home'] == 0 ? 1 : 0;

	$update = $db -> update("categories",array("home" => $home),array("id" => $id));

	if($update > 0){    
                $_SESSION['success'] = "Chinh sửa thành công!";
                redirectModules(categories);
                
            }else{
                
                $_SESSION['error'] = "Chỉnh sửa thất bại! Tên danh mục không thay đổi";
                redirectModules(categories);
            }
?>