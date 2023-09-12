<?php require('core/init.php'); ?>

<?php

//Object Toppic class
$toppic = new Toppic;

//Get category From URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get Template & Assign Vars
$template = new Template('templates/topics.php');

//Category name display
if(isset($category)){
	$template->topics = $toppic->getByCategory($category);
	$template->title = 'Posts In "'.$toppic->getCategory($category)->name.'"';
}

if(!isset($category)){
	$template->topics = $toppic->getAllTopics();
}

//Assign Vars
$template->getTotalTopics = $toppic->getTotalTopics();
$template->getTotalCategories = $toppic->getTotalCategories();

//Display template
echo $template;