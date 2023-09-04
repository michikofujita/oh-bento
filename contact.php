<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

     <main id="contact">
        <div class="contact">
            <h1 class="contact-ttl">Contact</h1>
            <form action="">
                <table class="contact-table">
                    <tr>
                        <th class="contact-item">名&emsp;&emsp;&emsp;前</th>
                        <td class="contact-body">
                            <input type="text" name="名前" class="form-text" placeholder="弁当　太郎">
                        </td>
                    </tr>
                    <tr>
                        <th class="contact-item">メ&emsp;ー&emsp;ル</th>
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
                                <input type="checkbox" name="name">
                                <span class="contact-txt">その他</span>
                            </label>
                         </td>
                    </tr>
                    <tr class="sample">
                        <th class="contact-item ">お問い合わせ内容</th>
                        <td class="contact-body">
                            <textarea name="問い合わせ" class="form-textarea" placeholder="ご注文の変更につきましては、注文日時のご記入もあわせてお願いします。"></textarea>
                        </td>
                    </tr>
                </table>
                <input class="contact-submit" type="submit" value="送信" >
            </form>
        </div>
    </main>

<?php require 'address.php'; ?>
<?php require 'footer.php'; ?>