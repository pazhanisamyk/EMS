<?php
include 'sidebar.php';
?><?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);



$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`birthday`='$birthday',`gender`='$gender',`contact`='$contact',`nid`='$nid',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	
}
}

?>


          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Update Employee Info</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                        <form id = "registration" action="edit.php" method="POST">                            
                            <div class="form-group">
                              <input class="form-control"  name="firstName" value="<?php echo $firstname;?>">      
                            </div>
                            <div class="form-group">
                              <input class="form-control"  name="lastName" value="<?php echo $lastname;?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control"  name="email" value="<?php echo $email;?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="date" name="birthday" value="<?php echo $birthday;?>">
                            </div>                            
                            <div class="form-group">
                             <input class="form-control"  name="gender" value="<?php echo $gender;?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="contact" value="<?php echo $contact;?>">                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="nid" value="<?php echo $nid;?>">                              
                            </div>
                            <div class="form-group">
                              <input class="form-control"  name="address" value="<?php echo $address;?>">                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="dept" value="<?php echo $dept;?>">                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="degree" value="<?php echo $degree;?>">                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="hidden" name="id" id="textField" value="<?php echo $id;?>" required>                            

                               
                            <hr>
                            <button type="submit" class="btn btn-success btn-block" name="update"><i class="fa fa-check fa-fw"></i>Save</button>
                            
                            
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