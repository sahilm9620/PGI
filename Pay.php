<?php 
$purpose = "Payment";
$amount = $_POST["amount"];
$name = $_POST["name"];
//$phone = $_POST["phone"];
$email = $_POST["email"];
include 'src/instamojo.php';
$api = new Instamojo\Instamojo('test_6620ec1c9ff2cd530b90d1ec36d', 'test_69417cae46934ed9d74d90f1d43','https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $amount,
        "buyer_name" => $name,
        "phone" => $phone,
		"email" => $email,
        "send_email" => true,
        "send_sms" => true,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://studentstutorial.com/instamojo/thankyou.php",
        "webhook" => "https://studentstutorial.com/instamojo/webhook.php"
        ));
   $pay_ulr = $response['longurl'];
    header("Location: $pay_ulr");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
 ?>