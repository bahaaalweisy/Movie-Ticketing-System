<!DOCTYPE html>
<?php 

include_once ('db.php');
include_once ('header1.php');

?>
<html>
<head>
  <title>Account Setting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
  body{
    overflow-x: hidden;
  }
</style>
<body>

<div class="row">
  <div class="col-sm-2">
  </div>
 
  <div class="col-sm-8">
    <form action="" method="post" enctype="multipart/form-data">
          <table class="table table-bordered table-hover">
            <tr align="center">
              <td colspan="6" class="active"><h2>Change Account Settings</h2></td>
            </tr>
           
            

      

         
            
          
            <!-- recovery option start -->

            <tr>
              <td style="font-weight: bold;">Forgotten Password</td>
              <td>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Forgotten Password</button>

              <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="recovery.php?id=<?php echo $userId;?>" method="post" id="f">
                      <strong>What is your School Best Friend Name?</strong>
                      <textarea class="form-control" cols="83" rows="4" name="content" placeholder="Someone"></textarea><br/>
                      <input class="btn btn-default" type="submit" name="sub" value="Submit" style="width:100px;" /><br><br>
                      <pre >Answer the above question we will ask you this question if you forgot your <br>password.
                      </pre>
                      <br><br>
                      </form>
                      <?php
                      if(isset($_POST['sub'])){
                        $bfn = htmlentities($_POST['content']);

                        if($bfn==''){
                
                        echo "<script>alert('Please Enter Something!')</script>";
                        echo "<script>window.open('account_settings.php','_self')</script>";
                        
                        exit();
                        
                        }
                        else {

                        $update = "update user set forgotten_answer='$bfn' where userId='$userId'";
              
                        $run = mysqli_query($conn,$update);
                        
                        if($run){
                        
                        echo "<script>alert('Working...!')</script>";
                        echo "<script>window.open('account_settings.php?','_self')</script>";
                        }else{
                        echo "<script>alert('Error while Updating information...!')</script>";
                        echo "<script>window.open('account_settings.php','_self')</script>";
                        }
                        }
                      }
                      ?>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
            </tr>
            <!-- recovery option ends -->
                         <tr><td></td><td><a class="btn btn-info" style="text-decoration: none;font-size: 15px;" href="changepass.php"><i class="fa fa-key fa-fw" aria-hidden="true"></i> Change Password</a></td></tr>
             

            <tr align="center">
              
            </tr>
          </table>
        </form>
                            
       
  </div>
  <div class="col-sm-2">
  </div>
</div>
</body>
</html>

