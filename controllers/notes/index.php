<?php
$config = require "./config.php";
$name = "Notes";

$db = new Database($config['database']);

$notes = $db ->query("select * from notes")->get(); 

require "views/notes/index.view.php";