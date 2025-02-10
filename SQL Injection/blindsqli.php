<?php

require_once('../_helpers/strip.php');

// this database contains a table with 2 rows
// This is my first secret (ID = 1)
// This is my second secret (ID = 2)
$db = new SQLite3('test.db');

if (strlen($_GET['id']) < 1) {
  echo 'Usage: ?id=1';
} else {
  // don't sanitize user input, making the SQL query vulnerable to
  // an injection. The query result only returns a row count, making
  // it blind. It can be exploited based on whether the server
  // responds with "Yes!" or "No!"
$stmt = $db->prepare('SELECT count(*) FROM secrets WHERE id = :id'); $stmt->bindValue(':id', $_GET['id'], SQLITE3_INTEGER); $count = $stmt->execute()->fetchArray()[0];

  if ($count > 0) {
    echo 'Yes!';
  } else {
    echo 'No!';
  }
}
