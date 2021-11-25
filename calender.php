
<!DOCTYPE htm>
<!DOCTYPE html>
<html>
<head>
<link href="calendar.css" rel="stylesheet" type="text/css" />
<title>Calender</title>
</head>
<?php
$hours_to_show;
$users;
$calenderTime;
if($_POST == null){
	$hours_to_show = 12;
	$users = 3;

	//echo "welcome";

}
else{
	$hours_to_show = $_POST["hoursToShow"];
	$users = $_POST["user"];
	//echo "welcome again";
}
function get_hour_string($hours){
	for($i=0; $i<=$hours; $i++)	{	
		date_default_timezone_set('Europe/London');
		 $calenderTime[$i] = date_default_timezone_set("h A",(time()+(60*60*$i)));
		 $calenderTime[$i] = date_default_timezone_set("h A",(time()+(60*60*$i)));
		//echo $calenderTime[$i];
	}
	return $calenderTime;
}
?>
    <link rel="stylesheet" type="text/css" href="calendar.css" />

<body>
<h1 align="center">Calendar</h1>
<strong>
<p align="center"><?php echo(date("l F dS\, Y h:i A")); ?></p></strong>
<form action="calender.php" method="post">
<br />
Hours to show:
<input type="number" name="hoursToShow" />
No. of Users:
<input type="number" name="user" />
<input type="submit" value="set" />
<br />
    <head>
        <title>Part 2</title> 
    </head>

<div align="center">
    <body>

<table width="54%" border="1" class="altColor">
	<tr>
		<th>Time:</th>
		<?php
		for($j=0; $j<$users; $j++)
			echo "<th>User: ".($j+1)."</th>";
			echo "</tr>";	
	$construct=get_hour_string($hours_to_show);
	$size = sizeof($construct)-1;
		for($i=0; $i<$size; $i++){
			echo "<tr>";
			echo"<th>". $construct[$i]." to ". $construct[$i+1]."</th>";
		for($j=0; $j<$users; $j++)
			echo "<td>&nbsp;&nbsp;</td>";	
			echo "</tr>";
}
?>
        <?php
            date_default_timezone_set('America/New_York'); 

</table>
</div>
            $hours_to_show = 11;  
			if(isset($_POST['submit'])){
				$hours_to_show = $_POST["hours_to_show"] - 1;
			}
            $timeStamp = time();
            $todayDate = date("D, F j, Y", $timeStamp);                                                    
            $currentTime = date("g:i a",$timeStamp);     
            $todayDay = date("l", $timeStamp);

<p><a href="assignments.html">Assignments</a> | 
<a href="index.html"> Home Page </a> </p>
</body>
            function get_hour_string($timeStamp){ 
                $hour = date("g", $timeStamp);
                $am_or_pm = date("a", $timeStamp);
                return "$hour:00 $am_or_pm";
            }

        ?>

        <div class="container">
            <h1> 
                <?php 
                    echo "<br><b>Welcome to my calendar!</b><br>";
                    echo "<br><b>The day of the week</b>: $todayDay";
                    echo "<br><b>Today's date</b>: $todayDate";
                    echo "<br><b>The current time is</b> $currentTime <br>"; 
                ?> 
				<form method="POST">
					Hours to show: <input type="number" name="hours_to_show">
					<input type="submit" value="submit" name = "submit">
				</form>
            </h1>
            <table id="event_table">
            <tr>    
                <th class='hr_td'></th>
                <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbspForrest</th> 
                <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbspLouis</th>
                <th class='table_header'>&nbsp&nbspHenry</th>
            </tr> 
            <tr> <br> </tr>

        <?php

        for ($i = 0; $i <= $hours_to_show; $i++) { 
            $hours = get_hour_string($timeStamp + $i * 60 * 60); 
            if ($i % 2 == 0) { 

                echo  "<tr class='even_row'> \n ";
                echo "<td class='hr_td'>
                            <b>$hours</b>
                      </td>
                      <td> </td>                        
                      <td> </td> 
                      <td> </td> \n";
                echo "</tr> \n";

            }

            if ($i % 2 != 0) { 

                echo "<tr class='odd_row'> \n";
                echo "<td class='hr_td'>
                            <b>$hours</b>
                      </td>  
                      <td> </td> 
                      <td> </td> 
                      <td> </td> \n";

                echo "</tr> \n";
            }
        }
        ?>	
            </table>
        </div>

    </body>