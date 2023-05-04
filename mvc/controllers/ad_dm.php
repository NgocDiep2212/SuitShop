<?php 
    require_once "../mvc/model/db/dbhelper.php";
    require_once "../mvc/view/admin/common/utility.php";
    include "../mvc/model/addc.php";
class ad_dm{
    static function show(){
        include "../mvc/model/category.php";
        if(!isset($_SESSION['role']) || ($_SESSION['role'] != 1))  header('location: ./login/show'); 
        $mydm = new ad_dm(); 
        include_once "../mvc/view/admin/category/index.php";
    }

    
    static function showdm(){
        include "../mvc/model/category.php";
        foreach ($categoryList as $item){
            echo '
            <tr >
                <td>'.(++$firstIndex).'</td>
                <td>'.$item['name'].'</td>
                <td>
                    <a href="./ad_dm/editc/'.$item['id'].'"><i class="edit-icon text-warning fa-solid fa-pen-to-square"></i></a>
                </td>
                <td>
                    <a href="./ad_dm/delc/'.$item['id'].'"><i class="delete-icon text-danger fa-solid fa-trash-can"></i></a>
                </td>
            </tr>';
        }
    
    }

    static function addc(){
        
        $id = $name ='';
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = 'select * from category where id = '.$id;
            $category = executeSingleResult($sql);
            if($category != null){
                $name = $category['name'];
            }
        }
        include_once "../mvc/view/admin/category/add.php";
    }

    static function editc($id){
        
        if(isset($id)){
            $sql = 'select * from category where id = '.$id;
            $category = executeSingleResult($sql);
            if($category != null){
                $name = $category['name'];
            }
        }
        include_once "../mvc/view/admin/category/edit.php";
    }

    static function delc($id){
        if(isset($id)){

            $sql = 'delete from category where id = '.$id;
            execute($sql);
        }
        header('location: ../../ad_dm');
    }
}
?>