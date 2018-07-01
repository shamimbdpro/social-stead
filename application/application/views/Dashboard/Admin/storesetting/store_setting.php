    <!-- Breadcrumb -->
    <div class="ecommerce-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <!--h1>@@title</h1-->
          <nav>
            <ul class="left">
            <ul class="left">
              <li  class="active"><a href="<?php echo base_url(); ?>storesetting/">Data Add</a>
              </li>
              <li><a href="<?php echo base_url() ?>storesetting/view/">Data View</a>
              </li>
            </ul>
            </ul>
          </nav>

        </div>
      </div>

    </div>
    <!-- /Breadcrumb -->

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


    <!-- Store Settings -->
    <div class="card">
      <div class="title">
        <h5><i class="fa fa-cog"></i> Store Settings</h5>
        <a class="minimize" href="#">
          <i class="mdi-navigation-expand-less"></i>
        </a>
      </div>
      <div class="content">

      <?php echo form_open('insert/setting/') ?>
        <div class="row no-margin-top">
          <div class="col s12 l3">
            <label for="ecommerce-name">
              &nbsp;&nbsp;&nbsp;</br></br>Store Name
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="mdi mdi-action-home prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'store_name',
                  'id'             =>      'store_name',
                  'placeholder'    =>      'Store Name',
                  'required'       =>      'required',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row no-margin-top">
          <div class="col s12 l3">
            <label for="ecommerce-url">
               &nbsp;&nbsp;&nbsp;</br></br>Store URL
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="mdi mdi-action-language prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'store_url',
                  'id'             =>      'store_url',
                  'placeholder'    =>      'Store Url',
                  'required'       =>      'required',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-currency">
               &nbsp;&nbsp;&nbsp;</br></br>Address
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="mdi mdi-action-home prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'address',
                  'id'             =>      'address',
                  'placeholder'    =>      'Address',
                  'required'       =>      'required',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-unit-system">
               &nbsp;&nbsp;&nbsp;</br></br>TelePhone
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="ion-android-call prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'telephone',
                  'id'             =>      'telephone',
                  'placeholder'    =>      'TelePhone',
                  'required'       =>      'required',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-unit-system">
               &nbsp;&nbsp;&nbsp;</br></br>Phone
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="ion-android-call prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'phone',
                  'id'             =>      'phone',
                  'placeholder'    =>      'Phone',
                  'required'       =>      'required',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Email
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="mdi-content-mail prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'email',
                  'id'             =>      'email',
                  'placeholder'    =>      'Email',
                  'type'           =>      'email',
                  'required'       =>      'required'
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Supprot Email
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="mdi-content-mail prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'supprot_email',
                  'id'             =>      'supprot_email',
                  'placeholder'    =>      'Supprot Email',
                  'type'           =>      'email',
                  'required'       =>      'required'
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Exchange Policy
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="mdi mdi-action-swap-horiz prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'exchange',
                  'id'             =>      'exchange',
                  'placeholder'    =>      'Exchange Policy',
                  'required'       =>      'required'
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Facebook
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="fa fa-facebook-official prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'facebook',
                  'id'             =>      'facebook',
                  'placeholder'    =>      'Facebook',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Twitter
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="fa fa-twitter-square prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'twitter',
                  'id'             =>      'twitter',
                  'placeholder'    =>      'Twitter',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Google
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="fa fa-google-plus-square prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'google',
                  'id'             =>      'google',
                  'placeholder'    =>      'Google',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br></br></br>Skype
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="fa fa-skype prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'skype',
                  'id'             =>      'skype',
                  'placeholder'    =>      'Skype',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Pinterest
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="ion-social-pinterest prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'pinterest',
                  'id'             =>      'pinterest',
                  'placeholder'    =>      'Pinterest',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Linkedin
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="fa fa-linkedin prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'linkedin',
                  'id'             =>      'linkedin',
                  'placeholder'    =>      'Linkedin',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l3">
            <label for="ecommerce-weight-unit">
               &nbsp;&nbsp;&nbsp;</br></br>Vimeo
            </label>
          </div>
          <div class="col s12 l9">
            <div class="input-field">
              <i class="ion-social-vimeo prefix"></i>
              <?php
                $attr = array(
                  'name'           =>      'vimeo',
                  'id'             =>      'vimeo',
                  'placeholder'    =>      'Vimeo',
                  );
                echo form_input($attr);
              ?>
            </div>
          </div>
        </div>

        <!-- SOME INFOMATION -->
        <div class="row no-margin-top">
          <div class="col s12 l3">
            <label class="setting-title">
              </br></br></br>Some Information
            </label>
          </div>
          <div class="col s12 l9">
            <div id="sample">
              <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
            //<![CDATA[
                    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
              //]]>
              </script>
              <textarea name="some_info" cols="40">
            </textarea><br />
            </div>
          </div>
        </div>
        <!-- /SOME INFOMATION -->

          <button class="btn" type="submit" name="action">
            Submit <i class="mdi-content-send right"></i>
          </button>
      </div>
      <?php echo form_close(); ?>
    </div>
    <!-- /Store Settings -->
