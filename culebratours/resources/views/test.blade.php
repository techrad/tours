@php
use CodeItNow\BarcodeBundle\Utils\QrCode;

$qrCode = new QrCode();
$qrCode
  
    ->setText('QR code by codeitnow.in')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('Scan Qr Code')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;
echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';


use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;

$barcode = new BarcodeGenerator();
$barcode->setText("0123456789");
$barcode->setType(BarcodeGenerator::Code128);
$barcode->setScale(2);
$barcode->setThickness(25);
$barcode->setFontSize(10);
$code = $barcode->generate();

echo '<img src="data:image/png;base64,'.$code.'" />';

use Illuminate\Support\Facades\Redis;
$data = new Redis();


Redis::set(
    'name', 'Taylor'

);
 
$values = Redis::lrange('names', 5, 10);
$values = Redis::get('name');
print_r($values);
@endphp


@auth hello User @endauth
@guest hello guest @endguest