<?php
use App\QueryBuilder;
$db = new QueryBuilder();

//$db ->getAll('posts');

//$db->insert([
//    "title" => "my new note 09"
//], 'posts');

//$db->update([
//    "title" => "my new note 27"
//],27, 'posts');

$db->delete(27, 'posts');