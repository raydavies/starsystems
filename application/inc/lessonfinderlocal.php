<?php
if (isset($_GET['level'], $_GET['subject']) && ($_GET['level'] > 0 && $_GET['level'] < 5) && ($_GET['subject'] > 0 && $_GET['subject'] < 7)) {
	
	$level = strval(trim($_GET['level']));
	$subject = strval(trim($_GET['subject']));

	$id = intval($level.$subject);

	@$link = mysqli_connect('localhost','root','icedm1lk') or die("Couldn't connect! ".mysqli_connect_errno().": ".mysqli_connect_errno());

	@mysqli_select_db($link, 'hippo') or die ("Couldn't access database! ".mysqli_errno($link).": ".mysqli_error($link));

	$sql = "SELECT levelname, levelgrades, subjectname, lessonname
			FROM levels, subjects, lessons 
			WHERE lessons.subjectid = ".$id." 
			AND lessons.subjectid = subjects.subjectid 
			AND subjects.levelid = levels.levelid 
			LIMIT 42";

	@$result = mysqli_query($link, $sql) or die("Cannot retrieve data! ".mysqli_errno($link).": ".mysqli_error($link));

	$numrows = mysqli_num_rows($result);
	$remainder = $numrows % 3;

	echo "<div id='lesson_library'>";
	echo "<table border='0'>";
	$row = mysqli_fetch_row($result);
	echo "<h2>".$row[0].": ".$row[2]."</h2>";
	mysqli_data_seek($result, 0);

	for ($i = 0; $i < (($numrows-$remainder) / 3) + $remainder; $i++) {
		$row = mysqli_fetch_row($result);
		echo "<tr>";
		echo "<td class='firstrow'>".$row[3]."</td>";
		$row2 = mysqli_fetch_row($result);
		echo "<td class='secondrow'>".$row2[3]."</td>";
		$row3 = mysqli_fetch_row($result);
		echo "<td class='thirdrow'>".$row3[3]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<span>...and many, many more!!</span>";
	echo "</div>";
	mysqli_free_result($result);
	mysqli_close($link);
} else {
	return false;
}
