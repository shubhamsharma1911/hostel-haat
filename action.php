<?php
include_once 'class/Blog.php';
$obj = new Task();
$_post = $_POST;
// insert record in database
if(!empty($post['action']) && $post['action']=="create") {
	$obj->setItem($_post['name']);
	$obj->setItem($_post['email']);
	$obj->setItem($_post['content']);
	$status = $obj->create();
}
?>
