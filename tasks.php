<?php
include_once "Database/functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>لیست برنامه ها</title>
</head>
<body>
    <h2>لیست برنامه ها</h2>
    <hr>
    <table>
        <thead>
            <tr>
                <th>عنوان</th>
                <th>تاریخ</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>
        </thead>

        <tbody>

        <?php
            $tasks = show_task();
            foreach ($tasks as $data):
        ?>

        <tr>
            <td><?php echo $data['title']; ?></td>
            <td><?php echo $data['date']; ?></td>
            <td>
                <a href="delete_task.php?id=<?php echo $data['id']; ?>">حذف</a>
            </td>
            <td>
                <a href="edit_task.php?id=<?php echo $data['id']; ?>">ویرایش</a>
            </td>
        </tr>
        <?php
            endforeach;
        ?>
        </tbody>

    </table>
</body>
</html>
