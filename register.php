<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accounts/emailsignup/</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                                                                      
                        <form action="register_submit.php" method="POST">
                            <div class="main">
                                <div class="top">             
                                    <div class="form-group">
                                        <div class="check_email">
                                        <input type="text" id="email" name="email" class="form-control input-lg" required
                                            autoforcus placeholder="Email">
                                        <span class="material-icons-outlined correct_email">check_circle_outline</span>
                                        <span class="material-icons-outlined wrong_email" >cancel</span>
                                        </div>
                                        
                                        <div class="check_user_name">
                                        <input type="text" id="username" name="username" class="form-control input-lg"
                                            placeholder="Tên người dùng" required autoforcus>
                                        <span class="material-icons-outlined correct_user">check_circle_outline</span>
                                        <span class="material-icons-outlined wrong_user" >cancel</span>
                                        </div>
                                        
                                        <input type="password" id="password" name="password" class="form-control input-lg"
                                            placeholder="Mật khẩu" required autoforcus>
                                        </div>
                                        <div class="btn">
                                        <button type="submit" name="submit" id="btn" >Đăng kí</button>
                                        </div> 
                                        <br /> 
                                        </form> 
                                
                                <div class="p">
                                    <p>Bằng cách nhấp vào đăng ký, bạn đồng ý với chính sách và điều khoản của chúng tôi</p>

                                </div>

                                </div>
                                

             

          
                <div class="mid">
                    <div class="mid1">
                        <p>
                            Bạn có tài khoản ? <a style="font-size:15px;color:#385185;" href="login.php">Đăng nhập</a>
                        </p>

                    </div>

                </div>
             
           
            </div>
        </div>
            

            

            
        




    </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
     
        
</body>

</html>