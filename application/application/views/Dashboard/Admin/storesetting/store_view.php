    <!-- Breadcrumb -->
    <div class="ecommerce-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <!--h1>@@title</h1-->
          <nav>
            <ul class="left">
            <ul class="left">
              <li ><a href="<?php echo base_url(); ?>storesetting/">Data Add</a>
              </li>
              <li class="active"><a href="<?php echo base_url() ?>Setting/store_view/">Data View</a>
              </li>
            </ul>
            </ul>
          </nav>

        </div>
      </div>

    </div>
    <!-- /Breadcrumb -->

	<div class="card-panel">
		<table class="table">
		  <thead>
		    <tr>
		      <th>Store Name</th>
		      <th>Store Url</th>
		      <th>Address</th>
		      <th>telephone</th>
		      <th>Phone</th>
		      <th>Email</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		  	if($view):
		  		foreach($view as $setting):
		  ?>
		    <tr class="blue lighten-5">
		      <td><?php echo $setting->store_name; ?></td>
		      <td><?php echo $setting->store_url; ?></td>
		      <td><?php echo $setting->store_address ?></td>
		      <td><?php echo $setting->store_telephone ?></td>
		      <td><?php echo $setting->store_phone ?></td>
		      <td><?php echo $setting->store_email ?></td>
		    </tr>
		  <?php
		  		endforeach;
		  	endif;
		  ?>
		  </tbody>
		</table>
	</div>