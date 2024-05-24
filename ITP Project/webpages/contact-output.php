<?php
    session_start();

    if(isset($_SESSION["otherName"]) && isset($_SESSION["otherEmailAddress"]) && isset($_SESSION["otherNumber"]) && isset($_SESSION["otherMessage"])){
        $otherName = $_SESSION["otherName"];
        $otherEmailAddress = $_SESSION["otherEmailAddress"];
        $otherNumber = $_SESSION["otherNumber"];
        $otherMessage = $_SESSION["otherMessage"];

        echo " Name:"."<br>". $otherName . "<br>"."<br>";
        echo " E-mail:" ."<br>". $otherEmailAddress . "<br>"."<br>";
        echo " Number:" ."<br>". $otherNumber . "<br>"."<br>";
        echo " Message:" ."<br>". $otherMessage . "<br>"."<br>";

        unset($_SESSION["otherName"]);
        unset($_SESSION["otherEmailAddress"]);
        unset($_SESSION["otherNumber"]);
        unset($_SESSION["otherMessage"]);

    }
?>
