
    <!-- Breadcrumb -->
    <div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <h1>Edit User</h1>

          <ul>
            <li>
              <a href="#"><i class="fa fa-home"></i> Home</a>  <i class="fa fa-angle-right"></i>
            </li>

            <li><a href='#'>Edit User</a>
            </li>
          </ul>
        </div>
    </div>

    
    <div class="card-panel">
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

              if(isset($errorUpdate)){
                ?>
                <div class="alert orange lighten-2 white-text">
                  <?php echo $errorUpdate; ?>
                </div>
                <?php
              }
            ?>

          </div>
        </div>
    
        <?php 
          if($userInfo):
           foreach($userInfo as $user):

      echo form_open('update/admin/info/'.$user->id); ?>
        <div class="row">
          <!-- First Name -->
          <div class="col m6 s12">
            <div class="input-field">
              <i class="fa fa-user prefix"></i>
              <?php    
               $firstName = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'firstname',
                  'required'    =>    'required',
                  'value'       =>    $user->first_name
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
                  'required'    =>    'required',
                  'value'       =>    $user->last_name

                  );
                echo form_input($lastName); 
              ?>
              <label for="input_lname">Last Name</label>
            </div>
          </div>
          <!-- /Last Name -->
        </div>

        <!-- Username -->
        <div class="input-field">
          <i class="fa fa-user prefix"></i>
            <?php 
                $username = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'username',
                  'required'    =>    'required',
                  'value'       =>    $user->user_name
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
                $OldPassword = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'oldpassword',
                  );
                echo form_password($OldPassword); 
            ?>
          
          <label for="input_password">Old Password</label>
        </div>
        <!-- /Password -->

                <!-- Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
            <?php 
                $NewPassword = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'newpassword',

                  );
                echo form_password($NewPassword); 
            ?>
          
          <label for="input_password">New Password</label>
        </div>
        <!-- /Password -->

        <!--Confirm Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
            <?php 
                $ConPassword = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'conpassword',
                  );
                echo form_password($ConPassword); 
            ?>
          
          <label for="input_password">Confirm Password</label>
        </div>
        <!-- /Confirm Password -->

    <button class="btn" type="submit" name="action">
      Submit <i class="mdi-content-send right"></i>
    </button>   
      <?php echo form_close(); ?>

      <?php
        endforeach;
          endif;
      ?>
   </div>

