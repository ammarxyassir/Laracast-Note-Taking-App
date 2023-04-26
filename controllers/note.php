<?php
$config = require "./config.php";
$name = "Notes";
$currentUserId = 1;

$db = new Database($config['database']);

$note = $db ->query("select * from notes where id = :id" , ['id' => $_GET['id']])->findOrFail(); 

authorize(($note['user_id'] == $currentUserId));

require "views/note.view.php";