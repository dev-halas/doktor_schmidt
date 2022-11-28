<?php 
    $thirdText = get_field('third_eye_text');
    $thirdLink = get_field('third_eye_link');
?>

<section class="thirdEye">
    <div class="thirdEye--inner" style="
        background: url('<?php echo THEME_URL; ?>_dev/img/foto-dziecko.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    ">
        <div class="thirdEye--wrapper container">
            <div class="thirdEye--text">
                <?php echo $thirdText; ?>
            </div>
            <div class="thirdEye--empty"></div>
            <div class="thirdEye--button">
                <a href="<?php echo $thirdLink['url'];?>" class="buttonTurquoise"><?php echo $thirdLink['title'];?></a>
            </div>
        </div>
    </div>
</section>