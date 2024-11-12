<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
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
            ]);
        }

        return response()->json([
            'status' => 'error',
            'msg' => 'Validation failed!',
        ], 422);
    }
}
