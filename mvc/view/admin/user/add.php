
<!DOCTYPE html>
<html>
<head>
	<title>Thêm Người Dùng</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
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
                    <h2 class="text-center">Thêm Người Dùng</h2>
                </div>
                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Tên tài khoản</label>
                            <input type="text" name="id" value="" hidden="true">
                            <input required="true" type="text" class="form-control" id="username" name="username" value="">
                        </div>
                
                        <div class="form-group">
                            <label for="name">Tên người dùng</label>
                            <input type="text" name="id" value="" hidden="true">
                            <input required="true" type="text" class="form-control" id="name" name="name" value="">
                        </div>
                        <div class="form-group">
                            <label for="role">Chọn vai trò</label>
                            <select class="form-control" name="role" id="role">
                                <option value="">--Lựa chọn vai trò --</option>
                                <option value ="0">User</option>
                                <option value ="1">Admin</option>
                            </select>
                        
                        </div>    
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="text" name="password" value="" hidden="true">
                            <input required="true" type="text" class="form-control" id="password" name="password" value="">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" value="" hidden="true">
                            <input required="true" type="text" class="form-control" id="address" name="address" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="" hidden="true">
                            <input required="true" type="text" class="form-control" id="email" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="SDT">Số điện thoại</label>
                            <input type="text" name="SDT" value="" hidden="true">
                            <input required="true" type="text" class="form-control" id="SDT" name="SDT" value="">
                        </div>
                        
                            <button class="btn btn-success" type="submit">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>