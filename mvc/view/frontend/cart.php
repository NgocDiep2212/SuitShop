

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="/project-php/mvc/view/frontend/css/style.css">
    <link rel="stylesheet" href="/project-php/mvc/view/frontend/css/cart.css">
    
</head>
<body>
<?php include("../mvc/view/frontend/layout/header.php"); ?>
    <nav aria-label="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/project-php/public/Home">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Giỏ hàng</a></li>
                </ol>
		</nav>
    </nav>
    <div class="app row" style="justify-content:space-around;">
        <div class="container-form col-lg-4">
        <h4 style="text-align:center; color: #4d4b4b;">Thông tin nhận hàng</h4>
        <div class="form-wrap">
            <form action="../bill" method="post">
                <div class="row row-form">
                    <div class="col-25">
                        <label for="name">Họ và tên</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="form-control" name="name" id="name" required placeholder="Họ và tên...">
                    </div>
                </div>
                <div class="row row-form">
                    <div class="col-25">
                        <label for="tel">Số điện thoại</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="form-control" name="tel" id="tel" required placeholder="Số điện thoại...">
                    </div>
                </div>
                <div class="row row-form">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="form-control" name="email" id="email" required placeholder="Email...">
                    </div>
                </div>
                <div class="row row-form">
                    <div class="col-25">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-75">
                        <!-- <textarea id="address" name="address" placeholder="Địa chỉ..." style="height:200px"></textarea> -->
                        <input type="text" class="form-control" name="address" id="address" required placeholder="Dia chi...">
                    </div>
                </div>
                <div class="row row-form">
                    <div class="col-25">
                        <label for="note">Ghi chú</label>
                    </div>
                    <div class="col-75">
                        <textarea id="note" name="note" placeholder="Ghi chú..." style="height:200px"></textarea>
                    </div>
                </div>
                <br>
                <div class="row row-form">
                    <input type="submit" class="btn btn-primary m-auto" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG">
                </div>
            </form>
        </div>   
    </div>
    <div class="box-right1 col-lg-6">
            <h4 class="mb-2">Giỏ hàng:</h4>
            
            <div class="row">
                <table class="table ">
                    <?php echo showgiohang(); ?>
                </table>
            </div>
            <div style="text-align: right;">
                <a href="&delcart=1"><button class="btn btn-outline-danger">Xóa giỏ hàng</button></a>
                <a href="/project-php/public/Home"><button class="btn btn-outline-success">Tiếp tục đặt hàng</button></a>
            </div>
        </div> 
    </div>
</body>
</html>