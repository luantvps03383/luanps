<?php include '../view/header_tpl.php'; ?>
        <div style="margin-left: 10px;">
            <div style="clear: both;"></div>
            <h1>Danh sach san pham</h1>
            <table style="margin-left: 150px;">
                <tr>
                    <?php 
                    $pro = new product();
                    $result=$pro->getList();
                    $j=1;
                    while ($set = $result ->fetch()):
                    ?>
                    <td>
                        <form action="../Controller/index.php" method="post">
                            <input type="hidden" name="action" value="add_cart"/>
                            <table>
                                <tr>
                                    <td>
                                        <img src="<?php echo 'images/'.$set['image'] ;?>" width="150px" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name ="productkey" value ="<?php echo $set['mobileId']; ?>"/>
                                        <b><a href="?action=prodetai&id=<?php echo $set['mobileId']; ?>"><?php echo $set['name']; ?></a> </b>
                                        <p>Price: <?php echo $set['price']; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="itemqty">
                                            <?php 
                                            for ($i=1; $i<=10;$i++):
                                            ?>
                                            <option value="<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                            </option>
                                            <?php endfor; ?>
                                        </select>
                                        <input type ="submit" value="Dat Hang"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                    <?php 
                    if($j%4==0)
                        echo '</tr><tr>';
                    $j++;
                endwhile;
                    ?>
                </tr>
                
            </table>
        </div>
<?php include '../view/footer_tpl.php'; ?>
        </div>
    </body>
</html>