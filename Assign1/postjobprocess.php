<html lang="en">
<head>
<title>Result</title>
<meta charset="utf-8">
<meta name="description" content="Web development">
<meta name="keywords" content="HTML">
<meta name="author" content="Hoang Bao Phuc Chau">
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    $str = "";
    $errorcount = 0;
    if(isset($_POST["PositionID"]))
    {
        $pattern = "/PID[0-9]{4}/";
        if (preg_match($pattern, $_POST["PositionID"]))
        {
            $str = $_POST["PositionID"];
        }
        else {
            echo "The PositionID pattern was not match with the requirements";
            $errorcount++;
        }
    }
    else {
        echo "The PositionID can not be null";
        $errorcount++;
    }
    echo $str;
    ?>
</body>