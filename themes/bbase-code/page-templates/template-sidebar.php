<?php
/**
 * Template Name: Sidebar Full
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package BBase_Code
 */


defined( 'ABSPATH' ) || exit;

get_header(); the_post(); ?>
<div class="wrap-page-sc">
    <div class="wrap-page-sc-main">
        <div class="pagemain-sc pageRow-sc row-flex-sc">
            <div class="col-sc-3">
                <?php include( dirname(__FILE__) .'/sideBar-main.php' ); ?>
            </div>
            <div class="col-sc-7  pageRow-sc">
                <div class="wrap-block">
                    <?php the_content(); ?>


                </div>
                
            </div>



        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>