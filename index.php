<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap_a.css">
    <title>Login Form in PHP </title>
</head>
<body style="background: #ccc;">
    <div class="container" >
        <div class="row" >
            <div class="col-lg-5 m-auto " style="background:  blueviolet">
                <div class="card-bg-dark mt-5">
                    <div class="card-title-bg-primary ">
                        <h3 class="text-center py-3">Login Form in PHP</h3>
                    </div>

                    <?php
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center my-3"><?php echo $_GET['Empty'] ?></div>
                    <?php
                        }
                    ?>


                    <?php
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center my-3"><?php echo $_GET['Invalid'] ?></div>
                    <?php
                        }
                    ?>

                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="Uname" placeholder="User Name" class="form-control mb-4" >
                            <input type="password" name="Password" placeholder="Password" class="form-control">
                            <button class="btn btn-success mt-3" name="login">Loging</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>