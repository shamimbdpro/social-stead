
    <?php
        if($paypalp):
            foreach($paypalp as $datapaypalb):
    ?>
        


<?php
    if($this->cart->contents() ){ 
?> 


        

<?php
	$paypalUrl='https://www.paypal.com/cgi-bin/webscr';
	$paypalId= $datapaypalb->b_email ;
?>

<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

<div class="container text-center">
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-4 col-lg-3">
		
			<!-- PRICE ITEM -->
    			
					<div class="panel price panel-red">
						    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
						    <input type="hidden" name="cmd" value="_xclick">
						    <input type="hidden" name="item_name" value="social stead">
					<!--	    <input type="hidden" name="item_number" value="2">-->
                            <input type="hidden" name="amount" value="<?php echo $this->cart->format_number($this->cart->total()); ?>" />
						    <input type="hidden" name="no_shipping" value="1">
						    <input type="hidden" name="currency_code" value="USD">
						    <input type="hidden" name="cancel_return" value="http://www.social-stead.com/payment/cancel.php">
						    <input type="hidden" name="return" value="http://www.social-stead.com/payment/success.php"></br></br></br>
						<div class="panel">
							<button class="btn " href="#">Confirm</button>
						</div>
					</div>
    			</form>
			<!-- /PRICE ITEM -->
			
		</div>
	</div>
</div>

<?php
    }else{
    ?>
		<div class="main-page">
			<h1 align="center">Your cart is empty. <a href="<?php echo base_url(); ?>all-services" style="display:inline-block;">Start Buying Now</a></h1>
		</div>
<?php
}
?>
	        
    <?php
        endforeach;
    endif;
    ?>