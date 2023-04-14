<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn==false){
    dir('Error:Cannot connect');
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username)){
        header("Location: index.php?error=Username is required");
        exit();
    }
    else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }
    else{
    $sql="SELECT * FROM `users` WHERE username='$username' and password='$password';";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)){
        $_SESSION['logged_in'] = true;
        header('Location: welcome.php');
        exit;
    } else {
        $alert="<script>alert('Incorrect Username or password');</script>";
        echo $alert;
    }
}
}
?>

<html>
    <head>
        <style>
        body{
            margin:0;
            padding: 0;
           background-image: url('back_p.jpg');
        }
        .login{
            margin-left: 350px;
            margin-top: 70px;
            height:330px;
            width:300px;
            background-color: rgb(0, 0, 0, 0.5);
            border-radius: 10px;
            text-align: justify;
        }
        p,input{
           margin-top: 30px;
          margin-left: 50px;
        }
        p{
            font-size: large;
        }
        input{
            margin-top: -10px;
            background-color: rgb(255, 255, 255, 0.5);
            padding-right: 45px;
            padding-bottom: 5px;
            border-radius: 5px;
            border:none;
        }
        button{
            background-color: rgb(237, 245, 251, 0.5);
           margin-left: 370px;
           font-size: large;
           border-radius: 5px;
           padding-left: 30px;
           padding-right: 30px;
        }
        h2{
            margin-left:75px;;
        }
        a{
            margin-left:40px;
        }
        </style>
    </head>
    <body>
    <?php if (isset($error)): ?>
        <p style="color: red;">
            <?php echo $error; ?>
        </p>
    <?php endif; ?>
        <form action="" method="post">
             <div class="login">
             <h2>Login Form</h2>
             <p>Username:</p>
             <input type="text" name="username" class="ue" placeholder="Username">

             <p>Password:</p>
             <input type="password" name="password" class="up" placeholder="Password">
            
             <p>Confirm-Password:</p>
             <input type="password" class="ucp" placeholder="Confirm-Password">
             <h4>Don't Have an Account?
                 <a href="register.php">sign in</a>
             </h5>
             </div>
             <p><button>log in</button></p>
            </form>
    </body>
</html>