<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'message' => 'required|string|max:300',
        ]);

        Feedback::create($request->all());

        return back()->with('success', 'Terima kasih atas feedback Anda!');
    }

    public function showAll()
    {
        $feedbacks = Feedback::latest()->get();
        return view('user.guest.feedbacks-result', compact('feedbacks'));
    }
}
