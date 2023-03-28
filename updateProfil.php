<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Buku</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="icon/home.png" type="image/png">

</head>

<body>
    <?php $id = $_SESSION["user_id"]; ?>

    <div class="container">
        <div class="block">
            <br>
            <br>
        </div>
        <form method="post" action="actionUpdate.php?user_id=<?php echo $id ?>">
            <br>
            <h3>UPDATE Profil</h3>
            <h6 class="mb-3">ID: <?php echo $_SESSION['user_id']; ?> </h6>
            <h6>Email:</h6>
            <div class="input">
                <input type="text" name="user_email" value="<?php echo $_SESSION['user_email'] ?>">
                <i class="bx bx-user"></i>
            </div>
            <h6>Nama :</h6>
            <div class="input">
                <input type="text" name="user_name" value="<?php echo $_SESSION['user_name'] ?>">
                <i class="bx bx-envelope"></i>
            </div>
            <br>
            <span>
                <button name="button" type="submit" class="contoh btn btn-success">UPDATE</button>
                <a class=" btn btn-secondary mr-10" href="profil.php" role="button">Kembali</a>
            </span>
        </form>
    </div>
</body>

</html>