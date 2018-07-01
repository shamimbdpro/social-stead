<!-- Stats Panels -->
    <div class="row sortable">
      <div class="col l3 m6 s12">
        <div class="card-panel stats-card purple lighten-2 white-text">
            <span class="count">
              <?php
                $numberr = $SalesToday;
                // Let’s use PHP’s built-in function to format the number into US currency
                $formatteee = number_format($numberr);
                // The following statement will print 21,357.44
                echo $formatteee;
              ?>
            </span>
          <div class="name">Sales Today</div>
        </div>
      </div>
      <div class="col l3 m6 s12">
        <div class="card-panel stats-card indigo lighten-2 white-text">
            <span class="count">
              <?php
                $numberr = $TodayEarnings;
                // Let’s use PHP’s built-in function to format the number into US currency
                $formatteing = number_format($numberr);
                // The following statement will print 21,357.44
                echo $formatteing;
              ?>
            </span>
          <div class="name">Earnings Today</div>
        </div>
      </div>

      <div class="col l3 m6 s12">
        <div class="card-panel stats-card teal lighten-2 white-text">
          <i class="fa fa-trophy"></i>
          <span class="count">
            <?php
              $numberr = $TotalSales;
              // Let’s use PHP’s built-in function to format the number into US currency
              $formatte = number_format($numberr,2);
              // The following statement will print 21,357.44
              echo $formatte;
            ?>
          </span>
          <div class="name">Total Sales</div>
        </div>
      </div>

      <div class="col l3 m6 s12">
        <div class="card-panel stats-card red lighten-2 white-text">

          <span class="count">
            <?php
              $number = $TotalEarnings;
              // Let’s use PHP’s built-in function to format the number into US currency
              $formatted = number_format($number,2);
              // The following statement will print 21,357.44
              echo $formatted;
            ?>
          </span>
          <div class="name">Total Earnings</div>
        </div>
      </div>
    </div>
    <!-- /Stats Panels -->


    <!-- Stats Panels -->
    <div class="row sortable">
      <div class="col l3 m6 s12">
        <div class="card-panel stats-card red lighten-2 white-text">
          <i class="fa fa-bar-chart"></i>
          <span class="count">$1,346,342</span>
          <div class="name">Awaiting Payment</div>
        </div>
      </div>
      <div class="col l3 m6 s12">
        <div class="card-panel stats-card teal lighten-2 white-text">
          <i class="fa fa-trophy"></i>
          <span class="count">25,345</span>
          <div class="name">Awaiting Delivery</div>
        </div>
      </div>
      <div class="col l3 m6 s12">
        <div class="card-panel stats-card purple lighten-2 white-text">
          <i class="fa fa-line-chart"></i>
          <span class="count"><?php echo $TotalProducts->num_rows(); ?></span>
          <div class="name">TOTAL PRODUCT</div>
        </div>
      </div>

      <div class="col l3 m6 s12">
        <div class="card-panel stats-card purple lighten-2 white-text">
          <i class="mdi-action-account-child"></i>
          <span class="count"><?php echo $TotalAdmin->num_rows(); ?></span>
          <div class="name">TOTAL Admin</div>
        </div>
      </div>

      <div class="col l3 m6 s12">
        <div class="card-panel stats-card purple lighten-2 white-text">
          <i class="mdi-action-account-child"></i>
          <span class="count"><?php echo $TotalActiveus->num_rows(); ?></span>
          <div class="name">TOTAL Active Admin</div>
        </div>
      </div>




    </div>
    <!-- /Stats Panels -->



        </div>
      </div>

    </div>