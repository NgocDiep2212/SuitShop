<?php
require_once('../../db/dbhelper.php');
session_start();
ob_start();
if(!empty($_POST)){
    if(isset($_POST['action'])){
        $action = $_POST['action'];

        switch($action){
            case 'delete':
                    if(isset($_POST['id'])){
                        $id = $_POST['id'];

                        $sql = 'delete from user where id = '.$id;
                        execute($sql);
                    }
                    break;
            case 'exit':
                if(isset($_SESSION['role'])){
                    unset($_SESSION['role']);
                    unset($_SESSION['id_user']);
                } 
                break;
            
        }
    }
}