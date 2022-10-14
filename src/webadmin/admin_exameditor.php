<?php
include '../includes/connectdb.php';
	if($_SESSION['admin_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html>
    <head>
        <title>Erovoutika Exam Website - Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
            crossorigin="anonymous"
        />

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/admin_exameditor_style.css">
    </head>

    <body id="body-pd">
        <header class="header shadow" id="header">
            <div class="header_toggle"> 
                <i class='bx bx-menu' id="header-toggle"></i> 
            </div>
            <div id="i--account--admin">
                <div class="header_img"> 
                    <a href="AdminProfile.php">
                        <img src="../images/Display Picture Icon.png" alt="display picture"> 
                    </a>
                </div>
                <div>
                    <button type="button" class="btn ms-4 mt-2">
                        <a href="../includes/logout.php" class="fw-bold" id="i--button--logout">Logout</a>
                    </button>
                </div>
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <!-- Admin Home with Logo -->
                    <a href="AdminHome.php" class="nav_logo"> 
                        <i>
                            <img src="../images/Small Logo.png" alt="Erovoutika Logo" id="i--logo--erovoutika">
                        </i> 
                        <span class="nav_logo-name fs-5 fw-bold">Erouvotika</span> 
                    </a>
                    <div class="nav_list"> 
                        <a href="AdminHome.php" class="nav_link"> 
                            <i class='bx bx-grid-alt nav_icon'></i> 
                            <span class="nav_name">Dashboard</span> 
                        </a> 
                        <a href="AdminProfile.php" class="nav_link">
                            <i class='bx bx-user nav_icon'></i> 
                            <span class="nav_name">Edit Profile</span> 
                        </a>
                        <a href="admin_usertable.php" class="nav_link"> 
                            <i class='bx bx-table nav_icon'></i>
                            <span class="nav_name">User Table</span> 
                        </a> 
                        <a href="AdminExamList.php" class="nav_link active"> 
                            <i class='bx bx-message-square-detail nav_icon'></i> 
                            <span class="nav_name fw-bold">Exam List</span> 
                        </a>
                    </div>
                </div> 
                    <a href="adminsignup_template.php"  class="btn btn-primary ms-3 mb-3">
                        <i class="bi bi-pencil-square"></i> 
                        <span class="nav_name" id="i--label--signout">Sign Up</span>
                    </a>
                </div> 
            </nav>
        </div>

        <!--Container Main start-->
        <div class="height-100" id="i--container--mainContent">
            <!-- Edit Exam -->
            <div class="row mx-5">
                <div class="container m-3">
                    <div class="card">
                        <div class="card-body m-3">
                            <!-- Edit Exam -->
                            <div class="row mt-1">
                                <div class="col display-6">
                                    EDIT EXAM
                                </div>
                            </div>
                            <!-- Blue Line -->
                            <div class="row">
                                <div class="col-3" id="i--line--blue"></div>
                            </div>
                            <!-- Exam Container -->
                            <div class="row m-2">
                                <div class="container">
                                    <div class="row">
                                        <!-- Exam Name -->
                                        <div class="row">
                                            <div class="card mt-3">
                                                <div class="card-body m-1">
                                                    <div class="row">
                                                        <div class="col-12 mt-1">
                                                            <label for="i--input--examName" class="card-title text-primary text-uppercase fs-3 fw-bold form-label">
                                                                Exam Name
                                                            </label>
                                                            <input type="text" class="form-control card-text text-dark fs-6" id="i--input--examName" value="Sample Exam Name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Exam Info -->
                                        <div class="row">
                                            <div class="card mt-3">
                                                <div class="card-body m-1">
                                                    <div class="row">
                                                        <div class="col-12 mt-1">
                                                            <label for="i--input--examInfo" class="card-title text-primary text-uppercase fs-3 fw-bold form-label">
                                                                Exam Information
                                                            </label>
                                                            <textarea type="text" class="form-control card-text text-dark fs-6" id="i--input--examInfo"  cols="30" rows="5">Sample Information</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Exam Instructions -->
                                        <div class="row">
                                            <div class="card mt-3">
                                                <div class="card-body m-1">
                                                    <div class="row">
                                                        <div class="col-12 mt-1">
                                                            <label for="i--input--examInst" class="card-title text-primary text-uppercase fs-3 fw-bold form-label">
                                                                Exam Instructions
                                                            </label>
                                                            <textarea type="text" class="form-control card-text text-dark fs-6" id="i--input--examInst"  cols="30" rows="5">Sample Instruction</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit Question -->
            <div class="row mx-5">
                <div class="container m-3">
                    <div class="card">
                        <div class="card-body m-3">
                            <!-- Edit Question -->
                            <div class="row mt-1">
                                <div class="col display-6">
                                    EDIT QUESTION
                                </div>
                            </div>
                            <!-- Blue Line -->
                            <div class="row">
                                <div class="col-3" id="i--line--blue"></div>
                            </div>
                            <!-- Exam Container -->
                            <div class="row m-2">
                                <div class="container">
                                    <div class="row">
                                        <!-- Question 1 -->
                                        <div class="row">
                                            <div class="card mt-3">
                                                <div class="card-body m-1">
                                                    <div class="row">
                                                        <div class="col text-primary fs-2 fw-bold">
                                                            QUESTION ID: 1
                                                        </div>
                                                    </div>
                                                    <div class="row my-4 mx-4">
                                                        <label for="i--input--questBody" class="card-title text-dark text-uppercase fs-4 form-label">
                                                            Question Body
                                                        </label>
                                                        <textarea type="text" class="form-control card-text text-dark fs-5" id="i--input--examInfo"  cols="30" rows="4">Sample Question</textarea>
                                                    </div>
                                                    <div class="row my-4 mx-4">
                                                        <label for="i--input--questBody" class="card-title text-dark text-uppercase fs-4 form-label">
                                                            Answer/s
                                                        </label>
                                                        <table class="table table-hover table-bordered">
                                                            <caption>Choices</caption>
                                                            <thead class="fs-5">
                                                                <tr>
                                                                    <th scope="col">Correct</th>
                                                                    <th scope="col">Choice</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Choice A -->
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control card-text text-dark fs-5" id="i--input--examInfo" value="Sample Choice">
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                                    </td>   
                                                                </tr>
                                                                <!-- Choice B -->
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control card-text text-dark fs-5" id="i--input--examInfo" value="Sample Choice">
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                                    </td>
                                                                </tr>
                                                                <!-- Choice C -->
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control card-text text-dark fs-5" id="i--input--examInfo" value="Sample Choice">
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                                    </td>
                                                                </tr>
                                                                <!-- Add -->
                                                                <tr>
                                                                    <td colspan="3">
                                                                        <button type="button" class="btn btn-primary">Add Another Answer</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="row my-4 mx-4">
                                                        <div class="col-9"></div>
                                                        <div class="col-3">
                                                            <button type="button" class="btn btn-danger fs-3">Delete Question</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 2 -->
                                        <div class="row mt-3">
                                            <div class="card mt-3">
                                                <div class="card-body m-1">
                                                    <div class="row">
                                                        <div class="col text-primary fs-2 fw-bold">
                                                            QUESTION ID: 2
                                                        </div>
                                                    </div>
                                                    <div class="row my-4 mx-4">
                                                        <label for="i--input--questBody" class="card-title text-dark text-uppercase fs-4 form-label">
                                                            Question Body
                                                        </label>
                                                        <textarea type="text" class="form-control card-text text-dark fs-5" id="i--input--examInfo"  cols="30" rows="4">Sample Question. Fill in the __________.</textarea>
                                                    </div>
                                                    <div class="row my-4 mx-4">
                                                        <label for="i--input--questBody" class="card-title text-dark text-uppercase fs-4 form-label">
                                                            Answer/s
                                                        </label>
                                                        <textarea type="text" class="form-control card-text text-dark fs-5" id="i--input--examInfo"  cols="30" rows="2">Sample Answer</textarea>
                                                    </div>
                                                    <div class="row my-4 mx-4">
                                                        <div class="col-9"></div>
                                                        <div class="col-3">
                                                            <button type="button" class="btn btn-danger fs-3">Delete Question</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add -->
                                        <div class="row mt-3">
                                            <div class="col-9"></div>
                                            <div class="col-3">
                                                <button type="button" class="btn btn-primary fs-3">Add Another Question</button>
                                            </div>
                                        </div>
                                        <!-- Add Card -->
                                        <div class="card mt-3 invisible">
                                            <div class="card-body m-1">
                                                <div class="row mt-3">
                                                    <div class="col-5 text-primary fs-2 fw-bold">
                                                        ADD NEW QUESTION
                                                    </div>
                                                    <div class="col-4">
                                                        <button class="btn btn-primary dropdown-toggle"
                                                            type="button"
                                                            id="dropdownMicroProcessor"
                                                            data-bs-toggle="dropdown" 
                                                            aria-expanded="false">
                                                            Button Dropdown
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMicroProcecsor">
                                                            <li><a class="dropdown-item" href="#">Microcontroller</a></li>
                                                            <li><a class="dropdown-item" href="#">Embedded Processor</a></li>
                                                            <li><a class="dropdown-item" href="#">DSP</a></li>
                                                            <li><a class="dropdown-item" href="#">Media Processor</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <button type="button" class="btn btn-primary fs-3">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Container Main end-->
        
        <footer>
            <!-- This is where the footer is -->
        </footer>

        <!-- Custom Javascript -->
        <script src="../javascript/admin_home_script.js"></script>
    
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    </body>
</html>
<?php
	}else
	{
		if($_SESSION['client_sid']==session_id()){
			header("location:404.php");		
		}
		else{
				header("location:../login_template.php");
			}
	}
?>