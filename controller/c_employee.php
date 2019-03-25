<?php
$data=array();
flexible_function($data);
function flexible_function(&$data){
    $function= "login";
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function =$action;
    }
   echo $function($data); 
}
function view(&$data){
    $data['page']='employee/view'; 
    $data['employee_data']= m_get_data();
}
function add(&$data){
    $data['page']='employee/add';
    $data['add_data']=m_insert_data();
}
function delete(&$data){      
    $delete_data= m_delete_data();
    if($delete_data){
        header('location:index.php?action=view');
    }
}
function update(&$data){
    $data['employee_data']=m_detail_data();
    $data['page']='employee/update';
}
function edit(){
    $id=$_GET['id'];
    $data['page']='employee/update';
    $data= m_update_data($_POST);
    if($data){
        $action='view';
    }else{
        $action= 'update&id=$id';
    }
    header('location:index.php?action=view');
}
function login(&$data){
    $data['page']='employee/login';
}
function validate(&$data){
   loginForm();
}
function logout(&$data){
    logoutForm();
}
function register(&$data)
{
    $data['page'] = 'employee/register';
    $data['add_user'] = register_form();
    if ($data['add_user']) {
        header('location:index.php?action=login');
    } else {
        echo "Cannot";
    }
}
function viewUser(&$data){
    $data['page']='user/viewUser';
    $data['user_data']=m_get_user();
}
function addUser(&$data){
    $data['page']='user/addUser';
    $data['add_user']=register_form();
    if ($data['add_user']) {
        header('location:index.php?action=viewUser');
    } else {
        echo "Cannot";
    }
}

function updateUser(&$data){
    $data['user_data']=m_detail_user();
    $data['page']='user/updateUser';
}
function editUser(){
    $id=$_GET['id'];
    $data['page']='user/updateUser';
    $data = m_updateUser($_POST);
    if($data){
        $action='viewUser';
    }else{
        $action='updateUser&id=$id';
    }
    header('location:index.php?action=viewUser');
}

function deleteUser(&$data){      
    $delete_user= m_delete_user();
    if($delete_user){
        header('location:index.php?action=viewUser');
    }
}
?>