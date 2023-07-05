<?php
/**
 * Template Name: Trade Law
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package BBase_Code
 */


defined( 'ABSPATH' ) || exit;

get_header(); the_post(); ?>
<div class="wrap-page-sc">
    <div class="wrap-page-sc-main">
        <div class="pagemain-sc">
            <div class="block-profile blockTradeLaw">
                <?php the_content(); ?>


            </div>


        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>