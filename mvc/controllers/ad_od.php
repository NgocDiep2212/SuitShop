<?php 
    require_once "../mvc/model/db/dbhelper.php";
    require_once "../mvc/view/admin/common/utility.php";
    
    class ad_od{
        static function show($id_bill){
        include "../mvc/model/detail.php";
        if(!isset($_SESSION['role']) || ($_SESSION['role'] != 1))  header('location: ./login/show'); 
        $myod = new ad_od(); 
        include_once "../mvc/view/admin/order/detail.php";
    }

    
    static function showod($id_bill){
        include "../mvc/model/detail.php";
        foreach ($orderList as $item){
            if(isset($item['id'])){

                echo '
                <tr>
                    <td>'.(++$firstIndex).'</td>
                    <td>'.$item['id_bill'].'</td>
                    <td>'.$item['name_product'].'</td>
                    <td>'.$item['soluong'].'</td>
                    <td>'.$item['chieucao'].'</td>
                    <td>'.$item['cannang'].'</td>
                    <td>'.$item['ngangvai'].'</td>
                    <td>'.$item['vongnguc'].'</td>
                    <td>'.$item['vongeo'].'</td>
                    <td>'.$item['vongco'].'</td>
        
                    <td>
                        <a href="?act=adddetail&id='.$item['id'].'"><i class="edit-icon text-warning fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td>
                        <a href="/project-php/public/ad_od/delod/'.$item['id'].'/'.$item['id_bill'].'/'.$item['id_product'].'"><i class="delete-icon text-danger fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>';
            }
        }
    
    }

    static function delod($id,$id_bill,$id_product){
        if(isset($id)){

            $sql = 'delete from detail where id = '.$id;
            execute($sql);
            
            $sql = 'select count(id) as total from detail where id_bill = '.$id_bill.' and id_product= '.$id_product;
            $countResult = executeSingleResult($sql);

            if($countResult['total'] == 0){
                $sql = 'delete from cart where id_bill = '.$id_bill;
                execute($sql);
            }
            
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