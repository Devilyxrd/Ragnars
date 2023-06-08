<?php

if (isset($_SESSION['userAccount'])) {

     $adminHash = $_SESSION['userAccount'];
 
     $adminQry = $db->query("SELECT * FROM `219f2_users` WHERE hash = '$adminHash'");
 
     while ($adminData = $adminQry->fetch()) {
         $adminName = $adminData['name'];
         $adminSurname = $adminData['surname'];
         $adminHash = $adminData['hash'];
     }
 
     $loginTime = date("y.m.d H:i:s");
 
     $lastLoginTime = $_SESSION['lastLoginTime'];
 
     $query = "INSERT INTO 219f2_logs (message, type, date, hash) VALUES ('$adminName $adminSurname başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '$loginTime', '$adminHash')";
     $db->query($query);
 
     $_SESSION['lastLoginTime'] = $loginTime;
}

?>