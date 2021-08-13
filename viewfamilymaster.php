
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
<th>Father Name</th>
<th>Mother Name</th>
<th>House Name</th>
<th>Family Status</th>
<th>Family Value</th>

</tr>
<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$uid=$_GET['uid'];
$s="select*from tbl_fammas where uid=$uid";
$rs=$db->selectData($s);
while($row=mysqli_fetch_array($rs)){
?>
<tr>
<td><?php echo $row['fathername'];?></td>
<td><?php echo $row['mothername'];?></td>
<td><?php echo $row['housename'];?></td>
<td><?php echo $row['fs'];?></td>
<td><?php echo $row['fv'];?></td>
<!--<td><a href="delfamily.php?n=<php echo $row[''];?>">delete</a></td>-->
</tr>
<?php } ?>
</table>
</body>
</html> 