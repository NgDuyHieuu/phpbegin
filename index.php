<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebPHP</title>
</head>
    <script src = "main.js">        
    </script>
<style>
    .background{
        width: 100%;
        height: 100%;
        background-color: rgb(149, 236, 236);
    }
    .box {
    width: 350px;
    height: 560px;
    background-color: white;
    position: absolute;
    top: 80px;
    left: 40%;
    border-width :4px;
    border-style: solid;
    border-color: black;
    border-radius: 10px;
    }
    .title{
        position: absolute;
        left: 120px;
    }
    .button{
        position: absolute;
        left: 120px;
        top : 435px;
        width: 100px;
        height: 40px;
        background-color: aquamarine;
        border-radius: 10px;
    }
    .signup{
        position: absolute;
        top: 70px;
        
    }
    .Input{
        margin-top : 15px;
        margin-left : 5px;
        width: 94%;
        height: 40px;
        border: 1px solid grey;
        border-radius: 10px;
        text-align: center;       
    }

    .MES{
        color: red;
        margin: 0%;
    }
    
</style>

<?php
    $error = [];
    $email = "";
    $password = "";
    $fullName = "";
    $birth = "";
    $phone = "";
    $ok = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ok = 1;
        if(empty($_POST['fullName'])){
            $ok = 0;
            $error['fullName'] = "Họ Tên không được bỏ trống!";
        }else {
            $fullName = $_POST['fullName'];
        }
        if(empty($_POST['birth'])){
            $ok = 0;
            $error['birth'] = "Ngày sinh không được bỏ trống!";
        }else {
            $birth = $_POST['birth'];
        }
        if(empty($_POST['phone'])){
            $ok = 0;
            $error['phone'] = "Số điện thoại không được bỏ trống!";
        }else {
            $email = $_POST['phone'];
        }
        if(empty($_POST['email'])){
            $ok = 0;
            $error['email'] = "Địa chỉ email không được bỏ trống!";
        }else {
            $email = $_POST['email'];
        }
        if(empty($_POST['password'])){
            $ok = 0;
            $error['password'] = "Mật khẩu không được bỏ trống!";
        }else {
            $password = $_POST['password'];
        }


    }

    function getError($key, $error){
        if(array_key_exists($key, $error)) {
            return $error[$key];
        }
        return null;
    }
    
    
   if($ok == 1){
        echo '<script type="text/javascript">
        var result = confirm("Chúc mừng! Bạn đã đăng kí thành công.");
        </script>';
   }
    
?>

<body>
    <div class = "background"> 
        <div class = "box">
            <h1 class = "title">Sign Up</h1>
            <div class = "signup">
                <form method = "POST" action = "<?php htmlentities($_SERVER["PHP_SELF"])?>"> 
                        <input name = "fullName" type="text" class = "Input" placeholder = "Họ tên" value = "$fullName"  /> <b style = "color: red">*</b>
                        <p class = "MES"><?php echo getError("fullName", $error) ?></p>
                        <input name = "birth" type="text" class = "Input" placeholder = "Ngày sinh"/> <b style = "color: red">*</b>
                        <p class = "MES"><?php echo getError("birth", $error) ?></p>
                        <input name = "phone" type="text" class = "Input" placeholder = "Số điện thoại"/> <b style = "color: red">*</b>
                        <p class = "MES"><?php echo getError("phone", $error) ?></p>
                        <input name = "address" type="text" class = "Input" placeholder = "Địa chỉ"/>
                        <input name = "email" type="email" class = "Input" placeholder = "Địa chỉ email"/> <b style = "color: red">*</b>
                        <p class = "MES"><?php echo getError("email", $error) ?></p>
                        <input name = "password" type="password" class = "Input" placeholder = "Mật khẩu"/> <b style = "color: red">*</b>
                        <p class = "MES"><?php echo getError("password", $error) ?></p>                    
                        <button class= "button" >Submit</button>
                </form>
            </div>
           

        </div>
    </div>
</body>
</html>



