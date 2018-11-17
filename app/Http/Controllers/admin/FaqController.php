<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $questions = Faq::where('faq_status', '==', 0)->get();
        return view('viseny.faq', compact('questions'));
    }

    public function store(Request $request)
    {
        $question = Faq::create([
            'faq_fullName' => $request->input('faqFullName'),
            'faq_email' => $request->input('faqEmail'),
            'faq_title' => $request->input('faqTitle'),
            'faq_category' => $request->input('faqCategory'),
            'faq_caption' => $request->input('faqCaption'),
        ]);
        if ($question && $question instanceof Faq) {
            return back()->with('status', 'سوال شما با موفقیت ارسال گردید...!');
        }
    }

    public function adminIndex()
    {
        if (Auth::check()) {
            $questions = Faq::get();
            return view('faq.list', compact('questions'));
        } else {
            return redirect()->route('login');
        }
    }

    public function delete(Request $request, $faq_id)
    {
        if (Auth::check()) {
            $faqResult = Faq::find($faq_id);
            $deleteResult = $faqResult->delete();
            if ($deleteResult) {
                return back()->with('status', 'سوال با موفقیت حذف شد...!');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function adminStore(Request $request)
    {
        if (Auth::check()) {
            $faq = Faq::create([
                'faq_fullName' => $request->input('userFullName'),
                'faq_email' => $request->input('userEmail'),
                'faq_title' => $request->input('questionTitle'),
                'faq_category' => $request->input('questionCategory'),
                'faq_caption' => $request->input('questionCaption'),
                'faq_status' => 1,
            ]);
            if ($faq && $faq instanceof Faq) {
                return back()->with('status', 'سوال شما با موفقیت ارسال گردید...!');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function answer(Request $request, $faq_id)
    {

    }
}
