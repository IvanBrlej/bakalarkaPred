<?php
session_start();
require '../includes/connection.php';

if(isset($_POST['userRole'])) {
    $userRole = $_POST['userRole'];
}

if($userRole > 1) {
    header("Location: http://localhost:63342/bakalarkaBrlej/homepage.php");
    exit();
}

if(isset($_POST['submitQuestion'])) {

    $questionNumber = $_POST['questionNumber'];
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $question = mysqli_real_escape_string($con, $_POST['question']);
    $question = strip_tags($question);
    $imagePath = '';

    if(!empty($_FILES['fileToUpload']['name'])) {
        $imagePath = '/bakalarkaBrlej/assets/src/images/'.$_FILES['fileToUpload']['name'];

        $fullPath = $_SERVER["DOCUMENT_ROOT"].$imagePath;


        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],  $fullPath)) {

            echo "success";
        }
        else{
            echo "failed";

        }
    }

    $query = $con->prepare("INSERT INTO questions VALUES('', ?,?,?,?)");
    $query->bind_param("ssss", $questionNumber, $question,$imagePath,$subject);
    $query->execute();
    $result = $query->get_result();
    header("Location: http://localhost:63342/bakalarkaBrlej/upload_subject.php");
}
else
{
    header("Location: http://localhost:63342/bakalarkaBrlej/test.php");
    exit();
}
?>