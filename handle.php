<?php
    if (isset($_POST['submit'])) {
        $alphabet = $_POST['alphabet'];
        $upperArr = range('A', 'Z');
        $lowerArr = range('a', 'z');
       
        if (ctype_upper($alphabet)) {
            echo 'Position of ' . $alphabet .' is:' . (array_search($alphabet, $upperArr) + 1);
        } 
        elseif(ctype_lower($alphabet)) {
            echo 'Position of ' . $alphabet .' is:' . (array_search($alphabet, $lowerArr) + 1);
        }
        else{
            echo "not allowed";
        }
        //other option-
    //     echo "<br><br>";
    //     echo "<h2> Position of alphabet </h2>";
    //     foreach(range('A','Z') as $str){
    //         echo 'Position of ' . $str .' is:' . (array_search($str, $upperArr) + 1) .'<br><br>' ;            
    //     }
    }
?>