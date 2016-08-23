<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author Administrator
 */
class product {
    var $productId=null;
    var $name=null;
    var $image=null;
    var $price=null;
    
    public function __construct() {}
    
function getList(){
    $db=new connection();
    $select='select * from `mobile`';
    $result=$db->getList($select);
    return $result;
}

function getListPage($from,$to){
    $db=new connection();
    $select="Select * from `mobile` limit $from,$to";
    $result=$db->getList($select);
    return $result;
}

function getProductById($id){
     $db=new connection();
    echo $select="select * from `mobile` where mobileid=$id";        
     $result = $db->getInstance($select);
     return $result;
}
}

?>
