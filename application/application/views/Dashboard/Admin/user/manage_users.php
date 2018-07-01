    <!-- Breadcrumb -->
    <div class="ecommerce-title">
      <div class="row">
        <div class="col s12 m9 l10">
          <!--h1>@@title</h1-->
          <nav>
            <ul class="left">
              <li><a href="<?php echo base_url(); ?>admin/dashboard/">Home Page</a>
              </li>
              <li><a href="<?php echo base_url(); ?>admin/add/">Add Admin</a>
              </li>
              <li class="active"><a href="<?php echo base_url(); ?>admin/manage/">Manage Admin</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- /Breadcrumb -->
<div id="notice" >
  <!--here ajx delete message is displayed-->
</div>
<table id="table2" class="display table table-bordered table-striped table-hover">
  <thead>
    <tr class="red lighten-5">
      <th>Name</th>
      <th>UserName</th>
      <th>Email</th>
      <th>Roll</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
   <?php 
    if($allusersdata):
      foreach ($allusersdata as $users):
  ?>
    <tr id="<?php echo $users->id; ?>">
      <td><?php echo $users->first_name ?> <?php echo $users->last_name; ?></td>
      <td><?php echo $users->user_name; ?></td>
      <td><?php echo $users->email; ?></td>
      <td><?php echo $users->rolle; ?></td>
      <td>
	      <?php 
	        if($this->session->userdata('current_admin_id') != $users->id){?>
	          <a class="ajaxuserDelete" id="<?php echo $users->id; ?>" href="<?php echo base_url(); ?>admin/delete/<?php echo $users->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-close bigico"></i></a>  
	          <?php
	        }
	      ?>
	        <a href="<?php echo base_url(); ?>edit/admin/<?php echo $users->id; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-edit bigico"></i></a>
      </td>
    </tr>
    <?php
    	endforeach;
    endif;
    ?>
  </tbody>
</table>
  
