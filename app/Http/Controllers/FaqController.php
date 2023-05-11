<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Auth;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkAdmin');
    }

    public function index(){
        if(permissionCheck(Auth::id(),'Faq'))
        {
            $faqs = Faq::all();
            return view('admin.faq.index', compact('faqs'));
        }else{
            return abort('403');
        }
       
    }

    public function create(){ 
        if(permissionCheck(Auth::id(),'Faq'))
        {
            return view('admin.faq.create');
        }else{
            return abort('403');
        }
       
    }

    public function store(Request $request){
        $request->validate([
            'question' => 'required',
            'answer'   => 'required',
        ]);
        Faq::create($request->except('_token'));
        return redirect()->route('faq.index')->with('success', 'Added Successfully');
    }

    public function view($id){
        $faq = Faq::find($id);
        return view('admin.faq.show', compact('faq'));
    }
    
    public function edit($id){
        $faq = Faq::find($id);
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request){ 
        $request->validate([
            'question' => 'required',
            'answer'   => 'required',
        ]);

        Faq::find($request->id)->update($request->except(['_token', 'id']));
        return redirect()->route('faq.index')->with('success', 'Update Successfully');
    }

    public function destroy(Request $request){
        Faq::find($request->id)->delete();
        return back()->with('success', 'Deleted Successfully');
    }

}
