<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="stylelogin.css">
    <title>Selamat Datang di Website Holyay</title>
</head>
<body>
    <?php 
        if(isset($_GET["error"])){
            $error = $_GET["error"];
        }
        else{
            $error = "";
        }
        $message = "";
        if($error=="failed"){
            $message = "Failed to login, please login again";
        }
    ?>
    <p style="color:red"><?php echo $message;?></p>
    <form action="loginproses.php" method="post">
    <table>
        <tr>
    <td>PLEASE LOGIN TO ENTER</td>
    </tr>

    <tr><td><td></tr>
    <tr><td><td></tr>
    <tr><td><td></tr>
    <tr><td><td></tr>

        <tr>
        <td>Username</td>
        </tr>
    <tr>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
        <td>Password</td>
        </tr>

            <tr>

                <td><input type="password" name="password"></td>
            </tr>

            <tr>

                <td><input type="submit" name="login" value="login"></td>
            </tr>
        </table>
</body>
</html>

    