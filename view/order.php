<?php include '../view/header_tpl.php'; ?>
        <div style="margin-left: 10px;">
            <?php 
            $result=$o->getOrder($_SESSION['oder_id']);
            $odi=$result[0];
            $dc=$result[1];
            $ctid=$result[3];
            $ctn=$result[4];
            $d=new DateTime($dc);
            echo '<h1>Hoa don:'.$odi.'</h1>';
            echo '<h5>Khac hang:['.$ctid.']'.$ctn.'</h5>';
            echo '<h5>Ngay lap:'.$d->format('d/m/Y').'</h5>';
            ?>
            <table width="100%" border="1">
                <tr>
                    <td>Ma hang</td>
                    <td>Ten</td>
                    <td>So luong</td>
                    <td>Don gia</td>
                    <td>Thanh tien</td>
                </tr>
                <?php 
                $result1=$o->getOderDetail( $_SESSION['oder_id']);
                while($set=$result1->fetch()):
                
                ?>
                <tr>
                    <td><?php echo  $set["mobileId"]; ?></td> 
                    <td><?php echo  $set["name"]; ?></td> 
                    <td><?php echo  $set ["quanlity"]; ?></td> 
                    <td><?php echo  $set["price"]; ?></td> 
                    <td><?php echo  $set["total"]; ?></td> 
                </tr>
                <?php endwhile; ?>
                <tr>
                    <td colspan='4' style="text-align: right; font-weight: bold;"> Tong hoa don:</td>
                    <td style="color: red; font-weight: bold;"><?php echo $result['total']; ?></td>
                </tr>
            </table>
        </div>
<?php include '../view/footer_tpl.php'; ?>
</div>
    </body>
</html>
