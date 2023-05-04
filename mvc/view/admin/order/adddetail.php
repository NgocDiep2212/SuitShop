<?php 
    
    if(isset($_POST['id_user'])){
        $id_user = $_POST['id_user'];
        $id_user = str_replace('"', '\\"',$id_user);
    }
    if(isset($_POST['chieucao'])){
        $chieucao = $_POST['chieucao'];
        $chieucao = str_replace('"', '\\"',$chieucao);
    }
    if(isset($_POST['cannang'])){
        $cannang = $_POST['cannang'];
        $cannang = str_replace('"', '\\"',$cannang);
    }
    if(isset($_POST['ngangvai'])){
        $ngangvai = $_POST['ngangvai'];
        $ngangvai = str_replace('"', '\\"',$ngangvai);
    }
    if(isset($_POST['vongnguc'])){
        $vongnguc = $_POST['vongnguc'];
        $vongnguc = str_replace('"', '\\"',$vongnguc);
    }
    if(isset($_POST['vongeo'])){
        $vongeo = $_POST['vongeo'];
        $vongeo = str_replace('"', '\\"',$vongeo);
    }
    if(isset($_POST['vongco'])){
        $vongco = $_POST['vongco'];
        $vongco = str_replace('"', '\\"',$vongco);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mvc/view/admin/css/header.css">
    <link rel="stylesheet" href="../mvc/view/admin/css/style.css">
    <title>Document</title>
</head>
<body>
<?php include "../mvc/view/admin/common/header.php" ?>
    <div id="app">
        <div class="form-group">
            <label for="chieucao">Chiều cao</label>
            <input required="true" type="text" class="form-control" id="chieucao" name="chieucao" value="<?=$chieucao?>">
        </div>
        <div class="form-group">
            <label for="cannang">Cân nặng</label>
            <input required="true" type="text" class="form-control" id="cannang" name="cannang" value="<?=$cannang?>">
        </div>
        <div class="form-group">
            <label for="ngangvai">Ngang vai</label>
            <input required="true" type="text" class="form-control" id="ngangvai" name="ngangvai" value="<?=$ngangvai?>">
        </div>
        <div class="form-group">
            <label for="vongeo">Vòng eo</label>
            <input required="true" type="text" class="form-control" id="vongeo" name="vongeo" value="<?=$vongeo?>">
        </div>
        <div class="form-group">
            <label for="vongnguc">Vòng ngực</label>
            <input required="true" type="text" class="form-control" id="vongnguc" name="vongnguc" value="<?=$vongnguc?>">
        </div>
        <div class="form-group">
            <label for="vongco">Vòng cổ</label>
            <input required="true" type="text" class="form-control" id="vongco" name="vongco" value="<?=$vongco?>">
        </div>
    </div>
</body>
</html>