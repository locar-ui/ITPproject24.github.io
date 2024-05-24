<?php
    session_start();

    if(isset($_SESSION["otherName"]) && isset($_SESSION["otherEmailAddress"]) && isset($_SESSION["checkin"]) && isset($_SESSION["checkout"]) && isset($_SESSION["room"])){
        $otherName = $_SESSION["otherName"];
        $otherEmailAddress = $_SESSION["otherEmailAddress"];
        $checkin = $_SESSION["checkin"];
        $checkout = $_SESSION["checkout"];
        $room = $_SESSION["room"];

        echo " Name: " . $otherName . "<br>";
        echo " Email: " . $otherEmailAddress . "<br>";
        echo " Check In:" . $checkin . "<br>";
        echo " Check Out: " . $checkout . "<br>";
        echo " Room: " . $room . "<br>";

        unset($_SESSION["otherName"]);
        unset($_SESSION["otherEmailAddress"]);
        unset($_SESSION["checkin"]);
        unset($_SESSION["checkout"]);
        unset($_SESSION["room"]);


    }
?>