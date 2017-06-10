<?php
/*
Create a url friendly slug from a phrase like "This is a post title" to "this-is-a-post-title"
One thing that could be added when using this with a blog site is to run a check so you don't dupe
*/
function slug($text){ 
	$slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $text);
	$slug = strtolower(trim($slug, '-'));
	$slug = preg_replace("/[\/_|+ -]+/", '-', $slug);
	return $slug;
}
?>