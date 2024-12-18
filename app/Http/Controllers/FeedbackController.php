<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Menyimpan data feedback ke database
        Feedback::create($validated);

        // Redirect atau memberikan respons sukses
        return redirect()->back()->with('success', 'Terimakasih Atas Masukannya');
    }
}
