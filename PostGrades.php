<?php
	require_once('connection.php');
?>
<html>
<head><title>PostGrades</title></head>
<body style="background-color: black;">
	
	<!--<div>
		<table border="0" cellspacing="2" cellpadding="2">
			<tr>
				<th>
					<font face="Arial, Helvetica, sans-serif">CourseId</font>
				</th>
				<th>
					<font face="Arial, Helvetica, sans-serif">StudentId</font>
				</th>
				<th>
					<font face="Arial, Helvetica, sans-serif">ExamId</font>
				</th>
				<th>
					<font face="Arial, Helvetica, sans-serif">grade</font>
				</th>
				<th>
					<font face="Arial, Helvetica, sans-serif">MaxGrade</font>
				</th>
			</tr> -->

<?php $i=0;while ($i < $num) {$f1=mysql_result($result,$i,"CourseId"); $f2=mysql_result($result,$i,"StudentId");
$f3=mysql_result($result,$i,"ExamId"); $f4=mysql_result($result,$i,"grade"); $f5=mysql_result($result,$i,"MaxGrade");?>
			<tr>
				<td>
					<font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
				</td>
                <td>
                    <font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
                </td>
                <td>
                    <font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
                </td>
			</tr>
<?php $i++;}?>
</div>
<div>
<?php
if(isset($_POST['PostGrades']))
{
if(! get_magic_quotes_gpc() )
{
   $CourseId = addslashes ($_POST['CourseId']);
   $StudentId = addslashes ($_POST['StudentId']);
   $ExamId = addslashes ($_POST['ExamId']);
   $grade = addslashes ($_POST['grade']);
   $MaxGrade = addslashes ($_POST['MaxGrade']);
}
else
{
   $CourseId = addslashes ($_POST['CourseId']);
   $StudentId = addslashes ($_POST['StudentId']);
}
   $ExamId = addslashes ($_POST['ExamId']);
   $grade = addslashes ($_POST['grade']);
   $MaxGrade = addslashes ($_POST['MaxGrade']);
   
$sql = "INSERT INTO grade ".
       "(CourseId, StudentId, ExamId, grade, MaxGrade) ".
       "VALUES('$CourseId', '$StudentId', '$ExamId', '$grade', '$MaxGrade')";
mysql_select_db('sxs9203');
$retval = mysql_query( $sql, $bd );

if(! $retval )
{
  die('Could not enter data: Users');
}
else {
echo "<h1 style='background-color: #f58025;'>";    
echo "Entered data successfully\n";
echo "</h1>";
echo "<form method='post' action='home.php'>";
echo "<table>";
echo "<tr>";
echo "<td width='100' style='background-color: #f58025;'"; 
echo "Click to go back to home page"; 
echo "</td>";
echo "<td>";
echo "<input name = 'goBack' type = 'submit'>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</form>";
}
mysql_close($bd);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
	<table width="400" border="0" cellspacing="1" cellpadding="2" style="background-color: #f58025;">
		<tr>
			<td width="100">Course ID</td>
			<td><input name="CourseId" type="text" id="CourseId"></td>
		</tr>
        <tr>
            <td width="100">Student ID</td>
            <td><input name="StudentId" type="text" id="StudentId"></td>
        </tr>
        <tr>
            <td width="100">Exam ID</td>
            <td><input name="ExamId" type="text" id="ExamId"></td>
        </tr>
		<tr>
			<td width="100">Grades</td>
			<td><input name="grade" type="text" id="grade"></td>
		</tr>
        <tr>
            <td width="100">Max. Grade</td>
            <td><input name="MaxGrade" type="text" id="MaxGrade"></td>
        </tr>
		<tr>
			<td width="100"> </td>
			<td>
				<input name="PostGrades" type="submit" id="PostGrades" value="PostGrades">
			</td>
		</tr>
</form>
<?php
}
?>
</div>
</body>
</html>
