<?php 
if(!empty($_POST)){
    $id = $name = '';
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $name = str_replace('"', '\\"',$name);
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $id = str_replace('"', '\\"',$id);
    }

    if(!empty($name)){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        if($id == ''){
            $sql = 'insert into category(name,created_at, updated_at) values("'.$name.'","'.$created_at.'","'.$update_at.'")';
        }else{
            $sql = 'update category set name ="'.$name.'", updated_at = "'.$updated_at.'" where id = '.$id;
        }
        
        execute($sql); 

        header('Location: /project-php/public/ad_dm'); 
        die();
    }
}


?>