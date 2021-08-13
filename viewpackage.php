<html>
<head></head>
<body>
<table border="1">
<tr>
<th>Package name</th>
<th>Description</th>
<th>Validity in months</th>
<th>Amount</th>
</tr>

<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$s="select*from tbl_package";
$rs=$db->selectData($s);
while($row=mysqli_fetch_array($rs)){
?>


<tr>
<td><?php echo $row['packname'];?></td>
<td><?php echo $row['desp'];?></td>
<td><?php echo $row['validity'];?></td>
<td><?php echo $row['amount'];?></td>
<td><a href="delpackage.php?n=<?php echo $row[''];?>">delete</a></td>
<td><a href="uppackage.php?n=<?php echo $row[''];?>">update</a></td>
</tr>

<?php } ?>
</table>
</body>
</html>