<?php 
    $act='ad_p';
    $limit = 10;
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    if($page <= 0){
        $page = 1;
    }
    
    $firstIndex = ($page-1)*$limit;

    // search
    $searchname = '';
    $additional = '';
    if(isset($_POST['searchname'])){
        $searchname = $_POST['searchname'];
    }
    if(!empty($searchname)){
        $additional = 'and title like "%'.$searchname.'%"';
    }

    $searchid = '';
    if(isset($_POST['searchid'])){
        $searchid = $_POST['searchid'];
    }
    if(!empty($searchid)){
        $additional = 'and product.id = '.$searchid.'';
    }

    //filter category
    $ad_cate = '';
    if(isset($_POST['ad_cate'])){
        $ad_cate = $_POST['ad_cate'];
    }

    if(!empty($ad_cate)){
        $additional = 'and product.id_category = '.$ad_cate.' ';
    }
    
    $sql = 'select product.id, product.title, product.price, product.thumbnail,product.updated_at,category.name category_name from product left join category on product.id_category = category.id where 1 '.$additional.' limit '.$firstIndex.', '.$limit;
    $productList = executeResult($sql);
    
    $sql = 'select count(id) as total from product where 1 '.$additional;
    $countResult = executeSingleResult($sql);
    $number = 0;
    if($countResult != null){
        $count = $countResult['total'];
        $number = ceil($count/$limit);
    }
?>