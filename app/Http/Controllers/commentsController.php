<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentsController extends Controller
{
    public function index()
    {
        $comments = comment::with('users')->get();
        return view('comments.list', compact('comments'));
    }

    public function store(Request $request)
    {
        if (Auth::guest()) {
            $comment = comment::create([
                'comment_author' => $request->input('userCommentName'),
                'comment_email' => $request->input('userCommentEmail'),
                'comment_content' => $request->input('userCommentContent')
            ]);
            return back()->with('status', 'دیدگاه با موفقیت ثبت گردید');
        }
    }

    public function delete(Request $request, $comment_id)
    {
        $comment = comment::find($comment_id);
        $commentDeleteResult = $comment->delete();
        if ($commentDeleteResult) {
            return back()->with('status', 'دیدگاه با موفقیت حذف گردید');
        }
    }

    public function confirm(Request $request, $comment_id)
    {
        $comment = comment::find($comment_id);
        if ($comment && $comment instanceof comment) {
            if ($request->input('deleteValue') != $comment->comment_status) {
                $commentData = [
                    'comment_status' => 1
                ];
                $updateResult = $comment->update($commentData);
                if ($updateResult) {
                    return redirect()->route('admin.comment')->with('status', 'دیدگاه اکنون قابل مشاهده است!');
                }
            } else {
                $commentData = [
                    'comment_status' => 0
                ];
                $updateResult = $comment->update($commentData);
                if ($updateResult) {
                    return redirect()->route('admin.comment')->with('status', 'دیدگاه اکنون غیرقابل مشاهده است!');
                }
            }
        }
    }
}
