<?php 
    $sql = 'select count(id) as total from category';
    $countc1 = executeSingleResult($sql);
    if($countc1 != null){
        $countc = $countc1['total'];
    }
    $sql = 'select count(id) as total from product';
    $countp1 = executeSingleResult($sql);
    if($countp1 != null){
        $countp = $countp1['total'];
    }
    $sql = 'select count(id) as total from user';
    $countu1 = executeSingleResult($sql);
    if($countu1 != null){
        $countu = $countu1['total'];
    }
    $sql = 'select count(id) as total from orders';
    $counto1 = executeSingleResult($sql);
    if($counto1 != null){
        $counto = $counto1['total'];
    }

    $sql = 'select * from orders limit 5';
    $ordersList = executeResult($sql);
?>