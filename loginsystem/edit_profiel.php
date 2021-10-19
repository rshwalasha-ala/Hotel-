



<?php
 
 session_start();
 include "dbconnection.php"; 
 
 if(isset($_POST['edit']))
 {
        
        $id=$_SESSION['id'];
        $geschlecht=$_POST['geschlecht'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $data=$post['posting_date'];
   
        $select= "select * from users where id='$id'";
        $sql = mysqli_query($conn,$select);
        $row = mysqli_fetch_assoc($sql);    $res= $row['id'];
        if($res === $id)
        {
       
           $update = "update users set   geschlecht='$geschl' fname='$fname',lname='$lname',email='$email',contact='$contact', where id='$id'";
           $sql2=mysqli_query($conn,$update);if($sql2)
           { 
               /*Successful*/
               header('location:Dashboard.php');
           }
           else
           {
               /*sorry your profile is not update*/
               header('location:Profile_edit_form.php');
           }
        }
        else
        {
            /*sorry your id is not match*/
            header('location:Profile_edit_form.php');
        } }?>

 


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Edit profiel </title>
   
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/startseitehotel.css" rel="stylesheet">
</head>
<body>
<nav class="hauptnavi" role="navigation">
<div class="container">
            <div class="navbar-header">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active font-weight-bold" id="profile-tab" data-toggle="tab" name="profile" href="profile.php" role="tab" aria-controls="home" aria-selected="true">Profile</a>
            </li>
           
            <li class="nav-item">
            <p><a  href="welcome.php">Logout </a>
            </li>
        </ul class="mb-5">
        </nav>

       
	  
	  
        <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>


<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Geschlecht</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="geschlecht" value=" <?php echo $_SESSION['geschl']; ?>" >
                              </div>
                            
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">First Name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['name'];?>" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Last Ename</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="lname" value="<?php echo $_SESSION['sname'];?>" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['mail'];?>" readonly >
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Contact no. </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="contact" value="<?php echo $_SESSION['contact'];?>" >
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Registration Date </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="regdate" value="<?php echo $_SESSION['data'];?>" readonly >
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        
      </section></section>
    <script src="assets/js/jquery.js"></script>
   
    
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>
        <hr>


      


        </div>

        <hr>


    </div>
    <script src="js/jquery.js"></script>
   
</body>

</html>
<?php ?>