<?php

declare(strict_types=1);

namespace App\Report;

use App\Report\AbstractReport;

class SalesReport extends AbstractReport
{
    public function generateReport(string $data)
    {
        return $this->report->generate($data);
    }
}
