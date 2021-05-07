<?php
include_once "Database/functions.php";

$id = $_GET['id'];
$tasks = show_edit($id);

if(isset($_POST['submit'])){
    $data = $_POST['frm'];
    update_task($id,$data);
    header("location:tasks.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>ویرایش برنامه ها</title>
</head>
<body>
<div class="container">

    <h1>ویرایش برنامه ها</h1>
    <hr>

    <form method="post">

        <div class="form-group">
            <label>نام تسک:</label>
            <input clas type="text" name="frm[title]" class="form-control" value="<?php echo $tasks['title']?>">
        </div>

        <div class="form-group">
            <label>تاریخ:</label>
            <input type="date" name="frm[date]" class="form-control" value="<?php echo $tasks['date']?>">
        </div>
        <input type="submit" name="submit" class="btn" value="ویرایش">
    </form>

</div>
</body>
</html>
