<?php
    require "header.php"
?>

<div class="result-form">
    <img src="img/chapo.jpg" alt="lmao">
    <h1>Get Surveys</h1>
    <form action="includes/results.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name"> <br> <br>
        <input type="text" name="uid" placeholder="UserName"> <br> <br>
        <input type="number" name="id" placeholder="UserId"> <br> <br>
        <button type="submit" name="result-submit">Submit</button> <br> <br>
    </form>
</div>


<?php
    require "footer.php"
?>
