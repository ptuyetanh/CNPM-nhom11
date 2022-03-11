<!DOCTYPE html>
<html lang="vi" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>fastfood</title>
		<link rel="shortcut icon" href="./rose.png">
		<link rel="stylesheet" href="https://use.typekit.net/eqx3jwb.css">
		<link rel="stylesheet" type="text/css" href="css/register.css">
		<script>document.documentElement.className = "js";

var supportsCssVars = function supportsCssVars() {
  var e,
      t = document.createElement("style");
  return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e;
};

supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
	<body class="demo-1 loading">
		<main>
			<div class="message">Please view this demo on a desktop to see the effect.</div>
			<div class="frame">
			</div>
			<div class="content">
				<div class="grid">
					<div class="grid__item pos-2"><div class="grid__item-img" style="background-image:url(./img/img1.PNG);" class="hover" ></div></div>
					<div class="grid__item pos-3"><div class="grid__item-img" style="background-image:url(./img/img2.jpg);" class="hover"></div></div>
					<div class="grid__item pos-4"><div class="grid__item-img" style="background-image:url(./img/img3.jpg);" class="hover"></div></div>
					<div class="grid__item pos-1"><div class="grid__item-img" style="background-image:url(./img/img4.PNG);" class="hover"></div></div>
					<div class="grid__item pos-5"><div class="grid__item-img" style="background-image:url(./img/img5.jpg);" class="hover"></div></div>
					<div class="grid__item pos-6"><div class="grid__item-img" style="background-image:url(./img/img6.jpg);" class="hover"></div></div>
					<div class="grid__item pos-7"><div class="grid__item-img" style="background-image:url(./img/img7.PNG);" class="hover"></div></div>
					<div class="grid__item pos-8"><div class="grid__item-img" style="background-image:url(./img/img8.jpg);" class="hover"></div></div>
					<div class="grid__item pos-9"><div class="grid__item-img" style="background-image:url(./img/img9.jpg);" class="hover"></div></div>
					<div class="grid__item pos-10"><div class="grid__item-img" style="background-image:url(./img/img10.jpg);" class="hover"></div></div>
				</div>
					
                <h2 class="content__title no-select" >
					<span style="font-size: 100px;">FAST FOOD</span>
				</h2>
		

                <form action="register_submit.php" method="POST">
                            <div class="main">
                                <div class="top">             
                                    <div class="form-group">
                                        <div class="check_email">
                                        <input type="email" id="email" name="email" class="form-control input-lg" required
                                            autoforcus placeholder="Email">
                                        <!-- <span class="material-icons-outlined correct_email">check_circle_outline</span>
                                        <span class="material-icons-outlined wrong_email" >cancel</span> -->
                                        </div>
                                        
                                        <div class="check_user_name">
                                        <input type="text" id="username" name="username" class="form-control input-lg"
                                            placeholder="Tên người dùng" required autoforcus>
                                        <!-- <span class="material-icons-outlined correct_user">check_circle_outline</span>
                                        <span class="material-icons-outlined wrong_user" >cancel</span> -->
                                        </div>
                                        
                                        <input type="password" id="password" name="password" class="form-control input-lg"
                                            placeholder="Mật khẩu" required autoforcus>
                                        </div>
                                        <div class="btn">
                                        <button type="submit" name="submit" id="btn" >Đăng kí</button>
                                        </div> 
                                        <br /> 
                                        <div class="mid">
                                            <div class="mid1">
                                                <p>
                                                    Bạn có tài khoản ? <a style="font-size:15px;color:#385185;" href="login.php">Đăng nhập</a>
                                                </p>

                                            </div>

                                        </div>
                                        </form> 
			</div>

			</div>
		</main>
        <svg class="cursor" width="80" height="80" viewBox="0 0 80 80">
			<circle class="cursor__inner" cx="40" cy="40" r="20"></circle>
		</svg>
		<script src="js/login.js"></script>
	</body>
</html>