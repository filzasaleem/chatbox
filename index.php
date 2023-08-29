<?php
include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SHOUT IT!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id = "container">
        <header>
            <h1>
                SHOUT IT!
            </h1>
        </header>
        <div id = "shouts">
            <ul>
                <?php foreach($shouts as $shout ): ?>
                    <li class="shout"> <?php echo $shout->time."-"; ?> <?php echo $shout->user.":"; ?>  <?php echo $shout->message; ?> </li>
                    <?php endforeach; ?>

            </ul>
        </div>

        <div id = "input">
            <?php if(isset($_GET['error'])) : ?>
            <div class="error"> <?php echo $_GET['error']; ?> </div>

            <?php endif; ?>
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter Your Name">
                <input type="text" name="message" placeholder="Enter a message">
                <br>
                <input  class="shout-btn" type="submit" name="submit" value="Shout it Out">
            </form>
        </div>
    </div>
</body>
</html>
