<?php

$hash = $_SESSION['userAccount'];

$qry = $db->query("SELECT * FROM `219f2_users` WHERE hash = '$hash'");

$count = $qry->rowCount();

while ($data = $qry->fetch()) {
    $acccess = $data['accessLevel'];
    $name = $data['name'];
    $surname = $data['surname'];
    $email = $data['email'];
    $tc = $data['tc'];
    $hash = $data['hash'];
    $accountType = $data['accountType'];
}

$date = date('y.m.d H:i:s');

$account = "";
$newTc = "";

if($accountType == "customer"){
    $account = "Müşteri";
} else if($accountType == "business"){
    $account = "İşletme Hesabı";
} else if($account == "admin"){
    $account = "Admin";
} else {
    $account = "Yetki Tanımlanamadı";
}

if($tc == null){
    $newTc = "Tc Yok";
} else {
    $newTc = $tc;
}

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$ipCheck = $db->query("SELECT * FROM `219f2_blacklist` WHERE ip = '$ip'");
$ipCount = $ipCheck->rowCount();

if ($ipCount == 1)
{
    http_response_code(500);
    exit;
    die;
}

$login_time = date('y.m.d H:i:s');

if (empty($hash) || $count != 1 || $acccess < 1) {
    $accessLogger = $db->query("INSERT INTO 219f2_logs (message, type, date) VALUES ('Başarısız giriş denemesi. Engellenen IP adresi: $ip $name $surname $email', 'Admin Yetkisiz Hesap', '$login_time')");
    $blacklistqry = $db->query("SELECT * FROM `219f2_blacklist` WHERE ip = '$ip'");
    $blacklistCount = $blacklistqry->rowCount();
    if ($blacklistCount != 1)
    {
        $blacklist = $db->query("INSERT INTO 219f2_blacklist (ip,tc,name,surname,email,hash,accountType,bannedDate) VALUES ('$ip','$newTc','$name','$surname','$email','$hash','$account','$date')");
    }
    echo "

    İzinsiz erişim tespit edildi. Lütfen doğru izinlere sahip olduğunuzdan emin olun.
    
    <br><br>

    Bu site, kullanıcılarının güvenliği için IP adreslerini otomatik olarak kaydediyor. Bu işlem, güvenlik açıklarını tespit etmek ve saldırılara karşı önlem almak için yapılmaktadır. <br><br>

    Kaydedilen IP adresiniz: $ip <br><br>

    Diğer Bilgiler: $name $surname , $email <br><br>

    Bu bilgi, yalnızca site yöneticileri tarafından görüntülenebilir ve yasal prosedürler gerektirdiği durumlarda yetkili makamlara sunulabilir. <br><br>

    Güvenli bir deneyim sunmak için tüm önlemleri aldığımızı belirtmek isteriz. Herhangi bir sorunuz veya endişeniz varsa, lütfen bizimle iletişime geçmekten çekinmeyin. <br><br>

    Devilyxrd Backend ve Güvenlik Sistemleri İyi ve Mutlu Günler Diler XD
    ";
    exit;
}
