<?php
include 'sidebar.php';
?>

          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Assign Project</h4>
            </div>
            <a href="assign.php" type="button" class="btn btn-primary bg-gradient-primary">Assign</a>
            <div class="card-body">
              <div class="table-responsive">
                        <form action="process/assignp.php" method="POST">                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Employee ID" name="eid" required>                              
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Project Name" name="pname" required>                              
                            </div>                            
                            <div class="form-group">
                              <input type="date" placeholder="date" name="duedate" value="yyyy-MM-dd" class="form-control" /> 
                               
                            <hr>
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-check fa-fw"></i>Assign</button>                            
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
