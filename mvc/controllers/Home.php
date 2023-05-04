<?php 
    require_once "../mvc/model/db/dbhelper.php";
class Home{
    static function show(){
        if(!isset($_SESSION['role']) || ($_SESSION['role'] != 0))  header('location: /project-php/public/login');   
        include_once "../mvc/view/frontend/Home.php";
    }

    static function showproduct(){
    //lay danh sach danh muc tu database
        $sql = 'select * from product';
        $productList = executeResult($sql);
        
        $index = 1;
        foreach ($productList as $item){
            echo '
            <div class="product-item">
                <a href="/project-php/public/detail/show/'.$item['id'].'">
                    <img src="'.$item['thumbnail'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">'.$item['title'].'</p>
                        <p class="card-text" style="font-weight: bold;">'.$item['price'].' ₫</p>
                    </div>
                </a>
            </div>
            ';
        }
    }
}
?>