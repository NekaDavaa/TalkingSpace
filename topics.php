<?php require('core/init.php'); ?>

<?php

//Object Toppic class
$toppic = new Toppic;

//Get category From URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get user From URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

//Get Template & Assign Vars
$template = new Template('templates/topics.php');

//Category name display
if(isset($category)){
	$template->topics = $toppic->getByCategory($category);
	$template->title = 'Posts In "'.$toppic->getCategory($category)->name.'"';
}

//Check For User Filter
if(isset($user_id)){
	$template->topics = $toppic->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
}

//Check For Category Filter
if(!isset($category) && !isset($user_id)){
	$template->topics = $toppic->getAllTopics();
}

//Assign Vars
$template->getTotalTopics = $toppic->getTotalTopics();
$template->getTotalCategories = $toppic->getTotalCategories();

//Display template
echo $template;