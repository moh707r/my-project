<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
  // اتصال قاعدة البيانات ب mysqli
// إنشاء الاتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
//اتصال ب قاعدة ب البيانات ب PDO
try {
    // إنشاء الاتصال
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//اتصال ب قاعدة ب البيانات ب mysql اتصال قديم ب قاعدة البيانات


// إنشاء الاتصال
$conn = mysql_connect($servername, $username, $password);

// التحقق من الاتصال
if (!$conn) {
    die("Connection failed: " . mysql_error());
}
echo "Connected successfully";
?>

