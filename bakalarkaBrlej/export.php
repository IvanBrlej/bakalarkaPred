<?php
include('includes/header.php');

$query = "SELECT * FROM record";
$result = mysqli_query($con, $query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/src/css/style.css">
    <title>Export</title>
</head>
<body>

<div class="container">
    <form method='post' action='export_handler.php'>
        <div class="container">
        <input type='submit' class="button_send" value='Export' name='Export'>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Time of submission</th>
                <th>Subject</th>
            </tr>
            <?php
            $query = "SELECT * FROM record ORDER BY id asc";
            $result = mysqli_query($con,$query);
            $record_arr = array();
            while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $username = $row['username'];
                $question = $row['question'];
                $answer = $row['answer'];
                $time_of_submission = $row['time_of_submission'];
                $subject = $row['subject'];
                $record_arr[] = array($id,$username,$question,$answer,$time_of_submission, $subject);
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $question; ?></td>
                    <td><?php echo $answer; ?></td>
                    <td><?php echo $time_of_submission; ?></td>
                    <td><?php echo $subject; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        $serialize_record_arr = serialize($record_arr);
        ?>
        </div>
        <textarea name='export_data' style='display: none;'><?php echo $serialize_record_arr; ?></textarea>
    </form>
</div>

</body>
</html>
