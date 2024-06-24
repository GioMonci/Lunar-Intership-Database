<?php

//post method to check if they got here legit
if(isset($_POST['result-submit'])){

    require 'dbh.inc.php';
    $conn = mysqli_connect("localhost", "root", "", "internship");

    $nameFull = $_POST['name'];
    $userName = $_POST['uid'];
    $id = $_POST['id'];


    $sql = "SELECT nameUsers, jobTitle, jobDescription, review, rating
            FROM users INNER JOIN survey ON users.idUsers = survey.idUsers
            WHERE users.nameUsers ='$nameFull' and users.uidUsers= '$userName' and users.idUsers = '$id';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Name: ";
            echo $row['nameUsers'];
            echo '<br>';
            echo "Job Title: ";
            echo $row['jobTitle'];
            echo '<br>';
            echo "Job Description: ";
            echo $row['jobDescription'];
            echo '<br>';
            echo "Review: ";
            echo $row['review'];
            echo '<br>';
            echo "Rating 1-10: ";
            echo $row['rating'];
            echo '<br>';
            echo '<br>';

        }
    }

}
else{
    header("Location: ../troll.php?error=sqlError");
    exit();
}