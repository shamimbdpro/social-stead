</br>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
					<article id="post-3353" class="post-3353 page type-page status-publish hentry">
							<div class="vc_row wpb_row vc_row-fluid">
								<?php
									if($alldata):
										foreach($alldata as $data):
								?>
								<div class="wpb_column vc_column_container vc_col-sm-4">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<a href="<?php echo base_url(); ?>service-pack/<?php echo $data->id; ?>" class="ult_price_action_button" style="">
												<div class="ult_pricing_table_wrap ult_info_table ult_design_3  ult-cs-custom ">
													<div class="ult_pricing_table " style="background:#0E807C;color:#ffffff; ">
														<div id="Info-table-wrap-6305" class="ult_pricing_heading">
															<h3 class="ult-responsive"  data-ultimate-target='#Info-table-wrap-6305 h3'  data-responsive-json-new='{"font-size":"desktop:30px;","line-height":""}'  style="font-weight:normal;"><?php echo $data->name; ?>
															</h3>
															<h5 class="ult-responsive"  data-ultimate-target='#Info-table-wrap-6305 h5'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":""}'  style="font-weight:normal;"><?php echo $data->type; ?>
															</h5>
														</div>
														<div class="ult_price_body_block" style="background: #B8C2B7;">
															<div class="ult_price_body">
																<div class="ult_price">
																	<div class="ult-just-icon-wrapper  ">
																		<div class="align-icon" style="text-align:center;">
																			<div class="aio-icon circle "  style="color:#007bb5;background:#ffffff;font-size:100px;display:inline-block;"> 
								<?php
									if($thisdata):
										foreach($thisdata as $dadta):
								?>

																				<i class="<?php echo $dadta->icon; ?>">
							<?php
								endforeach;
							endif;
							?>																			</i>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div
											></a>
										</div>
									</div>
								</div>
							<?php
								endforeach;
							endif;
							?>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>

