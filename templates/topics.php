<?php include('includes/header.php'); ?>	
		<?php if ($topics) : ?>
		<ul id="topics">
							<?php foreach ($topics as $topic) : ?>
							
							<li class="topic">
							<div class="row">
							<div class="col-md-2">
								<img class="avatar pull-left" src="img/gravatar.jpg" />
							</div>
							<div class="col-md-10">
								<div class="topic-content pull-right">
									<h3><a href="topic.php?id=<?php echo $topic->id; ?>"><?php echo $topic->title ?></a></h3>
									<div class="topic-info">
										<a href="category.php"><?php echo $topic->name ?></a> >> <a href="profile.php"><?php echo $topic->username ?></a> >> Posted on: <?php echo FormatDate($topic->create_date) ?>
										<span class="badge pull-right"><?php echo ReplyCount($topic->id);?></span>
									</div>
								</div>
							</div>
						</div>
					</li>
				<?php endforeach ?>
						</ul>
					<?php else : ?>
						<p>No topics to display </p>
					<?php endif; ?>	
						<h3>Forum Statistics</h3>
					<ul>
						<li>Total Number of Users: <strong>52</strong></li>
						<li>Total Number of Topics: <strong><?php echo $getTotalTopics ?></strong></li>
						<li>Total Number of Categories: <strong><?php echo $getTotalCategories ?></strong></li>
					</ul>
<?php include('includes/footer.php'); ?>	