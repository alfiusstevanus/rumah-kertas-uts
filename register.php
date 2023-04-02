<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Log-regist.css">
</head>


<body>
<section class="Left-content2">
        <h1 id="2h">SELAMAT<font color="#5907EF"> DATANG</font>
        </h1>
        <p class="fw-medium2" id="2p">Mari nikamati mudahnya membaca</p>

        <div class="Login-form2">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="username" class="form-control"  name="user_name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="user_password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telephone</label>
                    <input type="text" class="form-control" name="telephone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control"  name="user_password">
                </div>

                <!-- tambahin action untuk upload foto -->
                <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input type="file" class="form-control"  name="user_photo">
                </div>
                
                <!--  -->
                <button type="submit" class="btn btn-primary"  name="login_btn">REGISTER</button>
                <div class="logbtn">
                    <h6>Sudah punya akun?<a href="login.php"> Login here</a></h6>
                </div>
            </form>
        </div>
    </section>

    <section class="Right-content2">
        <span>
            <img  src="Assets/iconbuku_login.png" id="book-icon2" alt="">
        </span>
    </section>

</body>

</html>