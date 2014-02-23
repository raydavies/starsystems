<?php

if (isset($_GET['level']) && isset($_GET['subject']) && ($_GET['level'] == 1 || $_GET['level'] == 2 || $_GET['level']== 3 || $_GET['level'] == 4) && ($_GET['subject'] == 1 || $_GET['subject'] == 2 || $_GET['subject'] == 3 || $_GET['subject'] == 4 || $_GET['subject'] == 5 || $_GET['subject'] == 6)){
	
	$level = strval(trim($_GET['level']));
	$subject = strval(trim($_GET['subject']));

	$id = intval($level.$subject);
	getLessons($id);
}
else {
	getLessons(11);
}

function getLessons($id) {
	@$link = mysqli_connect('localhost','starlea_james','starone45') or die("Couldn't connect! ".mysqli_connect_errno().": ".mysqli_connect_errno());

	@mysqli_select_db($link, 'starlea_hippo') or die ("Couldn't access database! ".mysqli_errno($link).": ".mysqli_error($link));

	@$result = mysqli_query($link, "Select levelname,levelgrades,subjectname,lessonname from levels,subjects,lessons where lessons.subjectid = ".$id." and lessons.subjectid = subjects.subjectid and subjects.levelid = levels.levelid") or die("Cannot retrieve data! ".mysqli_errno($link).": ".mysqli_error($link));

	$numrows = mysqli_num_rows($result);
	$remainder = $numrows % 3;

	echo "<div id='lesson_library'>";
	echo "<table border='0'>";
	$row = mysqli_fetch_row($result);
	echo "<h2>".$row[0].": ".$row[2]."</h2>";
	mysqli_data_seek($result, 0);

	for ($i=0;$i< (($numrows-$remainder) / 3) + $remainder;$i++){
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
	//echo "<span>...and many, many more!!</span>";
	echo "</div>";
	mysqli_free_result($result);
	mysqli_close($link);
}
?>
