<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <header class="container d-flex pt-2 justify-content-center">
        <nav class="w-25 h-auto px-5">
            <ul class="w-100 align-items-center justify-content-center h-100 d-flex bg-primary p-0 gap-4 py-2 rounded-pill">
                <li class="nav-link"><a class="text-decoration-none text-light fw-bold active" href="index.php">Register</a></li>
                <li class="nav-link"><a class="text-decoration-none text-light fw-bold" href="users.php">List</a></li>
            </ul>
        </nav>
    </header>
    <main class="container d-flex justify-content-center mt-5 pt-5">
        <form action="insert.php" class="col-5 shadow p-5 mt-4 rounded-5" method="post">
            <div class="mb-4"> 
                <h4 class="text-center">Form Register</h4>
                <p class="text-secondary text-center">Register with us to continue.</p>
            </div>
            <?php if(isset($_SESSION['msg'])){ ?>
                <div class="mb-3">
                    <div class="card <?= $_SESSION['isSuccess']? 'bg-success':'bg-danger' ?> " style="height: 60px;">
                        <div class="card-body text-center">
                            <p class="fw-bold text-light"><?= $_SESSION['msg'] ?></p>
                        </div>
                    </div>
                </div>
                <?php }
                unset($_SESSION['msg']);
                unset($_SESSION['isSuccess']);
                ?>
            <div class="mb-3">
                <label for="name" class="form-label">User Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="cpass" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpass" name="cpass">
            </div>
            <button type="submit" name="btnRegister" class="btn btn-primary">Submit</button>
        </form>
    </main>

        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>