<?php

/*
 * Format Date
 */

function formatDate($date){
	$date = date("F j, Y, g:i a",strtotime($date));
	return $date;
		
}

 /*
  * URL Format
  */
 
 function urlFormat($str)
{
	// convert spaces to '-', remove characters that are not alphanumeric
	// or a '-', combine multiple dashes (i.e., '---') into one dash '-'.
	$str = ereg_replace("[-]+", "-", ereg_replace("[^a-z0-9-]", "",
			strtolower( str_replace(" ", "-", $str) ) ) );
	return $str;
}

/*
 * Add classname active if category is active
 */

function is_active($category){
	if(isset($_GET['category'])){
		if($_GET['category']==$category){
			return 'active';
		}else {
			return '';
		}
	}else {
		if($category == null){
			return 'active';
		}
	}
}