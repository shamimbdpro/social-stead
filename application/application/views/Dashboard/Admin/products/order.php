

  <?php echo form_open('#', 'class="email" id="multipledelete"'); ?>
    <!-- Products -->
    <div class="card">

      <div class="content">
        <table id="table2" class="display table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
               <th>Date</th>
              <th>Customer Email</th>
              <th>Grand Total</th>
              <th>Payment Status</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              if($orderdetails):
                foreach($orderdetails as $orders):
            ?>
            <tr id="">
                <td></td>
                <td>
                  <a href="<?php echo base_url();?>order/details/<?php echo $orders->payment_id;  ?> "><?php echo $orders->date; ?></a>
                </td>

                <td>
                  <a href="<?php echo base_url();?>Admin/Orders/order_details/<?php $orders->payment_id;  ?> "><?php echo $orders->payer_email; ?></a>
                </td>
                <td>$<?php echo $orders->payment_gross; ?></td>
                <td class="blue-text">Paypal</td>

            </tr>
          <?php 
            endforeach;
          endif;
          ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /Products -->
  <?php echo form_close(); ?>










