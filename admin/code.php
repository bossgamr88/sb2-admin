<?php 
include('security.php');

session_start();
    $connection = mysqli_connect("localhost","root","","sb2_admin");

    if(isset($_POST['registerbtn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cppassword = $_POST['confirmpassword'];
        $usertype = $_POST['usertype'];

        if($password === $cppassword){
            $query = "INSERT INTO register(username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
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
        $usertypeupdate = $_POST['update_usertype'];
        
        $query = "UPDATE register SET username='$username',email='$email',password='$password',usertype='$usertypeupdate' WHERE id='$id' ";
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

    // Login code (logincode.php)
    if(isset($_POST['login_btn']))
    {
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
        $query_run = mysqli_query($connection,$query);
        $usertypes = mysqli_fetch_array($query_run);

        
        if($usertypes['usertype'] == "admin")
        {
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        }
        else if($usertypes['usertype'] == "user")
        {
            $_SESSION['username'] = $email_login;
            header('Location: ../index.php');
        }
        else
        {
            $_SESSION['status'] = "Email id / Password is Invalid";
            header('Location: login.php');
        }
       
    }


    // insert about us
    if(isset($_POST['about_save']))
{
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $links = $_POST['links'];

    $query = "INSERT INTO abouts (title,subtitle,description,links) VALUES ('$title','$subtitle','$description','$links')";
    $query_run = mysqli_query($connection,$query);

    if ($query_run) {
        $_SESSION['success'] = "About Us Added";
        header('Location: aboutus.php');
    }else{
        $_SESSION['status'] = "About Us Not Added";
        header('Location: aboutus.php');
    }

}

    // edit abouts
    if(isset($_POST['about_edit_btn']))
{
    $id = $_POST['about_edit_id'];
    $title = $_POST['edit_title'];
    $subtitle = $_POST['edit_subtitle'];
    $description = $_POST['edit_description'];
    $links = $_POST['edit_links'];

    $query = "UPDATE abouts SET title='$title',subtitle='$subtitle',description='$description',links='$links' WHERE id='$id' "; 
    $query_run = mysqli_query($connection,$query);

    if ($query_run) {
        $_SESSION['success'] = "About Us Updated";
        header('Location: aboutus.php');
    }else{
        $_SESSION['status'] = "About Us Not Updated";
        header('Location: aboutus.php');
    }

}

if(isset($_POST['about_delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM abouts WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run )
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: aboutus.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header('Location: aboutus.php');
    }
   
}


?>