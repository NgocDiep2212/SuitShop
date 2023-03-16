<?php 
require_once('..//db/dbhelper.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" alt="">
        </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Vest
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<?php 
//lay danh sach danh muc tu database
$sql = 'select * from category';
$categoryList = executeResult($sql);

$index = 1;
foreach ($categoryList as $item){
    echo '
    <a class="dropdown-item" href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
    ';
}
?>
                            
            
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                        <li class="nav-link" onclick="exituser()" style="cursor: pointer;">Thoát</li>
                    </ul>
                </div>
        </div>                
    </nav>
</div>
        <img src="https://thomasnguyentailor.com/wp-content/uploads/2021/12/BANNER-chinh-gioi-thieu.jpg" class="banner" alt="Responsive image">
        <div class="breadcumb">
            
        </div>
        <div class="main">
            <ul class="list-product row">
<?php 
//lay danh sach danh muc tu database
$sql = 'select * from product';
$productList = executeResult($sql);

$index = 1;
foreach ($productList as $item){
    echo '
    <div class="col-lg-3 product-item" style="width: 18rem;">
        <a href="detail.php?id='.$item['id'].'">
            <img src="'.$item['thumbnail'].'" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">'.$item['title'].'</p>
                <p class="card-text" style="color: red; font-size: 18px;">'.$item['price'].'</p>
            </div>
        </a>
    </div>
    ';
}
?>
            <ul/>
            


        <div class="footer">

        </div>
	</div>
    
</body>

    <script>
            function exituser(){
                var option = confirm('Bạn có chắc chắn muốn đăng xuất không?');
                    if(!option) return;
                    $.post('ajax.php',{
                        'action': 'delete'
                    },function(data){
                        location.href = "../admin/user/login.php";
                    })
       }
    </script>
</html>