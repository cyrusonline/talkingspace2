<?php include 'includes/header.php';?>
					<ul id="topics">
						<li id="main-topic" class="topic topic">
							<div class="row">
								<div class="col-md-2">
									<div class="user-info">
										<img class="avatar pull-left" src="<?php echo BASE_URI;?>images/avatars/avatar1.jpg" />
										<ul>
											<li><strong><?php echo $topic->username;?></strong></li>
											<li><?php echo userPostCount($topic->user_id);?>Posts</li>
											<li><a href="<?php echo BASE_URI;?>topics.php?user=<?php echo $topic->user_id;?>">Profile</a>
										</ul>
									</div>
								</div>
								<div class="col-md-10">
									<div class="topic-content pull-right">
										<p>I just worked in split mode in dreamweaver and paid
											attention to what was happening on the code end. How did you
											learn CSS and HTML? How long did it take you until you were
											proficient?</p>
									</div>
								</div>
							</div>
						</li>
						
						<?php foreach ($replies as $reply):?>
						<li class="topic topic">
							<div class="row">
								<div class="col-md-2">
									<div class="user-info">
										<img class="avatar pull-left" src="<?php echo BASE_URI;?>images/avatars/<?php echo $reply->avatar;?>" />
										<ul>
											<li><strong><?php echo $reply->username;?></strong></li>
											<li><?php echo userPostCount($reply->user_id);?> Posts</li>
											<li><a href="<?php echo BASE_URI;?>topics.php?user=<?php echo $reply->user_id;?>">View Topics</a>
										</ul>
									</div>
								</div>
								<div class="col-md-10">
									<div class="topic-content pull-right">
										<p>html and css are basic there not much to them the main
											then you need to learn is how elements interact as one
											element can make another element behave differently this is
											the most complex part including cross brower compatability</p>
									</div>
								</div>
							</div>
						</li>
						
						<?php endforeach; ?>	
					</ul>
					<h3>Reply to Topic</h3>
					<form role="form">
						<div class="form-group">
						<textarea id="reply" rows="10" cols="80" class="form-control" rows="5" id="comment"></textarea>
						<script>
							CKEDITOR.replace('reply');
						
						</script>
						</div>
					</form>

<?php include 'includes/footer.php';?>