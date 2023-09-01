<html lang="en">
<head>
<title>Job Posting</title>
<meta charset="utf-8">
<meta name="description" content="Web development">
<meta name="keywords" content="HTML">
<meta name="author" content="Hoang Bao Phuc Chau">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h2>Job Vacancy Posting System</h2>
    <form action="postjobprocess.php" method="post">
        <p>        
            <label for="PositionID">PositionID: </label>
            <input type="text" id="PositionID" name="PositionID" maxlength="7" pattern="PID[0-9]{4}" title="Please input 'PID' 
            followed by 4 numbers" required><br>

            <label for="JobTitle">Title: </label>
            <input type="text" id="JobTitle" name="JobTitle" maxlength="20" pattern="[A-Za-z0-9\s\,\.\!]{1,20}" title="The title can only 
            contain a maximum of 20 alphanumeric characters including spaces, comma, period (full stop), and exclamation point" required><br>

            <label for="Description">Description: </label>
            <textarea id="Description" name="Description" rows="3" cols="50" maxlength="250" required> </textarea><br>

            <label for="ClosingDate">Closing Date: </label>
            <input type="text" id="ClosingDate" name="ClosingDate" pattern="[0-9]{2}/[0-9]{2}/[0-9]{2}" value="<?php echo date('d/m/y');?>" required> <br>

            <label for="Position">Position: </label>
            <input type="radio" id="PartTime" name="Position" value="PartTime" required>
            <label for="PartTime">Part Time</label>
            <input type="radio" id="FullTime" name="Position" value="FullTime">
            <label for="FullTime">Full Time</label><br>

            <label for="Contract">Contract: </label>
            <input type="radio" id="OnGoing" name="Contract" value="OnGoing" required>
            <label for="OnGoing">On-Going</label>
            <input type="radio" id="FixedTerm" name="Contract" value="FixedTerm">
            <label for="FixedTerm">Fixed Term</label><br>

            <label for="ApplicationBy">Application By: </label>
            <input type="checkbox" id="Post" name="ApplicationBy" value="Post" required>
            <label for="Post">Post</label>
            <input type="checkbox" id="Mail" name="ApplicationBy" value="Mail">
            <label for="Mail">Mail</label><br>

            <label for="location">Location:</label>
            <select id="location" name="location" required>
                <option value="" selected disabled hidden>---</option>
                <option value="vic">VIC</option>
                <option value="nsw">NSW</option>
                <option value="sa">SA</option>
                <option value="wa">WA</option>
                <option value="nt">NT</option>
                <option value="qld">QLD</option>
                <option value="atc">ATC</option>
                <option value="tas">TAS</option>
            </select>
        </p>       
        <input type="submit" name="Post" value="Post">
        <input type="reset">
    </form>
<p> All fields are required. <a href="index.php">Return to Homepage</a></p>

</body>