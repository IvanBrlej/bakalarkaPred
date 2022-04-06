<?php
include ("includes/header.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/src/css/style.css">
    <title>Add subject</title>
</head>
<body>
<div class="container" style="margin-top: 20px">
    <h3 style="text-align: center">Add subject</h3>

    <form id="subjectForm" method="post" action="handlers/subject_handler.php" name="subjectForm" enctype="multipart/form-data">
        <input type="hidden" name="userLoggedIn" value="<?php echo $userLoggedIn; ?>">
        <div class="container" style="margin-bottom: 15px;">
            <label for="subject" class="col-sm-2 col-form-label">Add subject </label>
            <div class="col-container-10" style="margin-bottom: 15px;">
                <input type="text" class="form-control" id="addSubject" name="addSubject" style="max-width: 50%; text-align: center">
            </div>
        </div>
        <div class="container">
            <div class="col-sm-10">
                <button type="submit" class="button_send" id="addSubjectButton" name="addSubjectButton">Add Subject</button>
            </div>
        </div>
    </form>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>