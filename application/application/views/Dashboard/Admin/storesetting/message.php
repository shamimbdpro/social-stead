

    <!-- Products -->
    <div class="card">

      <div class="content">
        <table id="table2" class="display table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Date</th>
              <th>Date</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
            </tr>
          </thead>
          <tbody>

      <?php for ($i = 0; $i < count($alldata); ++$i) { ?>

        <tr id="<?php echo $alldata[$i]->id; ?>">

          <td><?php echo $i+1; ?></td>  
          <td><?php echo $alldata[$i]->date; ?></td>
          <td><?php echo $alldata[$i]->name; ?></td>
        <td>
          <a href="<?php echo base_url();?>view/message/<?php echo $alldata[$i]->id; ?>"><?php echo $alldata[$i]->email; ?></a>
        </td>
          <td><?php echo $alldata[$i]->subject; ?></td>
        </tr>
      <?php } ?>



 
          </tbody>
        </table>
      </div>
    </div>
    <!-- /Products -->










