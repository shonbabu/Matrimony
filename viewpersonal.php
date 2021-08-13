
<html>
<head>
</head>
<body><center>
<br/>
<h2>e-Matrimony</h2>

<hr/><a href="viewuser.php">View Users</a>
<a href="index.php">Logout</a>
<hr/>
<table border="1">
<tr>
<th>DOB</th>
<th>Height</th>
<th>Weight</th>
<th>complexion</th>
<th>martial status</th>
</tr>

<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$uid=$_GET['uid'];
$s="select*from tbl_personal where uid=$uid";
$rs=$db->selectData($s);
while($row=mysqli_fetch_array($rs)){
?>
<tr>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['height'];?></td>
<td><?php echo $row['weight'];?></td>
<td><?php echo $row['comp'];?></td>
<td><?php echo $row['ms'];?></td>
<!--<td><a href="delpersonal.php?n=<?php echo $row[''];?>">delete</a></td>-->
</tr>
<?php } ?>
</table>
</body>
</html>