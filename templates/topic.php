<?php include_once ('includes/header.php');?>
<ul id="topics">
	<li id="main-topic" class="topic">
		<div class="row">
			 <div class="col-md-2">
				 <img style="height:80px; margin:0; padding:0;" class="avatar pull-left" src="images/avatars/<?php echo $topic->avatar; ?>"/>
				 <ul>
					 <li><strong><?php echo $topic->username; ?></strong></li>
					 <li><?php echo userPostCount($topic->user_id); ?></li>
				   <li><a href="<?php echo BASE_URL; ?>topics.php?user=<?php echo $topic->user_id; ?>">View Topics</a></li>
				 </ul>
			 </div>
  		 <div class="col-md-10">
				<div class="topic-content pull-right">
					<?php echo $topic->body; ?>
				</div>
			</div>
		</div>
	</li>
	<br>
	<?php foreach ($replies as $reply) : ?>
		<li class="topic topic">
			<div class="row">
     			<div class="col-md-2">
				    <div class="user-info">
					    <img style="height:80px; margin:0; padding:0;" class="avatar pull-left" src="images/avatars/<?php echo $topic->avatar; ?>"/>
					    <ul>
						    <li><strong><?php echo $reply->username; ?></strong></li>
						    <li><?php echo userPostCount($reply->user_id); ?> Posts</li>
						    <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $reply->user_id; ?>">Profile</a></li>
					    </ul>
				    </div>
				</div>
				<div class="col-md-10">
					<div class="topic-content pull-right">
						<?php echo $reply->body; ?>
					</div>
				</div>
			</div>
		</li>
		<br>
  <?php endforeach ;?>
</ul>

<h3>Reply To Topic</h3>
<form role="form">
	<div class="form-group">
		<textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
		<script>CKEDITOR.replace('reply');</script>
	</div>
	<button type="submit" class="btn btn-default">submit</button>
</form>

<?php include_once ('includes/footer.php');?>
