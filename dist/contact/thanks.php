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
    <div class="contact__container ul-container c-innerS">
        <div class="contact__fix ul-fix">
            <div class="ul-fixInner">
                <h2 class="contact__tit c-title01 ul-title" data-aos="fade-up">CONTACT</h2>
            </div>
        </div>
        <div class="contact__move ul-move">
            <div class="contact__moveContainer">
                <div class="contact__moveContent" id="contact">
                    <p class="contact__txt" data-aos="fade-up">
                    お問い合わせありがとうございました。<br><br>
                    お問い合わせ内容を確認させていただき、後ほどご回答をさせていただきます。
                    恐れ入りますが、今しばらくお待ちいただけますよう、宜しくお願い申し上げます。
                    </p>
                    <div class="contact__btn c-buttonStyle" data-aos="fade-up">
                        <a href="/index.php" class="contact__btn--txt c-buttonStyle--txt">TOP
                            <svg class="contact__btn--img c-buttonStyle--img" xmlns="http://www.w3.org/2000/svg" width="54.311" height="8.175" viewBox="0 0 54.311 8.175">
                                <g id="グループ_1629" data-name="グループ 1629" transform="translate(-808.5 -4962.912)">
                                    <line id="線_31" data-name="線 31" x2="53.126" transform="translate(809 4970.403)" fill="none" stroke="#5ea9bc" stroke-linecap="round" stroke-width="1" />
                                    <line id="線_32" data-name="線 32" x2="11.517" y2="6.806" transform="translate(850.609 4963.597)" fill="none" stroke="#5ea9bc" stroke-linecap="round" stroke-width="1" />
                                </g>
                            </svg>
                        </a>
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