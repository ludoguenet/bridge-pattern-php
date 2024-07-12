<?php

declare(strict_types=1);

namespace App\Report;

use App\Report\ReportInterface;
use Dompdf\Dompdf;

class PdfReport implements ReportInterface
{
    public function generate(string $data)
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($data);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
