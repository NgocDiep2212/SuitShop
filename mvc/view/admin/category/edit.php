
<!DOCTYPE html>
<html>
<head>
	<title>Sửa Danh Mục</title>
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
    <div id="app">
        
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Sửa Danh Mục</h2>
                </div>
                <div class="panel-body">
                    <form action="../../ad_dm" method="post">
                        <div class="form-group">
                                <label for="name">Tên Danh Mục:</label>
                                <input type="text" name="id" value="<?=$id?>" hidden="true">
                                <input required="true" type="text" class="form-control" id="name" name="name" value="<?=$name?>">
                            </div>
                            
                            <button class="btn btn-success">Lưu</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>
</html>