


<div style="color: #333" align="center" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid bpcb vc_custom_1519045016574 vc_row-has-fill">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="sell_title ">
					<H3 class=""  style="text-align: center; ">Contact Us With Any Questions</H3>
				</div>
<!-- message Show -->

<?php
	if(isset($message)){
	?>
		<h2 style="color: green"><?php echo $message; ?></h2>
		<?php
	}else{

}

?>


<?php
	if(isset($message2)){
	?>
		<h2 style="color: red"><?php echo $message2; ?></h2>
		<?php
	}else{

}

?>
<!-- /message Show -->
				<div role="form" id="wpcf7-f3141-p2681-o1" lang="en-US" dir="ltr">
					<div class="screen-reader-response">
						
					</div>
					<?php echo form_open('coustomer/contact/') ?>
						<p>
							<label> Your Name (required)<br /> 
								<span class="wpcf7-form-control-wrap your-name">
									<input type="text" name="name" value="" size="40" required/>
								</span>
							</label>
						</p>
						<p>
							<label> Your Email (required)
								<br /> 
								<span class="wpcf7-form-control-wrap your-email">
									<input type="email" name="email" value="" size="40" required/>
								</span> 
							</label>
						</p>
						<p>
							<label> Subject<br /> 
								<span class="wpcf7-form-control-wrap your-subject">
									<input type="text" name="subject" value="" size="40" required/>
								</span> 
							</label>
						</p><p>
							<label> Your Message<br /> 
								<span class="wpcf7-form-control-wrap your-message">
									<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" required></textarea>
								</span> 
							</label>
						</p><p>
							<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
							<div class="wpcf7-response-output wpcf7-display-none">
								
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="vc_row-full-width vc_clearfix">
		
	</div>


</div>
