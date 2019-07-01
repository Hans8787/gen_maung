<?php 
session_start();

require '../../../index.php';

$id = $_GET["id"];

DB::i("DELETE FROM ideabox WHERE id = $id");

header('Location: mailbox.php');