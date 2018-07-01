<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Con - Admin Dashboard with Material Design</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" href="<?php echo base_url();?>libs/image/Company_logo/<?php if($icon):foreach($icon as $adicn):?><?php echo $adicn->company_icon; ?><?php endforeach;endif;?>">
  <link rel="stylesheet" href="<?php echo base_url("libs/bootstrap/dist/css/bootstrap.css"); ?>">

  <!-- nanoScroller -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/nanoScroller/nanoscroller.css" />


  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/font-awesome/css/font-awesome.min.css" />

  <!-- Material Design Icons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/material-design-icons/css/material-design-icons.min.css" />

  <!-- IonIcons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/ionicons/css/ionicons.min.css" />

  <!-- WeatherIcons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/weatherIcons/css/weather-icons.min.css" />

  <!-- nvd3 -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/nvd3/nv.d3.min.css" />

  <!-- Google Prettify -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/google-code-prettify/prettify.css" />
  <!-- Main -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/_con/css/_con.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/markitup/skins/_con/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/markitup/sets/default/style.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/dropzone/dropzone.min.css" />


  <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>libs/assets/html5shiv/html5shiv.min.js"></script>
  <![endif]-->
</head>

<body>


  <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
  <nav class="navbar-top">
    <div class="nav-wrapper">

      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
        <?php 
          if($logo):
            foreach($logo as $image):
        ?>
      <a href="#!" class="brand-logo">
        <img src="<?php echo base_url(); ?>libs/image/Company_logo/<?php echo $image->company_logo; ?>" alt="Logo">
      </a>
        <?php 
            endforeach;
          endif;
        ?>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        <li class="user">
          <a class="dropdown-button" href="#!" data-activates="user-dropdown">
            <img src="<?php echo base_url() ?>libs/image/userimage/<?php echo $this->session->userdata('current_admin_image'); ?>" alt="<?php echo $this->session->userdata('current_admin_name'); ?>" class="circle"><?php echo $this->session->userdata('current_admin_name'); ?><i class="mdi-navigation-expand-more right"></i>
          </a>

          <ul id="user-dropdown" class="dropdown-content">
            <li><a href="<?php echo base_url(); ?>profile/"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>Admin/logout"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->

  <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">

    <div class="top">
      <div>
        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle">
          <div class="burg1"></div>
          <div class="burg2"></div>
          <div class="burg3"></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <a href="#!" class="brand-logo">
          <img src="<?php echo base_url();?>libs/assets/_con/images/logo-white.png" alt="Con">
        </a>
        <!-- /Logo -->
      </div>
    </div>


    <div class="nano">
      <div class="nano-content">

        <ul>
          <li class="label">Menu</li>

          <li  class="<?php if(isset($homeac)){echo $homeac;}else{}?>">
            <a href="<?php echo base_url(); ?>Dashboard/" class="waves-effect waves-blue"><i class="mdi mdi-action-shopping-cart"></i> Home Page</a>
          </li>

          <li class="<?php if(isset($messac)){echo $messac;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>message/"><i class="fa fa-cart-plus"></i> Message</a>
          </li>

          <li class="label"><i class="mdi mdi-action-shopping-cart"></i>Orders</li>

          <li class="<?php if(isset($orderactiv)){echo $orderactiv;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>order/"><i class="fa fa-cart-plus"></i> Orders</a>
          </li>
<!--           <li class="<?php if(isset($cousactive)){echo $cousactive;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url() ?>customer/"><i class="fa fa-users"></i> Customer's Email</a>
          </li> -->
          <li class="<?php if(isset($adminopne)){echo $adminopne;}else{}?>">
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-action-verified-user"></i> User's(Admin)<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li class="<?php if(isset($adminactive)){echo $adminactive;}else{}?>"><a href="<?php echo base_url(); ?>admin/add/" class="waves-effect waves-blue">Add User</a>
              </li>
              <li class="<?php if(isset($adminactivdde)){echo $adminactivdde;}else{}?>"><a href="<?php echo base_url(); ?>admin/manage/" class="waves-effect waves-blue">Manage User's</a>
              </li>
            </ul>
          </li>


          <li class="<?php if(isset($homeslop)){echo $homeslop;}else{}?>">
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-image-add-to-photos"></i>Service Add<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li class="<?php if(isset($prodactive)){echo $prodactive;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>products/"><i class="fa fa-tag"></i> Service Add</a>
              </li>

              <li class="<?php if(isset($prodsactive)){echo $prodsactive;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>manage/products/"><i class="fa fa-cog"></i> Service Manage</a>
              </li>
            </ul>
          </li>


          <li class="<?php if(isset($hometslop)){echo $hometslop;}else{}?>">
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-image-add-to-photos"></i>Service Type<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li class="<?php if(isset($ssprodactived)){echo $ssprodactived;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>service-type/"><i class="fa fa-tag"></i> Add</a>
              </li>

              <li class="<?php if(isset($sprodadctived)){echo $sprodadctived;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>service-type/manage/"><i class="fa fa-cog"></i> Manage</a>
              </li>
            </ul>
          </li>

          <li class="<?php if(isset($spackp)){echo $spackp;}else{}?>">
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-image-add-to-photos"></i>Service Pack<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li class="<?php if(isset($serpack)){echo $serpack;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>service-packs/"><i class="fa fa-tag"></i> Add</a>
              </li>

              <li class="<?php if(isset($serpackm)){echo $serpackm;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>service-packs/manage/"><i class="fa fa-cog"></i> Manage</a>
              </li>
            </ul>
          </li>



          <li class="label"><i class="fa fa-cog"></i>Setting</li>
          
          <li class="<?php if(isset($setngactv)){echo $setngactv;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>storesetting/"><i class="fa fa-cog"></i> Store Setting</a>
          </li>

          <li class="<?php if(isset($logoactv)){echo $logoactv;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>logo/"><i class="fa fa-cog"></i> Logo</a>
          </li> 


          <li class="<?php if(isset($paymentm)){echo $paymentm;}else{}?>"><a class="waves-effect waves-blue" href="<?php echo base_url(); ?>payment/"><i class="fa fa-cog"></i> Payment Method</a>
          </li>           </ul>

      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->


  <!-- Main Content -->
  <section class="content-wrap">

    <?php 
    #Dashboard home page load
    if(isset($homepage)):
      $this->load->view('Dashboard/Admin/'.$homepage);

    //category page load
    elseif(isset($category)):
      $this->load->view('Dashboard/Admin/category/'.$category);
    //sub_category page load
    elseif(isset($sub_category)):
      $this->load->view('Dashboard/Admin/category/'.$sub_category);


    elseif(isset($Payment)):
      $this->load->view('Dashboard/Admin/payment/'.$Payment);























      

        //home_slider
    elseif(isset($HomeSlider)):
      $this->load->view('Dashboard/Admin/Home/'.$HomeSlider);


















    

    #add user page load
    elseif(isset($AddUser)):
      $this->load->view('Dashboard/Admin/user/'.$AddUser);

    #Manage user page load
    elseif(isset($ManageUser)):
      $this->load->view('Dashboard/Admin/user/'.$ManageUser);

    #store setting  page load
    elseif(isset($Setting)):
      $this->load->view('Dashboard/Admin/storesetting/'.$Setting);

    #store owener informaiton  page load
    elseif(isset($Informaiton)):
      $this->load->view('Dashboard/Admin/storesetting/'.$Informaiton);

    #store policies  page load
    elseif(isset($Policies)):
      $this->load->view('Dashboard/Admin/storesetting/'.$Policies);

    #products page load
    elseif(isset($products)):
      $this->load->view('Dashboard/Admin/products/'.$products);

    #add prodcut page load
    elseif(isset($add_product)):
      $this->load->view('Dashboard/Admin/products/'.$add_product);

    # user Order page load
    elseif(isset($order)):
      $this->load->view('Dashboard/Admin/products/'.$order);

    #order_single page load
    elseif(isset($order_single)):
      $this->load->view('Dashboard/Admin/products/'.$order_single);

    # coustomer page load
    elseif(isset($coustomer)):
      $this->load->view('Dashboard/Admin/products/'.$coustomer);

    //invoice page load
    elseif(isset($invoice)):

      $this->load->view('Dashboard/Admin/products/'.$invoice);






    //brand page load
    elseif(isset($SubSubcategory)):
      $this->load->view('Dashboard/Admin/category/'.$SubSubcategory);

    //size page load
    elseif(isset($size)):
      $this->load->view('Dashboard/Admin/storesetting/'.$size);

    //color page load
    elseif(isset($color)):
      $this->load->view('Dashboard/Admin/storesetting/'.$color);
    //color page load


     //subcategory view page load
    elseif(isset($sub_category_view)):
      $this->load->view('Dashboard/Admin/category/'.$sub_category_view);



     //category view page load
    elseif(isset($category_view)):
      $this->load->view('Dashboard/Admin/category/'.$category_view);

     //brand view page load
    elseif(isset($SubSubcategory_view)):
      $this->load->view('Dashboard/Admin/category/'.$SubSubcategory_view);

    /////////////////////
         //store setting  page load
    elseif(isset($store_view)):
      $this->load->view('Dashboard/Admin/storesetting/'.$store_view);
         //store policies view page load
    elseif(isset($Policies_view)):
      $this->load->view('Dashboard/Admin/storesetting/'.$Policies_view);
         //owener information view page load
    elseif(isset($owener_view)):
      $this->load->view('Dashboard/Admin/storesetting/'.$owener_view);

         //manage menu view page load
    elseif(isset($menage_menu)):
      $this->load->view('Dashboard/Admin/storesetting/'.$menage_menu);

    //home_slider
    elseif(isset($HomeSliderView)):
      $this->load->view('Dashboard/Admin/Home/'.$HomeSliderView);



    //slider_right
    elseif(isset($SliderRight)):
      $this->load->view('Dashboard/Admin/Home/'.$SliderRight);
    //slider_right
    elseif(isset($UptoBannerr)):
      $this->load->view('Dashboard/Admin/Home/'.$UptoBannerr);
    //UptoLeftBannerr
    elseif(isset($UptoLeftBannerr)):
      $this->load->view('Dashboard/Admin/Home/'.$UptoLeftBannerr);
      //UptoLeftBannerr
    elseif(isset($HomePro)):
      $this->load->view('Dashboard/Admin/home_product/'.$HomePro);
    elseif(isset($mailbox)):
      $this->load->view('Dashboard/Admin/mailbox/'.$mailbox);

    
    elseif(isset($InsertFeatured)):
      $this->load->view('Dashboard/Admin/storesetting/'.$InsertFeatured);



    elseif(isset($Brandtype_category)):
      $this->load->view('Dashboard/Admin/Brand/'.$Brandtype_category);
    elseif(isset($BranCateMan)):
      $this->load->view('Dashboard/Admin/Brand/'.$BranCateMan);
    elseif(isset($BrandNameIn)):
      $this->load->view('Dashboard/Admin/Brand/'.$BrandNameIn);
    elseif(isset($BrandNameMan)):
      $this->load->view('Dashboard/Admin/Brand/'.$BrandNameMan);




    //slider_right
    elseif(isset($RightBranner)):
      $this->load->view('Dashboard/Admin/Home/'.$RightBranner);    //slider_right
    elseif(isset($RightBrannerManage)):
      $this->load->view('Dashboard/Admin/Home/'.$RightBrannerManage);



    //slider_right
    elseif(isset($LeftBigBan)):
      $this->load->view('Dashboard/Admin/BigwithTowSmallBanner/'.$LeftBigBan);    //slider_right
    elseif(isset($LeftBigBaMa)):
      $this->load->view('Dashboard/Admin/BigwithTowSmallBanner/'.$LeftBigBaMa);
    
    elseif(isset($RighhtSmBan)):
      $this->load->view('Dashboard/Admin/BigwithTowSmallBanner/'.$RighhtSmBan);    //slider_right
    elseif(isset($RighhtSmBaMa)):
      $this->load->view('Dashboard/Admin/BigwithTowSmallBanner/'.$RighhtSmBaMa);

    elseif(isset($BrandAds)):
      $this->load->view('Dashboard/Admin/Brand/'.$BrandAds);

    elseif(isset($CatBigProBan)):
      $this->load->view('Dashboard/Admin/category_product_baner/'.$CatBigProBan);
    
    endif;
    ?>
  </section>
  <!-- /Main Content -->




  <footer>&copy;<?php echo date("Y"); ?><strong><?php if($store): foreach($store as $str):  ?> <?php echo $str->store_name; ?><?php endforeach; endif ?> </strong>. All rights reserved.</footer>
  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/_con/js/_demo.js"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/jquery/jquery.min.js"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/materialize/js/materialize.min.js"></script>


  <!-- Simple Weather -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/simpleWeather/jquery.simpleWeather.min.js"></script>

  <!-- d3 -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/d3/d3.min.js"></script>

  <!-- nvd3 -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/nvd3/nv.d3.min.js"></script>
  <!-- Sortable -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/sortable/Sortable.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/_con/js/_con.min.js"></script>

    <!-- menu dropdown -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/_con/js/common.js"></script>
  <!--menu bar delete -->
      <!-- menu dropdown -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/_con/js/delete.js"></script>

  <!-- Google Prettify -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/google-code-prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>libs/assets/markitup/sets/default/set.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>libs/assets/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>libs/assets/jquery-tags-input/jquery.tagsinput.js"></script>
<script src="<?php echo base_url(); ?>libs/assets/colorpicker/jscolor.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>libs/assets/dropzone/dropzone.min.js"></script>
<!--table-->
<script type="text/javascript" src="<?php echo base_url(); ?>libs/assets/dataTables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/assets/parsley/parsley.min.js"></script>
  <script type="text/javascript"  src="<?php echo base_url();?>libs/assets/js/stateciry.js"></script>


<!-- product insert relative data hide and show -->
   <script type="text/javascript">
  function HideColor() {
      var x = document.getElementById('ColorDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>

   <script type="text/javascript">
  function HideSize() {
      var x = document.getElementById('SizeDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>

   <script type="text/javascript">
  function HideWeight() {
      var x = document.getElementById('WheightDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>

   <script type="text/javascript">
  function HideTags() {
      var x = document.getElementById('TagsDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>

   <script type="text/javascript">
  function HideSeo() {
      var x = document.getElementById('SeoDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>


   <script type="text/javascript">
  function HideAddi() {
      var x = document.getElementById('AddiDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>

   <script type="text/javascript">
  function HideUpTo() {
      var x = document.getElementById('UpToDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>

   <script type="text/javascript">
  function HideExPh() {
      var x = document.getElementById('ExPhDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>

   <script type="text/javascript">
  function HideHmSt() {
      var x = document.getElementById('HomeFDive');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
  }
  </script>
  
<!-- //product insert relative data hide and show -->


  <script type="text/javascript">
  $(document).ready(function(){
    $('.multipledelete').click(function(){
      if(confirm('are you sure to delete this data?')){
        var url   = $(this).attr('href');
        var trId   = $(this).attr('id');
        //ajax call 
        $.ajax({
          mimetype: 'text/html; charset=utf-8',//need set mini type only when run from local file
          url: url,
          type: 'POST',
          success: function(data){
            $('#table2 tbody tr#'+trId).fadeOut();
           $("#notice")
           .show()
           .html('<div class="alert alert-warning"<strong>Successfully !</strong> data deleted.</div>')
           .fadeOut(5000);
          },
          error: function(jqXHR, textStatus, errorThrown){
            alert(errorThrown);
          },
          dataType: "html",
          async: false
        });
        return false;
      }
      else{
        return false;
      }
    });
  });
  
  </script>



    <!--ajax Delete(Category) user data-->
  <script type="text/javascript">
  $(document).ready(function(){
    $('.ajaxDeleteD').click(function(){
      if(confirm('are you sure to delete this data?')){
        var url   = $(this).attr('href');
        var trId   = $(this).attr('id');
        //ajax call 
        $.ajax({
          mimetype: 'text/html; charset=utf-8',//need set mini type only when run from local file
          url: url,
          type: 'POST',
          success: function(data){
            $('#table2 tbody tr#'+trId).fadeOut();
           $("#notice")
           .show()
           .html('<div class="alert alert-warning"<strong>Successfully !</strong> data deleted.</div>')
           .fadeOut(5000);
          },
          error: function(jqXHR, textStatus, errorThrown){
            alert(errorThrown);
          },
          dataType: "html",
          async: false
        });
        return false;
      }
      else{
        return false;
      }
    });
  });
  
  </script>

    <!--ajax Delete user data-->
  <script type="text/javascript">
  
  $(document).ready(function(){
    $('.ajaxuserDelete').click(function(){
      if(confirm('are you sure to delete this data?')){
        var url   = $(this).attr('href');
        var trId   = $(this).attr('id');
        //ajax call 
        $.ajax({
          mimetype: 'text/html; charset=utf-8',//need set mini type only when run from local file
          url: url,
          type: 'POST',
          success: function(data){
            $('#table2 tbody tr#'+trId).fadeOut();
           $("#notice")
           .show()
           .html('<div class="alert alert-warning"<strong>Successfully !</strong> data deleted.</div>')
           .fadeOut(5000);
          },
          error: function(jqXHR, textStatus, errorThrown){
            alert(errorThrown);
          },
          dataType: "html",
          async: false
        });
        return false;
      }
      else{
        return false;
      }
    });
  });
  
  </script>

  
<script>
  $('#table2').DataTable({
    "iDisplayLength": 5,
    "aLengthMenu": [
      [5, 10, 25, 50, -1],
      [5, 10, 25, 50, "all"]
    ]
  });
</script>
<!--/table-->

<script>
function submitForm(){
    $('#multipledelete').submit();
}
</script>
  <!--input type color, size, and tag-->
    <script type="text/javascript">

    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input,tag) {
      alert("Changed a tag: " + tag);
    }

    $(function() {

      $('#color').tagsInput({width:'auto', height:'50px',defaultText:'color add'});
      $('#weight').tagsInput({width:'auto', height:'50px' ,defaultText:'Weight'});
      $('#tag').tagsInput({width:'auto', height:'50px',defaultText:'add a tag'});
      $('#meta_keywords').tagsInput({width:'auto', height:'50px',defaultText:'keywords'});



// Uncomment this line to see the callback functions in action
//      $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});

// Uncomment this line to see an input with no interface for adding new tags.
//      $('input.tags').tagsInput({interactive:false});
    });

  </script>

<script type="text/javascript">

Dropzone.autoDiscover = false;

var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo base_url('Multiplefileuploaded/proses_upload') ?>",
maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
  a.token=Math.random();
  c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
  var token=a.token;
  $.ajax({
    type:"post",
    data:{token:token},
    url:"<?php echo base_url('Multiplefileuploaded/remove_foto') ?>",
    cache:false,
    dataType: 'json',
    success: function(){
      console.log("Foto terhapus");
    },
    error: function(){
      console.log("Error");

    }
  });
});


</script>

  <script>
    /*
     * Stacked Bar Chart
     */
    (function() {
      nv.addGraph(function() {
          var chart = nv.models.multiBarChart()
            .color(["#64B5F6","#42A5F5"])
            .margin({left: 20, bottom: 20, right: 20})
            .reduceXTicks(true)   //If 'false', every single x-axis tick label will be rendered.
            .rotateLabels(0)      //Angle to rotate x-axis labels.
            .showControls(true)   //Allow user to switch between 'Grouped' and 'Stacked' mode.
            .groupSpacing(0.1)    //Distance between each group of bars.
          ;
    
          chart.xAxis
              .tickFormat(d3.format(',f'));
    
          chart.yAxis
              .tickFormat(d3.format(',.1f'));
    
          d3.select('#chart1').append('svg')
              .datum(exampleData())
              .call(chart);
    
          return chart;
      });
    
    
      /* Inspired by Lee Byron's test data generator. */
      function stream_layers(n, m, o) {
        if (arguments.length < 3) o = 0;
        function bump(a) {
          var x = 1 / (.1 + Math.random()),
              y = 2 * Math.random() - .5,
              z = 10 / (.1 + Math.random());
          for (var i = 0; i < m; i++) {
            var w = (i / m - y) * z;
            a[i] += x * Math.exp(-w * w);
          }
        }
        return d3.range(n).map(function() {
            var a = [], i;
            for (i = 0; i < m; i++) a[i] = o + o * Math.random();
            for (i = 0; i < 5; i++) bump(a);
            return a.map(stream_index);
          });
      }
    
      function stream_index(d, i) {
        return {x: i, y: Math.max(0, d)};
      }
    
    
      //Generate some nice data.
      function exampleData() {
        return stream_layers(2,30,50).map(function(data, i) {
          return {
            key: i?'Visitors':'New Posts',
            values: data
          };
        });
      }
    }());
    
    
    
    /*
     * Stacked Area Chart
     */
    (function() {
      /*Data sample:
      { 
            "key" : "North America" , 
            "values" : [ [ 1025409600000 , 23.041422681023] , [ 1028088000000 , 19.854291255832],
             [ 1030766400000 , 21.02286281168], 
             [ 1033358400000 , 22.093608385173],
             [ 1036040400000 , 25.108079299458],
             [ 1038632400000 , 26.982389242348]
             ...
    
      */
      d3.json('<?php echo base_url();?>libs/assets/nvd3/stackedAreaData.json', function(data) {
        nv.addGraph(function() {
          var chart = nv.models.stackedAreaChart()
              .margin({bottom: 20})
              .color(["#E27272","#64B5F6", "#FFD83C", "#81C784"])
              .margin({right: 40, left: 40})
              .x(function(d) { return d[0] })   //We can modify the data accessor functions...
              .y(function(d) { return d[1] })   //...in case your data is formatted differently.
              .useInteractiveGuideline(true)    //Tooltips which show all data points. Very nice!
              .rightAlignYAxis(true)      //Let's move the y-axis to the right side.
              .showControls(true)       //Allow user to choose 'Stacked', 'Stream', 'Expanded' mode.
              .clipEdge(true);
    
          //Format x-axis labels with custom function.
          chart.xAxis
              .tickFormat(function(d) { 
                return d3.time.format('%x')(new Date(d)) 
          });
    
          chart.yAxis
              .tickFormat(d3.format(',.2f'));
    
          d3.select('#chart2').append('svg')
            .datum(data)
            .call(chart);
    
          nv.utils.windowResize(chart.update);
    
          return chart;
        });
      })
    }());
    
    
    /*
     * Pie Chart
     */
    (function() {
      //Donut chart example
      nv.addGraph(function() {
        var chart = nv.models.pieChart()
            .color(["#E27272","#64B5F6", "#FFD83C", "#81C784"])
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .showLabels(true)     //Display pie labels
            .labelThreshold(.05)  //Configure the minimum slice size for labels to show up
            .labelType("percent") //Configure what type of data to show in the label. Can be "key", "value" or "percent"
            .donutRatio(0.35)     //Configure how big you want the donut hole size to be.
            ;
    
          d3.select('#chart4').append('svg')
              .datum(exampleData())
              .transition().duration(350)
              .call(chart);
    
        return chart;
      });
    
      //Pie chart example data. Note how there is only a single array of key-value pairs.
      function exampleData() {
        return  [
            { 
              "label": "India",
              "value" : 29.765957771107
            } , 
            { 
              "label": "USA",
              "value" : 13.4783623743534
            } , 
            { 
              "label": "Russia",
              "value" : 32.807804682612
            } , 
            { 
              "label": "Turkey",
              "value" : 56.45946739256
            }
          ];
      }
    }());
    
    
    // setTimeout(function() {
    //   toast('Welcome to Con!', 2000);
    // }, 1000);
  </script>

  <script type="text/javascript">
function selectcat(id){
  if(id!="-1"){
    loadData('state',id);
    $("#city_dropdown").html("<option value='-1'>Select Category</option>");  
  }else{
    $("#state_dropdown").html("<option value='-1'>Select SubCategory</option>");
    $("#city_dropdown").html("<option value='-1'>Select Category</option>");    
  }
}

/*function selectSub(state_id){
  if(state_id!="-1"){
    loadData('city',state_id);
  }else{
    $("#city_dropdown").html("<option value='-1'>Select city</option>");    
  }
}*/

function selectsub(state_id){
  if(state_id!="-1"){
    loadData('city',state_id);
  }else{
    $("#city_dropdown").html("<option value='-1'>Select city</option>");    
  }
}


function loadData(loadType,loadId){
  var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
  $("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
  $.ajax({
    type: "POST",
    url: '<?php echo site_url('LoadData'); ?>',
    data: dataString,
    cache: false,
    success: function(result){
      $("#"+loadType+"_loader").hide();
      $("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");  
      $("#"+loadType+"_dropdown").append(result);  
    }
  });
}
 
  </script>
</body>

