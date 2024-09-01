<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/config.php');
// $pageinfo['title']       = $pageinfo['title'];
// $pageinfo['description'] = '';
$pageinfo['bodyId']      = 'page_about';
$pageinfo['bodyClass']   = '';
include(BASEPATH . 'assets/inc/meta.php');
?>
<?php include(BASEPATH . 'assets/inc/header.php'); ?>

<section class="about c-secLayout">
  <div class="ul-container l-sec__inner">
    <div class="about__fix ul-fix">
      <div class="ul-fixInner">
        <h2 class="about__tit c-title01 ul-title" data-aos="fade-up">ABOUT</h2>
        <nav class="about__sideNav ul-sideNav" data-aos="fade-up">
          <ul class="about__list ul-list">
            <li class="about__listItems ul-listItems">
              <a href="#concept" class="about__link ul-link">CONCEPT<span>会社理念</span></a>
            </li>
            <li class="about__listItems ul-listItems">
              <a href="#company" class="about__link ul-link">COMPANY<span>会社概要</span></a>
            </li>
            <li class="about__listItems ul-listItems">
              <a href="#profile" class="about__link ul-link">PROFILE<span>プロフィール</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="about__move ul-move">
      <div class="about__moveContainer">
        <div class="about__moveConcept" id="concept">
          <div class="about__moveTit" data-aos="fade-up">
            <h4 class="c-title02">CONCEPT
              <span>コンセプト</span>
            </h4>
          </div>
          <p class="about__moveConceptTxt" data-aos="fade-up">コンセプトの内容が入ります。コンセプトの内容が入ります。コンセプトの内容が入ります。コンセプトの内容が入ります。コンセプトの内容が入ります。コンセプトの内容が入ります。コンセプトの内容が入ります。コンセプトの内容が入ります。</p>
        </div>
        <div class="about__moveCompany" id="company">
          <div class="about__moveTit" data-aos="fade-up">
            <h4 class="c-title02">COMPANY
              <span>会社概要</span>
            </h4>
          </div>
          <div class="about__moveCompanyContent" data-aos="fade-up">
            <table class="about__moveCompanyTable c-table">
              <tr>
                <th>会社名</th>
                <td>C-DOTS DESIGN PROJECT</td>
              </tr>
              <tr>
                <th>代表取締役</th>
                <td>村松 裕哉</td>
              </tr>
              <tr>
                <th>設立</th>
                <td>創業1998年8月</td>
              </tr>
              <tr>
                <th>事業内容</th>
                <td>デザイン制作</td>
              </tr>
              <tr>
                  <th>住所</th>
                  <td>〒480-0142 愛知県丹羽郡大口町中小口ニ丁目580番地</td>
                </tr>
                <tr>
                  <th>電話番号</th>
                  <td>000-0000-0000</td>
                </tr>
            </table>
          </div>
        </div>
        <div class="about__moveProfile" id="profile">
          <div class="about__moveTit" data-aos="fade-up">
            <h4 class="c-title02">PROFILE
              <span>プロフィール</span>
            </h4>
          </div>
          <div class="about__moveProfileContent">
            <div class="about__moveProfileHead">
              <p class="about__moveProfileSubtit" data-aos="fade-up">C-DOTS DESIGN PROJECT</p>
              <p class="about__moveProfileName" data-aos="fade-up">村松 裕哉</p>
              <p class="about__moveProfileTxt" data-aos="fade-up">
                広島工業大学 環境学部 環境デザイン学科にて建築を学ぶ。<br>
                卒業後住宅会社へ就職し設計などを担当する。<br>
                その後、WEBデザインに興味を持ち名古屋デザイナー学院専門学校へ入校。<br>
                WEBを中心とした様々なデザインを学び、卒業後はWEB制作会社へ入社。<br>
                2003年 「C-dots」を立ち上げ。<br>
                2006年 「C-DOTS DESIGN PROJECT」に変更<br>
                2007年度から2015年度 大同大学/情報デザイン学科 非常勤講師<br>
                2012年度から名古屋デザイナー学院/ビジュアルデザイン学科 非常勤講師
              </p>
            </div>
            <div class="about__moveProfileImage" data-aos="fade-up">
              <img class="about__moveProfilePhoto" src="/assets/img/pages/about/profileImage.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include(BASEPATH . 'assets/inc/footer.php'); ?>
<?php include(BASEPATH . 'assets/inc/footer_lib.php'); ?>
<script defer src="/assets/js/page/about.js"></script>

</body>

</html>