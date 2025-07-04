<!DOCTYPE html>
<html>
    <head>
        <center>
            <meta charset="UTF-8">
            <title>Login Form</title>
            <style>
                body{
        margin: 0;
        padding: 0;
        background:pink;
        font-family:sans-serif;

                    
                     
                }
                .form-container{
                    width:38%;
	                  padding:18px;
	                border-radius:14px;
	                background:#ffffff;
	                    box-shadow: 13px 14px 10px rgba(0,0,0,0.1)
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

input{
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
background:olivedrab;
color:white;
cursor:pointer;
font-weight:bold;
width:64px;
}
            </style>
    </head>
        <body>
        <div class="form-container">
            <form method="POST">
            <h1 style="COLOR:RED;"> LOGIN FORM </h1>
            <label for="username">First Name:</label>
          <input type="text"  id="username" name="username" placeholder="Enter your name" required>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
          <button type="submit" name="bs">LOGIN</button>
          <h4>New Register <a href="WBRGK.php" style="color: #00509e;text-decoration:none;font-weight:bold;">REGISTER</a></h4>
            </form>
            <?php
include 'Database connection.php';
session_start();
if(isset($_POST['bs'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['course'] = $row['course'];
        // Redirect to homepage
        header("Location: DASHBORD.PHP");
        exit();
    } else {
        echo "<script>alert('INVALID USERNAME OR PASSWORD');</script>";
    }
    
}
mysqli_close($con);
?>