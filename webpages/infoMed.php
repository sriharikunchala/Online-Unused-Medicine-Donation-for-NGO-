<table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			
			<th>Medicine Name</th>
			<th>Purpose</th>
			<th>medicine Expiryword</th>
		</tr>
	</thead>
	<tbody>
	<?php
		require_once('connection.php');
		$result = $conn->prepare("SELECT * FROM users ORDER BY medicineName ASC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>
			<td><label><?php echo $row['medicineName']; ?></label></td>
			<td><label><?php echo $row['purpose']; ?></label></td>
			<td><label><?php echo $row['medicineExpiry']; ?></label></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<div> <div style="text-align:right"> <p><button ><a  href="logout1.php">Logout</a></button></p></div></div>