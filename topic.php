<?php require('core/init.php'); ?>
<?php

   //create topic object
   $topic = new Topic;

   //get ID form URL
   $topic_id = $_GET['id'];

  //Get Template $ Assign variables
  $template = new Template('templates/topic.php');

  //Assign vars
  $template->topic = $topic->getTopic($topic_id);
  $template->replies = $topic->getReplies($topic_id);
  $template->title = $topic->getTopic($topic_id)->title;

  //Display template
  echo $template;


?>
