<?php
include 'sidebar.php';
?>

          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Add Employee</h4>
            </div>
            <a href="addemp.php" type="button" class="btn btn-primary bg-gradient-primary">Fill The Form</a>
            <div class="card-body">
              <div class="table-responsive">
                        <form action="process/addempprocess.php" method="POST">                            
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="firstName" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lastName" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Email" name="email" required>
                            </div>                            
                            <div class="form-group">
                              <input type="date" placeholder="BIRTHDATE" name="birthday" value="yyyy-MM-dd" class="form-control" />
                            </div>
                            
                            <div class="form-group">
                              <select class="form-control"  placeholder="Gender" name="gender" required><option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option></select>
                            </div>

                            <div class="form-group">
                              <input class="form-control" placeholder="Contact Number" name="contact" required>                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="NID" name="nid" required>                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address" required>                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Department" name="dept" required>                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Degree" name="degree" required>                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Salary" name="salary">                              
                            </div>
                            <div class="form-group">
                              <input  class="form-control"type="file" placeholder="file" name="file">                          
                            </div>

                               
                            <hr>
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-check fa-fw"></i>Save</button>
                            <button type="reset" class="btn btn-danger btn-block"><i class="fa fa-times fa-fw"></i>Reset</button>
                            
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