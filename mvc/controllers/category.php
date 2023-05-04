<?php 
require_once "../mvc/model/db/dbhelper.php";
 class category{
    static function show($id){
        if(isset($id)){
            $sql = 'select * from category where id = '.$id;
            $category = executeSingleResult($sql);
            if($category != null){
                $name = $category['name'];
            }
        }
        $myc = new category();
        include_once "../mvc/view/frontend/category.php";
    }

    static function showcategory($id){
        
        $sql = 'select product.id, product.title, product.price, product.thumbnail,product.updated_at,category.name category_name from product left join category on product.id_category = category.id where category.id = '.$id;
        $productList = executeResult($sql);

        foreach($productList as $item){
            echo '
                <div class="col-lg-3 product-item"> 
                    <a href="detail.php?id='.$item['id'].'">
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