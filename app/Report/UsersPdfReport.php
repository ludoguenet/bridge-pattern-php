<?php

declare(strict_types=1);

namespace App\Report;

use Dompdf\Dompdf;

class UsersPdfReport
{
    public function __invoke(string $data)
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($data);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
