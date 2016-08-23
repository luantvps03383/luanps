<?php

session_start();

include '../model/connection.php';
include '../model/order.php';
include '../model/cart.php';
include '../model/product.php';
include '../model/customer.php';


if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}

switch ($action) {
    case "home":
        include '../view/home.php';
        break;
    case "add_cart":
        add_item($_POST['productkey'], $_POST['itemqty']);
        header("Location:index.php?action=giohang_view");
        break;
    case "update_cart":
        $new_list = $_POST['newqty']; // array
        foreach ($new_list as $key => $qty) { // $key = id ( [?] ) 
            if ($_SESSION['cart'][$key] != $qty) {
                update_item($key, $qty);
            }
        }
        include '../view/cart_view.php';
        break;
    case "empty_cart":
        unset($_SESSION['cart']);
        include '../view/cart_view.php';
        break;
    case 'login':
        include '../view/login.php';
        break;
    case 'login_process':
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        $u = new customer();
        $us = $u->login($user, $pass);

        if (count($us) != 1) {
            $_SESSION['cus_to_mer'] = $us[0];
            include '../view/home.php';
        } else {
            echo '<script> alert("Sai user hoac pass!");</script>';
            include '../view/login.php';
        }
        break;
    case 'logout':
        session_destroy();
        header('location:index.php');
        break;
    case 'order':
        if (!isset($_SESSION['cus_to_mer'])) {
            echo '<script> alert("Ban phai dang nhap moi duoc thanh toan!");</script>';
            include '../view/login.php';
        } else {
            $o = new Oder();
            $orderId = $o->CreateOder($_SESSION['cus_to_mer']);
            $_SESSION['oder_id'] = $orderId;
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $o->insertOderDetail($orderId, $key, $item['cost'], $item['qty'], $item['total']);
                $total+=$item['total'];
            }
            $o->updateOderTotal($orderId, $total);
            include '../view/order.php';
        }
        break;
    case "proList":
        include "../view/productList.php";
        break;
    case "datHang":
        echo $id = $_GET["id"];
        echo $quantity = $_GET["ProQuantity"];
        echo "Hello";
        add_item($id, $quantity);
        //header("Location:index.php?action=giohang_view");
        break;
    case "giohang_view":
        include "../view/cart_view.php";        
        break;
}
?>
