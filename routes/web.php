<?php

use App\Report\HtmlReport;
use App\Report\PdfReport;
use App\Report\SalesHTMLReport;
use App\Report\SalesPdfReport;
use App\Report\SalesReport;
use App\Report\UsersHTMLReport;
use App\Report\UsersPdfReport;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('generate-reports', function () {
//    return (new UsersHTMLReport)('<h1>Users Report</h1>');
//    return (new SalesHTMLReport)('<h1>Sales Report</h1>');
//    return (new UsersPdfReport)('<h1>Users Report</h1>');
//    return (new SalesPdfReport())('<h1>Sales Report</h1>');
});
