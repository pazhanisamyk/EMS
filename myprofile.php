<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";


$result = mysqli_query($conn, $sql);


  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $sql2 = "SELECT total from `salary` WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn , $sql2);
  $salary = mysqli_fetch_array($result2);
  $empS = ($salary['total']);
 
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
  $pic = $res['pic'];
}
}

?>

<html>
<head>
  <title>My Profile | Employee Management System</title>
    <link rel="stylesheet" type="text/css" href="styleapply.css">
	
</head>
<body>
  <header>
    <nav>
      <h1 > <font face= "Times New Roman"> <b>Employee Management System</b></font></h1>
      <ul id="navli">
        <li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>">HOME</a></li>
        <li><a class="homered" href="myprofile.php?id=<?php echo $id?>">My Profile</a></li>
        <li><a class="homeblack" href="empproject.php?id=<?php echo $id?>">My Projects</a></li>
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
                   <center> <h2 class="title">My Info</h2></center>
                    <form method="POST" action="myprofileup.php?id=<?php echo $id?>" >


                        <div align="center">
                            <img src="process/<?php echo $pic;?>" height = 80px width = 80px>
                        </div><br>
                        <div class="row row-space">
                            <div class="col-2">
                              <p>First Name</p>
                                <div class="input-group">
                                     <input class="input--style-1"  name="firstName" value="<?php echo $firstname;?>" readonly >
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Last Name</p>
                                <div class="input-group">
                                    <input class="input--style-1" name="lastName" value="<?php echo $lastname;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Email-ID</p>
                                <div class="input-group">
                                     <input class="input--style-1" name="email" value="<?php echo $email;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Date Of Birth</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Gender</p>
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Contact Number</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>NID</p>
                                <div class="input-group">
                                     <input class="input--style-1" type="number" name="nid" value="<?php echo $nid;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Address</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Department</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Degree</p>
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="degree" value="<?php echo $degree;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                              <p>Salary</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="degree" value="<?php echo $empS;?>" readonly>
                                   
                                </div>
                            </div>
                            <div >
                                <div class="input-group">
                                    <input class="input--style-1" type="hidden" name="id" id="textField" value="<?php echo $id;?>" required>
                                   
                                </div>
                            </div>
                            <div aliclass="input-group">
                            <div class="p-t-20">
                            <button type="submit" name="send" class="btn btn--radius btn--green"><i class="fa fa-check fa-fw"></i>Update Info</button>
                          </div>
                        </div>
                        </div>   
                        
                    </form>
                    <br><br>
                
    <center>
    <div>
        <h1><font size="3">
            copyrights @ EMS..! All Rights Recived...
            </font>
        </h1></div></center>        
    </div>

</body>
</html>

        




