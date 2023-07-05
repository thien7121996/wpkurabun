<?php
/**
 * Template Name: Term of use
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
                                <li class="item-navTop" data-sec="tab-tur-0">1. サビース</li>
                                <li class="item-navTop" data-sec="tab-tur-1">2. 本規約の適用および変更</li>
                                <li class="item-navTop" data-sec="tab-tur-2">3. 商品等の購入申し込み</li>
                                <li class="item-navTop" data-sec="tab-tur-3">4. 代金の支払い、商品等の配送</li>
                                <li class="item-navTop" data-sec="tab-tur-4">5. 商品等の納期</li>
                                <li class="item-navTop" data-sec="tab-tur-5">6. 商品等の返品・交換について</li>
                                <li class="item-navTop" data-sec="tab-tur-6">7. 商品等の受け取り拒否</li>
                                <li class="item-navTop" data-sec="tab-tur-7">8. 禁止行為</li>
                                <li class="item-navTop" data-sec="tab-tur-8">9. 個人情報の取り扱い</li>
                                <li class="item-navTop" data-sec="tab-tur-9">10. 著作権の所有</li>
                                <li class="item-navTop" data-sec="tab-tur-10">11. 印刷サービス</li>
                                <li class="item-navTop" data-sec="tab-tur-11">12. 売買契約等における地位の譲渡</li>
                                <li class="item-navTop" data-sec="tab-tur-12">13. アウトソーシング</li>
                                <li class="item-navTop" data-sec="tab-tur-13">14. 責任の範囲</li>
                                <li class="item-navTop" data-sec="tab-tur-14">15. 可分性</li>
                                <li class="item-navTop" data-sec="tab-tur-15">16. 準拠法および合意管轄</li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>