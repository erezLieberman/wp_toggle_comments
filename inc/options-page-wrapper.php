<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>WP Toggle Comments Plugin</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Let's Get Started!</span></h3>
						<div class="inside">

							<form name="wp_toggle_comments_form" method="post" action="">

								<input type="hidden" name="wp_toggle_comments_form_submitted" value="Y">

								<table class="form-table">
									
									<tr>
										<th class="row-title"><b>Options</b></th>
										<th><b>Values</b></th>
									</tr>
									<tr valign="top">
										<td scope="row"><label for="tablecell">Option 1</label></td>
										<td><input name="option1" id="tablecell" type="text" value="<?php echo $option1;?>" class="regular-text" /></td>
									</tr>

									<tr valign="top" class="alternate">
										<td scope="row"><label for="tablecell2">option 2 <code>alternate</code></label></td>
										<td>
											<select name="" id="tablecell2">
											<option selected="selected" value="">Example option</option>
											<option value="">foo</option>
											</select>
										</td>
									</tr>

									<tr valign="top">
										<td scope="row"><label>option 3</label></td>
										<td>
											<fieldset>
												<legend class="screen-reader-text"><span>input type="radio"</span></legend>
												<label title='g:i a'><input type="radio" name="example" value="" /> <span>description</span></label><br />
												<label title='g:i a'><input type="radio" name="example" value="" /> <span>description #2</span></label>
											</fieldset>
										</td>
									</tr>

									<tr valign="top">
										<td scope="row"><label for="tablecell4">Option 4</label></td>
										<td>
											<fieldset>
												<legend class="screen-reader-text"><span>Fieldset Example</span></legend>
												<label for="users_can_register">
													<input name="users_can_register" type="checkbox" id="tablecell4" value="1"  />
												</label>
											</fieldset>
										</td>
									</tr>

									<tr valign="top">
										<td scope="row"><label for="tablecell5">Option 5</label></td>
										<td>
											<textarea id="tablecell5" name="" cols="80" rows="10">without class</textarea>
										</td>
									</tr>

								</table>

							<p><input class="button-primary" type="submit" name="Example" value="<?php _e( 'Save' ); ?>" /> </p>

							</form>

						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->

					<div class="postbox">
					
						<h3><span>Alt content if needed</span></h3>
						<div class="inside">
							
							exmpmle of insert img - for logo or somthing after </br>
							<img src="<?php echo $plugin_url . '/images/img.png'; ?>">
							
						
						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
					
						<h3><span>Sidebar Content Header</span></h3>
						<div class="inside">
							Content space
						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->
