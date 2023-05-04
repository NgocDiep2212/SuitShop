<?php
require_once('/project-php/mvc/model/db/dbhelper.php');

if(!empty($_POST)){
    if(isset($_POST['action'])){
        $action = $_POST['action'];

        switch($action){
            case 'deleteCategory':
                    if(isset($_POST['id'])){
                        $id = $_POST['id'];

                        $sql = 'delete from category where id = '.$id;
                        execute($sql);
                    }
            case 'deleteProduct':
                    if(isset($_POST['id'])){
                        $id = $_POST['id'];

                        $sql = 'delete from product where id = '.$id;
                        execute($sql);
                    }
            case 'deleteUser':
                    if(isset($_POST['id'])){
                        $id = $_POST['id'];

                        $sql = 'delete from user where id = '.$id;
                        execute($sql);
                    }
                    break;
            case 'deleteCustomer':
                    if(isset($_POST['id'])){
                        $id = $_POST['id'];

                        $sql = 'delete from customer where ID = '.$id;
                        execute($sql);
                    }
                    break;
            case 'exit':
                        if(isset($_SESSION['role'])) unset($_SESSION['role']);
                        break;
        }
    }
}