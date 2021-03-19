<?php
session_start();
if (isset($_SESSION["giohang"])) {
    if (isset($_GET["page_lay"]) && $_GET["page_lay"] == 0) {
        unset($_SESSION["giohang"]);
    } else if (isset($_GET["id_sp"])) {
        $id_sp = $_GET["id_sp"];
        unset($_SESSION["giohang"][$id_sp]);
    }
}
header('location:index.php?page_lay=cart');
