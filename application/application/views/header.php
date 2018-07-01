<?php 
	if($logo): 
		foreach($logo as $data): 
?>
<div class="row head3m">
	<div class="suppa-sticky-holder" style="height:85px !important;"><div class="header3 suppaMenu_wrap suppaMenu_wrap_wide_layout suppa-sticky">
		<div id="menu-header"><a href="<?php echo base_url(); ?>social.com/" class="suppa_menu_logo logo_left_menu_right"><img src="<?php echo base_url(); ?>libs/image/Company_logo/<?php echo $data->company_logo;	 ?>"></a>
			<div "="" class=" suppa_menu suppa_menu_dropdown suppa_menu_1"><a href="http://localhost/social.com/" class="current-menu-item current_page_item menu-item-home suppa_top_level_link suppa_menu_position_left"><span class="suppa_item_title">Home</span></a>
			</div>
			<div style=" float:none;  " class=" suppa_menu suppa_menu_dropdown suppa_menu_2"><a href="<?php echo base_url(); ?>social.com/all-services/" class="suppa_top_level_link suppa_menu_position_left"><span class="suppa_item_title">All Services</span></a></div>
			<div style=" float:none;  " class=" suppa_menu suppa_menu_dropdown suppa_menu_3"><a href="<?php echo base_url(); ?>faq/" class="suppa_top_level_link suppa_menu_position_left"><span class="suppa_item_title">FAQ</span></a></div>
			<div style=" float:none;  " class=" suppa_menu suppa_menu_dropdown suppa_menu_4"><a href="<?php echo base_url(); ?>contact-us/" class="suppa_top_level_link suppa_menu_position_left"><span class="suppa_item_title">Contact Us</span></a></div>
		</div>
	</div></div>
</div>
<?php 
	endforeach;
	endif;
?>