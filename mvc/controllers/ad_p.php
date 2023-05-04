<?php 
    require_once "../mvc/model/db/dbhelper.php";
    require_once "../mvc/view/admin/common/utility.php";
    include_once "../mvc/model/product.php";
    
    class ad_p{
        static function show(){
            include "../mvc/model/product.php";
            if(!isset($_SESSION['role']) || ($_SESSION['role'] != 1))  header('location: ./login/show'); 
            $myp = new ad_p(); 
            
            include_once "../mvc/view/admin/product/index.php";
        
    }

    
    static function showp(){
        include "../mvc/model/product.php";
        foreach ($productList as $item){
            echo '
            <tr>
                <td>'.(++$firstIndex).'</td>
                <td><img src="'.$item['thumbnail'].'" style="max-width: 40px;"/></td>
                <td>'.$item['title'].'</td>
                <td>'.$item['price'].'</td>
                <td>'.$item['category_name'].'</td>
                <td>'.$item['updated_at'].'</td>
                <td>
                    <a href="./ad_p/editp/'.$item['id'].'"><i class="edit-icon text-warning fa-solid fa-pen-to-square"></i></a>
                </td>
                <td>
                    <a href="./ad_p/delp/'.$item['id'].'"><i class="delete-icon text-danger fa-solid fa-trash-can"></i></a>
                </td>
            </tr>';
        }
        
    
    }

    static function addp(){
        include_once "../mvc/model/addp.php";
        include_once "../mvc/view/admin/product/add.php";
    }

    static function editp($id){
        include_once "../mvc/model/addp.php";
        if(isset($id)){
            $sql = 'select * from product where id = '.$id;
            $product = executeSingleResult($sql);
            if($product != null){
                $title = $product['title'];
                $price = $product['price'];
                $thumbnail = $product['thumbnail'];
                $id_category = $product['id_category'];
                $content = $product['content'];
            }
        }
        include_once "../mvc/view/admin/product/edit.php";
    }

    static function delp($id){
        if(isset($id)){
            $sql = 'delete from product where id = '.$id;
            execute($sql);
        }
        header('location: ../../ad_p');
    }

}
?>