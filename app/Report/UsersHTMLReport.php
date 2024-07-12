<?php

declare(strict_types=1);

namespace App\Report;

use Dompdf\Dompdf;

class UsersHTMLReport
{
    public function __invoke(string $data)
    {
        return $data;
    }
}
