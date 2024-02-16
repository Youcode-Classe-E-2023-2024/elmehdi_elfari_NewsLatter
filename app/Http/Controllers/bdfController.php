<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Barryvdh\DomPDF\PDF;

class bdfController extends Controller
{
    public function generatePdf()
    {
        $subscribers = Subscriber::all();

        // Instantiate an instance of the PDF class
        $pdf = app('dompdf.wrapper');

        // Use the loadView method on the instance
        $pdf->loadView('tabaleSubscribe', compact('subscribers'));

        // Use the stream or download method to output the PDF
        return $pdf->download('subscribers.pdf');
    }
}
