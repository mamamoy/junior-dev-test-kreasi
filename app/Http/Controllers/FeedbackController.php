<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FeedbackController extends Controller
{
    public function index(){
        return Inertia::render('Feedback', [
            'feedbacks' => Feedback::latest()->get()
        ]);
    }

    public function apiFeedback(){
        return response()->json(Feedback::latest()->get());
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'description' => 'required|string',
        ]);

        if ($validated) {
            $feedback = Feedback::create($request->all());
            return response()->json([
                'status' => 'success',
                'msg' => 'Your feedback has been recorded.',
                'feedback' => $feedback,
            ]);
        }

        return response()->json([
            'status' => 'error',
            'msg' => 'Validation failed!',
        ], 422);
    }
}
