<?php 
	include("db.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as vote01 FROM vote01";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td>รวม <?= $fetch['vote01'] ?> คะแนน</td>
				</tr>
			</tbody>
<?php 	} ?>
