<?php require 'core/init.php'; ?>

<?php 
//Create Topic Object
$topic = new Topic();

//Get categorhy from URL
$category = isset($_GET['category']) ? $_GET['category']: null;

//Get user from URL
//$user_id = isset($_GET['user']) ? $_GET['user']: null;
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

//Get Template and Assign vars
$template = new Template('templates/topics.php');

//Assign Vars

if (isset($category)) {
	$template->topics = $topic->getByCategory($category);
	$template->title = 'Posts In "'.$topic->getCategory($category)->name.'"';
	
}

//Check for user filter
// if(isset($user_id)){
// 	$template->topics = $topic->getByUser($user_id);
// 	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
	
// }

if(isset($user_id)){
	$template->topics = $topic->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
	echo("checked");
}

if(!isset($category) && !isset($user_id)){
	$template->topics = $topic->getAllTopics();
}


$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
//Display template
echo $template;


?>