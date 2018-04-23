<?php
    
    require_once __DIR__."/../../autoload/autoload.php" ;
    
    $id = intval(inputGet('id'));
    
    $edit =$db->fetchID("products",$id); // LAY BAN GHI TRONG BANG CO ID 
    
    if(empty($edit)){
        $_SESSION['notfound'] = "Dữ liệu không tồn tại!";
        redirectModules(products);
    }
    
    $num = $db->delete("products",$id);
    if($num > 0 ) {
        $_SESSION['success'] = "Xóa thành công !";
        redirectModules(products);
    }else {
        $_SESSION['error']= "Xóa thất bại !";
        redirectModules(products);
    }

?>

