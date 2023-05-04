<?php 
if(!empty($_POST)){
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $username = str_replace('"', '\\"',$username);
    }
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $name = str_replace('"', '\\"',$name);
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $id = str_replace('"', '\\"',$id);
    }
    if(isset($_POST['role'])){
        $role = $_POST['role'];
        $role = str_replace('"', '\\"',$role);
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        $password = str_replace('"', '\\"',$password);
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
        $address = str_replace('"', '\\"',$address);
    }
    if(isset($_POST['SDT'])){
        $SDT = $_POST['SDT'];
        $SDT = str_replace('"', '\\"',$SDT);
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $email = str_replace('"', '\\"',$email);
    }

    if(!empty($username)){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        if($id == ''){
            $sql = 'insert into user(username,name, password, role, address, email, SDT, created_at, updated_at) values 
            ("'.$username.'",
            "'.$name.'",
            "'.$password.'",
            "'.$role.'", 
            "'.$address.'", 
            "'.$email.'",
            "'.$SDT.'",
            "'.$created_at.'", 
            "'.$updated_at.'"
            )';
        }else{
            $sql = 'update user set username ="'.$username.'",name ="'.$name.'", updated_at = "'.$updated_at.'", created_at = "'.$created_at.'", password = "'.$password.'", role = "'.$role.'", address = "'.$address.'", SDT = "'.$SDT.'", email = "'.$email.'" where id = '.$id;
        }
        
        execute($sql); 

        header('Location: /project-php/public/ad_u'); 
        die();
    }
}


?>