<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/config.php');
// $pageinfo['title']       = $pageinfo['title'];
// $pageinfo['description'] = '';
$pageinfo['bodyId']      = 'page_projects';
$pageinfo['bodyClass']   = '';
include(BASEPATH . 'assets/inc/meta.php');
?>

<?php include(BASEPATH . 'assets/inc/header.php'); ?>

<section class="projects c-secLayout">
  <div class="ul-container l-sec__inner">
    <div class="projects__fix ul-fix">
      <div class="ul-fixInner">
        <h2 class="projects__tit c-title01 ul-title" data-aos="fade-up">PROJECTS</h2>
        <nav class="projects__sideNav ul-sideNav" data-aos="fade-up">
          <ul class="projects__list ul-list filter-list">
            <li class="projects__listItems ul-listItems">
              <a href="#" data-filter="all" class="projects__link ul-link is-active">ALL<span>全て</span></a>
            </li>
            <li class="projects__listItems ul-listItems">
              <a href="#" data-filter="web" class="projects__link ul-link">WEB<span>WEB制作</span></a>
            </li>
            <li class="projects__listItems ul-listItems">
              <a href="#" data-filter="logo" class="projects__link ul-link">LOGO<span>ロゴ制作</span></a>
            </li>
            <li class="projects__listItems ul-listItems">
              <a href="#" data-filter="graphic" class="projects__link ul-link">GRAPHIC<span>グラフィック制作</span></a>
            </li>
            <li class="projects__listItems ul-listItems">
              <a href="#" data-filter="other" class="projects__link ul-link ">OTHER<span>その他</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="projects__move ul-move">
      <div class="projects__moveContainer filter-item">
        <div class="projects__moveItems" data-aos="fade-up" data-item="graphic">
          <a href="/projects/detail/01/">
            <div class="projects__moveImg">
              <img src="/assets/img/pages/projects/img01.jpg" alt="" class="projectsMoveItemsImage">
            </div>
            <h4 class="projects__moveTit">meture</h3>
            <p class="projects__moveSubtit">PACKAGE</p>
          </a>
        </div>
        <div class="projects__moveItems" data-aos="fade-up" data-item="logo">
          <a href="/projects/detail/01/">
            <div class="projects__moveImg">
              <img src="/assets/img/pages/projects/img02.jpg" alt="" class="projectsMoveItemsImage">
            </div>
            <h4 class="projects__moveTit">カラダノハグルマ</h3>
            <p class="projects__moveSubtit">LOGO</p>
          </a>
        </div>
        <div class="projects__moveItems" data-aos="fade-up" data-item="graphic">
          <a href="/projects/detail/01/">
            <div class="projects__moveImg">
              <img src="/assets/img/pages/projects/img03.jpg" alt="" class="projectsMoveItemsImage">
            </div>
            <h4 class="projects__moveTit">山田 裕子</h3>
            <p class="projects__moveSubtit">CARD</p>
          </a>
        </div>
        <div class="projects__moveItems" data-aos="fade-up" data-item="web">
          <a href="/projects/detail/01/">
            <div class="projects__moveImg">
              <img src="/assets/img/pages/projects/img04.jpg" alt="" class="projectsMoveItemsImage">
            </div>
            <h4 class="projects__moveTit">ひだまりのこみちクリニック</h3>
            <p class="projects__moveSubtit">WEB</p>
          </a>
        </div>
        <div class="projects__moveItems" data-aos="fade-up" data-item="graphic">
          <a href="/projects/detail/01/">
            <div class="projects__moveImg">
              <img src="/assets/img/pages/projects/img01.jpg" alt="" class="projectsMoveItemsImage">
            </div>
            <h4 class="projects__moveTit">meture</h3>
            <p class="projects__moveSubtit">PACKAGE</p>
          </a>
        </div>
        <div class="projects__moveItems" data-aos="fade-up" data-item="logo">
          <a href="/projects/detail/01/">
            <div class="projects__moveImg">
              <img src="/assets/img/pages/projects/img02.jpg" alt="" class="projectsMoveItemsImage">
            </div>
            <h4 class="projects__moveTit">カラダノハグルマ</h3>
            <p class="projects__moveSubtit">LOGO</p>
          </a>
        </div>
        <div class="projects__moveItems" data-aos="fade-up" data-item="graphic">
          <a href="/projects/detail/01/">
            <div class="projects__moveImg">
              <img src="/assets/img/pages/projects/img03.jpg" alt="" class="projectsMoveItemsImage">
            </div>
            <h4 class="projects__moveTit">山田 裕子</h3>
            <p class="projects__moveSubtit">CARD</p>
          </a>
        </div>
        <div class="projects__moveItems" data-aos="fade-up" data-item="web">
          <a href="/projects/detail/01/">
            <div class="projects__moveImg">
              <img src="/assets/img/pages/projects/img04.jpg" alt="" class="projectsMoveItemsImage">
            </div>
            <h4 class="projects__moveTit">ひだまりのこみちクリニック</h3>
            <p class="projects__moveSubtit">WEB</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include(BASEPATH . 'assets/inc/footer.php'); ?>
<?php include(BASEPATH . 'assets/inc/footer_lib.php'); ?>
<script defer src="/assets/js/projects.bundle.js"></script>


</body>

</html>