<?php include '../view/header_tpl.php'; ?>
        <div class="content" style="margin-left: 200px;">
        <h1>Danh sach gio hang</h1>
        <?php if(!isset($_SESSION['cart']) || count($_SESSION['cart'])== 0 ): ?>
        <p style="color: red;">Ban chua chon hang!</p>
        <?php else: ?>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="update_cart"/>
            <table border="1">
                <tr>
                    <td>Item Name</td>
                     <td>Price</td> 
                     <td>Quantity</td>
                      <td>ItemTotal</td>
                </tr>
                <?php 
                        foreach ($_SESSION['cart'] as $key =>$item):
                           
                            $cost = number_format($item['cost'],2);
                        $total = number_format($item['total'],2);
                      
                ?>
                <tr>
                    <td>
                        <?php echo $item['name'];?>
                    </td>
                    <td>
                        <?php echo $cost ?>
                    </td>
                    <td>
                        <input type="text" name ="newqty[<?php echo $key; ?>]" value ="<?php echo $item['qty']; ?>"/>
                    </td>
                    <td>
                        <?php echo $total; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" style="text-align: right;">
                        <b>Sub Total</b>
                    </td>
                    <td>
                        <?php echo get_subtotal(); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right;">
                        <input type="submit" value="Update Cart"/>
                        <a href="?action=order">Thanh Toan</a>
                    </td>
                </tr>
            </table>
            <p>Chon "Update Cart" de nhap so luong hang. Chon 0 de bo mat hang</p>
        </form>
        <?php endif; ?>
        <p><a href="?action=home">Add Item</a></p>
        <p><a href="?action=empty_cart">Empty Cart</a></p>
        </div>
<?php include '../view/footer_tpl.php'; ?>
</div>

    </body>
</html>
