<?php

try
{

    $dsn = 'mysql:host=94.73.147.156;dbname=u0198406_db947;charset=utf8';
    $user = 'u0198406_web';
    $password = 'IPwl59G3CUou33L';

    try
    {
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        echo 'Connection failed: ' . $e->getMessage();
    }
}
catch (PDOException $e)
{
    echo "Connection failed : ". $e->getMessage();
}

?>
<?php

$eposta = htmlspecialchars(trim($_POST['mail']));
$konu = htmlspecialchars(trim($_POST['surname']));
$mesaj = htmlspecialchars(trim($_POST['comments']));

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer();

$mail->Host = 'smtp.mimarsinemkok.com';
$mail->Username = 'info@mimarsinemkok.com';
$mail->Password = 'XG@1.QpegS8d62=.';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPSecure = 'ssl';
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->isHTML(true);
$mail->CharSet = "UTF-8";
$mail->setLanguage('tr', 'language/');
$mail->SMTPDebug  = 2;
$mail->setFrom('gonderenmailadresi@hotmail.com', 'Muhammed Yaman');
$mail->addAddress('alanmailadresi@hotmail.com', 'Yaman Muhammed');
$mail->Subject = 'Örnek mail konusu';
$mail->Body =
    '
	<html>
		<head>
		</head>
		<body>
			<h1>Test edilen mail mesaj içerikteki başlik yeni</h1>
			<p>Bu bir test mail icerigi.</p>
		</body>
	</html>
';


$mail_gonder = $mail->send();
if($mail_gonder)
{
    echo 'Mail başarıyla gönderildi';
}else
{
    echo 'Mail gönderilemedi. Mail hata mesajı: '.$mail->ErrorInfo;
}
?>