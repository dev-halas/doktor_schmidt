<?php 
    the_post(); 

    $leftText = get_field('third_text_left');
    $rightText = get_field('third_text_right');
    $image = get_field('third_image');
    $link = get_field('third_link');
?>
<section class="thirdHeader" style="
    background: url('<?php echo THEME_URL; ?>_dev/img/foto-dziecko.jpg');
    background-position: 40% 50%;
    background-size: cover;
    background-repeat: no-repeat;
">
    <div class="thirdHeader--inner container">
        <h1><?php echo the_title(); ?></h1>
        <span class="third--more">
            <p>poznaj szczegóły</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="15.192" height="57.596" viewBox="0 0 15.192 57.596">
                <line id="Line_9" data-name="Line 9" y2="51" transform="translate(7.596 0.5)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="1"/>
                <line id="Line_10" data-name="Line 10" y2="11" transform="translate(14.485 49.111) rotate(45)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="1"/>
                <line id="Line_11" data-name="Line 11" y2="11" transform="translate(0.707 49.111) rotate(-45)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="1"/>
            </svg>
        </span>
    </div>
</section>

<div class="thirdContent">
    <div class="thirdMap">
        <img src="<?php echo THEME_URL; ?>_dev/img/mapa-euromed.png"/>
    </div>
    <div class="container">
        <div class="thirdText">
            <span>Działalność humanitarna,</span>
            <h1>to coś ważnego…</h1>
            <div class="thirdText--columns">
                <div class="thirdText--column">
                    <?php echo $leftText; ?>
                </div>
                <div class="thirdText--column">
                    <?php echo $rightText; ?>
                </div>
            </div>
        </div>
        <div class="thirdImage">
            <span class="third--more posAbsTop">
                <p>szczegółów nt. projektu</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="15.192" height="57.596" viewBox="0 0 15.192 57.596">
                    <line id="Line_9" data-name="Line 9" y2="51" transform="translate(7.596 0.5)" fill="none" stroke="#000" stroke-linecap="square" stroke-width="1"/>
                    <line id="Line_10" data-name="Line 10" y2="11" transform="translate(14.485 49.111) rotate(45)" fill="none" stroke="#000" stroke-linecap="square" stroke-width="1"/>
                    <line id="Line_11" data-name="Line 11" y2="11" transform="translate(0.707 49.111) rotate(-45)" fill="none" stroke="#000" stroke-linecap="square" stroke-width="1"/>
                </svg>
            </span>
            <img src="<?php echo $image['url'];?>" alt="">

            <a href="<?php echo $link['url']?>" class="buttonTurquoise thirdButton" target="_blank"><?php echo $link['title'];?></a>
        </div>
    </div>

</div>
<section class="treatment--bg">
    <img src="<?php echo THEME_URL; ?>_dev/img/glasses.png" class="treatment--glasses" alt="">
    <img src="<?php echo THEME_URL; ?>_dev/img/treatment.jpg" class="treatmentImg--bg" alt="">
</section>