<?php
/**
 * header file
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open();?>
    <div class="main-header">
        <ul>
            <li>home</li>
            <li>about</li>
            <li>services</li>
            <li>contact us</li>
         </ul>
       
    </div>