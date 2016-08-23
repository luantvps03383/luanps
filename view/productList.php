<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "../view/header_tpl.php";
            $p = new Product();
            $list = $p->getList();
            
            while($set = $list->fetch()){
                echo "<div style='float:left;width:200px;height:200px'>";
                    echo "<form action='' method='get'>";
                        echo "<input type='hidden' name='action' value='datHang'/>";
                        echo "<input type='hidden' name='id' value='1'/>";
                        echo "<img src='images/" . $set["ProImage"] . "' height='130'/><br/>";
                        echo $set["ProName"]."<br/>";
                        echo $set["ProPrice"]."000<br/>";
                        echo "<select name='ProQuantity'>";
                        for($i=1;$i<100;$i++){
                            echo "<option value='$i'>$i</option>";
                        }
                        echo "</select>";
                        echo "<input type='submit' value='Đặt hàng'>";
                    echo "</form>";
                echo "</div>";
            }
        ?>
    </body>
</html>
