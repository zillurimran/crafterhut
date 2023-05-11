<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request)
    {

      Quote::create($request->except('_token', 'email') + ['created_at' => now()]);

      return redirect()->route('frontend.message')->withSuccess('Quote Submitted');

    }

    public function index()
    {
        $quotes = Quote::latest()->get();
        return view('admin.quotes.index', compact('quotes'));
    }

    public function destroy($id)
    {
        Quote::find($id)->delete();
        return redirect()->back()->withSuccess('Quote Deleted');
    }
}
