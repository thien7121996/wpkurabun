<?php
/**
 * Template Name: Company Profile
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
                <div class="block-profile">
                    <?php the_content(); ?>


                </div>
                <div class="wrap-block">
                    <h2 id="block-6a4fde5b-42a0-4e13-ba0f-925aebda0ded">地図</h2>

                    <?php echo get_post_meta(get_the_ID(),'map',true); ?>
                </div>
            </div>



        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>