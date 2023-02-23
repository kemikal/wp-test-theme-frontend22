<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo("name") ?> | <?= bloginfo("description") ?></title>
    <?= wp_head() ?>
</head>
<body <?= body_class() ?>>

<h1><?php echo bloginfo("name") ?></h1>
<p><?= bloginfo("description") ?></p>
    
<?php

// wp_list_pages(array(
//     "title_li" => Null,
// ));

wp_nav_menu(array(
    "theme_location" => "headerMenu"
))

?>
