<?php include "database.php";

$title = '';
$body = '';

    if (isset($_POST['submit'])) {
        // $title = $_POST['title'];
        // $body = $_POST['body'];

        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if(!empty($title) || !empty($body)){
        $sql = "INSERT INTO note (title, body) values ('$title', '$body')";

        if(mysqli_query($conn, $sql)){
            // Succes
            header('Location: notes.php');
        } else{
            echo 'Error: ' . mysqli_error($conn) ;
        }
    }


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
        <div class="main">
            <div class="title-area">
                <img src="img/img-1.jpg" alt="App icon">
                <h1>Rohit's Journal</h1>
                <p>My daily thoughts</p>
            </div>
            <form action="index.php" method="POST"> 
                <div class="input-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter title here" >
                </div>
                <div class="input-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" rows="10" placeholder="Enter text here" ></textarea>
                </div>
                <input name="submit" type="submit" value="Save" class="btn">
            </form>
        </div>
    </div>
</body>
</html>