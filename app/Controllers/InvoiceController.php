<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\Invoice;
use App\View;

class InvoiceController
{
    public function index(): View
    {
        $invoices = (new Invoice())->getAll();

        return View::make('pages/invoices', [
            'title' => 'Invoices Page',
            'invoices' => $invoices
        ]);
    }
}