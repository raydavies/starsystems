<?php

$file = trim($_POST['file']);
$id = trim($_POST['id']);
	
@$link = mysqli_connect('localhost','starlea_james','starone45') or die("Couldn't connect! ".mysqli_connect_errno().": ".mysqli_connect_errno());

@mysqli_select_db($link, 'starlea_hippo') or die ("Couldn't access database! ".mysqli_errno($link).": ".mysqli_error($link));

@$fp = fopen($file,'rb');

while (!feof($fp)){
	$line = fgets($fp);
	@$result = mysqli_query($link, "Insert into lessons(subjectid,lessonname) values (".$id.",'".mysqli_real_escape_string($link,$line)."')") or die("Error inserting into database! ".mysqli_errno($link).": ".mysqli_error($link));
}

fclose($fp);

	@$result = mysqli_query($link, "Select lessonname from lessons where subjectid = ".$id) or die("Cannot retrieve data! ".mysqli_errno($link).": ".mysqli_error($link));

	$numrows = mysqli_num_rows($result);
	for ($i=0;$i<$numrows;$i++){
		$row = mysqli_fetch_row($result);
		echo $row[0]."<br>";
	}
	mysqli_free_result($result);
	mysqli_close($link);

	echo "<a href='uploader.html'>Back</a>";
?>
