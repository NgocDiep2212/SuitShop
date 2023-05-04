<?php 
    require_once "../mvc/model/db/dbhelper.php";
    include "../mvc/model/dashboard.php";
class ad_d{
    static function show(){
        include "../mvc/model/dashboard.php";
        if(!isset($_SESSION['role']) || ($_SESSION['role'] != 1))  header('location: ./login/show'); 
        $myd = new ad_d(); 
        include_once "../mvc/view/admin/dashboard/index.php";
        
    }

    static function showos(){
        include "../mvc/model/dashboard.php";
        $firstIndex = 0;
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
        }
    
    }
}
?>