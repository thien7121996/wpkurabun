<?php
/**
 * Template Name: For Newbie
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
                            <li class="item-navTop" data-sec="tab-tur-1">商品・印刷価格</li>
                            <li class="item-navTop" data-sec="tab-tur-2">少量注文</li>
                            <li class="item-navTop" data-sec="tab-tur-3">無料サンプル画像作成</li>
                            <li class="item-navTop" data-sec="tab-tur-4">ドラフトデータ</li>
                            <li class="item-navTop" data-sec="tab-tur-5">印刷方法</li>
                            <li class="item-navTop" data-sec="tab-tur-6">予算でお探し機能</li>
                            <li class="item-navTop" data-sec="tab-tur-7">自動見積機能</li>
                            <li class="item-navTop" data-sec="tab-tur-8">会員機能</li>
                            <li class="item-navTop" data-sec="tab-tur-9">ご請求/お支払い</li>
                            <li class="item-navTop" data-sec="tab-tur-10">配達日/配送料</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>