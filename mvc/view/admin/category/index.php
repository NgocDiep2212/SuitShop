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
    <script src="../mvc/view/admin/common/action.js"></script>
</head>
<body>
<?php include "../mvc/view/admin/common/header.php" ?>
	<div id="app">
        <div class="container wrapper">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center mt-4">Quản Lý Danh Mục</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="/project-php/public/ad_dm/addc">
                            <button class="btn btn-success mb-4">Thêm Danh Mục</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body" style="font-size: 14px;">
                    <table class="table table-bordered table-hover table-striped ">
                        <thead>
                            <tr>
                                <th width="50px">STT</th>
                                <th>Tên Danh Mục</th>
                                <th width="50px"></th>
                                <th width="50px"></th>
                            </tr>
                        </thead>
                        <tbody>
<?php $mydm::showdm(); ?>
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