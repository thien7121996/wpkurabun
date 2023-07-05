<div class="menuSmallScreenWrapper-sc" style="">
    <div class="menuHeaderWrapper-sc">
        <div class="menuSmallHeader-sc">
            <div class="groupButtonHeader-sc">
                <button class="buttonWrapperMenu-sc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame.e4ec4254.svg" width="23" height="23" class="icon-sc-cat" /><span class="textButtonMenu-sc">ログイン・会員登録</span>
                </button>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/closeMenu.6ce14ac6.svg" alt="Menu-icon" id="close-nav-btn" class="icon-sc-cat" />
        </div>
        <div class="mainMenuStyled-sc">
            <div class="wrapper-sc-menurp">
                <div class="flexBetween-sc">
                    <div class="list-sc-responsive">
                        <div class="linkItem-sc">ホットライン: 086-441-3515</div>
                        <div class="linkItem-sc linkItemCT1">予算でお探し</div>
                        <div class="linkItem-sc linkItemCT2">お問い合わせ</div>
                    </div>
                </div>
            </div>
            <div class="groupMenuWrapper-sc"><span class="textTitle-sc">条件から絞る</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-up.a748d986.svg" class="icon-sc-cat" /></div>
            <div class="content-sc">
    <div class="sidebar-sc">
        <div data-testid="category-group" class="categoriesGroupWrapper-sc">
            <div id="price-range" class="categoryButtonWrapper-sc">
                <button class="categoryGroupButton-sc">
                    <div class="buttonContent-sc">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/category.4b0937c8.svg" alt="category-icon" width="32" height="32" class="icon-sc-cat" /><span class="buttonName-sc">価格帯で探す</span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down-black.cd4808c3.svg" alt="category-icon" class="icon-sc-cat" />
                </button>
            </div>
            <?php
                $priceRange = callAPI("GET","kurabun-api-dev.herokuapp.com/price-ranges?lang=en", false);
                $priceRangeList=json_decode($priceRange, true);
            ?>
            <div class="subCategoryContainer-sc">
                <div class="priceRangeContainer-sc">
                    <?php
                    $i=0;
                    foreach($priceRangeList as $price)
                    {
                        $minPrice=$price['min'];
                        $maxPrice=$price['max'];
                        if($minPrice==NULL)
                        {
                          $stringPriceRange="～ ".$maxPrice."円";
                        }
                        elseif($maxPrice==NULL)
                        {
                          $stringPriceRange=$minPrice."円 ～ ";
                        } 
                        else
                        {
                          
                          $stringPriceRange=$minPrice."円 ～ ".$maxPrice."円";
                        }
                        ?>
                            <li data-testid="priceRange-option" id="buton-price-range-<?php echo $i; ?>" class="menuItem-sc urlNavigation" data-href="https://kurabun-ec-develop.vercel.app/products/price-range/<?php echo $price['id']; ?>">
                        <div class="menuItemLink-sc">
                            <?php echo $stringPriceRange; ?>
                        </div>
                        <span
                            style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"
                        >
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img
                                    alt=""
                                    aria-hidden="true"
                                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e"
                                    style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"
                                />
                            </span>
                            <img
                                alt="Arrow icon"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.d87d7e48.svg"
                                decoding="async"
                                data-nimg="intrinsic"
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
                    </li>
                        <?php
                        $i++;
                    }
                    ?>
                    
                    
                </div>
            </div>
        </div>
        <?php
          $cateGroups = callAPI("GET","kurabun-api-dev.herokuapp.com/category-groups?lang=en", false);
          $categoriesGroup=json_decode($cateGroups, true);
          foreach($categoriesGroup as $itemCat)
          {
            ?>
            
              <div data-testid="category-group" class="categoriesGroupWrapper-sc">
            <div id="price-range" class="categoryButtonWrapper-sc">
                <button class="categoryGroupButton-sc">
                    <div class="buttonContent-sc">
                        <img src="<?php echo $itemCat['icon']['url']; ?>" alt="category-icon" width="32" height="32" class="icon-sc-cat" />
                        <span class="buttonName-sc"><?php echo $itemCat['name']; ?></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down-black.cd4808c3.svg" alt="category-icon" class="icon-sc-cat" />
                </button>
            </div>
            <div class="subCategoryContainer-sc">
                <div class="multiMenuWrapper-sc">
                    <ul class="menuItemWrapper-sc">
                        <?php
                            foreach($itemCat['categories'] as $itemCatChild)
                            {
                                ?>
                                <li class="menuItem-sc urlNavigation" data-href="https://kurabun-ec-develop.vercel.app/category/<?php echo $itemCatChild['id']; ?>">
                            <div class="menuItemLink-sc">
                                <div class="linkContainer-sc">
                                    <img src="<?php echo $itemCatChild['icon']['url']; ?>" height="20" width="20" alt="Category icon" class="styles__icon-sc-cat-1mb13mb-12 icbVVh" />
                                    <span class="titleCategory-sc"><?php echo $itemCatChild['name']; ?></span>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.cd4808c3.svg" alt="Arrow icon" class="customImage-sc" />
                            </div>
                            <div class="subMenuWrapper-sc">
    <span class="triangle-sc"></span>
    <ul class="subMenu-sc">
    <?php
                            foreach($itemCatChild['children'] as $itemCatChildn)
                            {
                                ?>
                                 <li class="subMenuItem-sc urlNavigation" data-href="https://kurabun-ec-develop.vercel.app/category/<?php echo $itemCatChildn['id']; ?>">
            <div class="subMenuItemLink-sc">
                <div class="subItemTitle-sc">
                    <img src="<?php echo $itemCatChildn['icon']['url']; ?>" alt="<?php echo $itemCatChildn['name']; ?>" class="subMenuItemImage-sc" />
                    <span class="titleCategory-sc"><?php echo $itemCatChildn['name']; ?></span>
                </div>
            </div>
        </li>
                                <?php
                            }
                            ?>
       
        
    </ul>
</div>

                        </li>
                                <?php
                            }
                        ?>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
            <?php
          }
        ?>
        
        
     
    </div>
</div>

            <div class="groupMenuWrapper-sc">
                <span class="textTitle-sc">サイトメニュー</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-up.a748d986.svg" class="icon-sc-cat" />
            </div>
            <div class="content-sc menuDropMain">
                <div class="categoryMenuWrapper-sc-drop">
                    <div class="menuWrapper-sc-drop">
                        <div class="itemWrapper-sc">
                            <div class="menuItem-sc-resp"><div class="menuText-sc">初めての方へ</div></div>
                        </div>
                        <div class="itemWrapper-sc">
                            <div class="menuItem-sc-resp">
                                <div class="menuText-sc">ご注文の流れ</div>
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
                                        alt="down icon"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.88308eb7.svg"
                                        decoding="async" class="downIconSub"
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
                            <div class="containerWrapper-sc">
    <span class="item-sc"><span class="itemLink-sc">名入れデータに関して</span><span class="itemLink-sc">熨斗包装に関して</span></span>
</div>
                        </div>
                       

                        <div class="itemWrapper-sc">
                            <div class="menuItem-sc-resp"><div class="menuText-sc">よくある質問</div></div>
                        </div>
                        <div class="itemWrapper-sc">
                            <div class="menuItem-sc-resp"><div class="menuText-sc">会社概要</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>