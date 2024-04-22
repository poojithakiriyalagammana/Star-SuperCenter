<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['register_btn']))
{
    $Full_Name=mysqli_real_escape_string($con,$_POST['Full_Name']);
    $Username=mysqli_real_escape_string($con,$_POST['Username']);
    $Email=mysqli_real_escape_string($con,$_POST['Email']);
    $Phone_Number=mysqli_real_escape_string($con,$_POST['Phone_Number']);
    $Password=mysqli_real_escape_string($con,$_POST['Password']);
    $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
    $Address=mysqli_real_escape_string($con,$_POST['Address']);
    $City=mysqli_real_escape_string($con,$_POST['City']);

    $check_email_query = "SELECT Email From registration1 WHERE Email='$Email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run)>0);
    {
        $_SESSION['message']="Email already registered";
        header('Location: ../register.php');

    }
 
        if($Password==$cpassword)
        {  
            //insert user data 
            $insert_query = "INSERT INTO registration1 (Full_Name,Username,Email,Phone_Number,Password,Address,City) VALUES ('$Full_Name','$Username','$Email','$Phone_Number','$Password','$Address','$City')";
            $insert_query_run = mysqli_query($con,$insert_query);
            
            if($insert_query_run)
            {
                $_SESSION['message']= "Registered Successfully";
                header('Location: ../login.php');
            }
            else
            {
                $_SESSION['message']= "Something went wrong";
                header('Location: ../register.php');
            }
        }
        else
        {
            $_SESSION['message']="Password do not match";
            header('Location: ../register.php');
        }

}
else if(isset($_POST['login_btn']))
{
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    $login_query = "SELECT * FROM registration1 WHERE Email = '$Email' AND Password = '$Password' ";
    $login_query_run = mysqli_query($con, $login_query);
    
    if(mysqli_num_rows($login_query_run)>0)
    {
        $_SESSION['auth'] = true;
        
        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['ID'];
        $Username1 = $userdata['Full_Name'];
        $Useremail = $userdata['Email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'Full_Name' =>$Username1,
            'Email' =>$Useremail
        ];

        $_SESSION['role_as'] = $role_as;
        if($role_as==1)
        { 
        $_SESSION['message'] = "Wellcome to Dashboard";
        header('Location: ../admin.php');
        }
        else
        {    

        $_SESSION['message'] = "Logged In Sucessfully";
        header('Location: ../index.php');
        }
    } 
    else
    {
        $_SESSION['message'] = " Invalid Credentials";
        header('Location: ../login.php');
    }
}
?>