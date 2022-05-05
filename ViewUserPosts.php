<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "a296h438", "Paec7ahR", "a296h438");
/* check connection */
if ($mysqli->connect_errno) {
  alert("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$query = "SELECT post_id, content, author_id FROM Posts ORDER by ID";
if ($result = $mysqli->query($query)) {
  /* fetch associative array */
  while ($row = $result->fetch_assoc()) {
    printf ("%s (%s)\n", $row["post_id"], $row["content"], $row["author_id"]);
  }
  /* free result set */
  $result->free();
}
/* close connection */
$mysqli->close();
?>
