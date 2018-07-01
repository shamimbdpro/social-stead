   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/hhh/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/hhh/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/hhh/responsive.css" />



    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/assets/css/global.css" />










    <div class="col-xs-12 col-sm-8 col-md-12">
        <h3 class="page-title">

            <?php
                if($alld):
                    foreach($alld as $dddd):
            ?>
            <span><?php echo $dddd->name; ?>  <?php echo $dddd->type; ?></span>
            <?php
                endforeach;
            endif;
            ?>
        </h3>
        <div class="sortPagiBar">
            <span style="font-size: 20px;">Show all result 8</span>
            <div class="sortPagiBar-inner">
                <nav>
                    <ul class="pagination"></ul>
                </nav>
                            
                <div class="sort-product">
                        <select id="isotopeSorting">
                            <option value="{&quot;sortBy&quot;:&quot;price&quot;, &quot;sortAscending&quot;:&quot;true&quot;}">Price: Low to High &uarr;</option>
                            <option value="{&quot;sortBy&quot;:&quot;price&quot;, &quot;sortAscending&quot;:&quot;false&quot;}">Price: High to Low &darr;</option>
                            <option value="{&quot;sortBy&quot;:&quot;name&quot;, &quot;sortAscending&quot;:&quot;true&quot;}">Name: A to Z &uarr;</option>
                            <option value="{&quot;sortBy&quot;:&quot;name&quot;, &quot;sortAscending&quot;:&quot;false&quot;}">Name: Z to A&darr;</option>
                        </select>
                    <div class="icon"><i class="fa fa-sort-alpha-asc"></i></div>
                </div>
            </div>
        </div>



                     <div class="category-products" id="category-products">
                        <ul class="products row isotope-container"  id="isotopeContainer">
                            <?php
                                if($alldata):
                                    foreach($alldata as $data):
                            ?>
                           <div style="padding-top: 10px" class="col-xs-12 col-sm-6 col-md-3 isotope--target  

                            filter--Stylish-T-Shirts"
                                     data-price="250"
                                     data-tags="sunglass||">
                                    <!-- <li class="product col-xs-12 col-sm-6 col-md-4"> -->
                                    <div class="ff" style="border: 1px solid #d8d8d8; background-color: #fff; display: none;">
                                            <div class="main-titles no-margin">
                                                <h4 class="title" style="text-align: center; border-bottom: 1px solid #f4f4f4; color: #58bab6;"><?php echo $data->pack_price; ?>.00</h4>
                                                <h5 class="no-margin isotope--title" style="text-align: center; font-size: 13px; padding-top: 10px;">
                                                    <?php echo $data->pack_name; ?>&#8230;</h5>
                                            </div>
                                    </div>
                                        <div class="product-container">
                                            <div class="inner">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="<?php echo base_url(); ?>product/<?php echo $data->s_id ?>"><img src="<?php echo base_url(); ?>/libs/image/product_Zoom/<?php echo $data->img; ?>" alt="Product"></a>
                                                        <a title="Quick View" href="<?php echo base_url(); ?>product/<?php echo $data->s_id ?>" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                       <h4 style="color: #0C266Al"> <?php echo $data->pack_name; ?></h4>
                                                    </div>
                                                    <div  style="padding-bottom: 45px" class="price-box">
                                                        <h2 style="color: #6A1C0C">$<?php echo $data->pack_price; ?>.00</h2>
                                                    </div>
                                                </div>
                                </div> 
                                <?php
                                    endforeach;
                                endif;
                                ?>

                           </ul>

</br></br></br>






                    </div> 
                </div>
            </div>
        </div>
    </div>




<div id="fb-root"></div>



<script src="<?php echo base_url(); ?>libs/hhh/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>libs/hhh/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>libs/hhh/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>libs/hhh/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>libs/hhh/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>libs/hhh/js/custom.js" type="text/javascript"></script>



                <!-- ./block banner -->

            </div>
        </div>
    </div>
    <div class="container">
    <!-- popular categories -->
            <!-- ./popular categories -->    
    </div>
    </div>


    <script type="text/javascript" src="<?php echo base_url(); ?>libs/hhh/js/jquery-1.11.2.min.js"></script>







<script src="<?php echo base_url(); ?>libs/hhh/js/underscore-min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>libs/hhh/js/bootstrap.min.js" type="text/javascript"></script>















