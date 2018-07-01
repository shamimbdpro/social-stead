
<!doctype html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
    <meta charset="UTF-8">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo base_url(); ?>/xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php if($logo): foreach($logo as $data): ?><?php echo base_url(); ?>libs/image/Company_logo/<?php echo $data->company_logo; ?><?php endforeach; endif;?>" rel="apple-touch-icon">
        <?php
            if($thisdata):
                foreach($thisdata as $data):
        ?>
    <title><?php echo $data->pack_name; ?></title> 
    <meta name="robots" content="noindex,follow"/>
    <link rel="canonical" href="<?php echo base_url(); ?>product/<?php echo $data->pack_name; ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $data->pack_name; ?> - Social Stead" />
    <meta property="og:site_name" content="Social Stead" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $data->pack_name; ?> - Social Stead" />
        <?php
            endforeach;
        endif;
        ?>

    <script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/<?php echo base_url(); ?>\/","name":"Social Stead","potentialAction":{"@type":"SearchAction","target":"http:\/\/<?php echo base_url(); ?>\/?s={search_term_string}","query-input":"required name=search_term_string"}}
    </script> 
    <link rel='dns-prefetch' href='//w.sharethis.com' />
    <link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='stylesheet' id='slick_css-css'  href='<?php echo base_url(); ?>libs/themes/the-seo/js/lib/slick/slick.css' type='text/css' media='all' />
    <link rel='stylesheet' id='theseo_bootstrap-css'  href='<?php echo base_url(); ?>libs/themes/the-seo/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='dynamic_css-css'  href='<?php echo base_url(); ?>libs/themes/the-seo/css/dynamic.css' type='text/css' media='all' />
    <link rel='stylesheet' id='theseo_ownstyles-css'  href='<?php echo base_url(); ?>libs/themes/the-seo/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='sl_icon_css-css'  href='<?php echo base_url(); ?>libs/plugins/SecretLabShortcodes/sl_mega_icons/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='sl_icon_bgricons-css'  href='<?php echo base_url(); ?>libs/plugins/SecretLabShortcodes/sl_mega_icons/css/fonts/bgricons/bgricons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-color-picker-css'  href='<?php echo base_url(); ?>/libs/css/color-picker.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php echo base_url(); ?>libs/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'  href='<?php echo base_url(); ?>libs/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />

    <style id='rs-plugin-settings-inline-css' type='text/css'>#rs-demo-id {}</style>
    <link rel='stylesheet' id='photoswipe-css'  href='<?php echo base_url(); ?>libs/plugins/woocommerce/assets/css/photoswipe/photoswipe.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photoswipe-default-skin-css'  href='<?php echo base_url(); ?>libs/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ex-express-checkout-min-css-css'  href='<?php echo base_url(); ?>libs/plugins/express-checkout/includes/assets/css/ex-express-chekout.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-addons-css-css'  href='<?php echo base_url(); ?>libs/plugins/woocommerce-product-addons/assets/css/frontend.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-Defaults-css'  href='<?php echo base_url(); ?>libs/uploads/smile_fonts/Defaults/Defaults.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-alico-css'  href='<?php echo base_url(); ?>libs/uploads/smile_fonts/alico/alico.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-seocon-css'  href='<?php echo base_url(); ?>libs/uploads/smile_fonts/seocon/seocon.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ylc-frontend-css'  href='<?php echo base_url(); ?>libs/plugins/yith-live-chat-premium/assets/css/ylc-frontend.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppamenu_style-css'  href='<?php echo base_url(); ?>libs/plugins/suppamenu/standard/css/suppa_frontend_style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppa_frontend_seocon-css'  href='<?php echo base_url(); ?>libs/plugins/suppamenu/standard/css/seocon/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppa_frontend_alico-css'  href='<?php echo base_url(); ?>libs/plugins/suppamenu/standard/css/alico/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppa_frontend_hoverCSS-css'  href='<?php echo base_url(); ?>libs/plugins/suppamenu/standard/css/hover-master/hover-min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppamenu_custom_style_header1and5-css'  href='<?php echo base_url(); ?>libs/uploads/suppamenu2/css/header1and5.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppamenu_custom_style_header2-css'  href='<?php echo base_url(); ?>libs/uploads/suppamenu2/css/header2.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppamenu_custom_style_header3-css'  href='<?php echo base_url(); ?>libs/uploads/suppamenu2/css/header3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppamenu_custom_style_header4-css'  href='<?php echo base_url(); ?>libs/uploads/suppamenu2/css/header4.css' type='text/css' media='all' /> 
    <script type='text/javascript' src='<?php echo base_url(); ?>libs/js/jquery/jquery.js'></script> 
    <script id='st_insights_js' type='text/javascript' src='http://w.sharethis.com/button/st_insights.js?publisher=4d48b7c5-0ae3-43d4-bfbe-3ff8c17a8ae6&#038;product=simpleshare'></script> 


    <noscript>
        <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>


            <style type="text/css" title="dynamic-css" class="options-output">#page-preloader{background-color:#f4f4f4;}.suppaMenu_wrap .subbgr1.suppa_menu > .suppa_submenu,  body .suppaMenu_wrap .subbgr1 > .suppa_rwd_submenu{background-color:#ffffff;background-repeat:no-repeat;background-size:inherit;background-attachment:scroll;background-position:center bottom;background-image:url('/libs/uploads/2017/03/chart.png');}.suppaMenu_wrap .subbgr2.suppa_menu > .suppa_submenu,  body .suppaMenu_wrap .subbgr2 > .suppa_rwd_submenu{background-color:#FFFFFF;background-repeat:no-repeat;background-attachment:scroll;background-position:right bottom;background-image:url('/libs/uploads/2017/03/rocket_cloud.png');}.header1and5.suppaMenu_wrap.suppa-sticky{background-color:rgba(39,61,84,0.85);}.header2.suppaMenu_wrap.suppa-sticky, .header2.suppa-sticky .suppaMenu{background-color:#FFFFFF;}.header3.suppaMenu_wrap.suppa-sticky{background-color:#3e4758;}header4.suppaMenu_wrap.suppa-sticky{background-color:rgba(255,255,255,0.75);}
        </style>
    <noscript>
        <style type="text/css">.wpb_animate_when_almost_visible { opacity: 1; }</style>
    </noscript>
</head>

<body class="product-template-default single single-product postid-3345 woocommerce woocommerce-page single-author no-avatars wpb-js-composer js-comp-ver-5.4.5 vc_responsive"><div id="page-preloader"><div class="bo"><div class="l1"></div><div class="l2"></div><div class="l3"></div></div></div><div class="head3"><div class="container-fluid"><div class="row head3m"><div class="header3 suppaMenu_wrap">










<?php 
    if($logo): 
        foreach($logo as $data): 
?>
<div class="row head3m">

<div class="header">
  <a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url(); ?>libs/image/Company_logo/<?php echo $data->company_logo; ?>"></a>

  <a href="<?php echo base_url(); ?>" class="suppa_rwd_logo"><img src="<?php echo base_url(); ?>libs/image/Company_logo/<?php echo $data->company_logo; ?>"></a>




  <div class="header-right">
    <a class="active" href="<?php echo base_url(); ?>">Home</a>
    <a href="<?php echo base_url(); ?>all-services/">All Service</a>
    <a href="<?php echo base_url(); ?>faq/">Faq</a>
    <a href="<?php echo base_url(); ?>contact-us/">Contact US</a>
  </div>
</div>
</div>



<style>


.header {
  overflow: hidden;
  background-color: #3e4758;
  padding-top: 5px;
}

.header a {
  float: left;
  color: #fff;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 22px; 
  line-height: 25px;
  border-radius: 4px;
  font-size: 14px !important;
  font-family: Open Sans !important;
  font-weight: bold;
  color: #ffffff;
}

.header a.logo {
  margin-left: 50px;
  font-size: 25px;
  font-weight: bold;
}

.header-right a:hover {
  background-color: #999;
}



.header-right {
  float: right;
  padding-top: 10px;
  padding-right: 50px;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;

  }
.header a.logo {
  display: none;
}



}
</style>
</div>
<?php 
    endforeach;
        endif;
?>





    <div class="suppaMenu_rwd_wrap" ><div class="suppa_rwd_top_button_container"> <span class="suppa_rwd_button"><span aria-hidden="true" class="suppa-reorder"></span></span> <span class="suppa_rwd_text">Menu</span></div><div class="suppa_rwd_menus_container" ></div></div></div></div></div></div><main class="seoshop"><div class="container"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main"><div id="product-3345" class="post-3345 product type-product status-publish has-post-thumbnail product_cat-linkedin-follower first instock shipping-taxable purchasable product-type-simple">
    </br></br></br>
                <?php
                    if($thisdata):
                        foreach($thisdata as $data):
                ?>
               
                <h1 class="product_title entry-title"><?php echo $data->pack_name; ?></h1>
                 </br>
                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;"><figure class="woocommerce-product-gallery__wrapper"><div data-thumb="<?php echo base_url(); ?>libs/image/product_Zoom/<?php echo $data->img ?>" class="woocommerce-product-gallery__image"><a href="<?php echo base_url(); ?>libs/image/product_Zoom/<?php echo $data->img ?>"><img width="600" height="337" src="<?php echo base_url(); ?>libs/image/product_Zoom/<?php echo $data->img ?>" class="wp-post-image" alt="" title="linkedin-earnings1" data-caption="" data-src="<?php echo base_url(); ?>libs/image/product_Zoom/<?php echo $data->img ?>" data-large_image="<?php echo base_url(); ?>libs/img/product_Zoom/<?php echo $data->img ?>" data-large_image_width="738" data-large_image_height="415" srcset="<?php echo base_url(); ?>libs/image/product_Zoom/<?php echo $data->img ?> 600w, <?php echo base_url(); ?>libs/image/product_Zoom/<?php echo $data->img ?> 300w, <?php echo base_url(); ?>libs/image/product_Zoom/<?php echo $data->img ?> 738w" sizes="(max-width: 600px) 100vw, 600px" /></a></div></figure></div><div class="summary entry-summary"><p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $data->pack_price; ?></span></p>


                <?php echo form_open('addtocart', 'class="cart" id="cart"'); ?>
                    <div class="required-product-addon product-addon product-addon-profile-company-page-url">
                        <h3 class="addon-name">Company Page URL 
                            <abbr class="required" title="Required field">*</abbr></h3>
                            <p class="form-row form-row-wide addon-wrap-3345-profile-company-page-url-0"> 
                            <input type="text"  required="required" class="input-text addon addon-custom" data-raw-price="" data-price="" name="url" value=""  /></p><div class="clear">
                                
                            </div>
                        </div>
                        <div class="required-product-addon product-addon product-addon-your-email"><h3 class="addon-name">Your Email <abbr class="required" title="Required field">*</abbr></h3><p class="form-row form-row-wide addon-wrap-3345-your-email-1"> 
                            <input type="email" required="required" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,30}$" title="Please enter an email address" class="input-text addon addon-custom addon-custom-email" data-raw-price="" data-price="" name="email" value="" />
                            
                                <input type="hidden" name="name" value="<?php echo $data->pack_name; ?>"></p>
                                <input type="hidden" name="pid" value="<?php echo $data->s_id; ?>"></p>
                                <input type="hidden" name="price" value="<?php echo $data->pack_price; ?>"></p>
                                <input type="hidden" name="image" value="<?php echo base_url(); ?>libs/image/product_Zoom/<?php echo $data->img; ?>"></input>
                                <div class="clear">
                                </div>
                            </div>
                            <div id="product-addons-total" data-show-grand-total="1" data-type="simple" data-tax-mode="excl" data-tax-display-mode="excl" data-price="15" data-raw-price="15" data-product-id="3345">
                                
                            </div
                            ><div class="quantity"> 
                                <label class="screen-reader-text" for="quantity_5afddad69d790">Quantity</label> 
                                <input  required="required" type="number" id="quantity_5afe0e932deec" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="" />
                            </div> 
                        <button type="submit">Buy Now</button>

                <?php echo form_close(); ?>

                    <div class="product_meta"> 

                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </main>
                    <div class="footer_section container">
                        <div class="sl_composer_widget_parent_id" parent_id="3118" style="display:none;">
                            
                        </div>

                    <style type="text/css">.transparentmenu .suppa_menu_search, .head3 .suppa_menu_search, .header4 .suppa_menu_search {margin-right: -15px !important;}
.head4 .header4 .suppaMenu {background-color: transparent;}
.page-id-2681 main.seo {
    padding-top: 0px !important;
}
a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    display: none;
}
a.button.product_type_simple.add_to_cart_button {
    display: none !important;
}
h3.addon-name {
    margin-top: 0;
    float: left;
    font-size: 16px;
    margin: 0;
}
input.input-text.addon.addon-custom {
    width: 80% !important;
    height: 35px;
    border-radius: 5px;
    padding: 10px;
}
.required-product-addon.product-addon {
    margin: 0;
}
span.woocommerce-Price-amount.amount {
    font-size: 40px;
    margin: 0;
    padding: 0;
    line-height: 1;
}
.single-product span.woocommerce-Price-amount.amount {
    font-size: 40px;
    margin: 0;
    padding: 0;
    line-height: 1;
}
.single-product p.price {
    margin-bottom: 15px;
}
h2.woocommerce-loop-product__title {
    margin-bottom: 0;
}</style><style type="text/css">.woocommerce a.checkout-button,
                .woocommerce input.checkout-button,
                .cart input.checkout-button,
                .cart a.checkout-button,
                .widget_shopping_cart a.checkout {
                    display: none !important;
                }</style><div id="YLC"><div id="YLC_chat_btn" class="chat-chat-btn btn-classic"><div class="chat-ico chat fa fa-comments"></div><div class="chat-ico ylc-toggle fa fa-angle-up"></div><div class="chat-title"> Chat with us</div></div><div id="YLC_chat" class="chat-widget"><div id="YLC_chat_header" class="chat-header"><div class="chat-ico chat fa fa-comments"></div><div class="chat-ico ylc-toggle fa fa-angle-down"></div><div class="chat-title"> Chat with us</div><div class="chat-clear"></div></div><div id="YLC_chat_body" class="chat-body chat-online" style="width: 370px;"><div class="chat-cnv" id="YLC_cnv"><div class="chat-welc"> Questions, doubts, issues? We&#039;re here to help you!</div></div><div class="chat-tools"> <a id="YLC_tool_end_chat" href="javascript:void(0)"> <i class="fa fa-times"></i> End chat </a><div id="YLC_popup_ntf" class="chat-ntf"></div></div><div class="chat-cnv-reply"><div class="chat-cnv-input"><textarea id="YLC_cnv_reply" name="msg" class="chat-reply-input" placeholder="Type here and hit enter to chat"></textarea></div></div></div><div id="YLC_connecting" class="chat-body chat-form" style="width: 260px;"><div class="chat-sending chat-conn"> Connecting...</div></div><div id="YLC_offline" class="chat-body chat-form" style="width: 260px;"><div class="chat-lead op-offline"> None of our operators are available at the moment. Please, try again later.</div><div class="chat-lead op-busy"> Our operators are busy. Please try again later</div><form id="YLC_popup_form" action=""> <label for="YLC_msg_name"> Your Name </label>:<div class="form-line"> <input type="text" name="name" id="YLC_msg_name" placeholder="Please enter your name"> <i class="chat-ico fa fa-user"></i></div> <label for="YLC_msg_email"> Your Email </label>:<div class="form-line"> <input type="email" name="email" id="YLC_msg_email" placeholder="Please enter your email"> <i class="chat-ico fa fa-envelope-o"></i></div> <label for="YLC_msg_message"> Your Message </label>:<div class="form-line"><textarea id="YLC_msg_message" name="message" placeholder="Write your question" class="chat-field"></textarea></div><div class="chat-send"><div id="YLC_offline_ntf" class="chat-ntf"></div> <a href="javascript:void(0)" id="YLC_send_btn" class="chat-form-btn"> Send </a></div></form></div><div id="YLC_login" class="chat-body chat-form" style="width: 260px;"><div class="chat-lead"> Have you got question? Write to us!</div><form id="YLC_login_form" action=""> <label for="YLC_field_name"> Your Name </label>:<div class="form-line"> <input type="text" name="user_name" id="YLC_field_name" placeholder="Please enter your name"> <i class="chat-ico fa fa-user"></i></div> <label for="YLC_field_email"> Your Email </label>:<div class="form-line"> <input type="email" name="user_email" id="YLC_field_email" placeholder="Please enter your email"> <i class="chat-ico fa fa-envelope-o"></i></div><div class="chat-send"><div id="YLC_login_ntf" class="chat-ntf"></div> <a href="javascript:void(0)" id="YLC_login_btn" class="chat-form-btn"> Start Chat </a></div></form></div><div id="YLC_end_chat" class="chat-body chat-form" style="width: 260px;"><div class="chat-lead"> This chat session has ended</div><div class="chat-evaluation"> Was this conversation useful? Vote this chat session.<div id="YLC_end_chat_ntf" class="chat-ntf"></div> <a href="javascript:void(0)" id="YLC_good_btn" class="good"> <i class="fa fa-thumbs-up"></i> Good </a> <a href="javascript:void(0)" id="YLC_bad_btn" class="bad"> <i class="fa fa-thumbs-down"></i> Bad </a><div class="chat-checkbox"> <input type="checkbox" name="request_chat" id="YLC_request_chat"> <label for="YLC_request_chat"> Receive the copy of the chat via e-mail </label></div></div></div></div></div> <script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@type":"Product","@id":"http:\/\/<?php echo base_url(); ?>\/product\/linkedin-250-follower\/","name":"Linkedin 250 Follower","image":"http:\/\/<?php echo base_url(); ?>\/wp-content\/uploads\/2018\/02\/linkedin-earnings1.png","description":"","sku":"","offers":[{"@type":"Offer","price":"15.00","priceCurrency":"USD","availability":"https:\/\/schema.org\/InStock","url":"http:\/\/<?php echo base_url(); ?>\/product\/linkedin-250-follower\/","seller":{"@type":"Organization","name":"Social Promotion","url":"http:\/\/<?php echo base_url(); ?>"}}]}</script> <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div> <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button> <button class="pswp__button pswp__button--share" aria-label="Share"></button> <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div> <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div><link rel='stylesheet' id='ultimate-style-min-css'  href='<?php echo base_url(); ?>libs/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.min.css' type='text/css' media='all' /><link rel='stylesheet' id='simple-share-buttons-adder-ssba-css'  href='<?php echo base_url(); ?>libs/plugins/simple-share-buttons-adder/css/ssba.css' type='text/css' media='all' /><style id='simple-share-buttons-adder-ssba-inline-css' type='text/css'>.ssba {
                                    
                                    
                                    
                                    
                                }
                                .ssba img
                                {
                                    width: 35px !important;
                                    padding: 6px;
                                    border:  0;
                                    box-shadow: none !important;
                                    display: inline !important;
                                    vertical-align: middle;
                                    box-sizing: unset;
                                }
                                
                                #ssba-classic-2 .ssbp-text {
                                    display: none!important;
                                }
                                
                                .ssba .fb-save
                                {
                                padding: 6px;
                                line-height: 30px; }
                                .ssba, .ssba a
                                {
                                    text-decoration:none;
                                    background: none;
                                    
                                    font-size: 12px;
                                    
                                    font-weight: normal;
                                }
                                
@font-face {
                font-family: 'ssbp';
                src:url('<?php echo base_url(); ?>libs/plugins/simple-share-buttons-adder/fonts/ssbp.eot?xj3ol1');
                src:url('<?php echo base_url(); ?>libs/plugins/simple-share-buttons-adder/fonts/ssbp.eot?#iefixxj3ol1') format('embedded-opentype'),
                    url('<?php echo base_url(); ?>libs/plugins/simple-share-buttons-adder/fonts/ssbp.woff?xj3ol1') format('woff'),
                    url('<?php echo base_url(); ?>libs/plugins/simple-share-buttons-adder/fonts/ssbp.ttf?xj3ol1') format('truetype'),
                    url('<?php echo base_url(); ?>libs/plugins/simple-share-buttons-adder/fonts/ssbp.svg?xj3ol1#ssbp') format('svg');
                font-weight: normal;
                font-style: normal;

                /* Better Font Rendering =========== */
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }</style><link rel='stylesheet' id='js_composer_front-css'  href='<?php echo base_url(); ?>libs/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' /> 
            <script type='text/javascript'>var wpcf7 = {"apiSettings":{"root":"http:\/\/<?php echo base_url(); ?>\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};</script> <script type='text/javascript'>Main.boot( [] );</script> <script type='text/javascript'>var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};</script> <script type='text/javascript'>var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/<?php echo base_url(); ?>\/?wc-ajax=%%endpoint%%"};</script> <script type='text/javascript'>var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/<?php echo base_url(); ?>\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_1ffce728114f0f1be6e22121337d055d","fragment_name":"wc_fragments_1ffce728114f0f1be6e22121337d055d"};</script> <script type='text/javascript'>var is_page_name = "single_product_page";</script> <script type='text/javascript'>var ylc = {"defaults":{"app_id":"livechat-82f9a","user_info":{"user_id":"14987667975afd5b9191309","user_name":"","user_email":"","gravatar":"d41d8cd98f00b204e9800998ecf8427e","user_type":"visitor","avatar_type":"default","avatar_image":"","current_page":"http:\/\/<?php echo base_url(); ?>\/product\/linkedin-250-follower\/","user_ip":"103.213.237.2"},"styles":{"bg_color":"#009EDB","x_pos":"right","y_pos":"bottom","border_radius":"5px 5px 0 0","popup_width":"370","btn_type":"classic","btn_width":"260","btn_height":0,"form_width":"260","animation_type":"bounceIn","autoplay":false,"autoplay_delay":10000}},"ajax_url":"\/\/<?php echo base_url(); ?>\/wp-admin\/admin-ajax.php","plugin_url":"http:\/\/<?php echo base_url(); ?>\/wp-content\/plugins\/yith-live-chat-premium\/assets","frontend_op_access":"","is_premium":"1","show_busy_form":"","max_guests":"0","company_avatar":"","default_user_avatar":"http%3A%2F%2F<?php echo base_url(); ?>%2Fwp-content%2Fplugins%2Fyith-live-chat-premium%2Fassets%2Fimages%2Fdefault-avatar-user.png","default_admin_avatar":"http%3A%2F%2F<?php echo base_url(); ?>%2Fwp-content%2Fplugins%2Fyith-live-chat-premium%2Fassets%2Fimages%2Fdefault-avatar-admin.png","autoplay_opts":{"company_name":"","auto_msg":""},"yith_wpv_active":"","active_vendor":{"vendor_id":0,"vendor_name":""},"vendor_only_chat":"","button_animation":"1","strings":{"months":{"jan":"January","feb":"February","mar":"March","apr":"April","may":"May","jun":"June","jul":"July","aug":"August","sep":"September","oct":"October","nov":"November","dec":"December"},"months_short":{"jan":"Jan","feb":"Feb","mar":"Mar","apr":"Apr","may":"May","jun":"Jun","jul":"Jul","aug":"Aug","sep":"Sep","oct":"Oct","nov":"Nov","dec":"Dec"},"time":{"suffix":"ago","seconds":"less than a minute","minute":"about a minute","minutes":"%d minutes","hour":"about an hour","hours":"about %d hours","day":"a day","days":"%d days","month":"about a month","months":"%d months","year":"about a year","years":"%d years"},"msg":{"close_msg_user":"The user has closed the conversation","no_op":"No operators online","connecting":"Connecting","writing":"%s is writing","sending":"Sending","field_empty":"Please fill out all required fields","invalid_username":"Username is invalid","invalid_email":"Email is invalid","already_logged":"A user is already logged in with the same email address"}}};</script> <script type='text/javascript'>var woocommerce_addons_params = {"price_display_suffix":"","ajax_url":"\/wp-admin\/admin-ajax.php","i18n_addon_total":"Options total:","i18n_grand_total":"Grand total:","i18n_remaining":"characters remaining","currency_format_num_decimals":"2","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};</script> <script type="text/javascript" defer src="<?php echo base_url(); ?>libs/cache/autoptimize/js/autoptimize_1c106eca53b59890abea366c78fc02df.js"></script></body></html>

                                <?php
                        endforeach;
                    endif;
                    ?>
</div></br></br>
<style>
.footer {
    height: auto; 
    padding-bottom: 5px;
    width: 100%;
    padding-top: 10px;
    background-color: #C0C0C0;
    color: Black;
    text-align: center;
}
</style>

<div class="footer">
  <p>Copyright © <?php echo date("Y"); ?><a style="text-decoration: none;  font-size: 22px;" target="_blank" href="http://opticalcoder.com/">  opticalcoder.com  </a>
  All Rights Reserved</p>
</div>