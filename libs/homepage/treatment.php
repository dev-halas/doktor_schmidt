<?php 
    $n_text = get_field('nuzenica_text'); 
    $n_link = get_field('nuzenica_link'); 
?>

<section id="nuzenica" class="treatment" style="
    background: url(<?php echo THEME_URL; ?>_dev/img/treatment-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center right;
">
    <div class="container">
        <div class="treatment--rotate">
            <p>umów wizytę</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="15.192" height="57.596" viewBox="0 0 15.192 57.596">
                <line id="Line_9" data-name="Line 9" y2="51" transform="translate(7.596 0.5)" fill="none" stroke="#1c1c1c" stroke-linecap="square" stroke-width="1"/>
                <line id="Line_10" data-name="Line 10" y2="11" transform="translate(14.485 49.111) rotate(45)" fill="none" stroke="#1c1c1c" stroke-linecap="square" stroke-width="1"/>
                <line id="Line_11" data-name="Line 11" y2="11" transform="translate(0.707 49.111) rotate(-45)" fill="none" stroke="#1c1c1c" stroke-linecap="square" stroke-width="1"/>
            </svg>
        </div>
        <div class="treatment--inner">
            <div class="treatment--left">
                <span>SPECJALISTA DS. LECZENIA</span>
                <h1>Nużenica</h1>
            </div>
            <div class="treatment--text">
                <div>
                    <?php echo $n_text; ?>
                </div>
                <a href="<?php echo $n_link['url'];?>" class="buttonTurquoise"><?php echo $n_link['title']; ?></a>
            </div>
        </div>
    </div>
</section>
