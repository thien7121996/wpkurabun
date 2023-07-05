<?php
/**
 * Template Name: Template privacy
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
            <div class="col-sc-7  pageRow-sc">
            <?php the_content(); ?>
            
            </div>
            <div class="col-sc-3">
                <div class="sidebar-floating">
                        <h3>目次</h3>
                        <div class="list-sec-tur">
                            <ul>
                                <li class="item-navTop" data-sec="tab-tur-0">1. 個人情報の利用目的</li>
                                <li class="item-navTop" data-sec="tab-tur-1">2. 個人情報の利用目的の変更</li>
                                <li class="item-navTop" data-sec="tab-tur-2">3. 個人情報の適正な取得</li>
                                <li class="item-navTop" data-sec="tab-tur-3">4. 個人情報の適切な管理</li>
                                <li class="item-navTop" data-sec="tab-tur-4">5. 個人データの第三者提供</li>
                                <li class="item-navTop" data-sec="tab-tur-5">6. 個人情報の開示等の求め</li>
                                <li class="item-navTop" data-sec="tab-tur-6">7. クッキーおよびその他の技術の使用</li>
                                <li class="item-navTop" data-sec="tab-tur-7">8. お問い合わせ</li>
                                <li class="item-navTop" data-sec="tab-tur-8">9. プライバシーポリシーの変更手続き</li>
                              
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>