<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/config.php');
// $pageinfo['title']       = $pageinfo['title'];
// $pageinfo['description'] = '';
$pageinfo['bodyId']      = 'page_contact';
$pageinfo['bodyClass']   = '';
include(BASEPATH . 'assets/inc/meta.php');
?>
<?php include(BASEPATH . 'assets/inc/header.php'); ?>

<section class="contact c-secLayout">
  <div class="ul-container l-sec__inner">
    <div class="contact__fix ul-fix">
      <div class="ul-fixInner">
        <h2 class="contact__tit c-title01 ul-title" data-aos="fade-up">CONTACT</h2>
      </div>
    </div>
    <div class="contact__move ul-move">
      <div class="contact__moveContainer">
        <div class="contact__moveContent" id="contact">
          <p class="contact__txt" data-aos="fade-up">
            ロゴや名刺・ホームページ・写真撮影など<br class="u-hidden-up-md">お考えの方はお気軽にお問い合わせください。<br>
            下記よりお問い合わせが可能です。
          </p>
          <table class="contact__table" data-aos="fade-up">
            <tbody>
              <tr class="required">
                <th class="l-change">お名前</th>
                <td><input type="text" name="user_name" placeholder="例：山田 太郎"></td>
              </tr>
              <tr>
                <th>会社名/団体名/店舗名</th>
                <td><input type="text" name="company_name" placeholder="例：株式会社テスト"></td>
              </tr>
              <tr class="required">
                <th>メールアドレス</th>
                <td><input type="email" name="email" placeholder="例：example@gmail.com"></td>
              </tr>
              <tr class="required">
                <th>お問い合わせ内容</th>
                <td><textarea name="content_detail" rows="5" placeholder="例：ご要望をお書きください"></textarea></td>
              </tr>
            </tbody>
          </table>

          <div class="contact__btn c-btn" data-aos="fade-up">
            <button onclick="location.href='./confirm.php'" type="submit" name="submitConfirm" value="confirm" class="contact__btn--txt c-btn__txt">確認画面へ</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include(BASEPATH . 'assets/inc/footer.php'); ?>
<?php include(BASEPATH . 'assets/inc/footer_lib.php'); ?>

</body>

</html>