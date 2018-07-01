
 <!-- validaton message show -->
  <div>
    <div class="col">
    <?php 
      if(validation_errors()){
    ?>
       <div class="alert">
         <?php echo validation_errors(); ?>
       </div> 
    <?php 
      }
    ?>
    </div>
  </div>
<!-- /validaton message show -->
<!-- message Show -->
  <?php
    $message2=$this->session->userdata('message2');
      if(isset($message2)){
    ?>
  <div class="alert">
   <?php echo $message2; ?>
  </div>
    <?php
     $this->load->session->unset_userdata('message2');
      }
    ?>
<div>
  <div class="col">
    <?php
    $message=$this->session->userdata('message');
      if(isset($message)){
    ?>
      <div class="alert green lighten-4 green-text text-darken-2">
        <?php echo $message; ?>
      </div>
    <?php
     $this->load->session->unset_userdata('message');
      }
    ?>
  </div>
</div>
<!-- /message Show -->
    
<!-- Meta -->
<div class="card">
  <div class="title">
    <h5>Paypal Add</h5>
  </div>
    <div class="content">
      <!-- Keywords -->
      <div class="row no-margin-top">
        <div class="col s12 l3">
          <label for="ecommerce-product-keywords" class="setting-title">
            </br></br>Business Mail
          </label>
        </div>
     <?php echo form_open_multipart('check/payment/'); ?>
        <div class="col s12 l9">
          <div class="input-field no-margin-top">
          <?php 
            $attr  = array (
              'id'          =>    'paymbusmail',
              'name'        =>    'paymbusmail',
              );
            echo form_input($attr);
          ?>
          <label>Business Mail</label>
          </div>
        </div>
      </div>
      <!-- /Keywords -->   


      <button class="btn" type="submit" name="action">
        Add <i class="mdi-content-send right"></i>
      </button>
   <?php echo form_close(); ?>
</div>
</div>



  <div class="card-panel">
    <table class="table">
      <thead>
        <tr>
          <th>Business Email</th>
        </tr>
      </thead>
      <tbody>
          <?php 
            if($paypalp):
              foreach($paypalp as $papyl):
          ?>
        <tr>
        <td><?php echo $papyl->b_email; ?></td>
        </tr>
        <?php 
            endforeach;
          endif;
        ?>
      </tbody>
    </table>
  </div>