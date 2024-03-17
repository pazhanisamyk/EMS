<?php
include 'sidebar.php';
?>
<?php

require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$pid = (isset($_GET['pid']) ? $_GET['pid'] : '');
$sql = "SELECT pid, project.eid, pname, duedate, subdate, mark, points, firstName, lastName, base, bonus, total FROM `project` , `rank` ,`employee`, `salary`  WHERE project.eid = $id AND pid = $pid";


$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $eid = mysqli_real_escape_string($conn, $_POST['eid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  

  $mark = mysqli_real_escape_string($conn, $_POST['mark']);
  $points = mysqli_real_escape_string($conn, $_POST['points']);
  $base = mysqli_real_escape_string($conn, $_POST['base']);
  $bonus = mysqli_real_escape_string($conn, $_POST['bonus']);
  $total = mysqli_real_escape_string($conn, $_POST['total']);

  $upPoint = $points+$mark;
  
  $upBonus = $bonus +  $mark;
  $upSalary = $base + ($upBonus*$base)/100; 
  echo "$upBonus";
  echo "string";
  echo "$upSalary";
 
 $result = mysqli_query($conn, "UPDATE `project` SET `mark`='$mark' WHERE eid=$eid and pid = $pid");

 $result = mysqli_query($conn, "UPDATE `rank` SET `points`='$upPoint' WHERE eid=$eid");
 $result = mysqli_query($conn, "UPDATE `salary` SET `bonus`='$upBonus' ,`total`='$upSalary' WHERE id=$eid");




 echo ("<SCRIPT LANGUAGE='JavaScript'>
   
    window.location.href='assignproject.php  ';
    </SCRIPT>");

  
}
?>




<?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $pid = (isset($_GET['pid']) ? $_GET['pid'] : '');
  $sql1 = "SELECT pid, project.eid, project.pname, project.duedate, project.subdate, project.mark, rank.points, employee.firstName, employee.lastName, salary.base, salary.bonus, salary.total FROM `project` , `rank` ,`employee`, `salary`  WHERE project.eid = $id AND project.pid = $pid AND project.eid = rank.eid AND salary.id = project.eid AND employee.id = project.eid AND employee.id = rank.eid";
  $result1 = mysqli_query($conn, $sql1);
  if($result1){
  while($res = mysqli_fetch_assoc($result1)){
  $pname = $res['pname'];
  $duedate = $res['duedate'];
  $subdate = $res['subdate'];
  $firstName = $res['firstName'];
  $lastName = $res['lastName'];
  $mark = $res['mark'];
  $points = $res['points'];
  $base = $res['base'];
  $bonus = $res['bonus'];
  $total = $res['total'];
  
}
}

?>


          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Project Mark</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                        <form id = "registration" action="mark.php" method="POST">                            
                            <div class="form-group">
                              <p>Project Name</p>
                              <input class="form-control"  name="pname" value="<?php echo $pname;?>" readonly>      
                            </div>
                            <div class="form-group">
                              <p>Employee Name</p>
                              <input class="form-control"   name="firstName" value="<?php echo $firstName;?> <?php echo $lastName;?>" readonly>
                            </div>
                            <div class="form-group">
                              <p> Due Date</p>
                              <input class="form-control"   name="duedate" value="<?php echo $duedate;?>" readonly>
                            </div>
                            <div class="form-group">
                              <p>Submission Date</p>
                              <input class="form-control"  name="subdate" value="<?php echo $subdate;?>" readonly>
                            </div>                            
                            <div class="form-group">
                              <p>Assign Mark</p>
                             <input class="form-control"   name="mark" value="<?php echo $mark;?>">

                             <input type="hidden" name="eid" id="textField" value="<?php echo $id;?>" required="required">
                        <input type="hidden" name="pid" id="textField" value="<?php echo $pid;?>" required="required">
                         <input type="hidden" name="points" id="textField" value="<?php echo $points;?>" required="required">
                        <input type="hidden" name="base" id="textField" value="<?php echo $base;?>" required="required">
                        <input type="hidden" name="bonus" id="textField" value="<?php echo $bonus;?>" required="required">
                        <input type="hidden" name="total" id="textField" value="<?php echo $total;?>" required="required">
                               
                            <hr>
                            <button type="submit" class="btn btn-success btn-block" name="update"><i class="fa fa-check fa-fw"></i>Assign Mark</button>
                            
                            
                        </form>  
                      </div>
            </div>
          </div></center>
                       <center>
    <div>
        <h1><font size="3">
            copyrights @ EMS..! All Rights Recived...
            </font>
        </h1></div></center>        
    </div>