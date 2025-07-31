
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
                <li class="nav-link"><a class="text-decoration-none text-light fw-bold" href="index.php">Register</a></li>
                <li class="nav-link"><a class="text-decoration-none text-light fw-bold active" href="users.php">List</a></li>
            </ul>
        </nav>
    </header>
    <main class="container pt-4 mt-3">
        <table class="table table-striped table-hover text-center align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email Address</th>
                    <th>Password</th>
                    <th>Creation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'db.php';
                    $query = "SELECT * FROM tbl_user";
                    try {
                        $res = mysqli_query($conn,$query);
                    } catch (mysqli_sql_exception $e) {
                        echo $e->getMessage();
                    }
                    if(mysqli_num_rows($res)>0){
                        foreach($res as $row){
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['pass'] ?></td>
                    <td><?= $row['cr_date'] ?></td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <a href="edit.php?editId=<?= $row['id'] ?>" class="btn d-flex justify-content-center align-items-center gap-1 btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
                            Edit</a>
                        <a href="delete.php?deleteId=<?= $row['id'] ?>" class="btn d-flex justify-content-center align-items-center gap-1 btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg>
                            Delete</a>
                        </div>
                    </td>
                </tr
                <?php } 
                    }else{
                        ?>
                        <tr>
                            <td colspan="7" class="p-0">
                                <p class="text-secondary mt-2">No data found.</p>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>