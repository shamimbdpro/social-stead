
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
    <h5>Service Type</h5>
  </div>
    <div class="content">
      <?php echo form_open('check/service_type/'); ?>
        <!-- option bar -->
        <div class="row no-margin-top">
          <div class="col s12 l3">
            <label for="ecommerce-product-keywords" class="setting-title">
              Category Name
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field no-margin-top">

            <select name="CategroyId" class="browser-default" required>
              <option value="">Select Category</option>
              <?php
                if($alldata):
                  foreach($alldata as $data):
              ?>
                <option value="<?php echo $data->id?>">
                  <?php echo $data->s_name?>
                </option>
              <?php
                endforeach;
              endif;
              ?>
            </select>

            </div>
          </div>
        </div>
        <!-- /option bar -->



      <!-- Keywords -->
      <div class="row no-margin-top">
        <div class="col s12 l3">
          <label for="ecommerce-product-keywords" class="setting-title">
            </br></br>Service Name
          </label>
        </div>
   
        <div class="col s12 l9">
          <div class="input-field no-margin-top">
          <?php 
            $attr  = array (
              'id'          =>    'servicename',
              'name'        =>    'servicename',
              );
            echo form_input($attr);
          ?>
          <label>Service Name</label>
          </div>
        </div>
      </div>
      <!-- /Keywords -->   
      <!-- Keywords -->
      <div class="row no-margin-top">
        <div class="col s12 l3">
          <label for="ecommerce-product-keywords" class="setting-title">
            </br></br>Service Type
          </label>
        </div>
        <div class="col s12 l9">
          <div class="input-field no-margin-top">
          <?php 
            $attr  = array (
              'id'          =>    'servicetype',
              'name'        =>    'servicetype',
              );
            echo form_input($attr);
          ?>
          <label>Service Type</label>
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



