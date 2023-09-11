<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

<?php
session_start();

$delete_name = isset($_POST['delete_name']) ? htmlspecialchars($_POST['delete_name'], ENT_QUOTES, 'utf-8') : '';

if ($delete_name != '')
    unset($_SESSION['products'][$delete_name]);

$name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8') : '';
$price = isset($_POST['price']) ? htmlspecialchars($_POST['price'], ENT_QUOTES, 'utf-8') : '';
$count = isset($_POST['count']) ? htmlspecialchars($_POST['count'], ENT_QUOTES, 'utf-8') : '';

//もし、sessionにproductsがあったら
if (isset($_SESSION['products'])) {
    //$_SESSION['products']を$productsという変数にいれる
    $products = $_SESSION['products'];
    //$productsをforeachで回し、キー(商品名)と値（金額・個数）取得
    foreach ($products as $key => $product) {
        //もし、キーとPOSTで受け取った商品名が一致したら、
        if ($key == $name) {
            //既に商品がカートに入っているので、個数を足し算する     
            $count = (int) $count + (int) $product['count'];
        }
    }
}


//配列に入れるには、$name,$count,$priceの値が取得できていることが前提なのでif文で空のデータを排除する
if ($name != '' && $count != '' && $price != '') {
    $_SESSION['products'][$name] = [
        'count' => $count,
        'price' => $price
    ];
}
$products = isset($_SESSION['products']) ? $_SESSION['products'] : [];


//合計の初期値は0
$total = 0;


foreach ($products as $name => $product) {
    //各商品の小計を取得
    $subtotal = (int) $product['price'] * (int) $product['count'];
    //各商品の小計を$totalに足す
    $total += $subtotal;
}



// if(isset($products)){
//        foreach($products as $key => $product){
//            echo $key;      //商品名
//            echo "<br>";
//            echo $product['count'];  //商品の個数
//            echo "<br>";
//            echo $product['price']; //商品の金額
//            echo "<br>";
//        }
//    }

?>

<!-- <!DOCTYPE html>
<html lang="ja">

<body id="concept">
    <header id="top">
        <h1>最終確認画面</h1>
    </header> -->

    <main id="cart">
        <div class="wrapper last-wrapper">
            <div class="cartlist">
                <table class="nowrap">
                    <thead>
                        <tr>
                            <th>商品名</th>
                            <th>価格</th>
                            <th>個数</th>
                            <th>小計</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $name => $product): ?>
                            <tr>
                                <!-- <td label="商品名：">バナナ</td> -->
                                <!-- <td label="価格：" class="text-right">¥500</td>
                   <td label="個数：" class="text-right">2</td>
                   <td label="小計：" class="text-right">¥1,000</td> -->
                                <td label="商品名：">
                                    <?php echo $name; ?>
                                </td>
                                <td label="価格：" class="text-right">¥
                                    <?php echo $product['price']; ?>
                                </td>
                                <td label="個数：" class="text-right">
                                    <?php echo $product['count']; ?>
                                </td>
                                <td label="小計：" class="text-right">¥
                                    <?php echo ($product['price'] * $product['count']); ?>
                                </td>
                                <td>
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="delete_name" value="<?php echo $name; ?>">
                                        <!-- <button type="button" class="btn btn-red">削除</button> -->
                                        <button type="submit" class="btn btn-red">削除</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <tr class="total">
                            <th colspan="3">合計</th>
                            <td colspan="2">¥
                                <?php echo $total; ?>
                            </td>
                            <!-- <td colspan="2">0</td> -->
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="book" style="margin-top: 5%;">
                <a href="product.php" style="text-decoration:none;">   
                <button class="cash" onclick="location.href='kanryou.php'">おかずを追加する</button></a>
            </div>
        </div>


        <ul class="confirm">
            <li>下記、必要事項を記入し、購入手続きにお進みください。<br>
                ご登録いただいた個人情報は、購入手続き以外には使用いたしません。</li>
        </ul>

        <form action="#" class="delivery">
            <p><label>お名前（必須）<br>
                    <input type="text" name="name" required></label></p>
            <p><label>電話番号（必須）<br>
                    <input type="tel" name="tel" required></label></p>
            <p>
                <!-- <div class="creditkessai"><input type="radio" name="q1" value="クレジット決済">10～20代</div>
                <div class="convenikessai"><input type="radio" name="q1" value="コンビニ決済"> 20～30代</div>
                <div class="convenikessai"><input type="radio" name="q1" value="コンビニ決済"> 30代以上</div> -->
                <label for="products">希望時間を選択（必須）<br></label>
<select id="products" name="products">
  <option value="product1">午前</option>
  <option value="product2">9:00～9:30</option>
  <option value="product3">9:30～10:00</option>
  <option value="product4">10:00～10:30</option>
  <option value="product5">10:30～11:00</option>
  <option value="product6">11:00～11:30</option>
  <option value="product7">11:30～12:00</option>
  <option value="product8">12:00～12:30</option>
  <option value="product9">12:30～13:00</option>
  <option value="product10">13:00～13:30</option>
  <option value="product11">13:30～14:00</option>

  <!-- 他の商品のオプションを追加 -->
</select>
<select id="products" name="products">
  <option value="product1">午後</option>
  <option value="product2">15:00～15:30</option>
  <option value="product3">15:30～16:00</option>
  <option value="product4">16:00～16:30</option>
  <option value="product5">16:30～17:00</option>
  <option value="product6">17:00～17:30</option>
  <option value="product7">17:30～18:00</option>
  <option value="product8">18:00～18:30</option>
  <option value="product9">18:30～19:00</option>
  <option value="product10">19:00～19:30</option>
  <option value="product11">19:30～20:00</option>

  <!-- 他の商品のオプションを追加 -->
</select>
<!-- <p><label>備考(※ご意見ある方は入力してください)<br>
                    <textarea name="comment"></textarea></label></p>
            </p> -->
            <div class="book" style="margin-top: 5%;">
            <button class="cash" onclick="location.href='kanryou.php'">購入確定</button>
            </div>
        </form>

    </main>
    <!-- <footer>
        <p id="pagetop"><a href="#top">ページの先頭へ戻る</a></p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(function () {
            // ハンバーガーメニューの動作
            $('.toggle').click(function () {
                $("header").toggleClass('open');
                $(".sp-menu").slideToggle(500);
            });
        });
    </script>
</body>

</html> -->

<?php require 'address.php'; ?>
<?php require 'footer.php'; ?>