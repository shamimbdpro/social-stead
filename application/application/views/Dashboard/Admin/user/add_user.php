    <!-- Breadcrumb -->
    <div class="ecommerce-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <!--h1>@@title</h1-->
          <nav>
            <ul class="left">
              <li><a href="<?php echo base_url(); ?>admin/dashboard/">Home Page</a>
              </li>
              <li class="active"><a href="<?php echo base_url(); ?>admin/add/">Add Admin</a>
              </li>
              <li><a href="<?php echo base_url(); ?>admin/manage/">Manage Admin</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- /Breadcrumb -->

    <?php echo form_open('add/user/check/'); ?>

      <div class="card-panel">

        <!-- Social Sign Up -->

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

          if(isset($errorInsert)){
            ?>
            <div class="alert orange lighten-2 white-text">
              <?php echo $errorInsert; ?>
            </div>
            <?php
          }
        ?>

        </div>
        </div>
        <!-- /Social Sign Up -->

        <div class="row">
          <!-- First Name -->
          <div class="col m6 s12">
            <div class="input-field">
              <i class="fa fa-user prefix"></i>
              <?php 
                $firstName = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'firstname',
                  'required'    =>    'required'
                  );
                echo form_input($firstName); 
              ?>
              <label for="input_fname">First Name</label>
            </div>
          </div>
          <!-- /First Name -->

          <!-- Last Name -->
          <div class="col m6 s12">
            <div class="input-field">
              <i class="fa fa-user prefix"></i>
              <?php 
                $lastName = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'lastname',
                  'required'    =>    'required'
                  );
                echo form_input($lastName); 
              ?>
              <label for="input_lname">Last Name</label>
            </div>
          </div>
          <!-- /Last Name -->
        </div>

        <!-- Email -->
        <div class="input-field">
          <i class="fa fa-envelope prefix"></i>
            <?php 
                $email = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'email',
                  'type'        =>    'email',
                  'required'    =>    'required'
                  );
                echo form_input($email); 
              ?>
          <label for="input_email">Email</label>
        </div>
        <!-- /Email -->

        <!-- Username -->
        <div class="input-field">
          <i class="fa fa-user prefix"></i>
            <?php 
                $username = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'username',
                  'required'    =>    'required'
                  );
                echo form_input($username); 
            ?>
          
          <label for="input_username">Username</label>
        </div>
        <!-- /Username -->

        <!-- Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
            <?php 
                $Password = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'password',
                  'required'    =>    'required'
                  );
                echo form_password($Password); 
            ?>
          
          <label for="input_password">Password</label>
        </div>
        <!-- /Password -->

        <!--Confirm Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
            <?php 
                $ConPassword = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'conpassword',
                  'required'    =>    'required'
                  );
                echo form_password($ConPassword); 
            ?>
          
          <label for="input_password">Confirm Password</label>
        </div>
        <!-- /Confirm Password -->


    <button class="btn" type="submit" name="action">
      Add User <i class="mdi-content-send right"></i>
    </button>
      </div>

   <?php echo form_close(); ?>