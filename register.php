<?php require 'core/init.php'; ?>

<?php 
//Create Topic Object
$topic = new Topic();
//Create User Object
$user = new User();
//Create Validate Object
$validate = new Validator();


if (isset($_POST['register'])) {
	//Create Daata Array
	$data = array();
	$data['name']=$_POST['name'];
	$data['email']=$_POST['email'];
	$data['username']=$_POST['username'];
	$data['password']=md5($_POST['password']);
	$data['password2']=md5($_POST['password2']);
	$data['about']=$_POST['about'];
	
	$data['last_activity']=date("Y-m-d H:i:s");
	
	//Upload Avatar Image
	
	/*
	if ($user->uploadAvatar()) {
		
		$data['avatar']=$_FILES["avatar"]["name"];
			
	}else{
		$data['avatar'] = 'noimage.png';
	}
	
	//Register
	if($user->register($data)){
		redirect('index.php','You are registered and can now login','success');
	}else {
		redirect('index.php','YSomething went wrong with registration','error');
		
	}
	*/
}
//Get Template and Assign vars
$template = new Template('templates/register.php');

//Assign Vars

//Display template
echo $template;


?>