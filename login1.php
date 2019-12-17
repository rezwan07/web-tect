<!DOCTYPE html>
<html xmlns:color="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #2082af;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        } 
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }


        span.psw {
            float: right;
            padding-top: 16px;
        } 
        }
    </style>
</head>
<body>

<h1 align="center"     >All Garments In One Place </h1>

<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <!--<div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div> -->

    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" name="Login">Login</button>
        <?php
            include "include/db_connect.inc.php"; 
            $pwerr=$unerr="";
            if(isset($_POST['Login']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql="select * from login where username = '$username' and password = '$password'";
                $result=mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                $rowcount=mysqli_num_rows($result); 
                    if ($row['username']==$username && $row['password']==$password)
                    {
                        echo "Login Successfull!!!".$row['username'];
                        echo '<script>alert("done ")</script>';
                        header("location:index.php");
                    }
                    else{
                        echo '<script>alert("invalid username or password ")</script>';
                    }
                }
            elseif (isset($_POST['Signup']))
            {
                header("location:signup.php");
            } 
        ?>
    </div>


</form>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<div class="container" style="background-color:#f1f1f1">
    <h4 align="center">Don't Have an Account?</h4>
    <button type="submit" name="Signup">Sign Up</button>

    <span class="psw">Forgot <a href="forgetpassword.php">password?</a></span>
</div></form>
</body>
</html>
