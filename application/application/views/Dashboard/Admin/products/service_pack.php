
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
      <?php echo form_open_multipart('check/service_pack/'); ?>
    <!-- option bar -->
    <div class="row no-margin-top">
      <div class="col s12 l3">
        <label for="ecommerce-product-keywords" class="setting-title">
          </br></br>&nbsp;&nbsp;&nbsp;&nbsp;Category Name
        </label>
      </div>
      <div class="col s12 l9">
        <div class="input-field no-margin-top">

        <select name="categoryId" class="browser-default" onchange="selectState(this.options[this.selectedIndex].value)" required>
          <option value="">Select Category</option>
          <?php
          foreach($list->result() as $listElement){
            ?>
            <option value="<?php echo $listElement->id?>"><?php echo $listElement->s_name; ?></option>
            <?php
          }
          ?>
        </select>
        </div>
      </div>
    </div>
    <!-- /option bar -->

    <!-- option bar -->
    <div class="row no-margin-top">
      <div class="col s12 l3">
        <label for="ecommerce-product-keywords" class="setting-title">
         </br></br>&nbsp;&nbsp;&nbsp;&nbsp; Sub Category
        </label>
      </div>
      <div class="col s12 l9">
        <div class="input-field no-margin-top">
          <select name="subCategoryId" class="browser-default"  id="state_dropdown"
           onchange="selectCity(this.options[this.selectedIndex].value)" required>
            <option value="">Select Subcategory</option>
          </select>
          <span id="state_loader"></span>
        </div>
      </div>
    </div>
    <!-- /option bar -->

 
      <!-- Keywords -->
      <div class="row no-margin-top">
        <div class="col s12 l3">
          <label for="ecommerce-product-keywords" class="setting-title">
            </br></br>Service Pack Name
          </label>
        </div>
        <div class="col s12 l9">
          <div class="input-field no-margin-top">
          <?php 
            $attr  = array (
              'id'          =>    'servicepname',
              'name'        =>    'servicepname',
              );
            echo form_input($attr);
          ?>
          <label>Service Pack Name</label>
          </div>
        </div>
      </div>
      <!-- /Keywords --> 
      <!-- Keywords -->
      <div class="row no-margin-top">
        <div class="col s12 l3">
          <label for="ecommerce-product-keywords" class="setting-title">
            </br></br>Price
          </label>
        </div>
        <div class="col s12 l9">
          <div class="input-field no-margin-top">
          <?php 
            $attr  = array (
              'id'          =>    'price',
              'name'        =>    'price',
              );
            echo form_input($attr);
          ?>
          <label>Price</label>
          </div>
        </div>
      </div>
      <!-- /Keywords --> 


          <!-- Product Photos -->
          <div class="row product-photos">
            <div class="col s12 l3">
              <label for="ecommerce-product-photos" class="setting-title">
                &nbsp;&nbsp;&nbsp;&nbsp;Image
              </label>
            </div>
            <div class="col s12 l9">
              <div class="file-field input-field">
                <input class="file-path" type="text" />
                <div class="btn">
                  <span>File</span>
                  <input id="galler_image" type="file" name="product_photos" required="required" />
                </div>
              </div>
            </div>
          </div>
          <!-- /Product Photos -->

      <button class="btn" type="submit" name="action">
        Add <i class="mdi-content-send right"></i>
      </button>
   <?php echo form_close(); ?>
</div>
</div>



