<?php
include("includes/header.php");

/* Delete produktu podla id*/
    $id = $_GET["id"];
    mysqli_query($con, "DELETE FROM questions where id=$id");
    header("Location: http://localhost:63342/bakalarkaBrlej/edit_subject.php");
?>
