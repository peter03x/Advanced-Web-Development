<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Web application development" />
 <meta name="keywords" content="PHP" />
 <meta name="author" content="Hoang Bao Phuc Chau" />
 <title>TITLE</title>
</head>
<body>
    <h1>Web Programming - Lab 4</h1>
    <?php
        if(isset($_POST["str1"])){
            $str = $_POST["str1"];
            $punctuations = array(".", ",", "?", ";", "!", ":", ",", "(", ")", "[", "]", "\"","-", "_", "/", "@", "*", "{", "}", " ", "'");
            $str = str_replace($punctuations, "", $str);
            $str2 = strrev($str);
            if (strcmp(strtolower($str), strtolower($str2)) == 0){
                echo "<p>The text you entered '", $str, "' is a perfect palindrome";
            }
            else
            echo "<p>The text you entered '", $str, "' is not a perfect palindrome";
        }
        
    ?>
</body>