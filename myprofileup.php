<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
 


 $result = mysqli_query($conn, "UPDATE `employee` SET `email`='$email',`contact`='$contact',`address`='$address' WHERE id=$id");

 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='myprofile.php?id=$id  ';
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

<html>
<head>
  <title>Update Profile | Employee Management System</title>
    <link rel="stylesheet" type="text/css" href="styleapply.css">
</head>
<body>
  <header>
    <nav>
      <h1 > <font face= "Times New Roman"> <b>Employee Management System</b></font></h1>
      <ul id="navli">
        <li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>">HOME</a></li>
        <li><a class="homered" href="myprofile.php?id=<?php echo $id?>">My Profile</a></li>
        <li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>">Apply Leave</a></li>
        <li><a class="homeblack" href="elogin.php">Log Out</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="divider"></div>

  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <center><h2 class="title">Update Employee Info</h2></center>
                    <form id = "registration" action="myprofileup.php" method="POST">



                        <div class="input-group">
                          <p>Email</p>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
                       
                        
                        <div class="input-group">
                          <p>Contact</p>
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                        </div>

                       

                        
                         <div class="input-group">
                          <p>Address</p>
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>

                       
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    <br>
                    <button class="btn btn--radius btn--green" onclick="window.location.href = 'changepassemp.php?id=<?php echo $id?>';">Change Password</button>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
