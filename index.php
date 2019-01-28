<?php include 'database.php' ?>

<?php
   //create select query
   $query = "SELECT * FROM shouts ORDER BY id DESC";
   $shouts = mysqli_query($con, $query);
   
?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title> shout It</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />

</head>

<body>
    <div id="contain">
        <header>
            <h1><b>WinnersField</b></h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                <li class="shout"><span>
                        <?php echo $row['time']; ?> - </span><b>
                        <?php echo $row['user']; ?>:</b>
                    <?php echo $row['message']; ?>
                </li>

                <?php endwhile; ?>

            </ul>
        </div>
        <div id="input">
            <?php if(isset($_GET['error'])): ?>
            <div class="error">
                <?php echo $_GET['error']; ?>
            </div>
            <?php endif; ?>

            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="enter ur name" />
                <input type="text" name="message" placeholder="type message" />
                <br />
                <input class="shout-btn" type="submit" name="submit" value="send" />
            </form>
        </div>
    </div>
</body>

</html>
