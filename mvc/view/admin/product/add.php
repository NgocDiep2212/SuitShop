
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
                    <h2 class="text-center">Thêm/Sửa Sản Phẩm</h2>
                </div>
                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="title">Tên Sản Phẩm:</label>
                            <input type="text" name="id" value="" hidden="true">
                            <input required="true" type="text" class="form-control" id="title" name="title" value="">
                            </div>
                        <div class="form-group">
                            <label for="id_category">Chọn Danh Mục</label>
                            <select class="form-control" name="id_category" id="id_category">
                                <option value="">--Lựa chọn danh mục --</option>
    <?php
    $sql = 'select * from category';
    $categoryList = executeResult($sql);

    foreach ($categoryList as $item){
            echo '<option value ="'.$item['id'].'">'.$item['name'].'</option>';
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
                            <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail" value="" onchange="updateThumbnail()">
                            <img id="img_thumbnail" src="" style="max-width: 200px;">
                        </div>    
                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <textarea class="form-control" rows="5" name="content" id="content"></textarea>
                        </div>    

                        
                            <button class="btn btn-success">Lưu</button>
                    </form>
                </div>
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
    </script>
</body>
</html>