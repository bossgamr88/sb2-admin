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


    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        
        $query = "UPDATE register SET username='$username',email='$email',password='$password' WHERE id='$id' ";
        $query_run = mysqli_query($connection,$query);

        if($query_run )
        {
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: register.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location: register.php');
        }
    }

    if(isset($_POST['delete_btn']))
    {
        $id = $_POST['delete_id'];
        $query = "DELETE FROM register WHERE id='$id' ";
        $query_run = mysqli_query($connection,$query);

        if($query_run )
        {
            $_SESSION['success'] = "Your Data is DELETE";
            header('Location: register.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT DELETE";
            header('Location: register.php');
        }
       
    }

    if(isset($_POST['login_btn']))
    {
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
        $query_run = mysqli_query($connection,$query);

        if(mysqli_fetch_array($query_run))
        {
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        }
        else
        {
            $_SESSION['status'] = "Email id / Password is Invalid";
            header('Location: login.php');
        }
       
    }







?>