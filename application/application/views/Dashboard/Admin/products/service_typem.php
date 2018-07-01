<!-- message Show -->
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
</div>
<!-- /message Show -->
<div id="notice" >
  <!--here ajx delete message is displayed-->
</div>
<div class="card">
  <div class="content">
    <table id="table2" class="display table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Type</th>
          <th>url</th>
          <th>Status</th>
          <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Action</th>
        </tr>
      </thead>
      <tbody>
      <?php for ($i = 0; $i < count($alldata); ++$i) { ?>

        <tr id="<?php echo $alldata[$i]->id; ?>">

          <td><?php echo $i+1; ?></td>  
          <td><?php echo $alldata[$i]->name; ?></td>
          <td><?php echo $alldata[$i]->type; ?></td>
          <td><?php echo $alldata[$i]->url; ?></td>

            <?php
                if($alldata[$i]->status==1){
                  ?>
                 <td> <a href="<?php echo base_url();?>publish/service-type/<?php echo $alldata[$i]->id;?>" class="green-text">Publish</a></td>
                  <?php
                }else{
                  ?>
                 <td> <a href="<?php echo base_url();?>unpublish/service-type/<?php echo $alldata[$i]->id;?>" class="red-text">Unpublish</a></td>
              <?php
                }
              ?>
          <td>    
            &nbsp;&nbsp;&nbsp;&nbsp;      
            <a class="ajaxDeleteD" id="<?php echo $alldata[$i]->id; ?>" href="<?php echo base_url(); ?>delete/service-type/<?php echo $alldata[$i]->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-close bigico"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;  
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>