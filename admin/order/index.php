<?php 
require_once('../../db/dbhelper.php');
require_once('../../common/utility.php');

    session_start();
    if(!isset($_SESSION['role']) || ($_SESSION['role'] == 0))  header('location: ../user/login.php');
   
?>
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
            <a class="nav-link" href="../user/">Quản Lý Người Dùng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Quản Lý Đơn Hàng</a>
        </li>
        <li class="nav-item ">
                <a class="nav-link " onclick="exituser();" href="#">Thoát</a>
        </li>
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản Lý Đơn Hàng</h2>
			</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        
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
                            <th>Tên Khách Hàng</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th width="180px"></th>
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
<?php 
//lay danh sach danh muc tu database
$limit = 10;
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
    $additional = 'and name like "%'.$search.'%"';
}


$sql = 'select user.name, user.username, user.email, user.address, user.SDT, customer.soluong, customer.name_product, customer.ID from user left join customer on customer.id_user = user.id where user.id = customer.id_user'.$additional.' limit '.$firstIndex.', '.$limit;
$customerList = executeResult($sql);


$sql = 'select count(id) as total from customer where 1 '.$additional;
$countResult = executeSingleResult($sql);
$number = 0;
if($countResult != null){
    $count = $countResult['total'];
    $number = ceil($count/$limit);
}
foreach ($customerList as $item){
    echo '
    <tr>
        <td>'.(++$firstIndex).'</td>
        <td>'.$item['username'].'</td>
        <td>'.$item['name'].'</td>
        <td>'.$item['address'].'</td>
        <td>'.$item['SDT'].'</td>
        <td>'.$item['name_product'].'</td>
        <td>'.$item['soluong'].'</td>

        <td>
            <a href="detail.php?id='.$item['ID'].'"><button class="btn btn-info">Chi tiết đơn hàng</button></a>
        </td>
        <td>
            <a href="add.php?id='.$item['ID'].'"><button class="btn btn-warning">Sửa</button></a>
        </td>
        <td>
            <button class="btn btn-danger" onclick="deleteOrder('.$item['ID'].')">Xóa</button>
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


</body>
</html>