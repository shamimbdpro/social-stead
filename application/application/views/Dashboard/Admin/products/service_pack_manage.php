
    <!-- message show -->
    <div>
      <div class="col">
        <?php
        $message2=$this->session->userdata('message2');
          if(isset($message2)){
        ?>
          <div class="alert rd lighten-4 green-red text-red-2">
            <?php echo $message2; ?>
          </div>
        <?php
         $this->load->session->unset_userdata('message2');
          }
        ?>
      </div>
    </div>
    <!-- /message show  -->

<div class="card">
  <div class="title">
    <h5>Data Show</h5>
    <a class="minimize" href="#">
      <i class="mdi-navigation-expand-less"></i>
    </a>
  </div>
  <div id="notice" >
    <!--here ajx delete message is displayed-->
  </div>
  <div class="content">
  <table id="table2" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Category</th>
        <th>subcategory</th>
        <th>Name</th>
        <th>Price</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $i < count($AllData); ++$i) { ?>
      <tr id="<?php echo $AllData[$i]->s_id;?>">
        <th><?php echo ($i+1); ?></th>
        <td style="width: 200px; height: 150px">
      <div class="card image-card">
        <div class="image">
          <img src="<?php echo base_url(); ?>libs/image/<?php echo $AllData[$i]->img  ; ?>" alt="">
          <a href="page-profile.html" class="link"></a>
        </div>
      </div>
    </td>
    <td>
      <?php echo $AllData[$i]->s_name;  ?>  
    </td>
    <td>
      <?php echo $AllData[$i]->name;  ?>  
    </td>
    <td>
      <?php echo $AllData[$i]->pack_name; ?>  
    </td>
    <td>
      <?php echo $AllData[$i]->pack_price;  ?>  
    </td>
        <td>
          <?php
            if($AllData[$i]->status==0){
              ?>
              <a href="<?php echo base_url();?>serpack/unpublish/<?php echo $AllData[$i]->s_id;?>" class="btn-floating red" title="Pubished"><i class="ion-arrow-up-a"></i></a>
              <?php
            }else{
              ?>
             <a href="<?php echo base_url();?>serpack/publishe/<?php echo $AllData[$i]->s_id;?>" class="btn-floating green" title="Un Pubished"><i class="ion-arrow-down-a"></i></a>
          <?php
            }
          ?>
        </td>
        <td>  
            <a class="ajaxDelete" id="<?php echo $AllData[$i]->s_id; ?>" href="<?php echo base_url(); ?>delete/spack/<?php echo $AllData[$i]->s_id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-close bigico"></i></a>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  </div>
</div>




