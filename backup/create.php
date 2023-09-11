<?php require('core/init.php'); ?>

<?php
//Get Template & Assign Vars
$template = new Template('templates/create.php');

//Assign Vars
$template->heading = 'This is the template heading';

//Display template
echo $template;