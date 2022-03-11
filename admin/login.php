<! DOCTYPE html>  
<html lang="en" >  
<head>  
  <meta charset="UTF-8">  
  <title> Food Title </title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
</head>  
<style>  
html {   
    height: 100%;   
}  
body {   
    height: 100%;   
}  
.global-container {  
    height: 100%;  
    display: flex;  
    align-items: center;  
    justify-content: center;  
    background-color: #f5f5f5;  
}  
form {  
    padding-top: 10px;  
    font-size: 14px;  
    margin-top: 30px;  
}  
.card-title {   
font-weight: 300;  
 }  
.btn {  
    font-size: 14px;  
    margin-top: 20px;  
}  
.login-form {   
    width: 330px;  
    margin: 20px;  
}  
.sign-up {  
    text-align: center;  
    padding: 20px 0 0;  
}  
.alert {  
    margin-bottom: -30px;  
    font-size: 13px;  
    margin-top: 20px;  
}  
</style>  
<body>  
<div class="pt-5">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> Login admin </h3>  
        <div class="card-text">  
            <form class="form-signin" action="process-loginadmin.php" method="post">  
                <div class="form-group">  
                    <label for="exampleInputEmail1"> Enter Email address </label>  
                    <input type="email" class="form-control form-control-sm" name ="txtEmail" id="exampleInputEmail1" aria-describedby="emailHelp">  
                </div>  
                <div class="form-group">  
                    <label for="exampleInputPassword1">Enter Password </label>  
                    <input type="password" class="form-control form-control-sm" name="txtPass" id="exampleInputPassword1">  
                </div>  
                <button type="submit" class="btn-block border border-light" name="btnSignIn" style="background-color:rgb(255, 145, 0)"> Sign in 
                </button>   
                <?php
                if(isset($_GET['error'])){
                  echo "<h5 style = 'color:red'> {$_GET['error']} </h5>";
                }
                ?>
            </form>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html>