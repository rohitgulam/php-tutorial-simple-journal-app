<?php include "database.php";

    $sql = 'SELECT * FROM note';
    $result = mysqli_query($conn, $sql);
    $notes = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="nav">
        <h1>Journal App</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="notes.php">Journal Notes</a></li>
        </ul> 
    </nav>
    <div class="container">
        <h2>My Notes</h2>
        <div class="notes-area">
            <?php foreach($notes as $note):?>
                <div class="note">
                <h3><?php echo $note['title'] ?></h3>
                <p class="desc">
                    <?php echo $note['body'] ?>
                </p>
                <p class="small"> <?php echo $note['created_at'] ?></p>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>