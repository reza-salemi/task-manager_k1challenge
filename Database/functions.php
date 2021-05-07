<?php
include_once "connection.php";


function insert($data){
    $connection = config();
    $query = "INSERT INTO tasks_tbl (title,date) VALUES ('$data[title]','$data[date]')";
    mysqli_query($connection,$query);
}

function show_task(){
    $connection = config();
    $query = "SELECT * FROM tasks_tbl";
    $row =mysqli_query($connection,$query);

    while ($res = mysqli_fetch_assoc($row))
    {
        $result[] = $res;

    }
    return $result;
}

function show_edit($id)
{
    $connection = config();
    $query = "SELECT * FROM tasks_tbl WHERE id='$id'";
    $row = mysqli_query($connection,$query);
    $result = mysqli_fetch_assoc($row);
    return $result;
}

function update_task($id,$data)
{
    $connection = config();
    $query = "UPDATE tasks_tbl SET title ='$data[title]',date = '$data[date]' WHERE id='$id' ";
    mysqli_query($connection,$query);
}

function delete_task($id)
{
    $connection = config();
    $query = "DELETE FROM tasks_tbl WHERE id='$id'";
    mysqli_query($connection,$query);
}