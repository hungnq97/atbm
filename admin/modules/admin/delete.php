<?php
    
    require_once __DIR__."/../../autoload/autoload.php" ;
    
    $id = intval(inputGet('id'));
    
    $edit =$db->fetchID("admin",$id); // LAY BAN GHI TRONG BANG CO ID 
    
    if(empty($edit)){
        $_SESSION['notfound'] = "Dữ liệu không tồn tại!";
        redirectModules(admin);
    }
    
    $num = $db->delete("admin",$id);
    if($num > 0 ) {
        $_SESSION['success'] = "Xóa thành công !";
        redirectModules(admin);
    }else {
        $_SESSION['error']= "Xóa thất bại !";
        redirectModules(admin);
    }

?>
