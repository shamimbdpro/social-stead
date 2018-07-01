<div class="row">
    <div class="col-lg-12">
        <?php if(!empty($products)){ foreach($products as $row){ ?>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="<?php echo base_url().'assets/images/'.$row['image']; ?>" alt="">
                <div class="caption">
                    <h4 class="pull-right">$<?php echo $row['price']; ?> USD</h4>
                    <h4><a href="javascript:void(0);"><?php echo $row['name']; ?></a></h4>
                    <p>See more snippets like this online store item at <a href="">CodexWorld</a>.</p>
                </div>
                <div class="ratings">
                    <a href="<?php echo base_url().'productss/buy/'.$row['id']; ?>"><img src="<?php echo base_url(); ?>assets/images/x-click-but01.gif" style="width: 70px;"></a>
                    <p class="pull-right">15 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div> 
        <?php } }else{ ?>
        <p>Product(s) not found...</p>
        <?php } ?>
    </div>
</div>