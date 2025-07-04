<!DOCTYPE html>
<html>
    <head>
        <CENTER>
            <title>MY WEBPAGE</title>
        <body>
            <form method="POST">
            <h1 style="COLOR:RED;">MY REGISTRATION</h1>
          STUDENT NAME:  <input type="text" name="username" placeholder="Enter your name" required>
          STUDENT PASSWORD: <input type="password" name="password" placeholder="Enter your password" required>
          <button type="submit" name="sb">REGISTER</button>
            </form>
            <?php
            include 'Database connection.php';
            if(isset($_POST['sb'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
           $sql="INSERT INTO users(username,password)VALUES('$username','$password')";
           $execute=mysqli_query($con,$sql);
           if($execute){
           echo"REGISTRATION SUCCESSFULL";
            }else{
                echo"ERROR:".mysqli_error($con);
            }
        }
            ?>
        </body>
</html>