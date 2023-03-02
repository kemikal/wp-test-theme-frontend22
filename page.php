<?php
get_header();

if(is_shop() || is_product_category()) {
    while(have_posts()){
        the_post();
        ?>
        <div>BUTIKSMENY</div>
        <div><?= the_content(); ?></div>
        <?php
    }
} else {
    while(have_posts()){
        the_post();
        ?>
       <h2><?= the_title(); ?></h2>
        <div><?= the_content(); ?></div>
        <?php
    }
}

/*
while(have_posts()){
    the_post();
    ?>
   <h2><?= the_title(); ?></h2>
    <div><?= the_content(); ?></div>
    <?php
}
*/

get_footer();
?>