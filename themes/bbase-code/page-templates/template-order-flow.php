<?php
/**
 * Template Name: Order Flow
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package BBase_Code
 */


defined( 'ABSPATH' ) || exit;

get_header(); the_post(); ?>
<div class="wrap-page-sc">
    <div class="wrap-page-sc-main">
        <div class="pagemain-sc pageRow-sc">
            <div class="col-sc-12  pageRow-sc">
            <div class="row-sc">
                <div class="box-row-sc">
                    <div class="headBoxSC">
                    <h2>ネーム刻印の場合</h2>
                    <button class="btn-turtorial btn-turActive" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M14 15.9991C14 17.7691 13.23 19.3691 12 20.4591C10.94 21.4191 9.54 21.9991 8 21.9991C4.69 21.9991 2 19.3091 2 15.9991C2 13.9743 3.01397 12.1804 4.5554 11.0964C4.80358 10.9219 5.1393 11.0413 5.27324 11.3135C6.21715 13.2322 7.95419 14.669 10.02 15.2291C10.65 15.4091 11.31 15.4991 12 15.4991C12.4872 15.4991 12.9539 15.4529 13.4074 15.3678C13.6958 15.3137 13.9828 15.4985 13.9955 15.7916C13.9985 15.8611 14 15.9305 14 15.9991Z" fill="#6CA1A2"/>
<path d="M18 8C18 8.78 17.85 9.53 17.58 10.21C16.89 11.95 15.41 13.29 13.58 13.79C13.08 13.93 12.55 14 12 14C11.45 14 10.92 13.93 10.42 13.79C8.59 13.29 7.11 11.95 6.42 10.21C6.15 9.53 6 8.78 6 8C6 4.69 8.69 2 12 2C15.31 2 18 4.69 18 8Z" fill="#6CA1A2"/>
<path d="M22 15.9991C22 19.3091 19.31 21.9991 16 21.9991C15.2555 21.9991 14.5393 21.8633 13.8811 21.6131C13.5624 21.492 13.503 21.0841 13.7248 20.8253C14.8668 19.4928 15.5 17.785 15.5 15.9991C15.5 15.6591 15.47 15.3191 15.42 14.9991C15.3902 14.8146 15.4844 14.6333 15.6478 14.5428C16.9719 13.8098 18.0532 12.6866 18.727 11.3144C18.8609 11.0418 19.1968 10.9221 19.4452 11.0968C20.9863 12.1809 22 13.9746 22 15.9991Z" fill="#6CA1A2"/>
</svg>プリント付き</button>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-under.png" />
                    </div>
                    
                    <ul class="listHeader">
                        <li>印刷込みのご注文は、ご注文後2週間半～3週間程度（500枚程度の場合）でお届けいたします。</li>
                        <li>商品や在庫状況により納期が前後する場合がございますので、詳しい納期につきましてはお問い合わせください。</li>
                    </ul>
                    <div class="tabdiv-sc row-flex-sc">
                        <div class="col-sc-5">
                                <div class="box-sc-ct box-sc-sm box-sc-Left">
                                <div class="head-tabSC">
                                    <div class="number-tbSC">
                                        <p>01.</p>
                                        <span>注文</span>
                                    </div>
                                    <div class="img-tbSC">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boxOrderFlow.png" />
                                    </div>
                                    
                                </div>
                                <div class="contentTabSC">
                                <ul>
                                    <li>商品ページの「注文する」ボタンからご注文ください</li>
                                </ul>
                                    <span class="noteCT-sc">
                                    各商品ページの「注文する」ボタンからご注文いただけます。
※自動見積もり計算後、WEBからご注文いただけます。自動見積もりが算出される前のご注文はできませんのでご注意ください。 ※大量注文の場合は「スタッフに見積もり依頼」よりお問い合わせください。
                                    </span>
                                    <ul>
                                        <li>メールで注文</li>
                                    </ul>
<span class="noteCT-sc">リピーターのお客様、すでにスタッフ見積等をご利用いただいているお客様は、メールでもご注文いただけます。
                                    </span>
<ul>
<li>FAXで注文</li>
                                </ul>
                                <span class="noteCT-sc">ファックスでもご注文いただけます。詳しくは下記ページをご確認ください。</span>
                                <p class="text-sub-sc">FAX申込書ダウンロードページ</p>
                                </div>
                                </div>
                                
                        </div>
                        <div class="col-sc-5">
                        <div class="box-sc-ct box-sc-sm box-sc-Right">
                        <div class="head-tabSC">
                                    <div class="number-tbSC">
                                        <p>02.</p>
                                        <span>支払いデータの送信</span>
                                    </div>
                                    <div class="img-tbSC">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boxOrderFlow.png" />
                                    </div>
                                    
                                </div>
                                <div class="contentTabSC">

            
                                    <span class="noteCT-sc">
                                    ご注文後、翌営業日以内に請求書をお送りいたしますので、代金をお振込み（銀行振込）してください。ご入金確認後、正式にご注文確定となりますので、データをご提出ください。
                                    </span>
<span class="noteCT-sc">デザインの発注方法は、自分でデザインできるデザインシミュレーターと「フルデータ入稿」の2種類。 印刷方法やケースに合わせてお選びください。
                                    </span>

                              
                                </div>
                              
                        <div class="row-flex-sc tabBoxSC">
                        <div class="col-sc-5 itemBox-sc">
                            <div class="box-sc-ct boxSC ">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/for-new-3.png" />
                                <p class="main-cl-text maintext-bold">デザインシミュレーター</p>
                                <p class="text-sc-normal" style="display:none !important">ログイン不要で、ご注文前に簡単にセルフデザインできる便利なツールです。 ご注文後、担当スタッフとデータの再確認ができるので安心です。</p>
                                <a href="javascript:void(0)">詳細を表示<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-long.png" /></a>
                            </div>
                            
                        </div>
                        <div class="col-sc-5  itemBox-sc">
                            <div class="box-sc-ct boxSC">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/for-new-4.png" />
                            <p class="main-cl-text maintext-bold">完全なデータの提出</p>
                            <p class="text-sc-normal"  style="display:none !important">Illustrator、Photoshop、Clip Studioなどのデザインソフトウェアを使用して特定のデザインを作成する場合は、完全なデータを...
                             </p>
                                <a href="javascript:void(0)">詳細を表示<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-long.png" /></a>
                            </div>
                            
                        </div>
                        </div>
                        
                    </div>
                        </div>
                    </div>
                     <div class="tabdiv-sc row-flex-sc">
                        <div class="col-sc-5">
                                <div class="box-sc-ct box-sc-sm box-sc-Left">
                                <div class="head-tabSC">
                                    <div class="number-tbSC">
                                        <p>03.</p>
                                        <span>デザイン確認（画像校正）</span>
                                    </div>
                                    <div class="img-tbSC">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookNote.png" />
                                    </div>
                                    
                                </div>
                                <div class="contentTabSC">

            
<span class="noteCT-sc">
お支払い後、1営業日以内に印刷イメージをお送りいたします。 印刷イメージを確認し、OKの返信をいただいた後、校正を行い、商品への印刷工程に入ります。
</span></br>
<span class="noteCT-sc">※イメージ画像は1枚無料で作成いたします。 （2点目以降は1点につき1,100円（税込）となります）
</span>


</div>
                                </div>
                                
                        </div>
                        <div class="col-sc-5">
                        <div class="box-sc-ct box-sc-sm box-sc-Right">
                        <div class="head-tabSC">
                                    <div class="number-tbSC">
                                        <p>04.</p>
                                        <span>資料の送付</span>
                                    </div>
                                    <div class="img-tbSC">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phoneNote.png" />
                                    </div>
                                    
                                </div>
                                <div class="contentTabSC">

            
                                    <span class="noteCT-sc">
                                    校正後、約10営業日でご指定の場所へお届けいたします。
商品到着後は必ず商品をご確認いただき、不良品がございましたら商品到着後7日以内にメールまたはお電話にてご連絡ください。
                                    </span>


                              
                                </div>
                              
                        
                        
                    </div>
                        </div>
                    </div>
                </div>
            </div>
          
           
            </div>
            
			
			<div class="col-sc-12  pageRow-sc">
            <div class="row-sc">
                <div class="box-row-sc">
                    <div class="headBoxSC">
                    <h2>製品のみ</h2>
                    <button class="btn-turtorial btn-turDisabled" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M14 15.9991C14 17.7691 13.23 19.3691 12 20.4591C10.94 21.4191 9.54 21.9991 8 21.9991C4.69 21.9991 2 19.3091 2 15.9991C2 13.9743 3.01397 12.1804 4.5554 11.0964C4.80358 10.9219 5.1393 11.0413 5.27324 11.3135C6.21715 13.2322 7.95419 14.669 10.02 15.2291C10.65 15.4091 11.31 15.4991 12 15.4991C12.4872 15.4991 12.9539 15.4529 13.4074 15.3678C13.6958 15.3137 13.9828 15.4985 13.9955 15.7916C13.9985 15.8611 14 15.9305 14 15.9991Z" fill="#6CA1A2"/>
<path d="M18 8C18 8.78 17.85 9.53 17.58 10.21C16.89 11.95 15.41 13.29 13.58 13.79C13.08 13.93 12.55 14 12 14C11.45 14 10.92 13.93 10.42 13.79C8.59 13.29 7.11 11.95 6.42 10.21C6.15 9.53 6 8.78 6 8C6 4.69 8.69 2 12 2C15.31 2 18 4.69 18 8Z" fill="#6CA1A2"/>
<path d="M22 15.9991C22 19.3091 19.31 21.9991 16 21.9991C15.2555 21.9991 14.5393 21.8633 13.8811 21.6131C13.5624 21.492 13.503 21.0841 13.7248 20.8253C14.8668 19.4928 15.5 17.785 15.5 15.9991C15.5 15.6591 15.47 15.3191 15.42 14.9991C15.3902 14.8146 15.4844 14.6333 15.6478 14.5428C16.9719 13.8098 18.0532 12.6866 18.727 11.3144C18.8609 11.0418 19.1968 10.9221 19.4452 11.0968C20.9863 12.1809 22 13.9746 22 15.9991Z" fill="#6CA1A2"/>
</svg>印刷なし</button>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-under.png" />
                    </div>
                    
                    <ul class="listHeader">
                        <li>印刷込みのご注文は、ご注文後2週間半～3週間程度（500枚程度の場合）でお届けいたします。</li>
                        <li>商品や在庫状況により納期が前後する場合がございますので、詳しい納期につきましてはお問い合わせください。</li>
                    </ul>
                    <div class="tabdiv-sc row-flex-sc">
                        <div class="col-sc-5">
                                <div class="box-sc-ct box-sc-sm box-sc-Left">
                                <div class="head-tabSC">
                                    <div class="number-tbSC">
                                        <p>01.</p>
                                        <span>注文</span>
                                    </div>
                                    <div class="img-tbSC">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boxOrderFlow.png" />
                                    </div>
                                    
                                </div>
                                <div class="contentTabSC">
                                <ul>
                                    <li>商品ページの「注文する」ボタンからご注文ください</li>
                                </ul>
                                    <span class="noteCT-sc">
                                    各商品ページの「注文する」ボタンからご注文いただけます。
※自動見積もり計算後、WEBからご注文いただけます。自動見積もりが算出される前のご注文はできませんのでご注意ください。 ※大量注文の場合は「スタッフに見積もり依頼」よりお問い合わせください。
                                    </span>
                                    <ul>
                                        <li>メールで注文</li>
                                    </ul>
<span class="noteCT-sc">リピーターのお客様、すでにスタッフ見積等をご利用いただいているお客様は、メールでもご注文いただけます。
                                    </span>
<ul>
<li>FAXで注文</li>
                                </ul>
                                <span class="noteCT-sc">ファックスでもご注文いただけます。詳しくは下記ページをご確認ください。</span>
                                <p class="text-sub-sc">FAX申込書ダウンロードページ</p>
                                </div>
                                </div>
                                
                        </div>
                        <div class="col-sc-5 boxSCHeight">
                        <div class="box-sc-ct box-sc-sm box-sc-Right">
                                <div class="head-tabSC">
                                    <div class="number-tbSC">
                                        <p>02.</p>
                                        <span>支払いデータの送信</span>
                                    </div>
                                    <div class="img-tbSC">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookNote.png" />
                                    </div>
                                    
                                </div>
                                <div class="contentTabSC">

            
<span class="noteCT-sc">
ご注文後、翌営業日以内に請求書をお送りいたしますので、銀行振込（銀行振込）でお願いいたします。ご入金確認後、正式にご注文確定となり、在庫確保、発送手配をさせていただきます。
</span>


</div>
                                </div>
								 <div class="box-sc-ct box-sc-sm box-sc-Right" style="margin-top:30px">
                        <div class="head-tabSC">
                                    <div class="number-tbSC">
                                        <p>03.</p>
                                        <span>資料の送付</span>
                                    </div>
                                    <div class="img-tbSC">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phoneNote.png" />
                                    </div>
                                    
                                </div>
                                <div class="contentTabSC">

            
                                    <span class="noteCT-sc">
                                    校正後、約10営業日でご指定の場所へお届けいたします。
商品到着後は必ず商品をご確認いただき、不良品がございましたら商品到着後7日以内にメールまたはお電話にてご連絡ください。
                                    </span>


                              
                                </div>
                              
                        
                        
                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
          
           
            </div>
        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>