<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customer
 *
 * @author Administrator
 */
class customer {
   
    
    public function __construct() {}
    
    function login($user,$pass){
        $db=new connection();
        $str="select * from `customer` where `username`='$user' and `pass`='$pass'";
        $r=$db->getInstance($str);
        return $r;
    }
}

?>
