
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
    <h5>Service Add</h5>
  </div>
    <div class="content">
      <!-- Keywords -->
      <div class="row no-margin-top">
        <div class="col s12 l3">
          <label for="ecommerce-product-keywords" class="setting-title">
            </br></br>Service Name
          </label>
        </div>
     <?php echo form_open_multipart('check/service/'); ?>
        <div class="col s12 l9">
          <div class="input-field no-margin-top">
          <?php 
            $attr  = array (
              'id'          =>    'serviceicon',
              'name'        =>    'serviceicon',
              );
            echo form_input($attr);
          ?>
          <label>Service Icon</label>
          </div>
        </div>
      </div>
      <!-- /Keywords -->   
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


      <button class="btn" type="submit" name="action">
        Add <i class="mdi-content-send right"></i>
      </button>
   <?php echo form_close(); ?>
</div>
</div>



