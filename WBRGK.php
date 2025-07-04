
<!DOCTYPE HTML>
<head>
<center>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
</head>
<body>
  <div class="form-container">
    <h1>Student Registration Form</h1>
    <form method="POST">
      <label for="username">First Name:</label>
      <input type="text" id="username" name="username" placeholder="Enter your first name" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      <label for="course">Course:</label>
      <select id="course" name="course">
	  <option selected>Select the Course</option>
        <option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
        <option value="FITTER">FITTER</option>
        <option value="DMC">DMC</option>
		<option value="RAC">RAC</option>
		<option value="WELDER">WELDER</option>
		<option value="SURVEYER">SURVEYER</option>
    <option value="ELETRICAN">ELETRICAN</option>
      </select>
      <button type="Submit" name="kb">Register</button>
	<h4>Already have an account?   <a href="LG.php" style="color: #00509e;text-decoration:none;font-weight:bold;">Login</a></h4>
	</form>
	<?php
            include 'Database connection.php';
            if(isset($_POST['kb'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
			$email=$_POST['email'];
			$course=$_POST['course'];
           $sql="INSERT INTO users(username,password,email,course)VALUES('$username','$password','$email','$course')";
           $execute=mysqli_query($con,$sql);
           if($execute){
           header("Location:LG.php ?success=1");
           
            }else{
                echo"<script> alert('ERROR ALREADY REGISTER THE EMAIL ');</script>";
            }
        }
            ?>
	  <style>
	  body{
	  font-family:sans-serif;
	  padding:0px;
	  background:pink;
	  }
	  .form-container{
	  width:38%;
	  padding:18px;
	  margin: ;
	  border-radius:14px;
	  background:#ffffff;
	  box-shadow: 13px 14px 10px rgba(0,0,0,0.1)
	  }
	  h1{
	  text-align:center;
	  color:red;
	  }

form{
display:flex;
flex-direction:column;
}

label{
margin-top:12px;
text-align:left;
font-weight:bold;
}

input,Select{
padding:8px;
margin-top:5px;
border-radius:4px;
border: 1px solid #333;
}

button{
width:40px;
margin-top:20px;
padding:5px;
border:none ;
border-radius:4px;
}

button[type="submit"]{
background:#04AA6D;
color:white;
cursor:pointer;
font-weight:bold;
width:64px;
}

button[type="reset"]{
background:#f44336;
color:white;
cursor:pointer;
font-weight:bold;
width:64px;
}
</style>
</div>
</body>
</html>