<?php session_start();
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body></body>
<?php 
    if(isset($_GET['deleteId'])){
        $id = $_GET['deleteId'];
        $query = "SELECT * FROM tbl_user WHERE id='$id'";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);    
        
        ?>
            <main class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="card col-4">
            <div class="card-header">
                Final Desession
            </div>
            <div class="card-body">
                <h5 class="card-title">Do you really want to delete this user ?</h5>
                <h5>User name : <?= $row['name'] ?></h5>
                <h5>Email : <?= $row['email'] ?></h5>
                <form action="" method="post" class="d-flex gap-3 float-end">
                    <button type="submit" name="delete" class="btn btn-danger">Yes, Delete it</button>
                    <a href="users.php" class="btn btn-secondary">No, Don't delete it</a>
                </form>
            </div>
            </div>
            </main>
        <?php
        if(isset($_POST['delete'])){
            $query = "DELETE FROM tbl_user WHERE id = $id";
            $res = mysqli_query($conn,$query);
            if($res){
                $_SESSION['msg'] = "Information Deleted Successfully.";
                $_SESSION['isSuccess'] = true;
                header('Location: index.php');
            }
        }
    }
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>