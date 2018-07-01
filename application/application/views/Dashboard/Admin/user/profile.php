<!-- Breadcrumb -->
    <div class="page-title">
      <div class="row">
        <div class="col s12 m9 l10">
          <h1>Profile</h1>
          <ul>
            <li><a href='dashboard.html'>Dashboard</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='#'>Profile</a>  <i class='fa fa-angle-right'></i></li>
          </ul>
        </div>
        <div class="col s12 m3 l2 right-align">
          <a href="<?php echo base_url(); ?>edit/profile/" class="btn grey lighten-3 grey-text">Edit</a>
        </div>
      </div>
    </div>
<!-- /Breadcrumb -->
     <?php
        if(isset($updateSuccess)){
          ?>
          <div class="alert orange lighten-2 white-text">
            <?php echo $updateSuccess; ?>
          </div>
          <?php
        }
      ?>

    
    <?php 
        if($userInfo):
         foreach($userInfo as $user):
    ?>
    <div class="card-panel">
      <table class="profile-info">
        <tbody>
          <tr>
            <td class="photo">
              <img src="<?php echo base_url(); ?>libs/image/userimage/<?php echo $user->image ?>" alt="<?php echo $user->first_name ?><?php echo $user->last_name ?>">
            </td>
            <td>
              <!-- Name -->
              <h3><?php echo $user->first_name.  "" .$user->last_name; ?></h3>
              <!-- /Name -->

              <!-- Status Message -->
              <span><?php echo $user->title; ?></span>
              <!-- /Status Message -->

              <!-- Contact Buttons -->
              <div class="contacts">
              <?php
                if(!empty($user->facebook)){  ?>
                   <a href="<?php echo $user->facebook; ?>" class="blue darken-3 white-text waves-effect">
                      <i class="fa fa-facebook"></i>
                    </a>
               <?php 
             }
              ?>

              <?php
                if(!empty($user->twiteer)){  ?>
                   <a href="<?php echo $user->twiteer; ?>" class="blue lighten-2 white-text waves-effect">
                      <i class="fa fa-twitter"></i>
                   </a>
               <?php 
             }
              ?>

              <?php
                if(!empty($user->goggle)){  ?>
                   <a href="<?php echo $user->goggle; ?>" class="red white-text waves-effect">
                      <i class="fa fa-google-plus"></i>
                    </a>
               <?php 
             }
              ?>

              <?php
                if(!empty($user->skype)){  ?>
                   <a href="<?php echo $user->skype; ?>" class="blue lighten-1 white-text waves-effect">
                      <i class="fa fa-skype"></i>
                   </a>
               <?php 
             }
              ?>
              </div>
              <!-- /Contact Buttons -->
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="row">
      <div class="col s12 l9">

        <!-- About -->
        <div class="card">
          <div class="title">
            <h5><i class="fa fa-user"></i> About</h5>
            <a class="close" href="#">
              <i class="mdi-content-clear"></i>
            </a>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <?php echo $user->about; ?>
          </div>
        </div>
        <!-- /About -->

      </div>

      <div class="col s12 l3">
        <!-- Skills -->
        <div class="card profile-skills">
          <div class="title">
            <h5><i class="fa fa-trophy"></i> Skills</h5>
            <a class="close" href="#">
              <i class="mdi-content-clear"></i>
            </a>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <?php 
              $skills   = explode(",",$user->skils);
              foreach ($skills as $skils) {
                echo '<a href="" class="skill">'.$skils.'<a/>';
              }
            ?>
          </div>
        </div>
        <!-- /Skills -->

        <p></p>

        <!-- Send Message -->
        <div class="card">
          <div class="title">
            <h5><i class="fa fa-user"></i> Send Message</h5>
            <a class="close" href="#">
              <i class="mdi-content-clear"></i>
            </a>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <form action="#!">
              <div class="input-field">
                <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
                <label for="textarea1">Send me message</label>
              </div>
              <button class="btn">Send</button>
            </form>
          </div>
        </div>
        <!-- /Send Message -->

      </div>
    </div>
    <?php
      endforeach;
    endif;
    ?>