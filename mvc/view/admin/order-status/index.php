
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
                    <h2 class="text-center mt-4">Quản Lý Đơn Hàng</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            
                        </div>
                        <div class="col-lg-6">
                            <form action="/project-php/public/ad_os" method="post">
                                <div class="form-group" style="width: 200px; float:right;">
                                    <input type="text" class="form-control" id="search" name="search" placeholder="Nhập mã đơn hàng...">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover table-striped" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th width="50px">STT</th>
                                <th>Mã Đơn Hàng</th>
                                <th>Khách Hàng</th>
                                <th>Ngày Lập</th>
                                <th>Số Điện Thoại</th>
                                <th>Nơi Giao</th>
                                <th>Hình Thức Thanh Toán</th>
                                <th>Trạng Thái Thanh Toán</th>
                                <th>Trạng Thái</th>
                                <th>Tổng Thành Tiền</th>
                                <th>Ghi chú</th>
                                <th colspan="2">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $myos::showos(); ?> 
                        </tbody>
                    </table>
            <!-- Bai toan phan trang -->
            <?=paginarion($number, $page, $act)?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>