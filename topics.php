<?php require('core/init.php'); ?>
<?php

   //create topics object
   $topic = new Topic;

   //Get category form URL
   $category = isset($_GET['category']) ? $_GET['category'] : null;             // where this category!!!!!!

   //Get User form URL
   $user_id = isset($_GET['user']) ? $_GET['user'] : null;             // where this category!!!!!!

  //Get Template $ Assign variables
  $template = new Template('templates/topics.php');

  //Assign Template Variables
  if(isset($category))
  {
    $template->topics = $topic->getBYCategory($category);
    $template->title  = 'POST IN "'.$topic->getCategory($category)->name.'"';
  }

  //cheack for user filter
  if(isset($user_id))
  {
    $template->topics = $topic->getByUser($user_id);
    //$template->title  = 'POSTES BY "'.user->getUser($user_id)->username.'"';
  }

  //cheack for Category filter
  if(!isset($Category) && !isset($user_id))
  {
    $template->topics = $topic->getAllTopics();
  }

  $template->totalTopics = $topic->getTotalTopics();
  $template->totalCatergories = $topic->getTotalCategories();



  //Assign vars
  echo $template;


?>
