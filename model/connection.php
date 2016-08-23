<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connection
 *
 * @author Administrator
 */
class connection {
    var $db=null;
    
    function __construct() {
        $dsn="mysql:host=localhost;dbname=mobile_management";
        $user="root";
        $pass="";
        $this->db= new PDO ($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    
    function getList($select){
       $result = $this -> db -> query($select);
       return $result;
   }
   
   function getInstance($select){
       $results = $this -> db -> query($select);
       $result = $results -> fetch();
       return $result;
   }
   
   function exec($query){
       $result = $this -> db -> exec($query);
       return $result;
   }

}

?>
