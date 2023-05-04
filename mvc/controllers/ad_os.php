<?php 
    require_once "../mvc/model/db/dbhelper.php";
    require_once "../mvc/view/admin/common/utility.php";
    
class ad_os{
        static function show(){
        include "../mvc/model/order-status.php";
        if(!isset($_SESSION['role']) || ($_SESSION['role'] != 1))  header('location: ./login/show'); 
        $myos = new ad_os(); 
        include_once "../mvc/view/admin/order-status/index.php";
    }

    
    static function showos(){
        include "../mvc/model/order-status.php";
        foreach ($ordersList as $item){
            echo '
            <tr>
                <td>'.(++$firstIndex).'</td>
                <td>'.$item['id'].'</td>
                <td>'.$item['name'].'</td>
                <td>'.$item['ngaydat'].'</td>
                <td>'.$item['tel'].'</td>
                <td>'.$item['address'].'</td>';
            if($item['hinhthucthanhtoan'] == '0') echo '<td>Tiền mặt</td>';
            else if($item['hinhthucthanhtoan'] == '1') echo '<td>Chuyển khoản</td>';
            else if($item['hinhthucthanhtoan'] == '2') echo '<td>Ví điện tử<td>';
                
                
            if($item['trangthaithanhtoan'] == '0') echo '<td>Chưa thanh toán</td>';
            else if($item['trangthaithanhtoan'] == '1') echo '<td>Đang xử lý</td>';
            else if($item['trangthaithanhtoan'] == '2') echo '<td>Đã thanh toán<td>';
    
            
            if($item['trangthai'] == '0') echo '<td>Đã xác nhận đơn hàng</td>';
            else if($item['trangthai'] == '1') echo '<td>Đang giao</td>';
            else if($item['trangthai'] == '2') echo '<td>Đã giao thành công</td>';
            echo '<td>'.$item['total'].'</td>';
                echo '<td>'.$item['note'].'</td>';
    
            echo '<td>
                    <a href="?act=addorder-status&id='.$item['id'].'"><i class="edit-icon text-warning fa-solid fa-pen-to-square"></i></a>
                </td>
                <td>
                    <a href="/project-php/public/ad_os/delos/'.$item['id'].'"><i class="delete-icon text-danger fa-solid fa-trash-can"></i></a>
                </td>
            </tr>';
        }
    
        
    }
    static function delos($id){
        if(isset($id)){
            $sql = 'delete from orders where id = '.$id;
            execute($sql);
            $sql = 'delete from cart where id_bill = '.$id;
            execute($sql);
            $sql = 'delete from detail where id_bill = '.$id;
            execute($sql);
        }
        header('location: /project-php/public/ad_os');
    }
}
?>