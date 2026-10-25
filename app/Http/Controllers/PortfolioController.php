<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display the main portfolio page.
     */
    public function index()
    {
        $portfolio = config('portfolio');

        return view('portfolio.index', compact('portfolio'));
    }

    /**
     * Handle incoming contact inquiries.
     */
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ]);

        $validated['ip_address'] = $request->ip();

        $saved = ContactMessage::create($validated);

        try {
            $subject = Str::limit(preg_replace('/\s+/', ' ', $saved->subject ?: 'New message'), 80);

            $body = "New message from your portfolio\n\n"
                . "Name: {$saved->name}\n"
                . "Email: {$saved->email}\n"
                . 'Phone: ' . ($saved->phone ?: '-') . "\n"
                . "IP: {$saved->ip_address}\n\n"
                . $saved->message;

            Mail::raw($body, function ($mail) use ($saved, $subject) {
                $mail->to(config('mail.from.address'))
                    ->replyTo($saved->email, $saved->name)
                    ->subject('Portfolio: ' . $subject);
            });
        } catch (\Throwable $e) {
            Log::error('Contact mail failed: ' . $e->getMessage());
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for reaching out, ' . e($validated['name']) . '! Your message has been received.',
            ]);
        }

        return redirect()->to(url()->previous() . '#contact')
            ->with('success', 'Thank you for reaching out! Your message has been safely recorded, and Carl will get back to you promptly.');
    }

    /**
     * Homelab live status telemetry endpoint.
     */
    public function rackStatus()
    {
        return response()->json([
            'node' => 'dell-optiplex-proxmox',
            'uptime' => '42 days, 16 hours, 28 mins',
            'cpu_usage' => rand(12, 28) . '%',
            'ram_usage' => '5.8G / 16G (36%)',
            'storage_health' => '100% SMART OK',
            'temp' => rand(38, 44) . '°C',
            'tunnel_status' => 'Cloudflare Zero Trust Ingress Active',
            'timestamp' => now()->toIso8601String(),
        ]);
    }
}