<?php
    
    require_once __DIR__."/../../autoload/autoload.php" ;
    
    $id = intval(inputGet('id'));
    
    $edit =$db->fetchID("categories",$id); // LAY BAN GHI TRONG BANG CO ID 
    
    if(empty($edit)){
        $_SESSION['notfound'] = "Dữ liệu không tồn tại!";
        redirectModules(categories);
    }
    
    $num = $db->delete("categories",$id);
    if($num > 0 ) {
        $_SESSION['success'] = "Xóa thành công !";
        redirectModules(categories);
    }else {
        $_SESSION['error']= "Xóa thất bại !";
        redirectModules(categories);
    }

?>

