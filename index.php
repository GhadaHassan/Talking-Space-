<?php require('core/init.php'); ?>
<?php

  //crate Topic object
  $topic = new Topic;
  //Get Template $ Assign variables
  $template = new Template('templates/frontpage.php');

  //Assign vars
  $template->topics = $topic->getAllTopics();
  $template->totalTopics = $topic->getTotalTopics();
  $template->totalCatergories = $topic->getTotalCategories(); 

  echo $template;

?>
