<?php 
if(!empty($_POST)){
    $id = $id_product = $soluong = $price = $thanhtien = '';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $id = str_replace('"', '\\"',$id);
    }
    if(isset($_POST['id_product'])){
        $id_product = $_POST['id_product'];
        $id_product = str_replace('"', '\\"',$id_product);
    }
    
    if(isset($_POST['soluong'])){
        $soluong = $_POST['soluong'];
        $soluong = str_replace('"', '\\"',$soluong);
    }
    
    if(isset($_POST['price'])){
        $price = $_POST['price'];
        $price = str_replace('"', '\\"',$price);
    }
    
    if(isset($_POST['thanhtien'])){
        $thanhtien = $_POST['thanhtien'];
        $thanhtien = str_replace('"', '\\"',$thanhtien);
    }

    if(!empty($_POST)){
        if($id == ''){
            $sql = 'insert into cart(id_product, soluong, price, thanhtien) values("'.$id_product.'", "'.$soluong.'", "'.$price.'","'.$thanhtien.'")';
        }else{
            $sql = 'update cart set id_product ="'.$id_product.'", soluong ="'.$soluong.'", thanhtien="'.$thanhtien.'" where id = '.$id;
        }
        
        execute($sql); 

        header('Location: index.php?act=order'); 
        die();
    }
}

$id = $id_product = $name_product = $soluong = $price = $thanhtien = '';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from cart where ID='.$id;
    $cart = executeSingleResult($sql);
    if($cart != null){
        $id_product = $cart['id_product'];
        $name_product = $cart['name_product'];
        $soluong = $cart['soluong'];
        $price = $cart['price'];
        $thanhtien = $cart['thanhtien'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Đơn Hàng</title>
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
    <script src="../mvc/view/admin/common/action.js"></script>
</head>
<body>
<?php include "../mvc/view/admin/common/header.php" ?>
	<div id="app">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center mt-4">Thêm/Sửa Đơn Hàng</h2>
                </div>
                <div class="panel-body">
                    <form action="" method="post">
                    
                        <div class="form-group">
                            <label for="id_product">ID Product</label>
                            <input required="true" type="text" class="form-control" id="id_product" name="id_product" value="<?=$id_product?>" onchange="updateIdProduct()">
                        </div>
                        <div class="form-group" hidden="true">
                            <label for="id">ID Product</label>
                            <input required="true" type="text" class="form-control" id="id" name="id" value="<?=$id?>">
                        </div>
                        <div class="form-group" id="id_product_form">
                            <?=$name_product?>
                        </div>
                        <div class="form-group">
                            <label for="soluong">Số lượng</label>
                            <input required="true" type="text" class="form-control" id="soluong" name="soluong" value="<?=$soluong?>">
                        </div>
                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input required="true" type="text" class="form-control" id="price" name="price" value="<?=$price?>">
                        </div>
                        <div class="form-group">
                            <label for="thanhtien">Thành tiền</label>
                            <input required="true" type="text" class="form-control" id="thanhtien" name="thanhtien" value="<?=$thanhtien?>">
                        </div>
                        
                            
                        <button class="btn btn-success">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateIdProduct(){
            var value = document.getElementById("id_product_form").innerHTML;
            document.getElementById("id_product_form").innerHTML = value;
        }
    </script>
</body>
</html>