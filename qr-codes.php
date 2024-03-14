<?php

require_once 'vendor/autoload.php'; // Include the QR code library

// Your website URL (replace with your actual URL)
$websiteUrl = 'https://example.com';

// Generate the QR code
$qrCode = new Endroid\QrCode\QrCode($websiteUrl);
$qrCode->setSize(300); // Set the size of the QR code
$qrCode->setPadding(10);
$qrCode->setErrorCorrection('high');

// Save the QR code image to a file (optional)
$qrCode->writeFile('qr_code.png');

// Display the QR code image (optional)
header('Content-Type: image/png');
echo $qrCode->writeString();
?>


