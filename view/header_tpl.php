<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class="wrapper" style="margin: 0 auto; width: 960px;">
            <div class="header" style="width: 960px; height: 120px; float: left;"> <img src="images/headermb.gif" width="960" height="120"/> </div>
            <div class="menu" style="width: 940px; height: 30px; float: left; background-color:royalblue; line-height: 30px; padding-left: 20px;">
                <?php if (isset($_SESSION['cus_to_mer'])){ echo 'Xin Chao: PhamBinh';}else{  ?>
                <a style="color: white; text-decoration: none; "href="index.php?action=home">San Pham</a> || <a href="index.php?action=login" style="color: white; text-decoration: none; ">Dang nhap</a><?php } ?> </div>
            
            
        
