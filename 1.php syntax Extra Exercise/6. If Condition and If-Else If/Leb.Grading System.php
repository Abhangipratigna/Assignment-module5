<?php
if (isset($_POST['submit'])) 
{
	$marks = $_POST['marks'];

	if ($marks < 0 || $marks > 100) {
		echo "<p style='color: red;'>Please enter a valid mark between 0 and 100.</p>";
	} else 
	{
		if ($marks >= 90) {
			$grade = 'A';
		} elseif ($marks >= 80) {
			$grade = 'B';
		} elseif ($marks >= 70) {
			$grade = 'C';
		} elseif ($marks >= 60) {
			$grade = 'D';
		} else {
			$grade = 'Fail';
		}

		// Output the grade
		echo "Enter your grade: <strong>$grade</strong>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Grade</title>
</head>

<body>
	<center>
		<h2>Student Grade </h2>

		<form method="post" action="">
			<label for="marks">Enter Marks:</label>
			<input type="number" name="marks" id="marks" required>
			<input type="submit" name="submit" value="Submit">
		</form>
	</center>

</body>

</html>