<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah data yang diperlukan sudah tersedia
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phonenumber"]) && isset($_POST["message"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phonenumber"];
        $message = $_POST["message"];

        // Konfigurasi email
        $to = "binnkoseiji@gmail.com"; // Ganti dengan alamat email Anda
        $subject = "Pesan dari $name";
        $headers = "From: $email";

        // Isi email
        $email_body = "Nama: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Nomor Telepon: $phone\n\n";
        $email_body .= "Pesan:\n$message";

        // Kirim email
        if (mail($to, $subject, $email_body, $headers)) {
            echo "Pesan Anda Telah Berhasil Di Kirim...";
        } else {
            echo "Maaf, pesan Anda tidak dapat dikirim. Silakan coba lagi nanti.";
        }
    } else {
        echo "Data yang diperlukan belum lengkap. Harap isi semua kolom.....";
    }
}
?>