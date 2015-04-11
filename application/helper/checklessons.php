<?php

$level = strval(trim($_GET['level']));
$subject = strval(trim($_GET['subject']));

$id = intval($level.$subject);

@$link = mysqli_connect('localhost','root','icedm1lk') or die("Couldn't connect! ".mysqli_connect_errno().": ".mysqli_connect_errno());

@mysqli_select_db($link, 'hippo') or die ("Couldn't access database! ".mysqli_errno($link).": ".mysqli_error($link));

@$result = mysqli_query($link, "Select lessonname from lessons where subjectid = ".$id) or die("Cannot retrieve data! ".mysqli_errno($link).": ".mysqli_error($link));

$numrows = mysqli_num_rows($result);
for ($i = 0; $i < $numrows; $i++) {
	$row = mysqli_fetch_row($result);
	echo $row[0]."<br>";
}
mysqli_free_result($result);
mysqli_close($link);

echo "<br><a href='lessons.html'>Back</a>";
