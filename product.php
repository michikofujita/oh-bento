<?php
session_start();

$name = isset($_GET['name']) ? htmlspecialchars($_GET['name'], ENT_QUOTES, 'utf-8') : '';
$price = isset($_GET['price']) ? htmlspecialchars($_GET['price'], ENT_QUOTES, 'utf-8') : '';
$count = isset($_GET['id']) ? htmlspecialchars($_GET['id'], ENT_QUOTES, 'utf-8') : '';

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="description" content="おすすめのアイテムが格安のショッピングサイトです。">
    <title>The Powerpuff Girls Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body id="concept">
    <header id="top">
    </header>

   
    </div>
<div class="">
<ul class="flex">
	    <li class="shop">
        <img src="images/img02<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>エビフライ
            </div>
            <p class="nedan">
                <?= $price; ?>250円
            </p>
            
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
	<li class="shop">
    <img src="images/img03<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>コールスローサラダ
            </div>
            <p class="nedan">
                <?= $price; ?>340円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
	<li class="shop">
    <img src="images/img04<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>アスパラベーコン巻き
            </div>      
            <p class="nedan">
                <?= $price; ?>150円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
	<li class="shop">
    <img src="images/img05<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>白ご飯
            </div>
            <p class="nedan">
                <?= $price; ?>200円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
	<li class="shop">
    <img src="images/img06<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
             <div>
                <?= $name; ?>コロッケ
            </div>
            <p class="nedan">
                <?= $price; ?>100円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
	<li class="shop">
    <img src="images/img07<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>唐揚げ
            </div>
            <p class="nedan">
                <?= $price; ?>120円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
    <li class="shop">
    <img src="images/img8<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>サンドウィッチ
            </div>
            <p class="nedan">
                <?= $price; ?>180円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
    <li class="shop">
    <img src="images/img9<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>ごぼうの唐揚げ
            </div>
            <p class="nedan">
                <?= $price; ?>120円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
    <li class="shop">
    <img src="images/img10<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>ニンニクチップ
            </div>
            <p class="nedan">
                <?= $price; ?>12円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>
    <li class="shop">
    <img src="images/img11<?= $count; ?>.png" width="250px" height="200px">
        <div class="item-body">
            <div>
                <?= $name; ?>貝
            </div>
            <p class="nedan">
                <?= $price; ?>50円
            </p>
            <!-- <div class="item-form"> -->
            <form action="cart.php" method="POST" class="item-form">
                <input type="hidden" name="name" value="<?= $name; ?>">
                <input type="hidden" name="price" value="<?= $price; ?>">
                <!-- <input type="text" value="1"> -->
                <input type="text" class="kosuu" value="1" name="count">
                <button type="submit" class="btn-sm btn-blue">カートに入れる</button>
            </form>
            <!-- </div>end item-form -->
        </div><!-- end item-body-->
    </li>

</ul>
</div>
</body>

</html>