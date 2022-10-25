<?php
include '../includes/connectdb.php';
	if($_SESSION['admin_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="signup.php" method="post">
            
            <label for="clUrFirstname">First Name</label>
            <input type="text" name="clUrFirstname" placeholder=" First Name ">

            <label for="clUrLastname">Last Name</label>
            <input type="text" name="clUrLastname" placeholder=" Last Name ">
            
            <br>

            <label for="clUrUsername">Username</label>
            <input type="text" name="clUrUsername" placeholder=" Username ">
            
            <br>

            <label for="clUrPassword">Password</label>
            <input type="password" name="clUrFirstname" placeholder=" Password ">
            
            <br>

            <label for="clUrcontact_num">Contact Number</label>
            <input type="text" name="clUrcontact_num" placeholder=" Contact Number ">
            
            <label for="clUremail">Email</label>
            <input type="text" name="clUremail" placeholder=" Email ">
            
            <br>

            <!-- For User Level:
                - This template returns a modified value to the database,
                unlike from the tbusers_adddefault, this sign-up redirects to another add sql query.

                Pros: It differenciate the user level if we would be adding more user level and also an admin.
                Cons: I dont think this is the standard way of doing it 🤣🤣

                Suggestions are always welcome~
            -->
            <label for="clUrLevel">User Level</label>
            <select name="clUrLevel">
                <option value="0">[0]Admin</option>
				<option value="1">[1]Client</option>
            </select>

            <label for="clUraddress">Address</label>
            <input type="text" name="clUraddress" placeholder=" Address ">

            <br>
            
            <!-- Need to redirect later -->
            <button type="submit" formaction="crud/tbusers_adddefault.php"> Sign Up </button>
            <button type="reset"> Clear </button>

        </form>

        <a href="AdminHome.php">
            <p>Return</p>
        </a>
    </body>
</html>
<?php
	}else
	{
		if($_SESSION['staff_sid']==session_id()){
			header("location:../includes/error.php");		
		}
		else{
			if($_SESSION['customer_sid']==session_id()){
				header("location:../includes/error.php");		
			}else{
				header("location:../login_template.php");
			}
		}
	}
?>