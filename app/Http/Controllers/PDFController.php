<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($id)
    {
        $data = Order::find($id);
 
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
    
        // return $pdf->download('invoice.pdf');

        return view('pdf.invoice', compact('data')); 
    }
}
