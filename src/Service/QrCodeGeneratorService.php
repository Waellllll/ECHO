<?php
namespace App\Service;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\OpenSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
class QrCodeGeneratorService
{
    public function generateQrCode(string $data,int $id){
        $qrCodePath='uploads/qrcode/materiel_'.$id.'.png';
        if(file_exists($qrCodePath)){
            return $qrCodePath;
        }
        $builder = new Builder(
            writer: new PngWriter(),
            writerOptions: [],
            validateResult: false,
            data: $data,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::High,
            size: 300,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin,
            logoPath: '',
            logoResizeToWidth: 0,
            logoPunchoutBackground: false,
            labelText: '',
            labelFont: new OpenSans(20),
            labelAlignment: LabelAlignment::Center
        );
        $result = $builder->build();
        $result->saveToFile($qrCodePath);

        return $qrCodePath;
    }
}