<?php require 'core/init.php'; ?>

<?php 

//Get Template and Assign vars
$template = new Template('templates/frontpage.php');

//Assign Vars
$template->heading = 'This is the template heading';
//Display template
echo $template;


?>