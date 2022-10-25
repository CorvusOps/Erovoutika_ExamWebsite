<?php
include '../includes/connectdb.php';

if($_SESSION['client_sid']==session_id())
{
?>
<!DOCTYPE html>
<html lang="en">
     <head>
        <title>Erovoutika - Exam</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
          crossorigin="anonymous"
        />

        <!-- Bootstrap Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/SettingsStyle.css">
    </head>

    <body>

    <?php
    $clUrID = $_SESSION['clUrID'];

    $userQuery = mysqli_query($connectdb, "SELECT * FROM tbusers where clUrID = '$clUrID'");
      while($row = mysqli_fetch_array($userQuery)){
        $clUrID = $row['clUrID'];
        $clUrUsername = $row['clUrUsername'];
        $clUrFirstname = $row['clUrFirstname'];
        $clUrLastname = $row['clUrLastname'];
        $clUrcontact_num = $row['clUrcontact_num'];
        $clUremail = $row['clUremail'];
        $clUraddress = $row['clUraddress'];
    }
    ?>
        <!-------------------------- HEADER ---------------------------->
        <header class="bg-white border-5 border-bottom border-primary">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ms-5 me-5">
                <a class="navbar-brand" href="#"><img src="../images/Logo2.png" style="height: 60px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse position-absolute end-0" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link text-dark mt-3" href="../webexam/ExamList.php">Exam Lists</a>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="UserProfile.php"><i class="bi bi-person-circle me-2"></i>Profile</a></li>
                                <li>
                                    <?php echo '<a class="dropdown-item" href="Settings.php">' ?>
                                    <i class="bi bi-gear-fill me-2"></i>Settings</a></li>
                                <li>
                                <a class="dropdown-item" href="../includes/logout.php"><span class="glyphicon me-2">&#xe017;</span>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container-fluid mt-4">
            <div class="row gutters">
            <!-------------------------- (SIDE) PERSONAL DETAILS ---------------------------->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                    </div>
                                    <h5 class="user-name"><?php echo $clUrUsername ?></h5>
                                    <h6 class="user-email"><?php echo $clUremail ?></h6>
                                </div>
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="account" aria-selected="true">
                                        <i class="fa fa-home text-center"></i>
                                        Edit Profile
                                    </a>

                                    <a class="nav-link" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="password" aria-selected="false">
                                        <i class="fa fa-key text-center"></i>
                                        Account Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-------------------------- TAB CONTENT ---------------------------->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 tab-content" id="v-pills-tabContent">
        
        <!-------------------------- (EDIT) PERSONAL DETAILS ---------------------------->
                     <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                         <div class="card">
                            <form name="EditPersonalDetails" method="post">
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-2 text-primary mb-4">Personal Details</h6>
                                    </div>
                                    <input name="clUrID" value="<?php echo $clUrID ?>" hidden>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="fullName">First Name</label>
                                            <input name="clUrFirstname" type="text" class="form-control" 
                                            id="fullName" value="<?php echo $clUrFirstname ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="eMail">Last Name</label>
                                            <input name="clUrLastname" type="text" class="form-control" 
                                            id="eMail" value="<?php echo $clUrLastname ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="phone">Username</label>
                                            <input name="clUrUsername" type="text" class="form-control" 
                                            id="phone" value="<?php echo $clUrUsername ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="website">Phone</label>
                                            <input name="clUrcontact_num" type="number" class="form-control" 
                                            id="website" value="<?php echo $clUrcontact_num ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="website">Email</label>
                                            <input name="clUremail" type="email" class="form-control" 
                                            id="website" value="<?php echo $clUremail ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="website">Address</label>
                                            <input name="clUraddress" type="text" class="form-control" 
                                            id="website" value="<?php echo $clUraddress ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row gutters mt-3">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <button type="submit" formaction="../crud/tbusersUserUpdate.php"
                                            id="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    <!--
                                        None-urgent:
                                        Pa-add po ng cancel button na mag rerefresh ng page if kaya pa XD
                                    -->
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

        <!-------------------------- (EDIT) CHANGE PASSWORD ---------------------------->
                    <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <div class="card">
                        <form name="ChangePassword" method="post">
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-2 text-primary mb-4">Change Password</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                                <label for="fullName">Old Password</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="Old Password">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                                <label for="eMail">New Password</label>
                                                <input type="email" class="form-control" id="eMail" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                                <label for="phone">Confirm Password</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Re-enter New Password">
                                        </div>
                                    </div>
                                </div>
                                    <div class="row gutters mt-3">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="text-right">
                                                <button type="button" id="submit" name="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </form>
                        </div>
        <!-------------------------- (EDIT) DELETE ACCOUNT ---------------------------->
                        <div class="card">
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-2 text-primary mb-4">Account Deletion</h6>

                                        <button type="button" id="submit" name="submit" class="btn btn-primary">
                                            <?php  
                                                 echo '<a href="../crud/tbusersDeleteST.php?clUrID='.$clUrID.'">' ?>
                                                Delete Account <i class="bi bi-arrow-right"></i>
                                            <?php echo '</a>' ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
<?php
    }else
	{
		if($_SESSION['admin_sid']==session_id()){
			header("location:../includes/error.php");		
		}
		else{
				header("location:../login_template.php");
			}
	}
?>