<?php 
    $act='allp';
    $limit = 12;
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
    $additional = '';
    
    if(!empty($search)){
        $additional = 'and title like "%'.$search.'%"';
    }
    
    $sql = 'select * from product where 1 '.$additional.' limit '.$firstIndex.', '.$limit;
    $productList = executeResult($sql);
    
    $sql = 'select count(id) as total from product where 1 '.$additional;
    $countResult = executeSingleResult($sql);
    $number = 0;
    if($countResult != null){
        $count = $countResult['total'];
        $number = ceil($count/$limit);
    }
?>