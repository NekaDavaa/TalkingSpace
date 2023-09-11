<?php require('core/init.php'); ?>

<?php

//Object Toppic class
$toppic = new Toppic;



//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Vars
$template->topics = $toppic->getAllTopics();



//Display template
echo $template;