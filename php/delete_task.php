<?php

require_once 'db_connect.php';

$query = "DELETE FROM tasks WHERE Id={$_POST['delete_id']}";
$dbcon->query($query);

header("Location: http://todolistapp");