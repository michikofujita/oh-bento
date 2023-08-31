<!-- <?php require 'header.php'; ?>
<?php require 'menu.php'; ?> -->

<style>
.contact {
    width: 960px;
    margin: 0 auto;
    padding: 60px 0;
}

.contact-ttl {
    font-size: 35px;
    font-weight: bold;
    margin-bottom: 40px;
    text-align: center;
    color: #85edb4;
}

.contact-table {
    width: 100%;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}

.contact-item,
.contact-body {
    padding: 20px;
    border: 1px solid #ccc;
}

.contact-item {
    text-align: left;
    width: 30%;
    background-color: #85edb4;
}

.contact-body {
    text-align: left;
    width: 70%;
}

.form-text {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    max-width: 400px;
}

.contact-sex + .contact-sex {
    margin-left: 10px;
}

.contact-sex-txt {
    display: inline-block;
    margin-left: 5px;
}

.form-select {
    width: 180px;
    height: 40px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.form-textarea {
    width: 100%;
    padding: 10px;
    height: 200px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-family: Arial, Helvetica, sans-serif;
}

.contact-submit {
    width: 250px;
    background-color: #85edb4;
    color: #333333;
    font-weight: bold;
    display: block;
    margin: 0 auto;
    font-size: 16px;
    padding: 15px;
    border-radius: 100vh;
    border: none;
    appearance: none;
    cursor: pointer;
}
</style>
<div class="contact">
            <h1 class="contact-ttl">Contact</h1>
            <form action="">
                <table class="contact-table">
                    <tr>
                        <th class="contact-item">名前</th>
                        <td class="contact-body">
                            <input type="text" name="名前" class="form-text" placeholder="弁当　太郎">
                        </td>
                    </tr>
                    <tr>
                        <th class="contact-item">メール</th>
                        <td class="contact-body">
                            <input type="email" name="メール" class="form-text" placeholder="oh_bento@gmail.com">
                        </td>
                    </tr>
                    <tr>
                        <th class="contact-item">お問合せ種類</th>
                        <td class="contact-body">
                            <label class="contact">
                                <input type="checkbox" name="name">
                                <span class="contact-txt">注文について</span>
                            </label>
                            <label class="contact">
                                <input type="checkbox" name="name">
                                <span class="contact-txt">お支払いについて</span>
                            </label>
                            <label class="contact">
                                <input type="checkbox" name="name" />
                                <span class="contact-txt">その他</span>
                            </label>
                         </td>
                    </tr>
                    <tr>
                        <th class="contact-item">お問い合わせ内容</th>
                        <td class="contact-body">
                            <textarea name="問い合わせ" class="form-textarea" placeholder="ご注文の変更につきましては、注文日時のご記入もあわせてお願いします。"></textarea>
                        </td>
                    </tr>
                </table>
                <input class="contact-submit" type="submit" value="送信" >
            </form>
        </div>
        <!-- <?php require 'footer.php'; ?> -->

