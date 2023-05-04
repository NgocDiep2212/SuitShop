
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
    <script src="../../common/action.js"></script>
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
                            <form action="/project-php/public/ad_o" method="post">
                                <div class="form-group" style="width: 200px; float:right;">
                                    <input type="text" class="form-control" id="searchidbill" name="searchidbill" placeholder="Nhập mã đơn hàng...">
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
                                <th>ID_Bill</th>
                                <th>ID Khách Hàng</th>
                                <th>Tên Khách Hàng</th>
                                <th>Địa Chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>
                                <th width="100px"></th>
                                <th width="50px"></th>
                                <th width="50px"></th>
                            </tr>
                        </thead>
                        <tbody>
<?php $myo::showo(); ?>
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