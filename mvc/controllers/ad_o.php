<?php 
    require_once "../mvc/model/db/dbhelper.php";
    require_once "../mvc/view/admin/common/utility.php";
    
class ad_o{
        static function show(){
        include "../mvc/model/order.php";
        if(!isset($_SESSION['role']) || ($_SESSION['role'] != 1))  header('location: ./login/show'); 
        $myo = new ad_o(); 
        include_once "../mvc/view/admin/order/index.php";
    }

    
    static function showo(){
        include "../mvc/model/order.php";

        foreach ($orderList as $item){
            echo '
            <tr>
                <td>'.(++$firstIndex).'</td>
                <td>'.$item['id_bill'].'</td>
                <td>'.$item['id_user'].'</td>
                <td>'.$item['name'].'</td>
                <td>'.$item['address'].'</td>
                <td>'.$item['tel'].'</td>
                <td>'.$item['name_product'].'</td>
                <td>'.$item['soluong'].'</td>
                <td>'.$item['thanhtien'].'</td>

                <td style="width: 124px;">
                    <a href="/project-php/public/ad_od/show/'.$item['id_bill'].'"><button class="btn btn-info">Chi tiết</button></a>
                </td>
                <td>
                    <a href="?act=addOrder&id='.$item['ID'].'"><i class="edit-icon text-warning fa-solid fa-pen-to-square"></i></a>
                </td>
                <td>
                    <a href="/project-php/public/ad_o/delo/'.$item['ID'].'/'.$item['id_bill'].'/'.$item['id_product'].'"><i class="delete-icon text-danger fa-solid fa-trash-can"></i></a>
                </td>
            </tr>';
        }
    
    }

 

    static function delo($id,$id_bill,$id_product){
        if(isset($id)){

            $sql = 'delete from cart where id = '.$id;
            execute($sql);
            $sql = 'delete from detail where id_bill = '.$id_bill.' and id_product ='.$id_product;
            execute($sql);

            $sql = 'select count(id) as total from cart where id_bill = '.$id_bill;
            $countResult = executeSingleResult($sql);

            if($countResult['total'] == 0){
                $sql = 'delete from orders where id = '.$id_bill;
                execute($sql);
            }
            
        }
        header('location: /project-php/public/ad_o');
    }
}
?>