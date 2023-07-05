<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bbase_code
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php
$data_array =  array(
    "email"        => 'trankimanh5678@gmail.com',
    "password"         => '123456s'
);

                $userCall = callAPI("POST","https://kurabun-api-dev.herokuapp.com/auth/login", json_encode($data_array));
               
                $dataUser = json_decode($userCall,true);
                if($dataUser['accessToken'])
                {
                    $userWishlist = callAPITOKEN("GET","https://kurabun-api-dev.herokuapp.com/wishlists/count", false,$dataUser['accessToken']);
                    $countWishlist = json_decode($userWishlist,true);
                    $userCartCount = callAPI("GET","https://kurabun-api-dev.herokuapp.com/cart-items/count?userId=".$dataUser['user']['id'], false);
                    $userCartCount = callAPITOKEN("GET","https://kurabun-api-dev.herokuapp.com/cart-items/count?userId=".$dataUser['user']['id'], false,$dataUser['accessToken']);
                    $countCart = json_decode($userCartCount,true);
                    
                }
             
               
            ?>
<header class="HeaderWrapper headerMain" style="">
    <div class="style__Wrapper wrapTopBar">
        <div class="topBarBetween">
            <span>ギフト・ノベルティ専門店</span>
            <div class="listSC">
                <div class="itemWrapperSC">
					<span class="subTitle-sc subTopLink">アルジャロ</span>
                    <div class="linkItemSC contactTopLink">☎ 086-441-3515</div>
                    <span class="subTitleSC">営業時間 10:00～18:00（土日、祝日を除く）</span>
                </div>
               
            </div>
        </div>
    </div>
    <?php include( dirname(__FILE__) .'/menu-responsive.php' ); ?>
    <div class="menuWrapper-sc">
        <div class="menuGrid-sc">
			
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.87aa8d22.svg" alt="logo" data-href="https://kurabun-ec-develop.vercel.app/" class="logoImage-sc" />
            <div class="menuSearch-sc">
                <form class="formSearch-sc" method="GET">
                    <button class="buttonSearch-sc"><img alt="icon-search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.14dd4c8b.svg" class="iconSearchProduct-sc" /></button>
                    <input type="text" placeholder="キーワード（例：バッグ）" class="menuInput-sc" value="" />
                    <a class="buttonSearch-sc buttonClose hidden">
                        <img alt="icon-close" src="<?php echo get_template_directory_uri(); ?>/assets/images/close.b3b62189.svg" class="iconSearchProduct-sc">
                    </a>
                </form>
            </div>
            <div class="menuUser-sc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.14dd4c8b.svg" alt="Menu-icon" class="icon-sc" />
                <div class="iconWrapper-sc">
                    <button data-testid="btn-submit" type="submit" class="button-sc" data-href="https://kurabun-ec-develop.vercel.app/favorite">
                        <div type="primary-ghost" class="notificationButtonWrapper-sc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.bdc65baf.svg" alt="icon" class="image-sc" /></div>
                    </button>
                    <span class="textDescriptionIcon-sc">お問い合わせ</span>
                </div>
                <div class="iconWrapper-sc">
                    <button data-testid="btn-submit" type="submit" class="button-sc" data-href="https://kurabun-ec-develop.vercel.app/favourite">
                        <div type="primary-ghost" class="notificationButtonWrapper-sc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/heart.29d433ab.svg" alt="icon" class="image-sc" />
						 <?php
                                    if($countWishlist)
                                    {
                                        ?>
                                        <span class="badge-sc"><?php echo $countWishlist; ?></span>
                                        <?php
                                    }
                            ?>
						</div>
                    </button>
                    <span class="textDescriptionIcon-sc">お気に入り</span>
                </div>
                <div class="iconWrapper-sc">
                    <button data-testid="btn-submit" type="submit" disabled="" class="button-sc" data-href="https://kurabun-ec-develop.vercel.app/favourite">
                        <div type="primary-ghost" class="notificationButtonWrapper-sc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bag-2.74a784a6.svg" alt="icon" class="image-sc" />
						 <?php
                                    if($countCart)
                                    {
                                        ?>
                                        <span class="badge-sc"><?php echo $countCart; ?></span>
                                        <?php
                                    }
                            ?>
						</div>
                    </button>
                    <span class="textDescriptionIcon-sc">カート</span>
                </div>
                <?php
                     if(!$dataUser['accessToken'])
                     {
                         ?>
				<div class="loginButton-sc">
				 <button data-testid="btn-submit" type="submit" class="button-usersc button-sc">
                    <div type="primary_400-ghost" class="notificationButtonWrapper-sc">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame.e4ec4254.svg" alt="icon" class="image-sc" />
                        <div class="buttonText-sc">ログイン・会員登録</div>
                    </div>
                    

                </button></div>
                        
                         <?php
                     }
                ?>
                
              
                <?php
                    if($dataUser['accessToken'])
                    {
                        
                        ?>
                          <div class="dropdownLoginWrapper-sc">
<div class="logedIn-sc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatarIcon.71e3ec8b.svg" alt="Avatar" class="avatarImagen">
                    <div class="myPageNavigate-sc" data-href="https://kurabun-ec-develop.vercel.app/my-page?tab=1">マイページ</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangleIcon.ace1990e.svg" alt="Dropdown icon" class="dropdownIcon-sc">
                </div>
                <div class="loginDropdown-sc" id="dropDownUserLogin">
    <div class="buttonWrapper-sc">
        <button data-testid="btn-submit" type="submit" class="button-sc" data-href="https://kurabun-ec-develop.vercel.app/ready-designed">
            <div type="secondary-blank" class="notificationButtonWrapper-sc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designSave.760adcf3.svg" alt="icon" class="image-sc" />
                <div class="buttonText-sc">作成済みデザイン</div>
            </div>
        </button>
    </div>
    <div class="buttonWrapper-sc">
        <button data-testid="btn-submit" type="submit" class="button-sc" data-href="https://kurabun-ec-develop.vercel.app/ready-designed?tab=1">
            <div type="secondary-blank" class="notificationButtonWrapper-sc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boughtItemIcon.77f842a8.svg" alt="icon" class="image-sc" />
                <div class="buttonText-sc">購入履歴リスト</div>
            </div>
        </button>
    </div>
    <div class="buttonWrapper-sc">
        <button data-testid="btn-submit" type="submit" class="button-sc" data-href="https://kurabun-ec-develop.vercel.app/my-page?tab=3">
            <div type="secondary-blank" class="notificationButtonWrapper-sc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/userUpdateIcon.3e5e0d1c.svg" alt="icon" class="image-sc" />
                <div class="buttonText-sc">会員登録内容変更</div>
            </div>
        </button>
    </div>
    <div class="buttonWrapper-sc">
        <button data-testid="btn-submit" type="submit" class="button-sc" data-href="https://kurabun-ec-develop.vercel.app/my-page?tab=4">
            <div type="secondary-blank" class="notificationButtonWrapper-sc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/addressIcon.7dfa2f56.svg" alt="icon" class="image-sc" />
                <div class="buttonText-sc">お届け先管理</div>
            </div>
        </button>
    </div>
    <div class="buttonWrapper-sc">
        <button data-testid="btn-submit" type="submit" class="button-sc" data-href="https://kurabun-ec-develop.vercel.app/my-page?tab=5">
            <div type="secondary-blank" class="notificationButtonWrapper-sc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deactivateIcon.c8b19d75.svg" alt="icon" class="image-sc" />
                <div class="buttonText-sc">退会手続き</div>
            </div>
        </button>
    </div>
    <div class="buttonWrapper-sc">
        <button data-testid="btn-submit" type="submit" class="button-sc">
            <div type="secondary-blank" class="notificationButtonWrapper-sc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoutIcon.fd2cde3e.svg" alt="icon" class="image-sc" />
                <div class="buttonText-sc">ログアウト</div>
            </div>
        </button>
    </div>
    
</div>
                </div>
                        <?php
                    }
                ?>
                
           
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.257925d3.svg" alt="Menu-icon" id="btn-nav-menu"  class="icon-sc" />
            </div>
        </div>
    </div>
</header>

<div class="cateAnnouWrapper-sc" style="">
    <div class="categoryMenuWrapper-sc">
        <div class="menuWrapper-sc-main">
            <div class="itemWrapper-sc" data-href="https://karabun.tranbang.work/for-newbie">
                <div class="menuItem-sc"><div class="menuText-sc">初めての方へ</div></div>
            </div>
            <div class="itemWrapper-sc menuItem-sc-sub">
                <div class="menuItem-sc">
                    <div class="menuText-sc">ご注文の流れ</div>
                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                            <img
                                alt=""
                                aria-hidden="true"
                                src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2720%27%20height=%2720%27/%3e"
                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"
                            />
                        </span>
                        <img
                            alt="down icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.88308eb7.svg"
                            decoding="async"
                            data-nimg="intrinsic"
                            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.88308eb7.svg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.88308eb7.svg 2x"
                            style="
                                position: absolute;
                                inset: 0px;
                                box-sizing: border-box;
                                padding: 0px;
                                border: none;
                                margin: auto;
                                display: block;
                                width: 0px;
                                height: 0px;
                                min-width: 100%;
                                max-width: 100%;
                                min-height: 100%;
                                max-height: 100%;
                            "
                        />
                    </span>
                </div>
                <div class="dropdownListWrapper-sc">
                    <div class="dropdownItemWrapper-sc-ddousy">
                        <div class="menuItem-sc-ddousy">
                            <div class="leftItem-sc-ddousy">
                                <span
                                    style="
                                        box-sizing: border-box;
                                        display: inline-block;
                                        overflow: hidden;
                                        width: initial;
                                        height: initial;
                                        background: none;
                                        opacity: 1;
                                        border: 0px;
                                        margin: 0px;
                                        padding: 0px;
                                        position: relative;
                                        max-width: 100%;
                                    "
                                >
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img
                                            alt=""
                                            aria-hidden="true"
                                            src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2717.6%27%20height=%2719.2%27/%3e"
                                            style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"
                                        />
                                    </span>
                                    <img
                                        alt="topic icon"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/topic.891b507e.svg"
                                        decoding="async"
                                        data-nimg="intrinsic"
                                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/topic.891b507e.svg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/topic.891b507e.svg 2x"
                                        style="
                                            position: absolute;
                                            inset: 0px;
                                            box-sizing: border-box;
                                            padding: 0px;
                                            border: none;
                                            margin: auto;
                                            display: block;
                                            width: 0px;
                                            height: 0px;
                                            min-width: 100%;
                                            max-width: 100%;
                                            min-height: 100%;
                                            max-height: 100%;
                                        "
                                    />
                                </span>
                                <span class="menuName-sc-ddousy">名入れデータに関して</span>
                            </div>
                            <span
                                style="
                                    box-sizing: border-box;
                                    display: inline-block;
                                    overflow: hidden;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0px;
                                    margin: 0px;
                                    padding: 0px;
                                    position: relative;
                                    max-width: 100%;
                                "
                            >
                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                    <img
                                        alt=""
                                        aria-hidden="true"
                                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2720%27%20height=%2720%27/%3e"
                                        style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"
                                    />
                                </span>
                                <img
                                    alt="right arrow icon"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/right.f549ba53.svg"
                                    decoding="async"
                                    data-nimg="intrinsic"
                                    class="rightImage-sc-ddousy"
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/right.f549ba53.svg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/right.f549ba53.svg 2x"
                                    style="
                                        position: absolute;
                                        inset: 0px;
                                        box-sizing: border-box;
                                        padding: 0px;
                                        border: none;
                                        margin: auto;
                                        display: block;
                                        width: 0px;
                                        height: 0px;
                                        min-width: 100%;
                                        max-width: 100%;
                                        min-height: 100%;
                                        max-height: 100%;
                                    "
                                />
                            </span>
                        </div>
                        <div class="menuItem-sc-ddousy">
                            <div class="leftItem-sc-ddousy">
                                <span
                                    style="
                                        box-sizing: border-box;
                                        display: inline-block;
                                        overflow: hidden;
                                        width: initial;
                                        height: initial;
                                        background: none;
                                        opacity: 1;
                                        border: 0px;
                                        margin: 0px;
                                        padding: 0px;
                                        position: relative;
                                        max-width: 100%;
                                    "
                                >
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img
                                            alt=""
                                            aria-hidden="true"
                                            src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2717.6%27%20height=%2719.2%27/%3e"
                                            style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"
                                        />
                                    </span>
                                    <img
                                        alt="topic icon"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/topic.891b507e.svg"
                                        decoding="async"
                                        data-nimg="intrinsic"
                                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/topic.891b507e.svg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/topic.891b507e.svg 2x"
                                        style="
                                            position: absolute;
                                            inset: 0px;
                                            box-sizing: border-box;
                                            padding: 0px;
                                            border: none;
                                            margin: auto;
                                            display: block;
                                            width: 0px;
                                            height: 0px;
                                            min-width: 100%;
                                            max-width: 100%;
                                            min-height: 100%;
                                            max-height: 100%;
                                        "
                                    />
                                </span>
                                <span class="menuName-sc-ddousy">熨斗包装に関して</span>
                            </div>
                            <span
                                style="
                                    box-sizing: border-box;
                                    display: inline-block;
                                    overflow: hidden;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0px;
                                    margin: 0px;
                                    padding: 0px;
                                    position: relative;
                                    max-width: 100%;
                                "
                            >
                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                    <img
                                        alt=""
                                        aria-hidden="true"
                                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2720%27%20height=%2720%27/%3e"
                                        style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"
                                    />
                                </span>
                                <img
                                    alt="right arrow icon"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/right.f549ba53.svg"
                                    decoding="async"
                                    data-nimg="intrinsic"
                                    class="rightImage-sc-ddousy"
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/right.f549ba53.svg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/right.f549ba53.svg 2x"
                                    style="
                                        position: absolute;
                                        inset: 0px;
                                        box-sizing: border-box;
                                        padding: 0px;
                                        border: none;
                                        margin: auto;
                                        display: block;
                                        width: 0px;
                                        height: 0px;
                                        min-width: 100%;
                                        max-width: 100%;
                                        min-height: 100%;
                                        max-height: 100%;
                                    "
                                />
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemWrapper-sc" data-href="https://kurabun-ec-develop.vercel.app/faqs">
                <div class="menuItem-sc"><div class="menuText-sc">よくある質問</div></div>
            </div>
            <div class="itemWrapper-sc" data-href="https://karabun.tranbang.work/profile-company/">
                <div class="menuItem-sc"><div class="menuText-sc">会社概要</div></div>
            </div>
        </div>
    </div>
    

    <div class="announcementContainer-sc">
        <div class="announcementSlider-sc">
            <?php
                $announces = callAPI("GET","kurabun-api-dev.herokuapp.com/announcements?lang=en", false);
                $announcesList=json_decode($announces, true);
                foreach($announcesList as $announItem)
                {
                    if($announItem['isPublic'])
                    {
                    ?>
                         <div class="announcementBanner-sc"><?php echo $announItem['content']; ?></div>
                    <?php
                    }
                }
            ?>
           
           
        </div>
    </div>
</div>

<div id="content" class="site-content">