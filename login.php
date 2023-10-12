<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebPHP</title>
</head>

<?php
    $error = [];
    $email = "";
    $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['email'])){
            $error['email'] = "Email is required!";
        }else {
            $email = $_POST['email'];
        }
        if(empty($_POST['password'])){
            $error['password'] = "Password is required!";
        }else {
            $email = $_POST['password'];
        }
    }

    function getError($key, $error){
        if(array_key_exists($key, $error)) {
            return $error[$key];
        }
        return null;
    }
    
?>

<body>
    <div> 
            <form method = "POST" action = "<?php htmlentities($_SERVER['PHP_SELF'])?>">
                <div>
                    <h2><label>Email:</label></h2>
                    <input name = "email" type="email" class = "IN">
                    <p class = "MESS"><?php echo getError("email", $error) ?></p>
                </div>
                <div>
                    <h2><label>Password: </label></h2>
                    <input name = "password" type="password" class = "IN">
                    <p class = "MESS"><?php echo getError("password", $error) ?></p>
                </div>
                <button style = "width : 100px">Login</button>
            </form>
    </div>

<style>
    .MESS{
        color : red;
    }
    .IN{
        display: flex;
        min-width: 90px;
        width: 350px;
    }
</>

    
</body>
</html>



