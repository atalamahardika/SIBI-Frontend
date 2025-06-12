<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Http;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landing()
    {
        $feedbacks = Feedback::latest()->get(); // Ambil semua feedback
        return view('landing', compact('feedbacks')); // Kirim ke view
    }

    public function classify(Request $request)
    {
        $image = $request->file('image');

        $response = Http::attach(
            'file',
            file_get_contents($image),
            $image->getClientOriginalName()
        )->post('https://sibi-backend-production.up.railway.app/predict');

        $result = $response->json();
        return response()->json($result);
    }

}
