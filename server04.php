<?php 
	include("db.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as vote04 FROM vote04";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td>รวม <?= $fetch['vote04'] ?> คะแนน</td>
				</tr>
			</tbody>
<?php 	} ?>
