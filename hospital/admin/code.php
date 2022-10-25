<?php 
session_start();
require '../config.php';
$room_type = "";
$room_number = "";
$room_capacity = "";

if(isset($_POST['save'])){
    $room_type = $_POST['room_type'];
    $room_number = $_POST['room_number'];
    $room_capacity = $_POST['room_capacity'];
    $mysqli->query("INSERT INTO room(room_type, room_number, room_capacity) VALUES ('$room_type', '$room_number', '$room_capacity') ") or die($mysqli->error);

    $_SESSION['message'] ="Record has been saved!";
    $_SESSION['msg_type'] = "success";
    header("location:rooms.php");

}

if(isset($_GET['delete'])){
    $room_id = $_GET['delete'];
    $mysqli->query("DELETE FROM room WHERE room_id=$room_id") or die($mysqli->error());

    $_SESSION['message'] ="Record has been deleted";
    $_SESSION['msg_type'] = "danger";


    header("location:rooms.php");
}

if(isset($_GET['edit'])){
    $room_id = $_GET['room_id'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM room WHERE room_id=$room_id") or die($mysqli->error());

        $row = $result->fetch_array();
        $room_type = ['room_type'];
        $room_number = ['room_number'];
        $room_capacity = ['room_capacity'];
}

?>