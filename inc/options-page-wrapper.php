<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2><?php echo __('WP Toggle Comments Form Fields - Plugin','wp-toggle-comments'); ?> </h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<div class="inside">

							<form name="wp_toggle_comments_form" method="post" action="">

								<input type="hidden" name="wp_toggle_comments_form_submitted" value="Y">

								<table class="form-table">
									
									<tr valign="top">
										<td scope="row"><label for="using_options"> <?php echo __('Using Options','wp-toggle-comments'); ?></label></td>
										<td>
                                            
                                            
                                            <select name="using_options" id="">
                                                
                                    <option 
                                        <?php
                                            if($using_options == "enable_in_all"){echo'selected="selected"'; } ?>
                                            value="enable_in_all">
                                           <?php echo __('Enable in all posts and pages','wp-toggle-comments'); ?>
                                    </option>

                                    <option 
                                        <?php
                                            if($using_options == "enable_in_shortcode_only"){echo'selected="selected"'; } ?>
                                            value="enable_in_shortcode_only">
                                          <?php echo __('Enable in posts and pages that have shortcode inside','wp-toggle-comments'); ?>
                                    </option>

                                    <option 
                                        <?php
                                            if($using_options == 'disable'){echo 'selected="selected"'; } ?>
                                            value="disable">
                                           <?php echo __('Disable','wp-toggle-comments'); ?>
                                    </option>

                                            </select>
                                           

                                        </td>
									</tr>
                                    
                                   
                                    <!-- exmpmle of insert img - for logo or somthing after </br> -->
							        <!-- <img src="<?php// echo $plugin_url . '/images/img.png'; ?>"> -->

								</table>
                                 <h4><?php echo __('If you choose the second option - "Enable in posts and pages that have shortcode inside",</br> you need to add this shortcode : [wp_toggle_comments] inside the content editor of post ot page','wp-toggle-comments'); ?></h4>

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
