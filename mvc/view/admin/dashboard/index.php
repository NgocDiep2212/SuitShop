<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Danh Mục</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../mvc/view/admin/css/header.css">
    <link rel="stylesheet" href="../mvc/view/admin/css/style.css">
    <link rel="stylesheet" href="../mvc/view/admin/css/dashboard.css">
    <script src="../mvc/view/admin/common/action.js"></script>
</head>
<body>
<?php include "../mvc/view/admin/common/header.php" ?>
	<div id="app">
        <div class="container wrapper">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Bảng điều khiển</h2>
                </div>
            </div>
        <h5>Bảng điều khiển:</h5>

            <div class="card-wrapper">
                <div class="card card1 ">
                    <a class="card-body card-d" href="/project-php/public/ad_p">
                        <p class="card-text">Sản Phẩm</p>
                        <h4 class="card-title"><?php echo $countp; ?></h4>
                        <p class="card-text">Xem chi tiết <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
                <div class="card card2 ">
                    <a class="card-body card-d " href="/project-php/public/ad_u">
                        <p class="card-text">Người dùng</p>
                        <h4 class="card-title"><?php echo $countu; ?></h4>
                        <p class="card-text">Xem chi tiết <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
                <div class="card card3">
                    <a class="card-body card-d" href="/project-php/public/ad_dm">
                        <p class="card-text">Danh Mục</p>
                        <h4 class="card-title"><?php echo $countc; ?></h4>
                        <p class="card-text">Xem chi tiết <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
                <div class="card card4">
                    <a class="card-body card-d" href="/project-php/public/ad_o">
                        <p class="card-text">Đơn Hàng</p>
                        <h4 class="card-title"><?php echo $counto; ?></h4>
                        <p class="card-text">Xem chi tiết <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
            </div>

            <h5>Đơn hàng mới:</h5>
            <div class="panel-body" style="font-size: 14px">
                    <table class="table table-bordered table-hover table-striped">
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
                            </tr>
                        </thead>
                        <tbody>
                           <?php $myd::showos(); ?> 
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

</body>
</html>