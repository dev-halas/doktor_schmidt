<?php
$img = get_field('offer_img');
$n_img = get_field('nuzenica_img');
?>
<section class="priceList--img" id="oferta">
    <img src="<?php echo $img['url']; ?>" alt="Gabinet okulistyczny">
</section>
<section class="priceList animate" style="
    background: url(<?php echo THEME_URL; ?>_dev/img/bg-priceList.jpg);
    background-size: cover;
    background-repeat: no-repeat;
">


    <?php if (have_rows('offer_item')): ?>
    <div class="priceList--wrapper container fadeInBottomLow">
        <h2>Oferujemy</h2>
        <div class="priceList--inner">
            <?php while (have_rows('offer_item')):

                the_row();
                $text = get_sub_field('offer_name');
                $price = get_sub_field('offer_price');
                ?>
            <div class="priceList--item">
                <div class="priceList--name"><?php echo $text; ?></div>
                <div class="priceList--price"><?php echo $price; ?></div>
            </div>
            <?php
            endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
</section>
<section class="treatment--bg">
    <img src="<?php echo THEME_URL; ?>_dev/img/glasses.png" class="treatment--glasses" alt="">
    <img src="<?php echo $n_img['url']; ?>" class="treatmentImg--bg" alt="">
</section>