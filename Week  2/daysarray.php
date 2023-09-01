<!DOCTYPE html>
<html lang="en">
<head>
<title>Array of Days</title>
<meta charset="utf-8">
<meta name="description" content="Web development">
<meta name="keywords" content="HTML">
<meta name="author" content="Hoang Bao Phuc Chau">
</head>
<body>
    <?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        echo "<p>The Days of week in English are: <br>", @$days[0], ", ", @$days[1], ", ", @$days[2], ", ", @$days[3], ", ", @$days[4], ", ", @$days[5], ", ", @$days[6], ".</p>";
        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        echo "<p>The Days of week in French are:<br>", @$days[0], ", ", @$days[1], ", ", @$days[2], ", ", @$days[3], ", ", @$days[4], ", ", @$days[5], ", ", @$days[6], ".</p>";
    ?>
</body>
</html>