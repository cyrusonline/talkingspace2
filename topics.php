<?php require 'core/init.php'; ?>

<?php 
//Create Topic Object
$topic = new Topic();

//Get Template and Assign vars
$template = new Template('templates/topics.php');

//Assign Vars

//Display template
echo $template;


?>