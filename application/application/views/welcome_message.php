<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
    <meta charset="UTF-8">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo base_url(); ?>/xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
    if($logo): 
        foreach($logo as $data): 
?>
    <link href="<?php echo base_url(); ?>libs/image/Company_logo/<?php echo $data->company_logo; ?>" rel="apple-touch-icon">
<?php 
    endforeach;
        endif;
?>
    <title>Social Stead - Grow Your Online Presence</title> 

    <meta name="description" content="Get your business on marketing campaign with our Facebook likes and fans packages. Buy real Facebook likes at highly competitive prices and with fast delivery."/>

    <link rel='stylesheet' id='slick_css-css'  href='<?php echo base_url() ?>libs/themes/the-seo/js/lib/slick/slick.css' type='text/css' media='all' />
   <link href="<?php echo base_url(); ?>libs/assets/stylesheets/main.css" rel="stylesheet"> 
    <link rel='stylesheet' id='theseo_bootstrap-css'  href='<?php echo base_url() ?>libs/themes/the-seo/css/bootstrap.min.css' type='text/css' media='all' /><link rel='stylesheet' id='dynamic_css-css'  href='<?php echo base_url() ?>libs/themes/the-seo/css/dynamic.css' type='text/css' media='all' /><link rel='stylesheet' id='theseo_ownstyles-css'  href='<?php echo base_url() ?>libs/themes/the-seo/style.css' type='text/css' media='all' /><link rel='stylesheet' id='sl_icon_css-css'  href='<?php echo base_url() ?>libs/plugins/SecretLabShortcodes/sl_mega_icons/css/style.css' type='text/css' media='all' /><link rel='stylesheet' id='sl_icon_bgricons-css'  href='<?php echo base_url() ?>libs/plugins/SecretLabShortcodes/sl_mega_icons/css/fonts/bgricons/bgricons.css' type='text/css' media='all' /><link rel='stylesheet' id='wp-color-picker-css'  href='<?php echo base_url() ?>libs/css/color-picker.min.css' type='text/css' media='all' /><link rel='stylesheet' id='contact-form-7-css'  href='<?php echo base_url() ?>libs/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' /><link rel='stylesheet' id='rs-plugin-settings-css'  href='<?php echo base_url() ?>libs/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />


    <style id='rs-plugin-settings-inline-css' type='text/css'>#rs-demo-id {}</style>
    <link rel='stylesheet' id='js_composer_front-css'  href='<?php echo base_url() ?>libs/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-Defaults-css'  href='<?php echo base_url() ?>libs/uploads/smile_fonts/Defaults/Defaults.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-alico-css'  href='<?php echo base_url() ?>libs/uploads/smile_fonts/alico/alico.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppamenu_style-css'  href='<?php echo base_url() ?>libs/plugins/suppamenu/standard/css/suppa_frontend_style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='suppamenu_custom_style_header3-css'  href='<?php echo base_url() ?>libs/uploads/suppamenu2/css/header3.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo base_url() ?>libs/js/jquery/jquery.js'></script> 
    <script type='text/javascript'>var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/<?php echo base_url(); ?>\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/<?php echo base_url(); ?>\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    </script> 
    <script type='text/javascript'>var WpDisableAsyncLinks = {"wp-disable-font-awesome":"\/\/maxcdn.bootstrapcdn.com\/font-awesome\/4.3.0\/css\/font-awesome.min.css","wp-disable-google-fonts":"https:\/\/fonts.googleapis.com\/css?family=Open+Sans:400,700,400italic,700italic,600italic,600|Roboto:400,700"};
    </script>


     <noscript>

    <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
    </noscript>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
   </style>
   <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/> <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
   <meta name="generator" content="Powered by Slider Revolution 5.4.6.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="<?php echo base_url() ?>libs/image/icon.png" sizes="32x32" />
    <link rel="icon" href="<?php echo base_url() ?>libs/image/icon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>libs/image/icon.png" />
    <meta name="msapplication-TileImage" content="<?php echo base_url() ?>libs/image/icon.png" />

         <script type="text/javascript">function setREVStartSize(e){
                try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;                   
                    if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                  
                }catch(d){console.log("Failure at Presize of Slider:"+d)}
            };</script>


            </noscript>
        </head>
        <body class="home page-template page-template-page-head3 page-template-page-head3-php page page-id-3054 single-author no-avatars wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
            <div id="page-preloader">
                <div class="bo">
                    <div class="l1">
                        
                    </div>
                    <div class="l2"></div>
                    <div class="l3"></div></div></div>















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
  font-size: 18px; 
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

                    <!--heder-->
                        <?php 
                            if(isset($Baner)):
                              $this->load->view('Home/'.$Baner);

                            endif;
                        ?>
                    <!--end heder-->






























        <main role="main" class="seo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main">

                    <!--MainContent-->
                        <?php 
                            if(isset($Ourservice)):
                              $this->load->view('Home/'.$Ourservice);
                              
                            elseif(isset($OService)):
                          $this->load->view('Home/'.$OService);
                           elseif(isset($Faq)):
                          $this->load->view('Home/'.$Faq);
                           elseif(isset($Contact)):
                          $this->load->view('Home/'.$Contact);
                           elseif(isset($ServiceD)):
                          $this->load->view('Home/'.$ServiceD);
                           elseif(isset($SerPac)):
                          $this->load->view('Home/'.$SerPac);
                           elseif(isset($Cart)):
                          $this->load->view('Home/'.$Cart);
                           elseif(isset($Chekout)):
                          $this->load->view('Home/'.$Chekout);
                           elseif(isset($Succ)):
                          $this->load->view('paypal/'.$Succ);                      


                          
                            endif;
                        ?>
                    <!--end MainContent-->
                    </div>
                </div>
            </div>
        </main>



        <div id="YLC">
        </div> 





                <link rel='stylesheet' id='simple-share-buttons-adder-ssba-css'  href='<?php echo base_url() ?>libs/plugins/simple-share-buttons-adder/css/ssba.css' type='text/css' media='all' />
                <link rel='stylesheet' id='ultimate-style-min-css'  href='<?php echo base_url() ?>libs/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.min.css' type='text/css' media='all' /> <script type='text/javascript'>var wpcf7 = {"apiSettings":{"root":"http:\/\/<?php echo base_url(); ?>\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};</script> <script type='text/javascript'>Main.boot( [] );</script> <script type='text/javascript'>var ylc = {"defaults":{"app_id":"livechat-82f9a","user_info":{"user_id":"14987667975afd5b9191309","user_name":"","user_email":"","gravatar":"d41d8cd98f00b204e9800998ecf8427e","user_type":"visitor","avatar_type":"default","avatar_image":"","current_page":"http:\/\/<?php echo base_url(); ?>\/","user_ip":"103.213.237.233"},"styles":{"bg_color":"#009EDB","x_pos":"right","y_pos":"bottom","border_radius":"5px 5px 0 0","popup_width":"370","btn_type":"classic","btn_width":"260","btn_height":0,"form_width":"260","animation_type":"bounceIn","autoplay":false,"autoplay_delay":10000}},"ajax_url":"\/\/<?php echo base_url(); ?>\/wp-admin\/admin-ajax.php","plugin_url":"http:\/\/<?php echo base_url(); ?>\/wp-content\/plugins\/yith-live-chat-premium\/assets","frontend_op_access":"","is_premium":"1","show_busy_form":"","max_guests":"0","company_avatar":"","default_user_avatar":"http%3A%2F%2F<?php echo base_url(); ?>%2Fwp-content%2Fplugins%2Fyith-live-chat-premium%2Fassets%2Fimages%2Fdefault-avatar-user.png","default_admin_avatar":"http%3A%2F%2F<?php echo base_url(); ?>%2Fwp-content%2Fplugins%2Fyith-live-chat-premium%2Fassets%2Fimages%2Fdefault-avatar-admin.png","autoplay_opts":{"company_name":"","auto_msg":""},"yith_wpv_active":"","active_vendor":{"vendor_id":0,"vendor_name":""},"vendor_only_chat":"","button_animation":"1","strings":{"months":{"jan":"January","feb":"February","mar":"March","apr":"April","may":"May","jun":"June","jul":"July","aug":"August","sep":"September","oct":"October","nov":"November","dec":"December"},"months_short":{"jan":"Jan","feb":"Feb","mar":"Mar","apr":"Apr","may":"May","jun":"Jun","jul":"Jul","aug":"Aug","sep":"Sep","oct":"Oct","nov":"Nov","dec":"Dec"},"time":{"suffix":"ago","seconds":"less than a minute","minute":"about a minute","minutes":"%d minutes","hour":"about an hour","hours":"about %d hours","day":"a day","days":"%d days","month":"about a month","months":"%d months","year":"about a year","years":"%d years"},"msg":{"close_msg_user":"The user has closed the conversation","no_op":"No operators online","connecting":"Connecting","writing":"%s is writing","sending":"Sending","field_empty":"Please fill out all required fields","invalid_username":"Username is invalid","invalid_email":"Email is invalid","already_logged":"A user is already logged in with the same email address"}}};</script> <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                if(htmlDiv) {
                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                }else{
                    var htmlDiv = document.createElement("div");
                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                }</script> <script type="text/javascript">setREVStartSize({c: jQuery('#rev_slider_4_1'), responsiveLevels: [1240,1024,778,480], gridwidth: [2560,1024,778,480], gridheight: [930,800,700,700], sliderLayout: 'fullwidth'});
            
var revapi4,
    tpj=jQuery;
            
tpj(document).ready(function() {
    if(tpj("#rev_slider_4_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_4_1");
    }else{
        revapi4 = tpj("#rev_slider_4_1").show().revolution({
            sliderType:"hero",
            jsFileLocation:"//social-prom.com/wp-content/plugins/revslider/public/assets/js/",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[2560,1024,778,480],
            gridheight:[930,800,700,700],
            lazyType:"none",
            shadow:0,
            spinner:"spinner0",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                disableFocusListener:false,
            }
        });
    }
    
}); /*ready*/</script> 
<script type="text/javascript" defer src="<?php echo base_url(); ?>/libs/cache/autoptimize/js/autoptimize_d3e4eb3d9b195c718971b52333c9f980.js"></script>
</br>
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

</body></html>