<?php
// بيانات الاتصال بقاعدة البيانات - غيّرها ببياناتك من InfinityFree
$host = "sql110.infinityfree.com";      // اسم السيرفر (Hostname)
$user = "if0_42443222";                // اسم المستخدم
$pass = "Nn123456aa";           // كلمة المرور
$dbname = "if0_42443222_control";   // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
