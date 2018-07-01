
        <!-- Payment -->
        <div class="col s12 l6">
          <div class="card">
            <div class="title">
              <h5>Payment</h5>
              <a class="minimize" href="#">
                <i class="mdi-navigation-expand-less"></i>
              </a>
            </div>
            <div class="content">

              <!-- Status -->
              <div class="row no-margin-top">
                <div class="col s3">
                  <label class="setting-title">
                    Status
                  </label>
                </div>
                <div class="col s9">
                  <label class="green-text">Paid</label>
                </div>
              </div>
              <!-- /Status -->

              <!-- Payment Type -->
              <div class="row no-margin-top">
                <div class="col s3">
                  <label class="setting-title">
                    Type
                  </label>
                </div>
                <div class="col s9">
                  <label>
                      Paypal
                  </label>
                </div>
              </div>
              <!-- /Payment Type -->

            </div>
          </div>
        </div>
        <!-- /Payment -->
      </div>


      <!-- Products -->
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="title">
              <h5>Products</h5>
              <a class="minimize" href="#">
                <i class="mdi-navigation-expand-less"></i>
              </a>
            </div>
            <div class="content">

              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Url</th>
                      <th>email</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if($prodinfo):
                      foreach($prodinfo as $product):
                  ?>
                    <tr>

                      <td>
                        <a href="ecommerce-product-single.html">
                          <strong class="grey-text text-darken-2"><?php echo $product->pack_name; ?></strong>
                          <br>
                        </a>
                      </td>
                      <td><?php echo $product->qty; ?></td>
                      <td>$<?php echo $product->price; ?></td>
                      <td><?php echo $product->url; ?></td>
                      <td><?php echo $product->payer_email; ?></td>
                      
                    </tr>

                    <?php
                      endforeach;
                    endif;
                    ?>


                    <?php
                      if($orderde):
                        foreach ($orderde as $order):
                    ?>


                    <tr>
                      <td class="right-align"><strong>Total</strong>
                      </td>
                      <td class="right-align" colspan="2">
                        <strong class="h2">$<?php echo $order->payment_gross;?>
                        </strong>
                      </td>
                    </tr>
                    <?php
                      endforeach;
                    endif;
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /Products -->