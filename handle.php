<?php
if (isset($_POST['submit'])) {
    $alphabet = $_POST['alphabet'];
    $alphabet_length = strlen($alphabet);
    for ($i = 0; $i < $alphabet_length; $i++) {
        $ascii_value =  ord(strtoupper($alphabet[$i]));
        if ($ascii_value > 64 && $ascii_value < 91) {
            echo "The position of " . $alphabet[$i] . " is: " . $ascii_value . "<br><br>";
        } else {
            echo "not allowed<br><br>";
        }
    }
}
