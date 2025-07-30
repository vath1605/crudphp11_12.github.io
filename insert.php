<?php 
    session_start();
    include 'db.php';

    if(isset($_POST['btnRegister'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        if($name != '' && $email != '' && $pass != '' && $cpass != ''){
            if($pass == $cpass){
            $query = "INSERT INTO tbl_user(name,email,pass) VALUES ('$name','$email','$pass')";
            try {
                $res = mysqli_query($conn,$query);
            } catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
            }
            $_SESSION['msg'] = 'Insert Successfully.';
            $_SESSION['isSuccess']= true;
        }else{
            $_SESSION['msg'] = 'Password and Confirm Password is not match.';
            $_SESSION['isSuccess']= false;
        }
        header('Location: index.php');
        }else{
            $_SESSION['msg'] = 'Please input all data.';
            header('Location: index.php');
            $_SESSION['isSuccess']= false;
        }
    }


?>