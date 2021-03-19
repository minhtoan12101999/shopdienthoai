<?php
if (isset($_SESSION["giohang"])) {
    $dem = count($_SESSION["giohang"]);
} else {
    $dem = 0;
}
?>
<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
    <a class="display" href="index.php?page_lay=cart">Giỏ hàng</a>
    <img src="admin/img/cart.png" alt="">
    <a href="index.php?page_lay=cart"><?php echo $dem ?></a>
</div>