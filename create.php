<?php require 'core/init.php'; ?>

<?php 
//Create Topic Object
$topic = new Topic();

if (isset($_POST['do_create'])){
	//create Data Array
	$data = array();
	$data['title'] = $_POST['title'];
	$data['body'] = $_POST['body'];
	$data['category_id'] = $_POST['category'];
	$data['user_id'] = getUser()['user_id'];
	$data['last_activity'] = date("Y-m-d H:i:s");
	
	
	
	
}


//Get Template and Assign vars
$template = new Template('templates/create.php');

//Assign Vars

//Display template
echo $template;


?>