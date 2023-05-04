<?php 
function taochitietsanpham($id_bill,$id_product,$chieucao,$cannang,$ngangvai,$vongnguc,$vongeo,$vongco){
    $conn=connectdb();
    $sql = "INSERT INTO detail (id_bill,id_product,chieucao,cannang,ngangvai,vongnguc,vongeo,vongco)
    VALUES ('$id_bill','$id_product','$chieucao','$cannang','$ngangvai','$vongnguc','$vongeo','$vongco')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
}
function taogiohang($id_bill,$id_product,$name_product,$price,$thanhtien,$thumbnail,$soluong){
   $conn=connectdb();
    $sql = "INSERT INTO cart (id_bill,id_product,name_product,price,thanhtien,thumbnail,soluong)
    VALUES ('$id_bill','$id_product','$name_product','$price','$thanhtien','$thumbnail','$soluong')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
}
function taodonhang($id_user, $name, $address, $tel, $email, $ngaydat, $total,$note, $hinhthucthanhtoan,$trangthaithanhtoan,$trangthai){
   $conn=connectdb();
    $sql = "INSERT INTO orders (id_user, name, address, tel, email, ngaydat, total, note, hinhthucthanhtoan,trangthaithanhtoan,trangthai)
    VALUES ('$id_user', '$name', '$address', '$tel', '$email', '$ngaydat', '$total', '$note', '$hinhthucthanhtoan','$trangthaithanhtoan','$trangthai')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
}
function connectdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vest";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        return $e->getMessage();
    }

}

function tongdonhang(){
    $tong=0;
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang']) > 0){
            for($i=0; $i<sizeof($_SESSION['giohang']); $i++){
                $tt = (int)$_SESSION['giohang'][$i][2] * (int)$_SESSION['giohang'][$i][3];
                $tong+=$tt;
            }
        }
    }
    return $tong;
}

function showgiohang(){
    $htgh = "";
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0){
            $htgh .= '
                <thead class="thead-dark" style="text-align: center;">
                <tr >
                    <th >STT</th>
                    <th >Hình</th>
                    <th >Tên</th>
                    <th style="min-width: 100px;" >Đơn Giá</th>
                    <th style="min-width: 100px;" >Số Lượng</th>
                    <th style="min-width: 100px;" >Thành Tiền</th>
                    <th style="min-width: 100px;">Xóa</th>
                </tr>
                </thead>';
            $tong = 0;
            for($i=0; $i<sizeof($_SESSION['giohang']); $i++){
                $tt = (int)$_SESSION['giohang'][$i][2] * (int)$_SESSION['giohang'][$i][3];
                $tong+=$tt;
                //$sp = [$thumbnail,$title,$price,$soluong,$chieucao,$cannang,$ngangvai,$vongnguc,$vongeo,$vongco,$id_product];
                $htgh .= '<tr style="text-align:center;">
                        <td>'.($i+1).'</td>
                        <td ><img style="max-width: 100px;" src="'.$_SESSION['giohang'][$i][0].'" alt=""></td>
                        <td style="width:25%; text-align:left">'.$_SESSION['giohang'][$i][1].'</td>
                        <td>'.$_SESSION['giohang'][$i][2].'</td>
                        <td>'.$_SESSION['giohang'][$i][3].'</td>
                        <td style="width:15%;"> <div>'.$tt.'</div> </td> 
                        <td>
                            <a href="&delid='.$i.'">Xóa</a>
                        </td> 
                    
                    <tr>
                        <td colspan="7">Chiều cao: '.$_SESSION['giohang'][$i][4].' cm, Cân nặng: '.$_SESSION['giohang'][$i][5].' cm, Ngang vai: '.$_SESSION['giohang'][$i][6].' cm, Vòng ngực: '.$_SESSION['giohang'][$i][7].' cm, Vòng eo: '.$_SESSION['giohang'][$i][8].' cm, Vòng cổ: '.$_SESSION['giohang'][$i][9].' cm</td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        
                    </tr>
                    ';
            }
            $htgh .= '
            <thead class="thead-light"">
            <tr>
                    <th colspan="5" style="text-align: center;">Tổng đơn hàng:</th>
                    <th>
                        <div>'.$tong.'</div>
                    </th>
                    <th></th>
                </tr>
            </thead>';
        }
    }
    return $htgh;
}
?>