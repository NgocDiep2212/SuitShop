<?php 
require_once('..//db/dbhelper.php');

session_start();

    if(isset($_SESSION['id']) && ($_SESSION['id_user'] != null)){
        $id_user = $_SESSION['id'];
    }

$id = '';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from product where id = '.$id;
    $product = executeSingleResult($sql);
    
$id = $chieucao = $cannang = $ngangvai = $vongnguc = $vongeo= $vongco = '';
if(!empty($_POST)){
    if(isset($_POST['chieucao'])){
        $chieucao = $_POST['chieucao'];
        $chieucao = str_replace('"', '\\"',$chieucao);
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $id = str_replace('"', '\\"',$id);
    }
    if(isset($_POST['cannang'])){
        $cannang = $_POST['cannang'];
        $cannang = str_replace('"', '\\"',$cannang);
    }
    if(isset($_POST['ngangvai'])){
        $ngangvai = $_POST['ngangvai'];
        $ngangvai = str_replace('"', '\\"',$ngangvai);
    }
    if(isset($_POST['vongnguc'])){
        $vongnguc = $_POST['vongnguc'];
        $vongnguc = str_replace('"', '\\"',$vongnguc);
    }
    if(isset($_POST['vongeo'])){
        $vongeo = $_POST['vongeo'];
        $vongeo = str_replace('"', '\\"',$vongeo);
    } 
    if(isset($_POST['vongco'])){
        $vongco = $_POST['vongco'];
        $vongco = str_replace('"', '\\"',$vongco);
    }
    

    if(!empty($id_user)){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        if($id == ''){
            $sql = 'insert into customer(id_user,chieucao, ngangvai, cannang, vongnguc, vongeo, vongco, created_at, updated_at) values 
            ("'.$id_user.'",
            "'.$chieucao.'",
            "'.$ngangvai.'",
            "'.$cannang.'", 
            "'.$vongnguc.'", 
            "'.$vongeo.'",
            "'.$vongco.'",
            "'.$created_at.'", 
            "'.$updated_at.'"
            )';
        }else{
            $sql = 'update customer set chieucao ="'.$chieucao.'", updated_at = "'.$updated_at.'", ngangvai = "'.$ngangvai.'", cannang = "'.$cannang.'", vongnguc = "'.$vongnguc.'", vongeo = "'.$vongeo.'", id_user = "'.$id_user.'", vongco = "'.$vongco.'" where id = '.$id;
        }
        
        execute($sql); 

    }
}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$product['title']?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" alt="">
        </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Vest
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<?php 
//lay danh sach danh muc tu database
$sql = 'select * from category';
$categoryList = executeResult($sql);

$index = 1;
foreach ($categoryList as $item){
    echo '
    <a class="dropdown-item" href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
    ';
}
?>
                            
            
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
        </div>                
    </nav>
</div>
	<nav aria-label="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                </ol>
            </nav>
	<div class="container">
	
	<div class="row">
		<div class="col-lg-6">
			<img src="<?=$product['thumbnail']?>" alt="" style="max-width: 450px;">
		</div>
		<div class="col-lg-6">
			<h2 class="text-center"><?=$product['title']?></h2>
			
			<h5 class="price" id="price" style="font-weight: 600; font-size: 24px;"></h5>
			<form method="post">
			<div class="row">
				<div class="form-group col-lg-4">
					<label for="chieucao">Chiều cao (cm):</label>
					<input type="number" name="chieucao" id="chieucao" placeholder="Chiều cao...">
				</div>
				<div class="form-group col-lg-4">
					<label for="cannang">Cân nặng (cm):</label>
					<input type="number" name="cannang" id="cannang" placeholder="Cân nặng...">
				</div>
				<div class="form-group col-lg-4">
					<label for="ngangvai">Ngang vai (cm):</label>
					<input type="number" name="ngangvai" id="ngangvai" placeholder="Ngang vai...">
				</div>
				<div class="form-group col-lg-4">
					<label for="vongnguc">Vòng ngực (cm):</label>
					<input type="number" name="vongnguc" id="vongnguc" placeholder="Vòng ngực...">
				</div>
				<div class="form-group col-lg-4">
					<label for="vongeo">Vòng eo (cm):</label>
					<input type="number" name="vongeo" id="vongeo" placeholder="Vòng eo...">
				</div>
				<div class="form-group col-lg-4">
					<label for="vongco">Vòng cổ (cm):</label>
					<input type="number" name="vongco" id="vongco" placeholder="Vòng cổ...">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" onclick="success()" style="text-align:center;"">Thêm vào giỏ</button>
			</form>
    		<p><?=$product['content']?></p>
		
		</div>
	</div>
			
			
            
               
	</div>

	<script>
		function success(){
			alert("Ban da them san pham vao gio hang thanh cong!");
		}
		function format2(str) {
			const formatter = new Intl.NumberFormat('vi', {
				style: 'currency',
				currency: 'VND'
			})
			return formatter.format(str);
		}

		document.getElementById("price").innerHTML = format2(<?=$product['price']?>); 
        
		// 
	</script>
</body>
</html>