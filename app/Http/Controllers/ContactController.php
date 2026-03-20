<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    /**
     * Store a newly created contact message.
     */
    public function store(Request $request)
    {
        // 1. Honeypot Spam Protection
        // bots often fill all fields in a form. 
        // 'website' is a hidden field that human users won't see or fill.
        if ($request->filled('website')) {
            return redirect()->back()->with('success', 'Transmission received (simulated)!');
        }

        // 2. Rate Limiting
        // Allow 3 messages per hour per IP address
        $key = 'contact-form:' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return redirect()->back()
                ->withInput()
                ->withErrors(['message' => "Too many transmissions. Please wait {$seconds} seconds before your next deployment."]);
        }

        // 3. Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 4. Persistence
        Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'status' => 'unread',
            'ip_address' => $request->ip(),
        ]);

        // Increment rate limiter
        RateLimiter::hit($key, 3600);

        return redirect()->back()->with('success', 'Transmission received! Our team will process your request shortly.');
    }
}
