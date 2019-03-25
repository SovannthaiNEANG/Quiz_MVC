<?php 

    function m_get_data(){
        $query ="SELECT  * FROM employee";
        include "connection.php";
        $result=mysqli_query($conn,$query);
        $rows = [];
        if($result && mysqli_num_rows($result)>0){
            while ($get_result_to_array=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $rows[]=$get_result_to_array;
            }
        }
        return $rows;
    }
    function m_insert_data(){
        include_once "connection.php";
        if(isset($_POST['btn-submit'])){
            $f_name=$_POST['firstname'];
            $l_name=$_POST['lastname'];
            $age=$_POST['age'];
            $salary=$_POST['salary'];
        $query= "INSERT INTO employee(firstname,lastname,age,salary) VALUES('$f_name','$l_name','$age',' $salary')";
        $result= mysqli_query($conn,$query);
        if($result){
          header('location:index.php');
        }else{
            echo "connot";
        }
        }
    }
    function m_detail_data(){
        include "connection.php";
        $query ="SELECT  * FROM employee WHERE id=".$_GET['id'];
        $result=mysqli_query($conn,$query);
        return $result;
        // var_dump($result);die();
    }
    function m_update_data($data){
        include "connection.php";
        if(isset($_POST['btn-submit'])){
            $f_name=$_POST['firstname'];
            $l_name=$_POST['lastname'];
            $age=$_POST['age'];
            $salary=$_POST['salary'];
            $query="UPDATE employee SET firstname='$f_name',lastname='$l_name',age='$age',salary='$salary' WHERE id=".$_GET['id'];
            $result=mysqli_query($conn,$query);
            // var_dump($result);
            return $result;
          
        }
        
    }
    function m_delete_data(){
        include_once "connection.php";
        $query="DELETE FROM employee WHERE id=".$_GET['id'];
        $result=mysqli_query($conn,$query);
        return $result;
    }
    function loginForm(){
    include "connection.php";
    if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location:index.php?action=view');
        }else{
            header('Location:index.php?action=login');
        }

    }

}
    }
function logoutForm(){
include "connection.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php?action=view');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php?action=login');
    }
}
function register_form(){
    include "connection.php";
    if (isset($_POST['register'])){
        $username = $_POST['username'];
        $name= $_POST['name'];
        $password = md5($_POST['password']);
        $query = "INSERT INTO user(username,name,password) VALUES ('$username','$name','$password')";
        $result = mysqli_query($conn, $query);
        return $result;
    }
}
function m_get_user(){
    $query ="SELECT  * FROM user";
    include "connection.php";
    $result=mysqli_query($conn,$query);
    $rows = [];
    if($result && mysqli_num_rows($result)>0){
        while ($get_result_to_array=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $rows[]=$get_result_to_array;
        }
    }
    return $rows;
}

function m_detail_user(){
    include "connection.php";
    $query ="SELECT  * FROM user WHERE id=".$_GET['id'];
    $result=mysqli_query($conn,$query);
    return $result;
}
function m_updateUser($data){
    include "connection.php";
    if(isset($_POST['update'])){
        $username=$_POST['username'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        $query="UPDATE user SET username='$username',name='$name',password='$password' WHERE id=".$_GET['id'];
        $result=mysqli_query($conn,$query);
        return $result;
      
    }
    
}

function m_delete_user(){
    include_once "connection.php";
    $query="DELETE FROM user WHERE id=".$_GET['id'];
    $result=mysqli_query($conn,$query);
    return $result;
}
?>