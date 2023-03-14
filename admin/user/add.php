<?php 
require_once('../../db/dbhelper.php');

    session_start();
    ob_start();
    if(!isset($_SESSION['role']) &&($_SESSION['role'] != 1)) header('location: ./user/login.php');;

$id = $name = $username = $password = $address = $email = $role = '';
if(!empty($_POST)){
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $username = str_replace('"', '\\"',$username);
    }
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $name = str_replace('"', '\\"',$name);
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $id = str_replace('"', '\\"',$id);
    }
    if(isset($_POST['role'])){
        $role = $_POST['role'];
        $role = str_replace('"', '\\"',$role);
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        $password = str_replace('"', '\\"',$password);
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
        $address = str_replace('"', '\\"',$address);
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $email = str_replace('"', '\\"',$email);
    }

    if(!empty($username)){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        if($id == ''){
            $sql = 'insert into user(username,name, password, role, address, email, created_at, updated_at) values 
            ("'.$username.'",
            ("'.$name.'",
            "'.$password.'",
            "'.$role.'", 
            "'.$address.'", 
            "'.$email.'",
            "'.$created_at.'", 
            "'.$updated_at.'"
            )';
        }else{
            $sql = 'update user set username ="'.$username.'",name ="'.$name.'", updated_at = "'.$updated_at.'", created_at = "'.$created_at.'", password = "'.$password.'", role = "'.$role.'", address = "'.$address.'", email = "'.$email.'" where id = '.$id;
        }
        
        execute($sql); 

        header('Location: index.php'); 
        die();
    }
}

$id = '';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from user where id = '.$id;
    $user = executeSingleResult($sql);
    if($user != null){
        $username = $user['username'];
        $name = $user['name'];
        $role = $user['role'];
        $password = $user['password'];
        $email = $user['email'];
        $address = $user['address'];
    }
}
?>
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
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="../category/">Quản Lý Danh Mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../product/">Quản Lý Sản Phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Quản Lý Người Dùng</a>
        </li>
        <li class="nav-item">
             <a class="nav-link" onclick="exituser();" href="#">Thoát</a>
        </li>
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm Người Dùng</h2>
			</div>
			<div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Tên tài khoản</label>
                        <input type="text" name="id" value="<?=$id?>" hidden="true">
                        <input required="true" type="text" class="form-control" id="username" name="username" value="<?=$username?>">
                    </div>
             
                    <div class="form-group">
                        <label for="name">Tên người dùng</label>
                        <input type="text" name="id" value="<?=$id?>" hidden="true">
                        <input required="true" type="text" class="form-control" id="name" name="name" value="<?=$name?>">
                    </div>
                    <div class="form-group">
                        <label for="role">Chọn vai trò</label>
                        <select class="form-control" name="role" id="role">
                            <option value="">--Lựa chọn vai trò --</option>
                            
<?php
$sql = 'select * from user';
$userList = executeResult($sql);

foreach ($userList as $item){
    if($item['role'] == $role){
        echo '<option selected value ="'.$item['role'].'">'.$item['role'].'</option>';
    }
    else{
        echo '<option value ="'.$item['role'].'">'.$item['role'].'</option>' ;
    }  
}
?>
                        </select>
                       
                    </div>    
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="text" name="password" value="<?=$password?>" hidden="true">
                        <input required="true" type="text" class="form-control" id="password" name="password" value="<?=$password?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" value="<?=$address?>" hidden="true">
                        <input required="true" type="text" class="form-control" id="address" name="address" value="<?=$address?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?=$email?>" hidden="true">
                        <input required="true" type="text" class="form-control" id="email" name="email" value="<?=$email?>">
                    </div>
                    
                        <button class="btn btn-success" type="submit">Lưu</button>
                </form>
            </div>
		</div>
	</div>

    <script>
        function exituser(){
        var option = confirm('Bạn có chắc chắn muốn đăng xuất không?');
            if(!option) return;
            $.post('ajax.php',{
                'action': 'delete'
            },function(data){
                location.href = "login.php";
            })
       }
    </script>

</body>
</html>