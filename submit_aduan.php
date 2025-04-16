<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 1. Connect to database
$conn = new mysqli("localhost", "root", "", "tha");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Process form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $no_unit = $_POST['no_unit'];
    $tajuk_aduan = $_POST['tajuk_aduan'];
    $no_tel = $_POST['no_tel'];
    $aduan = $_POST['aduan'];

    // 3. Insert into database (no ID column used)
    $stmt = $conn->prepare("INSERT INTO aduan (Nama, `No.unit`, `Tajuk aduan`, `No.Tel`, Aduan) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $no_unit, $tajuk_aduan, $no_tel, $aduan);

    if ($stmt->execute()) {
        echo "<script>
            alert('Aduan anda telah dihantar. Terima kasih!');
            window.location.href = 'services.html'; 
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>