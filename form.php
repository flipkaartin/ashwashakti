<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    // Validate the data if needed

    // Send email
    $to = "your@example.com"; // अपना ईमेल पता यहाँ डालें
    $subject = "New Order Received";
    $message = "Name: $name\nPhone: $phone\n";

    $headers = "From: 91salesstore@gmail.com"; // अपना ईमेल पता यहाँ डालें, या इसको रिक्त छोड़ दें

    // Send the email
    mail($to, $subject, $message, $headers);

    // जेक्वेरी स्क्रिप्ट को सही तरह से प्रतिस्थापित करने के लिए सफलता का संकेत भेजें
    echo json_encode(true);
} else {
    // POST नहीं है तो त्रुटि संदेश भेजें
    echo json_encode(false);
}
?>
