<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Find the position of alphabets</h1>
<body>
    <form action="" method="POST">
        Type alphabet: <input type="text" name="alphabet" value="<?php if (isset($_POST['alphabet']) && !empty($_POST['alphabet'])) {
                                                                        echo $_POST['alphabet'];
                                                                    } ?>"  >
        <button type="submit" name="submit">Ok</button>
    </form><br>
    <?php include 'handle.php'?>

</body>

</html>