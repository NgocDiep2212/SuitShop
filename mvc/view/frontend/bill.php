
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="/project-php/mvc/view/frontend/css/bill.css">

</head>
<body>
<?php include("../mvc/view/frontend/layout/header.php"); ?>
    <div class="container wrapper" style="padding: 50px 100px;">
            <div class="">
                <div class="check-icon">
                    <img src="/project-php/mvc/view/frontend/img/checked-in-circle.png" alt="">
                </div>
                <table class="table">
                    <?php echo $ttkh;?>     
                </table>
            </div>
           
            <div style="text-align: right;">
                <p >Cảm ơn bạn đã đặt hàng tại MODERNA Fashion, Đơn hàng sẽ sớm được may đo và vận chuyển đến bạn</p>
                <a href="./Home"><button class="btn btn-success">Tiếp tục đặt hàng</button></a>
            </div>
                
    </div>
</body>
</html>