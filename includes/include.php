<?php
// Create (connect to) SQLite database in file
$db = new PDO('sqlite:../db.sqlite3');
// Set errormode to exceptions
$db->setAttribute(PDO::ATTR_ERRMODE,
  PDO::ERRMODE_EXCEPTION);

$db->exec("CREATE TABLE IF NOT EXISTS USER (
                    id INTEGER PRIMARY KEY, 
                    name TEXT)");