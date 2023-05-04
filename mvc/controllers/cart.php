<?php 
    require_once "../mvc/model/db/dbhelper.php";
    include_once "../mvc/model/thuvien.php";
    class cart{
        static function show(){
            include_once "../mvc/model/cart.php";
            include_once "../mvc/view/frontend/cart.php";
            
        }

    }

?>