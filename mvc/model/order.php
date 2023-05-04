<?php 
        
    //lay danh sach danh muc tu database
    $act = 'ad_o';
    $limit = 10;
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    if($page <= 0){
        $page = 1;
    }
    $firstIndex = ($page-1)*$limit;

    $searchidbill = '';
    if(isset($_POST['searchidbill'])){
        $searchidbill = $_POST['searchidbill'];
    }
    //trang can lay san pham. so phan tu tren 1 trang: $limit
    $additional = '';

    if(!empty($searchidbill)){
        $additional = 'and cart.id_bill = '.$searchidbill.'';
    }


    $sql = 'select orders.name, orders.id_user, orders.email, orders.address, orders.tel, cart.id_product,cart.soluong, cart.name_product, cart.ID,cart.thanhtien, cart.id_bill from orders left join cart on cart.id_bill = orders.id where orders.id = cart.id_bill '.$additional.' limit '.$firstIndex.', '.$limit;
    $orderList = executeResult($sql);


    $sql = 'select count(id) as total from cart where 1 '.$additional;
    $countResult = executeSingleResult($sql);
    $number = 0;
    if($countResult != null){
        $count = $countResult['total'];
        $number = ceil($count/$limit);
    }
?>