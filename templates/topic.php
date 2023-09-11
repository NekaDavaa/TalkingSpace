<?php include('includes/header.php'); ?>		

<ul id="topics">
					<li id="main-topic" class="topic topic">
						<div class="row">
							<div class="col-md-2">
								<div class="user-info">
									<img class="avatar pull-left" src="img/gravatar.jpg" />
									<ul>
										<li><strong>BradT81</strong></li>
										<li>43 Posts</li>
										<li><a href="profile.php">Profile</a>
									</ul>
								</div>
							</div>
							<div class="col-md-10">
								<div class="topic-content pull-right">
									<p>I just worked in split mode in dreamweaver and paid attention to what was happening on the code end. 
									How did you learn CSS and HTML? How long did it take you until you were proficient?</p>
								</div>
							</div>
						</div>
					</li>
									</ul>

	<h3>Reply To Topic</h3>
				<form role="form">				
  					<div class="form-group">
						<textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
						<script>
							CKEDITOR.replace( 'reply' );
            			</script>
  					</div>
 					 <button type="submit" class="btn btn-default">Submit</button>
				</form>

<?php include('includes/footer.php'); ?>	