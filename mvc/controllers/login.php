<?php 
    require_once "../mvc/model/db/dbhelper.php";
class login{
    static function show(){
        login::checklogin();
        include_once "../mvc/view/admin/login/login.php";
    }

    static function checklogin(){
        $username = $password = '';

        if(!empty($_POST)){
            if(isset($_POST['username'])){
                $username = $_POST['username'];
                $username = str_replace('"', '\\"',$username);
            }
            if(isset($_POST['password'])){
                $password = $_POST['password'];
                $password = str_replace('"', '\\"',$password);
            }
            $sql = "select * from user where username='".$username."' and password='".$password."'";
            $user = executeSingleResult($sql);
            if(isset($sql) && isset($user['role'])){
                $role = $user['role'];
                $_SESSION['role'] = $role;
                $id_user = $user['id'];
                if(isset($id_user)) $_SESSION['id_user'] = $id_user;
                $username = $user['username'];
                if(isset($id_user)) $_SESSION['username'] = $username;
                if($role == 0){
                    header('location: /project-php/public/Home');
                }else if($role == 1){
                    header('location: /project-php/public/ad_d');
                }
            }
            
            
            else{
                $txt_error ="Username hoặc Password không tồn tại";
            }

        }
    }

    
 
}
?>