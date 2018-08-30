<?php

namespace App\Http\Controllers;

use App\Discount;
use App\PDF;

class PdfCouponController extends Controller
{
    public function index($discount)
    {
        $discount = Discount::findOrFail($discount);

        $pdf = new PDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetAuthor('Cupones');
        $pdf->SetTitle('Cupones');
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


        $pdf->AddPage();

        $logoSalva = file_get_contents(public_path("/assets_web/img/saval-color-pdf.svg"));
        //$pdf->ImageSVG('@'.$logoSalva, 45, 60);
        $logoBienestar = file_get_contents(public_path("/assets_web/img/bienestar.jpg"));
        $pdf->Image('@'.$logoBienestar, 45, 60);
        $saludo = file_get_contents(public_path("/assets_web/img/pdf-saludo.jpg"));
        $pdf->Image('@'.$saludo, 45, 28);
        $imgdata1 = file_get_contents(public_path($discount->code1));
        $pdf->Image('@'.$imgdata1, 150, 120, 50);
        $imgdata2 = file_get_contents(public_path($discount->code2));
        $pdf->Image('@'.$imgdata2, 150, 170, 50);
        $imgdata3 = file_get_contents(public_path($discount->code3));
        $pdf->Image('@'.$imgdata3, 150, 220, 50);

        $txt = 'Programa válido del: 01/03/2018 al 31/12/2018';
        $pdf->SetFont('Helvetica', '', 8);
        $pdf->setFontSubsetting(true);

        //$pdf->Write(0, $txt, '', 0, '', false, 0, false, false, 0);

        $pdf->RoundedRect(45, 239, 80, 10, 3, '0010');

        $pdf->Output('Cupones.pdf', 'I');
    }

    public function download($discount)
    {
        return response()->download(public_path('cupon.pdf'));
        $discount = Discount::findOrFail($discount);

        $pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetAuthor('Cupones');
        $pdf->SetTitle('Cupones');
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->AddPage();

        $imgdata1 = file_get_contents(trim($discount->code1));
        $pdf->Image('@'.$imgdata1, 60);
        $imgdata2 = file_get_contents(trim($discount->code2));
        $pdf->Image('@'.$imgdata2, 60, 100);
        $imgdata3 = file_get_contents(trim($discount->code3));
        $pdf->Image('@'.$imgdata3, 60, 200);
        $pdf->Output('Cupones.pdf', 'D');
    }

    public function print($discount)
    {
        return response()->redirectTo(url('cupon.pdf'));
        $discount = Discount::findOrFail($discount);

        $pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetAuthor('Cupones');
        $pdf->SetTitle('Cupones');
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->AddPage();

        $imgdata1 = file_get_contents(trim($discount->code1, '/'));
        $pdf->Image('@'.$imgdata1, 60);
        $imgdata2 = file_get_contents(trim($discount->code2, '/'));
        $pdf->Image('@'.$imgdata2, 60, 100);
        $imgdata3 = file_get_contents(trim($discount->code3, '/'));
        $pdf->Image('@'.$imgdata3, 60, 200);
        $pdf->IncludeJS('print(true);');
        $pdf->Output('Cupones.pdf', 'I');
    }
}
