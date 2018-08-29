<?php
namespace App;


class PDF extends \TCPDF
{
    public function Header() {
        $this->Rect(0, 0, 2000, 9,'F',array(),array(40, 112, 189));
    }

    public function Footer() {
        $this->Rect(0, 290, 2000, 20,'F',array(),array(40, 112, 189));
        $this->SetY(-9);
        // Set font
        $this->SetFont('helvetica', '', 10);
        $this->SetTextColor(255,255,255);
        // Page number
        $this->Cell(0, 10, 'www.saval.cl / © 2018 SAVAL. All rights reserved.', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}