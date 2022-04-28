<?php
    if (isset($_POST['submit'])) {
        $alphabet = $_POST['alphabet'];
        $upperArr = range('A', 'Z');
        $lowerArr = range('a', 'z');
        if (ctype_upper($alphabet)) {
            echo 'Position of ' . $alphabet .' is:' . (array_search($alphabet, $upperArr) + 1);
        } else {
            echo 'Position of ' . $alphabet .' is:' . (array_search($alphabet, $lowerArr) + 1);
        }
    }
    ?>