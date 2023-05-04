
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="box-header">
            <div class="box-left">
                <a class="navbar-brand" href="index.php">
                    <img src="/project-php/mvc/view/frontend/img/logo.png" alt="">
                </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/project-php/public/Home">Home <span class="sr-only"></span></a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/project-php/public/allp" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="dropdown-item" href="/project-php/public/category/show/'.$item['id'].'">'.$item['name'].'</a>
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
                           
                        </ul>
                    </div>
                    
                </div>

                <div class="box-right">
                <div class="wrapper-icon">
                    <div class="search">
                        <form action="/project-php/public/allp" method="post" class="form-search">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                                <input type="text" class="form-control" id="search" name="search" placeholder="Tìm kiếm sản phẩm...">
                            </div>
                        </form>
                        
                    </div>
<?php 
    if(!isset($_SESSION['role'])) $_SESSION['role']="";
    if($_SESSION['role'] == '0'){
        echo '
        <div class="user">
            <i class="fa-regular fa-user"></i>
            <ul class="header__navbar-user-menu">
                        <li class="header__navbar-user-item">
                            <a href="#">Tài khoản của tôi</a>
                        </li>
                        <li class="header__navbar-user-item">
                            <a href="#">Địa chỉ của tôi</a>
                        </li>
                        <li class="header__navbar-user-item">
                            <a href="#">Đơn mua</a>
                        </li>
                        <li class="header__navbar-user-item header__navbar-user-item--separate">
                            <a href="#" onclick="exituser()">Đăng xuất</a>
                        </li>
            </ul>
        </div>
    ';
    }else{
        echo '
        <div class="user">
            <i class="fa-regular fa-user"></i>
            <ul class="header__navbar-user-menu">
                        <li class="header__navbar-user-item">
                            <a href="../admin/user/login.php">Đăng nhập</a>
                        </li>
                        <li class="header__navbar-user-item">
                            <a href="../admin/user/signup.php">Đăng ký</a>
                        </li>
                        
            </ul>
        </div>
        ';
    }
?>
                    
                    <div class="cart">
                        
                        <a href="./cart"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>                
    </nav>
</div>
