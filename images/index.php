<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

   <!-- 商品 -->

<ul>
    <li>
        <a href="detail.php?id=<?= $data['id']; ?>">  <!-- 押した商品番号のページに飛ぶように設定 -->
            <p class="thumbnail">
                <img src="images/../images/img01.png" alt="<?= $data['name']; ?>のパッケージ画像"></p>
            <p><?= $data['name']; ?></p>  
            <p class="price"><?= $data['price']; ?>円（税込み）</p>
        </a>
    </li>
    <li>
        <a href="">
            <p class="thumbnail"><img src="images/../images/img02.png" alt="商品2のパッケージ画像"></p>
            <p>商品名2</p>
            <p class="price">550円（税込）</p>
        </a>
    </li>
    <li>
        <a href="">
            <p class="thumbnail"><img src="images/../images/img03.png" alt="商品3のパッケージ画像"></p>
            <p>商品名3</p>
            <p class="price">680円（税込）</p>
        </a>
    </li>
    <li>
        <a href="">
            <p class="thumbnail"><img src="images/../images/img04.png" alt="商品4のパッケージ画像"></p>
            <p>商品名4</p>
            <p class="price">400円（税込）</p>
        </a>
    </li>
</ul>


   <!-- 商品 -->

<?php require 'footer.php'; ?>