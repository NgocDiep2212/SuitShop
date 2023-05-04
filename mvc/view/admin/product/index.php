
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Sản Phẩm</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="/project-php/mvc/view/admin/common/action.js"></script>
    <link rel="stylesheet" href="/project-php/mvc/view/admin/css/header.css">
    <link rel="stylesheet" href="/project-php/mvc/view/admin/css/style.css">
</head>
<body>
<?php include "../mvc/view/admin/common/header.php" ?>
    <div id="app">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center m-4">Quản Lý Sản Phẩm</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="../public/ad_p/addp">
                                <button class="btn btn-success mb-4">Thêm Sản Phẩm</button>
                            </a>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-around">
                            <form action="/project-php/public/ad_p" method="post">
                                <div class="form-group" style="width: 240px; ">
                                    <input type="text" class="form-control" id="searchid" name="searchid" placeholder="Nhập ID sản phẩm...">
                                </div>
                            </form>
                            <form action="/project-php/public/ad_p" method="post">
                                <div class="form-group" style="width: 240px;">
                                    <input type="text" class="form-control" id="searchname" name="searchname" placeholder="Nhập tên sản phẩm...">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    
                
                    <table class="table table-bordered table-hover table-striped" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th width="50px">STT</th>
                                <th>Hình Ảnh</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá bán</th>
                                <th class="dropdown">
                                    <button class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Danh Mục
                                    </button>
                                    <form action="/project-php/public/ad_p" method="post">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <button type="input" class="dropdown-item" type="button" name="ad_cate" id="ad_cate" value="1" href="#">Bộ Vest</button>
                                            <button type="input" class="dropdown-item" type="button" name="ad_cate" id="ad_cate" value="2" href="#">Áo Vest</button>
                                            <button type="input" class="dropdown-item" type="button" name="ad_cate" id="ad_cate" value="3" href="#">Quần Tây</button>
                                        </div>
                                    </form>
                                </th>
                                <th>Ngày Cập Nhật</th>
                                <th width="50px"></th>
                                <th width="50px"></th>
                            </tr>
                        </thead>
                        <tbody>
    <?php $myp::showp(); ?>
                        </tbody>
                    </table>
    <!-- Bai toan phan trang -->
    <?=paginarion($number, $page,$act)?>
                </div>
            </div>
        </div>
    </div>


</body>
</html>