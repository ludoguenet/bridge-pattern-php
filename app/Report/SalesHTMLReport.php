<?php

declare(strict_types=1);

namespace App\Report;

class SalesHTMLReport
{
    public function __invoke(string $data)
    {
        return $data;
    }
}
