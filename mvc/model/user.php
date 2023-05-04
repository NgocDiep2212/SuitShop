<?php 

    $act = 'ad_u';
    $limit = 5;
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
        $additional = 'and username like "%'.$search.'%"';
    }

    $sql = 'select * from user where 1 '.$additional.' limit '.$firstIndex.', '.$limit;
    $userList = executeResult($sql);

    $sql = 'select count(id) as total from user where 1 '.$additional;
    $countResult = executeSingleResult($sql);
    $number = 0;
    if($countResult != null){
        $count = $countResult['total'];
        $number = ceil($count/$limit);
    }
?>