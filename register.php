<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn==false){
    dir('Error:Cannot connect');
}

if(isset($_POST["submit"])){
    if (empty($username) || empty($email) || empty($password)) {
        $error= 'all fields are required';
    }
    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Validate the form inputs
    
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email address';
    } else {
        // Store the user data in a database or a file
        $sql="INSERT INTO `users` (`username`, `email`, `password`) VALUES('$username', '$email', '$password');";
        $result=mysqli_query($conn,$sql);

       if($result){
        // Redirect the user to the dashboard
        echo "Table created successfully";
        $_SESSION['logged_in'] = true;
        header('Location: welcome.php');
       }
       else{
           echo "table was not inserted with any row";
       }
        exit;
    }
}
}
?>

<html>
    <head>
        <style>
            body{
                background-image:url('sign-in.png');
            }
        h3{
    text-align: center;
}
.sign-in{
    background-color:rgb(255,255,255, 0.5);
    border-radius:10px;
    height: 265px;
    width:280px;
    margin:80px 0 0 330px;
}
.submit{
    margin: 15px 0 0 167px;
    padding:5 15 5 15;
}
.log-in{
    color:black;
    text-decoration:none;
    border-radius:5px;
    margin:15px 0 0 400px;
    font-size:larger;
    padding:5 25 5 25;
}
a:hover{
    
    box-shadow:inset 0 150px 0 0 rgb(125, 125, 125);
    transition:0.5s;
}
input{
    margin-top:-15px;
    border-radius:10px;
    padding-right:50px;
    padding-bottom:5px;
}
p{
    font-size:large;
}
p,input{
    margin-left:25px;
}
.faheem{
    margin:-30px 0 35px 0; 
}
        </style>
        <body>
        <h3>SIGN-IN PAGE</h3>
            <hr>
            <form action="" method="post">
                <div class="sign-in">
                <p>Username:</p>
                <input type="text" name="username" id="inputUsername" placeholder="Username">


                <p>E-Mail:</p>
                <input type="email" name="email" id="inputPassword" placeholder="Enter E-Mail">


                <p>Password:</p>
                <input type="Password"name="password" id="confirmPassword" placeholder="Enter Password">
                <button class="submit" name="submit" type="submit">Sign in</button>
</div>
                <h3 class="faheem">Already have an account?</h3>
                <a class="log-in" href="login.php">log in</a>
                

            </form>
        </body>
    </head>
</html>