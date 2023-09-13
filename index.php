<?php require('core/init.php'); ?>

<?php

//Object Toppic class
$toppic = new Toppic;

$user = new User;

//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Vars
$template->topics = $toppic->getAllTopics();
$template->getTotalTopics = $toppic->getTotalTopics();
$template->getTotalCategories = $toppic->getTotalCategories();
$template->getTotalUsers = $user->getTotalUsers();



//Display template
echo $template;