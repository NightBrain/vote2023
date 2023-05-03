<?php 
	include("db.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as nonee FROM nonee";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td>รวม <?= $fetch['nonee'] ?> คะแนน</td>
				</tr>
			</tbody>
<?php 	} ?>
