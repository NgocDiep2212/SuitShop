
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../mvc/view/frontend/css/style.css">
</head>
<body>
    <?php include("../mvc/view/frontend/layout/header.php"); ?>
        <img src="https://suithanquoc.com/wp-content/uploads/2022/06/banner_nek.jpg" class="banner" alt="Responsive image">
        <div class="breadcumb">
            
        </div>
        <div class="main">
            <div class="wrapper">
                <div class="product-services row container" style="margin: auto;">
                    <div class="item ">
                        <div class="icon">
                            <img src="https://file.hstatic.net/200000053174/file/freeship_63a6c2551cba4ea2805ba153ec96ea6f.svg" alt="icon">
                        </div>
                        <div class="content">
                            <p class="title">Miễn phí giao hàng</p>
                            <p class="desc">Áp dụng cho đơn hàng <br> >499.000đ</p>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="icon">
                            <img src="https://file.hstatic.net/200000053174/file/doi_tra_aab8fa9f7151418da279d47d821153d7.svg" alt="icon">
                        </div>
                        <div class="content">
                            <p class="title">Đổi trả miễn phí</p>
                            <p class="desc">30 ngày với bất kỳ lỗi nào và có <br>Bưu tá tới lấy tận nơi</p>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="icon">
                            <img src="https://file.hstatic.net/200000053174/file/trai_nghiem_2a7b24b72fd94b55bbeaaf81b631c7e1.svg" alt="icon">
                        </div>
                        <div class="content">
                            <p class="title">Cam kết tốt nhất</p>
                            <p class="desc">Mordena cam kết giá tốt nhất với <br> chất lượng tốt nhất</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-slider container">
                <h3 class="list-content" >🔥 TOP TRENDING IN MODERNA</h3>
                <div class="list-product row responsive">
                    <?php $myhome = new Home();
                        $myhome::showproduct();
                    ?>
    
                </div>

            <div class="category">
                <h3 class="list-content">DANH MỤC NỔI BẬT</h3>
                <div class="row">
                    <div class="product-item col-lg-4">
                        <a href="./category/show/1">
                            <img src="https://product.hstatic.net/200000053174/product/7_85987233dffb4f51b10acd0f8f7b0382_master.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: center; font-weight:700;">
                                BỘ VEST
                            </div>
                        </a>
                    </div>
                    <div class="product-item col-lg-4">
                        <a href="./category/show/2">
                            <img src="https://product.hstatic.net/200000053174/product/ao_giu_nhiet_cover_23_6bd3109770e64832bd7b8f06533e4fed_master.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: center; font-weight:700;">
                                ÁO VEST
                            </div>
                        </a>
                    </div>
                    <div class="product-item col-lg-4">
                        <a href="./category/show/3">
                            <img src="https://product.hstatic.net/200000053174/product/2_017dcf13d94b48a085b8981db4175145_master.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: center; font-weight:700;">
                                QUẦN TÂY
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                <div class="gthieu">
                    <p>
                    Morderna dẫn đầu thị phần vest may theo yêu cầu các thiết kế đi đầu xu hướng, vest Morderna luôn đáp ứng nhu cầu của các cặp đôi và là trang phục đồng hành, giúp các chú rể tỏa sáng trong ngày cưới. </br>
                    </br>
                    Hè này, tại Morderna mang đến bộ sưu tập vest cưới cao cấp với các tông màu đa dạng, được làm từ chất liệu wool và cotton cao cấp với khả năng thấm hút và thoáng mát. Kỹ thuật may tôn dáng nhưng tạo sự thoải mái trong từng chuyển động được nghiên cứu chuyên sâu và kinh nghiệm phục vụ hơn 1.000.000 khách hàng. Kiểu dáng, màu sắc đa dạng phù hợp cho các Quý ông thoải mái lựa chọn. </br>
                    </br>
                    Vì vậy, còn chờ gì nữa mà không qua Morderna để sở hữu ngay bộ vest cưới sang trọng, lịch lãm cho riêng mình.
                    </p>

                    <a href="#" class="text-center d-block mb-3">Xem thêm</a>
                </div>
            </div>

            <div class="feedback-wrapper">
                <div class="feedback container">
                    <h5>KHÁCH HÀNG NÓI GÌ VỀ MODERNA</h5>
                    <p>#FEEDBACK</p>
                    <div class="list-feedback responsive1">
                        <div class="feedback-item">
                            <img src="https://dongphucthinhvuong.vn/wp-content/uploads/2020/05/dong-phuc-ao-vest-nam-cong-so-cao-cap-dongphucthinhvuong.com-mau-den8.jpg" alt="">
                            <p>"Cách làm việc bên bạn chu đáo lắm, từ khâu tư vấn đến lúc mua-đổi-trả. Mong rằng shop luôn giữ được cách làm việc như vậy." - (Hoài Phạm)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://salt.tikicdn.com/ts/product/59/80/14/0fc432fbba73e2a3136162ab2b722805.png" alt="">
                            <p>"Mua áo cho thằng bạn hôm sinh nhật nó. Thấy mọi người bảo shop bán hàng êm nên mua thử. Đúng là áo vừa đẹp lại rẻ so với thị trường. Love - (Hieu Tran)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVbMOAainxz7l0expAUsR186bspN-_RmrB6g&usqp=CAU" alt="">
                            <p>"Cách làm việc bên bạn chu đáo lắm, từ khâu tư vấn đến lúc mua-đổi-trả. Mong rằng shop luôn giữ được cách làm việc như vậy." - (Duong Phan)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT036wEnnchit3bpUmPggMsJ59pERfyO0KK9A&usqp=CAU" alt="">
                            <p>"Mua áo cho thằng bạn hôm sinh nhật nó. Thấy mọi người bảo shop bán hàng êm nên mua thử. Đúng là áo vừa đẹp lại rẻ so với thị trường. Love - (Hieu Tran)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://static2.yan.vn/YanNews/2167221/202004/sao-nam-vbiz-dien-vest-ai-cung-hoa-soai-ca-son-tung-isaac-sieu-banh-ac516ace.jpeg" alt="">
                            <p>"Cách làm việc bên bạn chu đáo lắm, từ khâu tư vấn đến lúc mua-đổi-trả. Mong rằng shop luôn giữ được cách làm việc như vậy." - (Adam)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://cavino.vn/wp-content/uploads/2018/11/vest-han-quoc-nam-ha-noi.jpg" alt="">
                            <p>"Mua áo cho thằng bạn hôm sinh nhật nó. Thấy mọi người bảo shop bán hàng êm nên mua thử. Đúng là áo vừa đẹp lại rẻ so với thị trường. Love - (Kiet Sun)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://lzd-img-global.slatic.net/g/ff/kf/S6e0ecf9d131f406fb83b012a5e5d523cO.jpg_720x720q80.jpg_.webp" alt="">
                            <p>"Cách làm việc bên bạn chu đáo lắm, từ khâu tư vấn đến lúc mua-đổi-trả. Mong rằng shop luôn giữ được cách làm việc như vậy." - (Hoài Phạm)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://static2.yan.vn/YanNews/2167221/202004/sao-nam-vbiz-dien-vest-ai-cung-hoa-soai-ca-son-tung-isaac-sieu-banh-ea1df4d6.jpeg" alt="">
                            <p>"Mua áo cho thằng bạn hôm sinh nhật nó. Thấy mọi người bảo shop bán hàng êm nên mua thử. Đúng là áo vừa đẹp lại rẻ so với thị trường. Love - (Hieu Tran)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://donghotantan.vn/wp-content/uploads/2015/06/dong-ho-longines-automatic-6-1-626x500.png" alt="">
                            <p>"Cách làm việc bên bạn chu đáo lắm, từ khâu tư vấn đến lúc mua-đổi-trả. Mong rằng shop luôn giữ được cách làm việc như vậy." - (Hoài Phạm)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/395/687/products/dsc06043.jpg?v=1624430589733" alt="">
                            <p>"Mua áo cho thằng bạn hôm sinh nhật nó. Thấy mọi người bảo shop bán hàng êm nên mua thử. Đúng là áo vừa đẹp lại rẻ so với thị trường. Love - (Hieu Tran)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://mayaovestnam.com/images/upload/may-ao-vest-nam-hoan-kiem-3.jpg" alt="">
                            <p>"Cách làm việc bên bạn chu đáo lắm, từ khâu tư vấn đến lúc mua-đổi-trả. Mong rằng shop luôn giữ được cách làm việc như vậy." - (Hoài Phạm)</p>
                        </div>
                        <div class="feedback-item">
                            <img src="https://static2.yan.vn/YanNews/2167221/202004/sao-nam-vbiz-dien-vest-ai-cung-hoa-soai-ca-son-tung-isaac-sieu-banh-fb85b77b.jpeg" alt="">
                            <p>"Mua áo cho thằng bạn hôm sinh nhật nó. Thấy mọi người bảo shop bán hàng êm nên mua thử. Đúng là áo vừa đẹp lại rẻ so với thị trường. Love - (Hieu Tran)</p>
                        </div>
                    </div>
                </div>
            </div>

<?php include("../mvc/view/frontend/layout/footer.php"); ?>
            
        