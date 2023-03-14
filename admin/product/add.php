<?php 
require_once('../../db/dbhelper.php');
$id = $title = $thumbnail = $content = $id_category = '';
if(!empty($_POST)){
    if(isset($_POST['title'])){
        $title = $_POST['title'];
        $title = str_replace('"', '\\"',$title);
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $id = str_replace('"', '\\"',$id);
    }
    if(isset($_POST['price'])){
        $price = $_POST['price'];
        $price = str_replace('"', '\\"',$price);
    }
    if(isset($_POST['thumbnail'])){
        $thumbnail = $_POST['thumbnail'];
        $thumbnail = str_replace('"', '\\"',$thumbnail);
    }
    if(isset($_POST['content'])){
        $content = $_POST['content'];
        $content = str_replace('"', '\\"',$content);
    }
    if(isset($_POST['id_category'])){
        $id_category = $_POST['id_category'];
        $id_category = str_replace('"', '\\"',$id_category);
    }

    if(!empty($title)){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        if($id == ''){
            $sql = 'insert into product(title, thumbnail, price, content, id_category, created_at, updated_at) values 
            ("'.$title.'",
            "'.$thumbnail.'",
            "'.$price.'", 
            "'.$content.'", 
            "'.$id_category.'",
            "'.$created_at.'", 
            "'.$updated_at.'"
            )';
        }else{
            $sql = 'update product set title ="'.$title.'", updated_at = "'.$updated_at.'", thumbnail = "'.$thumbnail.'", price = "'.$price.'", content = "'.$content.'", id_category = "'.$id_category.'" where id = '.$id;
        }
        
        execute($sql); 

        header('Location: index.php'); 
        die();
    }
}

$id = '';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from product where id = '.$id;
    $product = executeSingleResult($sql);
    if($product != null){
        $title = $product['title'];
        $price = $product['price'];
        $thumbnail = $product['thumbnail'];
        $id_category = $product['id_category'];
        $content = $product['content'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Sản Phẩm</title>
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
            <a class="nav-link" href="index.php">Quản Lý Sản Phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../user/">Quản Lý Người Dùng</a>
        </li>
        <li class="nav-item">
             <a class="nav-link" onclick="exituser();" href="#">Thoát</a>
        </li>
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/Sửa Sản Phẩm</h2>
			</div>
			<div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="title">Tên Sản Phẩm:</label>
                        <input type="text" name="id" value="<?=$id?>" hidden="true">
                        <input required="true" type="text" class="form-control" id="title" name="title" value="<?=$title?>">
                        </div>
                    <div class="form-group">
                        <label for="id_category">Chọn Danh Mục</label>
                        <select class="form-control" name="id_category" id="id_category">
                            <option value="">--Lựa chọn danh mục --</option>
<?php
$sql = 'select * from category';
$categoryList = executeResult($sql);

foreach ($categoryList as $item){
    if($item['id'] == $id_category){
        echo '<option selected value ="'.$item['id'].'">'.$item['name'].'</option>';
    }else{
        echo '<option value ="'.$item['id'].'">'.$item['name'].'</option>';
    }
}
?>
                        </select>
                       
                    </div>    
                    <div class="form-group">
                        <label for="price">Giá Bán</label>
                        <input required="true" type="number" class="form-control" id="price" name="price" value="<?=$price?>">
                    </div>    
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail" value="<?=$thumbnail?>" onchange="updateThumbnail()">
                        <img id="img_thumbnail" src="<?=$thumbnail?>" style="max-width: 200px;">
                    </div>    
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea class="form-control" rows="5" name="content" id="content"><?=$content?></textarea>
                    </div>    

                    
                        <button class="btn btn-success">Luu</button>
                </form>
            </div>
		</div>
	</div>

    <script type="text/javascript">
        function updateThumbnail(){
            $('#img_thumbnail').attr('src', $('#thumbnail').val())
        }

        $(function(){
            $('#content').summernote({
                height: 350,
                codemirror: {
                    theme: 'monokai'
                }
            });
        })

        function exituser(){
            var option = confirm('Bạn có chắc chắn muốn đăng xuất không?');
                if(!option) return;
                $.post('ajax.php',{
                    'action': 'delete'
                },function(data){
                    location.href = "../user/login.php";
                })
       }
    </script>
</body>
</html>