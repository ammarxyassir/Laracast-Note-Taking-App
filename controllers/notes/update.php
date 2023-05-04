<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

//find corresponding note

$note = $db->query("select * from notes where id = :id", ['id' => $_POST['id']])->findOrFail();

//authorize

authorize($note['user_id'] === $currentUserId);

//validate the form

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

//if no validation error, update the database

if (count($errors)) {
    return view('notes/edit.view.php', [
        'name' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

//redirect

header('location: /notes');
die();

