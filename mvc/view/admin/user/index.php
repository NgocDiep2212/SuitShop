
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Người Dùng</title>
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
</head>
<body>
<?php include "../mvc/view/admin/common/header.php" ?>
    <div id="app">    
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center m-4">Quản Lý Người Dùng</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="./ad_u/addu">
                            <button class="btn btn-success mb-4">Thêm Người Dùng</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover table-striped" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th width="50px">STT</th>
                                <th>Tên Tài Khoản</th>
                                <th>Tên Người Dùng</th>
                                <th>Địa Chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Email</th>
                                <th>Mật Khẩu</th>
                                <th>Vai Trò</th>
                                <th width="50px"></th>
                                <th width="50px"></th>
                            </tr>
                        </thead>
                        <tbody>
<?php $myu::showu(); ?>
                        </tbody>
                    </table>
            <!-- Bai toan phan trang -->
            <?=paginarion($number, $page, '&search='.$search,$act)?>
                </div>
            </div>
        </div>

    </div>
</body>
</html>