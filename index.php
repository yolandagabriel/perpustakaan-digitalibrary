<?php
require('config/auth.php');
$cek = new Auth;

require('layouts/auth/header.php');
if (!isset($_GET['page'])) {
    echo "<script>";
    echo "window.location.href = 'index.php?page=login';";
    echo "</script>";
}

if ($_GET['page'] == 'login') {
    require('login.php');
} elseif ($_GET['page'] == 'register') {
    require('register.php');
} elseif ($_GET['page'] == 'registerPetugas') {
    $data['Username'] = $_POST['Username'];
    $data['Password'] = $_POST['Password'];
    $data['Email'] = $_POST['Email'];
    $data['NamaLengkap'] = $_POST['NamaLengkap'];
    $data['Alamat'] = $_POST['Alamat'];
    $cek->registerPetugas($data);
} elseif ($_GET['page'] == 'hapuspetugas') {
    $cek->hapuspetugas($_GET['UserID']);
} elseif ($_GET['page'] == 'edipetugas') {
    $UserID = $_POST['UserID'];
    $fung->editpetugas($UserID);
} elseif ($_GET['page'] == 'updatepetugas') {
    $UserID = $_POST['UserID'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $NamaLengkap = $_POST['NamaLengkap'];
    $Alamat = $_POST['Alamat'];
    $fung->updatedatabuku($UserID, $Username, $Password, $Email, $NamaLengkap, $Alamat);
} elseif ($_GET['page'] == 'postlogin') {
    $cek->login($_POST['Email'], $_POST['Password']);
} elseif ($_GET['page'] == 'postRegist') {
    $data['Username'] = $_POST['Username'];
    $data['Password'] = $_POST['Password'];
    $data['Email'] = $_POST['Email'];
    $data['NamaLengkap'] = $_POST['NamaLengkap'];
    $data['Alamat'] = $_POST['Alamat'];
    $cek->register($data);
} elseif ($_GET['page'] == 'logout') {
    $cek->logout();
}

require('layouts/auth/footer.php');
