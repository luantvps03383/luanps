<?php include '../view/header_tpl.php'; ?>
        <div style="margin-left: 350px;">
            <div style="clear: both; width: 960px; height: 50px;"></div>
            
            <form action="index.php?action=login_process" method="POST">
            <table>
                <tr>
                    <td><label>Username:</label></td>
                    <td><input type="text" name="txtUser"/></td>
                </tr>
                <tr>
                    <td><label>Pass:</label></td>
                    <td><input type="password" name="txtPass"/></td>
                </tr>
                <td></td>
                <td><input type="submit" value="Login"/></td>
            </table>
            </form>
        </div>
<?php include '../view/footer_tpl.php'; ?>
</div>
    </body>
</html>