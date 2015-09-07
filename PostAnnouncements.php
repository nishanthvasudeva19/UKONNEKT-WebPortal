<?php
	require_once('connection.php');
?>
<html>
<head><title>PostAnnouncements</title></head>
<body style="background-color: black;">
	
	<!--<div>
		<table border="0" cellspacing="2" cellpadding="2">
			<tr>
				<th>
					<font face="Arial, Helvetica, sans-serif">course_id</font>
				</th>
				<th>
					<font face="Arial, Helvetica, sans-serif">due_date</font>
				</th>
				<th>
					<font face="Arial, Helvetica, sans-serif">ann_topic</font>
				</th>
				<th>
					<font face="Arial, Helvetica, sans-serif">ann_content</font>
				</th>
			</tr> -->

<?php $i=0;while ($i < $num) {$f1=mysql_result($result,$i,"course_id"); $f2=mysql_result($result,$i,"due_date");
$f3=mysql_result($result,$i,"ann_topic"); $f4=mysql_result($result,$i,"ann_content"); ?>
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
			</tr>
<?php $i++;}?>
</div>
<div>
<?php
if(isset($_POST['PostAnnouncements']))
{
if(! get_magic_quotes_gpc() )
{
   $course_id = addslashes ($_POST['course_id']);
   $due_date = addslashes ($_POST['due_date']);
   $ann_topic = addslashes ($_POST['ann_topic']);
   $ann_content = addslashes ($_POST['ann_content']);
}
else
{
   $course_id = addslashes ($_POST['course_id']);
}
 $due_date = addslashes ($_POST['due_date']);
   $ann_topic = addslashes ($_POST['ann_topic']);
   $ann_content = addslashes ($_POST['ann_content']);
  
$sql = "INSERT INTO announcements ".
       "(course_id,due_date,ann-topic,ann_content) ".
       "VALUES('$course_id','$due_date','$ann-topic','$ann_content')";
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
echo "<input name = 'goBack' type = 'submit' value = 'Back To Home'>";
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
			<td><input name="course_id" type="text" id="course_id"></td>
		</tr>
		<tr>
			<td width="100">Due Date</td>
			<td><input name="due_date" type="text" id="due_date"></td>
		</tr>
        <tr>
            <td width="100">Announcement Topic</td>
            <td><input name="ann_topic" type="text" id="ann_topic"></td>
        </tr>
        <tr>
            <td width="100">Announcement</td>
            <td><input name="ann_content" type="text" id="ann_content"></td>
        </tr>
		<tr>
			<td width="100"> </td>
			<td>
				<input name="PostAnnouncements" type="submit" id="PostAnnouncements" value="PostAnnouncements">
			</td>
		</tr>
    </table>
</form>
<?php
}
?>
</div>
</body>
</html>
