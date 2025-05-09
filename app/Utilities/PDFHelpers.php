<?php
namespace App\Utilities;

use Illuminate\Support\Facades\Storage;
use Mpdf\Mpdf;

class PDFHelpers
{
    public const MONTSERRAT_FONT_DIR = __DIR__ . '/../../resources/fonts/montserrat';
    public const CSS_FILE_DIR = __DIR__ . '/../../resources/css/';
    public const CRYP_OWNER_PASS = 'PDF_CRYPT_PASS';
    public const CRYP_OWNER_PASS_2 = 'PDF_CRYPT_PASS_2';

    public static function getLetterConfig() {
        $fontDir = self::MONTSERRAT_FONT_DIR;
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];
        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        return [
            'fontDir' => array_merge($fontDirs, [
                $fontDir
            ]),
            'fontdata' => $fontData + [
             'montserrat' => [
                'R' => 'Montserrat-Regular.ttf',
                'B' => 'Montserrat-Bold.ttf'
            ],
            ],
            "mode" => "",

            "format" => "A4",
            "default_font_size" => 12.5,
            "default_font" => "montserrat",
            "margin_left" => 5,
            "margin_right" => 5,
            "margin_top" => 10,
            "margin_bottom" => 5,
            "margin_header" => 5,
            "margin_footer" => 8
        ];
    }

    /**
     * Generate a PDF doc with the `html` param value as file content and using the `fileName` param as the file name
     * @param string $html => content for the file
     * @param string $fileName => desired name for the file. Use the `.pdf` at the end is optional
     * @param array $options => array{array 'permissions' => array['print', 'copy', 'modify', 'annot-forms', 'fill-forms', 'extract', 'assemble', 'print-highres'], string 'user_pass', string 'owner_pass'}
     * @return string => file content
     */
    public static function makeLetterPDF(string $html, string $fileName, array $options, string $styleFile = 'app.css') {
        $mpdf = new Mpdf($options['file_config']);

        if($options['user_pass']) {
            $mpdf->SetProtection($options['permissions'] ?? [], $options['user_pass'], $options['owner_pass'], 128);
        }

        $mpdf->setAutoTopMargin = 'stretch';
        $mpdf->setAutoBottomMargin = 'stretch';
        $mpdf->SetDefaultBodyCSS('font-size', '12.5px');
        $mpdf->SetDefaultBodyCSS('color', '#000000');

        $stylesheet = file_get_contents(PDFHelpers::CSS_FILE_DIR . $styleFile);

        $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

 // 🔑 Establece un pie de página global con numeración de páginas
        $mpdf->SetHTMLFooter('<div style="text-align: center; font-size: 10px;">Página {PAGENO} de {nbpg}</div>');

        $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

        if(!str_contains($fileName, '.pdf')) { $fileName = "{$fileName}.pdf"; }

        // $mpdf->Output(Storage::path("public/{$fileName}"), 'F');

        return $mpdf->Output(Storage::path("public/{$fileName}"), 'S');
    }
}
