<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お知らせページ</title>
    <link rel="stylesheet" href="./css/news-style.css" />
    <style>
      html,
body {
  box-sizing: border-box;
  font-family: "Noto Sans JP";
  margin: 0;
  padding: 0;
  height: 100%;
  font-size: 25px;
  color: #444444;
}

/* header部分 */
.header {
  display: flex;
  /* height: 35vh; */
  width: 100%;
  background-color: #99cc33;
  color: white;
  padding: 0;
  text-align: center;
  margin: 0;
}

.hero {
  display: flex;
  margin: 3%;
  align-items: center;
  width: 34%;
}

/* 画像を小さくするためのスタイル */
.small-image {
  max-width: 80%; /* 新しい幅を指定 */
  /* max-height: 70%; 高さを自動調整 */
  margin-right: 2%;
}

#logo {
  color: #d50000;
  text-shadow: 3px 4px 2px #ffffff;
  font-size: 19px;
}

#logo span {
  color: white;
  text-shadow: 3px 4px 2px #d50000;
  font-size: 40px;
  letter-spacing: 1px;
  cursor: pointer;
}

/* ナビ部分 */
.menu {
  margin-top: 50px;
  width: 60%;
}

.menu nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  /* padding: 40px 13% 0 3PX; */
  text-shadow: 3px 4px 2px #d50000;
}

.menu nav ul {
  text-align: right;
}

.menu nav ul li {
  list-style: none;
  display: inline-block;
  margin: auto auto;
}

.menu nav ul li a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  transition: all 0.3s;
  font-size: 25px;
  margin: 1.3vw;
}

.menu nav ul li a:any-link:hover {
  color: #d50000;
  text-shadow: 1px 1px 2px #ffffff;
  text-decoration: underline;
}

.button {
  background-color: #ffd700;
  color: white;
  text-decoration: none;
  font-weight: bold;
  font-size: 20px;
  padding: 10px 15px;
  transition: all 0.2s;
  border-radius: 0px;
}

p span {
  font-size: 25px;
  margin-top: 0;
}

.button {
  background-color: #ffd700;
  color: white;
  text-decoration: none;
  font-weight: bold;
  font-size: 20px;
  padding: 10px 15px;
  transition: all 0.2s;
  border-radius: 0px;
}

.container {
  margin: 0 10%;
  padding: 0;
}

/* .text-align-center {
  text-align: center;
} */
.news-box {
  margin: 0 10%;
}

.news-item {
  border-bottom: 1px solid #ccc;
  padding: 10px 0;
}

footer {
  margin: 0;
  padding: 0;
  text-align: center;
  font-style: 1rem;
  background-color: rgb(111, 213, 111);
  color: #333333;
}

.b-radius {
  margin: 5% 15%;
  display: flex;
  justify-content: center;
  gap: 10%;
}

.b-radius .item .image {
  margin: 0 auto;
  width: 60%;
}
.b-radius .item:first-child .image {
  margin: 15px auto 25px;
  width: 50%;
}

.item {
  border: 1px solid #ccc;
  border-radius: 16px;
  padding: 1rem;
}

.image img {
  background-size: cover;
  width: 100%;
  height: 100%;
}
.title {
  text-align: center;
}
h2 {
  border-bottom: 1px solid #ccc;
  padding-bottom: 1rem;
  margin-bottom: 0px;
  color: #444444;
}

img {
  width: 100px; /* 幅を指定 */
  height: 100px; /* 高さを指定 */
}
.chui {
  text-align: center;
}

    </style>
  </head>

  <body>
    <header>
      <div class="header">
        <div class="hero">
          <img src="images/img08.png" alt="お店ロゴ" class="small-image" />
          <h1 id="logo">
            <span>OH! 弁当屋</span><br />幻のネット限定 現地払い
          </h1>
        </div>
        <div class="menu">
          <nav>
            <ul>
              <li><a href="osirase.html">お知らせ</a></li>
              <li><a href="#">メニュー</a></li>
              <li><a href="#">お支払い方法</a></li>
              <li>
                <a href="https://forms.gle/XxQXLUEwLa4BXu4GA" class="button"
                  >お問い合わせ</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <p><a href="./index.html"></a></p>
    </header>


    <main id="news">
      <div class="container text-align-center">
        <div class="news-box">
          <h2>最新のお知らせ</h2>
          <div class="news-item">
            <p>2023年08月24日</p>
            <h3>お弁当注文</h3>
            <p></p>
            <p>本日よりお弁当の注文受付可能になりました。</p>
          </div>
          <div class="news-item">
            <p>2023年08月23日</p>
            <h3>サイト開設のお知らせ</h3>
            <p></p>
            <p>本日よりOH！弁当屋のサイトをOPENしました。</p>
          </div>
        </div>

        <div class="b-radius">
          <div class="item">
            <figure class="image">
              <img src="./images/phone.jpg" alt="phone" />
            </figure>
            <p class="title">お電話でのお問い合わせ<br />0120-○○○○-○○○○</p>
          </div>
          <div class="item">
            <figure class="image">
              <img src="./images/e-mail.jpg" alt="e-mail" />
            </figure>
            <p class="title">インターネットでの<br />お問い合わせ</p>
          </div>
        </div>
        <p class="chui">
          営業時間: 9時〜20時※木曜日は休み、月曜日は午前中のみ営業
        </p>
      </div>
    </main>

    <footer>
      <p>&copy;CopyRight@OH! bentouya</p>
    </footer>
  </body>
</html>
