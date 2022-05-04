<?php
if (isset($_POST['submit'])) {
    $alphabet = $_POST['alphabet'];
    $alphabet_length = strlen($alphabet);
// $result = '';
 echo '<div>';
    for ($i = 0; $i < $alphabet_length; $i++) {
        $ascii_value =  ord(strtoupper($alphabet[$i]));
        if ($ascii_value > 64 && $ascii_value < 91) {
            $result = $ascii_value-64;
          //  echo var_dump($result);
            echo  "<li> the index of '".$alphabet[$i]."' is:".$result."</br></br></li>";
            // echo "The position of " . $alphabet[$i] . " is: " . $ascii_value . "<br><br>";
        } else {
            echo  "<li> the index of '".$alphabet[$i]."' is not Alphabet</br></li>";
               }
    }
    echo '</div>';
}
