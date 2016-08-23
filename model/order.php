<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order
 *
 * @author Administrator
 */
    class Oder {
    public function __construct() {
        
    }
    public function CreateOder($customerID){
        $db= new connection();
        $date = new DateTime("now");
        $dateCreate = $date->format("Y-m-d");
        $select = "INSERT INTO `order` values('NULL','$dateCreate','0','$customerID')";
        $db->exec($select);
        $int = $db->getInstance("SELECT `orderId` from `order` order by `orderId` DESC limit 1");
        return $int[0];
    }
    public function insertOderDetail($oderID,$proID,$price,$Quantily,$Total){
        $db = new connection();
        $strQuery = "INSERT INTO `order_detail` values ('$oderID','$proID','$price','$Quantily','$Total')";
        $result = $db->exec($strQuery);
    }
     public function updateOderTotal($oderID,$Total){
        $db = new connection();
        $strQuery = "UPDATE `order` SET `total` = $Total WHERE `orderId` = $oderID";
        $result = $db->exec($strQuery);
    }
    public function getOrder($orderID){
        $db= new connection();
        $select = "SELECT `orderId`,`datecreate`,`total`,c.`customerId`, c.`name` from `order` as o inner join `customer` as c on o.`customerId` = c.`customerId` WHERE `orderId`= $orderID";
        $result = $db->getInstance($select);
        return $result;
    }
    public function getOderDetail($orderID){
        $db= new connection();
        $select= "select m.`mobileId`, `name` , `quanlity` , od.`price`, `total` from `order_detail` as od inner join `mobile` as m on od.`mobileId`=m.`mobileId` WHERE orderId = $orderID";
        $result = $db->getList($select);
        return $result;
    }
}

?>
