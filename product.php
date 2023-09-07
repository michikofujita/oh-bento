<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

<?php
session_start();

$name = isset($_GET['name']) ? htmlspecialchars($_GET['name'], ENT_QUOTES, 'utf-8') : '';
$price = isset($_GET['price']) ? htmlspecialchars($_GET['price'], ENT_QUOTES, 'utf-8') : '';
$count = isset($_GET['id']) ? htmlspecialchars($_GET['id'], ENT_QUOTES, 'utf-8') : '';
require_once 'header.php';
?>



<main id="product">
<h1>商品選択ページ</h1>
    <p>下記より、お好きな商品の数量を入力してカートに入れてください。</p>
    <ul class="flex">
            <li class="shop">
            <img src="images/img02<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    特大エビフライ
                </div>
                <p class="nedan">
                    250円
                </p>
                
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="特大エビフライ">
                    <input type="hidden" name="price" value="250">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img03<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    コールスローサラダ
                </div>
                <p class="nedan">
                    200円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="コールスローサラダ">
                    <input type="hidden" name="price" value="200">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img04<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    アスパラベーコン巻き
                </div>      
                <p class="nedan">
                    150円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="アスパラベーコン巻き">
                    <input type="hidden" name="price" value="150">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img05<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    白ご飯
                </div>
                <p class="nedan">
                    200円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="白ご飯">
                    <input type="hidden" name="price" value="200">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img06<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    カニクリームコロッケ
                </div>
                <p class="nedan">
                    100円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="カニクリームコロッケ">
                    <input type="hidden" name="price" value="100">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img07<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    唐揚げ
                </div>
                <p class="nedan">
                    120円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="唐揚げ">
                    <input type="hidden" name="price" value="120">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img8<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    サンドウィッチ
                </div>
                <p class="nedan">
                    180円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="サンドウィッチ">
                    <input type="hidden" name="price" value="180">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img9<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    ごぼうの天ぷら
                </div>
                <p class="nedan">
                    120円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="ごぼうの天ぷら">
                    <input type="hidden" name="price" value="120">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img10<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    フライドガーリック
                </div>
                <p class="nedan">
                    10円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="フライドガーリック">
                    <input type="hidden" name="price" value="10">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img11<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    つぶ貝
                </div>
                <p class="nedan">
                    50円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="つぶ貝">
                    <input type="hidden" name="price" value="50">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img12i<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    パンツェロッティ
                </div>
                <p class="nedan">
                    200円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="パンツェロッティ">
                    <input type="hidden" name="price" value="200">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img14<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    レバニラ炒め
                </div>
                <p class="nedan">
                    300円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="レバニラ炒め">
                    <input type="hidden" name="price" value="300">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img15<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    温玉揚げ
                </div>
                <p class="nedan">
                    50円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="温玉揚げ">
                    <input type="hidden" name="price" value="50">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img16<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    茶碗蒸し
                </div>
                <p class="nedan">
                    180円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="茶碗蒸し">
                    <input type="hidden" name="price" value="180">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>
        <li class="shop">
        <img src="images/img18<?= $count; ?>.png" width="250px" height="200px">
            <div class="item-body">
                <div>
                    鯖寿司
                </div>
                <p class="nedan">
                    120円
                </p>
                <!-- <div class="item-form"> -->
                <form action="cart.php" method="POST" class="item-form">
                    <input type="hidden" name="name" value="鯖寿司">
                    <input type="hidden" name="price" value="120">
                    <!-- <input type="text" value="1"> -->
                    <input type="text" class="kosuu" value="0" name="count">
                    <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
                </form>
                <!-- </div>end item-form -->
            </div><!-- end item-body-->
        </li>

    </ul>
</main>

<?php require 'address.php'; ?>
<?php require 'footer.php'; ?>