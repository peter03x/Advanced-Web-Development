<!DOCTYPE html>
<html lang="en">
<head>
<title>Task 3 Week 2</title>
<meta charset="utf-8">
<meta name="description" content="Web development">
<meta name="keywords" content="HTML">
<meta name="author" content="Hoang Bao Phuc Chau">
</head>
<body>
    <?php
        $temp = "3";
         if (is_numeric($temp))  
         {
            echo "<p>This is a number</p>";

            if (round($temp) % 2 == 0)    
                echo "<p>This is an even number</p>";
            else
                echo "<p>This is not an even number</p>";
         }  
         else
         {
            echo "<p>This is not a number</p>";
         }

            

    ?>
</body>
</html>