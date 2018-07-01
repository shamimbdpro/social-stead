    <!-- Breadcrumb -->
    <div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <h1>Logo</h1>

          <ul>
            <li>
              <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a>  <i class="fa fa-angle-right"></i>
            </li>

            <li>Logo
            </li>
          </ul>
        </div>

      </div>

    </div>
    <!-- /Breadcrumb -->

    <!-- message show -->
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
    <!-- /message show  -->

    <!-- message show -->
    <div>
      <div class="col">
        <?php
        $message3=$this->session->userdata('message3');
          if(isset($message3)){
        ?>
          <div class="alert alert-dismissible orange lighten-4 orange-text text-darken-2">
            <strong><?php echo $message3; ?></strong> Please input this type(jpg, png, jpeg, gif, JPEG, PNG, JPEG, GIF) .
            <button class="close">&times;</button>
          </div>
        <?php
         $this->load->session->unset_userdata('message3');
          }
        ?>
      </div>
    </div>
    <!-- /message show  -->

    <!-- message show -->
    <div>
      <div class="col">
        <?php
        $message2=$this->session->userdata('message2');
          if(isset($message2)){
        ?>
          <div class="alert">
            <strong><?php echo $message2; ?>
          </div>
        <?php
         $this->load->session->unset_userdata('message2');
          }
        ?>
      </div>
    </div>
    <!-- /message show  --> 

   <!-- Owner Information -->
    <div class="card">
      <div class="title">
        <h5><i class="mdi mdi-social-person"></i> Company Logo</h5>
        <a class="minimize" href="#">
          <i class="mdi-navigation-expand-less"></i>
        </a>
      </div>
      <div class="content">
      <?php echo form_open_multipart('logo/check/') ?>
          <!-- image add -->
          <div class="row product-photos">
            <div class="col s12 l3">
              <label for="ecommerce-product-photos" class="setting-title">
              </br></br>
                &nbsp;&nbsp;&nbsp;&nbsp;Logo Add
              </label>
            </div>
            <div class="col s12 l9">
              <div class="file-field input-field">
                <input class="file-path" type="text" />
                <div class="btn">
                  <span>File</span>
                  <input id="ecommerce-product-photos" type="file" name="Company_logo" />
                </div>
              </div>
            </div>
          </div>
          <!-- /image add -->
          </br></br>
          <button class="btn" type="submit" name="action">
            Submit <i class="mdi-content-send right"></i>
          </button>
      </div>
      <?php echo form_close(); ?>
    </div>
    <!-- /Owner Information -->

  <div class="card-panel">
    <table class="table">
      <thead>
        <tr>
          <th>Logo</th>
        </tr>
      </thead>
      <tbody>
          <?php 
            if($logo):
              foreach($logo as $image):
          ?>
        <tr>
        <td></td>
          <td>          
          <img height="39 px" width="140 px" src="<?php echo base_url(); ?>libs/image/Company_logo/<?php echo $image->company_logo; ?>" alt="">
        </tr>
        <?php 
            endforeach;
          endif;
        ?>
      </tbody>
    </table>
  </div>