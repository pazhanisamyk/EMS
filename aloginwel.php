<?php
include 'sidebar.php';
?><?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>

			 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Empolyee Leaderboard&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">        
                  <thead>
                      <tr>
                        <th>Seq</th>
                        <th>Emp ID</th>
                        <th>Name</th>
                        <th>Points</th>
                      </tr>
                  </thead>

			<tbody>

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td><center>".$seq."</center></td>";
					echo "<td><center>".$employee['id']."<center></td>";
					
					echo "<td><center>".$employee['firstName']." ".$employee['lastName']."</center></td>";
					
					echo "<td><center>".$employee['points']."</center></td>";
					
					$seq+=1;
				}



			?>
			</tbody>
			</table>

			
		<div align="Right">	
			<a href="reset.php" data-toggle="modal" type="button" class="btn btn-primary bg-gradient-primary"  style="border-radius: 0px;">Reset Points</a>
			
		</div>
			<br><br><center>
	<div>
		<h1><font color="black" size="3">
			copyrights @ EMS..! All Rights Recived...
			</font>
		</h1></div></center>		
	</div>