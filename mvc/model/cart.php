<?php 
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //xóa hết sp trong giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)){
        unset($_SESSION['giohang']);
    }
    // xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])){
        $thumbnail=$_POST['thumbnail'];
        $title=$_POST['title'];
        $price=$_POST['price'];
        $chieucao=$_POST['chieucao'];
        $soluong=$_POST['soluong'];
        $cannang=$_POST['cannang'];
        $ngangvai=$_POST['ngangvai'];
        $vongnguc=$_POST['vongnguc'];
        $vongeo=$_POST['vongeo'];
        $vongco=$_POST['vongco'];
        $id_product=$_POST['id_product'];
        //kiem tra sp co trong gio hang ko
        $fl = 0; //kiem tra sp co trung trong gio hang ko

        for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
            if($_SESSION['giohang'][$i][1] == $title && $_SESSION['giohang'][$i][4] == $chieucao && $_SESSION['giohang'][$i][5] == $cannang &&
            $_SESSION['giohang'][$i][6] == $ngangvai && $_SESSION['giohang'][$i][7] == $vongnguc && $_SESSION['giohang'][$i][8] == $vongeo &&
            $_SESSION['giohang'][$i][9] == $vongco){
                $fl =1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3] = $soluongnew;
                break;
            }
        }

        //neu khong trung sp trong gio thi them moi
        if($fl==0){
            $sp = [$thumbnail,$title,$price,$soluong,$chieucao,$cannang,$ngangvai,$vongnguc,$vongeo,$vongco,$id_product];
            $_SESSION['giohang'][]=$sp;
        }

    }
?>