<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My notes';

$notes= $db->query('select * from notes ')->fetchAll();


require "views/notes.view.php";

