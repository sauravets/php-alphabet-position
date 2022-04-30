<?php
if (isset($_POST['submit'])) {
    $alphabet = $_POST['alphabet'];
    // $upperArr = range('A', 'Z');
    // $lowerArr = range('a', 'z');

    // if (ctype_upper($alphabet)) {
    //     echo 'Position of ' . $alphabet .' is:' . (array_search($alphabet, $upperArr) + 1);
    // } 
    // elseif(ctype_lower($alphabet)) {
    //     echo 'Position of ' . $alphabet .' is:' . (array_search($alphabet, $lowerArr) + 1);
    // }
    // else{
    //     echo "not allowed";
    // }
    
    // Declare an empty array
    $array = array();

    // Loop to convert ASCII value
    // into characters and store
    // it into variables
    for ($i = 65; $i < 91; $i++) {
        $array[$alphabet] = chr($i);
    }
    

    // Loop to display the array elements
    foreach ($array as $alphabet => $v) {

        // Display the key and its
        // value of an array 
        echo $alphabet . " => " . $v . ", ";
    }

}
