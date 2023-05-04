<?php 
    require_once "../mvc/model/db/dbhelper.php";
    require_once "../mvc/view/admin/common/utility.php";
class allp{
    static function show(){
        require("../mvc/model/allp.php");
        include_once "../mvc/view/frontend/allproduct.php";
    }

    static function showproduct(){
        require("../mvc/model/allp.php");
    //lay danh sach danh muc tu database
    foreach ($productList as $item){
            echo '
            <div class="col-lg-3 product-item"> 
                    <a href="/project-php/public/detail/show/'.$item['id'].'">
                    <img src="'.$item['thumbnail'].'" style="width: 100%"></a>
                    <a href="detail.php?id='.$item['id'].'">
                    <p>'.$item['title'].'</p></a>
                    <p style="font-weight: bold">'.$item['price'].' ₫</p>
                </div>
            ';
        }
    }
}
?>