
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			
					<!-- //header-ends -->
								<div class="outter-wp">
								<!--sub-heard-part-->
								   <div class="sub-heard-part">
								   <ol class="breadcrumb m-b-0">
										<li><a href="index.html">Home</a></li>
										<li class="active">Editors</li>
									</ol>
								   </div>
								  <!--//sub-heard-part-->
										<div class="graph-visual">
											<h2 class="inner-tittle">Editors </h2>
											           <div class="maark-edit graph">
													       						<form>
													  <div class="form-group">
														<input class="form-control" name="title" type="text" placeholder="Title?">
													  </div>
																	<div class="md-editor" id="1454925081632">
																	
																	<textarea name="content" data-provide="markdown" rows="15" class="md-input" style="resize: none;">### Hello there
																			How are you?

																			I have bellow task for you :

																			Select from this text...
																			Click the bold on THIS WORD and make THESE ONE italic
																			Link GOOGLE to google.com
																			Test to insert image (and try to tab after write the image description)
																			Test Preview
																			And ending here... Click "List"

																			Enjoy!</textarea>
																					<div class="md-fullscreen-controls">
																						<a href="#" class="exit-fullscreen" title="Exit fullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a>
																					</div>
																				</div>
																				<div class="publish">
																						<label class="checkbox">
																							<input name="publish" type="checkbox"> Publish
																						  </label>
																				</div>
																						 
																						  <hr>
																						  <button type="submit" class="btn">Submit</button>
																</form>
														</div>
																  <script>  
																     $("#target-editor").markdown({
																			  savable:true,
																			  onShow: function(e){
																				alert("Showing "
																				  +e.$textarea.prop("tagName").toLowerCase()
																				  +"#"
																				  +e.$textarea.attr("id")
																				  +" as Markdown Editor...")
																			  },
																			  onPreview: function(e) {
																				var previewContent

																				if (e.isDirty()) {
																				  var originalContent = e.getContent()

																				  previewContent = "Prepended text here..."
																						 + "\n"
																						 + originalContent
																						 + "\n"
																						 +"Apended text here..."
																				} else {
																				  previewContent = "Default content"
																				}

																				return previewContent
																			  },
																			  onSave: function(e) {
																				alert("Saving '"+e.getContent()+"'...")
																			  },
																			  onChange: function(e){
																				console.log("Changed!")
																			  },
																			  onFocus: function(e) {
																				alert("Focus triggered!")
																			  },
																			  onBlur: function(e) {
																				alert("Blur triggered!")
																			  }
																			})
																  </script>
														<div class="post graph">
														
														<form class="text-area">
															<textarea required> What are you doing...</textarea>
														</form>
														<div class="post-at">
															<ul class="icon">
																
																
																<div class="post-file">
																<i class="fa fa-location-arrow"></i>
																<input id="input-1" name="input1[]" type="file" multiple class="">
																</div>
																<div class="post-file">
																<i class="fa fa-camera"></i>
																<input id="input-2" name="input2[]" type="file" multiple class="">
																</div>
																<div class="post-file">
																<i class="fa fa-video-camera"></i>
																<input id="input-3" name="input3[]" type="file" multiple class="">
																</div>
																<div class="post-file">
																<i class="fa fa-microphone"></i>
																<input id="input-4" name="input4[]" type="file" multiple class="">
																</div>
																
																<script>
																$(document).on('ready', function() {
																	$("#input-1").fileinput({showCaption: false});
																});
																</script>
																<script>
																$(document).on('ready', function() {
																	$("#input-2").fileinput({showCaption: false});
																});
																</script>
																<script>
																$(document).on('ready', function() {
																	$("#input-3").fileinput({showCaption: false});
																});
																</script>
																<script>
																$(document).on('ready', function() {
																	$("#input-4").fileinput({showCaption: false});
																});
																</script>
															</ul>
															<form class="text-sub">
																<input type="submit" value="post">
															</form>
															<div class="clearfix"> </div>
														</div>
													</div>
											</div>
										
									</div>
									<!--//outer-wp-->
								</div>
									 <!--footer section start-->
										
									<!--footer section end-->
								</div>
				<!--//content-inner-->
		<!--/sidebar-menu-->
				
							  <div class="clearfix"></div>		
							</div>
							
