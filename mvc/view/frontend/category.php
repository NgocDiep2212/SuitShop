
<!DOCTYPE html>
<html>
<head>
	<title>Category Page - <?=$name?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="/project-php/mvc/view/frontend/css/style.css">
	
</head>
<body>
<?php include("../mvc/view/frontend/layout/header.php"); ?>
<nav aria-label="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/project-php/public/Home">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
                </ol>
		</nav>
    </nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center"><?=$name?></h2>
			</div>
			<div class="panel-body row list-product">
				<?php 
                        $myc::showcategory($id);
                    ?>
            
            </div>
		</div>
	</div>

</body>
</html>