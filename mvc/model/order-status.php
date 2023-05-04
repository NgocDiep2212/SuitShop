<?php 
    
    //lay danh sach danh muc tu database
    $act = 'ad_os';
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
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }
    //trang can lay san pham. so phan tu tren 1 trang: $limit
    $additional = '';

    if(!empty($search)){
        $additional = 'and id = '.$search.'';
    }


    $sql = 'select * from orders where 1 '.$additional.' limit '.$firstIndex.', '.$limit;
    $ordersList = executeResult($sql);


    $sql = 'select count(id) as total from orders where 1 '.$additional;
    $countResult = executeSingleResult($sql);
    $number = 0;
    if($countResult != null){
        $count = $countResult['total'];
        $number = ceil($count/$limit);
    }
?>