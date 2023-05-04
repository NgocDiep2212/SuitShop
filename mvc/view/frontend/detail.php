
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="/project-php/mvc/view/frontend/css/style.css">
	<link rel="stylesheet" href="/project-php/mvc/view/frontend/css/detail.css">
</head>
<body>
<?php include("../mvc/view/frontend/layout/header.php"); ?>
	<nav aria-label="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../Home">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
                </ol>
		</nav>
    </nav>
	<div class="container">
	
	<div class="row">
		<div class="col-lg-6">
			<img src="<?=$product['thumbnail']?>" alt="" style="max-width: 450px;">
		</div>
		<div class="col-lg-6">
			<h2 class="text-center"><?=$product['title']?></h2>
			<h5 class="price" id="price" style="font-weight: 600; font-size: 24px;"></h5>
			<h5 class="sodo">Nhập số đo của bạn:</h5>
            <!-- form -->
			<form method="post" action="../../cart/">
			<div class="row form-box">
				<div class="form-group col-lg-4" style="display: none;">
					<label for="thumbnail"></label>
					<input type="text" name="thumbnail" id="thumbnail" value="<?=$product['thumbnail']?>">
				</div>

				<div class="form-group col-lg-4" style="display: none;">
					<label for="id_product"></label>
					<input type="text" name="id_product" id="id_product" value="<?=$product['id']?>">
				</div>
				
				<div class="form-group col-lg-4" style="display: none;">
					<label for="title"></label>
					<input type="text" name="title" id="title" value="<?=$product['title']?>">
				</div>
				
				<div class="form-group col-lg-4" style="display: none;">
					<label for="price"></label>
					<input type="number" name="price" id="price" value="<?=$product['price']?>">
				</div>
				
				<div class="form-group col-lg-4">
					<label for="chieucao">Chiều cao (cm):</label>
					<input type="number" class="form-control" name="chieucao" id="chieucao" placeholder="Chiều cao..." required>
				</div>
				<div class="form-group col-lg-4">
					<label for="cannang">Cân nặng (cm):</label>
					<input type="number" name="cannang" id="cannang" class="form-control" placeholder="Cân nặng..." required>
				</div>
				<div class="form-group col-lg-4">
					<label for="ngangvai">Ngang vai (cm):</label>
					<input type="number" name="ngangvai" id="ngangvai" class="form-control" placeholder="Ngang vai..." required>
				</div>
				<div class="form-group col-lg-4">
					<label for="vongnguc">Vòng ngực (cm):</label>
					<input type="number" name="vongnguc" id="vongnguc" class="form-control" placeholder="Vòng ngực..." required>
				</div>
				<div class="form-group col-lg-4">
					<label for="vongeo">Vòng eo (cm):</label>
					<input type="number" name="vongeo" id="vongeo" class="form-control" placeholder="Vòng eo..." required>
				</div>
				<div class="form-group col-lg-4">
					<label for="vongco">Vòng cổ (cm):</label>
					<input type="number" name="vongco" id="vongco" class="form-control" placeholder="Vòng cổ..." required>
				</div>
			</div>
			<p style="display: inline; line-height: 33px;">Số lượng: </p>
			<div class="buttons_added form-group">
				<label for="soluong"></label>
				<input class="minus is-form" type="button" value="-">
				<input aria-label="quantity" class="input-qty" max="100" min="1" name="soluong" id="soluong" type="number" value="1" style="    border-radius: 0;">
				<input class="plus is-form" type="button" value="+">
			</div>
			<br>
			<button type="submit" class="btn btn-primary" id="addcart" name="addcart" style="text-align:center;">Thêm vào giỏ</button>
	
			</form>
			
		</div>
</div>

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
	<div class="container">
		<h3 style="text-align: center; background-color: #dbdbdb;">Thông tin sản phẩm</h3>
		<p><?=$product['content']?></p>

		<h3 class="text-center" style="background-color: #dbdbdb;">Có thể bạn sẽ thích</h3>
		<div class="list-product row responsive">
			<?php $myhome = new Home();
				$myhome::showproduct();
			?>
	
		</div>
	</div>
	
            
               
	</div>
	<?php include("../mvc/view/frontend/layout/footer.php"); ?>
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
        
		function exituser(){
        var option = confirm('Bạn có chắc chắn muốn đăng xuất không?');
            if(!option) return;
            $.post('ajax.php',{
                'action': 'delete'
            },function(data){
                location.href = "../admin/user/login.php";
            })
       }
	   //<![CDATA[
			$('input.input-qty').each(function() {
			var $this = $(this),
				qty = $this.parent().find('.is-form'),
				min = Number($this.attr('min')),
				max = Number($this.attr('max'))
			if (min == 0) {
				var d = 0
			} else d = min
			$(qty).on('click', function() {
				if ($(this).hasClass('minus')) {
				if (d > min) d += -1
				} else if ($(this).hasClass('plus')) {
				var x = Number($this.val()) + 1
				if (x <= max) d += 1
				}
				$this.attr('value', d).val(d)
			})
			})
			//]]>
	</script>
</body>
</html>