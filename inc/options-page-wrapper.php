<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>WP Toggle Comments Plugin </h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>
                            <?php echo __('Options of wp-toggle-comments','wp-toggle-comments'); ?></span></h3>
						<div class="inside">

							<form name="wp_toggle_comments_form" method="post" action="">

								<input type="hidden" name="wp_toggle_comments_form_submitted" value="Y">

								<table class="form-table">
									
									<tr valign="top">
										<td scope="row"><label for="tablecell">Option 1</label></td>
										<td><input name="option1" id="tablecell" type="text" value="<?php echo $option1;?>" class="regular-text" /></td>
									</tr>
                                    
                                    <!-- exmpmle of insert img - for logo or somthing after </br> -->
							        <!-- <img src="<?php// echo $plugin_url . '/images/img.png'; ?>"> -->

								</table>

							<p><input class="button-primary" type="submit" name="Example" value="<?php _e( 'Save' ); ?>" /> </p>

							</form>

						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
					
						<h3><span><?php echo __('Buy Me A Coffee','wp-toggle-comments'); ?>  :)</span></h3>
						<div class="inside">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="7HXX29E426HRJ">
                            <input type="image" src="https://www.paypalobjects.com/en_US/IL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->
