<?php

//post method to check if they got here legit
if(isset($_POST['survey-submit'])){

    require 'dbh.inc.php';
    $conn = mysqli_connect("localhost", "root", "", "internship");

    $jobT = $_POST['job'];
    $description = $_POST['descript'];
    $reviews = $_POST['review'];
    $rating = $_POST['rate'];
    $userId = $_POST['idUser'];
    $compId = $_POST['idComp'];
    $internId = $_POST['idIntern'];



    $sql = "INSERT INTO survey(jobTitle, jobDescription, review, rating, idUsers, compId, internshipId) 
            VALUE ('$jobT','$description','$reviews',' $rating','$userId','$compId','$internId');";
    mysqli_query($conn, $sql);
    header("Location: ../survey.php?survey=success");
}
else{
    header("Location: ../survey.php?error=sqlError");
    exit();
}