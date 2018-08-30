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

        $pdf->AddPage();
        
        $imgdata1 = file_get_contents(public_path($discount->code1));
        $pdf->Image('@'.$imgdata1, 60);
        $imgdata2 = file_get_contents(public_path($discount->code2));
        $pdf->Image('@'.$imgdata2, 60, 100);
        $imgdata3 = file_get_contents(public_path($discount->code3));
        $pdf->Image('@'.$imgdata3, 60, 200);
        $pdf->Output('Cupones.pdf', 'I');
    }

    public function download($discount)
    {
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
