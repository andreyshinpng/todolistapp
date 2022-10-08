<?php

$dbcon = new mysqli('localhost', 'root', 'lol123', 'todolistapp_db');

if (!$dbcon) {
    echo 'Error';
}