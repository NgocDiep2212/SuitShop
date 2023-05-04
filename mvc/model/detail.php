<?php 
    $act='ad_od';
    //lay danh sach danh muc tu database
    $limit = 10;
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    if($page <= 0){
        $page = 1;
    }
    $firstIndex = ($page-1)*$limit;

    $search = '';
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    //trang can lay san pham. so phan tu tren 1 trang: $limit
    $additional = '';

    if(!empty($search)){
        $additional = 'and name like "%'.$search.'%"';
    }


    $sql = 'select detail.id, detail.id_product, cart.name_product, detail.id_bill, cart.soluong, detail.cannang, detail.chieucao, detail.ngangvai, detail.vongnguc, detail.vongeo, detail.vongco from cart left join detail on detail.id_bill = cart.id_bill and cart.id_product = detail.id_product where cart.id_bill = '.$id_bill.' '.$additional.' limit '.$firstIndex.', '.$limit;
    $orderList = executeResult($sql);


    $sql = 'select count(id) as total from detail where 1 '.$additional;
    $countResult = executeSingleResult($sql);
    $number = 0;
    if($countResult != null){
        $count = $countResult['total'];
        $number = ceil($count/$limit);
    }
?>