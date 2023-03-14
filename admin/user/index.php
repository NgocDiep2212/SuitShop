<?php 
require_once('../../db/dbhelper.php');
require_once('../../common/utility.php');

    session_start();
    ob_start();
    if(!isset($_SESSION['role']) || ($_SESSION['role'] == 0))  header('location: login.php');

?>
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
</head>
<body>
    <div class="header">
        <ul class="nav nav-bar nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="../category/">Quản Lý Danh Mục</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../product">Quản Lý Sản Phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Quản Lý Người Dùng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="exituser();" href="#">Thoát</a>
            </li>
            
        </ul>
    </div>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản Lý Người Dùng</h2>
			</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="add.php">
                         <button class="btn btn-success mb-4">Thêm Người Dùng</button>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="get">
                            <div class="form-group" style="width: 200px; float:right;">
                                <input type="text" class="form-control" id="search" name="search" placeholder="Searching...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			<div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="50px">STT</th>
                            <th>Tên Tài Khoản</th>
                            <th>Tên Người Dùng</th>
                            <th>Địa Chỉ</th>
                            <th>Email</th>
                            <th>Mật Khẩu</th>
                            <th>Vai trò</th>
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
<?php 
//lay danh sach danh muc tu database
$limit = 5;
$page = 1;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
if($page <= 0){
    $page = 1;
}
$firstIndex = ($page-1)*$limit;

$search = '';
if(isset($_GET['search'])){
    $search = $_GET['search'];
}
//trang can lay san pham. so phan tu tren 1 trang: $limit
$additional = '';

if(!empty($search)){
    $additional = 'and username like "%'.$search.'%"';
}

$sql = 'select * from user where 1 '.$additional.' limit '.$firstIndex.', '.$limit;
$userList = executeResult($sql);

$sql = 'select count(id) as total from user where 1 '.$additional;
$countResult = executeSingleResult($sql);
$number = 0;
if($countResult != null){
    $count = $countResult['total'];
    $number = ceil($count/$limit);
}
foreach ($userList as $item){
    echo '
    <tr>
        <td>'.(++$firstIndex).'</td>
        <td>'.$item['username'].'</td>
        <td>'.$item['name'].'</td>
        <td>'.$item['address'].'</td>
        <td>'.$item['email'].'</td>
        <td>'.$item['password'].'</td>
        <td>'.$item['role'].'</td>
        <td>
            <a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
        </td>
        <td>
            <button class="btn btn-danger" onclick="deleteuser('.$item['id'].')">Xóa</button>
        </td>
    </tr>';
}
?>
                    </tbody>
                </table>
        <!-- Bai toan phan trang -->
        <?=paginarion($number, $page, '&search='.$search)?>
            </div>
		</div>
	</div>

    <script type="text/javascript">
        function deleteuser(id){
            var option = confirm('Bạn có chắc chắn muốn xóa danh mục này không?');
            if(!option) return;
            $.post('ajax.php',{
                'id': id,
                'action': 'delete'
            },function(data){
                location.reload();
            })
        }

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