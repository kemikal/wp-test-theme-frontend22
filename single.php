<?php
get_header();

if (is_product()) {
   
    while(have_posts()){
        the_post();
        ?>
        <h2><?= the_title(); ?></h2>
        <div><?= the_content(); ?></div>
        <?php
    }

} else {
   
    while(have_posts()){
        the_post();
        ?>
       <h2><?= the_title(); ?></h2>
        <div>....<?= the_content(); ?>----</div>
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