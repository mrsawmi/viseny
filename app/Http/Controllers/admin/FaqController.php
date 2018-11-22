<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\DemoMail;
use App\Models\Faq;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $questions = Faq::where('faq_status', '=', 3)->get();
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
            $questions = Faq::where('faq_status', '!=', 0)->get();
            return view('faq.list', compact('questions'));
        } else {
            return redirect()->route('login');
        }
    }

    public function usersQuestions()
    {
        if (Auth::check()) {
            $usersQuestions = Faq::where('faq_status', '!=', 3)->get();
            return view('faq.userslist', compact('usersQuestions'));
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
                'faq_fullName' => Auth::user()->user_fullName,
                'faq_email' => Auth::user()->email,
                'faq_title' => $request->input('questionTitle'),
                'faq_category' => $request->input('questionCategory'),
                'faq_answer' => $request->input('questionAnswer'),
                'faq_caption' => $request->input('questionCaption'),
                'faq_status' => 3,
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
        if (Auth::check()) {
            $faqs = Faq::find($faq_id);
            if (!empty($faqs))
                return view('faq.answer', compact('faqs'));
        } else {
            return redirect()->route('login');
        }
    }

    public function sendAnswer(Request $request, $faq_id)
    {
        if (Auth::check()) {
            $faq = Faq::find($faq_id);
            $email = $request->input('faqEmail');
            if ($request->input('questionPublish') == 'ارسال ایمیل به کاربر') {
                Mail::to($email)->send(new DemoMail());
                if ($faq && $faq instanceof Faq) {
                    $statusData = [
                        'faq_status' => 2,
                        'faq_answer' => $request->input('questionAnswer'),
                    ];
                }
                $updateResult = $faq->update($statusData);
                if ($updateResult) {
                    return redirect()->route('admin.faq')->with('status', 'پاسخ ارسال گردید...!');
                }
            } else {
                Mail::to($email)->send(new DemoMail());
                if ($faq && $faq instanceof Faq) {
                    $statusData = [
                        'faq_status' => 3,
                        'faq_answer' => $request->input('questionAnswer'),
                    ];
                }
                $updateResult = $faq->update($statusData);
                if ($updateResult) {
                    return redirect()->route('admin.faq')->with('status', 'پاسخ ارسال گردید و در بخش سوالات منتشر شد...!');
                }
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function adminCreate()
    {
        return view('faq.create');
    }
}
