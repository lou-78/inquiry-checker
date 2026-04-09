<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Services\ClaudeService;

class InquiryController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function analyze(Request $request, ClaudeService $claudeService)
    {
        $request->validate([
            'original_text' => 'required|string',
        ]);

        $analysis = $claudeService->analyzeInquiry($request->original_text);

        $inquiry = Inquiry::create([
            'original_text' => $request->original_text,
            'category' => $analysis['category'] ?? 'Unknown',
            'priority' => $analysis['priority'] ?? 'Low',
            'country' => $analysis['country'] ?? 'Unknown',
            'summary' => $analysis['summary'] ?? 'No summary',
            'suggested_reply' => $analysis['suggested_reply'] ?? 'No reply',
        ]);

        return view('result', compact('inquiry'));
    }
    public function history()
    {
        $inquiries = Inquiry::latest()->get();

        return view('history', compact('inquiries'));
    }
}
