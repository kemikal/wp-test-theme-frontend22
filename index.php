<?php
get_header();

while(have_posts()){
    the_post();
    ?>
   <h2><a href="<?= the_permalink()?>"><?= the_title(); ?></a></h2>
    <div><?= the_excerpt(); ?></div>
    <a href="<?= the_permalink() ?>">Läs mer</a>
    <?php
}

get_footer();
?>