<?php 
if(!empty($_POST)){
    if(isset($_POST['title'])){
        $title = $_POST['title'];
        $title = str_replace('"', '\\"',$title);
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $id = str_replace('"', '\\"',$id);
    }
    if(isset($_POST['price'])){
        $price = $_POST['price'];
        $price = str_replace('"', '\\"',$price);
    }
    if(isset($_POST['thumbnail'])){
        $thumbnail = $_POST['thumbnail'];
        $thumbnail = str_replace('"', '\\"',$thumbnail);
    }
    if(isset($_POST['content'])){
        $content = $_POST['content'];
        $content = str_replace('"', '\\"',$content);
    }
    if(isset($_POST['id_category'])){
        $id_category = $_POST['id_category'];
        $id_category = str_replace('"', '\\"',$id_category);
    }

    if(!empty($title)){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        if($id == ''){
            $sql = 'insert into product(title, thumbnail, price, content, id_category, created_at, updated_at) values 
            ("'.$title.'",
            "'.$thumbnail.'",
            "'.$price.'", 
            "'.$content.'", 
            "'.$id_category.'",
            "'.$created_at.'", 
            "'.$updated_at.'"
            )';
        }else{
            $sql = 'update product set title ="'.$title.'", updated_at = "'.$updated_at.'", thumbnail = "'.$thumbnail.'", price = "'.$price.'", content = "'.$content.'", id_category = "'.$id_category.'" where id = '.$id;
        }
        
        execute($sql); 

        header('Location: /project-php/public/ad_p'); 
        die();
    }
}



?>