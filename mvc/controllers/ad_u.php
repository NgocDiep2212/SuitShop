<?php 
    require_once "../mvc/model/db/dbhelper.php";
    require_once "../mvc/model/user.php";
    require_once "../mvc/view/admin/common/utility.php";
    
class ad_u{
        static function show(){
        include "../mvc/model/user.php";
        if(!isset($_SESSION['role']) || ($_SESSION['role'] != 1))  header('location: ./login/show'); 
        $myu = new ad_u(); 
        include_once "../mvc/view/admin/user/index.php";
    }

    
    static function showu(){
        include "../mvc/model/user.php";
  
        //lay danh sach danh muc tu database
        foreach ($userList as $item){
            if($item['role'] == '0'){
                echo '
                    <tr>
                        <td>'.(++$firstIndex).'</td>
                        <td>'.$item['username'].'</td>
                        <td>'.$item['name'].'</td>
                        <td>'.$item['address'].'</td>
                        <td>'.$item['SDT'].'</td>
                        <td>'.$item['email'].'</td>
                        <td>'.$item['password'].'</td>
                        <td>User</td>
                        <td>
                            <a href="./ad_u/editu/'.$item['id'].'"><i class="edit-icon text-warning fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="./ad_u/delu/'.$item['id'].'"><i class="delete-icon text-danger fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>';
            } else if($item['role'] == '1'){
                echo '
                    <tr>
                        <td>'.(++$firstIndex).'</td>
                        <td>'.$item['username'].'</td>
                        <td>'.$item['name'].'</td>
                        <td>'.$item['address'].'</td>
                        <td>'.$item['SDT'].'</td>
                        <td>'.$item['email'].'</td>
                        <td>'.$item['password'].'</td>
                        <td>Admin</td>
                        <td>
                            <a href="./ad_u/editu/'.$item['id'].'"><i class="edit-icon text-warning fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="./ad_u/delu/'.$item['id'].'"><i class="delete-icon text-danger fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>';
            }
            
        }
    }

    static function addu(){
        include_once "../mvc/model/addu.php";
        include_once "../mvc/view/admin/user/add.php";
    }

    static function editu($id){
        if(isset($id)){
            $sql = 'select * from user where id = '.$id;
            $user = executeSingleResult($sql);
            if($user != null){
                $username = $user['username'];
                $name = $user['name'];
                $role = $user['role'];
                $password = $user['password'];
                $email = $user['email'];
                $address = $user['address'];
                $SDT = $user['SDT'];
            }
        }
        include_once "../mvc/view/admin/user/edit.php";
    }

    static function delu($id){
        if(isset($id)){

            $sql = 'delete from user where id = '.$id;
            execute($sql);
        }
        header('location: ../../ad_u');
    }
}


?>