<?php 
    require_once "../mvc/model/db/dbhelper.php";
    require_once "../mvc/controllers/Home.php";
class detail{
    static function show($id){
        if(isset($id)){
            $sql = 'select * from product where id = '.$id;
            $product = executeSingleResult($sql);
        }
        include_once "../mvc/view/frontend/detail.php";
    }

 
}
?>