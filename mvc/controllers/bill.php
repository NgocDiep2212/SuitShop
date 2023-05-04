<?php 
require_once "../mvc/model/db/dbhelper.php";
include_once "../mvc/model/thuvien.php";
class bill{
    static function show(){
        $ttkh = bill::postbill();
        include_once "../mvc/view/frontend/bill.php";
    }

    static function postbill(){
        if(isset($_SESSION['id_user'])){
            $id_user = $_SESSION['id_user'];
        
        }else{
            $id_user = '';
        }
        if( isset($_POST['dongydathang']) &&  ($_POST['dongydathang']) ){
            //lấy thông tin kh từ form để tạo đơn hàng
            $name = $address = $tel = $email ="";
            $name=$_POST['name'];
            $address=$_POST['address'];
            $tel=$_POST['tel'];
            $email=$_POST['email'];
            $hinhthucthanhtoan = 0;
            $trangthaithanhtoan = 0;
            $trangthai = 0;
            $total=tongdonhang();
            $note=$_POST['note'];
            $ngaydat = date('Y-m-d H:s:i');
        
            //insert don hang - tao don hang moi
            $id_bill=taodonhang($id_user, $name, $address, $tel, $email, $ngaydat, $total,$note, $hinhthucthanhtoan, $trangthaithanhtoan,$trangthai);
            
        
            //lấy thông tin giỏ hàng tử session + id đơn hàng vừa tạo
        
            //insert vào bảng giỏ hàng
            for($i=0;$i < sizeof($_SESSION['giohang']); $i++){
                $thumbnail=$_SESSION['giohang'][$i][0];
                $name_product=$_SESSION['giohang'][$i][1];
                $price=$_SESSION['giohang'][$i][2];
                $soluong=$_SESSION['giohang'][$i][3];
                $chieucao=$_SESSION['giohang'][$i][4];
                $cannang=$_SESSION['giohang'][$i][5];
                $ngangvai=$_SESSION['giohang'][$i][6];
                $vongnguc=$_SESSION['giohang'][$i][7];
                $vongeo=$_SESSION['giohang'][$i][8];
                $vongco=$_SESSION['giohang'][$i][9];
                $id_product=$_SESSION['giohang'][$i][10];
                
                $thanhtien=$price * $soluong;
                taogiohang($id_bill,$id_product,$name_product,$price,$thanhtien,$thumbnail,$soluong);
                taochitietsanpham($id_bill,$id_product,$chieucao,$cannang,$ngangvai,$vongnguc,$vongeo,$vongco);
            }
            //show confirm đơn hàng
            $ttkh = '
            <h5 style="text-transform: uppercase;text-align: center;margin: 20px 0;">Bạn đã đặt hàng thành công </h5>
            <h5 style="color: #ffb307">#Mã đơn hàng: '.$id_bill.'</h5> 
                    <h5>#Thông tin đơn hàng:</h5>
                        <tr>
                            <td style:"font-weight: 700;">Họ tên:</td>
                            <td>'.$name.'</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ:</td>
                            <td>'.$address.'</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại:</td>
                            <td>'.$tel.'</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>'.$email.'</td>
                        </tr>
                        <tr>
                            <td>Ghi chú:</td>
                            <td>'.$note.'</td>
                        </tr>
                    
                
                </div>';
                $ttgh = showgiohang();
                return $ttkh;
            //unset giỏ hàng session
            //unset($_SESSION['giohang']);
        }
    }
}

?>