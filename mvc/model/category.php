<?php 
    // if(!isset($_SESSION['role']) || ($_SESSION['role'] != '1'))  header('location: ../user/login.php');
    //lay danh sach danh muc tu database
    $act = 'category';
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
        $additional = 'and name like "%'.$search.'%"';
    }
    
    $sql = 'select * from category where 1 '.$additional.' limit '.$firstIndex.', '.$limit;
    $categoryList = executeResult($sql);
    
    $sql = 'select count(id) as total from category where 1 '.$additional;
    $countResult = executeSingleResult($sql);
    $number = 0;
    if($countResult != null){ 
        $count = $countResult['total'];
        $number = ceil($count/$limit);
    }
?>
