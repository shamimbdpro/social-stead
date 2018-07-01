
    <!-- Breadcrumb -->
    <div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <h1>Edit Profile</h1>

          <ul>
            <li>
              <a href="#"><i class="fa fa-home"></i> Home</a>  <i class="fa fa-angle-right"></i>
            </li>

            <li><a href='#'>Edit Profile</a>
            </li>
          </ul>
        </div>
    </div>


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
          ?>
          
          <?php
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
        <!-- /Social Sign Up -->

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
      
      <?php 
          if($userInfo):
           foreach($userInfo as $user):

    echo form_open('profile/update/'); ?>

      <div class="card-panel">

        <div class="row">
          <!-- First Name -->
          <div class="col m6 s12">
            <div class="input-field">
              <i class="fa fa-user prefix"></i>
              <?php 
                $firstName = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'firstname',
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
                  'value'       =>    $user->last_name                  );
                echo form_input($lastName); 
              ?>
              <label for="input_lname">Last Name</label>
            </div>
          </div>
          <!-- /Last Name -->
        </div>

        <!-- title -->
        <div class="input-field">
          <i class="fa fa-info-circle prefix"></i>
            <?php 
                $title = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'title',
                  'value'       =>    $user->title
                  );
                echo form_input($title); 
            ?>
          
          <label for="input_username">Title</label>
        </div>
        <!-- /title -->

        <!-- about -->
        <div class="input-field">
          <i class="fa fa-file-word-o prefix"></i>
            <?php 
                $about = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'about',
                  'value'       =>    $user->about
                  );
                echo form_input($about); 
            ?>
          
          <label for="input_username">About</label>
        </div>
        <!-- /about -->

        <!-- skills -->
        <div class="input-field">
          <i class="fa fa-thumb-tack prefix"></i>
            <?php 
                $skills = array (
                  'id'          =>    'tags',
                  'name'        =>    'skills',
                  'class'       =>    'input-tag',
                  'value'       =>    $user->skils
                  );
                echo form_input($skills); 
            ?>
          
          <label for="tags"></label>
        </div>
        <!-- /skills -->

       <!-- facebook -->
        <div class="input-field">
          <i class="fa fa-facebook-official prefix"></i>
            <?php 
                $facebook = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'facebook',
                  'value'       =>    $user->facebook
                  );
                echo form_input($facebook); 
            ?>
          
          <label for="input_username">Facebook</label>
        </div>
        <!-- /facebook -->

        <!-- twitter -->
        <div class="input-field">
          <i class="fa fa-twitter-square prefix"></i>
            <?php 
                $twitter = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'twitter',
                  'value'       =>    $user->twiteer
                  );
                echo form_input($twitter); 
            ?>
          
          <label for="input_username">Twitter</label>
        </div>
        <!-- /twitter -->

        <!-- google -->
        <div class="input-field">
          <i class="fa fa-google-plus-square prefix"></i>
            <?php 
                $google = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'google',
                  'value'       =>    $user->goggle
                  );
                echo form_input($google); 
            ?>
          
          <label for="input_username">Google</label>
        </div>
        <!-- /google -->

       <!-- skype -->
        <div class="input-field">
          <i class="fa fa-skype prefix"></i>
            <?php 
                $skype = array (
                  'id'          =>    'input_fname',
                  'name'        =>    'skype',
                  'value'       =>    $user->skype
                  );
                echo form_input($skype); 
            ?>
          
          <label for="input_username">Skype</label>
        </div>
        <!-- /skype -->

             <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Change Image</a>
                   
              <?php
                endforeach;
                  endif;
              ?>

          <div>
            <br/>
            <button class="btn" type="submit" name="action">Submit <i class="mdi-content-send right"></i>
    <?php echo form_close(); ?>
          </div>
          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="action-bar">
			    <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Exit</a>
			</div>
            <?php echo form_open_multipart('profile/image/change'); ?>
            <a href="" class="modal-close form-close"></a>
              <h4>Upload Image</h4>
              <input type="file" name="userimage" class="upload-image">
              <div class="action-bar">
                 <input type="submit"  value="upload" class="upload-btn"></button>
              </div>
          </div>
            <?php echo form_close(); ?>
      </div>

   

      </div>