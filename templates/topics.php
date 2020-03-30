<?php include_once ('includes/header.php');?>
<ul id="topics">
<?php if($topics) : ?>
<?php foreach($topics as $topic) :?>
  <li class="topic">
    <div class="row">
      <div class="col-md-2">
        <img style="height:100px;" class="avatar pull-left" src="images/avatars/<?php echo $topic->avatar; ?>"/>
      </div>
      <div class="col-md-10">
        <div class="topic-content pull-right">
          <h3><a href="topic.php" ><?php echo $topic->title; ?></a></h3>
          <div class="topic-info"style="margin-right:380px;">
            <a href="topics.php?user=<?php echo urlFormat($topic->user_id); ?>">
              <?php echo $topic->name; ?>
            </a>
            >>
            <a href="topics.php?category=<?php echo urlFormat($topic->category_id); ?>"><strong><?php echo $topic->username; ?></strong></a> >>
            <?php echo formatDate($topic->create_date);?>
            <span style="margin-left:30px;" class="badge pull-right"><?php echo replyCount($topic->id); ?></span>
          </div>
        </div>
      </div>
    </div>
  </li>
<?php endforeach ;?>
</ul>
<?php else : ?>
<p>NO TOPICS TO DISPLAY</p>
<?php endif; ?>
<h3>Forum Ststistics</h3>
<ul>
  <li>Total Number of Users: <strong>52</strong></li>
  <li>Total Number of Topic: <strong><?php echo $totalTopics; ?></strong></li>
  <li>Total Number of Categories: <strong><?php echo $totalCatergories; ?></strong></li>
</ul>
<?php include_once ('includes/footer.php');?>
