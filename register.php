<?php require('core/init.php'); ?>

<?php
//Create Topic Object
$topic = new Toppic;

//Create User Object
$user = new User;

if(isset($_POST['register'])){
	//Create Data Array
	$data = array();
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = md5($_POST['password']);
	$data['password2'] = md5($_POST['password2']);
	$data['about'] = $_POST['about'];
	$data['last_activity'] = date("Y-m-d H:i:s");
	
	//Upload Avatar Image
	if($user->uploadAvatar()){
		$data['avatar'] = $_FILES["avatar"]["name"];
	}else{
		$data['avatar'] = 'noimage.png';
	}
	
	//Register User
	if($user->register($data)){
		redirect('index.php', 'You are registered and can now log in', 'success');
	} else {
		redirect('index.php', 'Something went wrong with registration', 'error');
	}
}

//Get Template & Assign Vars
$template = new Template('templates/register.php');

//Display template
echo $template;