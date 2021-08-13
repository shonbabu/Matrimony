
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
<th>Education</th>
<th>occupation field</th>
<th>occupation</th>
<th>country</th>
<th>Location</th>

</tr>
<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$uid=$_GET['uid'];
$s="select*from tbl_proff where uid=$uid";
$rs=$db->selectData($s);
while($row=mysqli_fetch_array($rs)){
?>
<tr>
<td><?php echo $row['education'];?></td>

<td><?php echo $row['occup'];?></td>
<td><?php echo $row['country']?></td>
<td><?php echo $row['location']?></td>
<!--<td><a href="delprofessional.php?n=<?php echo $row[''];?>">delete</a></td>-->
</tr>
<?php } ?>
</table>
</body>
</html> 