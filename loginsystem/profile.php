<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
   
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
                <a class="nav-link active font-weight-bold" id="profile-tab" data-toggle="tab" name="profile" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="edit_profiel.php" role="tab" aria-controls="profile" aria-selected="false">Edit Profile</a>
            </li>
            <li class="nav-item">
            <p><a  href="welcome.php">Logout </a>
            </li>
        </ul class="mb-5">
        </nav>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card">
                    <div class="card-body">
                        <div class="row">


                        <div class="col-md-2">
                                <strong>Geschlecht: </strong>
                            </div>
                            <div class="col-md-10"> <?php echo $_SESSION['geschl']; ?>
                            </div>
                            <div class="col-md-2">
                                <strong>First Name: </strong>
                            </div>
                            <div class="col-md-10"> <?php echo $_SESSION['name']; ?>
                            </div>
                            <div class="col-md-2">
                                <strong>last Name: </strong>
                            </div>
                            <div class="col-md-10">
                                <?php echo $_SESSION['sname']; ?>
                            </div>
                            <div class="col-md-2">
                                <strong>E-mail: </strong>
                            </div>
                            <div class="col-md-10">
                                <?php echo $_SESSION['mail']; ?>
                            </div>
                           
                            <div class="col-md-2">
                                <strong>Created No: </strong>
                            </div>
                            <div class="col-md-10">
                                <?php echo $_SESSION['contact']; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
         
        </header>

        <hr>


      


        </div>

        <hr>


    </div>
    <script src="js/jquery.js"></script>
   
</body>

</html>
<?php } ?>