<?php 
session_start();
    $connection = mysqli_connect("localhost","root","","sb2_admin");

    if(isset($_POST['registerbtn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cppassword = $_POST['confirmpassword'];

        if($password === $cppassword){
            $query = "INSERT INTO register(username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection,$query);  
            if($query_run){
                // echo "Saved"; 
                $_SESSION['success'] = "Admin Profile Added";
                header('Location: register.php');
            }
            else
            {
                // echo "Not Saved"
                $_SESSION['status'] = "Admin Profile Added";
                header('Location: register.php');
            }
        }else{
            $_SESSION['status'] = "Password and Comfirm Password Dose Not Match";
            header('Location: register.php');
        }    
    }
    
?>