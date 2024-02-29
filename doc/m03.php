<?php
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>

    <div class="wrap">
        <section class="family">
            <div class="family_wrap inner">
                <h2>PRODUCT</h2>
                <div class="lnk">
                    <select name="lnk" id="lnk">
                        <option value="<?php echo G5_THEME_URL ?>/doc/m03.php">세면대</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m01.php">라우체 타일</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m02.php">유가</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m04.php">양변기</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m05.php">수전</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m06.php">액세사리</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m07.php">부자재</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m08.php">스프레이건</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m09.php">욕조</option>
                        <option value="<?php echo G5_THEME_URL ?>/doc/m10.php">욕실가구</option>
                    </select>
                    <script>
                        $(function () {
                            $('#lnk').on('change', function () {
                                //console.log($(this).val());
                                let lnk = $(this).val();
                                lnk && window.open(lnk);
                            })
                        })
                    </script>
                </div>
            </div>

        </section>
        <section class="itm_grid">
            <div class="grid_wrap inner">
                <div class="itm">
                    <a href="">
                        <figure><img src="<?php echo G5_THEME_URL ?>/images/m03_01.png" alt=""></figure>
                        <p>지니 Y801
                        </p>
                    </a>
                </div>
                <div class="itm">
                    <a href="">
                        <figure><img src="<?php echo G5_THEME_URL ?>/images/m03_02.png" alt=""></figure>
                        <p>위니 Y802
                        </p>
                    </a>
                </div>
                <div class="itm">
                    <a href="">
                        <figure><img src="<?php echo G5_THEME_URL ?>/images/m03_03.png" alt=""></figure>
                        <p>티니 Y803
                        </p>
                    </a>
                </div>
                <div class="itm">
                    <a href="">
                        <figure><img src="<?php echo G5_THEME_URL ?>/images/m03_04.png" alt=""></figure>
                        <p>뉴반스 G72L
                        </p>
                    </a>
                </div>
            </div>
        </section>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');