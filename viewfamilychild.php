<html>
<head></head>
<body>
<table border="1">
<tr>
<th>Sibling Name</th>
<th>Status</th>
</tr>
<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$s="select*from tbl_famchild";
$rs=$db->selectData($s);
while($row=mysqli_fetch_array($rs)){
?>
<tr>
<td><?php echo $row['siblingname'];?></td>
<td><?php echo $row['status'];?></td>
</tr>
<?php } ?>
</table>
</body>
</html> 