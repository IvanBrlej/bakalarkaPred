<?php
session_start();

require '../includes/connection.php';

$message = '';

if(isset($_POST['submitTest'])) {
    $userLoggedIn = $_POST['userLoggedIn'];
    $subject = $_POST['subject'];
    $date = date('Y-m-d H:i:s');

    $query = $con->prepare("INSERT INTO record VALUES('',?,?,?,?,?)");
    $query->bind_param("sssss", $userLoggedIn,$question ,$answer, $date,$subject);;

    foreach($_POST['answer'] as $answer)
    {
        $question = $_POST['question'];
        mysqli_stmt_execute($query);
    }
}
header("Location: http://localhost:63342/bakalarkaBrlej/homepage.php");
?>