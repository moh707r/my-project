<?php
if (isset($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    echo "نتائج البحث عن: " . $search;
} else {
    echo "لم يتم إدخال كلمة بحث.";
}
?>

// #################################################################
    //POST
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        if ($username === "admin" && $password === "1234") {
            echo "تم تسجيل الدخول بنجاح!";
        } else {
            echo "اسم المستخدم أو كلمة المرور غير صحيحة.";
        }
    } else {
        echo "يرجى ملء جميع الحقول.";
    }
}
?>