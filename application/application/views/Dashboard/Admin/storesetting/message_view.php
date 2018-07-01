<!-- Breadcrumb -->

<!-- /Breadcrumb -->

<div class="row">
  <div class="col s12 m3 l2">
    <div class="card-panel">

      <!-- Mail Sidebar -->
      <ul class="mail-sidebar">
        <li class="active">
          <a href="#"><i class="mdi-content-inbox"></i> Inbox</a>
        </li>



      </ul>
      <!-- /Mail Sidebar -->

    </div>
  </div>
  <div class="col s12 m9 l10">

    <div class="card-panel">
    <?php 
      if($thismsg):
        foreach($thismsg as $data):
    ?>
      <!-- Subject -->
      <h3 class="mail-subject"><?php echo $data->subject; ?>.</h3>
      <!-- /Subject -->

      <div class="row">
        <!-- From -->
        <div class="col s6">
          From: <strong><?php echo $data->email; ?></strong>
        </div>
        <!-- /From -->

        <!-- Date -->
        <div class="col s6 right-align">
          <span>Time:<?php echo $data->time; ?>&nbsp;&nbsp;&nbsp;Date:<?php echo $data->date; ?></span>
        </div>
        <!-- /Date -->
      </div>

      <hr>

      <!-- Message -->
      <div class="mail-text">
      <?php echo $data->message; ?>
      </div>
      <!-- /Message -->

      <hr>


	  <?php 
	    endforeach;
	  endif;
	  ?>
    </div>

  </div>
</div>