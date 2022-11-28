<?php get_header(); ?>

<main>
    <?php 
        get_template_part('/libs/homepage/slider');
        get_template_part('/libs/homepage/about');
        get_template_part('/libs/homepage/snellenTable');
        get_template_part('/libs/homepage/treatment');
        get_template_part('/libs/homepage/thirdEye');
        get_template_part('/libs/homepage/priceList');
    ?>
</main>

<?php get_footer(); ?>