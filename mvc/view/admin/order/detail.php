
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Đơn Hàng</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/project-php/mvc/view/admin/css/header.css">
    <link rel="stylesheet" href="/project-php/mvc/view/admin/css/style.css">
</head>
<body>
<?php include "../mvc/view/admin/common/header.php" ?>
	<div id="app">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center mt-4">Chi Tiết Đơn Hàng</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="50px">STT</th>
                                <th>ID_Bill</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Chiều Cao</th>
                                <th>Cân Nặng</th>
                                <th>Ngang Vai</th>
                                <th>Vòng Ngực</th>
                                <th>Vòng Eo</th>
                                <th>Vòng Cổ</th>
                                <th width="50px"></th>
                                <th width="50px"></th>
                            </tr>
                        </thead>
                        <tbody>
<?php $myod::showod($id_bill); ?>
                        </tbody>
                    </table>
                    
                    <a href="/project-php/public/ad_o"><button class="btn btn-info" style="float: right;">Trở về</button></a>
            <!-- Bai toan phan trang -->
        
                </div>
            </div>
        </div>
    </div>


</body>
</html>