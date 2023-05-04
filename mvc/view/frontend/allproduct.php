
<!DOCTYPE html>
<html>
<head>
	<title>All product</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="/project-php/mvc/view/frontend/js/allp.js"></script>
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
        <h2 class="text-center">Tất cả sản phẩm</h2>
			<div class="panel-body row list-product">
                    <?php $myap = new allp();
                        $myap::showproduct();
                    ?>
            
            </div>
	
            <?=paginarion($number, $page, $act)?>
	</div>

</div>
</body>
</html>