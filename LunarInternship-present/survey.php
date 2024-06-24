<?php
require "header.php"
?>

<div class="survey-form">
    <h1>Create a Survey Here</h1>
    <form action="includes/survey.inc.php" method="post">
        <input type="text" name="job" placeholder="Job Title"> <br> <br>
        <input type="text" name="descript" placeholder="Description"> <br> <br>
        <input type="text" name="review" placeholder="Review"> <br> <br>
        <input type="number" name="rate" placeholder="Rating"> <br> <br>
        <input type="number" name="idUser" placeholder="Your User ID"> <br> <br>
        <input type="number" name="idComp" placeholder="Company ID"> <br> <br>
        <input type="number" name="idIntern" placeholder="Internship ID"> <br> <br>
        <button type="submit" name="survey-submit">Submit</button> <br> <br>
    </form>
</div>

<?php
require "footer.php"
?>

